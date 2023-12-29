<?php
/******************************************************************************************
 *** All rights reserved belong to the module, the module developers https://oc-day.ru  *** 
 *** https://oc-day.ru © 2017-2022 All Rights Reserved                                  ***
 *** Distribution, without the author's consent is prohibited                           ***
 *** Commercial license                                                                 ***
 ******************************************************************************************/
class ControllerExtensionModuleOcdbanner extends Controller {
  private $version = '5.5';
  private $module_code = 'ocdbanner';
  private $error = array();

  public function index() {
    $this->load->language('extension/module/' . $this->module_code);

    $this->document->setTitle(strip_tags($this->language->get('heading_title')));
    
    $this->document->addStyle('view/stylesheet/' . $this->module_code . '.css');
    
    $this->document->addStyle('view/javascript/codemirror/lib/codemirror.css');
    $this->document->addScript('view/javascript/codemirror/lib/codemirror.js');
    $this->document->addStyle('view/javascript/' . $this->module_code . '/codemirror/theme/dracula.css');
    $this->document->addScript('view/javascript/' . $this->module_code . '/codemirror/mode/css/css.js');
    
    $this->document->addStyle('view/javascript/' . $this->module_code . '/gridstack/gridstack.min.css');
    $this->document->addScript('view/javascript/' . $this->module_code . '/gridstack/gridstack-h5.js');
    
    $this->document->addStyle('view/javascript/' . $this->module_code . '/colpick/colpick.css');
    $this->document->addScript('view/javascript/' . $this->module_code . '/colpick/colpick.js');
    
    $this->document->addScript('view/javascript/' . $this->module_code . '/Sortable.min.js');
    
    $this->loadModels();
    $this->load->model('extension/module/' . $this->module_code);
    $this->load->model('setting/setting');
    $this->load->model('tool/image');
    $this->load->model('catalog/category');
    $this->load->model('catalog/manufacturer');
    $this->load->model('catalog/product');
    
    if (version_compare(VERSION, '3.0', '<')) {
      $token = 'token=' . $this->session->data['token'];
      $url_extension = 'extension/extension'; 
    } else {
      $token = 'user_token=' . $this->session->data['user_token'];
      $url_extension = 'marketplace/extension';
    }
    
    if (($this->request->server['REQUEST_METHOD'] == 'POST')) {
      if (isset($this->request->post['ocdbanner_license']) == $this->request->post['ocdbanner_license']) {
		    if (!$this->config->get('ocdbanner_license')) {
          $this->model_setting_setting->editSetting($this->module_code, $this->request->post);
      
          $this->session->data['success'] = $this->language->get('text_success_license');

          $this->response->redirect($this->url->link('extension/module/' . $this->module_code, $token, true));
        }
        
        if ($this->validate()) {
          $check_event = $this->model_extension_module_ocdbanner->getEventByCode($this->module_code);
          
          if (!$check_event) {
            $this->{'model_' . $this->model_event}->addEvent($this->module_code, 'catalog/view/*/*/after', 'extension/module/' . $this->module_code . '/shortCodeOutput');
          }
                  
          if (!isset($this->request->get['module_id'])) {
            $this->{'model_' . $this->model_module}->addModule($this->module_code, $this->request->post);
            $this->request->post['module_id'] = $this->model_extension_module_ocdbanner->getLastId();
            $this->{'model_' . $this->model_module}->editModule($this->request->post['module_id'], $this->request->post);
            $this->model_setting_setting->editSetting($this->module_code, $this->request->post);
          } else {
            $this->request->post['module_id'] = $this->request->get['module_id'];
				    $this->{'model_' . $this->model_module}->editModule($this->request->get['module_id'], $this->request->post);
            $this->model_setting_setting->editSetting($this->module_code, $this->request->post);
          }
            
          $this->session->data['success'] = $this->language->get('text_success');
					
	        $url = '';

          if (isset($this->request->get['module_id'])) {
            $url .= '&module_id=' . $this->request->get['module_id'];
	        }

          if (isset($this->request->post['apply']) && $this->request->post['apply'] == '1') {
            $this->session->data['success'] = $this->language->get('text_success');
	    
            $this->response->redirect($this->url->link('extension/module/' . $this->module_code, $token . $url, true));
	        }
        
          $this->response->redirect($this->url->link($url_extension, $token . '&type=module', true));

        }
      } else {
        $this->session->data['warning'] = $this->language->get('error_license');
        
        $this->response->redirect($this->url->link('extension/module/' . $this->module_code, $token, true));
      }
    }
    
    if (isset($this->request->post['ocdbanner_license'])) {
			$ocdbanner_license = $data['ocdbanner_license'] = $this->request->post['ocdbanner_license'];
		} else {
			$ocdbanner_license = $data['ocdbanner_license'] = $this->config->get('ocdbanner_license');
		}
    
    $data['version'] = sprintf($this->language->get('text_version'), $this->version);
    
    $data['heading_title'] = $this->language->get('heading_title');
    
    $data['tab_setting_module'] = $this->language->get('tab_setting_module');
    $data['tab_setting_banners'] = $this->language->get('tab_setting_banners');
    $data['tab_access_module'] = $this->language->get('tab_access_module');
    $data['tab_css'] = $this->language->get('tab_css');
    $data['tab_support'] = $this->language->get('tab_support');
                
    $data['text_module_id'] = $this->language->get('text_module_id');    
	  $data['text_edit'] = $this->language->get('text_edit');
	  $data['text_enabled'] = $this->language->get('text_enabled');
	  $data['text_disabled'] = $this->language->get('text_disabled');
    $data['text_yes'] = $this->language->get('text_yes');
	  $data['text_no'] = $this->language->get('text_no');
    $data['text_add_group'] = $this->language->get('text_add_group');
    $data['text_add_banner'] = $this->language->get('text_add_banner');
    $data['text_self'] = $this->language->get('text_self');
    $data['text_target'] = $this->language->get('text_target');
    $data['text_modal'] = $this->language->get('text_modal');
    $data['text_description'] = $this->language->get('text_description');
    $data['text_position_before'] = $this->language->get('text_position_before');
    $data['text_position_after'] = $this->language->get('text_position_after');
    $data['text_group'] = $this->language->get('text_group');
    $data['text_banners'] = $this->language->get('text_banners');
    $data['text_banners'] = $this->language->get('text_banners');
    $data['text_mode_grid'] = $this->language->get('text_mode_grid');
    $data['text_mode_carousel'] = $this->language->get('text_mode_carousel');
    $data['text_mode_resp_grid'] = $this->language->get('text_mode_resp_grid');
    $data['text_select'] = $this->language->get('text_select');
    $data['text_one_rows'] = $this->language->get('text_one_rows');
    $data['text_two_rows'] = $this->language->get('text_two_rows');
    $data['text_three_rows'] = $this->language->get('text_three_rows');
    $data['text_four_rows'] = $this->language->get('text_four_rows');
    $data['text_six_rows'] = $this->language->get('text_six_rows');
    $data['text_tab_setting'] = $this->language->get('text_tab_setting');
    $data['text_align_left'] = $this->language->get('text_align_left');
    $data['text_align_center'] = $this->language->get('text_align_center');
    $data['text_align_right'] = $this->language->get('text_align_right');
    $data['text_carousel_autoplay'] = $this->language->get('text_carousel_autoplay');
    $data['text_carousel_autoplay_speed'] = $this->language->get('text_carousel_autoplay_speed');
    $data['text_carousel_navigation'] = $this->language->get('text_carousel_navigation');
    $data['text_carousel_pagination'] = $this->language->get('text_carousel_pagination');
    $data['text_quantity_prod'] = $this->language->get('text_quantity_prod');
    $data['text_screen_resolution'] = $this->language->get('text_screen_resolution');
    $data['text_template'] = $this->language->get('text_template');
    $data['text_tpl'] = $this->language->get('text_tpl');
    $data['text_px'] = $this->language->get('text_px');
    $data['text_title_group_front'] = $this->language->get('text_title_group_front');
    $data['text_select_all'] = $this->language->get('text_select_all');
    $data['text_unselect_all'] = $this->language->get('text_unselect_all');
    $data['text_default'] = $this->language->get('text_default');
    $data['text_title_after_image'] = $this->language->get('text_title_after_image');
    $data['text_title_before_image'] = $this->language->get('text_title_before_image');
    $data['text_title_html_image'] = $this->language->get('text_title_html_image');
    $data['text_powered'] = $this->language->get('text_powered');
    $data['text_show_editor'] = $this->language->get('text_show_editor');
    $data['text_hide_editor'] = $this->language->get('text_hide_editor');
    $data['text_between'] = $this->language->get('text_between');
    $data['text_carousel_loop'] = $this->language->get('text_carousel_loop');
    $data['text_decor_development'] = $this->language->get('text_decor_development');
    $data['text_scale'] = $this->language->get('text_scale');
    $data['text_grayscale'] = $this->language->get('text_grayscale');
    $data['text_opacity'] = $this->language->get('text_opacity');
    $data['text_sepia'] = $this->language->get('text_sepia');
    $data['text_apollo'] = $this->language->get('text_apollo');
    $data['text_jazz'] = $this->language->get('text_jazz');
    $data['text_sarah'] = $this->language->get('text_sarah');
    $data['text_romeo'] = $this->language->get('text_romeo');
    $data['text_bubba'] = $this->language->get('text_bubba');
    $data['text_marley'] = $this->language->get('text_marley');
    $data['text_oscar'] = $this->language->get('text_oscar');
    $data['text_sadie'] = $this->language->get('text_sadie');
    $data['text_example_video'] = $this->language->get('text_example_video'); 
    $data['text_example_effect'] = $this->language->get('text_example_effect'); 
    $data['text_fixed'] = $this->language->get('text_fixed');
    $data['text_full'] = $this->language->get('text_full');
    $data['text_fullbg_fixedcontent'] = $this->language->get('text_fullbg_fixedcontent');
    $data['text_grid_element'] = $this->language->get('text_grid_element');
    $data['text_grid_not_element'] = $this->language->get('text_grid_not_element');
    $data['text_slide'] = $this->language->get('text_slide'); 
    $data['text_fade'] = $this->language->get('text_fade');
    $data['text_dev_name'] = $this->language->get('text_dev_name');
    $data['text_dev_mail'] = $this->language->get('text_dev_mail');
    $data['text_breakpoints_name'] = $this->language->get('text_breakpoints_name');
    $data['text_grid_range'] = $this->language->get('text_grid_range');
    $data['text_grid_column'] = $this->language->get('text_grid_column');
    $data['text_gutter_column'] = $this->language->get('text_gutter_column');
    $data['text_pojasnenie_header'] = $this->language->get('text_pojasnenie_header');
    $data['text_pojasnenie_custom_grid'] = $this->language->get('text_pojasnenie_custom_grid');
    $data['text_video_id_header'] = $this->language->get('text_video_id_header');
    $data['text_video_id'] = $this->language->get('text_video_id');
         
    $data['entry_name'] = $this->language->get('entry_name');
    $data['entry_name_front'] = $this->language->get('entry_name_front');
    $data['entry_name_front_show'] = $this->language->get('entry_name_front_show');
    $data['entry_banner'] = $this->language->get('entry_banner');
	  $data['entry_dimension'] = $this->language->get('entry_dimension');
    $data['entry_dimension_mobile'] = $this->language->get('entry_dimension_mobile');
    $data['entry_width'] = $this->language->get('entry_width');
	  $data['entry_height'] = $this->language->get('entry_height');
	  $data['entry_title_banner'] = $this->language->get('entry_title_banner');
    $data['entry_title_position'] = $this->language->get('entry_title_position');                                                                                                          
    $data['entry_status'] = $this->language->get('entry_status');
    $data['entry_template'] = $this->language->get('entry_template');
    $data['entry_thumb'] = $this->language->get('entry_thumb');
    $data['entry_thumb_bg'] = $this->language->get('entry_thumb_bg');    
	  $data['entry_title'] = $this->language->get('entry_title');
    $data['entry_alt'] = $this->language->get('entry_alt');
    $data['entry_image_type'] = $this->language->get('entry_image_type');
    $data['entry_type_image_image'] = $this->language->get('entry_type_image_image');
    $data['entry_type_image_video'] = $this->language->get('entry_type_image_video');
    $data['entry_type_image_slider'] = $this->language->get('entry_type_image_slider');
	  $data['entry_link'] = $this->language->get('entry_link');
    $data['entry_link_video'] = $this->language->get('entry_link_video');
    $data['entry_modal'] = $this->language->get('entry_modal');
    $data['entry_banner_desc_show'] = $this->language->get('entry_banner_desc_show');      
    $data['entry_image'] = $this->language->get('entry_image');
	  $data['entry_sort_order'] = $this->language->get('entry_sort_order');
    $data['entry_title_group'] = $this->language->get('entry_title_group');
    $data['entry_mode'] = $this->language->get('entry_mode');
    $data['entry_rows'] = $this->language->get('entry_rows');
    $data['entry_text_align'] = $this->language->get('entry_text_align'); 
    $data['entry_limit_carousel'] = $this->language->get('entry_limit_carousel');
    $data['entry_window'] = $this->language->get('entry_window');
    $data['entry_window_prod_show'] = $this->language->get('entry_window_prod_show');
    $data['entry_store'] = $this->language->get('entry_store');
    $data['entry_customer_groups'] = $this->language->get('entry_customer_groups');
    $data['entry_position_desc'] = $this->language->get('entry_position_desc');
    $data['entry_grid_gutter'] = $this->language->get('entry_grid_gutter');
    $data['entry_add_slide'] = $this->language->get('entry_add_slide');
    $data['entry_slide'] = $this->language->get('entry_slide');
    $data['entry_video_id'] = $this->language->get('entry_video_id');
    $data['entry_video_host'] = $this->language->get('entry_video_host');
    $data['entry_youtube'] = $this->language->get('entry_youtube');
    $data['entry_vimeo'] = $this->language->get('entry_vimeo');
    $data['entry_hover_effects'] = $this->language->get('entry_hover_effects');
    $data['entry_key'] = $this->language->get('entry_key');
    $data['entry_width_container'] = $this->language->get('entry_width_container');
    $data['entry_mobiledetect'] = $this->language->get('entry_mobiledetect');
    $data['entry_device_desktop'] = $this->language->get('entry_device_desktop');
    $data['entry_device_tablet'] = $this->language->get('entry_device_tablet');
    $data['entry_device_mobile'] = $this->language->get('entry_device_mobile');
    $data['entry_settings'] = $this->language->get('entry_settings');
    $data['entry_slider_mode'] = $this->language->get('entry_slider_mode');
    $data['entry_short_code'] = $this->language->get('entry_short_code');
    $data['entry_bg_image'] = $this->language->get('entry_bg_image');
    $data['entry_bg_color'] = $this->language->get('entry_bg_color');
    $data['entry_license_key'] = $this->language->get('entry_license_key');
    $data['entry_dev_info'] = $this->language->get('entry_dev_info');
    $data['entry_dev_name'] = $this->language->get('entry_dev_name');
    $data['entry_dev_mail'] = $this->language->get('entry_dev_mail');
    $data['entry_grid'] = $this->language->get('entry_grid');
    $data['entry_width_mobile_image'] = $this->language->get('entry_width_mobile_image');  
    $data['entry_category'] = $this->language->get('entry_category');
    $data['entry_product'] = $this->language->get('entry_product');
    $data['entry_manufacturer'] = $this->language->get('entry_manufacturer');
    $data['entry_product_placeholder'] = $this->language->get('entry_product_placeholder');
    $data['entry_breakpoints'] = $this->language->get('entry_breakpoints');
    $data['entry_viewport'] = $this->language->get('entry_viewport');

    $data['button_banner_add'] = $this->language->get('button_banner_add');
	  $data['button_add'] = $this->language->get('button_add');
    $data['button_remove'] = $this->language->get('button_remove');
    $data['button_save'] = $this->language->get('button_save');
	  $data['button_cancel'] = $this->language->get('button_cancel');
    $data['button_edit'] = $this->language->get('button_edit');
    $data['button_animation'] = $this->language->get('button_animation');
    $data['button_decor'] = $this->language->get('button_decor');
    $data['button_status'] = $this->language->get('button_status');
    $data['button_apply'] = $this->language->get('button_apply');
    $data['button_license'] = $this->language->get('button_license');
    $data['button_close'] = $this->language->get('button_close');
    
    $data['lang'] = $this->language->get('lang');
    
    $data['help_name_front'] = $this->language->get('help_name_front');
    $data['help_name_front_placeholder'] = $this->language->get('help_name_front_placeholder');
    $data['help_template'] = $this->language->get('help_template');
    $data['help_hidden_setting'] = $this->language->get('help_hidden_setting');
    $data['help_limit_carousel'] = $this->language->get('help_limit_carousel');
    $data['help_width_container'] = $this->language->get('help_width_container');
    $data['help_width_mobile_image'] = $this->language->get('help_width_mobile_image');
    $data['help_breakpoints'] = $this->language->get('help_breakpoints');
    $data['help_grid_range'] = $this->language->get('help_grid_range');
    $data['help_breakpoints_name'] = $this->language->get('help_breakpoints_name');
    $data['help_banner_width_mobile'] = $this->language->get('help_banner_width_mobile');
    $data['help_short_code'] = $this->language->get('help_short_code');
    
    if (isset($this->session->data['warning'])) {
			$data['error_warning'] = $this->session->data['warning'];

			unset($this->session->data['warning']);
		} elseif (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

	  if (isset($this->error['name'])) {
	    $data['error_name'] = $this->error['name'];
	  } else {
	    $data['error_name'] = '';
	  }
    
    if (isset($this->error['width_image'])) {
			$data['error_width_image'] = $this->error['width_image'];
		} else {
			$data['error_width_image'] = array();
		}

		if (isset($this->error['height_image'])) {
			$data['error_height_image'] = $this->error['height_image'];
		} else {
			$data['error_height_image'] = array();
		}
    
    if (isset($this->session->data['success'])) {
	    $data['success'] = $this->session->data['success'];
      unset($this->session->data['success']);
    } else {
	    $data['success'] = '';
    }

	  $data['breadcrumbs'] = array();

	  $data['breadcrumbs'][] = array(
	    'text' => $this->language->get('text_home'),
	    'href' => $this->url->link('common/dashboard', $token, true)
	  );

	  $data['breadcrumbs'][] = array(
	    'text' => $this->language->get('text_extension'),
	    'href' => $this->url->link($url_extension, $token . '&type=module', true)
	  );

	  if (!isset($this->request->get['module_id'])) {
	    $data['breadcrumbs'][] = array(
	      'text' => $this->language->get('heading_title'),
	      'href' => $this->url->link('extension/module/' . $this->module_code, $token, true)
	    );
	  } else {
	    $data['breadcrumbs'][] = array(
	      'text' => $this->language->get('heading_title'),
	      'href' => $this->url->link('extension/module/' . $this->module_code, $token . '&module_id=' . $this->request->get['module_id'], true)
	    );
	  }
    
    if (!isset($this->request->get['module_id'])) {
      $data['action'] = $this->url->link('extension/module/' . $this->module_code, $token, true);
    } else {
      $data['action'] = $this->url->link('extension/module/' . $this->module_code, $token . '&module_id=' . $this->request->get['module_id'], true);
    }

    $data['cancel'] = $this->url->link($url_extension, $token . '&type=module', true);

	  if (isset($this->request->get['module_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
      $module_info = $this->{'model_' . $this->model_module}->getModule($this->request->get['module_id']);
	  }                                                      
    
    //CKEditor
    if ($this->config->get('config_editor_default')) {
      $this->document->addScript('view/javascript/ckeditor/ckeditor.js');
      $this->document->addScript('view/javascript/ckeditor/ckeditor_init.js');
    } else {
      //$this->document->addStyle('view/javascript/summernote/summernote.css');
      //$this->document->addScript('view/javascript/summernote/summernote.js');
      //$this->document->addScript('view/javascript/summernote/lang/summernote-' . $data['lang'] . '.js');
      //$this->document->addScript('view/javascript/summernote/opencart.js');
      
      
      $this->document->addStyle('view/javascript/summernote/summernote.css');
      $this->document->addScript('view/javascript/summernote/summernote.js');
      $this->document->addScript('view/javascript/summernote/lang/summernote-' . $data['lang'] . '.js');
      $this->document->addScript('view/javascript/summernote/summernote-image-attributes.js');
      $this->document->addScript('view/javascript/summernote/opencart.js');
    }
    
    if (isset($this->request->get['module_id'])) {
      $data['get_id'] = $this->request->get['module_id'];
	  } else {
      $data['get_id'] = false;
    }
    
    if (version_compare(VERSION, '3.0', '<')) {
      $data['token_text'] = 'token';
      $data['token'] = $this->session->data['token'];
    } else {
      $data['token_text'] = 'user_token';
      $data['token'] = $this->session->data['user_token'];
    }
    
  	$data['ckeditor'] = $this->config->get('config_editor_default');
    
    $this->load->model('localisation/language');
    $languages = $data['languages'] = $this->model_localisation_language->getLanguages();
    
    if (isset($this->request->get['module_id'])) {
      $data['module_id'] = $this->request->get['module_id'];
    } else {
      $data['module_id'] = $this->model_extension_module_ocdbanner->getLastId();
    }
   
	  if (isset($this->request->post['name'])) {
	    $data['name'] = $this->request->post['name'];
	  } elseif (!empty($module_info)) {
	    $data['name'] = $module_info['name'];
	  } else {
	    $data['name'] = '';
	  }
    
    if (isset($this->request->post['name_front'])) {
	    $data['name_front'] = $this->request->post['name_front'];
	  } elseif (!empty($module_info)) {
	    $data['name_front'] = $module_info['name_front'];
	  } else {
	    $data['name_front'] = '';
	  }

    if (isset($this->request->post['name_front_show'])) {
	    $data['name_front_show'] = $this->request->post['name_front_show'];
	  } elseif (!empty($module_info)) {
	    $data['name_front_show'] = $module_info['name_front_show'];
	  } else {
	    $data['name_front_show'] = 0;
	  }
    
    if (isset($this->request->post['width_container'])) {
	    $data['width_container'] = $this->request->post['width_container'];
	  } elseif (!empty($module_info['width_container'])) {
	    $data['width_container'] = $module_info['width_container'];
	  } else {
	    $data['width_container'] = 1;
	  }
    
    if (isset($this->request->post['bg_mode'])) {
	    $data['bg_mode'] = $this->request->post['bg_mode'];
	  } elseif (!empty($module_info['bg_mode'])) {
	    $data['bg_mode'] = $module_info['bg_mode'];
	  } else {
	    $data['bg_mode'] = 'bg_image';
	  }
    
    if (isset($this->request->post['image_bg'])) {
	    $data['image_bg'] = $this->request->post['image_bg'];
	  } elseif (!empty($module_info['image_bg'])) {
	    $data['image_bg'] = $module_info['image_bg'];
	  } else {
	    $data['image_bg'] = '';
	  }

	  if (isset($this->request->post['image_bg']) && is_file(DIR_IMAGE . $this->request->post['image_bg'])) {
	    $data['thumb_bg'] = $this->model_tool_image->resize($this->request->post['image_bg'], 100, 100);
	  } elseif (!empty($module_info) && is_file(DIR_IMAGE . $module_info['image_bg'])) {
	    $data['thumb_bg'] = $this->model_tool_image->resize($module_info['image_bg'], 100, 100);
	  } else {
	    $data['thumb_bg'] = $this->model_tool_image->resize('no_image.png', 100, 100);
	  }
    
    if (isset($this->request->post['color_bg'])) {
	    $data['color_bg'] = $this->request->post['color_bg'];
	  } elseif (!empty($module_info['color_bg'])) {
	    $data['color_bg'] = $module_info['color_bg'];
	  } else {
	    $data['color_bg'] = '';
	  }

    if (isset($this->request->post['device_pc'])) {
	    $data['device_pc'] = $this->request->post['device_pc'];
	  } elseif (!empty($module_info)) {
	    $data['device_pc'] = $module_info['device_pc'];
	  } else {
	    $data['device_pc'] = 1;
	  }
    
    if (isset($this->request->post['device_tablet'])) {
	    $data['device_tablet'] = $this->request->post['device_tablet'];
	  } elseif (!empty($module_info)) {
	    $data['device_tablet'] = $module_info['device_tablet'];
	  } else {
	    $data['device_tablet'] = 1;
	  }
    
    if (isset($this->request->post['device_mobile'])) {
	    $data['device_mobile'] = $this->request->post['device_mobile'];
	  } elseif (!empty($module_info)) {
	    $data['device_mobile'] = $module_info['device_mobile'];
	  } else {
	    $data['device_mobile'] = 1;
	  }
         
    if (isset($this->request->post['template_module'])) {
	    $data['template_module'] = $this->request->post['template_module'];
	  } elseif (!empty($module_info['template_module'])) {
	    $data['template_module'] = $module_info['template_module'];
	  } else {
	    $data['template_module'] = '';
	  }
    
    if (isset($this->request->post['short_code'])) {
	    $data['short_code'] = $this->request->post['short_code'];
	  } elseif (!empty($module_info['short_code'])) {
	    $data['short_code'] = $module_info['short_code'];
	  } else {
	    $data['short_code'] = '[' . $this->module_code . ' id=' . $data['module_id'] . ']';
	  }
      
    if (isset($this->request->post['status'])) {
	    $data['status'] = $this->request->post['status'];
	  } elseif (!empty($module_info)) {
	    $data['status'] = $module_info['status'];
	  } else {
	    $data['status'] = '';
	  }
   
    if (isset($this->request->post['css'])) {
	    $data['css'] = $this->request->post['css'];
	  } elseif (!empty($module_info['css'])) {
	    $data['css'] = $module_info['css'];
	  } else {
	    $data['css'] = '';
	  }
    
    if (isset($this->request->post['group_tab'])) {
	    $group_tabs = $this->request->post['group_tab'];
	  } elseif(!empty($module_info['group_tab'])){	
      $group_tabs = $module_info['group_tab'];
	  } else {
	    $group_tabs = array();
	  }
     
    $data['group_tabs'] = array();
    
    $data['config_admin_language'] = $this->model_extension_module_ocdbanner->getAdminLanguageId();
    
    if (isset($group_tabs)) {
      foreach ($group_tabs as $group_tab) {

        /**
         ** Setting Group
         */
        if (isset($group_tab['title_group'])) {
          $title_group = $group_tab['title_group'];
        } else {
          $title_group = '';
        }
        
        if (isset($group_tab['title_group_front'])) {
          $title_group_front = $group_tab['title_group_front'];
        } else {
          $title_group_front = 0;
        }
        
        if (isset($group_tab['mode'])) {
          $mode = $group_tab['mode'];
        } else {
          $mode = 'grid';
        }
        
        if (isset($group_tab['rows'])) {
          $rows = $group_tab['rows'];
        } else {
          $rows = '';
        }
        
        if ((isset($group_tab['mode']) && $group_tab['mode'] == 'grid') || (isset($group_tab['mode']) && $group_tab['mode'] == 'carousel')) {
          if (isset($group_tab['width_image'])) {
            $width_image = $group_tab['width_image'];
          } else {
            $width_image = '';
          }
          
          if (isset($group_tab['height_image'])) {
            $height_image = $group_tab['height_image'];
          } else {
            $height_image = '';
          }
          
          if (isset($group_tab['width_image_mobile'])) {
            $width_image_mobile = $group_tab['width_image_mobile'];
          } else {
            $width_image_mobile = '';
          }
          
          if (isset($group_tab['height_image_mobile'])) {
            $height_image_mobile = $group_tab['height_image_mobile'];
          } else {
            $height_image_mobile = '';
          }
        } else {
          $width_image  = '';
          $height_image = '';
          $width_image_mobile  = '';
          $height_image_mobile = '';
        }
        
        // Carousel
        if (isset($group_tab['carousel_autoplay'])) {
          $autoplay = $group_tab['carousel_autoplay'];
        } else {
          $autoplay = 0;
        }
        
        if (isset($group_tab['carousel_autoplay_speed'])) {
          $autoplay_speed = $group_tab['carousel_autoplay_speed'];
        } else {
          $autoplay_speed = '10000';
        }
        
        if (isset($group_tab['carousel_loop'])) {
          $carousel_loop = $group_tab['carousel_loop'];
        } else {
          $carousel_loop = 0;
        }
        
        if (isset($group_tab['carousel_navigation'])) {
          $carousel_navigation = $group_tab['carousel_navigation'];
        } else {
          $carousel_navigation = 0;
        }
        
        if (isset($group_tab['carousel_pagination'])) {
          $carousel_pagination = $group_tab['carousel_pagination'];
        } else {
          $carousel_pagination = 0;
        }
        
        $carousel_items = array();

        if (isset($group_tab['carousel_item'])) {
          foreach ($group_tab['carousel_item'] as $carousel_item) {
            $carousel_items[] = array(
              'window'       => $carousel_item['window'],
		          'item'         => $carousel_item['item'],
              'spaceBetween' => $carousel_item['spaceBetween'],
            );
          }
        }
        
        // GridStack
        $grid_stacks = array();
        
        if (isset($group_tab['grid_stack'])) {
          foreach ($group_tab['grid_stack'] as $grid_stack) {
            $grid_stacks[] = array(
              'gs_id'     => $grid_stack['gs_id'],        
              'gs_x'      => $grid_stack['gs_x'],
              'gs_y'      => $grid_stack['gs_y'],
              'gs_width'  => $grid_stack['gs_width'],
              'gs_height' => $grid_stack['gs_height'],
            );
          }
        }
        
        if (isset($group_tab['gutter'])) {
          $gutter = $group_tab['gutter'];
        } else {
          $gutter = 10;
        }
        
        if (isset($group_tab['max_width_image_mobile'])) {
          $max_width_image_mobile = $group_tab['max_width_image_mobile'];
        } else {
          $max_width_image_mobile = 568;
        }
        
        $grid_breakpoints = array();

        if (isset($group_tab['breakpoint'])) {
          foreach ($group_tab['breakpoint'] as $grid_breakpoint) {
            $grid_breakpoints[] = array(
              'name'   => $grid_breakpoint['name'],
              'range'  => $grid_breakpoint['range'],
		          'column' => $grid_breakpoint['column'],
              'gutter' => $grid_breakpoint['gutter'],
            );
          }
        }
        
        if (isset($group_tab['banner_width_mobile'])) {
          $banner_width_mobile = $group_tab['banner_width_mobile'];
        } else {
          $banner_width_mobile = 0;
        }
        
        // Status Group
        if (isset($group_tab['status'])) {
          $group_status = $group_tab['status'];
        } else {
          $group_status = 1;
        }
        
        /**
         ** Setting Banner
         */
        $banner_images = array();
        
        if (isset($group_tab['banner_image'])) {
          foreach ($group_tab['banner_image'] as $banner_image) {
            if (isset($banner_image['type'])) {
              $banner_type = $banner_image['type'];
            } else {
              $banner_type = '';
            }

            if (isset($banner_image['status'])) {
              $banner_status = $banner_image['status'];
            } else {
              $banner_status = 1;
            }
            
            if (isset($banner_image['animation'])) {
              $banner_animation = $banner_image['animation'];
            } else {
              $banner_animation = '';
            }
            
            foreach ($languages as $language) {
              if (isset($banner_image['image'][$language['language_id']]) && is_file(DIR_IMAGE . $banner_image['image'][$language['language_id']])) {
			          $image[$language['language_id']] = $banner_image['image'][$language['language_id']];
			          $thumb[$language['language_id']] = $this->model_tool_image->resize($banner_image['image'][$language['language_id']], 100, 100);
		          } else {
                $image[$language['language_id']] = '';
			          $thumb[$language['language_id']] = $this->model_tool_image->resize('no_image.png', 100, 100);
		          }        
            }
            
            if (isset($banner_image['alt_image'])) {
              $alt_image = $banner_image['alt_image'];
            } else {
              $alt_image = '';
            }
            
            if (isset($banner_image['title_show'])) {
              $title_show = $banner_image['title_show'];
            } else {
              $title_show = 0;
            }
            
            if (isset($banner_image['position_title'])) {
              $position_title = $banner_image['position_title'];
            } else {
              $position_title = '';
            }
            
            if (isset($banner_image['text_align'])) {
              $text_align = $banner_image['text_align'];
            } else {
              $text_align = '';
            }
            
            if (isset($banner_image['desc_show'])) {
              $desc_show = $banner_image['desc_show'];
            } else {
              $desc_show = 0;
            }
            
            if (isset($banner_image['description'])) {
              $description = $banner_image['description'];
            } else {
              $description = '';
            }
            
            if (isset($banner_image['editor'])) {
              $banner_editor = $banner_image['editor'];
            } else {
              $banner_editor = '';
            }
            
            if (isset($banner_image['position_desc'])) {
              $position_desc = $banner_image['position_desc'];
            } else {
              $position_desc = '';
            }
            
            if (isset($banner_image['type_image_video_host'])) {
              $video_host = $banner_image['type_image_video_host'];
            } else {
              $video_host = '';
            }
            
            if (isset($banner_image['type_image_video_id'])) {
              $video_id = $banner_image['type_image_video_id'];
            } else {
              $video_id = '';
            }
            
            if (isset($banner_image['title_video'])) {
              $title_video = $banner_image['title_video'];
            } else {
              $title_video = '';
            }
            
            if (isset($banner_image['title_video_show'])) {
              $title_video_show = $banner_image['title_video_show'];
            } else {
              $title_video_show = 0;
            }
            
            if (isset($banner_image['position_title_video'])) {
              $position_title_video = $banner_image['position_title_video'];
            } else {
              $position_title_video = '';
            }
            
            if (isset($banner_image['align_title_video'])) {
              $align_title_video = $banner_image['align_title_video'];
            } else {
              $align_title_video = '';
            }
            
            if (isset($banner_image['slider_autoplay'])) {
              $slider_autoplay = $banner_image['slider_autoplay'];
            } else {
              $slider_autoplay = 0;
            }
            
            if (isset($banner_image['slider_autoplay_speed'])) {
              $slider_autoplay_speed = $banner_image['slider_autoplay_speed'];
            } else {
              $slider_autoplay_speed = '';
            }
            
            if (isset($banner_image['slider_navigation'])) {
              $slider_navigation = $banner_image['slider_navigation'];
            } else {
              $slider_navigation = 0;
            }
            
            if (isset($banner_image['slider_pagination'])) {
              $slider_pagination = $banner_image['slider_pagination'];
            } else {
              $slider_pagination = 0;
            }
            
            if (isset($banner_image['slider_loop'])) {
              $slider_loop = $banner_image['slider_loop'];
            } else {
              $slider_loop = 0;
            }
            
            if (isset($banner_image['slider_mode'])) {
              $slider_mode = $banner_image['slider_mode'];
            } else {
              $slider_mode = 'slide';
            }
            
            /* === type slider === */
            $slider_items = array();
            
            if (isset($banner_image['image_slider'])) {
              foreach ($banner_image['image_slider'] as $key => $value) {
			          foreach ($value as $slider_item) {  
                  if (isset($slider_item['status'])) {
                    $slide_status = $slider_item['status'];
                  } else {
                    $slide_status = 0;
                  }
                                    
                  if (is_file(DIR_IMAGE . $slider_item['image_slide'])) {
				            $image_slide = $slider_item['image_slide'];
				            $thumb_slide = $slider_item['image_slide'];
				          } else {
				            $image_slide = '';
				            $thumb_slide = 'no_image.png';
				          }
                  
                  if (isset($slider_item['editor'])) {
                    $slide_editor = $slider_item['editor'];
                  } else {
                    $slide_editor = 0;
                  }
                                    
                  $slider_items[$key][] = array(
                    'status'                  => $slide_status,
                    'thumb_slide'             => $this->model_tool_image->resize($thumb_slide, 100, 100),
                    'image_slide'             => $image_slide,
                    'title_slide'             => $slider_item['title_slide'],
                    'alt_slide'               => $slider_item['alt_slide'],
                    'title_slide_show'        => $slider_item['title_slide_show'],
                    'title_slide_align'       => $slider_item['title_slide_align'],
                    'link_slide'              => $slider_item['link_slide'],
                    'link_slide_video'        => $slider_item['link_slide_video'],
                    'link_slide_video_modal'  => $slider_item['link_slide_video_modal'],
                    'desc_slide_show'         => $slider_item['desc_slide_show'],
                    'desc_slide'              => $slider_item['desc_slide'],
                    'editor'                  => $slide_editor,
                  );
                }
              }
            }
            /* === END type slider === */
            
            $banner_images[] = array(
              'type'                   => $banner_type,
              'status'                 => $banner_status,
              'animation'              => $banner_animation,
              'image'                  => $image,
              'thumb'                  => $thumb,
              'title_image'            => $banner_image['title_image'],
              'alt_image'              => $alt_image,
              'title_show'             => $title_show,
              'position_title'         => $position_title,
              'text_align'             => $text_align,
              'link_image'             => $banner_image['link_image'],
              'link_video'             => $banner_image['link_video'],
              'modal'                  => $banner_image['modal'],
              'desc_show'              => $desc_show,
              'description'            => $description,
              'editor'                 => $banner_editor,
              'position_desc'          => $position_desc,   
              'type_image_video_host'  => $video_host,
              'type_image_video_id'    => $video_id,
              'title_video'            => $title_video,
              'title_video_show'       => $title_video_show,
              'position_title_video'   => $position_title_video,
              'align_title_video'      => $align_title_video,
              'sort_order'             => $banner_image['sort_order'],
              'image_slider'           => $slider_items,
              'slider_autoplay'        => $slider_autoplay,
              'slider_autoplay_speed'  => $slider_autoplay_speed,
              'slider_navigation'      => $slider_navigation,
              'slider_pagination'      => $slider_pagination,
              'slider_loop'            => $slider_loop,
              'slider_mode'            => $slider_mode,
            );
          }
        }
        
        $data['group_tabs'][] = array(
          'status'                   => $group_status,
          'title_group'              => $title_group,
          'title_group_front'        => $title_group_front,
          'mode'                     => $mode,
          'rows'                     => $rows,
          'width_image'              => $width_image,
          'height_image'             => $height_image,
          'width_image_mobile'       => $width_image_mobile,
          'height_image_mobile'      => $height_image_mobile,
          'carousel_autoplay'        => $autoplay,
          'carousel_autoplay_speed'  => $autoplay_speed,
          'carousel_navigation'      => $carousel_navigation,
          'carousel_pagination'      => $carousel_pagination,
          'carousel_loop'            => $carousel_loop,
          'carousel_item'            => $carousel_items,
          'grid_stack'               => $grid_stacks,
          'gutter'                   => $gutter,
          'max_width_image_mobile'   => $max_width_image_mobile,
          'breakpoint'               => $grid_breakpoints,
          'banner_width_mobile'      => $banner_width_mobile,
          'banner_image'             => $banner_images,
        );
      }
    }
    
    //echo '<pre>'; print_r($data['group_tabs']); echo '</pre>';
   
    $data['placeholder'] = $this->model_tool_image->resize('no_image.png', 100, 100);
    
    $this->load->model('setting/store');
    $stores = $this->model_setting_store->getStores();
    $data['stores'] = $stores;
    
    if (isset($this->request->post['ocdbanner_store'])) {
	    $data['ocdbanner_store'] = $this->request->post['ocdbanner_store'];
	  } elseif (isset($module_info['ocdbanner_store'])) {
	    $data['ocdbanner_store'] = $module_info['ocdbanner_store'];
	  } else {
	    $data['ocdbanner_store'] = array();
	  }
    
    $this->load->model('customer/customer_group');
    $customer_groups = $this->model_customer_customer_group->getCustomerGroups();
    $data['customer_groups'] = $customer_groups;
    
    if (!empty($this->request->post['ocdbanner_customer_group'])) {
	    $data['ocdbanner_customer_group'] = $this->request->post['ocdbanner_customer_group'];
	  } elseif (!empty($module_info['ocdbanner_customer_group'])) {
	    $data['ocdbanner_customer_group'] = $module_info['ocdbanner_customer_group'];
	  } else {
	    $data['ocdbanner_customer_group'] = array();
	  }
    
    // Categories
	  $filter_data_category = array(
	    'sort'    => 'name',
	    'order'   => 'ASC'
	  );

	  $data['categories'] = $this->model_catalog_category->getCategories($filter_data_category);
    
    if (!empty($this->request->post['ocdbanner_category'])) {
	    $data['ocdbanner_category'] = $this->request->post['ocdbanner_category'];
	  } elseif (!empty($module_info['ocdbanner_category'])) {
	    $data['ocdbanner_category'] = $module_info['ocdbanner_category'];
	  } else {
	    $data['ocdbanner_category'] = array();
	  }
    
    // Manufacturers
	  $filter_data_manufacturer = array(
	    'sort'    => 'name',
	    'order'   => 'ASC'
	  );

	  $data['manufacturers'] = $this->model_catalog_manufacturer->getManufacturers($filter_data_manufacturer);
    
    if (!empty($this->request->post['ocdbanner_manufacturer'])) {
	    $data['ocdbanner_manufacturer'] = $this->request->post['ocdbanner_manufacturer'];
	  } elseif (!empty($module_info['ocdbanner_manufacturer'])) {
	    $data['ocdbanner_manufacturer'] = $module_info['ocdbanner_manufacturer'];
	  } else {
	    $data['ocdbanner_manufacturer'] = array();
	  }
        
    // Products
    $data['products'] = array();

		if (!empty($this->request->post['ocdbanner_product'])) {
			$products = $this->request->post['ocdbanner_product'];
		} elseif (!empty($module_info['ocdbanner_product'])) {
			$products = $module_info['ocdbanner_product'];
		} else {
			$products = array();
		}

		foreach ($products as $product_id) {
			$product_info = $this->model_catalog_product->getProduct($product_id);

			if ($product_info) {
				$data['products'][] = array(
					'product_id' => $product_info['product_id'],
					'name'       => $product_info['name']
				);
			}
		}
         
    $data['header'] = $this->load->controller('common/header');
	  $data['column_left'] = $this->load->controller('common/column_left');
	  $data['footer'] = $this->load->controller('common/footer');
    
    //echo '<pre>'; print_r($module_info); echo '</pre>';
    
    $this->response->setOutput($this->load->view('extension/module/' . $this->module_code . '/' . $this->module_code, $data));
  }  

  protected function validate() {
    if (!$this->user->hasPermission('modify', 'extension/module/' . $this->module_code)) {
	    $this->error['warning'] = $this->language->get('error_permission');
    }
    
    if ((utf8_strlen($this->request->post['name']) < 3) || (utf8_strlen($this->request->post['name']) > 64)) {
	    $this->error['name'] = $this->language->get('error_name');
    }

    return !$this->error;
  }
  
  public function install(){
		$this->loadModels();
    
		$this->{'model_' . $this->model_event}->addEvent($this->module_code, 'catalog/view/*/*/after', 'extension/module/' . $this->module_code . '/shortCodeOutput');
  }
	
	public function uninstall() {
    $this->loadModels();
    
    if (version_compare(VERSION, '3.0', '<')) {
      $this->{'model_' . $this->model_event}->deleteEvent($this->module_code);
    } else {
      $this->{'model_' . $this->model_event}->deleteEventByCode($this->module_code);
    }
  }
  
  private function loadModels() {
    if (version_compare(VERSION, '3.0', '<')) {
      $this->load->model('extension/event');
      $this->model_event = 'extension_event';
      
      $this->load->model('extension/module');
      $this->model_module = 'extension_module';
    } else {
      $this->load->model('setting/event');
      $this->model_event = 'setting_event';
      
      $this->load->model('setting/module');
      $this->model_module = 'setting_module';
    }
  }
}