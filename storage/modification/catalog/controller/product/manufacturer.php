<?php
class ControllerProductManufacturer extends Controller {
	public function index() {
		$this->load->language('product/manufacturer');

		$this->load->model('catalog/manufacturer');

		$this->document->setTitle($this->language->get('heading_title'));

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_brand'),
			'href' => $this->url->link('product/manufacturer')
		);

		$data['categories'] = array();

		$results = $this->model_catalog_manufacturer->getManufacturers();

		foreach ($results as $result) {

				$this->load->model('tool/image');
            
			if (is_numeric(utf8_substr($result['name'], 0, 1))) {
				$key = '0 - 9';
			} else {
				$key = utf8_substr(utf8_strtoupper($result['name']), 0, 1);
			}

			if (!isset($data['categories'][$key])) {
				$data['categories'][$key]['name'] = $key;
			}

			$data['categories'][$key]['manufacturer'][] = array(

				'thumb' => $this->model_tool_image->resize($result['image'], 50, 50),
			
				'name' => $result['name'],
				'href' => $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $result['manufacturer_id'])
			);
		}

		$data['continue'] = $this->url->link('common/home');

      if ($this->config->get('mlseo_enabled')) {
        $this->load->model('tool/seo_package');

        if ($this->config->get('mlseo_microdata')) {
          if (version_compare(VERSION, '2', '>=')) {
            $this->document->addSeoMeta($this->model_tool_seo_package->rich_snippet('microdata', 'manufacturer', $data));
          } else {
            $this->document->addSeoMeta($this->model_tool_seo_package->rich_snippet('microdata', 'manufacturer', $this->data));
          }
        }
      }
      


					//microdatapro 8.1 start - 2 - extra
					if(!isset($microdatapro_main_flag)){
						if(isset($manufacturer_info) && $manufacturer_info){
							$mdp_path = 'module/microdatapro';
							if(substr(VERSION, 0, 3) >= 2.3){
								$mdp_path = 'extension/module/microdatapro';
							}
							$data['microdatapro_data'] = $manufacturer_info;
							$this->document->setTc_og($this->load->controller($mdp_path . '/tc_og', $data));
							$this->document->setTc_og_prefix($this->load->controller($mdp_path . '/tc_og_prefix'));
							$data['microdatapro'] = $this->load->controller($mdp_path . '/manufacturer', $data);
						}
					}
					//microdatapro 8.1 end - 2 - extra
				
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');

				if( class_exists( 'Mfilter_Helper' ) ) {
					Mfilter_Helper::createMetaLinks( $this, isset( $page ) ? $page : null, isset( $limit ) ? $limit : null, isset( $product_total ) ? $product_total : null, __CLASS__ );
				}
			
		$data['header'] = $this->load->controller('common/header');

				// BuyOneClick
					$this->load->model('setting/setting');
					$current_language_id = $this->config->get('config_language_id');

					$buyoneclick = $this->config->get('buyoneclick');
					$data['buyoneclick_name'] = isset($buyoneclick["name"][$current_language_id]) ? $buyoneclick["name"][$current_language_id] : '';
					$data['buyoneclick_status_category'] = $buyoneclick["status_category"];

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
				


				$this->load->model( 'extension/module/mega_filter' );
				
				$data = $this->model_extension_module_mega_filter->prepareData( $data );
			
		$this->response->setOutput($this->load->view('product/manufacturer_list', $data));
	}

	public function info() {
		$this->load->language('product/manufacturer');

		$this->load->model('catalog/manufacturer');

		$this->load->model('catalog/product');

		$this->load->model('tool/image');


      $seoPageName = $this->config->get('mlseo_pagination_name_'.$this->config->get('config_language_id')) != 'mlseo_pagination_name_'.$this->config->get('config_language_id') ? $this->config->get('mlseo_pagination_name_'.$this->config->get('config_language_id')) : 'page';
      
		if (isset($this->request->get['manufacturer_id'])) {
			$manufacturer_id = (int)$this->request->get['manufacturer_id'];
		} else {
			$manufacturer_id = 0;
		}

		if (isset($this->request->get['sort'])) {
			$sort = $this->request->get['sort'];
		} else {
			$sort = 'p.sort_order';
		}

		if (isset($this->request->get['order'])) {
			$order = $this->request->get['order'];
		} else {
			$order = 'ASC';
		}

		if (isset($this->request->get['page'])) {
			$page = (int)$this->request->get['page'];
		} else {
			$page = 1;
		}

		if (isset($this->request->get['limit'])) {
			$limit = (int)$this->request->get['limit'];
		} else {
			$limit = (int)$this->config->get('theme_' . $this->config->get('config_theme') . '_product_limit');
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_brand'),
			'href' => $this->url->link('product/manufacturer')
		);

		$manufacturer_info = $this->model_catalog_manufacturer->getManufacturer($manufacturer_id);

		if ($manufacturer_info) {
			
      if ($this->config->get('mlseo_enabled')) {
        
      $this->document->setTitle((!empty($manufacturer_info['meta_title']) ? $manufacturer_info['meta_title'] . ((!empty($seoPageName) && !empty($this->request->get['page'])) ? ' - ' . $seoPageName . ' ' . $this->request->get['page'] : '') : $manufacturer_info['name'] . ((!empty($seoPageName) && !empty($this->request->get['page'])) ? ' - ' . $seoPageName . ' ' . $this->request->get['page'] : '') ));
      

        if (!empty($manufacturer_info['meta_keyword'])) {
          $this->document->setKeywords($manufacturer_info['meta_keyword']);
        }

        if (!empty($manufacturer_info['meta_description'])) {
          $this->document->setDescription($manufacturer_info['meta_description']);
        }
      } else {
        $this->document->setTitle($manufacturer_info['name']);
      }
      

			$url = '';

				if( $this->rgetMFP($this->config->get('mfilter_url_param')?$this->config->get('mfilter_url_param'):'mfp') ) {
					$url .= '&'.($this->config->get('mfilter_url_param')?$this->config->get('mfilter_url_param'):'mfp').'=' . $this->rgetMFP($this->config->get('mfilter_url_param')?$this->config->get('mfilter_url_param'):'mfp');
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
				
        'text' => $manufacturer_info['name'] . ((!empty($seoPageName) && !empty($this->request->get['page'])) ? ' - ' . $seoPageName . ' ' . $this->request->get['page'] : ''),
      
				'href' => $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $this->request->get['manufacturer_id'] . $url)
			);

			$data['heading_title'] = !empty($manufacturer_info['seo_h1']) && $this->config->get('mlseo_enabled') ? $manufacturer_info['seo_h1'] : $manufacturer_info['name'];

      $data["heading_title"] .= (!empty($seoPageName) && !empty($this->request->get['page'])) ? ' - ' . $seoPageName . ' ' . $this->request->get['page'] : '';
      

        if (version_compare(VERSION, '2', '>=')) {
          $data['seo_h1'] = !empty($manufacturer_info['seo_h1']) ? $manufacturer_info['seo_h1'] : '';
          $data['seo_h2'] = !empty($manufacturer_info['seo_h2']) ? $manufacturer_info['seo_h2'] : '';
          $data['seo_h3'] = !empty($manufacturer_info['seo_h3']) ? $manufacturer_info['seo_h3'] : '';
          $data['description'] = !empty($manufacturer_info['description']) ? html_entity_decode($manufacturer_info['description'], ENT_QUOTES, 'UTF-8') : '';
        } else {
          $this->data['seo_h1'] = !empty($manufacturer_info['seo_h1']) ? $manufacturer_info['seo_h1'] : '';
          $this->data['seo_h2'] = !empty($manufacturer_info['seo_h2']) ? $manufacturer_info['seo_h2'] : '';
          $this->data['seo_h3'] = !empty($manufacturer_info['seo_h3']) ? $manufacturer_info['seo_h3'] : '';
          $this->data['description'] = !empty($manufacturer_info['description']) ? html_entity_decode($manufacturer_info['description'], ENT_QUOTES, 'UTF-8') : '';
        }
      

			$data['text_compare'] = sprintf($this->language->get('text_compare'), (isset($this->session->data['compare']) ? count($this->session->data['compare']) : 0));

			$data['compare'] = $this->url->link('product/compare');

			$data['products'] = array();

				function manufacturer($number, $suffix) {
					$keys = array(2, 0, 1, 1, 1, 2);
					$mod = $number % 100;
					$suffix_key = ($mod > 7 && $mod < 20) ? 2: $keys[min($mod % 10, 5)];
					return $suffix[$suffix_key];
				}
				$text_review_array = array('text_reviews_1', 'text_reviews_2', 'text_reviews_3');
			

			$filter_data = array(
				'filter_manufacturer_id' => $manufacturer_id,
				'sort'                   => $sort,
				'order'                  => $order,
				'start'                  => ($page - 1) * $limit,
				'limit'                  => $limit
			);


				$filter_data['mfp_overwrite_path'] = true;
				$filter_data['mfp_enabled'] = true;
			
			$product_total = $this->model_catalog_product->getTotalProducts($filter_data);

			$results = $this->model_catalog_product->getProducts($filter_data);

			foreach ($results as $result) {

				$this->load->model('tool/image');
            
				if ($result['image']) {
					$image = $this->model_tool_image->resize($result['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));
				} else {
					$image = $this->model_tool_image->resize('placeholder.png', $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));
				}

				if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
					$price = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
				} else {
					$price = false;
				}

				if (!is_null($result['special']) && (float)$result['special'] >= 0) {

				$economy = $this->currency->format($this->tax->calculate($result['price'] - $result['special'], $this->config->get('config_tax')), $this->session->data['currency']);
				$percent = 100-round($result['special']/$result['price']*100, 0);
			

				$economy = $this->currency->format($this->tax->calculate($result['price'] - $result['special'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
			
					$special = $this->currency->format($this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
					$tax_price = (float)$result['special'];
				} else {
					$special = false;

				$economy = false;
				$percent = false;
			

				$economy = false;
			
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


				$fmSettings = $this->config->get('mega_filter_settings');
				
				if( ! empty( $fmSettings['not_remember_filter_for_products'] ) && false !== ( $mfpPos = strpos( $url, '&'.($this->config->get('mfilter_url_param')?$this->config->get('mfilter_url_param'):'mfp').'=' ) ) ) {
					$mfUrlBeforeChange = $url;
					$mfSt = mb_strpos( $url, '&', $mfpPos+1, 'utf-8');
					$url = $mfSt === false ? '' : mb_substr($url, $mfSt, mb_strlen( $url, 'utf-8' ), 'utf-8');
				}
			

				$data['reviews_count'] 		= $reviews_count = (int)$result['reviews'];
				$data['config_wishlist']	= $this->config->get('config_wishlist');
				$data['config_compare'] 	= $this->config->get('config_compare');
			

				$text_review = manufacturer($reviews_count, $text_review_array);
			
				
		$swapimage = array();
        $swapimages = $this->model_catalog_product->getProductImages($result['product_id']);
        foreach ($swapimages as $swap) {  
            $swapimage[] =  $this->model_tool_image->resize($swap['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));
        }		                    
        $one = array($image);
        $swap = array_merge($one,$swapimage);
		$data['products'][] = array(
		'swap'      => join(',' , $swap),
		

				'economy'		=> $economy,
				'percent' 		=> $percent,
				'manufacturer'	=> $result['manufacturer'],
			

				'economy' 			=> $economy,
				'attribute_groups' 	=> $this->model_catalog_product->getProductAttributes($result['product_id']),
				'reviews' 	  		=> sprintf($this->language->get($text_review), (int)$result['reviews']),
			
					'product_id'  => $result['product_id'],
					'thumb'       => $image,
					'name'        => $result['name'],
					'description' => utf8_substr(trim(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8'))), 0, $this->config->get('theme_' . $this->config->get('config_theme') . '_product_description_length')) . '..',
					'price'       => $price,
					'special'     => $special,
					'tax'         => $tax,
					'minimum'     => $result['minimum'] > 0 ? $result['minimum'] : 1,
					
				'rating'      => $rating,
			
					'href'        => $this->url->link('product/product', 'manufacturer_id=' . $result['manufacturer_id'] . '&product_id=' . $result['product_id'])
				);
			}

			$url = '';

				if( $this->rgetMFP($this->config->get('mfilter_url_param')?$this->config->get('mfilter_url_param'):'mfp') ) {
					$url .= '&'.($this->config->get('mfilter_url_param')?$this->config->get('mfilter_url_param'):'mfp').'=' . $this->rgetMFP($this->config->get('mfilter_url_param')?$this->config->get('mfilter_url_param'):'mfp');
				}
			

			if (isset($this->request->get['limit'])) {
				$url .= '&limit=' . $this->request->get['limit'];
			}

			$data['sorts'] = array();

			$data['sorts'][] = array(
				'text'  => $this->language->get('text_default'),
				'value' => 'p.sort_order-ASC',
				'href'  => $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $this->request->get['manufacturer_id'] . '&sort=p.sort_order&order=ASC' . $url)
			);

			$data['sorts'][] = array(
				'text'  => $this->language->get('text_name_asc'),
				'value' => 'pd.name-ASC',
				'href'  => $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $this->request->get['manufacturer_id'] . '&sort=pd.name&order=ASC' . $url)
			);

			$data['sorts'][] = array(
				'text'  => $this->language->get('text_name_desc'),
				'value' => 'pd.name-DESC',
				'href'  => $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $this->request->get['manufacturer_id'] . '&sort=pd.name&order=DESC' . $url)
			);

			$data['sorts'][] = array(
				'text'  => $this->language->get('text_price_asc'),
				'value' => 'p.price-ASC',
				'href'  => $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $this->request->get['manufacturer_id'] . '&sort=p.price&order=ASC' . $url)
			);

			$data['sorts'][] = array(
				'text'  => $this->language->get('text_price_desc'),
				'value' => 'p.price-DESC',
				'href'  => $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $this->request->get['manufacturer_id'] . '&sort=p.price&order=DESC' . $url)
			);

			if ($this->config->get('config_review_status')) {
				$data['sorts'][] = array(
					'text'  => $this->language->get('text_rating_desc'),
					'value' => 'rating-DESC',
					'href'  => $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $this->request->get['manufacturer_id'] . '&sort=rating&order=DESC' . $url)
				);

				$data['sorts'][] = array(
					'text'  => $this->language->get('text_rating_asc'),
					'value' => 'rating-ASC',
					'href'  => $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $this->request->get['manufacturer_id'] . '&sort=rating&order=ASC' . $url)
				);
			}

			$data['sorts'][] = array(
				'text'  => $this->language->get('text_model_asc'),
				'value' => 'p.model-ASC',
				'href'  => $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $this->request->get['manufacturer_id'] . '&sort=p.model&order=ASC' . $url)
			);

			$data['sorts'][] = array(
				'text'  => $this->language->get('text_model_desc'),
				'value' => 'p.model-DESC',
				'href'  => $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $this->request->get['manufacturer_id'] . '&sort=p.model&order=DESC' . $url)
			);

			$url = '';

				if( $this->rgetMFP($this->config->get('mfilter_url_param')?$this->config->get('mfilter_url_param'):'mfp') ) {
					$url .= '&'.($this->config->get('mfilter_url_param')?$this->config->get('mfilter_url_param'):'mfp').'=' . $this->rgetMFP($this->config->get('mfilter_url_param')?$this->config->get('mfilter_url_param'):'mfp');
				}
			

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			$data['limits'] = array();

			$limits = array_unique(array($this->config->get('theme_' . $this->config->get('config_theme') . '_product_limit'), 25, 50, 75, 100));

			sort($limits);

			foreach($limits as $value) {
				$data['limits'][] = array(
					'text'  => $value,
					'value' => $value,
					'href'  => $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $this->request->get['manufacturer_id'] . $url . '&limit=' . $value)
				);
			}

			$url = '';

				if( $this->rgetMFP($this->config->get('mfilter_url_param')?$this->config->get('mfilter_url_param'):'mfp') ) {
					$url .= '&'.($this->config->get('mfilter_url_param')?$this->config->get('mfilter_url_param'):'mfp').'=' . $this->rgetMFP($this->config->get('mfilter_url_param')?$this->config->get('mfilter_url_param'):'mfp');
				}
			

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['limit'])) {
				$url .= '&limit=' . $this->request->get['limit'];
			}


					//microdatapro 8.1 start - 1 - main
						$data['microdatapro_data'] = $manufacturer_info;
						$mdp_path = 'module/microdatapro';
						if(substr(VERSION, 0, 3) >= 2.3){
							$mdp_path = 'extension/module/microdatapro';
						}
						$this->document->setTc_og($this->load->controller($mdp_path . '/tc_og', $data));
						$this->document->setTc_og_prefix($this->load->controller($mdp_path . '/tc_og_prefix'));
						$data['microdatapro'] = $this->load->controller($mdp_path . '/manufacturer', $data);
						$microdatapro_main_flag = 1;
					//microdatapro 8.1 end - 1 - main
				
			$pagination = new Pagination();
			$pagination->total = $product_total;
			$pagination->page = $page;
			$pagination->limit = $limit;
			$pagination->url = $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $this->request->get['manufacturer_id'] .  $url . '&page={page}');

			$data['pagination'] = $pagination->render();

			$data['results'] = sprintf($this->language->get('text_pagination'), ($product_total) ? (($page - 1) * $limit) + 1 : 0, ((($page - 1) * $limit) > ($product_total - $limit)) ? $product_total : ((($page - 1) * $limit) + $limit), $product_total, ceil($product_total / $limit));

			// http://googlewebmastercentral.blogspot.com/2011/09/pagination-with-relnext-and-relprev.html

      if (version_compare(VERSION, '3', '<') && $page > 1 AND $this->config->get('mlseo_pagination_canonical')) {
         $this->document->addLink($this->url->link('product/manufacturer/info', 'manufacturer_id=' . $this->request->get['manufacturer_id']), 'canonical');
      }
      
			if ($page == 1) {
				$this->document->addLink($this->url->link('product/manufacturer/info', 'manufacturer_id=' . $this->request->get['manufacturer_id']), 'canonical');
			} else {
				$this->document->addLink($this->url->link('product/manufacturer/info', 'manufacturer_id=' . $this->request->get['manufacturer_id'] . '&page=' . $page), 'canonical');
			}
			
			if ($page > 1) {
				$this->document->addLink($this->url->link('product/manufacturer/info', 'manufacturer_id=' . $this->request->get['manufacturer_id'] . (($page - 2) ? '&page=' . ($page - 1) : '')), 'prev');
			}

			if ($limit && ceil($product_total / $limit) > $page) {
				$this->document->addLink($this->url->link('product/manufacturer/info', 'manufacturer_id=' . $this->request->get['manufacturer_id'] . '&page=' . ($page + 1)), 'next');
			}

			$data['sort'] = $sort;
			$data['order'] = $order;
			$data['limit'] = $limit;

			$data['continue'] = $this->url->link('common/home');

      if ($this->config->get('mlseo_enabled')) {
        $this->load->model('tool/seo_package');

        if ($this->config->get('mlseo_microdata')) {
          if (version_compare(VERSION, '2', '>=')) {
            $this->document->addSeoMeta($this->model_tool_seo_package->rich_snippet('microdata', 'manufacturer', $data));
          } else {
            $this->document->addSeoMeta($this->model_tool_seo_package->rich_snippet('microdata', 'manufacturer', $this->data));
          }
        }
      }
      


					//microdatapro 8.1 start - 2 - extra
					if(!isset($microdatapro_main_flag)){
						if(isset($manufacturer_info) && $manufacturer_info){
							$mdp_path = 'module/microdatapro';
							if(substr(VERSION, 0, 3) >= 2.3){
								$mdp_path = 'extension/module/microdatapro';
							}
							$data['microdatapro_data'] = $manufacturer_info;
							$this->document->setTc_og($this->load->controller($mdp_path . '/tc_og', $data));
							$this->document->setTc_og_prefix($this->load->controller($mdp_path . '/tc_og_prefix'));
							$data['microdatapro'] = $this->load->controller($mdp_path . '/manufacturer', $data);
						}
					}
					//microdatapro 8.1 end - 2 - extra
				
			$data['column_left'] = $this->load->controller('common/column_left');
			$data['column_right'] = $this->load->controller('common/column_right');
			$data['content_top'] = $this->load->controller('common/content_top');
			$data['content_bottom'] = $this->load->controller('common/content_bottom');
			$data['footer'] = $this->load->controller('common/footer');

				if( class_exists( 'Mfilter_Helper' ) ) {
					Mfilter_Helper::createMetaLinks( $this, isset( $page ) ? $page : null, isset( $limit ) ? $limit : null, isset( $product_total ) ? $product_total : null, __CLASS__ );
				}
			
			$data['header'] = $this->load->controller('common/header');

				// BuyOneClick
					$this->load->model('setting/setting');
					$current_language_id = $this->config->get('config_language_id');

					$buyoneclick = $this->config->get('buyoneclick');
					$data['buyoneclick_name'] = isset($buyoneclick["name"][$current_language_id]) ? $buyoneclick["name"][$current_language_id] : '';
					$data['buyoneclick_status_category'] = $buyoneclick["status_category"];

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
				


				$this->load->model( 'extension/module/mega_filter' );
				
				$data = $this->model_extension_module_mega_filter->prepareData( $data );
			
			$this->response->setOutput($this->load->view('product/manufacturer_info', $data));
		} else {
			$url = '';

				if( $this->rgetMFP($this->config->get('mfilter_url_param')?$this->config->get('mfilter_url_param'):'mfp') ) {
					$url .= '&'.($this->config->get('mfilter_url_param')?$this->config->get('mfilter_url_param'):'mfp').'=' . $this->rgetMFP($this->config->get('mfilter_url_param')?$this->config->get('mfilter_url_param'):'mfp');
				}
			


      $seoPageName = $this->config->get('mlseo_pagination_name_'.$this->config->get('config_language_id')) != 'mlseo_pagination_name_'.$this->config->get('config_language_id') ? $this->config->get('mlseo_pagination_name_'.$this->config->get('config_language_id')) : 'page';
      
			if (isset($this->request->get['manufacturer_id'])) {
				$url .= '&manufacturer_id=' . $this->request->get['manufacturer_id'];
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
				'href' => $this->url->link('product/manufacturer/info', $url)
			);

			$this->document->setTitle($this->language->get('text_error'));

			$data['heading_title'] = $this->language->get('text_error');

			$data['text_error'] = $this->language->get('text_error');

			$data['continue'] = $this->url->link('common/home');

      if ($this->config->get('mlseo_enabled')) {
        $this->load->model('tool/seo_package');

        if ($this->config->get('mlseo_microdata')) {
          if (version_compare(VERSION, '2', '>=')) {
            $this->document->addSeoMeta($this->model_tool_seo_package->rich_snippet('microdata', 'manufacturer', $data));
          } else {
            $this->document->addSeoMeta($this->model_tool_seo_package->rich_snippet('microdata', 'manufacturer', $this->data));
          }
        }
      }
      

			$this->response->addHeader($this->request->server['SERVER_PROTOCOL'] . ' 404 Not Found');


				if( class_exists( 'Mfilter_Helper' ) ) {
					Mfilter_Helper::createMetaLinks( $this, isset( $page ) ? $page : null, isset( $limit ) ? $limit : null, isset( $product_total ) ? $product_total : null, __CLASS__ );
				}
			
			$data['header'] = $this->load->controller('common/header');

				// BuyOneClick
					$this->load->model('setting/setting');
					$current_language_id = $this->config->get('config_language_id');

					$buyoneclick = $this->config->get('buyoneclick');
					$data['buyoneclick_name'] = isset($buyoneclick["name"][$current_language_id]) ? $buyoneclick["name"][$current_language_id] : '';
					$data['buyoneclick_status_category'] = $buyoneclick["status_category"];

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
				
			$data['footer'] = $this->load->controller('common/footer');

					//microdatapro 8.1 start - 2 - extra
					if(!isset($microdatapro_main_flag)){
						if(isset($manufacturer_info) && $manufacturer_info){
							$mdp_path = 'module/microdatapro';
							if(substr(VERSION, 0, 3) >= 2.3){
								$mdp_path = 'extension/module/microdatapro';
							}
							$data['microdatapro_data'] = $manufacturer_info;
							$this->document->setTc_og($this->load->controller($mdp_path . '/tc_og', $data));
							$this->document->setTc_og_prefix($this->load->controller($mdp_path . '/tc_og_prefix'));
							$data['microdatapro'] = $this->load->controller($mdp_path . '/manufacturer', $data);
						}
					}
					//microdatapro 8.1 end - 2 - extra
				
			$data['column_left'] = $this->load->controller('common/column_left');
			$data['column_right'] = $this->load->controller('common/column_right');
			$data['content_top'] = $this->load->controller('common/content_top');
			$data['content_bottom'] = $this->load->controller('common/content_bottom');


				$this->load->model( 'extension/module/mega_filter' );
				
				$data = $this->model_extension_module_mega_filter->prepareData( $data );
			
			$this->response->setOutput($this->load->view('error/not_found', $data));
		}
	}
}
