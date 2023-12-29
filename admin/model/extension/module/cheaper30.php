<?php
class ModelExtensionModuleCheaper30 extends Model {
	
	public function createCheapering()
	{
			
		$res0 = $this->db->query("SHOW TABLES LIKE '" . DB_PREFIX . "cheaper_module'");
		if(!$res0->num_rows){
			$this->db->query("
				CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "cheaper_module` (
				  `id` int(11) NOT NULL AUTO_INCREMENT,
				  `module_id` int(11) NOT NULL,
				  `date` varchar(255) NOT NULL,
				  `product_id` varchar(255) NOT NULL,
				  `option` varchar(255) NOT NULL,
				  `price` int(11) NOT NULL,
				  `text` text NOT NULL,
				  `status` int(11) NOT NULL,
				  PRIMARY KEY (`id`)
				) ENGINE=MyISAM  DEFAULT CHARSET=utf8;
			");
		}
		
		$res1 = $this->db->query("SHOW TABLES LIKE '" . DB_PREFIX . "cheaper_module_fields'");
		if(!$res1->num_rows){
			$this->db->query("
				CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "cheaper_module_fields` (
				  `id` int(11) NOT NULL AUTO_INCREMENT,
				  `module_id` int(11) NOT NULL,
				  `icon` varchar(255) NOT NULL,
				  `name` text NOT NULL,
				  `type` varchar(255) NOT NULL,
				  `regex` varchar(255) NOT NULL,
				  `valid` text NOT NULL,
				  `required` int(11) NOT NULL,
				  `sort_order` int(11) NOT NULL,
				  PRIMARY KEY (`id`)
				) ENGINE=MyISAM  DEFAULT CHARSET=utf8;
			");
		}
		
		$res2 = $this->db->query("SHOW TABLES LIKE '" . DB_PREFIX . "cheaper_module_value'");
		if(!$res2->num_rows){
			$this->db->query("
				CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "cheaper_module_value` (
				  `id` int(11) NOT NULL,
				  `module_id` int(11) NOT NULL,
				  `type` varchar(255) NOT NULL,
				  `text` text NOT NULL
				) ENGINE=MyISAM DEFAULT CHARSET=utf8;
			");
		}
		
		$res3 = $this->db->query("SHOW TABLES LIKE '" . DB_PREFIX . "cheaper_module_style'");
		if(!$res3->num_rows){
			$this->db->query("
				CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "cheaper_module_style` (
				  `module_id` int(11) NOT NULL,
				  `style` text NOT NULL
				) ENGINE=MyISAM DEFAULT CHARSET=utf8;
			");
		}
		
		$res4 = $this->db->query("SHOW TABLES LIKE '" . DB_PREFIX . "cheaper_module_protection'");
		if(!$res4->num_rows){
			$this->db->query("
				CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "cheaper_module_protection` (
				  `module_id` int(11) NOT NULL,
				  `format` varchar(255) NOT NULL,
				  `text` text NOT NULL
				) ENGINE=MyISAM DEFAULT CHARSET=utf8;
			");
		}
	}
	
	public function getCheapering($module_id, $data){

		$res0 = $this->db->query("SHOW TABLES LIKE '" . DB_PREFIX . "cheaper_module'");
		if($res0->num_rows){
			$sql = "SELECT * FROM " . DB_PREFIX . "cheaper_module WHERE `module_id` = '" . (int)$module_id . "'";
			
			if ($data['sort']) {
				if ($data['sort'] == 'date'){
					$sql .= " ORDER BY STR_TO_DATE(`" . $data['sort'] . "`, '%d.%m.%Y')";
				} else {
					$sql .= " ORDER BY " . $data['sort'];
				}
			} else {
				$sql .= " ORDER BY id";
			}
			
			if ($data['order'] && ($data['order'] == 'DESC')){
				$sql .= " DESC";
			} else {
				if ($data['sort']) {
					$sql .= " ASC";
				} else {
					$sql .= " DESC";
				}
			}
			
			if (isset($data['start']) || isset($data['limit'])) {
				if ($data['start'] < 0) {
					$data['start'] = 0;
				}

				if ($data['limit'] < 1) {
					$data['limit'] = 20;
				}

				$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
			}
			
			$query = $this->db->query($sql);
			
			return $query->rows;
		}
	}
	
	public function getCheaperingTotal($module_id, $status = 1){
		$res0 = $this->db->query("SHOW TABLES LIKE '" . DB_PREFIX . "cheaper_module'");
		if($res0->num_rows){
			$query = $this->db->query("SELECT COUNT(*) as total FROM " . DB_PREFIX . "cheaper_module WHERE `module_id` = '" . (int)$module_id . "'" . (!$status ? " AND `status` = '0'" : ""));
			
			if ($query->row['total']){
				return $query->row['total'];
			} else {
				return 0;
			}
		}
	}
	
	public function getCheaperingTotalStatus(){
		$config = $this->config_version();
		$results = array();
		$res0 = $this->db->query("SHOW TABLES LIKE '" . DB_PREFIX . "cheaper_module'");
		$extension = 'extension/';
		if ($config['version'] == '2.2' or $config['version'] == '2.1' or $config['version'] == '2.0'){
			$extension = '';
		}
		if($res0->num_rows){
			$query = $this->{$config['model_']}->getModulesByCode('cheaper30');
			if ($query){
				foreach ($query as $module){
					if ($module['module_id']){
						$results[] = array(
							'name' => $module['name'],
							'href' => (isset($this->session->data[$config['token']]) ? $this->url->link($extension . 'module/cheaper30', $config['token'] . '=' . $this->session->data[$config['token']] . '&module_id=' . $module['module_id'], true) : ''),
							'total' => $this->getCheaperingTotal($module['module_id'], 0),
						);
					}
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
					$results = array(
						'format' => $result['format'],
						'protection_text' => json_decode($result['text'],true),
					);
				}
			}
		}
		return $results;
	}
	
	public function getCheaperingFields() {
		
		if (isset($this->request->get['module_id'])){
			$module_id = " WHERE `module_id`='" . (int)$this->request->get['module_id'] . "'";
		} else {
			$module_id = "";
		}
		
		$this->load->language('extension/module/code');
		
		$res0 = $this->db->query("SHOW TABLES LIKE '" . DB_PREFIX . "cheaper_module_fields'");
		
		$results = array();
		if($res0->num_rows){
			$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "cheaper_module_fields" . $module_id . " ORDER BY sort_order ASC");
			
			if ($query->num_rows) {
				foreach ($query->rows as $result) {
					
					$query_value = $this->db->query("SELECT * FROM " . DB_PREFIX . "cheaper_module_value WHERE `id`='" . (int)$result['id'] . "'");
					
					$select_value = array();
					if ($query_value->num_rows) {
						foreach ($query_value->rows as $value) {
							$select_value[$value['id']][] = json_decode($value['text'], true);
						}
					}
					
					$results[] = array(
						'id'   			=> $result['id'],
						'icon' 			=> isset($result['icon']) ? json_decode($result['icon'],true) : '',
						'name' 			=> json_decode($result['name'],true),
						'type' 			=> $result['type'],
						'placeholder' 	=> $this->language->get('text_' . $result['regex']),
						'regex' 		=> $result['regex'],
						'valid' 		=> json_decode($result['valid'],true),
						'required' 		=> $result['required'],
						'sort_order' 	=> $result['sort_order'],
						'query_value' 	=> $select_value,
					);
				}
			}
		}
		
		return $results;
	}
	
	public function insertCheapering($data, $module_id = false){
		
		/*$this->EmptyCheaperingModule($module_id);*/
		if (isset($data['field_value'])) {
			if ($data['field_value']) {
				$this->db->query("DELETE FROM `" . DB_PREFIX . "cheaper_module_value` WHERE `module_id` = '" . (int)$module_id . "'");
				$this->db->query("DELETE FROM `" . DB_PREFIX . "cheaper_module_fields` WHERE `module_id` = '" . (int)$module_id . "'");
				foreach ($data['field_value'] as $key => $result) {
					if (isset($result['name'])) {
						$regex = "";
						if (isset($result['regex']) and $result['regex']) {
							$regex = ",`regex` = '" . $this->db->escape($result['regex']) . "'";
						}
						$valid = "";
						
						if (isset($result['valid']) and $result['valid']) {
							$valid = ",`valid` = '" . $this->db->escape(json_encode($result['valid'])) . "'";
						}
						
						$this->db->query("INSERT INTO " . DB_PREFIX . "cheaper_module_fields SET `module_id` = '" . (int)$module_id . "',`icon` = '" . $this->db->escape(json_encode($result['icon'])) . "',`name` = '" . $this->db->escape(json_encode($result['name'])) . "',`type` = '" . $this->db->escape($result['type']) . "'" . $regex . $valid . ",`required` = '" . (isset($result['required']) ? (int)$result['required'] : '0') . "',`sort_order` = '" . (int)$result['sort_order'] . "'");
						
						$last_id = $this->db->getLastId();
						
						if (isset($result['!select!'])){$type = 'select';}
						if (isset($result['!radio!'])){$type = 'radio';}
						if (isset($result['!checked!'])){$type = 'checked';}
						
						if (isset($type) and isset($result['!' . $type . '!']) and $type == $result['type']){
							foreach ($result['!' . $type . '!'] as $resul){
								$this->db->query("INSERT INTO " . DB_PREFIX . "cheaper_module_value SET `id` = '" . (int)$last_id . "', `module_id` = '" . (int)$module_id . "',`type` = '" . $this->db->escape($type) . "',`text` = '" . $this->db->escape(json_encode($resul, true)) . "'");
							}
						}
					}
				}
			}
		}
		
		if (isset($data['style'])) {
			$this->db->query("DELETE FROM `" . DB_PREFIX . "cheaper_module_style` WHERE `module_id` = '" . (int)$module_id . "'");
			
			$this->db->query("INSERT INTO `" . DB_PREFIX . "cheaper_module_style` SET `module_id` = '" . (int)$module_id . "',`style` = '" . $this->db->escape(json_encode($data['style'])) . "'");
		}
		if (isset($data['format'])){
			$this->db->query("DELETE FROM `" . DB_PREFIX . "cheaper_module_protection` WHERE `module_id` = '" . (int)$module_id . "'");
			$this->db->query("INSERT INTO " . DB_PREFIX . "cheaper_module_protection SET `module_id` = '" . (int)$module_id . "', `format` = '" . $this->db->escape($data['format']) . "',`text` = '" . $this->db->escape(json_encode($data['protection_text'], true)) . "'");
		}
	}
	
	public function EmptyCheaperingModule($module_id) {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "cheaper_module_fields` WHERE `module_id` = '" . (int)$module_id . "'");
	}
	
	public function deleteCheapering($id, $module_id) {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "cheaper_module` WHERE `id` = '" . (int)$id . "' AND `module_id` = '" . (int)$module_id . "'");
		
	}
	
	public function deletelistcheapering($id, $module_id) {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "cheaper_module` WHERE `id` = '" . (int)$id . "' AND `module_id` = '" . (int)$module_id . "'");
		
	}
	
	public function updatestatuscheapering($id, $status, $module_id) {
		$this->db->query("UPDATE " . DB_PREFIX . "cheaper_module SET `status` = '" . (int)$status . "' WHERE `id` = '" . (int)$id . "' AND `module_id` = '" . (int)$module_id . "'");
	}
	
	public function getOptions($id_option, $product_id, $quantity) {
		$option_price = 0;
		$option_points = 0;
		$option_weight = 0;
		
		$option_data = array();

		foreach (json_decode($id_option) as $product_option_id => $value) {
			$option_query = $this->db->query("SELECT po.product_option_id, po.option_id, od.name, o.type FROM " . DB_PREFIX . "product_option po LEFT JOIN `" . DB_PREFIX . "option` o ON (po.option_id = o.option_id) LEFT JOIN " . DB_PREFIX . "option_description od ON (o.option_id = od.option_id) WHERE po.product_option_id = '" . (int)$product_option_id . "' AND po.product_id = '" . (int)$product_id . "' AND od.language_id = '" . (int)$this->config->get('config_language_id') . "'");

			if ($option_query->num_rows) {
				if ($option_query->row['type'] == 'select' || $option_query->row['type'] == 'radio' || $option_query->row['type'] == 'image') {
					$option_value_query = $this->db->query("SELECT pov.option_value_id, ovd.name, pov.quantity, pov.subtract, pov.price, pov.price_prefix, pov.points, pov.points_prefix, pov.weight, pov.weight_prefix FROM " . DB_PREFIX . "product_option_value pov LEFT JOIN " . DB_PREFIX . "option_value ov ON (pov.option_value_id = ov.option_value_id) LEFT JOIN " . DB_PREFIX . "option_value_description ovd ON (ov.option_value_id = ovd.option_value_id) WHERE pov.product_option_value_id = '" . (int)$value . "' AND pov.product_option_id = '" . (int)$product_option_id . "' AND ovd.language_id = '" . (int)$this->config->get('config_language_id') . "'");

					if ($option_value_query->num_rows) {
						if ($option_value_query->row['price_prefix'] == '+') {
							$option_price += $option_value_query->row['price'];
						} elseif ($option_value_query->row['price_prefix'] == '-') {
							$option_price -= $option_value_query->row['price'];
						}

						if ($option_value_query->row['points_prefix'] == '+') {
							$option_points += $option_value_query->row['points'];
						} elseif ($option_value_query->row['points_prefix'] == '-') {
							$option_points -= $option_value_query->row['points'];
						}

						if ($option_value_query->row['weight_prefix'] == '+') {
							$option_weight += $option_value_query->row['weight'];
						} elseif ($option_value_query->row['weight_prefix'] == '-') {
							$option_weight -= $option_value_query->row['weight'];
						}

						if ($option_value_query->row['subtract'] && (!$option_value_query->row['quantity'] || ($option_value_query->row['quantity'] < $quantity))) {
							$stock = false;
						}

						$option_data[] = array(
							'product_option_id'       => $product_option_id,
							'product_option_value_id' => $value,
							'option_id'               => $option_query->row['option_id'],
							'option_value_id'         => $option_value_query->row['option_value_id'],
							'name'                    => $option_query->row['name'],
							'value'                   => $option_value_query->row['name'],
							'type'                    => $option_query->row['type'],
							'quantity'                => $option_value_query->row['quantity'],
							'subtract'                => $option_value_query->row['subtract'],
							'price'                   => $option_value_query->row['price'],
							'price_prefix'            => $option_value_query->row['price_prefix'],
							'points'                  => $option_value_query->row['points'],
							'points_prefix'           => $option_value_query->row['points_prefix'],
							'weight'                  => $option_value_query->row['weight'],
							'weight_prefix'           => $option_value_query->row['weight_prefix']
						);
					}
				} elseif ($option_query->row['type'] == 'checkbox' && is_array($value)) {
					foreach ($value as $product_option_value_id) {
						$option_value_query = $this->db->query("SELECT pov.option_value_id, ovd.name, pov.quantity, pov.subtract, pov.price, pov.price_prefix, pov.points, pov.points_prefix, pov.weight, pov.weight_prefix FROM " . DB_PREFIX . "product_option_value pov LEFT JOIN " . DB_PREFIX . "option_value ov ON (pov.option_value_id = ov.option_value_id) LEFT JOIN " . DB_PREFIX . "option_value_description ovd ON (ov.option_value_id = ovd.option_value_id) WHERE pov.product_option_value_id = '" . (int)$product_option_value_id . "' AND pov.product_option_id = '" . (int)$product_option_id . "' AND ovd.language_id = '" . (int)$this->config->get('config_language_id') . "'");

						if ($option_value_query->num_rows) {
							if ($option_value_query->row['price_prefix'] == '+') {
								$option_price += $option_value_query->row['price'];
							} elseif ($option_value_query->row['price_prefix'] == '-') {
								$option_price -= $option_value_query->row['price'];
							}

							if ($option_value_query->row['points_prefix'] == '+') {
								$option_points += $option_value_query->row['points'];
							} elseif ($option_value_query->row['points_prefix'] == '-') {
								$option_points -= $option_value_query->row['points'];
							}

							if ($option_value_query->row['weight_prefix'] == '+') {
								$option_weight += $option_value_query->row['weight'];
							} elseif ($option_value_query->row['weight_prefix'] == '-') {
								$option_weight -= $option_value_query->row['weight'];
							}

							if ($option_value_query->row['subtract'] && (!$option_value_query->row['quantity'] || ($option_value_query->row['quantity'] < $quantity))) {
								$stock = false;
							}

							$option_data[] = array(
								'product_option_id'       => $product_option_id,
								'product_option_value_id' => $product_option_value_id,
								'option_id'               => $option_query->row['option_id'],
								'option_value_id'         => $option_value_query->row['option_value_id'],
								'name'                    => $option_query->row['name'],
								'value'                   => $option_value_query->row['name'],
								'type'                    => $option_query->row['type'],
								'quantity'                => $option_value_query->row['quantity'],
								'subtract'                => $option_value_query->row['subtract'],
								'price'                   => $option_value_query->row['price'],
								'price_prefix'            => $option_value_query->row['price_prefix'],
								'points'                  => $option_value_query->row['points'],
								'points_prefix'           => $option_value_query->row['points_prefix'],
								'weight'                  => $option_value_query->row['weight'],
								'weight_prefix'           => $option_value_query->row['weight_prefix']
							);
						}
					}
				} elseif ($option_query->row['type'] == 'text' || $option_query->row['type'] == 'textarea' || $option_query->row['type'] == 'file' || $option_query->row['type'] == 'date' || $option_query->row['type'] == 'datetime' || $option_query->row['type'] == 'time') {
					$option_data[] = array(
						'product_option_id'       => $product_option_id,
						'product_option_value_id' => '',
						'option_id'               => $option_query->row['option_id'],
						'option_value_id'         => '',
						'name'                    => $option_query->row['name'],
						'value'                   => $value,
						'type'                    => $option_query->row['type'],
						'quantity'                => '',
						'subtract'                => '',
						'price'                   => '',
						'price_prefix'            => '',
						'points'                  => '',
						'points_prefix'           => '',
						'weight'                  => '',
						'weight_prefix'           => ''
					);
				}
			}
		}
		return $option_data;
	}
	
	public function addDefaultValuesArray($default = false, $languages_code, $all_text_items) {
		
		$result = array();
		foreach ($languages_code as $language_code => $language_id){
			foreach (array('text_module_name','text_module_dlina_stroki','text_module_phone','text_module_email','text_module_email_client','text_module_desired_price','text_module_cheaper_find','text_module_question','text_module_age','text_module_30_years','text_module_30_40_years','text_module_40_50_years','text_module_50_years','text_module_like_shop','text_module_range_of','text_module_like_price','text_module_good_product','text_module_good_service','text_module_change_shop','text_module_time_call') as $item){
				if (isset($all_text_items[$item][$language_id])){$result[$item][$language_id] = $all_text_items[$item][$language_id];} else {
					$result[$item][$language_id] = '';
				}
			}
		}
		
		if ($default == 'cheaper'){
			return array(
				'1' => array(
					'id' => '1',
					'icon' => 'user',
					'name' => $result['text_module_name'],
					'type' => 'text',
					'placeholder' => $this->language->get('text_module_name'),
					'regex' => 'minlength',
					'valid' => 2,
					'required' => 0,
					'sort_order' => 0
				),
				'2' => array(
					'id' => '2',
					'icon' => 'phone',
					'name' => $result['text_module_phone'],
					'type' => 'text',
					'placeholder' => 'text_phoneUS',
					'regex' => 'phoneUS',
					'valid' => array(
						'ru-ru' => '+7 (999) 999-99-99',
						'en-gb' => '+1-999-999 99 99',
						'uk-ua' => '+38 (099) 999 99 99'
					),
					'required' => 1,
					'sort_order' => 1,
				),
				'3' => array(
					'id' => '3',
					'icon' => 'envelope-o',
					'name' => $result['text_module_email'],
					'type' => 'text',
					'placeholder' => $this->language->get('text_module_email_client'),
					'regex' => 'email',
					'valid' => '',
					'required' => 0,
					'sort_order' => 2,
				),
				'4' => array(
					'id' => '4',
					'icon' => 'rub',
					'name' => $result['text_module_desired_price'],
					'type' => 'text',
					'placeholder' => 'text_number',
					'regex' => 'number',
					'valid' => '',
					'required' => 0,
					'sort_order' => 3
				),
				'5' => array(
					'id' => '5',
					'icon' => 'link',
					'name' => $result['text_module_cheaper_find'],
					'type' => 'textarea',
					'placeholder' => 'text_url',
					'regex' => 'url',
					'valid' => '',
					'required' => 1,
					'sort_order' => 4
				)
			);
		}
		if ($default == 'question'){
			return array(
				'1' => array(
					'id' => '1',
					'icon' => 'user',
					'name' => $result['text_module_name'],
					'type' => 'text',
					'placeholder' => $this->language->get('text_module_dlina_stroki'),
					'regex' => 'minlength',
					'valid' => 2,
					'required' => 0,
					'sort_order' => 0
				),
				'2' => array(
					'id' => '2',
					'icon' => 'phone',
					'name' => $result['text_module_phone'],
					'type' => 'text',
					'placeholder' => 'text_phoneUS',
					'regex' => 'phoneUS',
					'valid' => array(
						'ru-ru' => '+7 (999) 999-99-99',
						'en-gb' => '+1-999-999 99 99',
						'uk-ua' => '+38 (099) 999 99 99'
					),
					'required' => 1,
					'sort_order' => 1,
				),
				'3' => array(
					'id' => '3',
					'icon' => 'envelope-o',
					'name' => $result['text_module_email'],
					'type' => 'text',
					'placeholder' => $this->language->get('text_module_email_client'),
					'regex' => 'email',
					'valid' => '',
					'required' => 0,
					'sort_order' => 2,
				),
				'4' => array(
					'id' => '4',
					'icon' => 'question',
					'name' => $result['text_module_question'],
					'type' => 'textarea',
					'placeholder' => 'text_number',
					'regex' => 'rangelength',
					'valid' => array(
						'0' => '5',
						'1' => '300'
					),
					'required' => 0,
					'sort_order' => 3
				)
			);
		}
		if ($default == 'survey'){
			return array(
				'1' => array(
					'id' => '1',
					'icon' => 'user',
					'name' => $result['text_module_age'],
					'type' => 'radio',
					'placeholder' => '',
					'regex' => '',
					'valid' => '',
					'required' => 0,
					'sort_order' => 0,
					'query_value' 	=> array(
						'1' => array(
							'1' => $result['text_module_30_years'],
							'2' => $result['text_module_30_40_years'],
							'3' => $result['text_module_40_50_years'],
							'4' => $result['text_module_50_years'],
						)
					),
				),
				'2' => array(
					'id' => '2',
					'icon' => 'thumbs-o-up',
					'name' => $result['text_module_like_shop'],
					'type' => 'checked',
					'placeholder' => '',
					'regex' => '',
					'valid' => '',
					'required' => 0,
					'sort_order' => 1,
					'query_value' 	=> array(
						'2' => array(
							'1' => $result['text_module_range_of'],
							'2' => $result['text_module_like_price'],
							'3' => $result['text_module_good_product'],
							'4' => $result['text_module_good_service'],
						)
					),
				),
				'3' => array(
					'id' => '3',
					'icon' => 'comments-o',
					'name' => $result['text_module_change_shop'],
					'type' => 'textarea',
					'placeholder' => $this->language->get('text_module_change_shop'),
					'regex' => 'rangelength',
					'valid' => array(
						'0' => '3',
						'1' => '300'
					),
					'required' => 0,
					'sort_order' => 2,
					'query_value' => array()
				)
			);
		}
		if ($default == 'callback'){
			return array(
				'1' => array(
					'id' => '1',
					'icon' => 'user',
					'name' => $result['text_module_name'],
					'type' => 'text',
					'placeholder' => $this->language->get('text_module_dlina_stroki'),
					'regex' => 'minlength',
					'valid' => 2,
					'required' => 0,
					'sort_order' => 0
				),
				'2' => array(
					'id' => '2',
					'icon' => 'phone',
					'name' => $result['text_module_phone'],
					'type' => 'text',
					'placeholder' => 'text_phoneUS',
					'regex' => 'phoneUS',
					'valid' => array(
						'ru-ru' => '+7 (999) 999-99-99',
						'en-gb' => '+1-999-999 99 99',
						'uk-ua' => '+38 (099) 999 99 99'
					),
					'required' => 1,
					'sort_order' => 1,
				),
				'3' => array(
					'id' => '3',
					'icon' => 'envelope-o',
					'name' => $result['text_module_email'],
					'type' => 'text',
					'placeholder' => $this->language->get('text_module_email_client'),
					'regex' => 'email',
					'valid' => '',
					'required' => 0,
					'sort_order' => 2,
				),
				'4' => array(
					'id' => '4',
					'icon' => 'clock-o',
					'name' => $result['text_module_time_call'],
					'type' => 'text',
					'placeholder' => 'text_time',
					'regex' => 'datetime',
					'valid' => '',
					'required' => 0,
					'sort_order' => 3,
				),
			);
		}
	}
	
	public function config_version(){
		$data = array();
		
		$this->load->model('extension/module/cheaper30');
		
		$config_version = substr(VERSION, 0, 3);
		$data['version'] = $config_version;
		if ($config_version == '3.0' or $config_version == '3.1'){
			$data['module'] = 'module_';
			$data['token'] = 'user_token';
			$data['extension'] = 'marketplace/extension';
			$data['cancel'] = (isset($this->session->data['user_token']) ? $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true) : '');
			$data['action'] = (isset($this->session->data['user_token']) ? $this->url->link('extension/module/cheaper30', 'user_token=' . $this->session->data['user_token'], true) : '');
			$data['action_module_id'] = (isset($this->session->data['user_token']) ? $this->url->link('extension/module/cheaper30', 'user_token=' . $this->session->data['user_token'] . (isset($this->request->get['module_id']) ?  '&module_id=' . $this->request->get['module_id'] : ''), true) : '');
			$this->load->model('setting/module');
			$data['model_'] = 'model_setting_module';
			$this->load->model('setting/extension');
			$data['model_extension_'] = 'model_setting_extension';
		} else {
			$data['module'] = '';
			$data['token'] = 'token';
			$data['extension'] = 'extension/extension';
			$data['cancel'] = (isset($this->session->data['token']) ? $this->url->link('extension/extension', 'token=' . $this->session->data['token'] . '&type=module', true) : '');
			$data['action'] = (isset($this->session->data['token']) ? $this->url->link('extension/module/cheaper30', 'token=' . $this->session->data['token'], true) : '');
			$data['action_module_id'] = (isset($this->session->data['token']) ? $this->url->link('extension/module/cheaper30', 'token=' . $this->session->data['token'] . (isset($this->request->get['module_id']) ?  '&module_id=' . $this->request->get['module_id'] : ''), true) : '');
			$this->load->model('extension/module');
			$data['model_'] = 'model_extension_module';
			$this->load->model('extension/extension');
			$data['model_extension_'] = 'model_extension_extension';
		}
		if ($config_version == '2.2' or $config_version == '2.1' or $config_version == '2.0'){
			$data['extension'] = 'extension/module';
			$data['cancel'] = (isset($this->session->data['token']) ? $this->url->link('extension/module', 'token=' . $this->session->data['token'], true) : '');
			$data['action'] = (isset($this->session->data['token']) ? $this->url->link('module/cheaper30', 'token=' . $this->session->data['token'], true) : '');
			$data['action_module_id'] = (isset($this->session->data['token']) ? $this->url->link('module/cheaper30', 'token=' . $this->session->data['token'] . (isset($this->request->get['module_id']) ?  '&module_id=' . $this->request->get['module_id'] : ''), true) : '');
		}
		return $data;
	}
}