<?php
class ControllerCommonMaintenance extends Controller {
	public function index() {

	 	$file = DIR_SYSTEM.'../catalog/controller/record/front.php';
	 	if (file_exists($file)) {
			if (function_exists('modification')) {
				require_once(modification($file));
			} else {
				require_once($file);
			}
	 		new ControllerRecordFront($this->registry);
	 	}
    

// ts_messengers_widget start

$ts_messengers_widget_status = $this->config->get('ts_messengers_widget_status');
$data['ts_messengers_widget_status'] = $ts_messengers_widget_status;

if (isset($ts_messengers_widget_status) && $ts_messengers_widget_status) {
$this->document->addStyle('catalog/view/theme/default/stylesheet/t-solutions/ts_messengers_widget.css');
$this->document->addStyle('catalog/view/theme/default/stylesheet/t-solutions/ts_messengers_widget_settings.css');
}

// ts_messengers_widget end

		$this->load->language('common/maintenance');

		$this->document->setTitle($this->language->get('heading_title'));

		if ($this->request->server['SERVER_PROTOCOL'] == 'HTTP/1.1') {
			$this->response->addHeader('HTTP/1.1 503 Service Unavailable');
		} else {
			$this->response->addHeader('HTTP/1.0 503 Service Unavailable');
		}

		$this->response->addHeader('Retry-After: 3600');

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_maintenance'),
			'href' => $this->url->link('common/maintenance')
		);

		$data['message'] = $this->language->get('text_message');

		$data['header'] = $this->load->controller('common/header');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('common/maintenance', $data));
	}
}
