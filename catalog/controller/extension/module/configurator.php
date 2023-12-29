<?php

class ControllerExtensionModuleConfigurator extends Controller {

	public function index() {
		$this->load->language('extension/module/configurator');
		$this->load->model('setting/setting');
		$this->load->model('extension/module/configurator');
		$this->load->model('tool/image');
		
		$configurator_settings = $this->config->get('configurator_settings');
		
		$this->document->setTitle($configurator_settings['config_meta_title']);
		$this->document->setDescription($configurator_settings['config_meta_desc']);
		$this->document->setKeywords($configurator_settings['config_meta_keyword']);

		if(isset($this->request->get['route'])) {
			if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {
				$this->document->addLink(HTTPS_SERVER, 'canonical');
			}else{	
				$this->document->addLink(HTTP_SERVER, 'canonical');
			}
			$data['route'] = $this->request->get['route'];
        }else{
            $data['route'] = "";
        }

		if(file_exists('catalog/view/theme/'. $this->config->get('config_template') .'/stylesheet/configurator/configurator.css')) {
			$this->document->addStyle('catalog/view/theme/'. $this->config->get('config_template') .'/stylesheet/configurator/configurator.css', 'stylesheet', 'screen, print');
		}else{
			$this->document->addStyle('catalog/view/theme/default/stylesheet/configurator/configurator.css', 'stylesheet', 'screen, print');
		}

		foreach(explode(',', $this->language->get('lang_keys')) as $lang_key) {
			$data[$lang_key] = $this->language->get($lang_key);
		}
		
		if(!empty($configurator_settings['config_heading_title'])) { 
			$data['heading_title'] = $configurator_settings['config_heading_title'];
		}else{
			$data['heading_title'] = $this->language->get('heading_title');
		}
		
		if(isset($configurator_settings['config_another_img'])) { 
			$data['another_img'] = (int)$configurator_settings['config_another_img'];
		}else{
			$data['another_img'] = 1;
		}
		
		if(isset($configurator_settings['config_prd_title_a'])) { 
			$data['prd_title_a'] = (int)$configurator_settings['config_prd_title_a'];
		}else{
			$data['prd_title_a'] = 1;
		}		
		
		if(isset($configurator_settings['config_prd_load'])) { 
			$data['prd_load'] = (int)$configurator_settings['config_prd_load'];
		}else{
			$data['prd_load'] = 50;
		}
		
		if(isset($configurator_settings['config_general_text'])) { 
			$data['general_text'] = html_entity_decode($configurator_settings['config_general_text'], ENT_QUOTES, "UTF-8");
		}else{
			$data['general_text'] = '';
		}
		
		if(!empty(trim($configurator_settings['config_text_cost']))) { 
			$data['text_cost'] = $configurator_settings['config_text_cost'];
		}else{
			$data['text_cost'] = $this->language->get('config_text_cost');
		}	
		
		if(!empty($configurator_settings['config_m_side_cols'])) { 
			$data['config_m_side_cols'] = 'm-col-'.str_replace('_', '-', $configurator_settings['config_m_side_cols']);
		}else{
			$data['config_m_side_cols'] = 'm-col-hide';
		}
		
		if(!empty($configurator_settings['config_gen_txt_pos'])) { 
			$data['config_gen_txt_pos'] = $configurator_settings['config_gen_txt_pos'];
		}else{
			$data['config_gen_txt_pos'] = 'bottom';
		}

		if(isset($configurator_settings['config_prt_title'])) { 
			$data['prt_title'] = html_entity_decode($configurator_settings['config_prt_title'], ENT_QUOTES, "UTF-8");
		}else{
			$data['prt_title'] = '';
		}
		
		if(isset($configurator_settings['config_prt_tbl_title'])) { 
			$data['prt_tbl_title'] = html_entity_decode($configurator_settings['config_prt_tbl_title'], ENT_QUOTES, "UTF-8");
		}else{
			$data['prt_tbl_title'] = '';
		}				
		
		if(isset($configurator_settings['config_prt_logo'])) { 
			$data['prt_logo'] = $this->model_tool_image->resize($configurator_settings['config_prt_logo'], 500, 282);
		}else{
			$data['prt_logo'] = '';
		}	
		
		if(isset($configurator_settings['config_prt_qr_code'])) { 
			$data['prt_qr_code'] = urlencode(strip_tags(htmlspecialchars_decode($configurator_settings['config_prt_qr_code'])));
		}else{
			$data['prt_qr_code'] = '';
		}
		
		if(isset($configurator_settings['config_prt_contcs'])) { 
			$data['prt_contcs'] = str_replace(array("\r\n", "\r", "\n"), '', html_entity_decode($configurator_settings['config_prt_contcs'], ENT_QUOTES, "UTF-8"));
		}else{
			$data['prt_contcs'] = '';
		}				
		
		if(isset($configurator_settings['config_prt_text'])) { 
			$data['prt_text'] = str_replace(array("\r\n", "\r", "\n"), '', html_entity_decode($configurator_settings['config_prt_text'], ENT_QUOTES, "UTF-8"));
		}else{
			$data['prt_text'] = '';
		}
		
		if(isset($configurator_settings['config_prt_notice'])) { 
			$data['prt_notice'] = str_replace(array("\r\n", "\r", "\n"), '', html_entity_decode($configurator_settings['config_prt_notice'], ENT_QUOTES, "UTF-8"));
		}else{
			$data['prt_notice'] = '';
		}	

		if(isset($configurator_settings['config_p_title'])) { 
			$p_title = $configurator_settings['config_p_title'];
		}else{
			$p_title = '';
		}			
		
		if(!empty($configurator_settings['config_p_pos'])) { 
			$p_pos = $configurator_settings['config_p_pos'];
		}else{
			$p_pos = 'lc_aft';
		}		
		
		if(isset($configurator_settings['config_p_scroll_top'])) { 
			$data['p_scroll_top'] = (int)$configurator_settings['config_p_scroll_top'];
		}else{
			$data['p_scroll_top'] = 1;
		}
		
		if(!empty($configurator_settings['config_sctns_grid'])) { 
			$s_grid = explode('-', $configurator_settings['config_sctns_grid']);
			$data['sctns_style'] = $s_grid[0];
			$data['num_cols'] = $s_grid[1];
		}else{
			$data['sctns_style'] = 'cell';
			$data['num_cols'] = 3;
		}
		
		if(!empty($configurator_settings['config_prsts_grid'])) { 
			$p_grid = explode('-', $configurator_settings['config_prsts_grid']);
			$prsts_style = $p_grid[0];
			$p_num_cols = $p_grid[1];
		}else{
			$prsts_style = 'list';
			$p_num_cols = 1;
		}	
		
		if(isset($configurator_settings['config_groups'])) { 
			$data['config_groups'] = $configurator_settings['config_groups'];
		}else{
			$data['config_groups'] = array();
		}
		
		if(isset($configurator_settings['config_custom_js'])) { 
			$data['custom_js'] = html_entity_decode($configurator_settings['config_custom_js'], ENT_QUOTES, "UTF-8");
		}else{
			$data['custom_js'] = '';
		}
		
		$this_currency = ($this->session->data['currency'])? $this->session->data['currency'] : $this->config->get('config_currency');
		$data['currency_d_place'] = $this->currency->getDecimalPlace($this_currency);
		$data['currency_smbl_left'] = $this->currency->getSymbolLeft($this_currency);
		$data['currency_smbl_right'] = $this->currency->getSymbolRight($this_currency);
		

		$data['required_section_exists'] = false;
		$sections = array();
		$section_no_img = $this->model_tool_image->resize('configurator/section-no-img.png', 120, 120);
		
		foreach($this->model_extension_module_configurator->getListSections() as $key => $val) {
			$sections[$val['id']] = unserialize ($val['data']);
			$sections[$val['id']]['img_tumb'] = (!empty($sections[$val['id']]['img_path']))? $this->model_tool_image->resize($sections[$val['id']]['img_path'], 120, 120) : $section_no_img;
			$sections[$val['id']]['included_categories'] = $this->model_extension_module_configurator->getCategoryTree($sections[$val['id']]['included_categories']);
			if($sections[$val['id']]['required']) $data['required_section_exists'] = true;
		}
		
		uasort($sections, function ($a, $b){
			$res = strcmp($a['group'], $b['group']);

			if ($res === 0) {
				$res = strcmp($a['sort_order'], $b['sort_order']);
				
				if ($res === 0) {
					$res = strcmp($a['id'], $b['id']);
				}
			}

			return $res;
		});
		
		$data['sections'] = $sections;
		
		
		$presets = array();
		$preset_no_img = $this->model_tool_image->resize('configurator/preset-no-img.png', 120, 120);
			
		foreach($this->model_extension_module_configurator->getListPresets() as $key => $val) {
			$presets[$val['id']] = unserialize($val['data']);
			$presets[$val['id']]['img_tumb'] = (!empty($presets[$val['id']]['img_path']))? $this->model_tool_image->resize($presets[$val['id']]['img_path'], 120, 120) : $preset_no_img;
		}
		
		uasort($presets, function ($a, $b){
			$res = strcmp($a['sort_order'], $b['sort_order']);

			if ($res === 0) {
				$res = strcmp($a['id'], $b['id']);
			}

			return $res;
		});


		$presets_layout = $this->getPresetsLayout($presets, $p_num_cols, $p_title, $prsts_style, $this->language->get('text_build_btn'));
		
		$column_left = $this->load->controller('common/column_left');
		$column_right = $this->load->controller('common/column_right');
		$presets_top = '';
		$presets_bottom = '';
		
		if($presets_layout) {
			switch($p_pos) {
				case 'lc_bef':
					if(!empty($column_left)) {
						$pos = strpos($column_left, '>'); 
						$column_left = ($pos !== false)? substr_replace($column_left, '>' . $presets_layout , $pos, strlen('>')) : $column_left;
					}else{
						$column_left = '<aside id="column-left" class="col-sm-3 hidden-xs">' . $presets_layout . '</aside>';
					}	
					break;
				case 'lc_aft':
					if(!empty($column_left)) {
						$pos = strrpos($column_left, '</'); 
						$column_left = ($pos !== false)? substr_replace($column_left, $presets_layout . '</' , $pos, strlen('</')) : $column_left;
					}else{
						$column_left = '<aside id="column-left" class="col-sm-3 hidden-xs">' . $presets_layout . '</aside>';
					}	
					break;
				case 'rc_bef':
					if(!empty($column_right)) {
						$pos = strpos($column_right, '>'); 
						$column_right = ($pos !== false)? substr_replace($column_right, '>' . $presets_layout , $pos, strlen('>')) : $column_right;
					}else{
						$column_right = '<aside id="column-right" class="col-sm-3 hidden-xs">' . $presets_layout . '</aside>';
					}
					break;			
				case 'rc_aft':		
					if(!empty($column_right)) {
						$pos = strrpos($column_right, '</'); 
						$column_right = ($pos !== false)? substr_replace($column_right, $presets_layout . '</' , $pos, strlen('</')) : $column_right;
					}else{
						$column_right = '<aside id="column-right" class="col-sm-3 hidden-xs">' . $presets_layout . '</aside>';
					}		
					break;			
				case 'cntr_bef':
					$presets_top = $presets_layout;	
					break;
				case 'cntr_aft':
					$presets_bottom = $presets_layout;
					break;
			}
		}

		$data['column_left'] = $column_left;
		$data['column_right'] = $column_right;
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['presets_top'] = $presets_top;
		$data['presets_bottom'] = $presets_bottom;
		$data['footer'] = $this->load->controller('common/footer');

		if(!empty(trim($configurator_settings['config_custom_css']))) {
			$patterns = array('#:*[\s]{2,}#', '#/\*(?:[^*]*(?:\*(?!/))*)*\*/#');
			$custom_css = preg_replace($patterns, '', html_entity_decode($configurator_settings['config_custom_css'], ENT_QUOTES, "UTF-8"));
			
			$data['header'] = preg_replace('/<\/head>/', '<style>'.$custom_css.'</style></head>', (string)$this->load->controller('common/header'), 1);
		}else{
			$data['header'] = $this->load->controller('common/header');
		}

		$this->response->setOutput($this->load->view('extension/module/configurator', $data));
	}
	

	public function actionListProducts() {
		$products_arr = array();
		
		if(isset($this->request->post['params'])) {
			$params = $this->request->post['params'];
			
			$added_prdcts_id = (isset($params['added_prdcts_id']))? $params['added_prdcts_id'] : '';
			$inc_ctgr_list = (isset($params['inc_ctgr_list']))? $params['inc_ctgr_list'] : '';
			$target_ctgr = (!empty($params['target_ctgr']))? (int)$params['target_ctgr'] : 'default';
			$filter = (isset($params['filter']))? substr(trim($params['filter']), 0, 155) : '';
			$sorting = (!empty($params['sorting']))? $params['sorting'] : 'default';
			$start = (!empty($params['start']))? (int)$params['start'] : 0;
			$limit = (!empty($params['limit']))? (int)$params['limit'] : 50;
		
			if(!empty($inc_ctgr_list)) {
				$this->load->model('extension/module/configurator');
				$configurator_settings = $this->config->get('configurator_settings');
				$desc_trim_length = $configurator_settings['config_desc_trim'];
				
				if($target_ctgr == 'default') {
					$ctgrs_arr = array();
					foreach(explode('::', $inc_ctgr_list) as $inc_ctgr) {
						$inc_ctgr = explode('~~', $inc_ctgr);
						$ctgrs_arr[] = $inc_ctgr[0];
					}
					$target_ctgrs_id = implode(',', $ctgrs_arr);
				}else{
					$target_ctgrs_id = $target_ctgr;
				}

				$products_arr = $this->model_extension_module_configurator->getProductsOfSection($target_ctgrs_id,  $added_prdcts_id, $desc_trim_length, $filter, $sorting, $start, $limit);
				$products_arr = $this->preparationProductsData($products_arr);
			}
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($products_arr));
	}
	
	
	private function getPresetsLayout($presets = array(), $num_cols = 1, $p_title = null, $prsts_style = 'list', $btn_text = 'build') {
		if(empty($presets)) return false;
		
		$html = '';

		if(empty($p_title)) {
			$html .= '<div id="presets" class="presets-grid">';
			$html_close = "</div>";
		}else{
			$html .= '<section id="presets" class="presets-grid">';
			$html .= 	'<h3 class="presets-title">' . strip_tags(htmlspecialchars_decode($p_title)) . '</h3>';
			$html_close = "</section>";
		}
		
		$num_cols_class = 12 / $num_cols;
		
		$html .= 		'<div class="presets-region">';
		
		foreach($presets as $preset) {
			if($preset['status'] == 0) continue;

			$html .= 		'<div class="presets-box ' . (($prsts_style == 'cell')? 'style-cell' : 'style-list') .' col-md-' . $num_cols_class . ' col-sm-' . $num_cols_class . ' col-xs-12">';
			$html .= 			'<div id="preset-' . $preset['id'] . '" class="preset">';
			$html .= 				'<h4 class="preset-title">' . strip_tags(htmlspecialchars_decode($preset['name'])) . '</h4>';
			$html .= 				'<div class="preset-content">';
			$html .= 					'<div class="preset-img" onclick="setPreset(\'' . $preset['id'] . '\')">';
			$html .= 						'<img src="'. $preset['img_tumb'] . '" alt="' . $preset['name'] . '">';		
			$html .= 					'</div>';

			if(!empty($preset['description'])) { 
				$html .=				'<div class="preset-desc">';
				$html .=					'<p>'. strip_tags(htmlspecialchars_decode($preset['description'])) . '</p>';
				$html .=				'</div>';
			}
			
			$html .=					'<div class="preset-btn">';
			$html .=						'<a class="btn load-preset-btn" onclick="setPreset(\'' . $preset['id'] . '\')">' . $btn_text . '</a>';
			$html .=					'</div>';
			$html .= 				'</div>';
			$html .= 			'</div>';
			$html .= 		'</div>';
		}
		
		$html .= 		'</div>';
		$html .= 	$html_close;
		
		return $html;
	}

	
	public function getProductsOfPreset() {
		$output = array();
		$p_id = $this->request->post['presetId'];

		if(empty($p_id) && $p_id != '0') {
			$this->response->addHeader('Content-Type: application/json');
			$this->response->setOutput(json_encode($output));
			return;
		}
	
		$this->load->model('extension/module/configurator');
		$configurator_settings = $this->config->get('configurator_settings');
		$desc_trim_length = $configurator_settings['config_desc_trim'];

		$preset = $this->model_extension_module_configurator->getPreset($p_id);
		$preset = (!empty($preset['data']))? unserialize($preset['data']) : array();
		
		$prod_id_list = array();

		if(isset($preset['p_sections'])) {
			foreach($preset['p_sections'] as $s_id => $p_section) {
				if(isset($p_section['p_p_id'])) $prod_id_list[] = (int)$p_section['p_p_id'];
			}
		}
		
		$prod_id_list = implode(',', $prod_id_list);

		$products_arr = $this->model_extension_module_configurator->getProductsOfPreset($prod_id_list, $desc_trim_length);
	
		foreach($products_arr as $key => $val) {
			$products_arr[$val['product_id']] = $val;
			unset($products_arr[$key]);
		}
		
		foreach($preset['p_sections'] as $p_s_id  => $p_section) {
			if(isset($p_section['p_p_id']) && !empty($p_section['p_p_count']) && !empty($products_arr[$p_section['p_p_id']])) {
				$p_p_id = $p_section['p_p_id'];
		
				if($p_section['p_p_count'] <= $products_arr[$p_p_id]['quantity']) {
					$output[$p_s_id]['product_id'] = $products_arr[$p_p_id]['product_id'];
					$output[$p_s_id]['name'] = $products_arr[$p_p_id]['name'];
					$output[$p_s_id]['quantity'] = $products_arr[$p_p_id]['quantity'];
					$output[$p_s_id]['minimum'] = $products_arr[$p_p_id]['minimum'];
					$output[$p_s_id]['sku'] = $products_arr[$p_p_id]['sku'];
					$output[$p_s_id]['price'] = $products_arr[$p_p_id]['price'];
					$output[$p_s_id]['discount'] = $products_arr[$p_p_id]['discount'];
					$output[$p_s_id]['special'] = $products_arr[$p_p_id]['special'];
					$output[$p_s_id]['image'] = $products_arr[$p_p_id]['image'];
					$output[$p_s_id]['tax_class_id'] = $products_arr[$p_p_id]['tax_class_id'];
					$output[$p_s_id]['description'] = $products_arr[$p_p_id]['description'];
					$output[$p_s_id]['category_id'] = $products_arr[$p_p_id]['category_id'];
					
					$output[$p_s_id]['opted_count'] = $p_section['p_p_count'];
					
					if(isset($p_section['p_p_option'])) {
						$options = $this->getProductOptions($p_p_id, $products_arr[$p_p_id]['tax_class_id']);
						foreach($options as $opt_id => $opt) {
							if(isset($p_section['p_p_option'][$opt_id])) $options[$opt_id]['value'] = $p_section['p_p_option'][$opt_id];
						}
						$output[$p_s_id]['options'] = $options;
					}else{
						$output[$p_s_id]['options'] = array();
					}
				}
			}
		}
		
		$output = $this->preparationProductsData($output);
	
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($output));
	}
	
	
	private function preparationProductsData($products = array()) {
		if(empty($products)) return array();
		
		$this->load->model('tool/image');
		$configurator_settings = $this->config->get('configurator_settings');
		
		$img_width = (!empty($configurator_settings['config_w_img']))? $configurator_settings['config_w_img'] : 120;
		$img_height = (!empty($configurator_settings['config_h_img']))? $configurator_settings['config_h_img'] : 120;
		$desc_trim_length = $configurator_settings['config_desc_trim'];
		$another_img = $configurator_settings['config_another_img'];
		
		foreach($products as $key => $val) {
			$products[$key]['name'] = strip_tags(htmlspecialchars_decode($val['name']));
			
			$products[$key]['href'] = $this->url->link('product/product', 'product_id=' . $products[$key]['product_id']);

			if($val['image']) {
				$products[$key]['thumbnail'] = $this->model_tool_image->resize($val['image'], (int)$img_width, (int)$img_height);
			}else{
				$products[$key]['thumbnail'] = $this->model_tool_image->resize('placeholder.png', (int)$img_width, (int)$img_height);
			}
				
			unset($products[$key]['image']);
			
			if(($this->config->get('config_customer_price') && $this->customer->isLogged()) || !$this->config->get('config_customer_price')) {
				$products[$key]['price'] = $this->tax->calculate($val['price'], $val['tax_class_id'], $this->config->get('config_tax'));
			}else{
				$products[$key]['price'] = 0;
			}

			if((float)$val['special']) {
				$products[$key]['special'] = $this->tax->calculate($val['special'], $val['tax_class_id'], $this->config->get('config_tax'));
				$products[$key]['discount'] = null;
			}elseif(!empty($val['discount'])) {
				$discount = array();
				$discounts_arr = explode(',', $val['discount']);
				foreach($discounts_arr as $d_val) {
					$d_data = explode(':', $d_val);
					if($d_data[0] == 1) {
						$products[$key]['price'] = $this->tax->calculate($d_data[1], $val['tax_class_id'], $this->config->get('config_tax'));
					}else{
						$discount[] = array(
							'd_count' => $d_data[0], 
							'd_price' => $this->tax->calculate($d_data[1], $val['tax_class_id'], $this->config->get('config_tax'))
						);	
					}
				}
				$products[$key]['discount'] = $discount;	
			}
				
			if($val['description']) {
				if(empty($desc_trim_length)) {
					$products[$key]['description'] = htmlspecialchars_decode($val['description']);
				}else{
					$desc = strip_tags(htmlspecialchars_decode($val['description']));
					$desc = substr($desc, 0, strrpos($desc, ' ')) . '... ';
					$products[$key]['description'] = "<p class=\"short-desc\">" . $desc . "</p>" ;
				}	
			}else{
				$products[$key]['description'] = '';
			}
			
			$products[$key]['minimum'] =($val['minimum'])? $val['minimum'] : 1;
/*			
			if ($this->config->get('config_review_status')) {
				$products[$key]['rating'] = (int)$val['rating'] ? $val['rating'] : false;
			}
*/
		}
		return $products;
	}
	
	
	public function getProductOptionsRequest() {
		$options = $this->getProductOptions($this->request->post['product_id'], $this->request->post['tax_class_id']);
	
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($options));
	}
	
	
	public function getProductOptions($product_id = '', $tax_class_id = '') {
		$options = array();

		if(empty($product_id) && $product_id != '0') return $options;

		$this->load->model('catalog/product');
		$this->load->model('tool/image');

		foreach ($this->model_catalog_product->getProductOptions((int)$product_id) as $option) {
			$product_option_value_data = array();

			foreach ($option['product_option_value'] as $option_value) {
				if (!$option_value['subtract'] || ($option_value['quantity'] > 0)) {
					if ((($this->config->get('config_customer_price') && $this->customer->isLogged()) || !$this->config->get('config_customer_price')) && (float)$option_value['price']) {
						if(empty($tax_class_id) && $tax_class_id != '0') {
							$price = false;
						}else{
							$price = $this->tax->calculate($option_value['price'], (int)$tax_class_id, $this->config->get('config_tax') ? 'P' : false);
						}
					}else{
						$price = false;
					}

					$product_option_value_data[$option_value['product_option_value_id']] = array(
						'product_option_value_id' => $option_value['product_option_value_id'],
						'option_value_id'         => $option_value['option_value_id'],
						'name'                    => $option_value['name'],
						'image'                   => $option_value['image'] ? $this->model_tool_image->resize($option_value['image'], 50, 50) : '',
						'price'                   => $price,
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
	
	
	public function getProductImages() {
		$img_output = '';
		$product_id = $this->request->post['product_id'];

		if(isset($product_id)) {
			$this->load->model('catalog/product');
			$this->load->model('tool/image');
			$configurator_settings = $this->config->get('configurator_settings');
			$img_width = (!empty($configurator_settings['config_w_img']))? $configurator_settings['config_w_img'] : 120;
			$img_height = (!empty($configurator_settings['config_h_img']))? $configurator_settings['config_h_img'] : 120;
			
			$imgs_data = $this->model_catalog_product->getProductImages((int)$product_id);
			
			if(count($imgs_data) > 0) {
				$img_output = array();
				
				foreach ($imgs_data as $img_data) {
					if ($img_data['image']) {
						$img_output[] = $this->model_tool_image->resize($img_data['image'], (int)$img_width, (int)$img_height);
					} 
				}
			}
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($img_output));
	}

}