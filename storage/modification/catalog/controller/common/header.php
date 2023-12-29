<?php
class ControllerCommonHeader extends Controller {
	public function index() {

			
            /* start socnetauth2 metka */
			$data['SOCNETAUTH2_DATA'] = $this->load->controller('extension/module/socnetauth2/showcode', array( "str"=>"account") );
			$data['SOCNETAUTH2_DATA_DOBOR'] = $this->load->controller('extension/module/socnetauth2/showcode', array("dobor_only"=>1, "str"=>"account") );
			$data['SOCNETAUTH2_DATA_BUTTONS'] = $this->load->controller('extension/module/socnetauth2/showcode', array("buttons_only"=>1, "str"=>"account") );
			/* end socnetauth2 metka */
			
            

				$data['cheaper30script'] = $this->load->controller('extension/module/cheaper30/route', $this->request->get);
				$this->document->addStyle('catalog/view/javascript/cheaper30/cheaper30.css');
				$this->document->addScript('catalog/view/javascript/cheaper30/cheaper30.js');
            

      $this->load->model('tool/seo_package');
      $this->model_tool_seo_package->metaRobots();
      $this->model_tool_seo_package->checkCanonical();
      $this->model_tool_seo_package->hrefLang();
      $this->model_tool_seo_package->richSnippets();
      $this->model_tool_seo_package->ggAnalytics();

      if (version_compare(VERSION, '2', '>=')) {
        $data['mlseo_meta'] = $this->document->renderSeoMeta();
      } else {
        $this->data['mlseo_meta'] = $this->document->renderSeoMeta();
      }

      $seoTitlePrefix = $this->config->get('mlseo_title_prefix');
      $seoTitlePrefix = isset($seoTitlePrefix[$this->config->get('config_store_id').$this->config->get('config_language_id')]) ? $seoTitlePrefix[$this->config->get('config_store_id').$this->config->get('config_language_id')] : '';

      $seoTitleSuffix = $this->config->get('mlseo_title_suffix');
      $seoTitleSuffix = isset($seoTitleSuffix[$this->config->get('config_store_id').$this->config->get('config_language_id')]) ? $seoTitleSuffix[$this->config->get('config_store_id').$this->config->get('config_language_id')] : '';

      if (version_compare(VERSION, '2', '<')) {
        if ($this->config->get('mlseo_fix_search')) {
          $this->data['mlseo_fix_search'] = true;
          $this->data['csp_search_url'] = $this->url->link('product/search');
          $this->data['csp_search_url_param'] = $this->url->link('product/search', 'search=%search%');
        }
      }
      

      $seo_meta = $this->config->get('mlseo_store');

      if (!empty($seo_meta[$this->config->get('config_store_id')]['gg_analytics']) && !empty($seo_meta[$this->config->get('config_store_id')]['gg_enhanced'])) {
        $ggAnalyticsCode = html_entity_decode($seo_meta[$this->config->get('config_store_id')]['analytics'], ENT_QUOTES, 'UTF-8');

        // Google Analytics 4
        if (substr($ggAnalyticsCode, 0, 2) == 'G-') {
          $this->document->addScript('catalog/view/javascript/gkdAnalytics.js', 'header');
        } else {
          $this->document->addScript('catalog/view/javascript/gkdAnalyticsGa.js', 'header');
        }
      }
      

				$data['open'] 				= $this->config->get('config_open');
				$data['address'] 			= $this->config->get('config_address');
				$data['email'] 				= $this->config->get('config_email');
				$data['firstname'] 			= $this->customer->getFirstName();
				$data['config_account']		= $this->config->get('config_account');
				$data['config_wishlist']	= $this->config->get('config_wishlist');
            

				if( ! isset( $this->request->request['mfp_seo_alias'] ) ) {
					$mfilterSeoConfig = $this->config->get('mega_filter_seo');

					if( ! empty( $mfilterSeoConfig['meta_robots'] ) && ! empty( $this->request->get[$this->config->get('mfilter_url_param')?$this->config->get('mfilter_url_param'):'mfp'] ) ) {
						$data['mfp_robots_value'] = $mfilterSeoConfig['meta_robots_value'];
					}
				}
			
		// Analytics
		$this->load->model('setting/extension');

		$data['analytics'] = array();

		$analytics = $this->model_setting_extension->getExtensions('analytics');

		foreach ($analytics as $analytic) {
			if ($this->config->get('analytics_' . $analytic['code'] . '_status')) {
				$data['analytics'][] = $this->load->controller('extension/analytics/' . $analytic['code'], $this->config->get('analytics_' . $analytic['code'] . '_status'));
			}
		}

		if ($this->request->server['HTTPS']) {
			$server = $this->config->get('config_ssl');
		} else {
			$server = $this->config->get('config_url');
		}

		if (is_file(DIR_IMAGE . $this->config->get('config_icon'))) {
			$this->document->addLink($server . 'image/' . $this->config->get('config_icon'), 'icon');
		}

		
        if (!empty($this->request->get['route']) && $this->request->get['route'] !== 'common/home') {
          $data['title'] = (isset($seoTitlePrefix) ? $seoTitlePrefix : '') . $this->document->getTitle() . (isset($seoTitleSuffix) ? $seoTitleSuffix : '');
        } else {
          $data['title'] = $this->document->getTitle();
        }
      

$this->load->model('catalog/information');

				$data['informations'] = array();

				foreach ($this->model_catalog_information->getInformations() as $result) {
					if ($result['top']) {
						$data['informations'][] = array(
							'title' => $result['title'],
							'href'  => $this->url->link('information/information', 'information_id=' . $result['information_id'])
						);
					}
				}
		$data['base'] = $server;
		$data['description'] = $this->document->getDescription();
		$data['keywords'] = $this->document->getKeywords();
		$data['links'] = $this->document->getLinks();
		$data['styles'] = $this->document->getStyles();
		$data['scripts'] = $this->document->getScripts('header');
		$data['lang'] = $this->language->get('code');
		$data['direction'] = $this->language->get('direction');

		$data['name'] = $this->config->get('config_name');

		if (is_file(DIR_IMAGE . $this->config->get('config_logo'))) {
			$data['logo'] = $server . 'image/' . $this->config->get('config_logo');
		} else {
			$data['logo'] = '';
		}

		$this->load->language('common/header');

				$data['text_compare'] = sprintf($this->language->get('text_compare'), (isset($this->session->data['compare']) ? count($this->session->data['compare']) : 0));
			

				// Mobile cart count
				$data['cart_count'] = $this->cart->countProducts();
			

		// Wishlist
		if ($this->customer->isLogged()) {
			$this->load->model('account/wishlist');

			
        if ($this->customer->isLogged()) {
        $data['text_wishlist'] = sprintf($this->language->get('text_wishlist'), $this->model_account_wishlist->getTotalWishlist());
        } else {
        $data['text_wishlist'] = sprintf($this->language->get('text_wishlist'), isset($this->session->data['wishlist'] ) ? count($this->session->data['wishlist']) : 0);
        }

        
		} else {
			$data['text_wishlist'] = sprintf($this->language->get('text_wishlist'), (isset($this->session->data['wishlist']) ? count($this->session->data['wishlist']) : 0));
		}

        $data['text_compare'] = sprintf($this->language->get('text_compare'), (isset($this->session->data['compare']) ? count($this->session->data['compare']) : 0));
        $data['compare_count'] = isset($this->session->data['compare']) ? count($this->session->data['compare']) : 0;


        $data['text_logged'] = sprintf($this->language->get('text_logged'), $this->url->link('account/account', '', true), $this->customer->getFirstName(), $this->url->link('account/logout', '', true));
		
		$data['home'] = $this->url->link('common/home');
		$data['wishlist'] = $this->url->link('account/wishlist', '', true);
		$data['compare'] = $this->url->link('product/compare');
		$data['logged'] = $this->customer->isLogged();
		$data['account'] = $this->url->link('account/account', '', true);
		$data['register'] = $this->url->link('account/register', '', true);
		$data['login'] = $this->url->link('account/login', '', true);
		$data['order'] = $this->url->link('account/order', '', true);
		$data['transaction'] = $this->url->link('account/transaction', '', true);
		$data['download'] = $this->url->link('account/download', '', true);
		$data['logout'] = $this->url->link('account/logout', '', true);
		$data['shopping_cart'] = $this->url->link('checkout/cart');
		$data['checkout'] = $this->url->link('checkout/checkout', '', true);
		$data['contact'] = $this->url->link('information/contact');

				$data['compare'] = $this->url->link('product/compare');
			
		$data['telephone'] = $this->config->get('config_telephone');

					$buyoneclick = $this->config->get('buyoneclick');
					$data['buyoneclick_status_product'] = $buyoneclick["status_product"];
					$data['buyoneclick_status_category'] = $buyoneclick["status_category"];
					$data['buyoneclick_status_module'] = $buyoneclick["status_module"];

					$data['buyoneclick_style_status'] = $buyoneclick["style_status"];
					$data['buyoneclick_validation_type'] = $buyoneclick["validation_type"];

					$data['buyoneclick_exan_status'] = $buyoneclick["exan_status"];

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
				

				$data['tel'] = str_replace(array('(', ')', ' ', '-'), '', $this->config->get('config_telephone'));
			
		
		$data['language'] = $this->load->controller('common/language');
		$data['currency'] = $this->load->controller('common/currency');

					//microdatapro 8.1 start - 1 - main
					$data['tc_og'] = $this->document->getTc_og();
					$data['tc_og_prefix'] = $this->document->getTc_og_prefix();
					$microdatapro_main_flag = 1;
					//microdatapro 8.1 end - 1 - main
					
		$data['search'] = $this->load->controller('common/search');

					//microdatapro 8.1 start - 2 - extra
					if(!isset($microdatapro_main_flag)){
						$data['tc_og'] = $this->document->getTc_og();
						$data['tc_og_prefix'] = $this->document->getTc_og_prefix();
					}
					//microdatapro 8.1 end - 2 - extra
					
		$data['cart'] = $this->load->controller('common/cart');
		$data['menu'] = $this->load->controller('common/menu');


				$data['custom_css'] = html_entity_decode($this->config->get('config_custom_css') ? $this->config->get('config_custom_css') : '', ENT_QUOTES, 'UTF-8');
				$data['custom_js'] = html_entity_decode($this->config->get('config_custom_js') ? $this->config->get('config_custom_js') : '', ENT_QUOTES, 'UTF-8');
			
		return $this->load->view('common/header', $data);
	}
}
