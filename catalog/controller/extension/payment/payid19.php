<?php
class ControllerExtensionPaymentPayid19 extends Controller {
	public function index() {
		$this->load->language('extension/payment/payid19');
		$data['text_title'] = $this->language->get('text_title');
		$data['button_confirm'] = $this->language->get('button_confirm');
 		return $this->load->view('extension/payment/payid19', $data);
	}
	private function setcookieSameSite($name, $value, $expire, $path, $domain, $secure, $httponly) {

        if (PHP_VERSION_ID < 70300) {
            setcookie($name, $value, $expire, "$path; samesite=None", $domain, $secure, $httponly);
        }else{
            setcookie($name, $value, array(
                'expires' => $expire,
                'path' => $path,
                'domain' => $domain,
                'samesite' => 'None',
                'secure' => $secure,
                'httponly' => $httponly
            ));


        }
    }
	private function checkAndSetCookieSameSite(){

        $checkCookieNames = array('PHPSESSID','OCSESSID','default');

        foreach ($_COOKIE as $cookieName => $value) {
            foreach ($checkCookieNames as $checkCookieName){
                if (stripos($cookieName,$checkCookieName) === 0) {
                    $this->setcookieSameSite($cookieName,$_COOKIE[$cookieName], time() + 86400, "/", $_SERVER['SERVER_NAME'],true, true);
                }
            }
        }
    }
	public function pay() {
		$this->load->language('extension/payment/payid19');
		$this->checkAndSetCookieSameSite();
 		$this->load->model('checkout/order');
		$order_info = $this->model_checkout_order->getOrder($this->session->data['order_id']);
		$total = $this->currency->format($order_info['total'], $order_info['currency_code'], 1.00000, false);
		if($this->config->get('payment_payid19_add_fee_to_price') == "1"){
				$add_fee_to_price = "1";
		}else{
			$add_fee_to_price = NULL;
		}
		$post = array(
					'public_key' => $this->config->get('payment_payid19_public_key'),
					'private_key' => $this->config->get('payment_payid19_private_key'),
					'add_fee_to_price' => $add_fee_to_price,
					'email' => $order_info['email'],
					'price_amount' => $total,
					'price_currency' => $order_info['currency_code'],
					'order_id' => $order_info['order_id'],
					'customer_id' => $order_info['customer_id'],
					'test' => $this->config->get('payment_payid19_test'),
					'title' => $order_info['payment_firstname']." ".$order_info['payment_lastname'],
					'description' => 'OrderId: '.$order_info['order_id'],
					'callback_url' => $this->url->link('extension/payment/payid19/callback'),
					'cancel_url' =>  $this->url->link('checkout/checkout'),
					'success_url' => $this->url->link('extension/payment/payid19/success'),
		);
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, 'https://payid19.com/api/v1/create_invoice');
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($post));
		$result = curl_exec($ch);
		curl_close($ch);
		$result = json_decode($result,true);
		if($result["status"]=='success'){
			echo '<script type="text/javascript">document.location = "'.$result["message"].'";</script>';
		}else{
			$this->session->data['error'] = $this->language->get('text_error')." : ".$result["message"][0];
			echo '<script type="text/javascript">document.location = "'.$this->url->link('checkout/checkout').'";</script>';
		}	
 	}
	
	public function success() {
		$this->load->model('checkout/order');
		$order_info = $this->model_checkout_order->getOrder($this->session->data['order_id']);
		$this->model_checkout_order->addOrderHistory($this->session->data['order_id'], $this->config->get('payment_payid19_order_status_id'));	
		echo '<script type="text/javascript">document.location = "'.$this->url->link('checkout/success').'";</script>';
		 
  	}
	
	public function callback() {
		
		$data = json_decode(file_get_contents("php://input"),true); 
		
		if(isset($data["privatekey"])){
			$this->load->model('checkout/order');
			$order_id = $data["order_id"];
			$order_info = $this->model_checkout_order->getOrder($order_id);
			$comment = "Callback Result:<br><br>";
			$comment .= "#payid19_orderId: ".$data["id"]."<br>";
			$comment .= "#merchant_orderId: ".$data["order_id"]."<br>";
			$comment .= "#price_amount : ".$data["price_amount"]."<br>";
			$comment .= "#price_currency : ".$data["price_currency"]."<br>";
			$comment .= "#amount : ".$data["amount"]."<br>";
			$comment .= "#amount_currency : ".$data["amount_currency"]."<br>";
			
			
			 $logs__ = 'Payid19 Logs: ';
			 foreach($data as $key =>$val){
					$logs__ .= $key." : ".$val.' - ';
				} 
			$this->log->write($logs__);
		 
 			if($data["privatekey"] == $this->config->get('payment_payid19_private_key') ){
					$this->model_checkout_order->addOrderHistory($order_id, $this->config->get('payment_payid19_order_status_id_callback'),$comment,false);	
			}
	
			echo "OK";
		}
  	}
 }