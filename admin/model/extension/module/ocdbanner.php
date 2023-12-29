<?php
/******************************************************************************************
 *** All rights reserved belong to the module, the module developers https://oc-day.ru  *** 
 *** https://oc-day.ru © 2017-2022 All Rights Reserved                                  ***
 *** Distribution, without the author's consent is prohibited                           ***
 *** Commercial license                                                                 ***
 ******************************************************************************************/
class ModelExtensionModuleOcdbanner extends Model {
  public function getLastId() {
    $query = $this->db->query("SELECT LAST_INSERT_ID();");

    return $query->row['LAST_INSERT_ID()'];
  }

  public function getEventByCode($code) {
    $query = $this->db->query("SELECT DISTINCT * FROM `" . DB_PREFIX . "event` WHERE `code` = '" . $this->db->escape($code) . "' LIMIT 1");
    
    return $query->row;
  }
  
  public function getAdminLanguageId() {
    $query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "language` WHERE code = '" . $this->db->escape($this->config->get('config_admin_language')) . "'");
    
    if ($query->num_rows) {
	    return $query->row['language_id'];
	  } else {
	    return $this->config->get('config_language_id');
	  }
  }  
}