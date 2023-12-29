<?php

class ControllerExtensionPaymentEnot extends Controller {

	public function index() 
	{
		$this->language->load('extension/payment/enot');
		$order_id = $this->session->data['order_id'];
		$this->load->model('checkout/order');
		$order_info = $this->model_checkout_order->getOrder($this->session->data['order_id']);

		$merchant_id = $this->config->get('payment_enot_merchant_id');
		$secret_word = $this->config->get('payment_enot_secret_word');
		$amount = number_format($order_info['total'], 2, '.', '');

		$desc = $this->language->get('order_description') . $order_id;

		$form_data = [
			'm' => $merchant_id,
			'oa' => $amount,
			'cr' => $this->session->data['currency'],
			'o' => $order_id,
			'c' => $desc,
			's' => md5($merchant_id.':'.$amount.':'.$secret_word.':'.$order_id)
		];
		
		$data['url'] = 'https://enot.io/_/pay';
		$data['form_data'] = $form_data;

		$this->load->model('checkout/order');
		if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/extension/payment/enot')) {
			return $this->load->view($this->config->get('config_template') . '/template/extension/payment/enot', $data);
		} else {
			return $this->load->view('/extension/payment/enot', $data);
		}
	}

	public function response() 
	{
		$this->load->model('checkout/order');

		if (isset($this->request->get['fail']) AND $this->request->get['fail']) {
			$this->response->redirect($this->url->link('checkout/confirm', '', true));
		} else {
			$this->cart->clear();
			$this->response->redirect($this->url->link('checkout/success', '', true));
		}
	}

	public function callback()
	{
		$order_id = isset($this->request->post['merchant_id'])
            ? (int) $this->request->post['merchant_id']
            : 0;

		if (!$order_id) {
            exit;
        }

		$this->load->model('checkout/order');
		$order_info = $this->model_checkout_order->getOrder($order_id);
		$amount = number_format($order_info['total'], 2, '.', '');

		$merchant_id = $this->config->get('payment_enot_merchant_id');
		$secret_word2 = $this->config->get('payment_enot_secret_word2');

		$sign2 = isset($this->request->post['sign_2'])
            ? $this->request->post['sign_2']
            : '';

        if(!$sign2) {
            exit;
        }

		$check_sign2 = md5($merchant_id.':'.$amount.':'.$secret_word2.':'.$order_id);

		if ($sign2 == $check_sign2) {
			$comment = 'Enot transaction id: ' . $this->request->post['intid'];
			$this->model_checkout_order->addOrderHistory($order_id, $this->config->get('payment_enot_order_status_id'), $comment, $notify = true, $override = false);
		}
	}
}
