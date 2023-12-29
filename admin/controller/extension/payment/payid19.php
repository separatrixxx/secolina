<?php
class ControllerExtensionPaymentPayid19 extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('extension/payment/payid19');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/setting');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('payment_payid19', $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=payment', true));
		}

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=payment', true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/payment/payid19', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['action'] = $this->url->link('extension/payment/payid19', 'user_token=' . $this->session->data['user_token'], true);
		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=payment', true);

		if (isset($this->request->post['payment_payid19_public_key'])) {
			$data['payment_payid19_public_key'] = $this->request->post['payment_payid19_public_key'];
		} else {
			$data['payment_payid19_public_key'] = $this->config->get('payment_payid19_public_key');
		}

		if (isset($this->request->post['payment_payid19_private_key'])) {
			$data['payment_payid19_private_key'] = $this->request->post['payment_payid19_private_key'];
		} else {
			$data['payment_payid19_private_key'] = $this->config->get('payment_payid19_private_key');
		}
		
		if (isset($this->request->post['payment_payid19_test'])) {
			$data['payment_payid19_test'] = $this->request->post['payment_payid19_test'];
		} else {
			$data['payment_payid19_test'] = $this->config->get('payment_payid19_test');
		}
		
		if (isset($this->request->post['payment_payid19_add_fee_to_price '])) {
			$data['payment_payid19_add_fee_to_price'] = $this->request->post['payment_payid19_add_fee_to_price'];
		} else {
			$data['payment_payid19_add_fee_to_price'] = $this->config->get('payment_payid19_add_fee_to_price');
		}
		
 		if (isset($this->request->post['payment_payid19_total'])) {
			$data['payment_payid19_total'] = $this->request->post['payment_payid19_total'];
		} else {
			$data['payment_payid19_total'] = $this->config->get('payment_payid19_total');
		}

		if (isset($this->request->post['payment_payid19_order_status_id'])) {
			$data['payment_payid19_order_status_id'] = $this->request->post['payment_payid19_order_status_id'];
		} else {
			$data['payment_payid19_order_status_id'] = $this->config->get('payment_payid19_order_status_id');
		}
		
		if (isset($this->request->post['payment_payid19_order_status_id_callback'])) {
			$data['payment_payid19_order_status_id_callback'] = $this->request->post['payment_payid19_order_status_id_callback'];
		} else {
			$data['payment_payid19_order_status_id_callback'] = $this->config->get('payment_payid19_order_status_id_callback');
		}
		

		$this->load->model('localisation/order_status');

		$data['order_statuses'] = $this->model_localisation_order_status->getOrderStatuses();

		if (isset($this->request->post['payment_payid19_geo_zone_id'])) {
			$data['payment_payid19_geo_zone_id'] = $this->request->post['payment_payid19_geo_zone_id'];
		} else {
			$data['payment_payid19_geo_zone_id'] = $this->config->get('payment_payid19_geo_zone_id');
		}

		$this->load->model('localisation/geo_zone');

		$data['geo_zones'] = $this->model_localisation_geo_zone->getGeoZones();

		if (isset($this->request->post['payment_payid19_status'])) {
			$data['payment_payid19_status'] = $this->request->post['payment_payid19_status'];
		} else {
			$data['payment_payid19_status'] = $this->config->get('payment_payid19_status');
		}

		if (isset($this->request->post['payment_payid19_sort_order'])) {
			$data['payment_payid19_sort_order'] = $this->request->post['payment_payid19_sort_order'];
		} else {
			$data['payment_payid19_sort_order'] = $this->config->get('payment_payid19_sort_order');
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/payment/payid19', $data));
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/payment/payid19')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}
}
