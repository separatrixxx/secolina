<?php
class ControllerInformationPollPlus extends Controller {
	public function index() {
		$this->load->language('information/pollplus');
		$this->load->model('fido/pollplus');

		$this->document->setTitle($this->language->get('heading_title'));

		if (!isset($this->request->get['poll_id'])) {
			$this->response->redirect($this->url->link('information/pollplus/polls'));
		}

		if (file_exists('catalog/view/theme/' . $this->config->get($this->config->get('config_theme') . '_directory') . '/stylesheet/pollplus.css')) {
			$this->document->addStyle('catalog/view/theme/' . $this->config->get($this->config->get('config_theme') . '_directory') . '/stylesheet/pollplus.css');
		} else {
			$this->document->addStyle('catalog/view/theme/default/stylesheet/pollplus.css');
		}

		$this->document->addScript('admin/view/javascript/jquery/flot/jquery.flot.js');
		$this->document->addScript('admin/view/javascript/jquery/flot/jquery.flot.pie.js');

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('information/pollplus')
		);

		$data['heading_title'] = $this->language->get('heading_title');
		$data['heading_results'] = $this->language->get('heading_results');
		$data['heading_chart'] = $this->language->get('heading_chart');

		$data['text_no_votes'] = $this->language->get('text_no_votes');
		$data['text_total_votes'] = $this->language->get('text_total_votes');

		$data['column_title'] = $this->language->get('column_title');
		$data['column_votes'] = $this->language->get('column_votes');
		$data['column_percent'] = $this->language->get('column_percent');

		$data['button_list_polls'] = $this->language->get('button_list_polls');

		if (isset($this->request->cookie['poll_answered_' . $this->request->get['poll_id']])) {
			$data['answered'] = true;
		} else {
			$data['answered'] = false;
		}

		$poll_info = $this->model_fido_pollplus->getPollInfo($this->request->get['poll_id']);

		$total_reactions = $this->model_fido_pollplus->getTotalReactions($this->request->get['poll_id']);

		$data['total_reactions'] = number_format($total_reactions);

		$data['poll_options'] = array();

		$poll_options = $this->model_fido_pollplus->getOptions($this->request->get['poll_id']);

		if (count($poll_options) < 2) {
			$this->model_fido_pollplus->deactivatePoll($poll_info['poll_id']);

			$poll_info['status'] = 0;
		}

		$data['poll_info'] = $poll_info;

		$this->load->model('setting/module');

		$module_info = $this->model_setting_module->getModule($poll_info['module_id']);

		if ($poll_info['status'] && $module_info['show_poll']) {
			$data['show_poll'] = true;
		} else {
			$data['show_poll'] = false;
		}

		foreach ($poll_options as $poll_option) {
			$option_reactions = $this->model_fido_pollplus->countOptionReactions($this->request->get['poll_id'], $poll_option['poll_option_id']);

			if ($total_reactions) {
				$percent = round(100 * ($option_reactions / $total_reactions), 2);
			} else {
				$percent = 0;
			}

			$data['poll_options'][] = array(
				'poll_option_id' => $poll_option['poll_option_id'],
				'title'          => $poll_option['title'],
				'votes'          => $option_reactions,
				'reactions'      => number_format($option_reactions),
				'percent'        => $percent
			);
		}

		$data['poll_module'] = $this->load->controller('extension/module/pollplus');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('information/pollplus', $data));
	}

	public function polls() {
		$this->load->language('information/pollplus');
		$this->load->model('fido/pollplus');

		$this->document->setTitle($this->language->get('heading_title'));

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('information/pollplus')
		);

		$data['heading_title'] = $this->language->get('heading_title');

		$data['text_polls'] = $this->language->get('text_polls');
		$data['text_no_polls'] = $this->language->get('text_no_polls');

		$data['button_view'] = $this->language->get('button_view');

		$data['polls'] = array();

		$polls = $this->model_fido_pollplus->getPolls();

		foreach ($polls as $poll) {
			$module = $this->model_fido_pollplus->getModule($poll['module_id']);

			$setting = json_decode($module['setting'], true);

			if (!empty($setting['status']) && $setting['status']) {
				$data['polls'][] = array(
					'question' => $poll['question'],
					'href'     => $this->url->link('information/pollplus', 'poll_id=' . $poll['poll_id'])
				);
			}
		}

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('information/pollplus_polls', $data));
	}
}