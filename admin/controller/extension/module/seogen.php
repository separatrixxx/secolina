<?php

class ControllerExtensionModuleSeogen extends Controller {
    private $error = array();

    public function index() {
        $data = array();
        $data += $this->load->language('extension/module/seogen');

        $this->document->setTitle(strip_tags($this->language->get('heading_title')));

        $this->load->model('setting/setting');

        $data['user_token'] = $this->session->data['user_token'];

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {

            $post = $this->request->post;

            if (!isset($post['seogen']['seogen_overwrite'])) {
                $post['seogen']['seogen_overwrite'] = 0;
            }

            $post['module_seogen'] = $post['seogen'];
            unset($post['seogen']);

            $this->model_setting_setting->editSetting('module_seogen', $post);

            $this->session->data['success'] = $this->language->get('text_success');

            $this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));

        }

        if (isset($this->error['warning'])) {
            $data['error_warning'] = $this->error['warning'];
        } else {
            $data['error_warning'] = '';
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

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('extension/module/seogen', 'user_token=' . $this->session->data['user_token'], true),
        );

        $data['action'] = $this->url->link('extension/module/seogen', 'user_token=' . $this->session->data['user_token'], true);

        $data['action_profile_add'] = str_replace("&amp;", "&", $this->url->link('extension/module/seogen/profile', 'action=add&user_token=' . $this->session->data['user_token'], true));
        $data['action_profile_get'] = str_replace("&amp;", "&", $this->url->link('extension/module/seogen/profile', 'action=get&user_token=' . $this->session->data['user_token'], true));
        $data['action_profile_del'] = str_replace("&amp;", "&", $this->url->link('extension/module/seogen/profile', 'action=del&user_token=' . $this->session->data['user_token'], true));
        $data['generate'] = $this->url->link('extension/module/seogen/generate', 'user_token=' . $this->session->data['user_token'], true);

        $data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

        $this->load->model('catalog/category');
        // function from 1.5.4.1
        $categories = $this->model_catalog_category_getAllCategories();
        $data['categories'] = $this->getAllCategories($categories);

        $this->load->model('catalog/manufacturer');
        $data['manufacturers'] = $this->model_catalog_manufacturer->getManufacturers(array('start' => 0, 'limit' => 1000));

        $this->load->model('localisation/language');
        $data['languages'] = $this->model_localisation_language->getLanguages();

        if (isset($this->request->post['seogen'])) {
            $data['module_seogen'] = $this->request->post['seogen'];
        } elseif ($this->config->get('module_seogen')) {
            $data['module_seogen'] = $this->config->get('module_seogen');
        }

        if (!isset($data['module_seogen']['only_categories'])) {
            $data['module_seogen']['only_categories'] = array();
        }

        if (!isset($data['module_seogen']['only_manufacturers'])) {
            $data['module_seogen']['only_manufacturers'] = array();
        }

        if (!isset($data['module_seogen']['language_id'])) {
            $data['module_seogen']['language_id'] = $this->config->get('config_language_id');
        }
        if (!isset($data['module_seogen']['seogen_tab'])) {
            $data['module_seogen']['seogen_tab'] = '#tab-categories';
        }

        $default_tags = $this->getDefaultTags();
        foreach ($default_tags['module_seogen'] as $k => $v) {
            if (!isset($data['module_seogen'][$k])) {
                $data['module_seogen'][$k] = $v;
            }
        }
//        var_dump($data);

        if (isset($this->request->post['module_seogen_status'])) {
            $data['module_seogen_status'] = $this->request->post['module_seogen_status'];
        } else {
            $data['module_seogen_status'] = $this->config->get('module_seogen_status');
        }

        $this->load->model('extension/module/seogen');
        $data['profiles'] = $this->model_extension_module_seogen->getProfiles();
        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $data['seogen'] = $data['module_seogen'];
        unset($data['module_seogen']);

//        $this->response->setOutput($this->load->view('module/seogen.tpl', $data));
        $template = new Template('template');//, 'template_engine'));

        foreach ($data as $key => $value) {
            $template->set($key, $value);
        }

        $output = $template->render($this->registry->get('config')->get('template_directory') . 'extension/module/seogen');
        $this->response->setOutput($output);
    }

    private function getDefaultTags() {
        $seogen = array('module_seogen_status' => 1,
            'module_seogen' => array(
                'seogen_overwrite' => 1,
                'categories_template' => $this->language->get('text_categories_tags'),
                'categories_description_template' => $this->language->get('text_categories_description_tags'),
                'categories_meta_description_limit' => 160,
                'products_template' => $this->language->get('text_products_tags'),
                'products_model_template' => $this->language->get('text_products_model_tags'),
                'products_description_template' => $this->language->get('text_products_description_tags'),
                'products_meta_description_limit' => 160,
                'products_img_alt_template' => $this->language->get('text_products_img_alt'),
                'products_img_title_template' => $this->language->get('text_products_img_title'),
                'manufacturers_template' => $this->language->get('text_manufacturers_tags'),
                'manufacturers_description_template' => $this->language->get('text_manufacturers_description_tags'),
                'informations_template' => $this->language->get('text_informations_tags'),
            ));
        foreach ($this->getTables() as $table => $val) {
            foreach ($this->getFields() as $field_name => $tmpl) {
                $seogen['module_seogen'][$val . '_' . $tmpl . '_template'] = $this->language->get('text_' . $val . '_' . $tmpl . '_tags');
            }
        }
        $seogen['module_seogen']['products_tag_template'] = $this->language->get('text_products_tag_tags');
        return $seogen;
    }


    public function install() {
        $this->load->language('extension/module/seogen');
        $this->load->model('setting/setting');

        $query = $this->db->query("SHOW TABLES LIKE '" . DB_PREFIX . "manufacturer_description'");
        if (!$query->num_rows) {
            $this->db->query("CREATE TABLE `" . DB_PREFIX . "manufacturer_description` (
			 `manufacturer_id` int(11) NOT NULL DEFAULT '0',
			 `language_id` int(11) NOT NULL DEFAULT '0',
			 `description` text NOT NULL,
			 `meta_description` varchar(255) NOT NULL,
			 `meta_keyword` varchar(255) NOT NULL,
			 `meta_title` varchar(255) NOT NULL,
			 `meta_h1` varchar(255) NOT NULL,
			 PRIMARY KEY (`manufacturer_id`,`language_id`)
			) ENGINE=MyISAM DEFAULT CHARSET=utf8");
        }

        $query = $this->db->query("SHOW TABLES LIKE '" . DB_PREFIX . "seogen_profile'");
        if (!$query->num_rows) {
            $this->db->query("CREATE TABLE `" . DB_PREFIX . "seogen_profile` (" .
                " `profile_id` int(11) NOT NULL AUTO_INCREMENT," .
                " `name` varchar(255) NOT NULL," .
                " `data` text NOT NULL," .
                " PRIMARY KEY (`profile_id`)" .
                " ) ENGINE=MyISAM DEFAULT CHARSET=utf8");
        }

        foreach ($this->getTables() as $table => $val) {
            $query = $this->db->query("DESC `" . DB_PREFIX . $table . "`");
            $fields = array();
            foreach ($query->rows as $row) {
                $fields[] = $row['Field'];
            }
            foreach ($this->getFields() as $field_name => $tmpl) {
                if (!in_array($field_name, $fields)) {
                    $this->db->query("ALTER TABLE `" . DB_PREFIX . $table . "` ADD `" . $field_name . "` varchar(255) NOT NULL");
                }
            }
        }

        $query = $this->db->query("DESC `" . DB_PREFIX . "product_to_category`");
        $fields = array();
        foreach ($query->rows as $row) {
            $fields[] = $row['Field'];
        }
        if (!in_array("main_category", $fields)) {
            $this->db->query("ALTER TABLE `" . DB_PREFIX . "product_to_category` ADD `main_category` tinyint(1) NOT NULL DEFAULT '0'");
        }

        $seogen = $this->getDefaultTags();
        $this->model_setting_setting->editSetting('module_seogen', $seogen);

        $this->load->model('setting/event');
        $this->model_setting_event->addEvent('seogen', 'admin/model/catalog/product/addProduct/after', 'extension/module/seogen/eventGenProductAdd_23');
        $this->model_setting_event->addEvent('seogen', 'admin/model/catalog/product/editProduct/after', 'extension/module/seogen/eventGenProductEdit_23');

        $this->model_setting_event->addEvent('seogen', 'admin/model/catalog/category/addCategory/after', 'extension/module/seogen/eventGenCategoryAdd_23');
        $this->model_setting_event->addEvent('seogen', 'admin/model/catalog/category/editCategory/after', 'extension/module/seogen/eventGenCategoryEdit_23');

        $this->model_setting_event->addEvent('seogen', 'admin/model/catalog/manufacturer/addManufacturer/after', 'extension/module/seogen/eventGenManufacturerAdd_23');
        $this->model_setting_event->addEvent('seogen', 'admin/model/catalog/manufacturer/editManufacturer/after', 'extension/module/seogen/eventGenManufacturerEdit_23');

        $this->model_setting_event->addEvent('seogen', 'admin/model/catalog/information/addInformation/after', 'extension/module/seogen/eventGenInformationAdd_23');
        $this->model_setting_event->addEvent('seogen', 'admin/model/catalog/information/editInformation/after', 'extension/module/seogen/eventGenInformationEdit_23');

        $this->session->data['success'] = $this->language->get('text_install_success');

    }

    public function uninstall() {
        // delete the event triggers
        $this->load->model('setting/event');

        $this->model_setting_event->deleteEvent('seogen');
    }

    public function eventGenProductAdd_23(&$route, &$args, &$output) {
        $this->eventGenProduct($output);
    }

    public function eventGenCategoryAdd_23(&$route, &$args, &$output) {
        $this->eventGenCategory($output);
    }

    public function eventGenManufacturerAdd_23(&$route, &$args, &$output) {
        $this->eventGenManufacturer($output);
    }

    public function eventGenInformationAdd_23(&$route, &$args, &$output) {
        $this->eventGenInformation($output);
    }

    public function eventGenProductEdit_23(&$route, &$args, &$output) {
        $this->eventGenProduct($args[0]);
    }

    public function eventGenCategoryEdit_23(&$route, &$args, &$output) {
        $this->eventGenCategory($args[0]);
    }

    public function eventGenManufacturerEdit_23(&$route, &$args, &$output) {
        $this->eventGenManufacturer($args[0]);
    }

    public function eventGenInformationEdit_23(&$route, &$args, &$output) {
        $this->eventGenInformation($args[0]);
    }

    public function eventGenProduct($product_id) {
        if ($this->config->get('module_seogen_status')) {
            $this->load->model('extension/module/seogen');
            $this->model_extension_module_seogen->urlifyProduct($product_id);
        }
    }

    public function eventGenCategory($category_id) {
        if ($this->config->get('module_seogen_status')) {
            $this->load->model('extension/module/seogen');
            $this->model_extension_module_seogen->urlifyCategory($category_id);
        }
    }

    public function eventGenManufacturer($manufacturer_id) {
        if ($this->config->get('module_seogen_status')) {
            $this->load->model('extension/module/seogen');
            $this->model_extension_module_seogen->urlifyManufacturer($manufacturer_id);
        }
    }

    public function eventGenInformation($information_id) {
        if ($this->config->get('module_seogen_status')) {
            $this->load->model('extension/module/seogen');
            $this->model_extension_module_seogen->urlifyInformation($information_id);
        }
    }

    public function generate() {
        if ($this->request->server['REQUEST_METHOD'] == 'POST' && isset($this->request->post['name']) && $this->validate()) {
            $time_start = microtime(true);
            $base_memory_usage = memory_get_usage();

            $this->load->language('extension/module/seogen');
            $this->load->model('extension/module/seogen');
            $name = $this->request->post['name'];
            if ($name == 'categories') {
                $this->model_extension_module_seogen->generateCategories($this->request->post['seogen']);
            } elseif ($name == 'products') {
                $this->model_extension_module_seogen->generateProducts($this->request->post['seogen']);
            } elseif ($name == 'manufacturers') {
                $this->model_extension_module_seogen->generateManufacturers($this->request->post['seogen']);
            } elseif ($name == 'informations') {
                $this->model_extension_module_seogen->generateInformations($this->request->post['seogen']);
            }

            $this->response->setOutput($this->language->get('text_success_generation') . "</br><b>Total Execution Time:</b> " . (microtime(true) - $time_start) .
                "<br/>" . "<b>Memory usage:</b> " . number_format((memory_get_usage() - $base_memory_usage) / 1024 / 1024, 2, '.', '') . "Mb");
            $this->saveSettings($this->request->post['seogen']);
            $this->cache->delete("seo_pro");
        }
    }

    private function getAllCategories($categories, $parent_id = 0, $parent_name = '') {
        $output = array();

        if (array_key_exists($parent_id, $categories)) {
            if ($parent_name != '') {
                $parent_name .= $this->language->get('text_separator');
            }

            foreach ($categories[$parent_id] as $category) {
                $output[$category['category_id']] = array(
                    'category_id' => $category['category_id'],
                    'name' => $parent_name . $category['name']
                );

                $output += $this->getAllCategories($categories, $category['category_id'], $parent_name . $category['name']);
            }
        }

        return $output;
    }

    public function model_catalog_category_getAllCategories() {
        $category_data = $this->cache->get('category.all.' . $this->config->get('config_language_id') . '.' . (int)$this->config->get('config_store_id'));

        if (!$category_data || !is_array($category_data)) {
            $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "category c LEFT JOIN " . DB_PREFIX . "category_description cd ON (c.category_id = cd.category_id) LEFT JOIN " . DB_PREFIX . "category_to_store c2s ON (c.category_id = c2s.category_id) WHERE cd.language_id = '" . (int)$this->config->get('config_language_id') . "' AND c2s.store_id = '" . (int)$this->config->get('config_store_id') . "'  ORDER BY c.parent_id, c.sort_order, cd.name");

            $category_data = array();
            foreach ($query->rows as $row) {
                $category_data[$row['parent_id']][$row['category_id']] = $row;
            }

            $this->cache->set('category.all.' . $this->config->get('config_language_id') . '.' . (int)$this->config->get('config_store_id'), $category_data);
        }

        return $category_data;
    }

    private function saveSettings($data) {
        $seogen_status = $this->config->get('module_seogen_status');
        $seogen = $this->config->get('module_seogen');
        foreach ($data as $key => $val) {
            if (in_array($key, array_keys($seogen))) {
                $seogen[$key] = $val;
            }
        }
        $this->load->model('setting/setting');
        $this->model_setting_setting->editSetting('module_seogen', array('module_seogen' => $seogen, 'module_seogen_status' => $seogen_status));
    }

    public function profile() {
        if ($this->validate() && $this->request->server['REQUEST_METHOD'] == 'POST' && (isset($this->request->post['data']) || isset($this->request->post['profile_id']))) {
            $this->load->model('extension/module/seogen');

            $action = $this->request->get['action'];
            if ($action == 'add') {
                $data = $this->model_extension_module_seogen->parse_str(base64_decode($this->request->post['data']));
                $seogen_profile_name = $data['seogen_profile_name'];
                $profile_id = $this->model_extension_module_seogen->addProfile($seogen_profile_name, serialize($data['seogen']));

                $json = array('result' => 'success', 'profile_id' => $profile_id);
                $this->response->setOutput(json_encode($json));
            } elseif ($action == 'get' && isset($this->request->post['profile_id'])) {
                $profile_id = $this->request->post['profile_id'];
                $profile = $this->model_extension_module_seogen->getProfile($profile_id);

                $json = array('result' => 'success', 'profile' => $profile);
                $this->response->setOutput(json_encode($json));
            } elseif ($action == 'del' && isset($this->request->post['profile_id'])) {
                $profile_id = $this->request->post['profile_id'];
                $this->model_extension_module_seogen->deleteProfile($profile_id);

                $json = array('result' => 'success');
                $this->response->setOutput(json_encode($json));
            }
        }
    }

    private function validate() {
        if (!$this->user->hasPermission('modify', 'extension/module/seogen')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        return !$this->error;
    }

    private function getTables() {
        return array(
            "category_description" => "categories",
            "product_description" => "products",
            "manufacturer_description" => "manufacturers",
            "information_description" => "informations",
        );
    }

    private function getFields() {
        return array(
            "meta_title" => "meta_title",
            "meta_h1" => "meta_h1",
            "meta_description" => "meta_description",
            "meta_keyword" => "meta_keyword");
    }

}