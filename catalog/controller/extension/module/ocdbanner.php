<?php
/******************************************************************************************
 *** All rights reserved belong to the module, the module developers https://oc-day.ru  ***
 *** https://oc-day.ru © 2017-2022 All Rights Reserved                                  ***
 *** Distribution, without the author's consent is prohibited                           ***
 *** Commercial license                                                                 ***
 ******************************************************************************************/
class ControllerExtensionModuleOcdbanner extends Controller {
  private $module_code = 'ocdbanner';

  public function index($setting) {
    $mobiledetect = new Ocdbanner\OCDMobile_Detect($this->registry);
		$this->registry->set('ocd_mobile_detect', $mobiledetect);
    
    $module = $data['module'] = $setting['module_id'];

    if ($this->config->get('config_theme') == 'theme_default') {
      $this->document->addStyle('catalog/view/theme/default/stylesheet/' . $this->module_code . '.css');
      $directory = $this->config->get('theme_default_directory');
    } else {
      if (file_exists(DIR_TEMPLATE . $this->config->get('config_theme') . '/stylesheet/' . $this->module_code . '.css')) {
        $this->document->addStyle('catalog/view/theme/' . $this->config->get('config_theme') . '/stylesheet/' . $this->module_code . '.css');
			} else {
			  $this->document->addStyle('catalog/view/theme/default/stylesheet/' . $this->module_code . '.css');
		  }
      
      $directory = $this->config->get('config_theme');
    }
        
    $css_dir = DIR_TEMPLATE . $directory .'/stylesheet/';
    $css_name = 'ocdbanner-' . $module . '.css';

    $css = html_entity_decode($setting['css'], ENT_QUOTES, 'UTF-8');
           
    $file = $css_dir.$css_name;
        
    $dir_root = str_replace('/catalog/', '', DIR_APPLICATION).'/';
		$dir_style = str_replace($dir_root, '', $css_dir);
            
    if (isset($setting['css']) && $setting['css'] != '') {               
      if (!file_exists($dir_style)) { 
        mkdir($dir_style, 0777, true);
      }
      
      $fp = fopen($file, "w");
      fwrite($fp, $css);
      fclose($fp);
      
      if (file_exists($css_dir . $css_name)) {
			  $this->document->addStyle($dir_style . $css_name);
		  }
    } else {
      if (file_exists($file)) {
        unlink($file);
      }
    }

    // Access module
    if (isset($setting['ocdbanner_store']) && $setting['ocdbanner_store'] != '') {
      $ocdbanner_store = $setting['ocdbanner_store'];
    }

    if (!isset($ocdbanner_store) || !in_array($this->config->get('config_store_id'), $ocdbanner_store)) {
      return;
    }

    if (isset($setting['ocdbanner_customer_group']) && $setting['ocdbanner_customer_group'] != '') {
      $ocdbanner_customer_group = $setting['ocdbanner_customer_group'];
    }

    if (!isset($ocdbanner_customer_group) || !in_array($this->config->get('config_customer_group_id'), $ocdbanner_customer_group)) {
      return;
    }

    if (isset($setting['ocdbanner_category']) && $setting['ocdbanner_category'] != '') {
      $ocdbanner_category = $setting['ocdbanner_category'];
    }

		if (isset($this->request->get['path'])) {
      $parts = explode('_', (string)$this->request->get['path']);

      $category_id = (int)array_pop($parts);

	    if (isset($ocdbanner_category) && !in_array($category_id, $ocdbanner_category)) {
        return;
      }
    }

    if (isset($setting['ocdbanner_product']) && $setting['ocdbanner_product'] != '') {
      $ocdbanner_product = $setting['ocdbanner_product'];

      if (isset($this->request->get['product_id'])) {
			  $product_id = (int)$this->request->get['product_id'];
		  } else {
        $product_id = 0;
      }

      if (empty($ocdbanner_product) || !in_array($product_id, $ocdbanner_product)) {
        return;
      }
    }

    if (isset($setting['ocdbanner_manufacturer']) && $setting['ocdbanner_manufacturer'] != '') {
      $ocdbanner_manufacturer = $setting['ocdbanner_manufacturer'];

      if (isset($this->request->get['manufacturer_id'])) {
			  $manufacturer_id = (int)$this->request->get['manufacturer_id'];
		  }

      if (empty($ocdbanner_manufacturer) || !in_array($manufacturer_id, $ocdbanner_manufacturer)) {
        return;
      }
    }

    if (isset($setting['name_front'][$this->config->get('config_language_id')]) && $setting['name_front'][$this->config->get('config_language_id')] != '') {
      $data['name_front'] = $setting['name_front'][$this->config->get('config_language_id')];
    } else {
      $data['name_front'] = $this->language->get('heading_title');
    }

    if (isset($setting['name_front_show']) && $setting['name_front_show'] != '') {
      $data['name_front_show'] = $setting['name_front_show'];
    } else {
      $data['name_front_show'] = 0;
    }

    $this->load->model('tool/image');

    if (isset($setting['title_banner']) && $setting['title_banner'] != '') {
      $data['title_banner'] = $setting['title_banner'];
    } else {
      $data['title_banner'] = 0;
    }

    if (isset($setting['title_position']) && $setting['title_position'] != '') {
      $data['title_position'] = $setting['title_position'];
    } else {
      $data['title_position'] = 1;
    }

    if (isset($setting['text_align']) && $setting['text_align'] != '') {
      $data['text_align'] = $setting['text_align'];
    } else {
      $data['text_align'] = 4;
    }

    if (isset($setting['width_container']) && $setting['width_container']) {
      $data['width_container'] = $setting['width_container'];
    } else {
      $data['width_container'] = 1;
    }

    if (isset($setting['width_container']) && $setting['width_container'] == 2) {
      $data['class_fluid'] = ' fluid';
    } elseif (isset($setting['width_container']) && $setting['width_container'] == 3)   {
      $data['class_fluid'] = ' fluid-bg';
    } else {
      $data['class_fluid'] = '';
    }

    if ((is_file(DIR_IMAGE .$setting['image_bg'])) && ($setting['image_bg'] != 'no_image.png')) {
      $image_bg = 'image/' .$setting['image_bg'];
    } else {
      $image_bg = false;
    }

    if (isset($setting['width_container']) && $setting['width_container'] == 3) {
      if (isset($setting['bg_mode']) && $setting['bg_mode'] == 'bg_image') {
        $data['background'] = ' style="background-image:url(' . $image_bg . ');"';
      } else {
        $data['background'] = ' style="background-color:' . $setting['color_bg'] . ';"';
      }
    } else {
      $data['background'] = '';
    }

    $data['group_tabs'] = array();

    $group_tabs = array();

    if (isset($setting['group_tab']) && $setting['group_tab'] != '') {
      $group_tabs = $setting['group_tab'];
    }

    foreach ($group_tabs as $group_tab) {
      if (isset($group_tab['mode']) && $group_tab['mode'] == 'respgrid') {
		    $this->document->addScript('catalog/view/javascript/' . $this->module_code . '/responsivegrid/jquery.responsivegrid.js');
        $this->document->addScript('catalog/view/javascript/' . $this->module_code . '/ocdbanner_respgrid.js');
      }

      if (isset($group_tab['mode']) && $group_tab['mode'] == 'carousel') {
        $this->document->addStyle('catalog/view/javascript/' . $this->module_code . '/splide/splide.min.css');
		    $this->document->addScript('catalog/view/javascript/' . $this->module_code . '/splide/splide.min.js');
      }

      $carousel_items = array();

      if (isset($group_tab['carousel_item'])) {
        foreach ($group_tab['carousel_item'] as $carousel_item) {
          $carousel_items[] = array(
            'window'        => $carousel_item['window'],
		        'item'          => $carousel_item['item'],
            'spaceBetween'  => $carousel_item['spaceBetween'],
          );
        }
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

      $banner_images = array();

      if (isset($group_tab['banner_image'])) {
        foreach ($group_tab['banner_image'] as $banner_image) {
          if (isset($banner_image['link_video'][$this->config->get('config_language_id')]) && $banner_image['link_video'][$this->config->get('config_language_id')] != 0) {
            $this->document->addStyle('catalog/view/javascript/jquery/magnific/magnific-popup.css');
            $this->document->addScript('catalog/view/javascript/jquery/magnific/jquery.magnific-popup.min.js');
		        $this->document->addScript('catalog/view/javascript/' . $this->module_code . '/ocdbanner_video.js');
          }

          if ((isset($banner_image['type']) && $banner_image['type'] == 'image_slider')) {
            $this->document->addStyle('catalog/view/javascript/' . $this->module_code . '/splide/splide.min.css');
		        $this->document->addScript('catalog/view/javascript/' . $this->module_code . '/splide/splide.min.js');
          }

          if (isset($group_tab['mode']) && $group_tab['mode'] == 'respgrid') {
            if (is_file(DIR_IMAGE . $banner_image['image'][$this->config->get('config_language_id')])) {
				      $file = DIR_IMAGE . $banner_image['image'][$this->config->get('config_language_id')];

              $extension = pathinfo($file, PATHINFO_EXTENSION);

              if (strtolower($extension) == 'svg') {
                $image = HTTPS_SERVER . 'image/' . $banner_image['image'][$this->config->get('config_language_id')];

                $xml_image = simplexml_load_file($image);
                $xmlattributes = $xml_image->attributes();
                $width = (string)$xmlattributes->width;
                $height = (string)$xmlattributes->height;
                
                $attr_width = round($width);
                $attr_height = round($height);
			        } else {
                $info_image = getimagesize($file);
                
                $image_width  = $info_image[0];
                $image_height = $info_image[1];
                
                if (isset($group_tab['max_width_image_mobile']) && $group_tab['max_width_image_mobile'] != '') {
                  $max_width_image_mobile = $group_tab['max_width_image_mobile']; 
                } else {
                  $max_width_image_mobile = 568;
                }
                
                $koe = $image_width / $max_width_image_mobile;
                $image_width_mobile = $max_width_image_mobile;
                $image_height_mobile = ceil($image_height / $koe);
                
                if ($this->ocd_mobile_detect->isMobile() && !$this->ocd_mobile_detect->isTablet()) {
                  $attr_width = $image_width_mobile;
                  $attr_height = $image_height_mobile; 
                 
                  $image = $this->model_tool_image->resize($banner_image['image'][$this->config->get('config_language_id')], $image_width_mobile, $image_height_mobile);
                } else {
                  $attr_width = $image_width;
                  $attr_height = $image_height;
                
                  $image = $this->model_tool_image->resize($banner_image['image'][$this->config->get('config_language_id')], $image_width, $image_height);
                }
              }
            } else {
				      $image = '';
              $image_width  = '';
              $image_height = '';
              $attr_width = '';
              $attr_height = '';
			      }
          } else {
            if ($this->ocd_mobile_detect->isMobile() && !$this->ocd_mobile_detect->isTablet()) {
              $attr_width = $image_width = $group_tab['width_image_mobile'] ? $group_tab['width_image_mobile'] : 200;
              $attr_height = $image_height = $group_tab['height_image_mobile'] ? $group_tab['height_image_mobile'] : 200;
            } else {
              $attr_width = $image_width = $group_tab['width_image'] ? $group_tab['width_image'] : 200;
              $attr_height = $image_height = $group_tab['height_image'] ? $group_tab['height_image'] : 200;
            }
            
            if (is_file(DIR_IMAGE . $banner_image['image'][$this->config->get('config_language_id')])) {
				      $image = $this->model_tool_image->resize($banner_image['image'][$this->config->get('config_language_id')], $image_width, $image_height);
			      } else {
				      $image = $this->model_tool_image->resize('placeholder.png', 100, 100);
			      }
          }

          if (isset($banner_image['animation'][$this->config->get('config_language_id')]) && $banner_image['animation'][$this->config->get('config_language_id')] != '') {
				    $animation = $banner_image['animation'][$this->config->get('config_language_id')];
			    } else {
				    $animation = '';
			    }

          if (isset($banner_image['text_align'][$this->config->get('config_language_id')]) && $banner_image['text_align'][$this->config->get('config_language_id')] == 'center') {
            $text_align = 'text-center';
          } elseif (isset($banner_image['text_align'][$this->config->get('config_language_id')]) && $banner_image['text_align'][$this->config->get('config_language_id')] == 'right') {
            $text_align = 'text-right';
          } else {
            $text_align = 'text-left';
          }

          if (isset($banner_image['modal'][$this->config->get('config_language_id')]) && $banner_image['modal'][$this->config->get('config_language_id')] == 'modal') {
            $link_target = ' class="popup-video"';
          } elseif (isset($banner_image['modal'][$this->config->get('config_language_id')]) && $banner_image['modal'][$this->config->get('config_language_id')] == 'blank') {
            $link_target = ' target="_blank"';
          } else {
            $link_target = '';
          }
          
          /* === type slider === */
          $slider_items = array();

          if (isset($banner_image['image_slider'][$this->config->get('config_language_id')])) {
            foreach ($banner_image['image_slider'][$this->config->get('config_language_id')] as $slider_item) {
              if (isset($slider_item['link_slide_video']) && $slider_item['link_slide_video'] != 0) {
                $this->document->addStyle('catalog/view/javascript/jquery/magnific/magnific-popup.css');
                $this->document->addScript('catalog/view/javascript/jquery/magnific/jquery.magnific-popup.min.js');
		            $this->document->addScript('catalog/view/javascript/' . $this->module_code . '/ocdbanner_video.js');
              }
              
              if (isset($group_tab['mode']) && $group_tab['mode'] == 'respgrid') {
                if (is_file(DIR_IMAGE . $slider_item['image_slide'])) {
                  $file_image_slide = DIR_IMAGE . $slider_item['image_slide'];

                  $info_image_slider = getimagesize($file_image_slide);
                  $width_image_slider  = $info_image_slider[0];
                  $height_image_slider = $info_image_slider[1];

                  $image_slide = $this->model_tool_image->resize($slider_item['image_slide'], $width_image_slider, $height_image_slider);
                } else {
                  $image_slide = '';
                }
              } else {
                $image_slide = $this->model_tool_image->resize($slider_item['image_slide'], $image_width, $image_height);
              }

              if (isset($slider_item['status']) && $slider_item['status'] != 0) {
                $slide_status = $slider_item['status'];
              } else {
                $slide_status = false;
              }

              if (isset($slider_item['title_slide_show']) && $slider_item['title_slide_show'] != 0) {
                $title_slide_show = $slider_item['title_slide_show'];
              } else {
                $title_slide_show = false;
              }

              if (isset($slider_item['title_slide_align']) && $slider_item['title_slide_align'] == 'center') {
                $title_slide_align = 'text-center';
              } elseif (isset($slider_item['title_slide_align']) && $slider_item['title_slide_align'] == 'right') {
                $title_slide_align = 'text-right';
              } else {
                $title_slide_align = 'text-left';
              }
              
              if (isset($slider_item['link_slide_video_modal']) && $slider_item['link_slide_video_modal'] == 'modal') {
                $link_target_slide = ' class="popup-video"';
              } elseif (isset($slider_item['link_slide_video_modal']) && $slider_item['link_slide_video_modal'] == 'blank') {
                $link_target_slide = ' target="_blank"';
              } else {
                $link_target_slide = '';
              }

              $slider_items[] = array(
                'image_slide'             => $image_slide,
                'status'                  => $slide_status,
                'title_slide'             => html_entity_decode($slider_item['title_slide'], ENT_QUOTES, 'UTF-8'),
                'title_slide_img'         => strip_tags($slider_item['title_slide']),
                'alt_slide'               => isset($slider_item['alt_slide']) ? $slider_item['alt_slide'] : '',
                'title_slide_show'        => $title_slide_show,
                'title_slide_align'       => $title_slide_align,
                'link_slide'              => isset($slider_item['link_slide']) ? $slider_item['link_slide'] : '',
                'link_slide_video'        => isset($slider_item['link_slide_video']) ? $slider_item['link_slide_video'] : '',
                'link_slide_video_modal'  => isset($slider_item['link_slide_video_modal']) ? $slider_item['link_slide_video_modal'] : '',
                'desc_slide_show'         => isset($slider_item['desc_slide_show']) ? $slider_item['desc_slide_show'] : 0,
                'desc_slide'              => html_entity_decode($slider_item['desc_slide'], ENT_QUOTES, 'UTF-8'),
                'link_target_slide'       => $link_target_slide,
              );
            }
          }
          /* === END type slider === */

          $banner_images[] = array(
            'type'                   => isset($banner_image['type']) ? $banner_image['type'] : 'image_image',
            'status'                 => isset($banner_image['status']) ? $banner_image['status'] : 1,
            'image'                  => $image,
            'image_width'            => $attr_width,
            'image_height'           => $attr_height,
            'animation'              => $animation,
            'title_image'            => html_entity_decode($banner_image['title_image'][$this->config->get('config_language_id')], ENT_QUOTES, 'UTF-8'),
            'title_img'              => strip_tags($banner_image['title_image'][$this->config->get('config_language_id')]),
            'alt_image'              => isset($banner_image['alt_image'][$this->config->get('config_language_id')]) ? $banner_image['alt_image'][$this->config->get('config_language_id')] : '',
            'title_show'             => isset($banner_image['title_show'][$this->config->get('config_language_id')]) ? $banner_image['title_show'][$this->config->get('config_language_id')] : 0,
            'position_title'         => isset($banner_image['position_title'][$this->config->get('config_language_id')]) ? $banner_image['position_title'][$this->config->get('config_language_id')] : '',
            'text_align'             => $text_align,
            'link_image'             => $banner_image['link_image'][$this->config->get('config_language_id')],
            'link_video'             => $banner_image['link_video'][$this->config->get('config_language_id')],
            'link_target'            => $link_target,
            'desc_show'              => $banner_image['desc_show'][$this->config->get('config_language_id')],
            'description'            => html_entity_decode($banner_image['description'][$this->config->get('config_language_id')], ENT_QUOTES, 'UTF-8'),
            'type_image_video_host'  => isset($banner_image['type_image_video_host'][$this->config->get('config_language_id')]) ? $banner_image['type_image_video_host'][$this->config->get('config_language_id')] : '',
            'type_image_video_id'    => isset($banner_image['type_image_video_id'][$this->config->get('config_language_id')]) ? $banner_image['type_image_video_id'][$this->config->get('config_language_id')] : '',
            'title_video'            => html_entity_decode($banner_image['title_video'][$this->config->get('config_language_id')], ENT_QUOTES, 'UTF-8'),
            'title_video_show'       => isset($banner_image['title_video_show'][$this->config->get('config_language_id')]) ? $banner_image['title_video_show'][$this->config->get('config_language_id')] : 0,
            'position_title_video'   => isset($banner_image['position_title_video'][$this->config->get('config_language_id')]) ? $banner_image['position_title_video'][$this->config->get('config_language_id')] : '',
            'image_slider'           => $slider_items,
            'sort_order'             => $banner_image['sort_order'],
            'slider_autoplay'        => $banner_image['slider_autoplay'][$this->config->get('config_language_id')],
            'slider_autoplay_speed'  => isset($banner_image['slider_autoplay_speed'][$this->config->get('config_language_id')]) ? $banner_image['slider_autoplay_speed'][$this->config->get('config_language_id')] : '',
            'slider_navigation'      => $banner_image['slider_navigation'][$this->config->get('config_language_id')],
            'slider_pagination'      => $banner_image['slider_pagination'][$this->config->get('config_language_id')],
            'slider_loop'            => $banner_image['slider_loop'][$this->config->get('config_language_id')],
            'slider_mode'            => $banner_image['slider_mode'][$this->config->get('config_language_id')],
          );
        }
      }

      $sort_order = array();

		  foreach ($banner_images as $key => $value) {
		    $sort_order[$key] = $value['sort_order'];
		  }

		  array_multisort($sort_order, SORT_ASC, $banner_images);

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

      $data['group_tabs'][] = array(
        'title_group'              => $group_tab['title_group'][$this->config->get('config_language_id')] ? $group_tab['title_group'][$this->config->get('config_language_id')] : '',
        'title_group_front'        => $group_tab['title_group_front'] ? $group_tab['title_group_front'] : 0,
        'mode'                     => $group_tab['mode'],
        'carousel_autoplay'        => $group_tab['carousel_autoplay'],
        'carousel_autoplay_speed'  => $group_tab['carousel_autoplay_speed'] ? $group_tab['carousel_autoplay_speed'] : '',
        'carousel_navigation'      => $group_tab['carousel_navigation'],
        'carousel_pagination'      => $group_tab['carousel_pagination'],
        'carousel_loop'            => $group_tab['carousel_loop'],
        'carousel_item'            => $carousel_items,
        'rows'                     => $group_tab['rows'],
        'grid_stack'               => $grid_stacks,
        'gutter'                   => $group_tab['gutter'] ? $group_tab['gutter'] : 0,
        'breakpoint'               => $grid_breakpoints,
        'banner_width_mobile'      => $group_tab['banner_width_mobile'] ? $group_tab['banner_width_mobile'] : 0,
        'status'                   => $group_tab['status'],
        'banner_image'             => $banner_images,
	    );
    }

    //echo '<pre>'; print_r($data['group_tabs']); echo '</pre>';

    // Desktop
    if (isset($setting['device_pc']) && $setting['device_pc'] == 1) {
      $device_pc = true;
    }

    if (!isset($device_pc) && !$this->ocd_mobile_detect->isMobile()) {
      return;
    }

    // Tablet
    if (isset($setting['device_tablet']) && $setting['device_tablet'] == 1) {
      $device_tablet = true;
    }

    if (!isset($device_tablet) && $this->ocd_mobile_detect->isTablet()) {
      return;
    }

    // Mobile
    if (isset($setting['device_mobile']) && $setting['device_mobile'] == 1) {
      $device_mobile = true;
    }

    if (!isset($device_mobile) && ($this->ocd_mobile_detect->isMobile() && !$this->ocd_mobile_detect->isTablet())) {
      return;
    }
    
    //echo '<pre>'; print_r($data); echo '</pre>';

    if (isset($setting['template_module']) && $setting['template_module'] != '') {
      return $this->load->view('extension/module/' . $this->module_code . '/' . $setting['template_module'], $data);
    } else {
      return $this->load->view('extension/module/' . $this->module_code . '/' . $this->module_code, $data);
		}
	}

  public function shortCodeOutput(&$route, &$data, &$output) {
    $pre_scripts = $this->document->getScripts();
    $pre_styles = $this->document->getStyles();

    $pattern = "/" . preg_quote('[') . $this->module_code . ' id=(\d+?)' . preg_quote(']') . "/";

    $output = preg_replace_callback(
      $pattern,
      function ($part) {
        if (isset($part[1])) {
          if (version_compare(VERSION, '3.0', '<')) {
            $this->load->model('extension/module');
            $module_info = $this->model_extension_module->getModule($part[1]);
          } else {
            $this->load->model('setting/module');
            $module_info = $this->model_setting_module->getModule($part[1]);
          }
          
          if ($module_info && $module_info['status']) {
            $output_module = $this->load->controller('extension/module/' . $this->module_code, $module_info);

            return $output_module;
          }
		    }
      }, $output);

    $post_scripts = $this->document->getScripts();
    $post_styles = $this->document->getStyles();

    $add_head_scripts = '';

    if ($post_styles) {
			foreach ($post_styles as $style) {
				if (!in_array($style, $pre_styles)) {
					$add_head_scripts .= '<link href="' . $style['href'] . '" type="text/css" rel="' . $style['rel'] . '" media="' . $style['media'] . '" />' . PHP_EOL;
				}
			}
		}

    if ($post_scripts) {
			foreach ($post_scripts as $script) {
				if (!in_array($script, $pre_scripts)) {
					$add_head_scripts .= '<script src="' . $script . '" type="text/javascript"></script>' . PHP_EOL;
        }
			}
		}

    if ($add_head_scripts) {
			$add_head_scripts = $add_head_scripts . '</head>';
			$output = str_replace('</head>', $add_head_scripts, $output);
		}
  }
}