<?php

class ControllerExtensionModuleConfigurator extends Controller {
	private $error = array();
	
	public function index() {
		$this->load->language('extension/module/configurator');
		$this->load->model('localisation/language');				  
		$this->load->model('setting/setting');
		$this->load->model('extension/module/configurator');
		$this->load->model('catalog/attribute_group');
		$this->load->model('catalog/attribute');
		$this->load->model('tool/image');
		
		$this->document->setTitle(strip_tags($this->language->get('heading_title')));
		$this->document->addStyle('view/stylesheet/configurator/configurator.css', 'stylesheet');
		$this->document->addStyle('view/javascript/summernote/summernote.css', 'stylesheet');
		$this->document->addScript('view/javascript/summernote/summernote.min.js');
		$this->document->addScript('view/javascript/summernote/summernote-image-attributes.js');
		$this->document->addScript('view/javascript/summernote/opencart.js');
		
		$admin_lang_code = $this->config->get('config_admin_language');
		$editor_lang_arr = array(
			'ru-ru' => 'ru-RU',
			'ua-uk' => 'uk-UA',
		);
		
		$data['editor_lang'] = (array_key_exists($admin_lang_code, $editor_lang_arr)) ? $editor_lang_arr[$admin_lang_code] : '';

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			{
				$err_saving = 0;
				
				$this->model_setting_setting->editSetting('configurator', $this->request->post);

				if(isset($this->request->post['sections'])) {
					if(!$this->model_extension_module_configurator->updateSections($this->request->post['sections'])) ++$err_saving;
				}else{
					if(!$this->model_extension_module_configurator->updateSections()) ++$err_saving;
				}

				if(isset($this->request->post['presets'])) {
					if(!$this->model_extension_module_configurator->updatePresets($this->request->post['presets'])) ++$err_saving;
				}else{
					if(!$this->model_extension_module_configurator->updatePresets()) ++$err_saving;
				}
				
				if(!empty($this->request->post['configurator_settings']['config_clear_url'])) {
					$this->model_extension_module_configurator->setURLAliasSEO(trim($this->request->post['configurator_settings']['config_clear_url']));
				}else{
					$this->model_extension_module_configurator->setURLAliasSEO();
				}
				
				if(empty($err_saving)) {
					$this->session->data['success'] = $this->language->get('text_success');
					$data['success'] = $this->language->get('text_success');
					 
					if ($this->request->post['button_type'] == 'save') {
						$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
					}
				}else{
					$data['success'] = $this->language->get('text_save_error');
				}
			}
		}
		
		$data['configurator_settings'] = array(
			'config_groups' 		=> array(),
			'config_clear_url'		=> '',
			'config_meta_title'		=> '',
			'config_meta_desc' 		=> '',
			'config_meta_keyword' 	=> '',
			'config_heading_title'	=> '',
			'config_text_cost' 		=> '',
			'config_m_side_cols' 	=> 'hide',
			'config_gen_txt_pos' 	=> 'aft',
			'config_general_text' 	=> '',
			'config_w_img' 			=> '120',
			'config_h_img' 			=> '120',
			'config_another_img' 	=> '0',
			'config_prd_title_a'	=> '0',
			'config_prd_load' 		=> '50',
			'config_p_title'		=> '',
			'config_p_pos'			=> 'lc_bef',
			'config_p_scroll_top'	=> '1',
			'config_sctns_grid'		=> 'cell-3',
			'config_prsts_grid'		=> 'list-1',
			'config_desc_trim' 		=> '200',
			'config_prt_title' 		=> 'Print configuration yourshop.com',
			'config_prt_tbl_title'	=> 'Your configuration',
			'config_prt_logo'		=> 'configurator/logo-print.png',
			'config_prt_qr_code'	=> 'www.yourshop.com'."\n".'phone: 999-99-99'."\n".'e-mail: yourmail@yourshop.com',
			'config_prt_contcs'		=> '<br />www.yourshop.com<br />adress: your str. 99<br />phone: 999-99-99<br />e-mail: yourmail@yourshop.com<br />',
			'config_prt_text'		=> 'Test test test Test test test. Test test test Test test test. Test test test Test test test. Test test test Test test test.',
			'config_prt_notice'		=> 'A note about your configuration...',
			'config_custom_css'		=> '',
			'config_custom_js'		=> '',
			'license_key'			=> ''
		);

		$configurator_settings = $this->config->get('configurator_settings');
		
		foreach($data['configurator_settings'] as $key => $setting) {
			if(isset($this->request->post['configurator_settings'][$key])) {
				$data['configurator_settings'][$key] = $this->request->post['configurator_settings'][$key];
			}elseif(isset($configurator_settings[$key])){
				$data['configurator_settings'][$key] = $configurator_settings[$key];
			}
		}
		
		$data['prt_logo_no_img'] = $this->model_tool_image->resize('configurator/logo-print-no-img.png', 100, 100);
		$data['prt_logo_img_tumb'] = (!empty($data['configurator_settings']['config_prt_logo']))? $this->model_tool_image->resize($data['configurator_settings']['config_prt_logo'], 100, 100) : $data['prt_logo_no_img'];

		$data['sections'] = array();
		$data['section_no_img'] = $this->model_tool_image->resize('configurator/section-no-img.png', 100, 100);
		
		if(isset($this->request->post['sections'])) {
			$sections = $this->request->post['sections'];
			
			foreach($sections as $key => $val) {
				$sections[$val['id']]['img_tumb'] = (!empty($val['img_path']))? $this->model_tool_image->resize($val['img_path'], 100, 100) : $data['section_no_img'];
			}
			
			$data['sections'] = $sections;
		}else{
			$sections = array();
			
			foreach($this->model_extension_module_configurator->getListSections() as $key => $val) {
				$sections[$val['id']] = unserialize($val['data']);
				$sections[$val['id']]['img_tumb'] = (!empty($sections[$val['id']]['img_path']))? $this->model_tool_image->resize($sections[$val['id']]['img_path'], 100, 100) : $data['section_no_img'];
			}

			$data['sections'] = $sections;
		}		

		$data['presets'] = array();
		$data['preset_no_img'] = $this->model_tool_image->resize('configurator/preset-no-img.png', 100, 100);

		if(isset($this->request->post['presets'])) {
			$presets = $this->getProductDataOfPresets($this->request->post['presets']);
			
			foreach($presets as $key => $val) {
				$presets[$val['id']]['img_tumb'] = (!empty($val['img_path']))? $this->model_tool_image->resize($val['img_path'], 100, 100) : $data['preset_no_img'];
			}
			
			$data['presets'] = $presets;
		}else{
			$presets = array();
			
			foreach($this->model_extension_module_configurator->getListPresets() as $key => $val) {
				$presets[$val['id']] = unserialize($val['data']);
				$presets[$val['id']]['img_tumb'] = (!empty($presets[$val['id']]['img_path']))? $this->model_tool_image->resize($presets[$val['id']]['img_path'], 100, 100) : $data['preset_no_img'];
			}

			$data['presets'] = $this->getProductDataOfPresets($presets);
		}

		$filter_data = array(
			'sort'  => 'sort_order',
			'order' => 'ASK',
			'start' => NULL,
			'limit' => NULL
		);

		$attribute_groups = $this->model_catalog_attribute_group->getAttributeGroups($filter_data);
		$attributes = $this->model_catalog_attribute->getAttributes($filter_data);
		$count_excl_attr = $this->model_extension_module_configurator->getCountExclusionsOfAttributes();
		
		$data['attribute_groups'] = array();

		foreach($attribute_groups as $k_grp => $attr_group) {
			$attr_grp_id = $attr_group['attribute_group_id'];
			$data['attribute_groups'][$attr_grp_id] = $attr_group;
			
			foreach($attributes as $k => $attr) {
				$attr_id = $attr['attribute_id'];
				$attr['count'] = (isset($count_excl_attr[$attr_id]))? $count_excl_attr[$attr_id] : 0;
			
				if($attr_grp_id == $attr['attribute_group_id']) {
					$data['attribute_groups'][$attr_grp_id]['attributes'][$attr_id] = $attr;
					unset($attributes[$k]);
				}
			}
			unset($attribute_groups[$k_grp]);
		}

		$data['languages'] = $this->model_localisation_language->getLanguages();
		$data['current_lang_id'] = $this->config->get('config_language_id');
		
		$data['currency_d_place'] = $this->currency->getDecimalPlace($this->config->get('config_currency'));
		$data['currency_smbl_left'] = $this->currency->getSymbolLeft($this->config->get('config_currency'));
		$data['currency_smbl_right'] = $this->currency->getSymbolRight($this->config->get('config_currency'));
		

		foreach(explode(',', $this->language->get('lang_keys')) as $lang_key) {
			$data[$lang_key] = $this->language->get($lang_key);
		}
		
		$data['button_refresh'] = $this->language->get('button_refresh');
		$data['button_save'] = $this->language->get('button_save');
		$data['button_cancel'] = $this->language->get('button_cancel');

		if (!isset($data['success'])) {
			$data['success'] = '';
		}		
		
		if(isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		}else{
			$data['error_warning'] = '';
		}
		
		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_module'),
			'href' => $this->url->link('extension/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/module/configurator', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['action'] = $this->url->link('extension/module/configurator', 'user_token=' . $this->session->data['user_token'], true);
		$data['cancel'] = $this->url->link('extension/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

		$data['user_token'] = $this->session->data['user_token'];

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/configurator', $data));
	}


	public function getExclusions () {
		$data_arr = array();
		$excl_type = $this->request->post['excl_type'];
		$target_ids = $this->request->post['target_ids'];
		
		if(empty($target_ids) && $target_ids != '0') {
			$this->response->addHeader('Content-Type: application/json');
			$this->response->setOutput(json_encode($data_arr));
			return;
		}
		
		$this->load->model('extension/module/configurator');
		
		if($excl_type == 'category' || $excl_type == 'product') {
			$data_arr = $this->model_extension_module_configurator->getExclItemsOfSection($target_ids, $excl_type);

			$data_id_list = implode(',', array_column($data_arr, $excl_type.'_id'));
			
			$exclusions_list = $this->model_extension_module_configurator->getExclusionsOfSection($data_id_list, $excl_type);

			foreach($data_arr as $key => $val) {
				$data_arr[$key]['exclusions'] = array();
				
				foreach($exclusions_list as $exclusion) {
					if($data_arr[$key][$excl_type.'_id'] == $exclusion[$excl_type.'_id']) {
						$data_arr[$key]['exclusions'][] = array(
							'id' => $exclusion['exclusion_'.$excl_type.'_id'],
							'name' => $exclusion['name']
						);
					}
				}	
			}
		}elseif($excl_type == 'attribute') {
			$exclusions_list = $this->model_extension_module_configurator->getExclusionsOfAttribute($target_ids, null, true);
			$data_arr = $exclusions_list;
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($data_arr));
	}


	public function actionOnExclusions() {
		if($this->user->hasPermission('modify', 'extension/module/configurator')) {
			$this->load->model('extension/module/configurator');
		
			$excl_type = $this->request->post['excl_type'];
			$event= $this->request->post['event'];
			$excl_data = $this->request->post['excl_data'];
			$response = false;
			$exclusion = array();
			
			if($excl_type == 'category' || $excl_type == 'product') {
				if(!empty($excl_data['target_id']) && !empty($excl_data['excl_id'])) {
					$exclusion = array(
						'target_id' => $excl_data['target_id'],
						'excl_id' => $excl_data['excl_id']
					);
				}
			}elseif($excl_type == 'attribute') {
				if(!empty($excl_data)) {
					foreach($excl_data as $key => $excl_val) {
						if(isset($excl_val['attr_value'])) $excl_data[$key]['attr_value'] = substr($excl_val['attr_value'], 0, 155);
						if(isset($excl_val['excl_attr_value'])) $excl_data[$key]['excl_attr_value'] = substr($excl_val['excl_attr_value'], 0, 155);
					}
					$exclusion = $excl_data;
				}
			}
			
			if(!empty($exclusion)) {
				if($event == 'add') {
					$response = $this->model_extension_module_configurator->setExclusion($excl_type, $exclusion);	
				}elseif($event == 'delete') {
					$response = $this->model_extension_module_configurator->deleteExclusion($excl_type, $exclusion);
				}
			}
		}else{
			$response = 'error_permission';
		}	

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($response));
	}
	
	
	public function removeRelatedExclusions() {
		$output = false;
		
		if($this->user->hasPermission('modify', 'extension/module/configurator')) {
			if(isset($this->request->post['rel_id_list']) && isset($this->request->post['type'])) {
				$rel_id_list = trim((string)$this->request->post['rel_id_list']);
				$type = trim((string)$this->request->post['type']);
				
				if($rel_id_list != '' && $type != '') {
					$this->load->model('extension/module/configurator');
					$output = $this->model_extension_module_configurator->removeRelatedExclusions($rel_id_list, $type);
				}
			}
		}else{
			$output = 'error_permission';
		}	
		
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($output));
	}
	
	
	public function getCountExclusionsOfAttributes () {
		$this->load->model('extension/module/configurator');

		$output = $this->model_extension_module_configurator->getCountExclusionsOfAttributes($this->request->post['attr_id_list']);

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($output));
	}
	
	
	public function autocompleteForAttrExclusion() {
		$output = array();

		if(isset($this->request->get['filter_name']) && !empty($this->request->get['target_data']) && isset($this->request->get['attr_data'])) {
			$this->load->model('extension/module/configurator');

			$request = array(
				'filter_name'	=> substr(trim($this->request->get['filter_name']), 0, 155),
				'target_data'	=> (string)$this->request->get['target_data'],
				'attr_data'		=> json_decode(htmlspecialchars_decode($this->request->get['attr_data']), true),
				'limit'			=> (!empty($this->request->get['limit']))? (int)$this->request->get['limit'] : 5,
				'start'			=> 0
			);

			$output = $this->model_extension_module_configurator->getDataOfAttribute($request);
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($output));
	}
	
	
	public function autocompleteForPresets() {
		$output = array();

		if(isset($this->request->get['filter_name'])) {
			$this->load->model('extension/module/configurator');

			$request = array(
				'inc_ctgrs_list'	=> (isset($this->request->get['inc_ctgr_id_list']))? $this->request->get['inc_ctgr_id_list'] : '',
				'added_prdcts_list'	=> (isset($this->request->get['added_prdct_id_list']))? $this->request->get['added_prdct_id_list'] : '',
				'filter_name'		=> (isset($this->request->get['filter_name']))? substr(trim($this->request->get['filter_name']), 0, 155) : '',
				'limit'				=> (!empty($this->request->get['limit']))? (int)$this->request->get['limit'] : 5,
				'start'				=> 0
			);

			$products = $this->model_extension_module_configurator->getProductsForPreset($request);
			
			foreach($products as $product) {
				$output[] = array(
					'path_edit'	 => htmlspecialchars_decode($this->url->link('catalog/product/edit', 'user_token=' . $this->session->data['user_token'] . '&product_id=' . $product['product_id'], true)),
					'name'       => strip_tags(html_entity_decode($product['name'], ENT_QUOTES, 'UTF-8')),
					'product_id' => $product['product_id'],
					'quantity'   => $product['quantity'],
					'minimum'    => ($product['minimum'])? $product['minimum'] : 1,
					'price'      => $product['price'],
					'discount'   => $product['discount'],
					'special'    => $product['special'],
					'options'    => $this->getProductOptions($product['product_id']),
				);
			}
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($output));
	}
	
	
	private function getProductDataOfPresets($presets = array()) {
		if(empty($presets)) return;
		
		$this->load->model('extension/module/configurator');
		$this->load->model('tool/image');
		$prod_id_list = array();
		
		foreach($presets as $preset) {
			if(isset($preset['p_sections'])) {
				foreach($preset['p_sections'] as $p_section) {
					if($p_section['p_p_id']) $prod_id_list[] = (int)$p_section['p_p_id'];
				}
			}
		}

		$products_data = $this->model_extension_module_configurator->getProductDataOfPresets(implode(',', $prod_id_list));
		$products_arr = array();

		foreach($products_data as $key => $product) {
			$products_arr[$product['product_id']] = $product;
			unset($products_data[$key]);
		}
		
		foreach($presets as $p_id => $preset) {
			if(isset($preset['p_sections'])) {
				foreach($preset['p_sections'] as $p_s_id => $p_section) {
					if(isset($p_section['p_p_id']) && !empty($products_arr[$p_section['p_p_id']])) {
						$p_p_id = $p_section['p_p_id'];
						
						$presets[$p_id]['p_sections'][$p_s_id]['p_p_path_edit'] = htmlspecialchars_decode($this->url->link('catalog/product/edit', 'user_token=' . $this->session->data['user_token'] . '&product_id=' . $p_p_id, true));
						$presets[$p_id]['p_sections'][$p_s_id]['p_p_name'] = strip_tags(html_entity_decode($products_arr[$p_p_id]['name'], ENT_QUOTES, 'UTF-8'));
						$presets[$p_id]['p_sections'][$p_s_id]['p_p_price'] = $products_arr[$p_p_id]['price'];
						$presets[$p_id]['p_sections'][$p_s_id]['p_p_discount'] = $products_arr[$p_p_id]['discount'];
						$presets[$p_id]['p_sections'][$p_s_id]['p_p_special'] = $products_arr[$p_p_id]['special'];
						$presets[$p_id]['p_sections'][$p_s_id]['p_p_status'] = $products_arr[$p_p_id]['status'];
						$presets[$p_id]['p_sections'][$p_s_id]['p_p_quantity'] = $products_arr[$p_p_id]['quantity'];
						$presets[$p_id]['p_sections'][$p_s_id]['p_p_minimum'] = ($products_arr[$p_p_id]['minimum'])? $products_arr[$p_p_id]['minimum'] : 1;
						
						$options = $this->getProductOptions($p_p_id);
						
						foreach($options as $opt_id => $opt) {
							if(isset($p_section['p_p_option'][$opt_id])) $options[$opt_id]['value'] = $p_section['p_p_option'][$opt_id];
						}
						
						$presets[$p_id]['p_sections'][$p_s_id]['p_p_options'] = $options;
					}
				}
			}
		}

		return $presets;
	}
	
	
	private function getProductOptions($product_id) {
		$options = array();
		
		if(empty($product_id) && $product_id != '0') return $options;
	
		$this->load->model('extension/module/configurator');
		$this->load->model('tool/image');

		foreach ($this->model_extension_module_configurator->getProductOptionsOfPresets((int)$product_id) as $option) {
			$product_option_value_data = array();

			foreach ($option['product_option_value'] as $option_value) {
				if (!$option_value['subtract'] || ($option_value['quantity'] > 0)) {
					$product_option_value_data[$option_value['product_option_value_id']] = array(
						'product_option_value_id' => $option_value['product_option_value_id'],
						'option_value_id'         => $option_value['option_value_id'],
						'name'                    => $option_value['name'],
						'image'                   => $option_value['image'] ? $this->model_tool_image->resize($option_value['image'], 50, 50) : '',
						'price'                   => ((float)$option_value['price'])? $option_value['price'] : false,
						'price_prefix'            => $option_value['price_prefix']
					);
				}
			}

			$options[$option['product_option_id']] = array(
				'product_option_id'    => $option['product_option_id'],
				'product_option_value' => $product_option_value_data,
				'option_id'            => $option['option_id'],
				'name'                 => $option['name'],
				'type'                 => $option['type'],
				'value'                => $option['value'],
				'required'             => $option['required']
			);
		}
	
		return $options;
	}


	public function performToolkitOperations() {
		$output = false;
		
		if($this->user->hasPermission('modify', 'extension/module/configurator')) {
			if(isset($this->request->post['operation_name'])) {
				$operation_name = (string)$this->request->post['operation_name'];

				$this->load->model('extension/module/configurator');
				$output = $this->model_extension_module_configurator->performToolkitOperations($operation_name);
			}
		}else{
			$output = 'error_permission';
		}	
		
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($output));
	}
	
	
	public function checkLicense() {
		$this->load->model('extension/module/configurator');
		$response = false;
		$input_key = null;
		
		if(isset($this->request->post['input_key'])) $input_key = $this->request->post['input_key'];

		if ($this->model_extension_module_configurator->checkLicense($input_key)) $response = true;

		if(empty($input_key)) return $response;
		
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($response));
	}

	
	protected function validate() {
		if(!$this->user->hasPermission('modify', 'extension/module/configurator')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}
		
		if(!$this->checkLicense()) {
			$this->error['warning'] = $this->language->get('error_license_key');
		}

		if(!$this->error) {
			return true;
		}else{
			return false;
		}	
	}	

	
	public function install() {
        if($this->user->hasPermission('modify', 'extension/extension/module')) {
			$this->load->model('extension/module/configurator');
			
			$this->model_extension_module_configurator->createModuleLayout();
			$this->model_extension_module_configurator->setURLAliasSEO();
			$this->model_extension_module_configurator->createModuleTables();	
        }
    }

	
    public function uninstall() {
        if($this->user->hasPermission('modify', 'extension/extension/module')) {
			$this->load->model('extension/module/configurator');
			
			$this->model_extension_module_configurator->deleteModuleData();  
        }
    }
	
}