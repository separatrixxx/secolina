<?php 
class ModelExtensionPaymentCryptocloud extends Model {
	public function getMethod($address, $total) {
		$title = $this->config->get('payment_cryptocloud_title');

		return array(
			'code' => 'cryptocloud',
			'terms' => '',
			'title' => ($title ? $title : 'CRYPTOCLOUD'),
			'sort_order' => $this->config->get('payment_cryptocloud_sort_order')
		);
	}
}
?>