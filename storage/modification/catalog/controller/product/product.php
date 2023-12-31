<?php
class ControllerProductProduct extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('product/product');

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		$this->load->model('catalog/category');


      // path manager
      if (isset($this->request->get['product_id']) && ((!isset($this->request->get['path']) && $this->config->get('mlseo_fpp_breadcrumbs') == '1') || ($this->config->get('mlseo_fpp_breadcrumbs') == '2')) && is_array($this->request->get)) {
        unset($this->request->get['path']);
        $this->load->model('tool/path_manager');
        $this->request->get = $this->model_tool_path_manager->getFullProductPath($this->request->get['product_id'], true) + $this->request->get;
      }
      
		if (isset($this->request->get['path'])) {
			$path = '';

			$parts = explode('_', (string)$this->request->get['path']);

			$category_id = (int)array_pop($parts);

			foreach ($parts as $path_id) {
				if (!$path) {
					$path = $path_id;
				} else {
					$path .= '_' . $path_id;
				}

				$category_info = $this->model_catalog_category->getCategory($path_id);

				if ($category_info) {
					$data['breadcrumbs'][] = array(
						'text' => $category_info['name'],
						'href' => $this->url->link('product/category', 'path=' . $path)
					);
				}
			}

			// Set the last category breadcrumb
			$category_info = $this->model_catalog_category->getCategory($category_id);

			if ($category_info) {
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

				if (isset($this->request->get['limit'])) {
					$url .= '&limit=' . $this->request->get['limit'];
				}

				$data['breadcrumbs'][] = array(
					'text' => $category_info['name'],
					'href' => $this->url->link('product/category', 'path=' . $this->request->get['path'] . (!isset($this->request->get['manufacturer_id']) && !isset($this->request->get['search']) && !isset($this->request->get['tag']) ? $url : ''))
				);
			}
		}

		$this->load->model('catalog/manufacturer');

		if (isset($this->request->get['manufacturer_id'])) {
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('text_brand'),
				'href' => $this->url->link('product/manufacturer')
			);

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

			if (isset($this->request->get['limit'])) {
				$url .= '&limit=' . $this->request->get['limit'];
			}

			$manufacturer_info = $this->model_catalog_manufacturer->getManufacturer($this->request->get['manufacturer_id']);

			if ($manufacturer_info) {
				$data['breadcrumbs'][] = array(
					'text' => $manufacturer_info['name'],
					'href' => $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $this->request->get['manufacturer_id'] . $url)
				);
			}
		}

		if (isset($this->request->get['search']) || isset($this->request->get['tag'])) {
			$url = '';

			if (isset($this->request->get['search'])) {
				$url .= '&search=' . $this->request->get['search'];
			}

			if (isset($this->request->get['tag'])) {
				$url .= '&tag=' . $this->request->get['tag'];
			}

			if (isset($this->request->get['description'])) {
				$url .= '&description=' . $this->request->get['description'];
			}

			if (isset($this->request->get['category_id'])) {
				$url .= '&category_id=' . $this->request->get['category_id'];
			}

			if (isset($this->request->get['sub_category'])) {
				$url .= '&sub_category=' . $this->request->get['sub_category'];
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

			if (isset($this->request->get['limit'])) {
				$url .= '&limit=' . $this->request->get['limit'];
			}

			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('text_search'),
				'href' => $this->url->link('product/search', $url)
			);
		}

		if (isset($this->request->get['product_id'])) {
			$product_id = (int)$this->request->get['product_id'];
		} else {
			$product_id = 0;
		}

		$this->load->model('catalog/product');

		$product_info = $this->model_catalog_product->getProduct($product_id);

		//check product page open from cateory page
		if (isset($this->request->get['path'])) {
			$parts = explode('_', (string)$this->request->get['path']);
						
			if(empty($this->model_catalog_product->checkProductCategory($product_id, $parts))) {
				$product_info = array();
			}
		}

		//check product page open from manufacturer page
		if (isset($this->request->get['manufacturer_id']) && !empty($product_info)) {
			if($product_info['manufacturer_id'] !=  $this->request->get['manufacturer_id']) {
				$product_info = array();
			}
		}

		if ($product_info) {

						//microdatapro 8.1 start
							$data['microdatapro_data'] = $product_info;
						//microdatapro 8.1 end
					
			$url = '';

			if (isset($this->request->get['path'])) {
				$url .= '&path=' . $this->request->get['path'];
			}

			if (isset($this->request->get['filter'])) {
				$url .= '&filter=' . $this->request->get['filter'];
			}

			if (isset($this->request->get['manufacturer_id'])) {
				$url .= '&manufacturer_id=' . $this->request->get['manufacturer_id'];
			}

			if (isset($this->request->get['search'])) {
				$url .= '&search=' . $this->request->get['search'];
			}

			if (isset($this->request->get['tag'])) {
				$url .= '&tag=' . $this->request->get['tag'];
			}

			if (isset($this->request->get['description'])) {
				$url .= '&description=' . $this->request->get['description'];
			}

			if (isset($this->request->get['category_id'])) {
				$url .= '&category_id=' . $this->request->get['category_id'];
			}

			if (isset($this->request->get['sub_category'])) {
				$url .= '&sub_category=' . $this->request->get['sub_category'];
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

			if (isset($this->request->get['limit'])) {
				$url .= '&limit=' . $this->request->get['limit'];
			}

			$data['breadcrumbs'][] = array(
				'text' => $product_info['name'],
				'href' => $this->url->link('product/product', $url . '&product_id=' . $this->request->get['product_id'])
			);

			
      if ($this->config->get('mlseo_enabled')) {
        $this->document->setTitle(!empty($product_info['meta_title']) ? $product_info['meta_title'] : $product_info['name']);
        if (version_compare(VERSION, '2', '>=')) {
          $data['image_alt'] = !empty($product_info['image_alt']) ? $product_info['image_alt'] : '';
          $data['image_title'] = !empty($product_info['image_title']) ? $product_info['image_title'] : '';
        } else {
          $this->data['image_alt'] = !empty($product_info['image_alt']) ? $product_info['image_alt'] : '';
          $this->data['image_title'] = !empty($product_info['image_title']) ? $product_info['image_title'] : '';
        }
      } else {
        $this->document->setTitle($product_info['meta_title']);
      }
      
			$this->document->setDescription($product_info['meta_description']);
			$this->document->setKeywords($product_info['meta_keyword']);
			$this->document->addLink($this->url->link('product/product', 'product_id=' . $this->request->get['product_id']), 'canonical');
			$this->document->addScript('catalog/view/javascript/jquery/magnific/jquery.magnific-popup.min.js');
			$this->document->addStyle('catalog/view/javascript/jquery/magnific/magnific-popup.css');
			$this->document->addScript('catalog/view/javascript/jquery/datetimepicker/moment/moment.min.js');
			$this->document->addScript('catalog/view/javascript/jquery/datetimepicker/moment/moment-with-locales.min.js');
			$this->document->addScript('catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js');
			$this->document->addStyle('catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css');

			$data['heading_title'] = $product_info['name'];


      if (version_compare(VERSION, '2', '>=')) {
        if ($this->config->get('mlseo_fpp_noprodbreadcrumb')) {
          array_pop($data['breadcrumbs']);
        }

        //$data['heading_title'] = $product_info['name'];

        $data["heading_title"] = !empty($product_info['seo_h1']) && $this->config->get('mlseo_enabled') ? $product_info['seo_h1'] : $product_info['name'];
        $data['seo_h1'] = !empty($product_info['seo_h1']) ? $product_info['seo_h1'] : '';
        $data['seo_h2'] = !empty($product_info['seo_h2']) ? $product_info['seo_h2'] : '';
        $data['seo_h3'] = !empty($product_info['seo_h3']) ? $product_info['seo_h3'] : '';
      } else {
        if ($this->config->get('mlseo_fpp_noprodbreadcrumb')) {
          array_pop($this->data['breadcrumbs']);
        }

        //$this->data['heading_title'] = $product_info['name'];

        $this->data["heading_title"] = !empty($product_info['seo_h1']) && $this->config->get('mlseo_enabled') ? $product_info['seo_h1'] : $product_info['name'];
        $this->data['seo_h1'] = !empty($product_info['seo_h1']) ? $product_info['seo_h1'] : '';
        $this->data['seo_h2'] = !empty($product_info['seo_h2']) ? $product_info['seo_h2'] : '';
        $this->data['seo_h3'] = !empty($product_info['seo_h3']) ? $product_info['seo_h3'] : '';
      }

      $this->load->model('catalog/review');

      $data['seo_reviews'] = '';

      if ($this->config->get('mlseo_reviews')) {
        $gkd_seo_reviews = $this->model_catalog_review->getReviewsByProductId($this->request->get['product_id'], 0, (int)$this->config->get('mlseo_reviews'));

        if (count($gkd_seo_reviews)) {
          $data['seo_reviews'] .= '<div class="seo_reviews">';
            foreach ($gkd_seo_reviews as $review) {
              $data['seo_reviews'] .= '<table class="table table-striped table-bordered seo_review">';
              $data['seo_reviews'] .= '<tr>';
              $data['seo_reviews'] .= '  <td style="width: 50%;"><strong>' . $review['author']. '</strong></td>';
              $data['seo_reviews'] .= '  <td class="text-right">' . $review['date_added']. '</td>';
              $data['seo_reviews'] .= '</tr>';
              $data['seo_reviews'] .= '<tr>';
              $data['seo_reviews'] .= '  <td colspan="2"><p>' . $review['text']. '</p>';
              for ($i = 1; $i <= 5; $i++) {
                if ($review['rating'] < $i) {
                  $data['seo_reviews'] .= '    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>';
                } else {
                  $data['seo_reviews'] .= '    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>';
                }
              }
              $data['seo_reviews'] .= '  </td>';
              $data['seo_reviews'] .= '</tr>';
              $data['seo_reviews'] .= '</table>';
            }
          $data['seo_reviews'] .= '</div>';
        }
      }

      if (!empty($product_info['meta_robots'])) {
        $this->document->addSeoMeta('<meta name="robots" content="'.$product_info['meta_robots'].'"/>'."\n");
      }

      if ($this->config->get('mlseo_header_lm_product')) {
        $array_lm = array(strtotime($product_info['date_modified']));

        if (strtotime($product_info['date_available']) < strtotime(date('Y-m-d'))) {
          $array_lm[] = strtotime($product_info['date_available']);
        }

        $special_query = $this->db->query("SELECT date_start, date_end FROM " . DB_PREFIX . "product_special ps WHERE ps.product_id = '".(int)$product_id."' AND ps.customer_group_id = '" . (int)$this->config->get('config_customer_group_id') . "' AND ((ps.date_start = '0000-00-00' OR ps.date_start < NOW()) AND (ps.date_end = '0000-00-00' OR ps.date_end > NOW()))")->row;

        if (!empty($special_query['date_start']) && strtotime($special_query['date_start']) < strtotime(date('Y-m-d'))) {
          $array_lm[] = strtotime($special_query['date_start']);
        }

        if (!empty($special_query['date_end']) && strtotime($special_query['date_end']) < strtotime(date('Y-m-d'))) {
          $array_lm[] = strtotime($special_query['date_end']);
        }

        $review_query = $this->db->query("SELECT date_modified FROM " . DB_PREFIX . "review WHERE product_id = '" . (int)$product_id . "' AND status = '1' ORDER BY date_modified DESC LIMIT 1")->row;

        if (!empty($review_query['date_modified']) && strtotime($review_query['date_modified']) < strtotime(date('Y-m-d'))) {
          $array_lm[] = strtotime($review_query['date_modified']);
        }

        $gkd_header_lm_date = max($array_lm);

        $this->response->addHeader('Last-Modified: '.date('D, d M Y H:i:s', $gkd_header_lm_date).' GMT');
      }
      
			$data['text_minimum'] = sprintf($this->language->get('text_minimum'), $product_info['minimum']);
			$data['text_login'] = sprintf($this->language->get('text_login'), $this->url->link('account/login', '', true), $this->url->link('account/register', '', true));

			$this->load->model('catalog/review');

			$data['tab_review'] = sprintf($this->language->get('tab_review'), $product_info['reviews']);

			$data['product_id'] = (int)$this->request->get['product_id'];
			$data['manufacturer'] = $product_info['manufacturer'];
			$data['manufacturers'] = $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $product_info['manufacturer_id']);
			$data['model'] = $product_info['model'];

				$data['sku'] = $product_info['sku'];
				$data['weight'] = $this->weight->format($product_info['weight'],$product_info['weight_class_id']);
			
			$data['reward'] = $product_info['reward'];
			$data['points'] = $product_info['points'];

				$data['quantity'] = $product_info['quantity'];
			
			$data['description'] = html_entity_decode($product_info['description'], ENT_QUOTES, 'UTF-8');

      $seoHeadings = $this->config->get('mlseo_headings');

      if ($this->config->get('mlseo_enabled')) {
        $extraTopDesc = $extraBottomDesc = '';

        foreach (array('h1', 'h2', 'h3') as $headingType) {
          if (!empty($seoHeadings['product'][$headingType]['pos']) && !empty($product_info['seo_'.$headingType]) && $seoHeadings['product'][$headingType]['pos'] == 'topdesc') {
            $extraTopDesc .= '<'.$headingType.' class="seo_'.$headingType.'"'.(!empty($seoHeadings['product'][$headingType]['css']) ? ' style="'.$seoHeadings['product'][$headingType]['css'].'"' : '').'>'.$product_info['seo_'.$headingType].'</'.$headingType.'>';
          }

          if (!empty($seoHeadings['product'][$headingType]['pos']) && !empty($product_info['seo_'.$headingType]) && $seoHeadings['product'][$headingType]['pos'] == 'botdesc') {
            $extraBottomDesc .= '<'.$headingType.' class="seo_'.$headingType.'"'.(!empty($seoHeadings['product'][$headingType]['css']) ? ' style="'.$seoHeadings['product'][$headingType]['css'].'"' : '').'>'.$product_info['seo_'.$headingType].'</'.$headingType.'>';
          }
        }

        if ($this->config->get('mlseo_autolink')) {
          $autolinks = $this->db->query("SELECT * FROM " . DB_PREFIX . "url_autolink WHERE language_id =  '". (int) $this->config->get('config_language_id') . "'")->rows;

          foreach ($autolinks as $autolink) {
            $data['description'] = preg_replace('/\b('.$autolink['query'].')\b/', '<a href="'.$autolink['redirect'].'">$1</a>', $data['description']);
          }
        }

        $data['description'] = $extraTopDesc . $data['description'] . $extraBottomDesc;
      }
      

			if ($product_info['quantity'] <= 0) {
				$data['stock'] = $product_info['stock_status'];
			} elseif ($this->config->get('config_stock_display')) {
				$data['stock'] = $product_info['quantity'];
			} else {
				$data['stock'] = $this->language->get('text_instock');
			}

			$this->load->model('tool/image');

				$manufacturer_image = $this->model_catalog_manufacturer->getManufacturer($product_info['manufacturer_id']);
				if ($manufacturer_image){
					$data['manufacturers_img'] = $this->model_tool_image->resize($manufacturer_image['image'], 120, 40);
				} else {
					$data['manufacturers_img'] = $this->model_tool_image->resize('placeholder.png', 120, 40);
				}
            

			if ($product_info['image']) {
				$data['popup'] = $this->model_tool_image->resize($product_info['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_popup_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_popup_height'));
			} else {
				$data['popup'] = '';
			}

			if ($product_info['image']) {
				$data['thumb'] = $this->model_tool_image->resize($product_info['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_thumb_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_thumb_height'));
			} else {
				$data['thumb'] = '';
			}

			$data['images'] = array();

			$results = $this->model_catalog_product->getProductImages($this->request->get['product_id']);

			foreach ($results as $result) {
				$data['images'][] = array(
					'popup' => $this->model_tool_image->resize($result['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_popup_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_popup_height')),
					'thumb' => $this->model_tool_image->resize($result['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_additional_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_additional_height'))
				);
			}

			if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
				$data['price'] = $this->currency->format($this->tax->calculate($product_info['price'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
			} else {
				$data['price'] = false;
 
				$data['attention']	=	sprintf($this->language->get('text_login'), $this->url->link('account/login'), $this->url->link('account/register'));	
			
			}

			if (!is_null($product_info['special']) && (float)$product_info['special'] >= 0) {

				$data['economy'] = $this->currency->format($this->tax->calculate($product_info['price'] - $product_info['special'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
				$data['percent'] = 100-round($product_info['special']/$product_info['price']*100, 0);
			
				$data['special'] = $this->currency->format($this->tax->calculate($product_info['special'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
				$tax_price = (float)$product_info['special'];
			} else {
				$data['special'] = false;

				$data['economy'] = false;
				$data['percent'] = false;
			
				$tax_price = (float)$product_info['price'];
			}

			if ($this->config->get('config_tax')) {
				$data['tax'] = $this->currency->format($tax_price, $this->session->data['currency']);
			} else {
				$data['tax'] = false;
			}

			$discounts = $this->model_catalog_product->getProductDiscounts($this->request->get['product_id']);

			$data['discounts'] = array();

			foreach ($discounts as $discount) {
				$data['discounts'][] = array(
					'quantity' => $discount['quantity'],
					'price'    => $this->currency->format($this->tax->calculate($discount['price'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency'])
				);
			}

			$data['options'] = array();

			foreach ($this->model_catalog_product->getProductOptions($this->request->get['product_id']) as $option) {
				$product_option_value_data = array();

				foreach ($option['product_option_value'] as $option_value) {
					if (!$option_value['subtract'] || ($option_value['quantity'] > 0)) {
						if ((($this->config->get('config_customer_price') && $this->customer->isLogged()) || !$this->config->get('config_customer_price')) && (float)$option_value['price']) {
							$price = $this->currency->format($this->tax->calculate($option_value['price'], $product_info['tax_class_id'], $this->config->get('config_tax') ? 'P' : false), $this->session->data['currency']);
						} else {
							$price = false;
						}

						$product_option_value_data[] = array(
							'product_option_value_id' => $option_value['product_option_value_id'],
							'option_value_id'         => $option_value['option_value_id'],
							'name'                    => $option_value['name'],
							'image'                   => $this->model_tool_image->resize($option_value['image'], 50, 50),
							'price'                   => $price,
							'price_prefix'            => $option_value['price_prefix']
						);
					}
				}

				$data['options'][] = array(
					'product_option_id'    => $option['product_option_id'],
					'product_option_value' => $product_option_value_data,
					'option_id'            => $option['option_id'],
					'name'                 => $option['name'],
					'type'                 => $option['type'],
					'value'                => $option['value'],
					'required'             => $option['required']
				);
			}

			if ($product_info['minimum']) {
				$data['minimum'] = $product_info['minimum'];
			} else {
				$data['minimum'] = 1;
			}

			$data['review_status'] = $this->config->get('config_review_status');

			if ($this->config->get('config_review_guest') || $this->customer->isLogged()) {
				$data['review_guest'] = true;
			} else {
				$data['review_guest'] = false;
			}

			if ($this->customer->isLogged()) {
				$data['customer_name'] = $this->customer->getFirstName() . '&nbsp;' . $this->customer->getLastName();
			} else {
				$data['customer_name'] = '';
			}

			
				$data['reviews_count'] = $reviews_count = (int)$product_info['reviews'];
				function getcartword($count, $suffix) {
					$keys = array(2, 0, 1, 1, 1, 2);
					$mod = $count % 100;
					$suffix_key = ($mod > 7 && $mod < 20) ? 2: $keys[min($mod % 10, 5)];
					return $suffix[$suffix_key];
				}
				$text_array 				= array('text_reviews_1', 'text_reviews_2', 'text_reviews_3');
				$text 						= getcartword($reviews_count, $text_array);
				$data['reviews'] 			= sprintf($this->language->get($text), (int)$product_info['reviews']);
				$data['config_wishlist'] 	= $this->config->get('config_wishlist');
				$data['config_compare'] 	= $this->config->get('config_compare');
				$data['config_stock'] 		= $this->config->get('config_stock_display');
			
			$data['rating'] = (int)$product_info['rating'];

			// Captcha
			if ($this->config->get('captcha_' . $this->config->get('config_captcha') . '_status') && in_array('review', (array)$this->config->get('config_captcha_page'))) {
				$data['captcha'] = $this->load->controller('extension/captcha/' . $this->config->get('config_captcha'));
			} else {
				$data['captcha'] = '';
			}

			$data['share'] = $this->url->link('product/product', 'product_id=' . (int)$this->request->get['product_id']);

			$data['attribute_groups'] = $this->model_catalog_product->getProductAttributes($this->request->get['product_id']);

			$data['products'] = array();

			$results = $this->model_catalog_product->getProductRelated($this->request->get['product_id']);

			foreach ($results as $result) {
				if ($result['image']) {
					$image = $this->model_tool_image->resize($result['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_related_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_related_height'));
				} else {
					$image = $this->model_tool_image->resize('placeholder.png', $this->config->get('theme_' . $this->config->get('config_theme') . '_image_related_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_related_height'));
				}

				if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
					$price = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
				} else {
					$price = false;
				}

				if (!is_null($result['special']) && (float)$result['special'] >= 0) {
					$special = $this->currency->format($this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
					$tax_price = (float)$result['special'];
				} else {
					$special = false;
					$tax_price = (float)$result['price'];
				}
	
				if ($this->config->get('config_tax')) {
					$tax = $this->currency->format($tax_price, $this->session->data['currency']);
				} else {
					$tax = false;
				}

				if ($this->config->get('config_review_status')) {
					$rating = (int)$result['rating'];
				} else {
					$rating = false;
				}

				
		$swapimage = array();
        $swapimages = $this->model_catalog_product->getProductImages($result['product_id']);
        foreach ($swapimages as $swap) {  
			$swapimage[] =  $this->model_tool_image->resize($swap['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_related_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_related_height'));
        }		                    
        $one = array($image);
        $swap = array_merge($one,$swapimage);
		$data['products'][] = array(
		'swap'      => join(',' , $swap),
		
					'product_id'  => $result['product_id'],
					'thumb'       => $image,
					'name'        => $result['name'],
					'description' => utf8_substr(trim(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8'))), 0, $this->config->get('theme_' . $this->config->get('config_theme') . '_product_description_length')) . '..',
					'price'       => $price,
					'special'     => $special,
					'tax'         => $tax,
					'minimum'     => $result['minimum'] > 0 ? $result['minimum'] : 1,
					'rating'      => $rating,
					'href'        => $this->url->link('product/product', 'product_id=' . $result['product_id'])
				);
			}

			$data['tags'] = array();

			if ($product_info['tag']) {
				$tags = explode(',', $product_info['tag']);

				foreach ($tags as $tag) {
					$data['tags'][] = array(
						'tag'  => trim($tag),
						'href' => $this->url->link('product/search', 'tag=' . trim($tag))
					);
				}
			}

			$data['recurrings'] = $this->model_catalog_product->getProfiles($this->request->get['product_id']);


						//microdatapro 8.1 start - 1 - main
							if(!isset($data['microdatapro_data'])){
								$data['microdatapro_data'] = $product_info;
							}
							$mdp_path = 'module/microdatapro';
							if(substr(VERSION, 0, 3) >= 2.3){
								$mdp_path = 'extension/module/microdatapro';
							}
							$this->document->setTc_og($this->load->controller($mdp_path . '/tc_og', $data));
							$this->document->setTc_og_prefix($this->load->controller($mdp_path . '/tc_og_prefix'));
							$data['microdatapro'] = $this->load->controller($mdp_path . '/product', $data);
							$microdatapro_main_flag = 1;
						//microdatapro 8.1 end - 1 - main
					
			$this->model_catalog_product->updateViewed($this->request->get['product_id']);

      if ($this->config->get('mlseo_enabled')) {
        $this->load->model('tool/seo_package');

        $this->document->setTitle(str_replace(array('{price}'), array(($product_info['special'] ? $product_info['special'] : $data['price'])), $this->document->getTitle()));
        $this->document->setDescription(str_replace(array('{price}'), array(($product_info['special'] ? $product_info['special'] : $data['price'])), $this->document->getDescription()));

        if ($this->config->get('mlseo_opengraph')) {
          if (version_compare(VERSION, '2', '>=')) {
            $this->document->addSeoMeta($this->model_tool_seo_package->rich_snippet('opengraph', 'product', $data + array('product_info' => $product_info)));
          } else {
            $this->document->addSeoMeta($this->model_tool_seo_package->rich_snippet('opengraph', 'product', $this->data + array('product_info' => $product_info)));
          }
        }

        if ($this->config->get('mlseo_tcard')) {
          if (version_compare(VERSION, '2', '>=')) {
            $this->document->addSeoMeta($this->model_tool_seo_package->rich_snippet('tcard', 'product', $data + array('product_info' => $product_info)));
          } else {
            $this->document->addSeoMeta($this->model_tool_seo_package->rich_snippet('tcard', 'product', $this->data + array('product_info' => $product_info)));
          }
        }

        if ($this->config->get('mlseo_microdata')) {
          if (version_compare(VERSION, '2', '>=')) {
            $this->document->addSeoMeta($this->model_tool_seo_package->rich_snippet('microdata', 'product', $data + array('product_info' => $product_info)));
          } else {
            $this->document->addSeoMeta($this->model_tool_seo_package->rich_snippet('microdata', 'product', $this->data + array('product_info' => $product_info)));
          }
        }
      }
      
			

						//microdatapro 8.1 start - 2 - extra
							if(!isset($microdatapro_main_flag) or isset($this->request->get['filter_ocfilter'])){
								if(isset($product_info) && $product_info){
									if(!isset($data['microdatapro_data'])){
										$data['microdatapro_data'] = $product_info;
									}
									$mdp_path = 'module/microdatapro';
									if(substr(VERSION, 0, 3) >= 2.3){
										$mdp_path = 'extension/module/microdatapro';
									}
									$this->document->setTc_og($this->load->controller($mdp_path . '/tc_og', $data));
									$this->document->setTc_og_prefix($this->load->controller($mdp_path . '/tc_og_prefix'));
									$data['microdatapro'] = $this->load->controller($mdp_path . '/product', $data);
									$microdatapro_main_flag = 1;
								}
							}
						//microdatapro 8.1 end - 2 - extra
					
			$data['column_left'] = $this->load->controller('common/column_left');
			$data['column_right'] = $this->load->controller('common/column_right');
			$data['content_top'] = $this->load->controller('common/content_top');
			$data['content_bottom'] = $this->load->controller('common/content_bottom');
			$data['footer'] = $this->load->controller('common/footer');
			$data['header'] = $this->load->controller('common/header');

				// BuyOneClick
					$this->load->model('setting/setting');
					$current_language_id = $this->config->get('config_language_id');

					$buyoneclick = $this->config->get('buyoneclick');
					$data['buyoneclick_name'] = isset($buyoneclick["name"][$current_language_id]) ? $buyoneclick["name"][$current_language_id] : '';
					$data['buyoneclick_status_product'] = $buyoneclick["status_product"];
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
				

			$this->response->setOutput($this->load->view('product/product', $data));
		} else {
			$url = '';

			if (isset($this->request->get['path'])) {
				$url .= '&path=' . $this->request->get['path'];
			}

			if (isset($this->request->get['filter'])) {
				$url .= '&filter=' . $this->request->get['filter'];
			}

			if (isset($this->request->get['manufacturer_id'])) {
				$url .= '&manufacturer_id=' . $this->request->get['manufacturer_id'];
			}

			if (isset($this->request->get['search'])) {
				$url .= '&search=' . $this->request->get['search'];
			}

			if (isset($this->request->get['tag'])) {
				$url .= '&tag=' . $this->request->get['tag'];
			}

			if (isset($this->request->get['description'])) {
				$url .= '&description=' . $this->request->get['description'];
			}

			if (isset($this->request->get['category_id'])) {
				$url .= '&category_id=' . $this->request->get['category_id'];
			}

			if (isset($this->request->get['sub_category'])) {
				$url .= '&sub_category=' . $this->request->get['sub_category'];
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

			if (isset($this->request->get['limit'])) {
				$url .= '&limit=' . $this->request->get['limit'];
			}

			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('text_error'),
				'href' => $this->url->link('product/product', $url . '&product_id=' . $product_id)
			);

			$this->document->setTitle($this->language->get('text_error'));

			$data['continue'] = $this->url->link('common/home');

			$this->response->addHeader($this->request->server['SERVER_PROTOCOL'] . ' 404 Not Found');


						//microdatapro 8.1 start - 2 - extra
							if(!isset($microdatapro_main_flag) or isset($this->request->get['filter_ocfilter'])){
								if(isset($product_info) && $product_info){
									if(!isset($data['microdatapro_data'])){
										$data['microdatapro_data'] = $product_info;
									}
									$mdp_path = 'module/microdatapro';
									if(substr(VERSION, 0, 3) >= 2.3){
										$mdp_path = 'extension/module/microdatapro';
									}
									$this->document->setTc_og($this->load->controller($mdp_path . '/tc_og', $data));
									$this->document->setTc_og_prefix($this->load->controller($mdp_path . '/tc_og_prefix'));
									$data['microdatapro'] = $this->load->controller($mdp_path . '/product', $data);
									$microdatapro_main_flag = 1;
								}
							}
						//microdatapro 8.1 end - 2 - extra
					
			$data['column_left'] = $this->load->controller('common/column_left');
			$data['column_right'] = $this->load->controller('common/column_right');
			$data['content_top'] = $this->load->controller('common/content_top');
			$data['content_bottom'] = $this->load->controller('common/content_bottom');
			$data['footer'] = $this->load->controller('common/footer');
			$data['header'] = $this->load->controller('common/header');

				// BuyOneClick
					$this->load->model('setting/setting');
					$current_language_id = $this->config->get('config_language_id');

					$buyoneclick = $this->config->get('buyoneclick');
					$data['buyoneclick_name'] = isset($buyoneclick["name"][$current_language_id]) ? $buyoneclick["name"][$current_language_id] : '';
					$data['buyoneclick_status_product'] = $buyoneclick["status_product"];
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
				

			$this->response->setOutput($this->load->view('error/not_found', $data));
		}
	}

	public function review() {

    // SEO Package - redirect non-ajax requests
    if($this->config->get('mlseo_redir_reviews') && !(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')) {
      header('HTTP/1.1 301 Moved Permanently');
      header('CSP-Redir: review', false);
      header('Location: ' . $this->url->link('product/product', 'product_id=' . $this->request->get['product_id']));
    }
      
		$this->load->language('product/product');

		$this->load->model('catalog/review');

		if (isset($this->request->get['page'])) {
			$page = (int)$this->request->get['page'];
		} else {
			$page = 1;
		}

		$data['reviews'] = array();

		$review_total = $this->model_catalog_review->getTotalReviewsByProductId($this->request->get['product_id']);

		$results = $this->model_catalog_review->getReviewsByProductId($this->request->get['product_id'], ($page - 1) * 5, 5);

		foreach ($results as $result) {
			$data['reviews'][] = array(
				'author'     => $result['author'],
				'text'       => nl2br($result['text']),
				'rating'     => (int)$result['rating'],
				'date_added' => date($this->language->get('date_format_short'), strtotime($result['date_added']))
			);
		}

		$pagination = new Pagination();
		$pagination->total = $review_total;
		$pagination->page = $page;
		$pagination->limit = 5;
		$pagination->url = $this->url->link('product/product/review', 'product_id=' . $this->request->get['product_id'] . '&page={page}');

		$data['pagination'] = $pagination->render();

		$data['results'] = sprintf($this->language->get('text_pagination'), ($review_total) ? (($page - 1) * 5) + 1 : 0, ((($page - 1) * 5) > ($review_total - 5)) ? $review_total : ((($page - 1) * 5) + 5), $review_total, ceil($review_total / 5));

		$this->response->setOutput($this->load->view('product/review', $data));
	}

	public function write() {
		$this->load->language('product/product');

		$json = array();

		if (isset($this->request->get['product_id']) && $this->request->get['product_id']) {
			if ($this->request->server['REQUEST_METHOD'] == 'POST') {
				if ((utf8_strlen($this->request->post['name']) < 3) || (utf8_strlen($this->request->post['name']) > 25)) {
					$json['error'] = $this->language->get('error_name');
				}

				if ((utf8_strlen($this->request->post['text']) < 25) || (utf8_strlen($this->request->post['text']) > 1000)) {
					$json['error'] = $this->language->get('error_text');
				}
			
				if (empty($this->request->post['rating']) || $this->request->post['rating'] < 0 || $this->request->post['rating'] > 5) {
					$json['error'] = $this->language->get('error_rating');
				}

				// Captcha
				if ($this->config->get('captcha_' . $this->config->get('config_captcha') . '_status') && in_array('review', (array)$this->config->get('config_captcha_page'))) {
					$captcha = $this->load->controller('extension/captcha/' . $this->config->get('config_captcha') . '/validate');

					if ($captcha) {
						$json['error'] = $captcha;
					}
				}

				if (!isset($json['error'])) {
					$this->load->model('catalog/review');

					$this->model_catalog_review->addReview($this->request->get['product_id'], $this->request->post);

					$json['success'] = $this->language->get('text_success');
				}
			}
		} else {
			$json['error'] = $this->language->get('error_product');
		} 

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function getRecurringDescription() {
		$this->load->language('product/product');
		$this->load->model('catalog/product');

		if (isset($this->request->post['product_id'])) {
			$product_id = $this->request->post['product_id'];
		} else {
			$product_id = 0;
		}

		if (isset($this->request->post['recurring_id'])) {
			$recurring_id = $this->request->post['recurring_id'];
		} else {
			$recurring_id = 0;
		}

		if (isset($this->request->post['quantity'])) {
			$quantity = $this->request->post['quantity'];
		} else {
			$quantity = 1;
		}

		$product_info = $this->model_catalog_product->getProduct($product_id);
		
		$recurring_info = $this->model_catalog_product->getProfile($product_id, $recurring_id);

		$json = array();

		if ($product_info && $recurring_info) {
			if (!$json) {
				$frequencies = array(
					'day'        => $this->language->get('text_day'),
					'week'       => $this->language->get('text_week'),
					'semi_month' => $this->language->get('text_semi_month'),
					'month'      => $this->language->get('text_month'),
					'year'       => $this->language->get('text_year'),
				);

				if ($recurring_info['trial_status'] == 1) {
					$price = $this->currency->format($this->tax->calculate($recurring_info['trial_price'] * $quantity, $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
					$trial_text = sprintf($this->language->get('text_trial_description'), $price, $recurring_info['trial_cycle'], $frequencies[$recurring_info['trial_frequency']], $recurring_info['trial_duration']) . ' ';
				} else {
					$trial_text = '';
				}

				$price = $this->currency->format($this->tax->calculate($recurring_info['price'] * $quantity, $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);

				if ($recurring_info['duration']) {
					$text = $trial_text . sprintf($this->language->get('text_payment_description'), $price, $recurring_info['cycle'], $frequencies[$recurring_info['frequency']], $recurring_info['duration']);
				} else {
					$text = $trial_text . sprintf($this->language->get('text_payment_cancel'), $price, $recurring_info['cycle'], $frequencies[$recurring_info['frequency']], $recurring_info['duration']);
				}

				$json['success'] = $text;
			}
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
}
