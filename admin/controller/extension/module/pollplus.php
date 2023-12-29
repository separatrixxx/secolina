<?php
class ControllerExtensionModulePollPlus extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('extension/module/pollplus');
		$this->load->model('fido/pollplus');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/module');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			if (!isset($this->request->get['module_id'])) {
				$module_id = $this->model_fido_pollplus->addModule('pollplus', $this->request->post);

				$this->session->data['success'] = $this->language->get('text_success');

				$this->response->redirect($this->url->link('extension/module/pollplus', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $module_id, true));
			} else {
				$this->model_setting_module->editModule($this->request->get['module_id'], $this->request->post);

				$this->session->data['success'] = $this->language->get('text_success');

				$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
			}
		}

		$data['heading_title'] = $this->language->get('heading_title');

		$data['text_edit'] = $this->language->get('text_edit');
		$data['text_enabled'] = $this->language->get('text_enabled');
		$data['text_disabled'] = $this->language->get('text_disabled');
		$data['text_yes'] = $this->language->get('text_yes');
		$data['text_no'] = $this->language->get('text_no');
		$data['text_confirm'] = $this->language->get('text_confirm');
		$data['text_save_module'] = $this->language->get('text_save_module');

		if (!isset($this->request->get['module_id'])) {
			$data['text_view_list'] = sprintf($this->language->get('text_view_list'), $this->url->link('extension/module/pollplus/view_list', 'user_token=' . $this->session->data['user_token'], true));
		} else {
			$data['text_view_list'] = sprintf($this->language->get('text_view_list'), $this->url->link('extension/module/pollplus/view_list', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true));
		}

		$data['entry_name'] = $this->language->get('entry_name');
		$data['entry_status'] = $this->language->get('entry_status');
		$data['entry_show_poll'] = $this->language->get('entry_show_poll');

		$data['column_question'] = $this->language->get('column_question');
		$data['column_status'] = $this->language->get('column_status');
		$data['column_active'] = $this->language->get('column_active');
		$data['column_action'] = $this->language->get('column_action');

		$data['button_save'] = $this->language->get('button_save');
		$data['button_cancel'] = $this->language->get('button_cancel');
		$data['button_edit'] = $this->language->get('button_edit');
		$data['button_delete'] = $this->language->get('button_delete');
		$data['button_add_poll'] = $this->language->get('button_add_poll');
		$data['button_activate'] = $this->language->get('button_activate');
		$data['button_deactivate'] = $this->language->get('button_deactivate');
		$data['button_results'] = $this->language->get('button_results');

		if (isset($this->session->data['error_warning'])) {
			$data['error_warning'] = $this->session->data['error_warning'];

			unset($this->session->data['error_warning']);
		} elseif (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->error['name'])) {
			$data['error_name'] = $this->error['name'];
		} else {
			$data['error_name'] = '';
		}

		if (isset($this->session->data['success'])) {
			$data['success'] = $this->session->data['success'];

			unset($this->session->data['success']);
		} else {
			$data['success'] = '';
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
		);

		if (!isset($this->request->get['module_id'])) {
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('heading_title'),
				'href' => $this->url->link('extension/module/pollplus', 'user_token=' . $this->session->data['user_token'], true)
			);
		} else {
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('heading_title'),
				'href' => $this->url->link('extension/module/pollplus', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true)
			);
		}

		if (!isset($this->request->get['module_id'])) {
			$data['action'] = $this->url->link('extension/module/pollplus', 'user_token=' . $this->session->data['user_token'], true);
		} else {
			$data['action'] = $this->url->link('extension/module/pollplus', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true);
		}

		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

		if (isset($this->request->get['module_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
			$module_info = $this->model_setting_module->getModule($this->request->get['module_id']);
		}

		if (isset($this->request->post['module_id'])) {
			$data['module_id'] = $this->request->post['module_id'];
		} elseif (isset($this->request->get['module_id'])) {
			$data['module_id'] = $this->request->get['module_id'];
		} elseif (!empty($module_info)) {
			$data['module_id'] = $module_info['module_id'];
		} else {
			$data['module_id'] = '';
		}

		if (isset($this->request->post['name'])) {
			$data['name'] = $this->request->post['name'];
		} elseif (!empty($module_info)) {
			$data['name'] = $module_info['name'];
		} else {
			$data['name'] = '';
		}

		if (isset($this->request->post['status'])) {
			$data['status'] = $this->request->post['status'];
		} elseif (!empty($module_info)) {
			$data['status'] = $module_info['status'];
		} else {
			$data['status'] = '';
		}

		if (isset($this->request->post['show_poll'])) {
			$data['show_poll'] = $this->request->post['show_poll'];
		} elseif (!empty($module_info)) {
			$data['show_poll'] = $module_info['show_poll'];
		} else {
			$data['show_poll'] = '';
		}

		$data['poll_info'] = array();

		if (!isset($this->request->get['module_id'])) {
			$poll_info = array();
		} else {
			$poll_info = $this->model_fido_pollplus->getPollByModule($this->request->get['module_id']);
		}

		if ($poll_info) {
			$total_poll_options = $this->model_fido_pollplus->getTotalPollOptions($poll_info['poll_id']);

			if ($total_poll_options < 2) {
				$this->model_fido_pollplus->deactivatePoll($poll_info['poll_id']);

				$poll_info['status'] = 0;
			}

			$data['poll_info'][] = array(
				'poll_id'      => $poll_info['poll_id'],
				'question'     => $poll_info['question'],
				'status'       => ($poll_info['status'] ? $this->language->get('text_active') : $this->language->get('text_inactive')),
				'is_active'    => ($poll_info['status'] ? 1 : 0),
				'activate'     => $this->url->link('extension/module/pollplus/activate', 'user_token=' . $this->session->data['user_token'] . '&poll_id=' . $poll_info['poll_id'] . '&module_id=' . $this->request->get['module_id'], true),
				'deactivate'   => $this->url->link('extension/module/pollplus/deactivate', 'user_token=' . $this->session->data['user_token'] . '&poll_id=' . $poll_info['poll_id'] . '&module_id=' . $this->request->get['module_id'], true),
				'results'      => $this->url->link('extension/module/pollplus/results', 'user_token=' . $this->session->data['user_token'] . '&poll_id=' . $poll_info['poll_id'] . '&module_id=' . $this->request->get['module_id'], true),
				'edit'         => $this->url->link('extension/module/pollplus/edit', 'user_token=' . $this->session->data['user_token'] . '&poll_id=' . $poll_info['poll_id'] . '&module_id=' . $this->request->get['module_id'], true),
				'delete'       => $this->url->link('extension/module/pollplus/delete', 'user_token=' . $this->session->data['user_token'] . '&poll_id=' . $poll_info['poll_id'] . '&delete=1' . '&module_id=' . $this->request->get['module_id'], true)
			);
		}

		if (!isset($this->request->get['module_id'])) {
			$data['add_poll'] = '';
		} elseif ($poll_info) {
			$data['add_poll'] = '';
		} else {
			$data['add_poll'] = $this->url->link('extension/module/pollplus/add', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true);
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/pollplus', $data));
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/module/pollplus')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if ((utf8_strlen($this->request->post['name']) < 3) || (utf8_strlen($this->request->post['name']) > 64)) {
			$this->error['name'] = $this->language->get('error_name');
		}

		return !$this->error;
	}

	public function activate() {
		$this->load->model('fido/pollplus');

		if ($this->validateActivation()) {
			$this->model_fido_pollplus->activatePoll($this->request->get['poll_id']);
		}

		if ((isset($this->request->get['view']) && ($this->request->get['view'] == 'list')) || isset($this->session->data['error_module'])) {
			if (isset($this->session->data['error_module'])) {
				unset($this->session->data['error_module']);
			}

			$url = '';

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			$this->response->redirect($this->url->link('extension/module/pollplus/view_list', 'user_token=' . $this->session->data['user_token'] . $url, true));
		} else {
			$this->response->redirect($this->url->link('extension/module/pollplus', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true));
		}
	}

	protected function validateActivation() {
		$this->load->language('extension/module/pollplus');

		if (!$this->user->hasPermission('modify', 'extension/module/pollplus')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		$this->load->model('fido/pollplus');

		$total_poll_options = $this->model_fido_pollplus->getTotalPollOptions($this->request->get['poll_id']);

		if ($total_poll_options < 2) {
			$this->session->data['error_warning'] = $this->language->get('error_options');

			$this->error['warning'] = $this->language->get('error_options');
		}

		$poll_info = $this->model_fido_pollplus->getPoll($this->request->get['poll_id']);

		if (!$this->model_fido_pollplus->getModule($poll_info['module_id'])) {
			$this->session->data['error_warning'] = $this->language->get('error_module');

			$this->session->data['error_module'] = $this->language->get('error_module');

			$this->error['warning'] = $this->language->get('error_module');
		}

		return !$this->error;
	}

	public function deactivate() {
		$this->load->model('fido/pollplus');

		$this->model_fido_pollplus->deactivatePoll($this->request->get['poll_id']);

		if (isset($this->request->get['view']) && ($this->request->get['view'] == 'list')) {
			$url = '';

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			$this->response->redirect($this->url->link('extension/module/pollplus/view_list', 'user_token=' . $this->session->data['user_token'] . $url, true));
		} else {
			$this->response->redirect($this->url->link('extension/module/pollplus', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true));
		}
	}

	public function install() {
		$this->load->model('fido/pollplus');

		$this->model_fido_pollplus->createPolls();
	}

	public function uninstall() {
		$this->load->model('fido/pollplus');

		$this->model_fido_pollplus->dropPolls();
	}

	public function add() {
		$this->load->language('extension/module/pollplus');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('fido/pollplus');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
			$this->model_fido_pollplus->addPoll($this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('extension/module/pollplus', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->post['module_id'], true));
		}

		$this->getForm();
	}

	public function edit() {
		$this->load->language('extension/module/pollplus');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('fido/pollplus');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
			$this->model_fido_pollplus->editPoll($this->request->get['poll_id'], $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('extension/module/pollplus', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->post['module_id'], true));
		}

		$this->getForm();
	}

	public function delete() {
		$this->load->language('extension/module/pollplus');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('fido/pollplus');

		if (isset($this->request->post['selected']) && $this->validateDelete()) {
			foreach ($this->request->post['selected'] as $poll_id) {
				$this->model_fido_pollplus->deletePoll($poll_id);
			}

			$this->session->data['success'] = $this->language->get('text_success');

			$url = '';

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			$this->response->redirect($this->url->link('extension/module/pollplus/view_list', 'user_token=' . $this->session->data['user_token'] . $url, true));
		} elseif ((isset($this->request->get['poll_id']) && isset($this->request->get['delete'])) && $this->validateDelete()) {
			$this->model_fido_pollplus->deletePoll($this->request->get['poll_id']);

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('extension/module/pollplus', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true));
		}

		if (!isset($this->request->get['module_id'])) {
			$this->response->redirect($this->url->link('extension/module/pollplus', 'user_token=' . $this->session->data['user_token'], true));
		} else {
			$this->response->redirect($this->url->link('extension/module/pollplus', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true));
		}
	}

	protected function getForm() {
		$data['heading_title'] = $this->language->get('heading_title');
		$data['heading_options'] = $this->language->get('heading_options');

		$data['text_form'] = !isset($this->request->get['poll_id']) ? $this->language->get('text_add') : $this->language->get('text_form');
		$data['text_default'] = $this->language->get('text_default');
		$data['text_enabled'] = $this->language->get('text_enabled');
		$data['text_disabled'] = $this->language->get('text_disabled');
		$data['text_active'] = $this->language->get('text_active');
		$data['text_inactive'] = $this->language->get('text_inactive');
		$data['text_unallocated'] = $this->language->get('text_unallocated');
		$data['text_save_poll'] = $this->language->get('text_save_poll');
		$data['text_confirm'] = $this->language->get('text_confirm');
		$data['text_option'] = $this->language->get('text_option');

		$data['entry_question'] = $this->language->get('entry_question');
		$data['entry_option'] = $this->language->get('entry_option');
		$data['entry_status'] = $this->language->get('entry_status');
		$data['entry_active'] = $this->language->get('entry_active');
		$data['entry_title'] = $this->language->get('entry_title');
		$data['entry_sort_order'] = $this->language->get('entry_sort_order');

		$data['button_save'] = $this->language->get('button_save');
		$data['button_cancel'] = $this->language->get('button_cancel');
		$data['button_option_add'] = $this->language->get('button_option_add');
		$data['button_edit'] = $this->language->get('button_edit');
		$data['button_remove'] = $this->language->get('button_remove');

		if (isset($this->request->get['poll_id'])) {
			$data['add_option'] = $this->url->link('extension/module/pollplus/add_option', 'user_token=' . $this->session->data['user_token'] . '&poll_id=' . $this->request->get['poll_id'] . '&module_id=' . $this->request->get['module_id'], true);
		} else {
			$data['add_option'] = false;
		}

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->error['question'])) {
			$data['error_question'] = $this->error['question'];
		} else {
			$data['error_question'] = array();
		}

		if (isset($this->error['title'])) {
			$data['error_title'] = $this->error['title'];
		} else {
			$data['error_title'] = array();
		}

		if (isset($this->error['option'])) {
			$data['error_option'] = $this->error['option'];
		} else {
			$data['error_option'] = array();
		}

		if (isset($this->session->data['success'])) {
			$data['success'] = $this->session->data['success'];

			unset($this->session->data['success']);
		} else {
			$data['success'] = '';
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
		);

		if (!isset($this->request->get['module_id'])) {
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('heading_title'),
				'href' => $this->url->link('extension/module/pollplus/view_list', 'user_token=' . $this->session->data['user_token'], true)
			);
		} else {
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('heading_title'),
				'href' => $this->url->link('extension/module/pollplus', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true)
			);
		}
		
		if (!isset($this->request->get['poll_id'])) {
			$data['action'] = $this->url->link('extension/module/pollplus/add', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true);
		} else {
			$data['action'] = $this->url->link('extension/module/pollplus/edit', 'user_token=' . $this->session->data['user_token'] . '&poll_id=' . $this->request->get['poll_id'] . '&module_id=' . $this->request->get['module_id'], true);
		}

		if (isset($this->request->get['poll_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
			$poll_info = $this->model_fido_pollplus->getPoll($this->request->get['poll_id']);
		} else {
			$poll_info = array();
		}

		if (isset($this->request->post['module_id'])) {
			$data['cancel'] = $this->url->link('extension/module/pollplus', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->post['module_id'], true);
		} elseif (isset($this->request->get['module_id'])) {
			$data['cancel'] = $this->url->link('extension/module/pollplus', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true);
		} elseif (!empty($poll_info)) {
			$data['cancel'] = $this->url->link('extension/module/pollplus', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $poll_info['module_id'], true);
		} else {
			$data['cancel'] = $this->url->link('extension/module/pollplus/view_list', 'user_token=' . $this->session->data['user_token'], true);
		}

		$data['user_token'] = $this->session->data['user_token'];

		$this->load->model('localisation/language');

		$data['languages'] = $this->model_localisation_language->getLanguages();

		if (isset($this->request->post['pollplus_description'])) {
			$data['pollplus_description'] = $this->request->post['pollplus_description'];
		} elseif (isset($this->request->get['poll_id'])) {
			$data['pollplus_description'] = $this->model_fido_pollplus->getPollDescriptions($this->request->get['poll_id']);
		} else {
			$data['pollplus_description'] = array();
		}

		if (isset($this->request->post['module_id'])) {
			$data['module_id'] = $this->request->post['module_id'];
		} elseif (!empty($poll_info)) {
			$data['module_id'] = $poll_info['module_id'];
		} elseif (isset($this->request->get['module_id'])) {
			$data['module_id'] = $this->request->get['module_id'];
		} else {
			$data['module_id'] = '';
		}

		if (isset($this->request->post['poll_option'])) {
			$poll_options = $this->request->post['poll_option'];
		} elseif ($poll_info) {
			$poll_options = $this->model_fido_pollplus->getPollOptions($this->request->get['poll_id']);
		} else {
			$poll_options = array();
		}

		$data['poll_options'] = array();

		if ($poll_info) {
			foreach ($poll_options as $poll_option) {
				$data['poll_options'][] = array(
					'poll_option_id' => $poll_option['poll_option_id'],
					'description'    => $this->model_fido_pollplus->getPollOptionDescriptions($poll_option['poll_option_id']),
					'sort_order'     => $poll_option['sort_order']
				);
			}
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/pollplus/form', $data));
	}

	protected function validateForm() {
		if (!$this->user->hasPermission('modify', 'extension/module/pollplus')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		foreach ($this->request->post['pollplus_description'] as $language_id => $value) {
			if ((utf8_strlen($value['question']) < 3) || (utf8_strlen($value['question']) > 128)) {
				$this->error['question'][$language_id] = $this->language->get('error_question');
			}
		}

		if (isset($this->request->post['poll_option'])) {
			foreach ($this->request->post['poll_option'] as $key => $option) {
				foreach ($option['description'] as $language_id => $value) {
					if ((utf8_strlen($value['title']) < 3) || (utf8_strlen($value['title']) > 128)) {
						$this->error['title'][$language_id] = $this->language->get('error_title');
					}
				}
			}
		}

		if ($this->error && !isset($this->error['warning'])) {
			$this->error['warning'] = $this->language->get('error_warning');
		}

		return !$this->error;
	}

	protected function validateDelete() {
		if (!$this->user->hasPermission('modify', 'extension/module/pollplus')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}

	public function view_list() {
		$this->load->language('extension/module/pollplus');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('fido/pollplus');

		$this->getlist();
	}

	protected function getList() {
		if (isset($this->request->get['sort'])) {
			$sort = $this->request->get['sort'];
		} else {
			$sort = 'pp.module_id, ppd.question';
		}

		if (isset($this->request->get['order'])) {
			$order = $this->request->get['order'];
		} else {
			$order = 'ASC';
		}

		if (isset($this->request->get['page'])) {
			$page = $this->request->get['page'];
		} else {
			$page = 1;
		}

		$url = '';

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
		);

		if (!isset($this->request->get['module_id'])) {
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('heading_title'),
				'href' => $this->url->link('extension/module/pollplus/view_list', 'user_token=' . $this->session->data['user_token'], true)
			);
		} else {
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('heading_title'),
				'href' => $this->url->link('extension/module/pollplus/view_list', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true)
			);
		}

		if (!isset($this->request->get['module_id'])) {
			$data['return'] = $this->url->link('extension/module/pollplus', 'user_token=' . $this->session->data['user_token'], true);
			$data['delete'] = $this->url->link('extension/module/pollplus/delete', 'user_token=' . $this->session->data['user_token'] . $url, true);
		} else {
			$data['return'] = $this->url->link('extension/module/pollplus', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true);
			$data['delete'] = $this->url->link('extension/module/pollplus/delete', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'] . $url, true);
		}

		$data['polls'] = array();

		$filter_data = array(
			'sort'  => $sort,
			'order' => $order,
			'start' => ($page - 1) * $this->config->get('config_limit_admin'),
			'limit' => $this->config->get('config_limit_admin')
		);

		if (isset($this->request->get['store_id'])) {
			$poll_total = $this->model_fido_pollplus->getTotalPollsByStore($this->request->get['store_id']);

			$results = $this->model_fido_pollplus->getPollsByStore($filter_data, $this->request->get['store_id']);
		} else {
			$poll_total = $this->model_fido_pollplus->getTotalPolls();

			$results = $this->model_fido_pollplus->getPolls($filter_data);
		}

		$data['free_module'] = $this->model_fido_pollplus->getFreeModule();

		foreach ($results as $result) {
			$module_info = $this->model_fido_pollplus->getModule($result['module_id']);

			if ($module_info) {
				$module = $module_info['name'];

				$allocated = true;
			} else {
				$module = $this->language->get('text_unallocated');

				$allocated = false;
			}

			$total_poll_options = $this->model_fido_pollplus->getTotalPollOptions($result['poll_id']);

			if (!$allocated || ($total_poll_options < 2)) {
				$this->model_fido_pollplus->deactivatePoll($result['poll_id']);

				$result['status'] = 0;
			}

			$data['polls'][] = array(
				'poll_id'      => $result['poll_id'],
				'question'     => $result['question'],
				'module'       => $module,
				'allocated'    => $allocated,
				'status'       => ($result['status'] ? $this->language->get('text_active') : $this->language->get('text_inactive')),
				'is_active'    => $result['status'],
				'allocate'     => $this->url->link('extension/module/pollplus/allocate', 'user_token=' . $this->session->data['user_token'] . '&poll_id=' . $result['poll_id'] . '&module_id=' . $data['free_module'] . '&view=list' . $url, true),
				'activate'     => $this->url->link('extension/module/pollplus/activate', 'user_token=' . $this->session->data['user_token'] . '&poll_id=' . $result['poll_id'] . '&module_id=' . $result['module_id'] . '&view=list' . $url, true),
				'deactivate'   => $this->url->link('extension/module/pollplus/deactivate', 'user_token=' . $this->session->data['user_token'] . '&poll_id=' . $result['poll_id'] . '&module_id=' . $result['module_id'] . '&view=list' . $url, true),
				'results'      => $this->url->link('extension/module/pollplus/results', 'user_token=' . $this->session->data['user_token'] . '&poll_id=' . $result['poll_id'] . '&module_id=' . $result['module_id'] . '&view=list', true),
				'edit'         => $this->url->link('extension/module/pollplus/edit', 'user_token=' . $this->session->data['user_token'] . '&poll_id=' . $result['poll_id'] . '&module_id=' . $result['module_id'], true)
			);
		}

		$data['heading_title'] = $this->language->get('heading_title');

		$data['text_list'] = $this->language->get('text_list');
		$data['text_no_results'] = $this->language->get('text_no_results');
		$data['text_confirm'] = $this->language->get('text_confirm');

		$data['column_question'] = $this->language->get('column_question');
		$data['column_module'] = $this->language->get('column_module');
		$data['column_status'] = $this->language->get('column_status');
		$data['column_active'] = $this->language->get('column_active');
		$data['column_action'] = $this->language->get('column_action');

		$data['button_edit'] = $this->language->get('button_edit');
		$data['button_delete'] = $this->language->get('button_delete');
		$data['button_return'] = $this->language->get('button_return');
		$data['button_allocate'] = $this->language->get('button_allocate');
		$data['button_activate'] = $this->language->get('button_activate');
		$data['button_deactivate'] = $this->language->get('button_deactivate');
		$data['button_results'] = $this->language->get('button_results');

		if (isset($this->session->data['error_warning'])) {
			$data['error_warning'] = $this->session->data['error_warning'];

			unset($this->session->data['error_warning']);
		} elseif (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->session->data['success'])) {
			$data['success'] = $this->session->data['success'];

			unset($this->session->data['success']);
		} else {
			$data['success'] = '';
		}

		if (isset($this->request->post['selected'])) {
			$data['selected'] = (array)$this->request->post['selected'];
		} else {
			$data['selected'] = array();
		}

		$url = '';

		if ($order == 'ASC') {
			$url .= '&order=DESC';
		} else {
			$url .= '&order=ASC';
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		if (!isset($this->request->get['module_id'])) {
			$data['sort_question'] = $this->url->link('extension/module/pollplus/view_list', 'user_token=' . $this->session->data['user_token'] . '&sort=ppd.question' . $url, true);
			$data['sort_module'] = $this->url->link('extension/module/pollplus/view_list', 'user_token=' . $this->session->data['user_token'] . '&sort=pp.module_id' . $url, true);
			$data['sort_status'] = $this->url->link('extension/module/pollplus/view_list', 'user_token=' . $this->session->data['user_token'] . '&sort=pp.status' . $url, true);
			$data['sort_active'] = $this->url->link('extension/module/pollplus/view_list', 'user_token=' . $this->session->data['user_token'] . '&sort=pp.active' . $url, true);
		} else {
			$data['sort_question'] = $this->url->link('extension/module/pollplus/view_list', 'user_token=' . $this->session->data['user_token'] . '&sort=ppd.question' . '&module_id=' . $this->request->get['module_id'] . $url, true);
			$data['sort_module'] = $this->url->link('extension/module/pollplus/view_list', 'user_token=' . $this->session->data['user_token'] . '&sort=pp.module_id' . '&module_id=' . $this->request->get['module_id'] . $url, true);
			$data['sort_status'] = $this->url->link('extension/module/pollplus/view_list', 'user_token=' . $this->session->data['user_token'] . '&sort=pp.status' . '&module_id=' . $this->request->get['module_id'] . $url, true);
			$data['sort_active'] = $this->url->link('extension/module/pollplus/view_list', 'user_token=' . $this->session->data['user_token'] . '&sort=pp.active' . '&module_id=' . $this->request->get['module_id'] . $url, true);
		}

		$url = '';

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		$pagination = new Pagination();
		$pagination->total = $poll_total;
		$pagination->page = $page;
		$pagination->limit = $this->config->get('config_limit_admin');
		if (!isset($this->request->get['module_id'])) {
			$pagination->url = $this->url->link('extension/module/pollplus/view_list', 'user_token=' . $this->session->data['user_token'] . $url . '&page={page}', true);
		} else {
			$pagination->url = $this->url->link('extension/module/pollplus/view_list', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'] . $url . '&page={page}', true);
		}

		$data['pagination'] = $pagination->render();

		$data['results'] = sprintf($this->language->get('text_pagination'), ($poll_total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($poll_total - $this->config->get('config_limit_admin'))) ? $poll_total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $poll_total, ceil($poll_total / $this->config->get('config_limit_admin')));

		$data['sort'] = $sort;
		$data['order'] = $order;

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/pollplus/list', $data));
	}

	public function allocate() {
		$this->load->model('fido/pollplus');

		$this->model_fido_pollplus->allocateModule($this->request->get['poll_id'], $this->request->get['module_id']);

		$url = '';

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$this->response->redirect($this->url->link('extension/module/pollplus/view_list', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'] . $url, true));
	}

	public function results() {
		$this->load->language('extension/module/pollplus');
		$this->load->model('fido/pollplus');

		$this->document->setTitle($this->language->get('heading_results'));

		$this->document->addStyle('view/stylesheet/pollplus.css');
		$this->document->addScript('view/javascript/jquery/flot/jquery.flot.js');
		$this->document->addScript('view/javascript/jquery/flot/jquery.flot.pie.js');

		$this->load->model('setting/store');

		$data['stores'] = array();

		$stores = $this->model_setting_store->getStores();

		$data['stores'][] = array(
			'store_id'  => $this->config->get('config_store_id'),
			'name'      => $this->config->get('config_name')
		);

		foreach ($stores as $store) {
			$data['stores'][] = array(
				'store_id'  => $store['store_id'],
				'name'      => $store['name']
			);
		}

		if ($this->request->server['REQUEST_METHOD'] == 'POST') {
			$store_id = $this->request->post['store_id'];
		} elseif ($stores) {
			$store_id = -1;
		} else {
			$store_id = 0;
		}

		$poll_info = $this->model_fido_pollplus->getPollInfo($this->request->get['poll_id']);

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/module/pollplus', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $poll_info['module_id'], true)
		);

		$data['heading_title'] = $this->language->get('heading_title');
		$data['heading_results'] = $this->language->get('heading_results');
		$data['heading_chart'] = $this->language->get('heading_chart');

		$data['text_view'] = $this->language->get('text_view');
		$data['text_no_results'] = $this->language->get('text_no_results');
		$data['text_total_votes'] = $this->language->get('text_total_votes');
		$data['text_all_stores'] = $this->language->get('text_all_stores');

		$data['entry_store'] = $this->language->get('entry_store');

		$data['column_title'] = $this->language->get('column_title');
		$data['column_votes'] = $this->language->get('column_votes');
		$data['column_percent'] = $this->language->get('column_percent');

		$data['button_return'] = (isset($this->request->get['view']) && ($this->request->get['view'] == 'list')) ? $this->language->get('button_list') : $this->language->get('button_return');

		$data['store_id'] = $store_id;

		$data['action'] = $this->url->link('extension/module/pollplus/results', 'user_token=' . $this->session->data['user_token'] . '&poll_id=' . $this->request->get['poll_id'], true);

		if (isset($this->request->get['view']) && ($this->request->get['view'] == 'list')) {
			$data['return'] = $this->url->link('extension/module/pollplus/view_list', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $poll_info['module_id'], true);
		} else {
			$data['return'] = $this->url->link('extension/module/pollplus', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $poll_info['module_id'], true);
		}

		$data['poll_info'] = $poll_info;

		if ($store_id < 0) {
			$total_reactions = $this->model_fido_pollplus->getTotalReactions($this->request->get['poll_id']);
		} else {
			$total_reactions = $this->model_fido_pollplus->getTotalReactionsByStore($this->request->get['poll_id'], $store_id);
		}

		$data['total_reactions'] = number_format($total_reactions);

		$data['poll_options'] = array();

		$poll_options = $this->model_fido_pollplus->getOptions($this->request->get['poll_id']);

		foreach ($poll_options as $poll_option) {
			if ($store_id < 0) {
				$option_reactions = $this->model_fido_pollplus->countOptionReactions($this->request->get['poll_id'], $poll_option['poll_option_id']);
			} else {
				$option_reactions = $this->model_fido_pollplus->countOptionReactionsByStore($this->request->get['poll_id'], $poll_option['poll_option_id'], $store_id);
			}

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

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/pollplus/results', $data));
	}
}