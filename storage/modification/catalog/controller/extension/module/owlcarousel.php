<?php
class ControllerExtensionModuleOwlCarousel extends Controller {
    protected $path = array();

    public function index($setting) {
        static $module = 0;
        $modules = array();

        if ($setting['show_tabs'] && !empty($setting['display_with']) && is_array($setting['display_with'])) {
            $this->load->model('setting/module');

            $modules[] = $setting;

            foreach ($setting['display_with'] as $id => $checked) {
                $setting_info = $this->model_setting_module->getModule($id);

                if ($setting_info && $setting_info['status']) {
                    $modules[] = $setting_info;
                }
            }
        } else {
            $modules[] = $setting;
        }


				// BuyOneClick
					$this->load->model('setting/setting');
					$current_language_id = $this->config->get('config_language_id');

					$buyoneclick = $this->config->get('buyoneclick');
					$data['buyoneclick_name'] = isset($buyoneclick["name"][$current_language_id]) ? $buyoneclick["name"][$current_language_id] : '';
					$data['buyoneclick_status_module'] = $buyoneclick["status_module"];

					$data['buyoneclick_ya_status'] 					= $buyoneclick['ya_status'];
					$data['buyoneclick_ya_counter'] 				= $buyoneclick['ya_counter'];
					$data['buyoneclick_ya_identificator'] 			= $buyoneclick['ya_identificator'];
					$data['buyoneclick_ya_identificator_send'] 		= $buyoneclick['ya_identificator_send'];
					$data['buyoneclick_ya_identificator_success'] 	= $buyoneclick['ya_identificator_success'];

					$data['buyoneclick_google_status'] 				= $buyoneclick['google_status'];
					$data['buyoneclick_google_category_btn'] 		= $buyoneclick['google_category_btn'];
					$data['buyoneclick_google_action_btn'] 			= $buyoneclick['google_action_btn'];
					$data['buyoneclick_google_category_send'] 		= $buyoneclick['google_category_send'];
					$data['buyoneclick_google_action_send'] 		= $buyoneclick['google_action_send'];
					$data['buyoneclick_google_category_success'] 	= $buyoneclick['google_category_success'];
					$data['buyoneclick_google_action_success'] 		= $buyoneclick['google_action_success'];

					$this->load->language('extension/module/buyoneclick');
					if (!isset($data['buyoneclick_name']) or $data['buyoneclick_name'] == '') {
						$data['buyoneclick_name'] = $this->language->get('buyoneclick_button');
					}
					$data['buyoneclick_text_loading'] = $this->language->get('buyoneclick_text_loading');
				// BuyOneClickEnd
				
        $data['modules'] = array();

        $this->language->load('extension/module/owlcarousel');
        $this->load->model('catalog/category');
        $this->load->model('catalog/product');

        $this->document->addStyle('catalog/view/javascript/jquery/owl-carousel/owl.carousel.css');
        $this->document->addScript('catalog/view/javascript/jquery/owl-carousel/owl.carousel.min.js');

        foreach ($modules as $mid => $setting) {
            $vars = array();

            if ($setting['title']) {
                $vars['heading_title'] = $setting['title'][$this->config->get('config_language_id')];
            } else {
                $category = $this->model_catalog_category->getCategory($setting['category_id']);
                if (isset($category['name'])) {
                    $vars['heading_title'] = $category['name'];
                } else {
                    $vars['heading_title'] = $this->language->get('heading_title');
                }
            }

            $vars['visible']            = $setting['visible'];
            $vars['visible_1000']       = $setting['visible_1000'];
            $vars['visible_900']        = $setting['visible_900'];
            $vars['visible_600']        = $setting['visible_600'];
            $vars['visible_479']        = $setting['visible_479'];
            $vars['add_class_name']     = $setting['add_class_name'];
            $vars['sort']               = $setting['sort'];
            $vars['show_title']         = $setting['show_title'];
            $vars['show_name']          = $setting['show_name'];
            $vars['show_desc']          = $setting['show_desc'];
            $vars['show_price']         = $setting['show_price'];
            $vars['show_rate']          = $setting['show_rate'];
            $vars['show_cart']          = $setting['show_cart'];
            $vars['show_wishlist']      = $setting['show_wishlist'];
            $vars['show_compare']       = $setting['show_compare'];
            $vars['show_stop_on_hover'] = $setting['show_stop_on_hover'];
            $vars['show_tabs']          = $setting['show_tabs'];
            $vars['show_page']          = $setting['show_page'];
            $vars['show_nav']           = $setting['show_nav'];
            $vars['show_lazy_load']     = $setting['show_lazy_load'];
            $vars['show_mouse_drag']    = $setting['show_mouse_drag'];
            $vars['show_touch_drag']    = $setting['show_touch_drag'];
            $vars['show_per_page']      = $setting['show_per_page'];
            $vars['show_random_item']   = $setting['show_random_item'];

            if ($setting['slide_speed'] > 0) {
                $vars['slide_speed'] = $setting['slide_speed'];}
                else {$vars['slide_speed'] = '0';
            }

            if ($setting['pagination_speed'] > 0) {
                $vars['pagination_speed'] = $setting['pagination_speed'];}
                else {$vars['pagination_speed'] = '0';
            }

            if ($setting['autoscroll'] > 0) {
                $vars['autoscroll'] = $setting['autoscroll'];}
                else {$vars['autoscroll'] = '0';
            }

            if ($setting['item_prev_next'] > 0) {
                $vars['item_prev_next'] = $setting['item_prev_next'];}
                else {$vars['item_prev_next'] = '0';
            }

            if (isset($setting['rewind_speed']) && $setting['rewind_speed'] > 0) {
                $vars['rewind_speed'] = $setting['rewind_speed'];}
                else {$vars['rewind_speed'] = '0';
            }

            $this->load->model('extension/module/owlcarousel');
            $this->load->model('tool/image');

            if (isset($this->request->get['path'])) {
                $this->path = explode('_', $this->request->get['path']);
                $this->category_id = end($this->path);
            }

            $url = '';

            $vars['products'] = array();

            if ($setting['category_id'] == 'featured') {
                $vars['products'] = $this->getFeaturedProducts($setting);
            } else {
                $vars['products'] = $this->getCategoryProducts($setting);
            }


            $vars['module'] = $module;
            $module++;

            $data['modules'][$mid] = $vars;

            $data['module'] = $module++;
        }

        $sort_order = array();

        $data['button_cart']        = $this->language->get('button_cart');
        $data['button_wishlist']    = $this->language->get('button_wishlist');
        $data['button_compare']     = $this->language->get('button_compare');
        $data['text_tax']           = $this->language->get('text_tax');

        return $this->load->view('extension/module/owlcarousel', $data);
    }

    public function getCategoryProducts($setting) {
        $result = array();

        if (isset($this->request->get['path']) && $setting['show_current_category'] > 0) {
            if (isset($this->request->get['route']) && $this->request->get['route'] == 'product/category') {
                $parts = explode('_', (string)$this->request->get['path']);
                $category_id = (int)array_pop($parts);
            }
        } else {
            $category_id = $setting['category_id'];
        }
        
        $data = array(
            'filter_category_id'     => $category_id,
            'filter_manufacturer_id' => $setting['manufacturer_id'],
            'filter_sub_category'    => true,
            'sort'                   => $setting['sort'],
            'order'                  => 'DESC',
            'start'                  => '0',
            'limit'                  => $setting['count']
        );

        $products = $this->model_extension_module_owlcarousel->getProducts($data);

        foreach ($products as $product) {
            if ($product['image']) {
                $image = $product['image'];
            } else {
                $image = 'placeholder.png';
            }

            if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
                $price = $this->currency->format($this->tax->calculate($product['price'], $product['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
            } else {
                $price = false;
            }

            if ((float)$product['special']) {
                $special = $this->currency->format($this->tax->calculate($product['special'], $product['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
            } else {
                $special = false;
            }

            if ($this->config->get('config_tax')) {
                $tax = $this->currency->format((float)$product['special'] ? $product['special'] : $product['price'], $this->session->data['currency']);
            } else {
                $tax = false;
            }

            $options = $this->model_catalog_product->getProductOptions($product['product_id']);

            if ($this->config->get('config_review_status')) {
                $rating = (int)$product['rating'];
            } else {
                 $rating = false;
            }

            $result[] = array(
                'product_id'      => $product['product_id'],
                'thumb'   => $this->model_tool_image->resize($image, $setting['image_width'], $setting['image_height']),
                'name'    => $product['name'],
                'description' => utf8_substr(trim(strip_tags(html_entity_decode($product['description'], ENT_QUOTES, 'UTF-8'))), 0, $this->config->get('theme_' . $this->config->get('config_theme') . '_product_description_length')) . '..',
                'href'    => $this->url->link('product/product', 'product_id=' . $product['product_id']),
                'model'   => $product['model'],
                'price'   => $price,
                'special' => $special,
                'tax'     => $tax,
                'qty'     => $product['quantity'],
                'rating'  => $rating,
                'reviews' => sprintf($this->language->get('text_reviews'), (int)$product['reviews'])
            );
        }
        return $result;
    }

    public function getFeaturedProducts($setting){
        $result = array();

        $products = explode(',', $setting['featured']);

        if (empty($setting['count'])) {
            $setting['count'] = 5;
        }

        $products = array_slice($products, 0, (int)$setting['count']);

        foreach ($products as $product_id) {
            $product_info = $this->model_catalog_product->getProduct($product_id);

            if ($product_info) {
                if ($product_info['image']) {
                    $image = $product_info['image'];
                } else {
                    $image = 'placeholder.png';
                }

                if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
                    $price = $this->currency->format($this->tax->calculate($product_info['price'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
                } else {
                    $price = false;
                }

                if ((float)$product_info['special']) {
                    $special = $this->currency->format($this->tax->calculate($product_info['special'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
                } else {
                    $special = false;
                }

                if ($this->config->get('config_tax')) {
                    $tax = $this->currency->format((float)$product_info['special'] ? $product_info['special'] : $product_info['price'], $this->session->data['currency']);
                } else {
                    $tax = false;
                }

                if ($this->config->get('config_review_status')) {
                    $rating = $product_info['rating'];
                } else {
                    $rating = false;
                }

                $result[] = array(
                    'product_id' => $product_info['product_id'],
                    'thumb'   => $this->model_tool_image->resize($image, $setting['image_width'], $setting['image_height']),
                    'name'    => $product_info['name'],
                    'description' => utf8_substr(trim(strip_tags(html_entity_decode($product_info['description'], ENT_QUOTES, 'UTF-8'))), 0, $this->config->get('theme_' . $this->config->get('config_theme') . '_product_description_length')) . '..',
                    'href'    => $this->url->link('product/product', 'product_id=' . $product_info['product_id']),
                    'price'   => $price,
                    'special' => $special,
                    'tax'     => $tax,
                    'rating'  => $rating,
                    'reviews' => sprintf($this->language->get('text_reviews'), (int)$product_info['reviews'])
                );
            }
        }
        return $result;
    }
}
?>