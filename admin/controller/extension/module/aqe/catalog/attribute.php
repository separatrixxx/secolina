<?php
class ControllerExtensionModuleAqeCatalogAttribute extends Controller {
	protected $error = array();
	protected $alert = array(
		'error'     => array(),
		'warning'   => array(),
		'success'   => array(),
		'info'      => array()
	);

	public function __construct($registry) {
		parent::__construct($registry);

		if (!$this->config->get('module_admin_quick_edit_installed') || !$this->config->get('module_admin_quick_edit_status')) {
			$this->response->redirect($this->url->link('catalog/attribute', 'user_token=' . $this->session->data['user_token'], true));
		}
	}

	public function index() {
		$this->load->model('catalog/attribute');
		$this->load->model('extension/module/aqe/catalog/attribute');

		$this->load->language('catalog/attribute');
		$this->load->language('extension/module/aqe/catalog/general');
		$this->load->language('extension/module/aqe/catalog/attribute');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->getList();
	}

	public function delete() {
		$this->load->model('catalog/attribute');
		$this->load->model('extension/module/aqe/catalog/attribute');

		$this->load->language('catalog/attribute');
		$this->load->language('extension/module/aqe/catalog/general');
		$this->load->language('extension/module/aqe/catalog/attribute');

		$this->document->setTitle($this->language->get('heading_title'));

		if (isset($this->request->post['selected']) && $this->validateDelete()) {
			foreach ($this->request->post['selected'] as $item_id) {
				$this->model_catalog_attribute->deleteAttribute($item_id);
			}

			$this->session->data['success'] = sprintf($this->language->get('text_success_delete'), count($this->request->post['selected']));

			$url = '';

			foreach($this->config->get('module_admin_quick_edit_catalog_attributes') as $column => $attr) {
				if (isset($this->request->get['filter_' . $column])) {
					$url .= '&filter_' . $column . '=' . urlencode(html_entity_decode($this->request->get['filter_' . $column], ENT_QUOTES, 'UTF-8'));
				}
			}

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			if ((int)$this->config->get('module_admin_quick_edit_override_menu_entry')) {
				$this->response->redirect($this->url->link('catalog/attribute', 'user_token=' . $this->session->data['user_token'] . $url . '&aqer=1', true));
			} else {
				$this->response->redirect($this->url->link('extension/module/admin_quick_edit/catalog__attribute__', 'user_token=' . $this->session->data['user_token'] . $url, true));
			}
		}

		$this->getList();
	}

	protected function getList() {
		$data['module_admin_quick_edit_tooltip'] = ($this->config->get('module_admin_quick_edit_quick_edit_on') == 'dblclick') ? $this->language->get('text_double_click_edit') : $this->language->get('text_click_edit');
		$data['module_admin_quick_edit_quick_edit_on'] = $this->config->get('module_admin_quick_edit_quick_edit_on');
		$data['module_admin_quick_edit_row_hover_highlighting'] = $this->config->get('module_admin_quick_edit_row_hover_highlighting');
		$data['module_admin_quick_edit_alternate_row_colour'] = $this->config->get('module_admin_quick_edit_alternate_row_colour');

		$this->document->addScript('view/javascript/aqe/catalog.min.js?v=' . EXTENSION_VERSION);

		$this->document->addStyle('view/stylesheet/aqe/catalog.min.css?v=' . EXTENSION_VERSION);

		$filters = array();

		foreach($this->config->get('module_admin_quick_edit_catalog_attributes') as $column => $attr) {
			$filters[$column] = (isset($this->request->get['filter_' . $column])) ? $this->request->get['filter_' . $column] : null;
		}

		if (isset($this->request->get['sort'])) {
			$sort = $this->request->get['sort'];
		} else {
			$sort = $this->config->get('module_admin_quick_edit_catalog_attributes_default_sort');
		}

		if (isset($this->request->get['order'])) {
			$order = $this->request->get['order'];
		} else {
			$order = $this->config->get('module_admin_quick_edit_catalog_attributes_default_order');
		}

		if (isset($this->request->get['page'])) {
			$page = $this->request->get['page'];
		} else {
			$page = 1;
		}

		$url = '';

		foreach($this->config->get('module_admin_quick_edit_catalog_attributes') as $column => $attr) {
			if (isset($this->request->get['filter_' . $column])) {
				$url .= '&filter_' . $column . '=' . urlencode(html_entity_decode($this->request->get['filter_' . $column], ENT_QUOTES, 'UTF-8'));
			}
		}

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
			'text'      => $this->language->get('text_home'),
			'href'      => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true),
			'active'    => false
		);

		$data['breadcrumbs'][] = array(
			'text'      => $this->language->get('heading_title'),
			'href'      => (int)$this->config->get('module_admin_quick_edit_override_menu_entry') ? $this->url->link('catalog/attribute', 'user_token=' . $this->session->data['user_token'] . $url . '&aqer=1', true) : $this->url->link('extension/module/admin_quick_edit/catalog__attribute__', 'user_token=' . $this->session->data['user_token'] . $url, true),
			'active'    => true
		);

		$data['add'] = $this->url->link('catalog/attribute/add', 'user_token=' . $this->session->data['user_token'] . $url . '&aqer=1', true);
		$data['delete'] = $this->url->link('catalog/attribute/delete', 'user_token=' . $this->session->data['user_token'] . $url . '&aqer=1', true);

		$actions = array(
			'edit'              => array('display' => 1, 'index' =>  4, 'short' => 'ed',    'type' =>       'edit', 'class' => 'btn-primary', 'rel' => array()),
		);

		$actions = array_filter($actions, 'column_display');
		foreach ($actions as $action => $attr) {
			$actions[$action]['name'] = $this->language->get('action_' . $action);
		}
		uasort($actions, 'column_sort');
		$data['attribute_actions'] = $actions;

		$columns = $this->config->get('module_admin_quick_edit_catalog_attributes');
		$columns = array_filter($columns, 'column_display');
		foreach ($columns as $column => $attr) {
			$columns[$column]['name'] = $this->language->get('column_' . $column);
		}
		uasort($columns, 'column_sort');
		$data['attribute_columns'] = $columns;

		$displayed_columns = array_keys($columns);
		$displayed_actions = array_keys($actions);
		$related_columns = array_merge(array_map(function($v) { return isset($v['rel']) ? $v['rel'] : ''; }, $columns), array_map(function($v) { return isset($v['rel']) ? $v['rel'] : ''; }, $actions));

		$data['attributes'] = array();

		$filter_data = array(
			'sort'      => $sort,
			'order'     => $order,
			'start'     => ($page - 1) * $this->config->get('config_limit_admin'),
			'limit'     => $this->config->get('config_limit_admin'),
			'columns'   => $displayed_columns,
			'actions'   => $displayed_actions
		);

		foreach ($filters as $filter => $value) {
			$filter_data['filter_' . $filter] = $value;
		}

		$results = $this->model_extension_module_aqe_catalog_attribute->getAttributes($filter_data);

		$attribute_total = $this->model_extension_module_aqe_catalog_attribute->getTotalAttributes();

		foreach ($results as $result) {
			$_buttons = array();

			foreach ($actions as $action => $attr) {
				switch ($action) {
					case 'edit':
						$_buttons[] = array(
							'type'  => $attr['type'],
							'action'=> $action,
							'title' => $this->language->get('action_' . $action),
							'url'   => html_entity_decode($this->url->link('catalog/attribute/edit', '&attribute_id=' . $result['attribute_id'] . '&user_token=' . $this->session->data['user_token'] . $url . '&aqer=1', true), ENT_QUOTES, 'UTF-8'),
							'icon'  => 'pencil',
							'name'  => null,
							'rel'   => json_encode(array()),
							'class' => $attr['class'],
						);
						break;
					default:
						$_buttons[] = array(
							'type'  => $attr['type'],
							'action'=> $action,
							'title' => $this->language->get('action_' . $action),
							'url'   => null,
							'icon'  => null,
							'name'  => $this->language->get('action_' . $attr['short']),
							'rel'   => json_encode($attr['rel']),
							'class' => $attr['class'],
						);
						break;
				}
			}

			$row = array(
				'attribute_id'=> $result['attribute_id'],
				'selected'   => isset($this->request->post['selected']) && in_array($result['attribute_id'], $this->request->post['selected']),
				'action'     => $_buttons
			);
			if (!is_array($columns)) {
				$row['name'] = $result['name'];
				$row['attribute_group'] = $result['attribute_group'];
				$row['sort_order'] = $result['sort_order'];
			} else {
				foreach ($columns as $column => $attr) {
					if ($column == 'id') {
						$row[$column] = $result['attribute_id'];
					} else if ($column == 'action') {
						$row[$column] = $_buttons;
					} else if ($column == 'selector') {
						$row[$column] = '';
					} else {
						$row[$column] = $result[$column];
					}
				}
			}
			$data['attributes'][] = $row;
		}

		$data['language_id'] = $this->config->get('config_language_id');

		$column_classes = array();
		$type_classes = array();
		$non_sortable = array();

		if (!is_array($columns)) {
			$displayed_columns = array('selector', 'name', 'attribute_group', 'sort_order', 'action');
			$columns = array();
		} else {
			foreach ($columns as $column => $attr) {
				if (empty($attr['sort'])) {
					$non_sortable[] = 'col_' . $column;
				}

				if (!empty($attr['type']) && !in_array($attr['type'], $type_classes)) {
					$type_classes[] = $attr['type'];
				}

				if (!empty($attr['align'])) {
					if (!empty($attr['type']) && $attr['editable']) {
						$column_classes[] = $attr['align'] . ' ' . $attr['type'];
					} else {
						$column_classes[] = $attr['align'];
					}
				} else {
					if (!empty($attr['type'])) {
						$column_classes[] = $attr['type'];
					} else {
						$column_classes[] = null;
					}
				}
			}
		}

		$data['columns'] = $displayed_columns;
		$data['actions'] = $displayed_actions;
		$data['related'] = $related_columns;
		$data['column_info'] = $columns;
		$data['non_sortable_columns'] = json_encode($non_sortable);
		$data['column_classes'] = $column_classes;
		$data['types'] = $type_classes;

		$data['update_url'] = html_entity_decode($this->url->link('extension/module/admin_quick_edit/catalog__attribute__quick_update', 'user_token=' . $this->session->data['user_token'], true));
		$data['load_popup_url'] = html_entity_decode($this->url->link('extension/module/admin_quick_edit/catalog__attribute__load_popup', 'user_token=' . $this->session->data['user_token'], true));

		$this->load->model('localisation/language');
		$lang_count = $this->model_localisation_language->getTotalLanguages();
		$data['single_lang_editing'] = $this->config->get('module_admin_quick_edit_single_language_editing') || ((int)$lang_count == 1);
		$data['batch_edit'] = (int)$this->config->get('module_admin_quick_edit_batch_edit');

		if (in_array("attribute_group", $displayed_columns)) {
			$this->load->model('catalog/attribute_group');
			$data['attribute_groups'] = $this->model_catalog_attribute_group->getAttributeGroups();
			$ag_select = array();
			foreach ($data['attribute_groups'] as $ag) {
				$ag_select[] = array("id" => $ag['attribute_group_id'], "value" => $ag['name']);
			}
			$data['attribute_group_select'] = addslashes(json_encode($ag_select));
		} else {
			$data['attribute_group_select'] = addslashes(json_encode(array()));
		}

		$data['user_token'] = $this->session->data['user_token'];

		$url = '';

		foreach ($this->config->get('module_admin_quick_edit_catalog_attributes') as $column => $attr) {
			if (isset($this->request->get['filter_' . $column])) {
				$url .= '&filter_' . $column . '=' . urlencode(html_entity_decode($this->request->get['filter_' . $column], ENT_QUOTES, 'UTF-8'));
			}
		}
		if ($order == 'ASC') {
			$url .= '&order=DESC';
		} else {
			$url .= '&order=ASC';
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['sorts'] = array();
		foreach ($this->config->get('module_admin_quick_edit_catalog_attributes') as $column => $attr) {
			if ((int)$this->config->get('module_admin_quick_edit_override_menu_entry')) {
				$data['sorts'][$column] = $this->url->link('catalog/attribute', 'user_token=' . $this->session->data['user_token'] . '&sort=' . $attr['sort'] . $url . '&aqer=1', true);
			} else {
				$data['sorts'][$column] = $this->url->link('extension/module/admin_quick_edit/catalog__attribute__', 'user_token=' . $this->session->data['user_token'] . '&sort=' . $attr['sort'] . $url, true);
			}
		}

		$url = '';

		foreach ($this->config->get('module_admin_quick_edit_catalog_attributes') as $column => $attr) {
			if (isset($this->request->get['filter_' . $column])) {
				$url .= '&filter_' . $column . '=' . urlencode(html_entity_decode($this->request->get['filter_' . $column], ENT_QUOTES, 'UTF-8'));
			}
		}

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		$pagination = new Pagination();
		$pagination->total = $attribute_total;
		$pagination->page = $page;
		$pagination->limit = $this->config->get('config_limit_admin');

		if ((int)$this->config->get('module_admin_quick_edit_override_menu_entry')) {
			$pagination->url = $this->url->link('catalog/attribute', 'user_token=' . $this->session->data['user_token'] . $url . '&page={page}' . '&aqer=1', true);
		} else {
			$pagination->url = $this->url->link('extension/module/admin_quick_edit/catalog__attribute__', 'user_token=' . $this->session->data['user_token'] . $url . '&page={page}', true);
		}

		$data['pagination'] = $pagination->render();

		$data['results'] = sprintf($this->language->get('text_pagination'), ($attribute_total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($attribute_total - $this->config->get('config_limit_admin'))) ? $attribute_total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $attribute_total, ceil($attribute_total / $this->config->get('config_limit_admin')));

		if (isset($this->session->data['error'])) {
			$this->error = $this->session->data['error'];

			unset($this->session->data['error']);
		}

		if (isset($this->error['warning'])) {
			$this->alert['warning']['warning'] = $this->error['warning'];
		}

		if (isset($this->error['error'])) {
			$this->alert['error']['error'] = $this->error['error'];
		}

		if (isset($this->session->data['success'])) {
			$this->alert['success']['success'] = $this->session->data['success'];

			unset($this->session->data['success']);
		}

		$data['filters'] = $filters;
		$data['alerts'] = $this->alert;

		$data['sort'] = $sort;
		$data['order'] = $order;

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$template = 'extension/module/aqe/catalog/attribute_list';

		$this->response->setOutput($this->load->view($template, $data));
	}

	public function autocomplete() {
		$this->load->model('extension/module/aqe/catalog/attribute');

		$response = array();

		if (isset($this->request->get['filter_name'])) {

			$filter_types = array('name', 'attribute_group');
			$filters = array();

			foreach($filter_types as $filter) {
				$filters[$filter] = (isset($this->request->get['filter_' . $filter])) ? $this->request->get['filter_' . $filter] : null;
			}

			if (isset($this->request->get['limit'])) {
				$limit = $this->request->get['limit'];
			} else {
				$limit = 20;
			}

			$filter_data = array(
				'start'               => 0,
				'limit'               => $limit,
				'columns'             => $filter_types
			);

			foreach($filters as $filter => $value) {
				$filter_data['filter_' . $filter] = $value;
			}

			$results = $this->model_extension_module_aqe_catalog_attribute->getAttributes($filter_data);

			foreach ($results as $result) {
				$response[] = array(
					'attribute_id'      => $result['attribute_id'],
					'name'              => strip_tags(html_entity_decode($result['name'], ENT_QUOTES, 'UTF-8')),
					'attribute_group'   => strip_tags(html_entity_decode($result['attribute_group'], ENT_QUOTES, 'UTF-8')),
				);
			}
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($response));
	}

	public function load_popup() {
		$this->load->model('catalog/attribute');

		$this->load->language('catalog/attribute');
		$this->load->language('extension/module/aqe/catalog/general');
		$this->load->language('extension/module/aqe/catalog/attribute');

		$response = array();

		if ($this->request->server['REQUEST_METHOD'] == 'POST' && $this->validateLoadPopup($this->request->post)) {
			$data['error_warning'] = '';
			list($data['parameter'], $data['i_id']) = explode("-", $this->request->post['id']);

			$data['user_token'] = $this->session->data['user_token'];

			$response["success"] = 1;

			switch ($data['parameter']) {
				case "name":
					$this->load->model('localisation/language');
					$data['languages'] = $this->model_localisation_language->getLanguages();
					$data['value'] = array();
					$descriptions = $this->model_catalog_attribute->getAttributeDescriptions($data['i_id']);
					foreach ($descriptions as $language_id => $value) {
						$data['value'][$language_id] = $value[$data['parameter']];
					}
					// $response['title'] = $this->language->get('entry_' . $data['parameter']);
					break;
				default:
					$response["success"] = 0;
					$response['error'] = $this->language->get('error_load_popup');
					break;
			}
			$response['title'] = $this->language->get('action_' . $data['parameter']);
		} else {
			$this->alert['error']['load'] = $this->language->get('error_load_popup');
		}

		$template = 'extension/module/aqe/catalog/quick_edit_form';

		$response['popup'] = $this->load->view($template, $data);

		$response = array_merge($response, array("errors" => $this->error), array("alerts" => $this->alert));

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($response));
	}

	public function quick_update() {
		$this->load->model('extension/module/aqe/catalog/attribute');

		$this->load->language('catalog/attribute');
		$this->load->language('extension/module/aqe/catalog/general');
		$this->load->language('extension/module/aqe/catalog/attribute');

		$response = array();

		if ($this->request->server['REQUEST_METHOD'] == 'POST' && $this->validateUpdateData($this->request->post)) {
			list($column, $id) = explode("-", $this->request->post['id']);
			$id = (array)$id;
			$value = $this->request->post['new'];
			$lang_id = isset($this->request->post['lang_id']) ? $this->request->post['lang_id'] : null;
			$alt = isset($this->request->post['alt']) ? $this->request->post['alt'] : "";
			$expression = !is_array($value) && strpos(trim($value), "#") === 0 && preg_match('/^#\s*(?P<operator>[+-\/\*])\s*(?P<operand>-?\d+\.?\d*)(?P<percent>%)?$/', trim($value)) === 1;

			if (isset($this->request->post['ids'])) {
				$id = array_unique(array_merge($id, (array)$this->request->post['ids']));
			}

			$results = array('done' => array(), 'failed' => array());
			$_results = array();

			foreach ((array)$id as $_id) {
				$result = $this->model_extension_module_aqe_catalog_attribute->quickEditAttribute($_id, $column, $value, $lang_id, $this->request->post);
				if ($result !== false) {
					$_results[$_id] = $result;
					$results['done'][] = $_id;
				} else {
					$results['failed'][] = $_id;
				}
			}

			$response['results'] = $results;

			if ($results['done']) {
				if ((int)$this->config->get('module_admin_quick_edit_show_success_message')) {
					$this->alert['success']['update'] = $this->language->get('text_success');
				}
				$response['success'] = 1;

				if (in_array($column, array('sort_order'))) {
					if ($expression) {
						$response['value'] = (int)$_results[$id[0]];
						if (count($id) > 1) {
							foreach ($id as $_id) {
								$response['values'][$_id] = (int)$_results[$_id];
							}
						}
					} else {
						$response['value'] = (int)$value;
						$response['values']['*'] = $response['value'];
					}
				} else if ($column == 'attribute_group') {
					$this->load->model('catalog/attribute_group');
					$agd = $this->model_catalog_attribute_group->getAttributeGroupDescriptions((int)$value);
					if ($agd)
						$response['value'] = isset($agd[$this->config->get('config_language_id')]['name']) ? $agd[$this->config->get('config_language_id')]['name'] : '';
					else
						$response['value'] = '';
					$response['values']['*'] = $response['value'];
				} else if(in_array($column, array('name'))) {
					if (isset($this->request->post['value'])) {
						$response['value'] = isset($this->request->post['value'][$this->config->get('config_language_id')]) ? $this->request->post['value'][$this->config->get('config_language_id')] : '';
					} else
						$response['value'] = $value;
					$response['values']['*'] = $response['value'];
				} else {
					$response['value'] = $value;
					$response['values']['*'] = $response['value'];
				}
			} else {
				$this->alert['error']['result'] = $this->language->get('error_update');
			}
		}

		$response = array_merge($response, array("errors" => $this->error), array("alerts" => $this->alert));

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($response));
	}

	protected function validateDelete() {
		$error = !$this->validatePermissions();

		$this->load->model('catalog/product');

		foreach ($this->request->post['selected'] as $attribute_id) {
			$product_total = $this->model_catalog_product->getTotalProductsByAttributeId($attribute_id);

			if ($product_total) {
				$error = true;
				$a = $this->model_catalog_attribute->getAttributeDescriptions($attribute_id);
				$name = isset($a[$this->config->get('config_language_id')]['name']) ? $a[$this->config->get('config_language_id')]['name'] : '';
				$this->alert['warning']['delete' . $attribute_id] = sprintf($this->language->get('error_delete'), $name, $product_total);
			}
		}

		return !$error;
	}

	protected function validateLoadPopup(&$data) {
		$errors = !$this->validatePermissions();

		if (!isset($data['id']) || strpos($data['id'], "-") === false) {
			$errors = true;
			$this->alert['error']['request'] = $this->language->get('error_update');
		}

		return !$errors;
	}

	protected function validateUpdateData(&$data) {
		$errors = !$this->validatePermissions();

		if (!isset($data['id']) || strpos($data['id'], "-") === false) {
			$errors = true;
			$this->alert['error']['request'] = $this->language->get('error_update');
			return false;
		}

		list($column, $id) = explode("-", $data['id']);

		if (!isset($data['old'])) {
			$errors = true;
			$this->alert['error']['request'] = $this->language->get('error_update');
		}

		if (!isset($data['new'])) {
			$errors = true;
			$this->alert['error']['request'] = $this->language->get('error_update');
		}

		if (in_array($column, array('sort_order')) && strpos(trim($data['new']), "#") === 0 && preg_match('/^#\s*(?P<operation>[+-\/\*])\s*(?P<operand>-?\d+\.?\d*)(?P<percent>%)?$/', trim($data['new'])) !== 1) {
			$errors = true;
			$this->alert['error']['expression'] = $this->language->get('error_expression');
		}

		if ($column == "name") {
			if (isset($data['value'])) {
				foreach ((array)$data['value'] as $language_id => $value) {
					if ((utf8_strlen($value) < 3) || (utf8_strlen($value) > 64)) {
						$errors = true;
						$this->error["value[$language_id]"] = $this->language->get('error_name');
					}
				}
			} else {
				if ((utf8_strlen($data['new']) < 3) || (utf8_strlen($data['new']) > 64)) {
					$errors = true;
					$this->alert['error']['name'] = $this->language->get('error_name');
				}
			}
		}

		if ($this->error && !isset($this->alert['warning']['warning'])) {
			$this->alert['warning']['warning'] = $this->language->get('error_warning');
		}

		return !$errors;
	}

	private function validatePermissions() {
		if (!$this->user->hasPermission('modify', 'catalog/attribute') || !$this->user->hasPermission('modify', 'extension/module/admin_quick_edit')) {
			$this->alert['error']['permission'] = $this->language->get('error_permission');
			return false;
		} else {
			return true;
		}
	}
}
