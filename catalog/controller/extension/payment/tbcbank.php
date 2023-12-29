<?php
class ControllerExtensionPaymentTbcbank extends Controller {
	public function index() {
	    
	    $this->load->language('extension/payment/tbcbank');
	    
	    $data['button_confirm'] = $this->language->get('button_confirm');
	    
	    $this->load->model('checkout/order');
	    $this->load->model('localisation/language');

		if(!isset($this->session->data['order_id'])) {
			return false;
		}
		
		$prod = array();
		$language = 'EN';
		$data['url'] = false;
		$links = array();

		$order_info = $this->model_checkout_order->getOrder($this->session->data['order_id']);
		
		if($order_info['currency_code'] == 'GEL' || $order_info['currency_code'] == 'USD' || $order_info['currency_code'] == 'EUR') {
		    
            if(!isset($this->session->data['access_token'])) {
               $tokens = $this->getAccessToken();
               $this->session->data['access_token'] = $tokens;
            } else {
               $tokens = $this->session->data['access_token'];
            }
            
            if($tokens) {
                if($this->session->data['language'] == 'ru-ru') {
                    $language = 'RU';
                }
                
                $shipping_total = 0;
		
		        if (isset($this->session->data['shipping_method'])) {
			        $shipping_total = $this->tax->calculate($this->session->data['shipping_method']['cost'], $this->session->data['shipping_method']['tax_class_id'], $this->config->get('config_tax'));
			        $shipping_total = number_format($this->currency->convert($shipping_total,$this->config->get('config_currency'), $order_info['currency_code']), 2, '.', '');
		        }
                
                $item_total = 0;
            
                if($this->session->data['language'] == 'ka-ka') {
                    $language = 'KA';
                }
            
                foreach ($this->cart->getProducts() as $product) {
                    $product_price = number_format($this->currency->convert($product['price'], $this->config->get('config_currency'), $order_info['currency_code']), 2, '.', '');
                    $prod[] = array(
                        'Name'      =>  $product['name'],
                        'Price'     =>  number_format($this->currency->convert($product['price'], $this->config->get('config_currency'), $order_info['currency_code']), 2, '.', ''),
                        'Quantity'  =>  $product['quantity']
                    );
                    
                    $item_total += $product_price * $product['quantity'];
                }
            
                $amount = array(
                    'currency'  =>  $order_info['currency_code'],
                    'total'     =>  number_format($this->currency->convert($order_info['total'], $this->config->get('config_currency'), $order_info['currency_code']), 2, '.', ''),
                    'subTotal'  =>  number_format($item_total, 2, '.', ''),
                    'tax'       =>  0,
                    'shipping'  =>  $shipping_total
                );
        
                $data_post = array(
                    'amount'               =>  $amount,
                    'returnurl'            =>  $this->url->link('checkout/success'),
                    'userIpAddress'        =>  $order_info['ip'],
                    'expirationMinutes'    =>  '5',
                    'methods'              =>  array(5, 7),
                    'installmentProducts'  =>  $prod,
                    'callbackUrl'          =>  $this->url->link('extension/payment/tbcbank/callback'),
                    'preAuth'              =>  false,
                    'language'             =>  $language,
                    'merchantPaymentId'    =>  $this->session->data['order_id'],
                    'saveCard'             =>  false
                   // 'saveCardToDate'       =>
                );
            
                $posts = json_encode($data_post);
                //$this->log->write($posts);
                $links = $this->paymentCreate($posts, $tokens);
                
                foreach ($links as $link) {
                    if($link['method'] == 'REDIRECT') {
                        $data['url'] = $link['uri'];
                        
                    }
                }
                
                if(!$data['url']) {
                    $data['error'] = $this->language->get('error_02'); // ссылка на оплату не получена
                }
            
            } else {
                $data['error'] = $this->language->get('error_01'); // токен не получен
            }
	    
		    return $this->load->view('extension/payment/tbcbank', $data);
		}
	}

	public function confirm() {
		$json = array();
		
		if (isset($this->session->data['payment_method']['code']) && $this->session->data['payment_method']['code'] == 'tbcbank') {
			$this->load->model('checkout/order');

			$this->model_checkout_order->addOrderHistory($this->session->data['order_id'], $this->config->get('payment_tbcbank_order_confirm_status_id'));
		
			$json['redirect'] = $this->url->link('checkout/success');
		}
		
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));		
	}
	
	public function callback() {
	    
	    $pp = file_get_contents("php://input");
	    $pp = json_decode($pp);
	    if(isset($pp->PaymentId)) {
	        //$this->log->write($pp->PaymentId);
	    
	        if(!isset($this->session->data['access_token'])) {
                $tokens = $this->getAccessToken();
                $this->session->data['access_token'] = $tokens;
            } else {
                $tokens = $this->session->data['access_token'];
            }
        
            $this->paymentDetails($pp->PaymentId, $tokens);
        
            $this->sendOk();
	    }
	}
	
	private function getAccessToken() {
	    $curl = curl_init();
	    
	    $client_id = $this->config->get('payment_tbcbank_client_id');
	    $client_secret = $this->config->get('payment_tbcbank_client_secret');
	    $apikey = $this->config->get('payment_tbcbank_apikey');

	    curl_setopt_array($curl, array(
  	        CURLOPT_URL => 'https://api.tbcbank.ge/v1/tpay/access-token',
  	        CURLOPT_RETURNTRANSFER => true,
  	        CURLOPT_ENCODING => '',
  	        CURLOPT_MAXREDIRS => 10,
  	        CURLOPT_TIMEOUT => 0,
  	        CURLOPT_FOLLOWLOCATION => true,
  	        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  	        CURLOPT_CUSTOMREQUEST => 'POST',
  	        CURLOPT_POSTFIELDS => 'client_Id='.$client_id.'&client_secret='.$client_secret,
  	        CURLOPT_HTTPHEADER => array(
    	        'Content-Type: application/x-www-form-urlencoded',
    	        'apikey: '.$apikey
  	        ),
	    ));

	    $result = curl_exec($curl);

        if (curl_errno($curl) != 0 && empty($result)) {
            $this->log->write('CURL failed: ' . curl_error($curl) . '(' . curl_errno($curl) . ')');
            $result = false;
            curl_close($curl);
            return false;
        } else {
			$result = json_decode($result);
			curl_close($curl);
			if(isset($result->access_token)) {
			    return $result->access_token;
			}
        }
	}
	
	private function paymentCreate($data, $tokens) {
	    $apikey = $this->config->get('payment_tbcbank_apikey');
	    
	    $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://api.tbcbank.ge/v1/tpay/payments',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS =>$data,
          CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
            'apikey: '.$apikey,
            'Authorization: Bearer '.$tokens
          ),
        ));

        $result = curl_exec($curl);

        if (curl_errno($curl) != 0 && empty($result)) {
            $this->log->write('CURL failed: ' . curl_error($curl) . '(' . curl_errno($curl) . ')');
            $result = false;
            curl_close($curl);
            return array();
        } else {
            
            
			$result = json_decode($result);
			$results = json_decode(json_encode($result), true);
			curl_close($curl);
			if(isset($result->payId) && isset($result->links) && isset($result->httpStatusCode) && $result->httpStatusCode == '200') {
			    $this->db->query("UPDATE `" . DB_PREFIX . "order` SET payid_tbcbank = '" . $this->db->escape($results['payId']) . "', message_tbcbank = '" . $this->db->escape($results['developerMessage']) . "' WHERE order_id = '" . (int)$this->session->data['order_id'] . "'");
			    
			    return $results['links'];
			} else {
			    return array();
			}
			
        }

	}
	
	private function paymentDetails($payid, $tokens) {
	    $apikey = $this->config->get('payment_tbcbank_apikey');
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://api.tbcbank.ge/v1/tpay/payments/'.$payid,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'GET',
          CURLOPT_HTTPHEADER => array(
            'Content-Type: application/x-www-form-urlencoded',
            'apikey: '.$apikey,
            'Authorization: Bearer '.$tokens
          ),
        ));

        $result = curl_exec($curl);
        
        if (curl_errno($curl) != 0 && empty($result)) {
            $this->log->write('CURL failed: ' . curl_error($curl) . '(' . curl_errno($curl) . ')');
            $result = false;
            curl_close($curl);
            return false;
        } else {
            $result = json_decode($result);
            $results = json_decode(json_encode($result), true);

            curl_close($curl);
        
            if(isset($result->payId) && isset($result->status) && isset($result->httpStatusCode) && $result->httpStatusCode == '200') {
                $order_id = $this->payidOrder($result->payId);

                $this->load->model('checkout/order');
                if($result->status == 'Succeeded' && ($order_id)) {
                    $this->model_checkout_order->addOrderHistory($order_id, $this->config->get('payment_tbcbank_order_status_id'));
                }
                
                if($result->status == 'Failed' && ($order_id)) {
                    $this->model_checkout_order->addOrderHistory($order_id, $this->config->get('payment_tbcbank_order_fail_status_id'));
                }
                
                return 1;
            } else {
                return false;
            }
        }
	}
	
	private function payidOrder($payid) {
	    $query = $this->db->query("SELECT order_id FROM " . DB_PREFIX . "order WHERE payid_tbcbank = '" . $this->db->escape($payid) . "'");

		return $query->row['order_id'];
	}
	
	protected function sendOk() {
        //$this->log->Write('SEND OK');
        ob_start();
        echo "RESULT=OK";
        ob_end_flush();
    }
}
