<?php
class ModelExtensionModuleCheaper30 extends Model {
	
	public function getCheaperingFields($module_id) {
		$this->load->language('extension/module/code');
		
		$res0 = $this->db->query("SHOW TABLES LIKE '" . DB_PREFIX . "cheaper_module_fields'");
		
		$results = array();
		if($res0->num_rows){
			
			if (isset($this->request->get['module_id'])){
				$module_id = $this->request->get['module_id'];
			}
			
			$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "cheaper_module_fields WHERE `module_id`='" . (int)$module_id . "' ORDER BY sort_order ASC"); 
			
			if ($query->num_rows) {
				foreach ($query->rows as $result) {
					
					$query_value = $this->db->query("SELECT * FROM " . DB_PREFIX . "cheaper_module_value WHERE `id`='" . (int)$result['id'] . "' AND `module_id`='" . (int)$module_id . "'");
					
					$select_value = array();
					if ($query_value->num_rows) {
						foreach ($query_value->rows as $value) {
							$select_value[] = json_decode($value['text'], true)[$this->config->get('config_language_id')];
						}
					}
					
					$results[] = array(
						'id' => $result['id'],
						'icon' => json_decode($result['icon'],true),
						'name' => json_decode($result['name'],true),
						'type' => $result['type'],
						'placeholder' => $this->language->get('text_' . $result['regex']),
						'regex' => $result['regex'],
						'valid' => json_decode($result['valid'],true),
						'required' => $result['required'],
						'sort_order' => $result['sort_order'],
						'query_value' 	=> $select_value,
					);
				}
			}
		}
		
		return $results;
	}
	
	public function getCheaperingStyle($module_id) {
		
		$res0 = $this->db->query("SHOW TABLES LIKE '" . DB_PREFIX . "cheaper_module_style'");
		if($res0->num_rows){
			$query = $this->db->query("SELECT style FROM " . DB_PREFIX . "cheaper_module_style WHERE `module_id`='" . (int)$module_id . "'"); 
			
			if (isset($query->row['style'])){
				return json_decode($query->row['style']);
			} else {
				return false;
			}
			
		}
	}
	
	public function getCheaperingProtection($module_id) {
		
		$results = array();
		$res0 = $this->db->query("SHOW TABLES LIKE '" . DB_PREFIX . "cheaper_module_protection'");
		
		if($res0->num_rows){
			$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "cheaper_module_protection WHERE `module_id`='" . (int)$module_id . "'"); 

			if ($query->num_rows){
				foreach ($query->rows as $result){
					$text = json_decode($result['text'],true);
					$results = array(
						'module_id' => $result['module_id'],
						'format' => $result['format'],
						'text' => html_entity_decode($text[$this->config->get('config_language')], ENT_QUOTES, 'UTF-8'),
					);
				}
			}
		}
		return $results;
	}
	
	public function writesendquick($data) {
		
		$this->load->language('extension/module/cheaper30');
		
		if (isset($data['option'])) {$options = " `option` = '" . $this->db->escape(json_encode($data['option'])) . "',";} else {$options = " `option` = '',";}
		
		$config_language_id = $this->config->get('config_language_id');
		
		$input_fields = array();
		if (isset($data['input_field']) and $data['input_field']){
			foreach ($data['input_field'] as $id => $field){
				$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "cheaper_module_fields WHERE `id` = '" . (int)$id . "' AND `module_id` = '" . (int)$data['module_id'] . "'");
				if ($query->num_rows){
					foreach ($query->rows as $row){
						$input_fields[$row['id']] = json_decode($row['name'],true)[$config_language_id];
					}
				}
			}
		}
		$text = '';
		if ($data['input_field']){
			$text .= '<br /><strong>' . $this->language->get('text_more_zapros') . '</strong><br />';
			foreach ($input_fields as $id => $field){
				if (isset($data['input_field'][$id])){
					if (is_array($data['input_field'][$id])) {
						$text .= '<strong>' . $field . '</strong>: ';
						foreach ($data['input_field'][$id] as $key => $value) {
							if (isset($key) && $key !== 'file') {
								if ($value and $value != '') {
									$text .= '<span class="normal">' . $value . '</span>' . (($key + 1) != count($data['input_field'][$id]) ? ', ' : '') ;
								}
							} else {
								if (isset($data['input_field'][$id]['file'])){
									$this->load->model('tool/upload');
									$upload_info = $this->model_tool_upload->getUploadByCode($data['input_field'][$id]['file']);
									if (isset($upload_info['code']) && $upload_info['code']){
									$href = $this->url->link('tool/upload/download', 'user_token=' . $this->session->data['user_token'] . '&code=' . $upload_info['code'], true);
									
									if (strpos($href, HTTP_SERVER . 'admin/') === false) {
										$href = str_replace(HTTP_SERVER, HTTP_SERVER . 'admin/', $href);
									}
									if (strpos($href, HTTPS_SERVER . 'admin/') === false) {
										$href = str_replace(HTTPS_SERVER, HTTPS_SERVER . 'admin/', $href);
									}
									
									} else {$href = '';}
									if (isset($upload_info['name']) && $upload_info['name']){
										$name = ' (' . $upload_info['name'] . ')';
									}
									$text .= ($href ? '<a href="' . $href . '">' . $this->language->get('text_cheaper30_file') . $name . '</a>' : '') . '<br />';
								}
							}
						}
					} else {
						$text .= '<strong>' . $field . '</strong>: <span class="normal">' . $data['input_field'][$id] . '</span>';
					}
					$text .= '<br />';
				}
			}
		}
		$send_module = array();
		
		$config = $this->config_version();
		
		if ($this->db->query("INSERT INTO " . DB_PREFIX . "cheaper_module SET `module_id` = '" . (int)$data['module_id'] . "', `date` = '" . $this->db->escape($data['date']) . "', `product_id` = '" . $this->db->escape($data['prod_id']) . "', `price` = '" . (int)$data['price'] . "'," . $options . " `text` = '" . $this->db->escape(json_encode($text, true)) . "', `status` = '0'")){
			
			$send_module['success_send'] = $this->language->get('success_send_module');
			$cheaper30_h1 = '';
			
			if ($data['module_id']) {
				$module_info = $this->{$config['model_']}->getModule($data['module_id']);
				
				if (isset($module_info['cheaper30_succes'][$config_language_id])){
					$send_module['success_send'] = $module_info['cheaper30_succes'][$config_language_id];
				}
				if (isset($module_info['cheaper30_h1'][$config_language_id])){
					$cheaper30_h1 = $module_info['cheaper30_h1'][$config_language_id];
				}
			}
			
			$email = $this->config->get('config_email');
			
			if (isset($data['prod_id'])){
				$product_id = (int)$data['prod_id'];
			} else {
				$product_id = 0;
			}
			
			$text_product = '';
			$this->load->model('catalog/product');
			$product_info = $this->model_catalog_product->getProduct($product_id);
			if ($product_info) {
				if (isset($product_info['name'])) {
					$name_product = $product_info['name'];
				} else {
					$name_product = $this->language->get('text_no_product');
				}
				$href_product = $this->url->link('product/product', '&product_id=' . $product_info['product_id'], 'SSL');
				
				$text_product = '<strong>' . $this->language->get('text_product') . '</strong><a href="' . $href_product . '">' . $name_product . '</a><br />';

			}
			
			$text = $text_product . $text;
			
			$text_cheaper30_title = sprintf($this->language->get('text_cheaper30_title'), $cheaper30_h1, $this->request->server['HTTP_HOST']);
			
			$message  = '<html dir="ltr" lang="en">' . "\n";
			$message .= '  <head>' . "\n";
			$message .= '    <title>' . $text_cheaper30_title . '</title>' . "\n";
			$message .= '    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">' . "\n";
			$message .= '  </head>' . "\n";
			$message .= '  <body>' . html_entity_decode($text, ENT_QUOTES, 'UTF-8') . '</body>' . "\n";
			$message .= '</html>' . "\n";
			
			$store_name = $this->config->get('config_name');

			$mail = new Mail();
			
			if ($config['version'] != '2.0'){
				$mail->protocol = $this->config->get('config_mail_protocol');
				$mail->parameter = $this->config->get('config_mail_parameter');
				$mail->smtp_hostname = $this->config->get('config_mail_smtp_hostname');
				$mail->smtp_username = $this->config->get('config_mail_smtp_username');
				$mail->smtp_password = html_entity_decode($this->config->get('config_mail_smtp_password'), ENT_QUOTES, 'UTF-8');
				$mail->smtp_port = $this->config->get('config_mail_smtp_port');
				$mail->smtp_timeout = $this->config->get('config_mail_smtp_timeout');
			}
			$mail->setTo($this->config->get('config_email'));
			$mail->setFrom($email);
			$mail->setSender(html_entity_decode($store_name, ENT_QUOTES, 'UTF-8'));
			$mail->setSubject(html_entity_decode($text_cheaper30_title, ENT_QUOTES, 'UTF-8'));
			$mail->setHtml($message);
			$mail->send();
			
			
		} else {
			$send_module['error_send'] = $this->language->get('error_send_module');
			
			if ($data['module_id']) {
				$module_info = $this->{$config['model_']}->getModule($data['module_id']);
				
				if (isset($module_info['cheaper30_errort'][$config_language_id])){
					$send_module['error_send'] = $module_info['cheaper30_errort'][$config_language_id];
				}
			}
		}
		
		return $send_module;
	}
	
	public function config_version(){
		$data = array();
		
		$config_version = substr(VERSION, 0, 3);
		$data['version'] = $config_version;
		$this->load->model('extension/module/cheaper30');
		if ($config_version == '3.0' or $config_version == '3.1'){
			$this->load->model('setting/module');
			$data['model_'] = 'model_setting_module';
			
			
			$this->load->model('setting/setting');
			$setting_info = $this->model_setting_setting->getSetting('theme_' . $this->config->get('config_theme'), $this->config->get('config_store_id'));
			if (isset($setting_info['theme_' . $this->config->get('config_theme') . '_directory'])) {
				$data['theme'] = $setting_info['theme_' . $this->config->get('config_theme') . '_directory'];
			} elseif (isset($setting_info['theme_default_directory'])) {
				$data['theme'] = $setting_info['theme_default_directory'];
			} else {
				$data['theme'] = $this->config->get('config_theme');
			}
			
			
		} else {
			$this->load->model('extension/module');
			$data['model_'] = 'model_extension_module';
			$data['theme'] = $this->config->get('config_theme');
		}
		return $data;
	}
	
}