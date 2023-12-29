<?php
class ControllerExtensionPaymentTbcbank extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('extension/payment/tbcbank');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/setting');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('payment_tbcbank', $this->request->post);

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
			'href' => $this->url->link('extension/payment/tbcbank', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['action'] = $this->url->link('extension/payment/tbcbank', 'user_token=' . $this->session->data['user_token'], true);

		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=payment', true);
		
		$data['copy_result_url'] 	= HTTP_CATALOG . 'index.php?route=extension/payment/tbcbank/callback';

		if (isset($this->request->post['payment_tbcbank_client_id'])) {
			$data['payment_tbcbank_client_id'] = $this->request->post['payment_tbcbank_client_id'];
		} else {
			$data['payment_tbcbank_client_id'] = $this->config->get('payment_tbcbank_client_id');
		}
		
		if (isset($this->request->post['payment_tbcbank_client_secret'])) {
			$data['payment_tbcbank_client_secret'] = $this->request->post['payment_tbcbank_client_secret'];
		} else {
			$data['payment_tbcbank_client_secret'] = $this->config->get('payment_tbcbank_client_secret');
		}
		
		if (isset($this->request->post['payment_tbcbank_apikey'])) {
			$data['payment_tbcbank_apikey'] = $this->request->post['payment_tbcbank_apikey'];
		} else {
			$data['payment_tbcbank_apikey'] = $this->config->get('payment_tbcbank_apikey');
		}
		
		if (isset($this->request->post['payment_tbcbank_total'])) {
			$data['payment_tbcbank_total'] = $this->request->post['payment_tbcbank_total'];
		} else {
			$data['payment_tbcbank_total'] = $this->config->get('payment_tbcbank_total');
		}

		if (isset($this->request->post['payment_tbcbank_order_confirm_status_id'])) {
			$data['payment_tbcbank_order_confirm_status_id'] = $this->request->post['payment_tbcbank_order_confirm_status_id'];
		} else {
			$data['payment_tbcbank_order_confirm_status_id'] = $this->config->get('payment_tbcbank_order_confirm_status_id');
		}
		
		if (isset($this->request->post['payment_tbcbank_order_status_id'])) {
			$data['payment_tbcbank_order_status_id'] = $this->request->post['payment_tbcbank_order_status_id'];
		} else {
			$data['payment_tbcbank_order_status_id'] = $this->config->get('payment_tbcbank_order_status_id');
		}
		
		if (isset($this->request->post['payment_tbcbank_order_fail_status_id'])) {
			$data['payment_tbcbank_order_fail_status_id'] = $this->request->post['payment_tbcbank_order_fail_status_id'];
		} else {
			$data['payment_tbcbank_order_fail_status_id'] = $this->config->get('payment_tbcbank_order_fail_status_id');
		}

		$this->load->model('localisation/order_status');

		$data['order_statuses'] = $this->model_localisation_order_status->getOrderStatuses();

		if (isset($this->request->post['payment_tbcbank_geo_zone_id'])) {
			$data['payment_tbcbank_geo_zone_id'] = $this->request->post['payment_tbcbank_geo_zone_id'];
		} else {
			$data['payment_tbcbank_geo_zone_id'] = $this->config->get('payment_tbcbank_geo_zone_id');
		}

		$this->load->model('localisation/geo_zone');

		$data['geo_zones'] = $this->model_localisation_geo_zone->getGeoZones();

		if (isset($this->request->post['payment_tbcbank_status'])) {
			$data['payment_tbcbank_status'] = $this->request->post['payment_tbcbank_status'];
		} else {
			$data['payment_tbcbank_status'] = $this->config->get('payment_tbcbank_status');
		}

		if (isset($this->request->post['payment_tbcbank_sort_order'])) {
			$data['payment_tbcbank_sort_order'] = $this->request->post['payment_tbcbank_sort_order'];
		} else {
			$data['payment_tbcbank_sort_order'] = $this->config->get('payment_tbcbank_sort_order');
		}
		
		/*if (isset($this->request->post['payment_tbcbank_test'])) {
			$data['payment_tbcbank_test'] = $this->request->post['payment_tbcbank_test'];
		} else {
			$data['payment_tbcbank_test'] = $this->config->get('payment_tbcbank_test');
		}*/

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/payment/tbcbank', $data));
	}
	
	public function install() {
        $this->db->query("ALTER TABLE `" . DB_PREFIX . "order` ADD `payid_tbcbank` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL  AFTER `date_modified`");
        $this->db->query("ALTER TABLE `" . DB_PREFIX . "order` ADD `message_tbcbank` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL  AFTER `date_modified`");
    }

    public function uninstall() {
        $this->db->query("ALTER TABLE `" . DB_PREFIX . "order` DROP `payid_tbcbank`");
        $this->db->query("ALTER TABLE `" . DB_PREFIX . "order` DROP `message_tbcbank`");
    }

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/payment/tbcbank')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}
}