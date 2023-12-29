<?php

class ModelExtensionModuleConfigurator extends Model {
	
	private function checkList($list = '') {
		$correct = preg_match('/^(?:\-?\d\,?\s?)+$/', $list);
		return $correct;
	}
	
	
	public function getListSections() {
		$query = $this->db->query("SELECT * FROM ".DB_PREFIX."configurator_sections WHERE `status` = '1' ORDER BY id_group");
		return $query->rows;
	}	
	
	
	public function getCategoryTree($categories_arr = array()) {
		$category_tree = array();
		
		if(!empty($categories_arr)) {
			$categories_list = implode(',', array_keys($categories_arr));

			$query = $this->db->query("
				SELECT cat.category_id,
					CASE
						WHEN cat.parent_id = 0 THEN cat_desc.name
					ELSE CONCAT(
							(SELECT GROUP_CONCAT(cat_desc2.name ORDER BY cat_path2.`level` SEPARATOR '&nbsp;&nbsp;&gt;&nbsp;&nbsp;') 
							FROM ".DB_PREFIX."category_path cat_path2 
							JOIN ".DB_PREFIX."category_description cat_desc2 
								ON (cat_path2.path_id = cat_desc2.category_id 
								AND cat_path2.category_id != cat_path2.path_id) 
							WHERE cat_path2.category_id = cat.category_id 
							AND cat_desc2.language_id = cat_desc.language_id 
							GROUP BY cat_path2.category_id
							ORDER BY NULL), '&nbsp;&nbsp;&gt;&nbsp;&nbsp;', cat_desc.name)
					END 'path_n_name'
				FROM ".DB_PREFIX."category cat
				JOIN ".DB_PREFIX."category_description cat_desc 
				JOIN ".DB_PREFIX."category_path cat_path 
					ON(cat.category_id = cat_desc.category_id)
					AND(cat.category_id = cat_path.category_id)
				WHERE cat.`status` = '1'
				AND cat_path.path_id IN (".$categories_list.")
				AND cat_desc.language_id = '".(int)$this->config->get('config_language_id')."' 
				GROUP BY cat.category_id
				ORDER BY path_n_name
			");
			
			foreach($query->rows as $category) {
				$category_tree[$category['category_id']] = $category['path_n_name'];
			}
		}

		return $category_tree;
	}

	
	public function getProductsOfSection($target_ctgrs_id, $added_prdcts_id, $desc_trim_length, $filter, $sorting, $start = 0, $limit = 50) {
		if($this->checkList($target_ctgrs_id)) {
			$query = $this->db->query("
				SELECT cat.category_id
				FROM ".DB_PREFIX."category cat
				JOIN ".DB_PREFIX."category_path cat_path 
					ON(cat.category_id = cat_path.category_id)
				WHERE cat.`status` = '1'
				AND cat_path.path_id IN (".$target_ctgrs_id.")
				GROUP BY cat.category_id
				ORDER BY NULL
			");

			if($query->num_rows) {
				$related_ctgrs_id = implode(',', array_column($query->rows, 'category_id'));
			}else{
				return array();
			}
		}else{
			return array();
		}


		$query = $this->db->query("
			SELECT cat.category_id 
			FROM ".DB_PREFIX."category cat 
			JOIN ".DB_PREFIX."category_path cat_path 
				ON(cat.category_id = cat_path.category_id) 
			WHERE cat_path.path_id IN ( 
				SELECT DISTINCT 
					 CASE 
						WHEN cat_excl.exclusion_category_id = -1 THEN cat_excl.category_id 
					 ELSE cat_excl.exclusion_category_id 
					 END 'category_id' 
				FROM ".DB_PREFIX."category cat 
				JOIN ".DB_PREFIX."category_path cat_path 
					ON(cat.category_id = cat_path.category_id) 
				JOIN ".DB_PREFIX."product_to_category p_to_cat 
					ON(cat.category_id = p_to_cat.category_id), 
				".DB_PREFIX."configurator_category_exclusions cat_excl 
				WHERE cat_excl.exclusion_category_id = '-1' 
				".(($this->checkList($added_prdcts_id))? 
				"OR p_to_cat.product_id IN (".$added_prdcts_id.") AND cat_excl.category_id = cat_path.path_id" : "")."
			)
			AND cat.`status` = '1' 
			GROUP BY cat.category_id 
			ORDER BY NULL 
		");
		
		if($query->num_rows) {
			$excl_ctgrs_id = implode(',', array_column($query->rows, 'category_id'));
			$excl_ctgrs_query = "AND cat.category_id NOT IN (".$excl_ctgrs_id.")";		
		}else{
			$excl_ctgrs_query = "";
		}

		
		$query = $this->db->query(
			(($this->checkList($added_prdcts_id))?
				"SELECT DISTINCT p_attr2.product_id
					FROM ".DB_PREFIX."configurator_attribute_exclusions attr_excl
					JOIN ".DB_PREFIX."product_attribute p_attr 
						ON p_attr.attribute_id = attr_excl.attribute_id
						AND p_attr.language_id = attr_excl.language_id
						AND (p_attr.`text` = attr_excl.`text` COLLATE utf8_bin OR '*' = attr_excl.`text`)
					JOIN ".DB_PREFIX."product_attribute p_attr2 
						ON p_attr2.attribute_id = attr_excl.exclusion_attribute_id
						AND p_attr2.language_id = attr_excl.language_id
						AND (p_attr2.`text` = attr_excl.exclusion_text COLLATE utf8_bin OR '*' = attr_excl.exclusion_text)
								
					WHERE p_attr.product_id IN (".$added_prdcts_id.")
					AND attr_excl.language_id = '".(int)$this->config->get('config_language_id')."'

				UNION
			
				SELECT DISTINCT 
					CASE 
						WHEN p_excl.exclusion_product_id = -1 THEN p_excl.product_id  
						ELSE p_excl.exclusion_product_id 
					END 'product_id'
				FROM ".DB_PREFIX."configurator_product_exclusions p_excl
				WHERE p_excl.exclusion_product_id = '-1'
				OR p_excl.product_id IN (".$added_prdcts_id.")"
			:
				"SELECT DISTINCT 
					CASE 
						WHEN p_excl.exclusion_product_id = -1 THEN p_excl.product_id  
						ELSE p_excl.exclusion_product_id 
					END 'product_id'
				FROM ".DB_PREFIX."configurator_product_exclusions p_excl
				WHERE p_excl.exclusion_product_id = '-1'"
			)
		);

		if($query->num_rows) {
			$excl_prdcts_id = implode(',', array_column($query->rows, 'product_id'));
			$excl_prdcts_query = "AND p.product_id NOT IN (".$excl_prdcts_id.")";	
		}else{
			$excl_prdcts_query = "";
		}

		
		if(!empty($filter)) {
			$filter_query = "AND p_desc.name LIKE '%".$this->db->escape($filter)."%'";		
		}else{
			$filter_query = "";
		}
		
		
		switch($sorting) {
			case "name-down":
				$order_by_query = 'ORDER BY p_desc.name ASC';
				break;
			case "name-up":
				$order_by_query = 'ORDER BY p_desc.name DESC';
				break;			
			case "price-up":
				$order_by_query = 'ORDER BY p.price ASC';
				break;			
			case "price-down":
				$order_by_query = 'ORDER BY p.price DESC';
				break;
			case "default":
			default:
				$order_by_query = 'ORDER BY cat.category_id ASC';
				break;
		}
		
		
		$desc_output = (empty($desc_trim_length))? "p_desc.description" : "SUBSTRING(p_desc.description, 1, ".(int)($desc_trim_length + 12).") AS `description`";
		
		
		$query = $this->db->query("
			SELECT p.product_id, 
				p_desc.name, 
				p.quantity,
				p.minimum,
				p.sku, 
				p.image, 
				p.price, 
				(SELECT GROUP_CONCAT(CONCAT(quantity, ':'), price) FROM " . DB_PREFIX . "product_discount pd 
					WHERE pd.product_id = p.product_id 
					AND pd.customer_group_id = '" . (int)$this->config->get('config_customer_group_id') . "' 
					AND ((pd.date_start = '0000-00-00' OR pd.date_start < NOW()) 
					AND (pd.date_end = '0000-00-00' OR pd.date_end > NOW())) 
					ORDER BY pd.quantity ASC) AS `discount`, 
				(SELECT price FROM " . DB_PREFIX . "product_special ps 
					WHERE ps.product_id = p.product_id 
					AND ps.customer_group_id = '" . (int)$this->config->get('config_customer_group_id') . "' 
					AND ((ps.date_start = '0000-00-00' OR ps.date_start < NOW()) 
					AND (ps.date_end = '0000-00-00' OR ps.date_end > NOW())) 
					ORDER BY ps.priority ASC, ps.price ASC LIMIT 1) AS `special`, 
				p.tax_class_id, 
				".$desc_output.", 
				cat.category_id
			FROM ".DB_PREFIX."product p 
			JOIN ".DB_PREFIX."product_description p_desc 
			JOIN ".DB_PREFIX."product_to_category p_to_cat 
			JOIN ".DB_PREFIX."category cat 
				ON p.product_id = p_desc.product_id 
				AND p.product_id = p_to_cat.product_id 
				AND cat.category_id = p_to_cat.category_id 
			WHERE cat.category_id IN (".$related_ctgrs_id.") 
			".$excl_ctgrs_query." 
			".$excl_prdcts_query."
			".$filter_query."
			AND p.`status` = '1' 
			AND p.quantity > '0'  
			AND p.quantity >= p.minimum 
			AND p_desc.language_id = '".(int)$this->config->get('config_language_id')."'
			GROUP BY p.product_id
			".$order_by_query."
			LIMIT ".(int)$start.", ".(int)$limit." 
		");

		return $query->rows;	  
	}
	
	
	public function getPreset($p_id) {
		if(empty($p_id) && $p_id != "0") return array();
		
		$query = $this->db->query("SELECT * FROM ".DB_PREFIX."configurator_presets WHERE `status` = '1' AND id = '".(int)$p_id."'");
		return $query->row;	  
	}		
	
	
	public function getListPresets() {
		$query = $this->db->query("SELECT * FROM ".DB_PREFIX."configurator_presets WHERE `status` = '1' ORDER BY id");
		return $query->rows;	  	
	}	
	
	
	public function getProductsOfPreset($id_list, $desc_trim_length) {
		if(!$this->checkList($id_list)) return array();
		
		$desc_output = (empty($desc_trim_length))? "p_desc.description" : "SUBSTRING(p_desc.description, 1, ".(int)($desc_trim_length + 12).") AS `description`";
		
		$query = $this->db->query("
			SELECT p.product_id,
				p_desc.name, 
				p.quantity,
				p.minimum,
				p.sku, 
				p.image, 
				p.price, 
				(SELECT GROUP_CONCAT(CONCAT(quantity, ':'), price) FROM " . DB_PREFIX . "product_discount pd 
					WHERE pd.product_id = p.product_id 
					AND pd.customer_group_id = '" . (int)$this->config->get('config_customer_group_id') . "' 
					AND ((pd.date_start = '0000-00-00' OR pd.date_start < NOW()) 
					AND (pd.date_end = '0000-00-00' OR pd.date_end > NOW())) 
					ORDER BY pd.quantity ASC) AS `discount`, 
				(SELECT price FROM " . DB_PREFIX . "product_special ps 
					WHERE ps.product_id = p.product_id 
					AND ps.customer_group_id = '" . (int)$this->config->get('config_customer_group_id') . "' 
					AND ((ps.date_start = '0000-00-00' OR ps.date_start < NOW()) 
					AND (ps.date_end = '0000-00-00' OR ps.date_end > NOW())) 
					ORDER BY ps.priority ASC, ps.price ASC LIMIT 1) AS `special`, 
				p.tax_class_id, 
				".$desc_output.", 
				cat.category_id	
			FROM ".DB_PREFIX."product p 
			JOIN ".DB_PREFIX."product_description p_desc 
			JOIN ".DB_PREFIX."product_to_category p_to_cat 
			JOIN ".DB_PREFIX."category cat 
				ON p.product_id = p_desc.product_id 
				AND p.product_id = p_to_cat.product_id 
				AND cat.category_id = p_to_cat.category_id 
			WHERE cat.`status` = '1' 
			AND p.product_id IN (".$id_list.") 
			AND p.`status` = '1' 
			AND p.quantity > '0' 
			AND p.quantity >= p.minimum 
			AND p_desc.language_id = '".(int)$this->config->get('config_language_id')."' 
			GROUP BY p.product_id 
			ORDER BY NULL 
		");
								 
		return $query->rows;
	}

}
?>