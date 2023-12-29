<?php echo $header; ?><?php echo $column_left; ?>
<div id="content">
  <div class="container-fluid container-breadcrumb">
    <ul class="breadcrumb">
      <?php foreach ($breadcrumbs as $breadcrumb) { ?>
      <li><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a></li>
      <?php } ?>
    </ul>
  </div>
  <div class="container-module">
    <div class="page-header">
      <div class="container-fluid">
        <div class="pull-right">
          <?php if ($ocdbanner_license) { ?>
          <?php if ($get_id) { ?>
          <button onclick="$('#content #apply').attr('value', '1'); $('#' + $('#content form').attr('id')).submit();" data-toggle="tooltip" title="<?php echo $button_apply; ?>" class="btn btn-success"><i class="fa fa-save"></i></button>
		      <?php } ?>
          <button type="submit" form="form-ocdbanner" data-toggle="tooltip" title="<?php echo $button_save; ?>" class="btn btn-primary"><i class="fa fa-save"></i></button>
          <?php } else { ?>
          <button type="submit" form="form-ocdbanner-license" class="btn btn-primary"><?php echo $button_license; ?></button>
          <?php } ?>
          <a href="<?php echo $cancel; ?>" data-toggle="tooltip" title="<?php echo $button_cancel; ?>" class="btn btn-default"><i class="fa fa-reply"></i></a>
        </div>
        <h1><?php echo $heading_title; ?> <?php echo $version; ?></h1>
      </div>
    </div>
    <div class="container-fluid">
      <?php if ($error_warning) { ?>
      <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> <?php echo $error_warning; ?>
        <button type="button" class="close" data-dismiss="alert">&times;</button>
      </div>
      <?php } ?>
      <?php if ($success) { ?>
      <div class="alert alert-success"><i class="fa fa-exclamation-circle"></i> <?php echo $success; ?>
        <button type="button" class="close" data-dismiss="alert">&times;</button>
      </div>
      <?php } ?>
      <?php if ($ocdbanner_license) { ?>
      <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" id="form-ocdbanner" class="form-horizontal">
        <input type="hidden" name="apply" id="apply" value="0">
        <input type="hidden" name="module_id" value="<?php echo isset($module_id) ? $module_id : ''; ?>" id="input-id" class="form-control" />
        <ul id="general-tabs" class="nav nav-tabs">
          <li class="active"><a href="#tab-setting-module" data-toggle="tab"><?php echo $tab_setting_module; ?></a></li>
          <li><a href="#tab-banners" data-toggle="tab"><?php echo $tab_setting_banners; ?></a></li>
          <li><a href="#tab-access-module" data-toggle="tab"><?php echo $tab_access_module; ?></a></li>
          <li><a href="#tab-css" data-toggle="tab"><?php echo $tab_css; ?></a></li>
          <li class="nav-support"><a href="#tab-support" data-toggle="tab"><?php echo $tab_support; ?></a></li>
        </ul>                                                                      
        <div class="tab-content">
          <div class="tab-pane active" id="tab-setting-module">
            <div class="form-group required">
              <label class="col-sm-2 control-label" for="input-name"><?php echo $entry_name; ?></label>
              <div class="col-sm-10">
                <input type="text" name="name" value="<?php echo $name; ?>" placeholder="<?php echo $entry_name; ?>" id="input-name" class="form-control" />
                <?php if ($error_name) { ?>
                <div class="text-danger"><?php echo $error_name; ?></div>
                <?php } ?>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label" for="input-name-front"><?php echo $entry_name_front; ?></label>
              <div class="col-sm-10">
                <?php foreach ($languages as $language) { ?>
                <div class="input-group" style="margin-bottom: 10px;">
                  <span class="input-group-addon"><img src="language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png" title="<?php echo $language['name']; ?>" /></span>
                  <input type="text" name="name_front[<?php echo $language['language_id']; ?>]" value="<?php if (isset($name_front[$language['language_id']])) echo $name_front[$language['language_id']]; ?>" placeholder="<?php echo $help_name_front_placeholder; ?>" id="input-name-front-lang<?php echo $language['language_id']; ?>" class="form-control" />
                </div>
                <?php } ?>                                      
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label"><?php echo $entry_name_front_show; ?></label>
              <div class="col-sm-10">
                <label class="radio-inline">
                  <?php if ($name_front_show) { ?>
                  <input type="radio" name="name_front_show" value="1" checked="checked" />
                  <?php echo $text_yes; ?>
                  <?php } else { ?>
                  <input type="radio" name="name_front_show" value="1" />
                  <?php echo $text_yes; ?>
                  <?php } ?>
                </label>
                <label class="radio-inline">
                  <?php if (!$name_front_show) { ?>
                  <input type="radio" name="name_front_show" value="0" checked="checked" />
                  <?php echo $text_no; ?>
                  <?php } else { ?>
                  <input type="radio" name="name_front_show" value="0" />
                  <?php echo $text_no; ?>
                  <?php } ?>
                </label>
              </div>
            </div>   
            <div class="form-group">
              <label class="col-sm-2 control-label" for="input-width-container"><?php echo $entry_width_container; ?></label>
              <div class="col-sm-10">
                <div class="alert alert-info">
                  <svg class="alert-icon-img" width="36" height="36" viewBox="0 0 36 36" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M18 0.5C8.33502 0.5 0.5 8.33502 0.5 18C0.5 27.665 8.33502 35.5 18 35.5C27.665 35.5 35.5 27.665 35.5 18C35.5 13.3587 33.6563 8.90752 30.3744 5.62563C27.0925 2.34374 22.6413 0.5 18 0.5ZM18 32C10.268 32 4 25.732 4 18C4 10.268 10.268 4 18 4C25.732 4 32 10.268 32 18C32 21.713 30.525 25.274 27.8995 27.8995C25.274 30.525 21.713 32 18 32ZM18.875 10.2959C19.3582 10.2959 19.75 10.6877 19.75 11.1709V12.9209C19.75 13.4042 19.3582 13.7959 18.875 13.7959H17.125C16.6418 13.7959 16.25 13.4042 16.25 12.9209V11.1709C16.25 10.6877 16.6418 10.2959 17.125 10.2959H18.875ZM18.875 15.5459C19.3582 15.5459 19.75 15.6301 19.75 16.3303V23.5349C20.2149 23.6643 20.6785 23.7769 21.081 23.8655C21.3254 23.9193 21.5017 24.1342 21.5017 24.3845V25.1791C21.5017 25.469 21.2667 25.7041 20.9767 25.7041H15.025C14.7351 25.7041 14.5 25.469 14.5 25.1791V24.3845C14.5 24.1342 14.6763 23.9193 14.9207 23.8655C15.3227 23.777 15.7857 23.6646 16.25 23.5353V17.7147C15.7857 17.5854 15.3227 17.473 14.9207 17.3845C14.6763 17.3307 14.5 17.1158 14.5 16.8655V16.0709C14.5 15.781 14.7351 15.5459 15.025 15.5459L18.875 15.5459Z"></path></svg>
                  <?php echo $help_width_container; ?>
                </div>
                <select name="width_container" id="input-width-container" class="form-control">
                  <option value="1" <?php if (isset($width_container) && $width_container == '1') { echo 'selected="selected"'; } ?>><?php echo $text_fixed; ?></option>                     
                  <option value="2" <?php if (isset($width_container) && $width_container == '2') { echo 'selected="selected"'; } ?>><?php echo $text_full; ?></option>                     
                  <option value="3" <?php if (isset($width_container) && $width_container == '3') { echo 'selected="selected"'; } ?>><?php echo $text_fullbg_fixedcontent; ?></option>                     
                </select>
              </div>
            </div>
            <div class="image-bg" style="display:none">
              <div class="form-group">
                <label class="col-sm-2 control-label" for="input-image-bg"><?php echo $entry_thumb_bg; ?></label>
                <div class="col-sm-10">                                                                                                                                                        
                  <div class="row">
                    <div class="col-sm-12">
                      <select name="bg_mode" id="bg-mode" class="form-control">
                        <option value="bg_image" <?php if (isset($bg_mode) && $bg_mode == 'bg_image') { echo 'selected="selected"'; } ?>><?php echo $entry_bg_image; ?></option>                     
                        <option value="bg_color" <?php if (isset($bg_mode) && $bg_mode == 'bg_color') { echo 'selected="selected"'; } ?>><?php echo $entry_bg_color; ?></option>                     
                      </select>
                    </div>
                    <div class="col-sm-12 mode-bg-image">
                      <a href="" id="thumb-image-bg" data-toggle="image" class="img-thumbnail"><img src="<?php echo $thumb_bg; ?>" alt="" title="" data-placeholder="<?php echo $placeholder; ?>" /></a>
                      <input type="hidden" name="image_bg" value="<?php echo isset($image_bg) ? $image_bg : ''; ?>" id="input-image-bg" />
                    </div>
                    <div class="col-sm-2 mode-bg-color" style="display:none">
                      <input type="text" name="color_bg" value="<?php echo isset($color_bg) ? $color_bg : ''; ?>" id="input-color-bg" class="form-control colorpicker" />  
                    </div>
                  </div>
                </div>
              </div>
            </div>                          
            <div class="form-group">
              <label class="col-sm-2 control-label"><?php echo $entry_mobiledetect; ?></label>
              <div class="col-sm-10">
                <div class="row">
                  <div class="col-sm-2">
                    <div class="device-info"><?php echo $entry_device_desktop; ?></div>
                    <div class="checkbox-device">
                      <?php if (!$device_pc) { ?>
                      <input type="radio" name="device_pc" value="0" checked="checked" id="device-pc-no" class="btn-switch__radio btn-switch__radio_no" />
                      <?php } else { ?>
                      <input type="radio" name="device_pc" value="0" id="device-pc-no" class="btn-switch__radio btn-switch__radio_no" />
                      <?php } ?>
                      <?php if ($device_pc) { ?>
                      <input type="radio" name="device_pc" value="1" checked="checked" id="device-pc-yes" class="btn-switch__radio btn-switch__radio_yes" /> 
                      <?php } else { ?>
                      <input type="radio" name="device_pc" value="1" id="device-pc-yes" class="btn-switch__radio btn-switch__radio_yes" />
                      <?php } ?>
                      <label for="device-pc-yes" class="btn-switch__label btn-switch__label_yes"></label>
                      <label for="device-pc-no" class="btn-switch__label btn-switch__label_no"></label>
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <div class="device-info"><?php echo $entry_device_tablet; ?></div>
                    <div class="checkbox-device">
                      <?php if (!$device_tablet) { ?>
                      <input type="radio" name="device_tablet" value="0" checked="checked" id="device-tablet-no" class="btn-switch__radio btn-switch__radio_no" />
                      <?php } else { ?>
                      <input type="radio" name="device_tablet" value="0" id="device-tablet-no" class="btn-switch__radio btn-switch__radio_no" />
                      <?php } ?>
                      <?php if ($device_tablet) { ?>
                      <input type="radio" name="device_tablet" value="1" checked="checked" id="device-tablet-yes" class="btn-switch__radio btn-switch__radio_yes" /> 
                      <?php } else { ?>
                      <input type="radio" name="device_tablet" value="1" id="device-tablet-yes" class="btn-switch__radio btn-switch__radio_yes" />
                      <?php } ?>
                      <label for="device-tablet-yes" class="btn-switch__label btn-switch__label_yes"></label>
                      <label for="device-tablet-no" class="btn-switch__label btn-switch__label_no"></label>
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <div class="device-info"><?php echo $entry_device_mobile; ?></div>
                    <div class="checkbox-device">
                      <?php if (!$device_mobile) { ?>
                      <input type="radio" name="device_mobile" value="0" checked="checked" id="device-mobile-no" class="btn-switch__radio btn-switch__radio_no" />
                      <?php } else { ?>
                      <input type="radio" name="device_mobile" value="0" id="device-mobile-no" class="btn-switch__radio btn-switch__radio_no" />
                      <?php } ?>
                      <?php if ($device_mobile) { ?>
                      <input type="radio" name="device_mobile" value="1" checked="checked" id="device-mobile-yes" class="btn-switch__radio btn-switch__radio_yes" /> 
                      <?php } else { ?>
                      <input type="radio" name="device_mobile" value="1" id="device-mobile-yes" class="btn-switch__radio btn-switch__radio_yes" />
                      <?php } ?>
                      <label for="device-mobile-yes" class="btn-switch__label btn-switch__label_yes"></label>
                      <label for="device-mobile-no" class="btn-switch__label btn-switch__label_no"></label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label" for="input-template"><span data-toggle="tooltip" title="<?php echo $help_template; ?>"><?php echo $entry_template; ?></span></label>
              <div class="col-sm-10">
                <div class="well well-sm">
                  <div style="padding: 9px 0; display: inline-block;"><?php echo $text_template; ?></div>
                  <div style="width: 300px; display: inline-block;">
                    <input type="text" name="template_module" value="<?php echo $template_module; ?>" placeholder="<?php echo $entry_template; ?>" id="input-template" class="form-control" />
                  </div>
                  <div style="padding: 9px 0; display: inline-block;"><?php echo $text_tpl; ?></div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
            <?php if ($get_id) { ?>
            <div class="form-group short-code">
              <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="<?php echo $help_short_code; ?>"><?php echo $entry_short_code; ?></span></label>
              <div class="col-sm-10 short-code-text">
                <input type="hidden" name="short_code" value="<?php echo $short_code; ?>" />
                <strong><?php echo $short_code; ?></strong>
              </div>
            </div>
            <?php } ?>
            <div class="form-group">
              <label class="col-sm-2 control-label" for="input-status"><?php echo $entry_status; ?></label>
              <div class="col-sm-10">
                <select name="status" id="input-status" class="form-control">
                  <?php if ($status) { ?>
                  <option value="1" selected="selected"><?php echo $text_enabled; ?></option>
                  <option value="0"><?php echo $text_disabled; ?></option>
                  <?php } else { ?>
                  <option value="1"><?php echo $text_enabled; ?></option>
                  <option value="0" selected="selected"><?php echo $text_disabled; ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-banners">
            <div class="row">
              <div class="col-sm-2" id="vtabs">
			          <ul class="nav nav-pills nav-stacked" id="group">
			            <?php $group_row = 0; ?>
				          <?php foreach ($group_tabs as $group_tab) { ?>
				          <li>
                    <a href="#tab-group<?php echo $group_row; ?>" data-toggle="tab"><i class="fa fa-minus-circle" onclick="$('a[href=\'#tab-group<?php echo $group_row; ?>\']').parent().remove(); $('#tab-group<?php echo $group_row; ?>').remove(); $('#group a:first').tab('show');"></i> 
                      <?php if (isset($group_tab['title_group'][$config_admin_language]) && $group_tab['title_group'][$config_admin_language] !='') { ?>
                      <?php echo $group_tab['title_group'][$config_admin_language]; ?>
                      <?php } else { ?>
                      <?php echo $text_group; ?> - <?php echo $group_row; ?> 
                      <?php } ?>
                    </a>
                  </li>
				          <?php $group_row++; ?>                                                                                                                                                                                                                                                                         
				          <?php } ?>
				          <li id="group-add"><a onclick="addGroup();"><i class="fa fa-plus-circle"></i> <?php echo $text_add_group; ?></a></li>
			          </ul>
			        </div> 
              <?php $group_row = 0; ?>
              <?php $carousel_item_row = 0; ?>
              <?php $breakpoint_row = 0; ?>
              <?php $grid_row = 0; ?>
              <div class="col-sm-10">
                <div class="tab-content">
                  <?php foreach ($group_tabs as $group_tab) { ?>
                  <div class="tab-pane" id="tab-group<?php echo $group_row; ?>">
                    <ul class="nav nav-tabs" id="settings-group<?php echo $group_row; ?>">
                      <li class="active"><a href="#tab-general-setting-group<?php echo $group_row; ?>" data-toggle="tab"><?php echo $text_tab_setting; ?></a></li>
                      <li><a href="#tab-setting-banners-group<?php echo $group_row; ?>" data-toggle="tab"><?php echo $text_banners; ?></a></li>
                    </ul>
                    <div class="tab-content">
                      <div class="tab-pane active" id="tab-general-setting-group<?php echo $group_row; ?>">
                        <div class="form-group">
                          <label class="col-sm-2 control-label" for="input-group-status-<?php echo $group_row; ?>"><?php echo $entry_status; ?></label>
                          <div class="col-sm-10">
                            <select name="group_tab[<?php echo $group_row; ?>][status]" id="input-group-status-<?php echo $group_row; ?>" class="form-control">
                              <?php if ($group_tab['status']) { ?>
                              <option value="1" selected="selected"><?php echo $text_enabled; ?></option>
                              <option value="0"><?php echo $text_disabled; ?></option>
                              <?php } else { ?>
                              <option value="1"><?php echo $text_enabled; ?></option>
                              <option value="0" selected="selected"><?php echo $text_disabled; ?></option>
                              <?php } ?>
                            </select>
                          </div>
                        </div>                
                        <div class="form-group">
                          <label class="col-sm-2 control-label"><?php echo $entry_title_group; ?></label>
                          <div class="col-sm-10">
                            <?php foreach ($languages as $language) { ?>
                            <div class="input-group" style="margin-bottom: 10px;">
                              <span class="input-group-addon"><img src="language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png" title="<?php echo $language['name']; ?>" /></span>
                              <input type="text" name="group_tab[<?php echo $group_row; ?>][title_group][<?php echo $language['language_id']; ?>]" value="<?php if (isset($group_tab['title_group'][$language['language_id']])) echo $group_tab['title_group'][$language['language_id']]; ?>" id="input-name-front-group<?php echo $group_row; ?>-language<?php echo $language['language_id']; ?>" class="form-control" />
                            </div>
                            <?php } ?>
                          </div>                                                                                                                               
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label"><?php echo $text_title_group_front; ?></label>
                          <div class="col-sm-10">
                            <?php if (isset($group_tab['title_group_front']) && $group_tab['title_group_front'] == '1') { ?>
                            <label class="radio-inline">
                              <input type="radio" name="group_tab[<?php echo $group_row; ?>][title_group_front]" value="1" checked="checked" />
                              <?php echo $text_yes; ?>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="group_tab[<?php echo $group_row; ?>][title_group_front]" value="0" />
                              <?php echo $text_no; ?>
                            </label>
                            <?php } else { ?>
                            <label class="radio-inline">
                              <input type="radio" name="group_tab[<?php echo $group_row; ?>][title_group_front]" value="1" />
                              <?php echo $text_yes; ?>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="group_tab[<?php echo $group_row; ?>][title_group_front]" value="0" checked="checked" />
                              <?php echo $text_no; ?>
                            </label>
                            <?php } ?>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label" for="input-mode-group<?php echo $group_row; ?>"><span data-toggle="tooltip" title="<?php echo $help_hidden_setting; ?>"><?php echo $entry_mode; ?></span></label>
                          <div class="col-sm-10">
                            <select name="group_tab[<?php echo $group_row; ?>][mode]" id="input-mode-group<?php echo $group_row; ?>" class="form-control">
                              <option value="grid" <?php if (isset($group_tab['mode']) && $group_tab['mode'] == 'grid') { echo 'selected="selected"'; } ?>><?php echo $text_mode_grid; ?></option>                     
                              <option value="carousel" <?php if (isset($group_tab['mode']) && $group_tab['mode'] == 'carousel') { echo 'selected="selected"'; } ?>><?php echo $text_mode_carousel; ?></option>                     
                              <option value="respgrid" <?php if (isset($group_tab['mode']) && $group_tab['mode'] == 'respgrid') { echo 'selected="selected"'; } ?>><?php echo $text_mode_resp_grid; ?></option>                     
                            </select>
                          </div>
                        </div>
                        <div class="form-group block-rows-group<?php echo $group_row; ?>" style="display:none;">
                          <label class="col-sm-2 control-label" for="input-rows-group<?php echo $group_row; ?>"><?php echo $entry_rows; ?></label>
                          <div class="col-sm-10">
                            <select name="group_tab[<?php echo $group_row; ?>][rows]" id="input-rows-group<?php echo $group_row; ?>" class="form-control">
                              <option value=""><?php echo $text_select; ?></option>                     
                              <option value="1" <?php if (isset($group_tab['rows']) && $group_tab['rows'] == '1') { echo 'selected="selected"'; } ?>>1</option>                     
                              <option value="2" <?php if (isset($group_tab['rows']) && $group_tab['rows'] == '2') { echo 'selected="selected"'; } ?>>2</option>                     
                              <option value="3" <?php if (isset($group_tab['rows']) && $group_tab['rows'] == '3') { echo 'selected="selected"'; } ?>>3</option>                     
                              <option value="4" <?php if (isset($group_tab['rows']) && $group_tab['rows'] == '4') { echo 'selected="selected"'; } ?>>4</option>                     
                              <option value="6" <?php if (isset($group_tab['rows']) && $group_tab['rows'] == '6') { echo 'selected="selected"'; } ?>>6</option>
                              <option value="12" <?php if (isset($group_tab['rows']) && $group_tab['rows'] == '12') { echo 'selected="selected"'; } ?>>12</option>
                            </select>
                          </div>
                        </div>
                        <div class="block-carousel-group<?php echo $group_row; ?>" style="display:none;">
                          <div class="form-group">
                            <label class="col-sm-2 control-label"><?php echo $text_carousel_autoplay; ?></label>
                            <div class="col-sm-2">
                              <?php if (isset($group_tab['carousel_autoplay']) && $group_tab['carousel_autoplay'] == '1') { ?>
                              <label class="radio-inline">
                                <input type="radio" name="group_tab[<?php echo $group_row; ?>][carousel_autoplay]" value="1" checked="checked" />
                                <?php echo $text_yes; ?>
                              </label>
                              <label class="radio-inline">
                                <input type="radio" name="group_tab[<?php echo $group_row; ?>][carousel_autoplay]" value="0" />
                                <?php echo $text_no; ?>
                              </label>
                              <?php } else { ?>
                              <label class="radio-inline">
                                <input type="radio" name="group_tab[<?php echo $group_row; ?>][carousel_autoplay]" value="1" />
                                <?php echo $text_yes; ?>
                              </label>
                              <label class="radio-inline">
                                <input type="radio" name="group_tab[<?php echo $group_row; ?>][carousel_autoplay]" value="0" checked="checked" />
                                <?php echo $text_no; ?>
                              </label>
                              <?php } ?>
                            </div>
                            <label class="col-sm-4 control-label" for="carousel-autoplay-speed-group<?php echo $group_row; ?>"><?php echo $text_carousel_autoplay_speed; ?></label>
                            <div class="col-sm-2">
                              <input type="text" name="group_tab[<?php echo $group_row; ?>][carousel_autoplay_speed]" value="<?php echo $group_tab['carousel_autoplay_speed']; ?>" id="carousel-autoplay-speed-group<?php echo $group_row; ?>" class="form-control" />
                            </div>
                          </div>                          
                          <div class="form-group">
                            <label class="col-sm-2 control-label"><?php echo $text_carousel_navigation; ?></label>
                            <div class="col-sm-10">
                              <?php if (isset($group_tab['carousel_navigation']) && $group_tab['carousel_navigation'] == '1') { ?>
                              <label class="radio-inline">
                                <input type="radio" name="group_tab[<?php echo $group_row; ?>][carousel_navigation]" value="1" checked="checked" />
                                <?php echo $text_yes; ?>
                              </label>
                              <label class="radio-inline">
                                <input type="radio" name="group_tab[<?php echo $group_row; ?>][carousel_navigation]" value="0" />
                                <?php echo $text_no; ?>
                              </label>
                              <?php } else { ?>
                              <label class="radio-inline">
                                <input type="radio" name="group_tab[<?php echo $group_row; ?>][carousel_navigation]" value="1" />
                                <?php echo $text_yes; ?>
                              </label>
                              <label class="radio-inline">
                                <input type="radio" name="group_tab[<?php echo $group_row; ?>][carousel_navigation]" value="0" checked="checked" />
                                <?php echo $text_no; ?>
                              </label>
                              <?php } ?>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-2 control-label"><?php echo $text_carousel_pagination; ?></label>
                            <div class="col-sm-10">
                              <?php if (isset($group_tab['carousel_pagination']) && $group_tab['carousel_pagination'] == '1') { ?>
                              <label class="radio-inline">
                                <input type="radio" name="group_tab[<?php echo $group_row; ?>][carousel_pagination]" value="1" checked="checked" />
                                <?php echo $text_yes; ?>
                              </label>
                              <label class="radio-inline">
                                <input type="radio" name="group_tab[<?php echo $group_row; ?>][carousel_pagination]" value="0" />
                                <?php echo $text_no; ?>
                              </label>
                              <?php } else { ?>
                              <label class="radio-inline">
                                <input type="radio" name="group_tab[<?php echo $group_row; ?>][carousel_pagination]" value="1" />
                                <?php echo $text_yes; ?>
                              </label>
                              <label class="radio-inline">
                                <input type="radio" name="group_tab[<?php echo $group_row; ?>][carousel_pagination]" value="0" checked="checked" />
                                <?php echo $text_no; ?>
                              </label>
                              <?php } ?>
                            </div>
                          </div>                           
                          <div class="form-group">
                            <label class="col-sm-2 control-label"><?php echo $text_carousel_loop; ?></label>
                            <div class="col-sm-10">
                              <?php if (isset($group_tab['carousel_loop']) && $group_tab['carousel_loop'] == '1') { ?>
                              <label class="radio-inline">
                                <input type="radio" name="group_tab[<?php echo $group_row; ?>][carousel_loop]" value="1" checked="checked" />
                                <?php echo $text_yes; ?>
                              </label>
                              <label class="radio-inline">
                                <input type="radio" name="group_tab[<?php echo $group_row; ?>][carousel_loop]" value="0" />
                                <?php echo $text_no; ?>
                              </label>
                              <?php } else { ?>
                              <label class="radio-inline">
                                <input type="radio" name="group_tab[<?php echo $group_row; ?>][carousel_loop]" value="1" />
                                <?php echo $text_yes; ?>
                              </label>
                              <label class="radio-inline">
                                <input type="radio" name="group_tab[<?php echo $group_row; ?>][carousel_loop]" value="0" checked="checked" />
                                <?php echo $text_no; ?>
                              </label>
                              <?php } ?>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-2 control-label"><?php echo $entry_limit_carousel; ?></label>
                            <div class="col-sm-10">
                              <div class="alert alert-info">
                                <svg class="alert-icon-img" width="36" height="36" viewBox="0 0 36 36" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M18 0.5C8.33502 0.5 0.5 8.33502 0.5 18C0.5 27.665 8.33502 35.5 18 35.5C27.665 35.5 35.5 27.665 35.5 18C35.5 13.3587 33.6563 8.90752 30.3744 5.62563C27.0925 2.34374 22.6413 0.5 18 0.5ZM18 32C10.268 32 4 25.732 4 18C4 10.268 10.268 4 18 4C25.732 4 32 10.268 32 18C32 21.713 30.525 25.274 27.8995 27.8995C25.274 30.525 21.713 32 18 32ZM18.875 10.2959C19.3582 10.2959 19.75 10.6877 19.75 11.1709V12.9209C19.75 13.4042 19.3582 13.7959 18.875 13.7959H17.125C16.6418 13.7959 16.25 13.4042 16.25 12.9209V11.1709C16.25 10.6877 16.6418 10.2959 17.125 10.2959H18.875ZM18.875 15.5459C19.3582 15.5459 19.75 15.6301 19.75 16.3303V23.5349C20.2149 23.6643 20.6785 23.7769 21.081 23.8655C21.3254 23.9193 21.5017 24.1342 21.5017 24.3845V25.1791C21.5017 25.469 21.2667 25.7041 20.9767 25.7041H15.025C14.7351 25.7041 14.5 25.469 14.5 25.1791V24.3845C14.5 24.1342 14.6763 23.9193 14.9207 23.8655C15.3227 23.777 15.7857 23.6646 16.25 23.5353V17.7147C15.7857 17.5854 15.3227 17.473 14.9207 17.3845C14.6763 17.3307 14.5 17.1158 14.5 16.8655V16.0709C14.5 15.781 14.7351 15.5459 15.025 15.5459L18.875 15.5459Z"></path></svg>
                                <?php echo $help_limit_carousel; ?>
                              </div>
                              <div class="table-responsive">
                                <table id="carousel-items-group<?php echo $group_row; ?>" class="table table-striped table-bordered table-hover">
                                  <thead>
                                    <tr>
                                      <td class="text-left"><?php echo $entry_window; ?></td>
                                      <td class="text-left"><?php echo $entry_window_prod_show; ?></td>
                                      <td class="text-left"><?php echo $text_between; ?></td>
                                      <td></td>              
                                    </tr>                                
                                  </thead>
                                  <tbody>
                                    <?php if (isset($group_tab['carousel_item'])) { ?>
                                    <?php foreach ($group_tab['carousel_item'] as $carousel_item) { ?>                                                                                     
                                    <tr id="carousel-item-row-group<?php echo $group_row; ?>-<?php echo $carousel_item_row; ?>">
                                      <td class="text-left">
                                        <input type="text" name="group_tab[<?php echo $group_row; ?>][carousel_item][<?php echo $carousel_item_row; ?>][window]" value="<?php echo isset($carousel_item['window']) ? $carousel_item['window'] : ''; ?>" placeholder="<?php echo $entry_window; ?>" class="form-control" />
                                      </td> 
                                      <td class="text-left">
                                        <input type="text" name="group_tab[<?php echo $group_row; ?>][carousel_item][<?php echo $carousel_item_row; ?>][item]" value="<?php echo isset($carousel_item['item']) ? $carousel_item['item'] : ''; ?>" placeholder="<?php echo $text_quantity_prod; ?>" class="form-control" />
                                      </td>
                                      <td class="text-left">                                                                                      
                                        <input type="text" name="group_tab[<?php echo $group_row; ?>][carousel_item][<?php echo $carousel_item_row; ?>][spaceBetween]" value="<?php echo isset($carousel_item['spaceBetween']) ? $carousel_item['spaceBetween'] : ''; ?>" class="form-control" />
                                      </td>
                                      <td class="text-left"><button type="button" onclick="$('#carousel-item-row-group<?php echo $group_row; ?>-<?php echo $carousel_item_row; ?>').remove();" data-toggle="tooltip" title="<?php echo $button_remove; ?>" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>
                                    </tr>
                                    <?php $carousel_item_row++; ?>
                                    <?php } ?>
                                    <?php } ?>
                                  </tbody>
                                  <tfoot>
                                    <tr>
                                      <td colspan="3"></td>
                                      <td class="text-left"><button type="button" onclick="addCarouselItem('<?php echo $group_row; ?>');" data-toggle="tooltip" title="<?php echo $button_add; ?>" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button></td>
                                    </tr>
                                  </tfoot>
                                </table>
                              </div>
                            </div>
                          </div>                          
                        </div>
                        <div class="block-grid-gutter block-grid-gutter-group<?php echo $group_row; ?>" style="display:none;">
                          <div class="form-group">
                            <label class="col-sm-2 control-label"><?php echo $entry_grid; ?></label>
                            <div class="col-sm-10">
                              <a onClick="addGridElement(<?php echo $group_row; ?>); $('.grid-stack-not-el-<?php echo $group_row; ?>').addClass('hidden');" class="btn btn-success"><?php echo $text_grid_element; ?></a>
                              <div class="grid-block grid-setting-<?php echo $group_row; ?>">
                                <div class="grid-stack-not-el grid-stack-not-el-<?php echo $group_row; ?><?php if (!empty($group_tab['grid_stack'])) { ?> hidden<?php } ?>"><?php echo $text_grid_not_element; ?></div>
                                <div class="grid-stack grid-stack-group<?php echo $group_row; ?>">
                                  <?php if (isset($group_tab['grid_stack'])) { ?>
                                  <?php foreach ($group_tab['grid_stack'] as $grid_stack) { ?>
                                  <div class="grid-stack-item grid-stack-item-group<?php echo $group_row; ?> grid-stack-item-<?php echo $grid_stack['gs_id']; ?>" gs-x="<?php echo $grid_stack['gs_x']; ?>" gs-y="<?php echo $grid_stack['gs_y']; ?>" gs-w="<?php echo $grid_stack['gs_width']; ?>" gs-h="<?php echo $grid_stack['gs_height']; ?>" gs-id="<?php echo $grid_stack['gs_id']; ?>">
                                    <input type="hidden" name="group_tab[<?php echo $group_row; ?>][grid_stack][<?php echo $grid_row; ?>][gs_id]" value="<?php echo $grid_stack['gs_id']; ?>" id="gs_id_<?php echo $grid_stack['gs_id']; ?>" class="form-control" />
                                    <input type="hidden" name="group_tab[<?php echo $group_row; ?>][grid_stack][<?php echo $grid_row; ?>][gs_x]" value="<?php echo $grid_stack['gs_x']; ?>" id="gs_x_<?php echo $grid_stack['gs_id']; ?>" class="form-control" />
                                    <input type="hidden" name="group_tab[<?php echo $group_row; ?>][grid_stack][<?php echo $grid_row; ?>][gs_y]" value="<?php echo $grid_stack['gs_y']; ?>" id="gs_y_<?php echo $grid_stack['gs_id']; ?>" class="form-control" />
                                    <input type="hidden" name="group_tab[<?php echo $group_row; ?>][grid_stack][<?php echo $grid_row; ?>][gs_width]" value="<?php echo $grid_stack['gs_width']; ?>" id="gs_width_<?php echo $grid_stack['gs_id']; ?>" class="form-control" />
                                    <input type="hidden" name="group_tab[<?php echo $group_row; ?>][grid_stack][<?php echo $grid_row; ?>][gs_height]" value="<?php echo $grid_stack['gs_height']; ?>" id="gs_height_<?php echo $grid_stack['gs_id']; ?>" class="form-control" />
                                    <div class="grid-stack-item-content">
                                      <i class="fa fa-trash-o fa-trash<?php echo $group_row; ?>" data-toggle="tooltip" title="<?php echo $button_remove; ?>" onclick="grid<?php echo $group_row; ?>.removeWidget(this.parentNode.parentNode)"></i>
                                    </div>
                                  </div>
                                  <?php $grid_row++; ?>
                                  <?php } ?>
                                  <?php } ?>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-2 control-label"><?php echo $entry_grid_gutter; ?></label>
                            <div class="col-sm-1">
                              <input type="text" name="group_tab[<?php echo $group_row; ?>][gutter]" value="<?php echo isset($group_tab['gutter']) ? $group_tab['gutter'] : ''; ?>" class="form-control" />
                            </div>
                            <div class="text-px"><?php echo $text_px; ?></div>                       
                          </div>
                          <div class="form-group">
                            <label class="col-sm-2 control-label breakpoints-label"><span><?php echo $entry_breakpoints; ?></span><a href="#pojasnenie-custom-grid" data-toggle="modal" class="help-breakpoints" target="_blank"><?php echo $help_breakpoints; ?></a></label>
                            <div class="col-sm-10">
                              <div class="table-responsive">
                                <table id="grid-breakpoints-group<?php echo $group_row; ?>" class="table table-striped table-bordered table-hover">
                                  <thead>
                                    <tr>
                                      <td class="text-left"><span data-toggle="tooltip" title="<?php echo $help_breakpoints_name; ?>"><?php echo $text_breakpoints_name; ?></span></td>
                                      <td class="text-left"><span data-toggle="tooltip" title="<?php echo $help_grid_range; ?>"><?php echo $text_grid_range; ?></span></td>
                                      <td class="text-left"><?php echo $text_grid_column; ?></td>
                                      <td class="text-left"><?php echo $text_gutter_column; ?></td>
                                      <td></td>              
                                    </tr>                                
                                  </thead>
                                  <tbody>
                                    <?php if (isset($group_tab['breakpoint'])) { ?>
                                    <?php foreach ($group_tab['breakpoint'] as $grid_breakpoint) { ?>
                                    <tr id="grid-breakpoint-group<?php echo $group_row; ?>-breakpoint<?php echo $breakpoint_row; ?>">
                                      <td class="text-left">
                                        <input type="text" name="group_tab[<?php echo $group_row; ?>][breakpoint][<?php echo $breakpoint_row; ?>][name]" value="<?php echo isset($grid_breakpoint['name']) ? $grid_breakpoint['name'] : ''; ?>" class="form-control" />
                                      </td>
                                      <td class="text-left">
                                        <input type="text" name="group_tab[<?php echo $group_row; ?>][breakpoint][<?php echo $breakpoint_row; ?>][range]" value="<?php echo isset($grid_breakpoint['range']) ? $grid_breakpoint['range'] : ''; ?>" class="form-control" />
                                      </td>
                                      <td class="text-left">
                                        <input type="text" name="group_tab[<?php echo $group_row; ?>][breakpoint][<?php echo $breakpoint_row; ?>][column]" value="<?php echo isset($grid_breakpoint['column']) ? $grid_breakpoint['column'] : ''; ?>" class="form-control" />
                                      </td>
                                      <td class="text-left">                                                                                      
                                        <input type="text" name="group_tab[<?php echo $group_row; ?>][breakpoint][<?php echo $breakpoint_row; ?>][gutter]" value="<?php echo isset($grid_breakpoint['gutter']) ? $grid_breakpoint['gutter'] : ''; ?>" class="form-control" />
                                      </td>
                                      <td class="text-left"><button type="button" onclick="$('#grid-breakpoint-group<?php echo $group_row; ?>-breakpoint<?php echo $breakpoint_row; ?>').remove();" data-toggle="tooltip" title="<?php echo $button_remove; ?>" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>
                                    </tr>
                                    <?php $breakpoint_row++; ?>
                                    <?php } ?>
                                    <?php } ?>
                                  </tbody>
                                  <tfoot>
                                    <tr>
                                      <td colspan="4"></td>
                                      <td class="text-left"><button type="button" onclick="addGridBreakpoints('<?php echo $group_row; ?>');" data-toggle="tooltip" title="<?php echo $button_add; ?>" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button></td>
                                    </tr>
                                  </tfoot>
                                </table>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="<?php echo $help_width_mobile_image; ?>"><?php echo $entry_width_mobile_image; ?></span></label>
                            <div class="col-sm-10">
                              <div class="input-group">
                                <input type="text" name="group_tab[<?php echo $group_row; ?>][max_width_image_mobile]" value="<?php echo isset($group_tab['max_width_image_mobile']) ? $group_tab['max_width_image_mobile'] : ''; ?>" class="form-control" />
                                <div class="input-group-addon"><?php echo $text_px; ?></div>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="<?php echo $help_banner_width_mobile; ?>"><?php echo $entry_viewport; ?></span></label>
                            <div class="col-sm-10">
                              <?php if (isset($group_tab['banner_width_mobile']) && $group_tab['banner_width_mobile'] == '1') { ?>
                              <label class="radio-inline">
                                <input type="radio" name="group_tab[<?php echo $group_row; ?>][banner_width_mobile]" value="1" checked="checked" />
                                <?php echo $text_yes; ?>
                              </label>
                              <label class="radio-inline">
                                <input type="radio" name="group_tab[<?php echo $group_row; ?>][banner_width_mobile]" value="0" />
                                <?php echo $text_no; ?>
                              </label>
                              <?php } else { ?>
                              <label class="radio-inline">
                                <input type="radio" name="group_tab[<?php echo $group_row; ?>][banner_width_mobile]" value="1" />
                                <?php echo $text_yes; ?>
                              </label>
                              <label class="radio-inline">
                                <input type="radio" name="group_tab[<?php echo $group_row; ?>][banner_width_mobile]" value="0" checked="checked" />
                                <?php echo $text_no; ?>
                              </label>
                              <?php } ?>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane" id="tab-setting-banners-group<?php echo $group_row; ?>">
                        <div class="form-group block-image-sizes block-image-sizes-group<?php echo $group_row; ?>" style="display:none;">
                          <label class="col-sm-3 control-label"><?php echo $entry_dimension; ?></label>
                          <div class="col-sm-9">
                            <div class="row">
                              <div class="col-sm-6 image-sizes">
                                <div class="input-group">
                                  <div class="input-group-addon"><?php echo $entry_width; ?></div>
                                  <input type="text" name="group_tab[<?php echo $group_row; ?>][width_image]" value="<?php echo isset($group_tab['width_image']) ? $group_tab['width_image'] : ''; ?>" id="input-width-group<?php echo $group_row; ?>" class="form-control" />
                                  <div class="input-group-addon"><?php echo $text_px; ?></div>
                                </div>
                              </div>
                              <div class="col-sm-6 image-sizes">
                                <div class="input-group">
                                  <div class="input-group-addon"><?php echo $entry_height; ?></div>
                                  <input type="text" name="group_tab[<?php echo $group_row; ?>][height_image]" value="<?php echo isset($group_tab['height_image']) ? $group_tab['height_image'] : ''; ?>" id="input-height-group<?php echo $group_row; ?>" class="form-control" />
                                  <div class="input-group-addon"><?php echo $text_px; ?></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group block-image-sizes block-image-sizes-group<?php echo $group_row; ?>" style="display:none;">
                          <label class="col-sm-3 control-label"><?php echo $entry_dimension_mobile; ?></label>
                          <div class="col-sm-9">
                            <div class="row">
                              <div class="col-sm-6 image-sizes">
                                <div class="input-group">
                                  <div class="input-group-addon"><?php echo $entry_width; ?></div>
                                  <input type="text" name="group_tab[<?php echo $group_row; ?>][width_image_mobile]" value="<?php echo isset($group_tab['width_image_mobile']) ? $group_tab['width_image_mobile'] : ''; ?>" id="input-width-mobile-group<?php echo $group_row; ?>" class="form-control" />
                                  <div class="input-group-addon"><?php echo $text_px; ?></div>
                                </div>
                              </div>
                              <div class="col-sm-6 image-sizes">
                                <div class="input-group">
                                  <div class="input-group-addon"><?php echo $entry_height; ?></div>
                                  <input type="text" name="group_tab[<?php echo $group_row; ?>][height_image_mobile]" value="<?php echo isset($group_tab['height_image_mobile']) ? $group_tab['height_image_mobile'] : ''; ?>" id="input-height-mobile-group<?php echo $group_row; ?>" class="form-control" />
                                  <div class="input-group-addon"><?php echo $text_px; ?></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-3">  
                            <ul class="nav nav-pills nav-stacked" id="banner-image-group<?php echo $group_row; ?>">
						                  <?php $banner_row = 0; ?>
                              <?php if (isset($group_tab['banner_image'])) { ?>
                              <?php foreach ($group_tab['banner_image'] as $banner_image) { ?>
							                <li class="banner-image"><a href="#tab-banner-images-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>" data-toggle="tab"><?php echo $entry_banner; ?> - <?php echo $banner_row; ?> <i class="fa fa-minus-circle" onclick="$('a[href=\'#tab-banner-images-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>\']').parent().remove(); $('#tab-banner-images-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>').remove(); $('#banner-image-group<?php echo $group_row; ?> a:first').tab('show');"></i></a></li>
							                <?php $banner_row++; ?>                                                                                                                                                                                                                                                                         
							                <?php } ?>
                              <?php } ?>
						  	              <li class="banner-image-add" id="banner-image-add-group<?php echo $group_row; ?>"><a onclick="addBanner('<?php echo $group_row; ?>');"><i class="fa fa-plus-circle"></i> <?php echo $text_add_banner; ?></a></li>
						                </ul>
                          </div>
                          <?php $banner_row = 0; ?>
                          <div class="col-sm-9">
                            <div class="tab-content">
                              <?php if (isset($group_tab['banner_image'])) { ?>
                              <?php foreach ($group_tab['banner_image'] as $banner_image) { ?>
                              <div class="tab-pane" id="tab-banner-images-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>">
                                <div class="block-type-banner block-type-banner-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>">
                                  <div class="form-group">                                                                 
                                    <label class="col-sm-2 control-label" for="input-banner-type-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>"><?php echo $entry_image_type; ?></label>
                                    <div class="col-sm-10">
                                      <select name="group_tab[<?php echo $group_row; ?>][banner_image][<?php echo $banner_row; ?>][type]" id="input-banner-type-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>" class="form-control">
                                        <option value="image_image" <?php if (isset($banner_image['type']) && $banner_image['type'] == 'image_image') { echo 'selected="selected"'; } ?>><?php echo $entry_type_image_image; ?></option>                     
                                        <option value="image_video" <?php if (isset($banner_image['type']) && $banner_image['type'] == 'image_video') { echo 'selected="selected"'; } ?>><?php echo $entry_type_image_video; ?></option>
                                        <option value="image_slider" <?php if (isset($banner_image['type']) && $banner_image['type'] == 'image_slider') { echo 'selected="selected"'; } ?> class="image-slider-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>"><?php echo $entry_type_image_slider; ?></option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-sm-2 control-label" for="banner-status-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>"><?php echo $entry_status; ?></label>
                                  <div class="col-sm-10">
                                    <select name="group_tab[<?php echo $group_row; ?>][banner_image][<?php echo $banner_row; ?>][status]" id="banner-status-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>" class="form-control">
                                      <?php if ($banner_image['status']) { ?>
                                      <option value="1" selected="selected"><?php echo $text_enabled; ?></option>
                                      <option value="0"><?php echo $text_disabled; ?></option>
                                      <?php } else { ?>
                                      <option value="1"><?php echo $text_enabled; ?></option>
                                      <option value="0" selected="selected"><?php echo $text_disabled; ?></option>
                                      <?php } ?>
                                    </select>
                                  </div>
                                </div>
                                <div class="form-group sort-banner">
                                  <label class="col-sm-2 control-label" for="input-banner-sort-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>"><?php echo $entry_sort_order; ?></label>
                                  <div class="col-sm-10">
                                    <input type="text" name="group_tab[<?php echo $group_row; ?>][banner_image][<?php echo $banner_row; ?>][sort_order]" value="<?php echo $banner_image['sort_order']; ?>" id="input-banner-sort-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>" placeholder="<?php echo $entry_sort_order; ?>" class="form-control" />
                                  </div>
                                </div>
                                <ul class="nav nav-tabs" id="language-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>">
                                  <?php foreach ($languages as $language) { ?>
                                  <li><a href="#tab-images-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>" data-toggle="tab"><img src="language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png" title="<?php echo $language['name']; ?>" /> <?php echo $language['name']; ?></a></li>
                                  <?php } ?>
                                </ul>
                                <div class="tab-content">
                                  <?php foreach ($languages as $language) { ?>
                                  <div class="tab-pane" id="tab-images-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>">
                                    <div class="block-video block-video-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>">
                                      <div class="form-group">                                                                 
                                        <label class="col-sm-2 control-label" for="input-video-host-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>"><?php echo $entry_video_host; ?></label>
                                        <div class="col-sm-10">
                                          <select name="group_tab[<?php echo $group_row; ?>][banner_image][<?php echo $banner_row; ?>][type_image_video_host][<?php echo $language['language_id']; ?>]" id="input-video-host-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>" class="form-control">
                                            <option value=""><?php echo $text_select; ?></option>
                                            <option value="youtube" <?php if (isset($banner_image['type_image_video_host'][$language['language_id']]) && $banner_image['type_image_video_host'][$language['language_id']] == 'youtube') { echo 'selected="selected"'; } ?>><?php echo $entry_youtube; ?></option>                     
                                            <option value="vimeo" <?php if (isset($banner_image['type_image_video_host'][$language['language_id']]) && $banner_image['type_image_video_host'][$language['language_id']] == 'vimeo') { echo 'selected="selected"'; } ?>><?php echo $entry_vimeo; ?></option>
                                          </select>
                                        </div>
                                      </div> 
                                      <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-link-image-video-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>"><?php echo $entry_video_id; ?></label>
                                        <div class="col-sm-6">
                                          <input type="text" name="group_tab[<?php echo $group_row; ?>][banner_image][<?php echo $banner_row; ?>][type_image_video_id][<?php echo $language['language_id']; ?>]" value="<?php echo isset($banner_image['type_image_video_id'][$language['language_id']]) ? $banner_image['type_image_video_id'][$language['language_id']] : ''; ?>" id="input-link-image-video-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>" class="form-control" />
                                        </div>
                                        <div class="col-sm-4 example-video"><a href="#modal-video-id" data-toggle="modal"><?php echo $text_example_video; ?></a></div>
                                      </div>
                                      <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-title-video-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>"><?php echo $entry_title; ?></label>
                                        <div class="col-sm-10">
                                          <input type="text" name="group_tab[<?php echo $group_row; ?>][banner_image][<?php echo $banner_row; ?>][title_video][<?php echo $language['language_id']; ?>]" value="<?php echo isset($banner_image['title_video'][$language['language_id']]) ? $banner_image['title_video'][$language['language_id']] : ''; ?>" id="input-title-video-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>" placeholder="<?php echo $entry_title; ?>" class="form-control" />
                                        </div> 
                                      </div>
                                      <div class="form-group">
                                        <label class="col-sm-2 control-label"><?php echo $entry_title_banner; ?></label>
                                        <div class="col-sm-10">
                                          <?php if (isset($banner_image['title_video_show'][$language['language_id']]) && $banner_image['title_video_show'][$language['language_id']] =='1') { ?>
                                          <label class="radio-inline">
                                            <input type="radio" name="group_tab[<?php echo $group_row; ?>][banner_image][<?php echo $banner_row; ?>][title_video_show][<?php echo $language['language_id']; ?>]" value="1" checked="checked" />
                                            <?php echo $text_yes; ?>
                                          </label>
                                          <label class="radio-inline">
                                            <input type="radio" name="group_tab[<?php echo $group_row; ?>][banner_image][<?php echo $banner_row; ?>][title_video_show][<?php echo $language['language_id']; ?>]" value="0" />
                                            <?php echo $text_no; ?>
                                          </label>
                                          <?php } else { ?>
                                          <label class="radio-inline">
                                            <input type="radio" name="group_tab[<?php echo $group_row; ?>][banner_image][<?php echo $banner_row; ?>][title_video_show][<?php echo $language['language_id']; ?>]" value="1" />
                                            <?php echo $text_yes; ?>
                                          </label>
                                          <label class="radio-inline">
                                            <input type="radio" name="group_tab[<?php echo $group_row; ?>][banner_image][<?php echo $banner_row; ?>][title_video_show][<?php echo $language['language_id']; ?>]" value="0" checked="checked" />
                                            <?php echo $text_no; ?>
                                          </label>
                                          <?php } ?>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label class="col-sm-2 control-label" for="position-title-video-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>"><?php echo $entry_position_desc; ?></label>
                                        <div class="col-sm-10">
                                          <select name="group_tab[<?php echo $group_row; ?>][banner_image][<?php echo $banner_row; ?>][position_title_video][<?php echo $language['language_id']; ?>]" id="position-title-video-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>" class="form-control">
                                            <option value=""><?php echo $text_select; ?></option>
                                            <option value="title_after_image" <?php if (isset($banner_image['position_title_video'][$language['language_id']]) && $banner_image['position_title_video'][$language['language_id']] == 'title_after_image') { echo 'selected="selected"'; } ?>><?php echo $text_title_after_image; ?></option>                     
                                            <option value="title_before_image" <?php if (isset($banner_image['position_title_video'][$language['language_id']]) && $banner_image['position_title_video'][$language['language_id']] == 'title_before_image') { echo 'selected="selected"'; } ?>><?php echo $text_title_before_image; ?></option>                     
                                          </select>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label class="col-sm-2 control-label" for="video-title-align-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>"><?php echo $entry_text_align; ?></label>
                                        <div class="col-sm-10">
                                          <select name="group_tab[<?php echo $group_row; ?>][banner_image][<?php echo $banner_row; ?>][align_title_video][<?php echo $language['language_id']; ?>]" id="video-title-align-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>" class="form-control">
                                            <option value=""><?php echo $text_select; ?></option>
                                            <option value="left" <?php if (isset($banner_image['align_title_video'][$language['language_id']]) && $banner_image['align_title_video'][$language['language_id']] == 'left') { echo 'selected="selected"'; } ?>><?php echo $text_align_left; ?></option>                     
                                            <option value="center" <?php if (isset($banner_image['align_title_video'][$language['language_id']]) && $banner_image['align_title_video'][$language['language_id']] == 'center') { echo 'selected="selected"'; } ?>><?php echo $text_align_center; ?></option>                     
                                            <option value="right" <?php if (isset($banner_image['align_title_video'][$language['language_id']]) && $banner_image['align_title_video'][$language['language_id']] == 'right') { echo 'selected="selected"'; } ?>><?php echo $text_align_right; ?></option>                     
                                          </select>
                                        </div>
                                      </div>
                                    </div>                                  
                                    <div class="block-image block-image-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>">
                                      <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-image-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>"><?php echo $entry_thumb; ?></label>
                                        <div class="col-sm-10">                                                                                                                                                        
                                          <a href="" id="thumb-image-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>" data-toggle="image" class="img-thumbnail"><img src="<?php echo $banner_image['thumb'][$language['language_id']]; ?>" alt="" title="" data-placeholder="<?php echo $placeholder; ?>" /></a>
                                          <input type="hidden" name="group_tab[<?php echo $group_row; ?>][banner_image][<?php echo $banner_row; ?>][image][<?php echo $language['language_id']; ?>]" value="<?php echo isset($banner_image['image'][$language['language_id']]) ? $banner_image['image'][$language['language_id']] : ''; ?>" id="input-image-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>" />
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label class="col-sm-2 control-label" for="animation-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>"><?php echo $entry_hover_effects; ?></label>
                                        <div class="col-sm-4">
                                          <select name="group_tab[<?php echo $group_row; ?>][banner_image][<?php echo $banner_row; ?>][animation][<?php echo $language['language_id']; ?>]" id="animation-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>" class="form-control">
                                            <option value=""><?php echo $text_select; ?></option>
                                            <option value="scale" <?php if (isset($banner_image['animation'][$language['language_id']]) && $banner_image['animation'][$language['language_id']] == 'scale') { echo 'selected="selected"'; } ?>><?php echo $text_scale; ?></option>                     
                                            <option value="grayscale" <?php if (isset($banner_image['animation'][$language['language_id']]) && $banner_image['animation'][$language['language_id']] == 'grayscale') { echo 'selected="selected"'; } ?>><?php echo $text_grayscale; ?></option>                     
                                            <option value="opacity" <?php if (isset($banner_image['animation'][$language['language_id']]) && $banner_image['animation'][$language['language_id']] == 'opacity') { echo 'selected="selected"'; } ?>><?php echo $text_opacity; ?></option>                     
                                            <option value="sepia" <?php if (isset($banner_image['animation'][$language['language_id']]) && $banner_image['animation'][$language['language_id']] == 'sepia') { echo 'selected="selected"'; } ?>><?php echo $text_sepia; ?></option>                     
                                            <option value="apollo" <?php if (isset($banner_image['animation'][$language['language_id']]) && $banner_image['animation'][$language['language_id']] == 'apollo') { echo 'selected="selected"'; } ?> class="animation-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>"><?php echo $text_apollo; ?></option>                     
                                            <option value="jazz" <?php if (isset($banner_image['animation'][$language['language_id']]) && $banner_image['animation'][$language['language_id']] == 'jazz') { echo 'selected="selected"'; } ?> class="animation-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>"><?php echo $text_jazz; ?></option>                     
                                            <option value="sarah" <?php if (isset($banner_image['animation'][$language['language_id']]) && $banner_image['animation'][$language['language_id']] == 'sarah') { echo 'selected="selected"'; } ?> class="animation-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>"><?php echo $text_sarah; ?></option>                     
                                            <option value="romeo" <?php if (isset($banner_image['animation'][$language['language_id']]) && $banner_image['animation'][$language['language_id']] == 'romeo') { echo 'selected="selected"'; } ?> class="animation-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>"><?php echo $text_romeo; ?></option>                     
                                            <option value="bubba" <?php if (isset($banner_image['animation'][$language['language_id']]) && $banner_image['animation'][$language['language_id']] == 'bubba') { echo 'selected="selected"'; } ?> class="animation-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>"><?php echo $text_bubba; ?></option>                     
                                            <option value="marley" <?php if (isset($banner_image['animation'][$language['language_id']]) && $banner_image['animation'][$language['language_id']] == 'marley') { echo 'selected="selected"'; } ?> class="animation-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>"><?php echo $text_marley; ?></option>                     
                                            <option value="oscar" <?php if (isset($banner_image['animation'][$language['language_id']]) && $banner_image['animation'][$language['language_id']] == 'oscar') { echo 'selected="selected"'; } ?> class="animation-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>"><?php echo $text_oscar; ?></option>                     
                                            <option value="sadie" <?php if (isset($banner_image['animation'][$language['language_id']]) && $banner_image['animation'][$language['language_id']] == 'sadie') { echo 'selected="selected"'; } ?> class="animation-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>"><?php echo $text_sadie; ?></option>                     
                                          </select>
                                        </div>
                                        <div class="col-sm-6 example-effect"><a href="//oc-day.ru/examples-of-hover-effects/" target="_blank"><?php echo $text_example_effect; ?></a></div>
                                      </div>
                                      <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-title-image-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>"><?php echo $entry_title; ?></label>
                                        <div class="col-sm-10">
                                          <input type="text" name="group_tab[<?php echo $group_row; ?>][banner_image][<?php echo $banner_row; ?>][title_image][<?php echo $language['language_id']; ?>]" value="<?php echo isset($banner_image['title_image'][$language['language_id']]) ? $banner_image['title_image'][$language['language_id']] : ''; ?>" id="input-title-image-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>" placeholder="<?php echo $entry_title; ?>" class="form-control" />
                                        </div> 
                                      </div>
                                      <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-alt-image-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>"><?php echo $entry_alt; ?></label>
                                        <div class="col-sm-10">
                                          <input type="text" name="group_tab[<?php echo $group_row; ?>][banner_image][<?php echo $banner_row; ?>][alt_image][<?php echo $language['language_id']; ?>]" value="<?php echo isset($banner_image['alt_image'][$language['language_id']]) ? $banner_image['alt_image'][$language['language_id']] : ''; ?>" id="input-alt-image-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>" placeholder="<?php echo $entry_alt; ?>" class="form-control" />
                                        </div>
                                      </div>
                                      <div class="form-group title-show title-show-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>">
                                        <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="<?php echo $help_hidden_setting; ?>"><?php echo $entry_title_banner; ?></span></label>
                                        <div class="col-sm-10">
                                          <?php if (isset($banner_image['title_show'][$language['language_id']]) && $banner_image['title_show'][$language['language_id']] =='1') { ?>
                                          <label class="radio-inline">
                                            <input type="radio" name="group_tab[<?php echo $group_row; ?>][banner_image][<?php echo $banner_row; ?>][title_show][<?php echo $language['language_id']; ?>]" value="1" checked="checked" />
                                            <?php echo $text_yes; ?>
                                          </label>
                                          <label class="radio-inline">
                                            <input type="radio" name="group_tab[<?php echo $group_row; ?>][banner_image][<?php echo $banner_row; ?>][title_show][<?php echo $language['language_id']; ?>]" value="0" />
                                            <?php echo $text_no; ?>
                                          </label>
                                          <?php } else { ?>
                                          <label class="radio-inline">
                                            <input type="radio" name="group_tab[<?php echo $group_row; ?>][banner_image][<?php echo $banner_row; ?>][title_show][<?php echo $language['language_id']; ?>]" value="1" />
                                            <?php echo $text_yes; ?>
                                          </label>
                                          <label class="radio-inline">
                                            <input type="radio" name="group_tab[<?php echo $group_row; ?>][banner_image][<?php echo $banner_row; ?>][title_show][<?php echo $language['language_id']; ?>]" value="0" checked="checked" />
                                            <?php echo $text_no; ?>
                                          </label>
                                          <?php } ?>
                                        </div>
                                      </div>
                                      <div class="block-title-banner block-title-banner-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>" style="display:none;">
                                        <div class="form-group">
                                          <label class="col-sm-2 control-label" for="position-title-image-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>"><?php echo $entry_position_desc; ?></label>
                                          <div class="col-sm-10">
                                            <select name="group_tab[<?php echo $group_row; ?>][banner_image][<?php echo $banner_row; ?>][position_title][<?php echo $language['language_id']; ?>]" id="position-title-image-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>" class="form-control">
                                              <option value=""><?php echo $text_select; ?></option>
                                              <option value="title_after_image" <?php if (isset($banner_image['position_title'][$language['language_id']]) && $banner_image['position_title'][$language['language_id']] == 'title_after_image') { echo 'selected="selected"'; } ?>><?php echo $text_title_after_image; ?></option>                     
                                              <option value="title_before_image" <?php if (isset($banner_image['position_title'][$language['language_id']]) && $banner_image['position_title'][$language['language_id']] == 'title_before_image') { echo 'selected="selected"'; } ?>><?php echo $text_title_before_image; ?></option>                     
                                              <option value="title_html_image" <?php if (isset($banner_image['position_title'][$language['language_id']]) && $banner_image['position_title'][$language['language_id']] == 'title_html_image') { echo 'selected="selected"'; } ?>><?php echo $text_title_html_image; ?></option>                     
                                            </select>
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <label class="col-sm-2 control-label" for="input-text-align-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>"><?php echo $entry_text_align; ?></label>
                                          <div class="col-sm-10">
                                            <select name="group_tab[<?php echo $group_row; ?>][banner_image][<?php echo $banner_row; ?>][text_align][<?php echo $language['language_id']; ?>]" id="input-text-align-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>" class="form-control">
                                              <option value=""><?php echo $text_select; ?></option>
                                              <option value="left" <?php if (isset($banner_image['text_align'][$language['language_id']]) && $banner_image['text_align'][$language['language_id']] == 'left') { echo 'selected="selected"'; } ?>><?php echo $text_align_left; ?></option>                     
                                              <option value="center" <?php if (isset($banner_image['text_align'][$language['language_id']]) && $banner_image['text_align'][$language['language_id']] == 'center') { echo 'selected="selected"'; } ?>><?php echo $text_align_center; ?></option>                     
                                              <option value="right" <?php if (isset($banner_image['text_align'][$language['language_id']]) && $banner_image['text_align'][$language['language_id']] == 'right') { echo 'selected="selected"'; } ?>><?php echo $text_align_right; ?></option>                     
                                            </select>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="form-group link-image">
                                        <label class="col-sm-2 control-label" for="input-link-image-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>"><?php echo $entry_link; ?></label>
                                        <div class="col-sm-10">
                                          <input type="text" name="group_tab[<?php echo $group_row; ?>][banner_image][<?php echo $banner_row; ?>][link_image][<?php echo $language['language_id']; ?>]" value="<?php echo isset($banner_image['link_image'][$language['language_id']]) ? $banner_image['link_image'][$language['language_id']] : ''; ?>" id="input-link-image-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>" placeholder="<?php echo $entry_link; ?>" class="form-control" />
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label class="col-sm-2 control-label"><?php echo $entry_link_video; ?></label>
                                        <div class="col-sm-10">
                                          <?php if (isset($banner_image['link_video'][$language['language_id']]) && $banner_image['link_video'][$language['language_id']] =='1') { ?>
                                          <label class="radio-inline">
                                            <input type="radio" name="group_tab[<?php echo $group_row; ?>][banner_image][<?php echo $banner_row; ?>][link_video][<?php echo $language['language_id']; ?>]" value="1" checked="checked" />
                                            <?php echo $text_yes; ?>
                                          </label>
                                          <label class="radio-inline">
                                            <input type="radio" name="group_tab[<?php echo $group_row; ?>][banner_image][<?php echo $banner_row; ?>][link_video][<?php echo $language['language_id']; ?>]" value="0" />
                                            <?php echo $text_no; ?>
                                          </label>
                                          <?php } else { ?>
                                          <label class="radio-inline">
                                            <input type="radio" name="group_tab[<?php echo $group_row; ?>][banner_image][<?php echo $banner_row; ?>][link_video][<?php echo $language['language_id']; ?>]" value="1" />
                                            <?php echo $text_yes; ?>
                                          </label>
                                          <label class="radio-inline">
                                            <input type="radio" name="group_tab[<?php echo $group_row; ?>][banner_image][<?php echo $banner_row; ?>][link_video][<?php echo $language['language_id']; ?>]" value="0" checked="checked" />
                                            <?php echo $text_no; ?>
                                          </label>
                                          <?php } ?>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-banner-modal-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>"><?php echo $entry_modal; ?></label>
                                        <div class="col-sm-10">
                                          <select name="group_tab[<?php echo $group_row; ?>][banner_image][<?php echo $banner_row; ?>][modal][<?php echo $language['language_id']; ?>]" id="input-banner-modal-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>" class="form-control">
                                            <option value="self" <?php if (isset($banner_image['modal'][$language['language_id']]) && $banner_image['modal'][$language['language_id']] =='self') { echo 'selected="selected"'; } ?>><?php echo $text_self; ?></option>                     
                                            <option value="blank" <?php if (isset($banner_image['modal'][$language['language_id']]) && $banner_image['modal'][$language['language_id']] =='blank') { echo 'selected="selected"'; } ?>><?php echo $text_target; ?></option>                     
                                            <option value="modal" <?php if (isset($banner_image['modal'][$language['language_id']]) && $banner_image['modal'][$language['language_id']] =='modal') { echo 'selected="selected"'; } ?>><?php echo $text_modal; ?></option>                     
                                          </select>
                                        </div>
                                      </div>
                                      <div class="form-group banner-desc-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>">
                                        <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="<?php echo $help_hidden_setting; ?>"><?php echo $entry_banner_desc_show; ?></span></label>
                                        <div class="col-sm-10">
                                          <?php if (isset($banner_image['desc_show'][$language['language_id']]) && $banner_image['desc_show'][$language['language_id']] =='1') { ?>
                                          <label class="radio-inline">
                                            <input type="radio" name="group_tab[<?php echo $group_row; ?>][banner_image][<?php echo $banner_row; ?>][desc_show][<?php echo $language['language_id']; ?>]" value="1" checked="checked" />
                                            <?php echo $text_yes; ?>
                                          </label>
                                          <label class="radio-inline">
                                            <input type="radio" name="group_tab[<?php echo $group_row; ?>][banner_image][<?php echo $banner_row; ?>][desc_show][<?php echo $language['language_id']; ?>]" value="0" />
                                            <?php echo $text_no; ?>
                                          </label>
                                          <?php } else { ?>
                                          <label class="radio-inline">
                                            <input type="radio" name="group_tab[<?php echo $group_row; ?>][banner_image][<?php echo $banner_row; ?>][desc_show][<?php echo $language['language_id']; ?>]" value="1" />
                                            <?php echo $text_yes; ?>
                                          </label>
                                          <label class="radio-inline">
                                            <input type="radio" name="group_tab[<?php echo $group_row; ?>][banner_image][<?php echo $banner_row; ?>][desc_show][<?php echo $language['language_id']; ?>]" value="0" checked="checked" />
                                            <?php echo $text_no; ?>
                                          </label>
                                          <?php } ?>
                                        </div>
                                      </div>
                                      <div class="block-banner-desc-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>" style="display:none;">
                                        <div class="form-group">
                                          <label class="col-sm-2 control-label" for="input-desc-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>"><?php echo $text_description; ?></label>
                                          <div class="col-sm-10">
                                            <textarea class="form-control <?php echo ($banner_image['editor']) ? 'show-editor' : 'hide-editor'; ?>" name="group_tab[<?php echo $group_row; ?>][banner_image][<?php echo $banner_row; ?>][description][<?php echo $language['language_id']; ?>]" rows="5" placeholder="<?php echo $text_description; ?>" id="input-desc-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>" data-lang="<?php echo $lang; ?>"><?php echo isset($banner_image['description'][$language['language_id']]) ? $banner_image['description'][$language['language_id']] : ''; ?></textarea>
                                            <a class="check-ckeditor check-ckeditor-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>"><?php echo ($banner_image['editor']) ? $text_hide_editor : $text_show_editor; ?></a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>                                  
                                    <!-- Setting Slider -->
                                    <?php $slider_item_row = 0; ?>
                                    <div class="block-slider block-slider-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>">
                                      <div class="slide-block-button">
                                        <div class="slide-add">
                                          <a onclick="addSliderElement('<?php echo $group_row; ?>', '<?php echo $banner_row; ?>', '<?php echo $language['language_id']; ?>');" class="btn btn-success"><?php echo $entry_add_slide; ?></a>
						                            </div>
                                        <div class="slider-setting">
                                          <a data-target="#slider-setting-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>" data-toggle="modal" class="btn btn-setting"><?php echo $entry_settings; ?></a>
						                            </div>
                                      </div>
                                      <div id="slider-setting-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>" class="modal fade">
                                        <div class="modal-dialog modal-lg">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                              <h4 class="modal-title"><?php echo $entry_settings; ?></h4>
                                            </div>
                                            <div class="modal-body">
                                              <div class="form-group">
                                                <label class="col-sm-3 control-label" for="slider-mode-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>"><?php echo $entry_slider_mode; ?></label>
                                                <div class="col-sm-9">
                                                  <select name="group_tab[<?php echo $group_row; ?>][banner_image][<?php echo $banner_row; ?>][slider_mode][<?php echo $language['language_id']; ?>]" id="slider-mode-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>" class="form-control">
                                                    <option value="slide" <?php if (isset($banner_image['slider_mode'][$language['language_id']]) && $banner_image['slider_mode'][$language['language_id']] == 'slide') { echo 'selected="selected"'; } ?>><?php echo $text_slide; ?></option>                     
                                                    <option value="fade" <?php if (isset($banner_image['slider_mode'][$language['language_id']]) && $banner_image['slider_mode'][$language['language_id']] == 'fade') { echo 'selected="selected"'; } ?>><?php echo $text_fade; ?></option>                     
                                                  </select>
                                                </div>
                                              </div> 
                                              <div class="form-group">
                                                <label class="col-sm-3 control-label"><?php echo $text_carousel_autoplay; ?></label>
                                                <div class="col-sm-2">
                                                  <?php if (isset($banner_image['slider_autoplay'][$language['language_id']]) && $banner_image['slider_autoplay'][$language['language_id']] == '1') { ?>
                                                  <label class="radio-inline">
                                                    <input type="radio" name="group_tab[<?php echo $group_row; ?>][banner_image][<?php echo $banner_row; ?>][slider_autoplay][<?php echo $language['language_id']; ?>]" value="1" checked="checked" />
                                                    <?php echo $text_yes; ?>
                                                  </label>
                                                  <label class="radio-inline">
                                                    <input type="radio" name="group_tab[<?php echo $group_row; ?>][banner_image][<?php echo $banner_row; ?>][slider_autoplay][<?php echo $language['language_id']; ?>]" value="0" />
                                                    <?php echo $text_no; ?>
                                                  </label>
                                                  <?php } else { ?>
                                                  <label class="radio-inline">
                                                    <input type="radio" name="group_tab[<?php echo $group_row; ?>][banner_image][<?php echo $banner_row; ?>][slider_autoplay][<?php echo $language['language_id']; ?>]" value="1" />
                                                    <?php echo $text_yes; ?>
                                                  </label>
                                                  <label class="radio-inline">
                                                    <input type="radio" name="group_tab[<?php echo $group_row; ?>][banner_image][<?php echo $banner_row; ?>][slider_autoplay][<?php echo $language['language_id']; ?>]" value="0" checked="checked" />
                                                    <?php echo $text_no; ?>
                                                  </label>
                                                  <?php } ?>
                                                </div>
                                                <label class="col-sm-4 control-label" for="slider-autoplay-speed-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>"><?php echo $text_carousel_autoplay_speed; ?></label>
                                                <div class="col-sm-3">
                                                  <input type="text" name="group_tab[<?php echo $group_row; ?>][banner_image][<?php echo $banner_row; ?>][slider_autoplay_speed][<?php echo $language['language_id']; ?>]" value="<?php echo isset($banner_image['slider_autoplay_speed'][$language['language_id']]) ? $banner_image['slider_autoplay_speed'][$language['language_id']] : ''; ?>" id="slider-autoplay-speed-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>" class="form-control" />
                                                </div>
                                              </div>
                                              <div class="form-group">
                                                <label class="col-sm-3 control-label"><?php echo $text_carousel_navigation; ?></label>
                                                <div class="col-sm-9">
                                                  <?php if (isset($banner_image['slider_navigation'][$language['language_id']]) && $banner_image['slider_navigation'][$language['language_id']] =='1') { ?>
                                                  <label class="radio-inline">
                                                    <input type="radio" name="group_tab[<?php echo $group_row; ?>][banner_image][<?php echo $banner_row; ?>][slider_navigation][<?php echo $language['language_id']; ?>]" value="1" checked="checked" />
                                                    <?php echo $text_yes; ?>
                                                  </label>
                                                  <label class="radio-inline">
                                                    <input type="radio" name="group_tab[<?php echo $group_row; ?>][banner_image][<?php echo $banner_row; ?>][slider_navigation][<?php echo $language['language_id']; ?>]" value="0" />
                                                    <?php echo $text_no; ?>
                                                  </label>
                                                  <?php } else { ?>
                                                  <label class="radio-inline">
                                                    <input type="radio" name="group_tab[<?php echo $group_row; ?>][banner_image][<?php echo $banner_row; ?>][slider_navigation][<?php echo $language['language_id']; ?>]" value="1" />
                                                    <?php echo $text_yes; ?>
                                                  </label>
                                                  <label class="radio-inline">
                                                    <input type="radio" name="group_tab[<?php echo $group_row; ?>][banner_image][<?php echo $banner_row; ?>][slider_navigation][<?php echo $language['language_id']; ?>]" value="0" checked="checked" />
                                                    <?php echo $text_no; ?>
                                                  </label>
                                                  <?php } ?>
                                                </div>
                                              </div>
                                              <div class="form-group">
                                                <label class="col-sm-3 control-label"><?php echo $text_carousel_pagination; ?></label>
                                                <div class="col-sm-9">
                                                  <?php if (isset($banner_image['slider_pagination'][$language['language_id']]) && $banner_image['slider_pagination'][$language['language_id']] =='1') { ?>
                                                  <label class="radio-inline">
                                                    <input type="radio" name="group_tab[<?php echo $group_row; ?>][banner_image][<?php echo $banner_row; ?>][slider_pagination][<?php echo $language['language_id']; ?>]" value="1" checked="checked" />
                                                    <?php echo $text_yes; ?>
                                                  </label>
                                                  <label class="radio-inline">
                                                    <input type="radio" name="group_tab[<?php echo $group_row; ?>][banner_image][<?php echo $banner_row; ?>][slider_pagination][<?php echo $language['language_id']; ?>]" value="0" />
                                                    <?php echo $text_no; ?>
                                                  </label>
                                                  <?php } else { ?>
                                                  <label class="radio-inline">
                                                    <input type="radio" name="group_tab[<?php echo $group_row; ?>][banner_image][<?php echo $banner_row; ?>][slider_pagination][<?php echo $language['language_id']; ?>]" value="1" />
                                                    <?php echo $text_yes; ?>
                                                  </label>
                                                  <label class="radio-inline">
                                                    <input type="radio" name="group_tab[<?php echo $group_row; ?>][banner_image][<?php echo $banner_row; ?>][slider_pagination][<?php echo $language['language_id']; ?>]" value="0" checked="checked" />
                                                    <?php echo $text_no; ?>
                                                  </label>
                                                  <?php } ?>
                                                </div>
                                              </div>
                                              <div class="form-group">
                                                <label class="col-sm-3 control-label"><?php echo $text_carousel_loop; ?></label>
                                                <div class="col-sm-9">
                                                  <?php if (isset($banner_image['slider_loop'][$language['language_id']]) && $banner_image['slider_loop'][$language['language_id']] =='1') { ?>
                                                  <label class="radio-inline">
                                                    <input type="radio" name="group_tab[<?php echo $group_row; ?>][banner_image][<?php echo $banner_row; ?>][slider_loop][<?php echo $language['language_id']; ?>]" value="1" checked="checked" />
                                                    <?php echo $text_yes; ?>
                                                  </label>
                                                  <label class="radio-inline">
                                                    <input type="radio" name="group_tab[<?php echo $group_row; ?>][banner_image][<?php echo $banner_row; ?>][slider_loop][<?php echo $language['language_id']; ?>]" value="0" />
                                                    <?php echo $text_no; ?>
                                                  </label>
                                                  <?php } else { ?>
                                                  <label class="radio-inline">
                                                    <input type="radio" name="group_tab[<?php echo $group_row; ?>][banner_image][<?php echo $banner_row; ?>][slider_loop][<?php echo $language['language_id']; ?>]" value="1" />
                                                    <?php echo $text_yes; ?>
                                                  </label>
                                                  <label class="radio-inline">
                                                    <input type="radio" name="group_tab[<?php echo $group_row; ?>][banner_image][<?php echo $banner_row; ?>][slider_loop][<?php echo $language['language_id']; ?>]" value="0" checked="checked" />
                                                    <?php echo $text_no; ?>
                                                  </label>
                                                  <?php } ?>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $button_close; ?></button>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div id="slider-wrapper-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>">
                                        <?php if (isset($banner_image['image_slider'][$language['language_id']])) { ?>
                                        <?php foreach ($banner_image['image_slider'][$language['language_id']] as $slider_item) { ?>
                                        <div class="slider-block slider-block-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>-item<?php echo $slider_item_row; ?>">
                                          <div class="slide-panel-heading">
                                            <i class="fa fa-arrows handle handle-slider"></i>
                                            <a data-toggle="collapse" href="#slide<?php echo $slider_item_row; ?>-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>">
                                              <?php if (isset($slider_item['title_slide']) && $slider_item['title_slide'] !='') { ?>
                                              <?php echo $slider_item['title_slide']; ?>
                                              <?php } else { ?>
                                              <?php echo $entry_slide; ?> - <?php echo $slider_item_row; ?> 
                                              <?php } ?>
                                            </a>
                                            <div class="slide-button">
                                              <i class="fa fa-pencil" data-tooltip="tooltip" title="<?php echo $button_edit; ?>" data-toggle="collapse" data-target="#slide<?php echo $slider_item_row; ?>-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>"></i>
                                              <i class="fa fa-life-ring hidden" data-target="#modal-decor-slide<?php echo $slider_item_row; ?>-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>" data-toggle="modal" data-tooltip="tooltip" title="<?php echo $button_decor; ?>"></i>
                                              <label>
                                                <?php if (isset($slider_item['status']) && $slider_item['status'] =='1') { ?>
                                                <i onclick="$(this).toggleClass('slide-on slide-off');" class="fa fa-power-off slide-on" data-tooltip="tooltip" title="<?php echo $button_status; ?>"></i>
                                                <input type="checkbox" name="group_tab[<?php echo $group_row; ?>][banner_image][<?php echo $banner_row; ?>][image_slider][<?php echo $language['language_id']; ?>][<?php echo $slider_item_row; ?>][status]" value="1" checked="checked" id="slide-status-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>-item<?php echo $slider_item_row; ?>" />
                                                <?php } else { ?>
                                                <i onclick="$(this).toggleClass('slide-on slide-off');" class="fa fa-power-off slide-off" data-tooltip="tooltip" title="<?php echo $button_status; ?>"></i>
                                                <input type="checkbox" name="group_tab[<?php echo $group_row; ?>][banner_image][<?php echo $banner_row; ?>][image_slider][<?php echo $language['language_id']; ?>][<?php echo $slider_item_row; ?>][status]" value="1" id="islide-status-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>-item<?php echo $slider_item_row; ?>" />
                                                <?php } ?>
                                              </label>
                                              <i class="fa fa-trash-o" data-toggle="tooltip" title="<?php echo $button_remove; ?>" onclick="$(this).parent().parent().parent().remove();"></i>
                                            </div>
                                          </div>
                                          <div id="modal-decor-slide<?php echo $slider_item_row; ?>-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>" class="modal fade">
                                            <div class="modal-dialog modal-lg">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                  <h4 class="modal-title"><?php echo $button_decor; ?> [<?php echo $entry_slide; ?> - <?php echo $slider_item_row; ?>]</h4>
                                                </div>
                                                <div class="modal-body">
                                                  <?php echo $text_decor_development; ?>
                                                </div>
                                                <div class="modal-footer">
                                                  <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div id="slide<?php echo $slider_item_row; ?>-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>" class="panel-collapse collapse">
                                            <div class="slide-panel-body">
                                              <div class="form-group">
                                                <label class="col-sm-2 control-label" for="input-image-slide-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>"><?php echo $entry_thumb; ?></label>
                                                <div class="col-sm-10">                                                                                                                                                        
                                                  <a href="" id="thumb-image-slide-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>-item<?php echo $slider_item_row; ?>" data-toggle="image" class="img-thumbnail"><img src="<?php echo $slider_item['thumb_slide']; ?>" alt="" title="" data-placeholder="<?php echo $placeholder; ?>" /></a>
                                                  <input type="hidden" name="group_tab[<?php echo $group_row; ?>][banner_image][<?php echo $banner_row; ?>][image_slider][<?php echo $language['language_id']; ?>][<?php echo $slider_item_row; ?>][image_slide]" value="<?php echo isset($slider_item['image_slide']) ? $slider_item['image_slide'] : ''; ?>" id="input-image-slide-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>-item<?php echo $slider_item_row; ?>" />
                                                </div>
                                              </div>
                                              <div class="form-group">
                                                <label class="col-sm-2 control-label" for="input-slider-item-title-slide-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>-item<?php echo $slider_item_row; ?>"><?php echo $entry_title; ?></label>
                                                <div class="col-sm-10">
                                                  <input type="text" name="group_tab[<?php echo $group_row; ?>][banner_image][<?php echo $banner_row; ?>][image_slider][<?php echo $language['language_id']; ?>][<?php echo $slider_item_row; ?>][title_slide]" value="<?php echo isset($slider_item['title_slide']) ? $slider_item['title_slide'] : ''; ?>" id="input-slider-item-title-slide-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>-item<?php echo $slider_item_row; ?>" placeholder="<?php echo $entry_title; ?>" class="form-control" />
                                                </div> 
                                              </div>
                                              <div class="form-group">
                                                <label class="col-sm-2 control-label" for="input-slider-item-alt-slide-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>-item<?php echo $slider_item_row; ?>"><?php echo $entry_alt; ?></label>
                                                <div class="col-sm-10">
                                                  <input type="text" name="group_tab[<?php echo $group_row; ?>][banner_image][<?php echo $banner_row; ?>][image_slider][<?php echo $language['language_id']; ?>][<?php echo $slider_item_row; ?>][alt_slide]" value="<?php echo isset($slider_item['alt_slide']) ? $slider_item['alt_slide'] : ''; ?>" id="input-slider-item-alt-slide-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>-item<?php echo $slider_item_row; ?>" placeholder="<?php echo $entry_alt; ?>" class="form-control" />
                                                </div> 
                                              </div>
                                              <div class="form-group">
                                                <label class="col-sm-2 control-label"><?php echo $entry_title_banner; ?></label>
                                                <div class="col-sm-10">
                                                  <?php if (isset($slider_item['title_slide_show']) && $slider_item['title_slide_show'] == '1') { ?>
                                                  <label class="radio-inline">
                                                    <input type="radio" name="group_tab[<?php echo $group_row; ?>][banner_image][<?php echo $banner_row; ?>][image_slider][<?php echo $language['language_id']; ?>][<?php echo $slider_item_row; ?>][title_slide_show]" value="1" checked="checked" />
                                                    <?php echo $text_yes; ?>
                                                  </label>
                                                  <label class="radio-inline">
                                                    <input type="radio" name="group_tab[<?php echo $group_row; ?>][banner_image][<?php echo $banner_row; ?>][image_slider][<?php echo $language['language_id']; ?>][<?php echo $slider_item_row; ?>][title_slide_show]" value="0" />
                                                    <?php echo $text_no; ?>
                                                  </label>
                                                  <?php } else { ?>
                                                  <label class="radio-inline">
                                                    <input type="radio" name="group_tab[<?php echo $group_row; ?>][banner_image][<?php echo $banner_row; ?>][image_slider][<?php echo $language['language_id']; ?>][<?php echo $slider_item_row; ?>][title_slide_show]" value="1" />
                                                    <?php echo $text_yes; ?>
                                                  </label>
                                                  <label class="radio-inline">
                                                    <input type="radio" name="group_tab[<?php echo $group_row; ?>][banner_image][<?php echo $banner_row; ?>][image_slider][<?php echo $language['language_id']; ?>][<?php echo $slider_item_row; ?>][title_slide_show]" value="0" checked="checked" />
                                                    <?php echo $text_no; ?>
                                                  </label>
                                                  <?php } ?>
                                                </div>
                                              </div>
                                              <div class="form-group">
                                                <label class="col-sm-2 control-label" for="input-slide-text-align-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>-item<?php echo $slider_item_row; ?>"><?php echo $entry_text_align; ?></label>
                                                <div class="col-sm-10">
                                                  <select name="group_tab[<?php echo $group_row; ?>][banner_image][<?php echo $banner_row; ?>][image_slider][<?php echo $language['language_id']; ?>][<?php echo $slider_item_row; ?>][title_slide_align]" class="form-control">
                                                    <option value=""><?php echo $text_select; ?></option>
                                                    <option value="left" <?php if (isset($slider_item['title_slide_align']) && $slider_item['title_slide_align'] == 'left') { echo 'selected="selected"'; } ?>><?php echo $text_align_left; ?></option>                     
                                                    <option value="center" <?php if (isset($slider_item['title_slide_align']) && $slider_item['title_slide_align'] == 'center') { echo 'selected="selected"'; } ?>><?php echo $text_align_center; ?></option>                     
                                                    <option value="right" <?php if (isset($slider_item['title_slide_align']) && $slider_item['title_slide_align'] == 'right') { echo 'selected="selected"'; } ?>><?php echo $text_align_right; ?></option>                     
                                                  </select>
                                                </div>
                                              </div>
                                              <div class="form-group">
                                                <label class="col-sm-2 control-label" for="input-slide-link-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>-item<?php echo $slider_item_row; ?>"><?php echo $entry_link; ?></label>
                                                <div class="col-sm-10">
                                                  <input type="text" name="group_tab[<?php echo $group_row; ?>][banner_image][<?php echo $banner_row; ?>][image_slider][<?php echo $language['language_id']; ?>][<?php echo $slider_item_row; ?>][link_slide]" value="<?php echo isset($slider_item['link_slide']) ? $slider_item['link_slide'] : ''; ?>" id="input-slide-link-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>-item<?php echo $slider_item_row; ?>" placeholder="<?php echo $entry_link; ?>" class="form-control" />
                                                </div>
                                              </div>  
                                              <div class="form-group">
                                                <label class="col-sm-2 control-label"><?php echo $entry_link_video; ?></label>
                                                <div class="col-sm-10">
                                                  <?php if (isset($slider_item['link_slide_video']) && $slider_item['link_slide_video'] == '1') { ?>
                                                  <label class="radio-inline">
                                                    <input type="radio" name="group_tab[<?php echo $group_row; ?>][banner_image][<?php echo $banner_row; ?>][image_slider][<?php echo $language['language_id']; ?>][<?php echo $slider_item_row; ?>][link_slide_video]" value="1" checked="checked" />
                                                    <?php echo $text_yes; ?>
                                                  </label>
                                                  <label class="radio-inline">
                                                    <input type="radio" name="group_tab[<?php echo $group_row; ?>][banner_image][<?php echo $banner_row; ?>][image_slider][<?php echo $language['language_id']; ?>][<?php echo $slider_item_row; ?>][link_slide_video]" value="0" />
                                                    <?php echo $text_no; ?>
                                                  </label>
                                                  <?php } else { ?>
                                                  <label class="radio-inline">
                                                    <input type="radio" name="group_tab[<?php echo $group_row; ?>][banner_image][<?php echo $banner_row; ?>][image_slider][<?php echo $language['language_id']; ?>][<?php echo $slider_item_row; ?>][link_slide_video]" value="1" />
                                                    <?php echo $text_yes; ?>
                                                  </label>
                                                  <label class="radio-inline">
                                                    <input type="radio" name="group_tab[<?php echo $group_row; ?>][banner_image][<?php echo $banner_row; ?>][image_slider][<?php echo $language['language_id']; ?>][<?php echo $slider_item_row; ?>][link_slide_video]" value="0" checked="checked" />
                                                    <?php echo $text_no; ?>
                                                  </label>
                                                  <?php } ?>
                                                </div>
                                              </div>
                                              <div class="form-group">
                                                <label class="col-sm-2 control-label" for="input-slide-link-video-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>-item<?php echo $slider_item_row; ?>"><?php echo $entry_modal; ?></label>
                                                <div class="col-sm-10">
                                                  <select name="group_tab[<?php echo $group_row; ?>][banner_image][<?php echo $banner_row; ?>][image_slider][<?php echo $language['language_id']; ?>][<?php echo $slider_item_row; ?>][link_slide_video_modal]" id="input-slide-link-video-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>-item<?php echo $slider_item_row; ?>" class="form-control">
                                                    <option value="self" <?php if (isset($slider_item['link_slide_video_modal']) && $slider_item['link_slide_video_modal'] == 'self') { echo 'selected="selected"'; } ?>><?php echo $text_self; ?></option>                     
                                                    <option value="blank" <?php if (isset($slider_item['link_slide_video_modal']) && $slider_item['link_slide_video_modal'] == 'blank') { echo 'selected="selected"'; } ?>><?php echo $text_target; ?></option>                     
                                                    <option value="modal" <?php if (isset($slider_item['link_slide_video_modal']) && $slider_item['link_slide_video_modal'] == 'modal') { echo 'selected="selected"'; } ?>><?php echo $text_modal; ?></option>                     
                                                  </select>
                                                </div>
                                              </div>
                                              <div class="form-group">
                                                <label class="col-sm-2 control-label"><?php echo $entry_banner_desc_show; ?></label>
                                                <div class="col-sm-10">
                                                  <?php if (isset($slider_item['link_slide_video']) && $slider_item['desc_slide_show'] == '1') { ?>
                                                  <label class="radio-inline">
                                                    <input type="radio" name="group_tab[<?php echo $group_row; ?>][banner_image][<?php echo $banner_row; ?>][image_slider][<?php echo $language['language_id']; ?>][<?php echo $slider_item_row; ?>][desc_slide_show]" value="1" checked="checked" />
                                                    <?php echo $text_yes; ?>
                                                  </label>
                                                  <label class="radio-inline">
                                                    <input type="radio" name="group_tab[<?php echo $group_row; ?>][banner_image][<?php echo $banner_row; ?>][image_slider][<?php echo $language['language_id']; ?>][<?php echo $slider_item_row; ?>][desc_slide_show]" value="0" />
                                                    <?php echo $text_no; ?>
                                                  </label>
                                                  <?php } else { ?>
                                                  <label class="radio-inline">
                                                    <input type="radio" name="group_tab[<?php echo $group_row; ?>][banner_image][<?php echo $banner_row; ?>][image_slider][<?php echo $language['language_id']; ?>][<?php echo $slider_item_row; ?>][desc_slide_show]" value="1" />
                                                    <?php echo $text_yes; ?>
                                                  </label>
                                                  <label class="radio-inline">
                                                    <input type="radio" name="group_tab[<?php echo $group_row; ?>][banner_image][<?php echo $banner_row; ?>][image_slider][<?php echo $language['language_id']; ?>][<?php echo $slider_item_row; ?>][desc_slide_show]" value="0" checked="checked" />
                                                    <?php echo $text_no; ?>
                                                  </label>
                                                  <?php } ?>
                                                </div>
                                              </div>
                                              <div class="form-group">
                                                <label class="col-sm-2 control-label" for="input-slide-desc-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>-item<?php echo $slider_item_row; ?>"><?php echo $text_description; ?></label>
                                                <div class="col-sm-10">
                                                  <textarea class="form-control <?php echo ($slider_item['editor']) ? 'show-editor' : 'hide-editor'; ?>" name="group_tab[<?php echo $group_row; ?>][banner_image][<?php echo $banner_row; ?>][image_slider][<?php echo $language['language_id']; ?>][<?php echo $slider_item_row; ?>][desc_slide]" rows="5" placeholder="<?php echo $text_description; ?>" id="input-slide-desc-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>-item<?php echo $slider_item_row; ?>" data-lang="<?php echo $lang; ?>"><?php echo isset($slider_item['desc_slide']) ? $slider_item['desc_slide'] : ''; ?></textarea>
                                                  <a class="check-ckeditor check-ckeditor-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>-item<?php echo $slider_item_row; ?>"><?php echo ($slider_item['editor']) ? $text_hide_editor : $text_show_editor; ?></a>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <?php $slider_item_row++; ?>
                                        <?php } ?>
                                        <?php } ?>
                                      </div>
                                    </div>
                                    <!-- end Setting Slider -->
                                  </div>
                                  <?php } ?>
                                </div>
                              </div>
                              <?php $banner_row++; ?>
                              <?php } ?>
                              <?php } ?>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- end Banner setting -->
                    </div>
                  </div>
                  <?php $group_row++; ?>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-access-module">
            <div class="row">
              <div class="col-sm-2" id="vtabs-access">
                <ul id="access-module" class="nav nav-pills nav-stacked">
                  <li class="active"><a href="#access-store" data-toggle="tab"><?php echo $entry_store; ?></a></li>
                  <li><a href="#access-customer-groups" data-toggle="tab"><?php echo $entry_customer_groups; ?></a></li>
                  <li><a href="#access-category" data-toggle="tab"><?php echo $entry_category; ?></a></li>
                  <li><a href="#access-product" data-toggle="tab"><?php echo $entry_product; ?></a></li>
                  <li><a href="#access-manufacturer" data-toggle="tab"><?php echo $entry_manufacturer; ?></a></li>
                </ul>
              </div>
              <div class="col-sm-10">
                <div class="tab-content">
                  <div class="tab-pane active" id="access-store"> 
                    <div class="form-group">
                      <div class="col-sm-12">
                        <div class="well well-sm" style="min-height: 150px; max-height: 500px; overflow: auto; margin-bottom: 10px;">
                          <div class="checkbox">
                            <label>
                              <?php if (in_array(0, $ocdbanner_store)) { ?>
                              <input type="checkbox" name="ocdbanner_store[]" value="0" checked="checked" />
                              <?php echo $text_default; ?>
                              <?php } else { ?>
                              <input type="checkbox" name="ocdbanner_store[]" value="0" />
                              <?php echo $text_default; ?>
                              <?php } ?>
                            </label>
                          </div>
                          <?php foreach ($stores as $store) { ?>
                          <div class="checkbox">
                            <label>
                              <?php if (in_array($store['store_id'], $ocdbanner_store)) { ?>
                              <input type="checkbox" name="ocdbanner_store[]" value="<?php echo $store['store_id']; ?>" checked="checked" />
                              <?php echo $store['name']; ?>
                              <?php } else { ?>
                              <input type="checkbox" name="ocdbanner_store[]" value="<?php echo $store['store_id']; ?>" <?php if (!isset($ocdbanner_store)) { ?>checked="checked"<?php } ?> />
                              <?php echo $store['name']; ?>
                              <?php } ?>
                            </label>
                          </div>
                          <?php } ?>
                        </div>
                        <a onclick="$(this).parent().find(':checkbox').prop('checked', true);" class="select-all"><?php echo $text_select_all; ?></a> | <a onclick="$(this).parent().find(':checkbox').prop('checked', false);" class="unselect-all"><?php echo $text_unselect_all; ?></a>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane" id="access-customer-groups"> 
                    <div class="form-group">
                      <div class="col-sm-12">
                        <div class="well well-sm" style="min-height: 150px; max-height: 500px; overflow: auto; margin-bottom: 10px;">
                          <?php foreach ($customer_groups as $customer_group) { ?>
                          <div class="checkbox">
                            <label>
                              <?php if (!isset($ocdbanner_customer_group) || in_array($customer_group['customer_group_id'], $ocdbanner_customer_group)) { ?>
                              <input type="checkbox" name="ocdbanner_customer_group[]" value="<?php echo $customer_group['customer_group_id']; ?>" checked="checked" />
                              <?php echo $customer_group['name']; ?>
                              <?php } else { ?>
                              <input type="checkbox" name="ocdbanner_customer_group[]" value="<?php echo $customer_group['customer_group_id']; ?>" />
                              <?php echo $customer_group['name']; ?>
                              <?php } ?>
                            </label>
                          </div> 
                          <?php } ?>
                        </div>
                        <a onclick="$(this).parent().find(':checkbox').prop('checked', true);" class="select-all"><?php echo $text_select_all; ?></a> | <a onclick="$(this).parent().find(':checkbox').prop('checked', false);" class="unselect-all"><?php echo $text_unselect_all; ?></a>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane" id="access-category"> 
                    <div class="form-group">
                      <div class="col-sm-12">
                        <div class="well well-sm" style="min-height: 150px; max-height: 500px; overflow: auto; margin-bottom: 10px;">
                          <table class="table table-striped">
                            <?php foreach ($categories as $category) { ?>
                            <tr>
                              <td class="checkbox">
                                <label>
                                  <?php if (in_array($category['category_id'], $ocdbanner_category)) { ?>
                                  <input type="checkbox" name="ocdbanner_category[]" value="<?php echo $category['category_id']; ?>" checked="checked" />
                                  <?php echo $category['name']; ?>
                                  <?php } else { ?>
                                  <input type="checkbox" name="ocdbanner_category[]" value="<?php echo $category['category_id']; ?>" />
                                  <?php echo $category['name']; ?>
                                  <?php } ?>
                                </label>
                              </td>
                            </tr>
                            <?php } ?>
                          </table>
                        </div>
                        <a onclick="$(this).parent().find(':checkbox').prop('checked', true);" class="select-all"><?php echo $text_select_all; ?></a> | <a onclick="$(this).parent().find(':checkbox').prop('checked', false);" class="unselect-all"><?php echo $text_unselect_all; ?></a>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane" id="access-product"> 
                    <div class="form-group">
                      <div class="col-sm-12">
                        <input type="text" name="product_name" value="" placeholder="<?php echo $entry_product_placeholder; ?>" id="input-product" class="form-control" />
                        <div id="featured-product" class="well well-sm" style="min-height: 150px; max-height: 500px; overflow: auto;">
                          <?php foreach ($products as $product) { ?>
                          <div id="featured-product<?php echo $product['product_id']; ?>"><i class="fa fa-minus-circle"></i> <?php echo $product['name']; ?>
                            <input type="hidden" name="ocdbanner_product[]" value="<?php echo $product['product_id']; ?>" />
                          </div>
                          <?php } ?>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane" id="access-manufacturer"> 
                    <div class="form-group">
                      <div class="col-sm-12">
                        <div class="well well-sm" style="min-height: 150px; max-height: 500px; overflow: auto; margin-bottom: 10px;">
                          <table class="table table-striped">
                            <?php foreach ($manufacturers as $manufacturer) { ?>
                            <tr>
                              <td class="checkbox">
                                <label>
                                  <?php if (in_array($manufacturer['manufacturer_id'], $ocdbanner_manufacturer)) { ?>
                                  <input type="checkbox" name="ocdbanner_manufacturer[]" value="<?php echo $manufacturer['manufacturer_id']; ?>" checked="checked" />
                                  <?php echo $manufacturer['name']; ?>
                                  <?php } else { ?>
                                  <input type="checkbox" name="ocdbanner_manufacturer[]" value="<?php echo $manufacturer['manufacturer_id']; ?>" />
                                  <?php echo $manufacturer['name']; ?>
                                  <?php } ?>
                                </label>
                              </td>
                            </tr>
                            <?php } ?>
                          </table>
                        </div>
                        <a onclick="$(this).parent().find(':checkbox').prop('checked', true);" class="select-all"><?php echo $text_select_all; ?></a> | <a onclick="$(this).parent().find(':checkbox').prop('checked', false);" class="unselect-all"><?php echo $text_unselect_all; ?></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-css">
            <div class="form-group">
              <label class="col-sm-2 control-label" for="input-css"><?php echo $tab_css; ?></label>
              <div class="col-sm-10">
                <textarea class="form-control" name="css" id="input-css"><?php echo isset($css) ? $css : ''; ?></textarea>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-support">
            <div class="form-group">
              <label class="col-sm-2 control-label"><?php echo $entry_license_key; ?></label>
              <div class="col-sm-10">
                <input type="text" name="ocdbanner_license" value="<?php echo $ocdbanner_license; ?>" class="form-control" />
              </div>
            </div>
            <fieldset class="developer">
              <legend><?php echo $entry_dev_info; ?></legend>
              <div>
                <div class="developer-info">
                  <div class="row">
                    <div class="col-sm-3 title"><?php echo $entry_dev_name; ?></div>
                    <div class="col-sm-6 text"><?php echo $text_dev_name; ?></div>
                  </div>
                </div>
                <div class="developer-info">
                  <div class="row">
                    <div class="col-sm-3 title"><?php echo $entry_dev_mail; ?></div>
                    <div class="col-sm-6 text"><?php echo $text_dev_mail; ?></div>
                  </div>
                </div>
              </div>
            </fieldset>
          </div>
        </div>
      </form>
      <?php } else { ?>
      <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" id="form-ocdbanner-license" class="form-horizontal">
        <div class="form-group">
          <label class="col-sm-2 control-label"><?php echo $entry_license_key; ?></label>
          <div class="col-sm-10">
            <input type="text" name="ocdbanner_license" value="<?php echo $ocdbanner_license; ?>" class="form-control" />
          </div>
        </div>
      </form>
      <?php } ?>
    </div> 
      
    <?php //echo '<pre>'; print_r($group_tabs); echo '</pre>'; ?>
      
    <div class="powered well well-sm"><?php echo $text_powered; ?></div>
  </div>
</div>
<?php if ($ocdbanner_license) { ?>
<script type="text/javascript"><!--
var group_row = <?php echo $group_row; ?>;

function addGroup(){
	html  = '<div class="tab-pane" id="tab-group' + group_row + '">';

  html += '  <ul class="nav nav-tabs" id="settings-group' + group_row + '">';
  html += '    <li class="active"><a href="#tab-general-setting-group' + group_row + '" data-toggle="tab"><?php echo $text_tab_setting; ?></a></li>';
  html += '    <li><a href="#tab-setting-banners-group' + group_row + '" data-toggle="tab"><?php echo $text_banners; ?></a></li>';
  html += '  </ul>';
  html += '  <div class="tab-content">';
  
  /* === Group Setting === */
  html += '    <div class="tab-pane active" id="tab-general-setting-group' + group_row + '">';
  html += '      <div class="form-group">';
  html += '        <label class="col-sm-2 control-label" for="input-group-status-' + group_row + '"><?php echo $entry_status; ?></label>';
  html += '        <div class="col-sm-10">';
  html += '          <select name="group_tab[' + group_row + '][status]" id="input-group-status-' + group_row + '" class="form-control">';
  html += '            <option value="1" selected="selected"><?php echo $text_enabled; ?></option>';
  html += '            <option value="0"><?php echo $text_disabled; ?></option>';
  html += '          </select>';
  html += '        </div>';
  html += '      </div>';
  html += '      <div class="form-group">';
  html += '        <label class="col-sm-2 control-label"><?php echo $entry_title_group; ?></label>';
  html += '        <div class="col-sm-10">';
  <?php foreach ($languages as $language) { ?>
  html += '          <div class="input-group" style="margin-bottom: 10px;">';
  html += '            <span class="input-group-addon"><img src="language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png" title="<?php echo $language['name']; ?>" /></span>';
  html += '            <input type="text" name="group_tab[' + group_row + '][title_group][<?php echo $language['language_id']; ?>]" value="" id="input-name-front-group' + group_row + '-language<?php echo $language['language_id']; ?>" class="form-control" />';
  html += '          </div>';
  <?php } ?>
  html += '        </div>';                                                                                                                               
  html += '      </div> '; 
  html += '      <div class="form-group">';
  html += '        <label class="col-sm-2 control-label"><?php echo $text_title_group_front; ?></label>';
  html += '        <div class="col-sm-10">';
  html += '          <label class="radio-inline">';
  html += '            <input type="radio" name="group_tab[' + group_row + '][title_group_front]" value="1" />';
  html += '            <?php echo $text_yes; ?>';
  html += '          </label>';
  html += '          <label class="radio-inline">';
  html += '            <input type="radio" name="group_tab[' + group_row + '][title_group_front]" value="0" checked="checked" />';
  html += '            <?php echo $text_no; ?>';
  html += '          </label>';
  html += '        </div>';
  html += '      </div>';
  html += '      <div class="form-group">';
  html += '        <label class="col-sm-2 control-label" for="input-mode-group' + group_row + '"><span data-toggle="tooltip" title="<?php echo $help_hidden_setting; ?>"><?php echo $entry_mode; ?></span></label>';
  html += '        <div class="col-sm-10">';
  html += '          <select name="group_tab[' + group_row + '][mode]" id="input-mode-group' + group_row + '" class="form-control">';
  html += '            <option value="grid"><?php echo $text_mode_grid; ?></option>';                     
  html += '            <option value="carousel"><?php echo $text_mode_carousel; ?></option>';  
  html += '            <option value="respgrid"><?php echo $text_mode_resp_grid; ?></option>';                     
  html += '          </select>';
  html += '        </div>';
  html += '      </div>';   
  html += '      <div class="form-group block-rows-group' + group_row + '" style="display:none;">';
  html += '        <label class="col-sm-2 control-label" for="input-rows-group' + group_row + '"><?php echo $entry_rows; ?></label>';
  html += '        <div class="col-sm-10">';
  html += '          <select name="group_tab[' + group_row + '][rows]" id="input-rows-group' + group_row + '" class="form-control">';
  html += '            <option value=""><?php echo $text_select; ?></option>';                     
  html += '            <option value="1"><?php echo $text_one_rows; ?></option>';                     
  html += '            <option value="2"><?php echo $text_two_rows; ?></option>';                     
  html += '            <option value="3"><?php echo $text_three_rows; ?></option>';                     
  html += '            <option value="4"><?php echo $text_four_rows; ?></option>';                     
  html += '            <option value="6"><?php echo $text_six_rows; ?></option>';                     
  html += '          </select>';
  html += '        </div>';
  html += '      </div>';   
  html += '      <div class="block-carousel-group' + group_row + '" style="display:none;">';  
  html += '        <div class="form-group">';
  html += '          <label class="col-sm-2 control-label"><?php echo $text_carousel_autoplay; ?></label>';
  html += '          <div class="col-sm-2">';
  html += '            <label class="radio-inline">';
  html += '              <input type="radio" name="group_tab[' + group_row + '][carousel_autoplay]" value="1" />';
  html += '              <?php echo $text_yes; ?>';
  html += '            </label>';
  html += '            <label class="radio-inline">';
  html += '              <input type="radio" name="group_tab[' + group_row + '][carousel_autoplay]" value="0" checked="checked" />';
  html += '              <?php echo $text_no; ?>';
  html += '            </label>';
  html += '          </div>';
  html += '          <label class="col-sm-4 control-label" for="carousel-autoplay-speed-group' + group_row + '"><?php echo $text_carousel_autoplay_speed; ?></label>';
  html += '          <div class="col-sm-2">';
  html += '            <input type="text" name="group_tab[' + group_row + '][carousel_autoplay_speed]" value="" id="carousel-autoplay-speed-group' + group_row + '" class="form-control" />';
  html += '          </div>';
  html += '        </div>';  
  html += '        <div class="form-group">';
  html += '          <label class="col-sm-2 control-label"><?php echo $text_carousel_navigation; ?></label>';
  html += '          <div class="col-sm-2">';
  html += '            <label class="radio-inline">';
  html += '              <input type="radio" name="group_tab[' + group_row + '][carousel_navigation]" value="1" />';
  html += '              <?php echo $text_yes; ?>';
  html += '            </label>';
  html += '            <label class="radio-inline">';
  html += '              <input type="radio" name="group_tab[' + group_row + '][carousel_navigation]" value="0" checked="checked" />';
  html += '              <?php echo $text_no; ?>';
  html += '            </label>';
  html += '          </div>';
  html += '        </div>';  
  html += '        <div class="form-group">';
  html += '          <label class="col-sm-2 control-label"><?php echo $text_carousel_pagination; ?></label>';
  html += '          <div class="col-sm-10">';
  html += '            <label class="radio-inline">';
  html += '              <input type="radio" name="group_tab[' + group_row + '][carousel_pagination]" value="1" />';
  html += '              <?php echo $text_yes; ?>';
  html += '            </label>';
  html += '            <label class="radio-inline">';
  html += '              <input type="radio" name="group_tab[' + group_row + '][carousel_pagination]" value="0" checked="checked" />';
  html += '              <?php echo $text_no; ?>';
  html += '            </label>';
  html += '          </div>';
  html += '        </div>'; 
  html += '        <div class="form-group">';
  html += '          <label class="col-sm-2 control-label"><?php echo $text_carousel_loop; ?></label>';
  html += '          <div class="col-sm-2">';
  html += '            <label class="radio-inline">';
  html += '              <input type="radio" name="group_tab[' + group_row + '][carousel_loop]" value="1" />';
  html += '              <?php echo $text_yes; ?>';
  html += '            </label>';
  html += '            <label class="radio-inline">';
  html += '              <input type="radio" name="group_tab[' + group_row + '][carousel_loop]" value="0" checked="checked" />';
  html += '              <?php echo $text_no; ?>';
  html += '            </label>';
  html += '          </div>';
  html += '        </div>';  
  html += '        <div class="form-group">';
  html += '          <label class="col-sm-2 control-label"><?php echo $entry_limit_carousel; ?></label>';
  html += '          <div class="col-sm-10">';
  html += '            <div class="alert alert-info">';
  html += '              <svg class="alert-icon-img" width="36" height="36" viewBox="0 0 36 36" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M18 0.5C8.33502 0.5 0.5 8.33502 0.5 18C0.5 27.665 8.33502 35.5 18 35.5C27.665 35.5 35.5 27.665 35.5 18C35.5 13.3587 33.6563 8.90752 30.3744 5.62563C27.0925 2.34374 22.6413 0.5 18 0.5ZM18 32C10.268 32 4 25.732 4 18C4 10.268 10.268 4 18 4C25.732 4 32 10.268 32 18C32 21.713 30.525 25.274 27.8995 27.8995C25.274 30.525 21.713 32 18 32ZM18.875 10.2959C19.3582 10.2959 19.75 10.6877 19.75 11.1709V12.9209C19.75 13.4042 19.3582 13.7959 18.875 13.7959H17.125C16.6418 13.7959 16.25 13.4042 16.25 12.9209V11.1709C16.25 10.6877 16.6418 10.2959 17.125 10.2959H18.875ZM18.875 15.5459C19.3582 15.5459 19.75 15.6301 19.75 16.3303V23.5349C20.2149 23.6643 20.6785 23.7769 21.081 23.8655C21.3254 23.9193 21.5017 24.1342 21.5017 24.3845V25.1791C21.5017 25.469 21.2667 25.7041 20.9767 25.7041H15.025C14.7351 25.7041 14.5 25.469 14.5 25.1791V24.3845C14.5 24.1342 14.6763 23.9193 14.9207 23.8655C15.3227 23.777 15.7857 23.6646 16.25 23.5353V17.7147C15.7857 17.5854 15.3227 17.473 14.9207 17.3845C14.6763 17.3307 14.5 17.1158 14.5 16.8655V16.0709C14.5 15.781 14.7351 15.5459 15.025 15.5459L18.875 15.5459Z"></path></svg>';
  html += '              <?php echo $help_limit_carousel; ?>';
  html += '            </div>';
  html += '            <div class="table-responsive">';
  html += '              <table id="carousel-items-group' + group_row + '" class="table table-striped table-bordered table-hover">';
  html += '                <thead>';
  html += '                  <tr>';
  html += '                    <td class="text-left"><?php echo $entry_window; ?></td>';
  html += '                    <td class="text-left"><?php echo $entry_window_prod_show; ?></td>';
  html += '                    <td class="text-left"><?php echo $text_between; ?></td>';
  html += '                    <td></td>';              
  html += '                  </tr>';                                
  html += '                </thead>';
  html += '                <tbody>';
  html += '                </tbody>';
  html += '                <tfoot>';
  html += '                  <tr>';
  html += '                    <td colspan="3"></td>';
  html += '                    <td class="text-left"><button type="button" onclick="addCarouselItem(' + group_row + ');" data-toggle="tooltip" title="<?php echo $button_add; ?>" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button></td>';
  html += '                  </tr>';
  html += '                </tfoot>';
  html += '              </table>';
  html += '            </div>';
  html += '          </div>';
  html += '        </div>';  
  html += '      </div>';  
  html += '      <div class="block-grid-gutter block-grid-gutter-group' + group_row + '" style="display:none;">';
                      
  // Grid Stack                    
  html += '        <div class="form-group">';
  html += '          <label class="col-sm-2 control-label"><?php echo $entry_grid; ?></label>';
  html += '          <div class="col-sm-10">';
  html += '            <a onClick="addGridElement(' + group_row + '); $(\'.grid-stack-not-el-' + group_row + '\').addClass(\'hidden\');" class="btn btn-success"><?php echo $text_grid_element; ?></a>';
  html += '            <div class="grid-block grid-setting-' + group_row + '">';
  html += '              <div class="grid-stack-not-el grid-stack-not-el-' + group_row + '"><?php echo $text_grid_not_element; ?></div>';
  html += '              <div class="grid-stack grid-stack-group' + group_row + '">';
  html += '              </div>';
  html += '            </div>';
  html += '          </div>';
  html += '        </div>';                    
  // end Grid Stack                    
                      
  html += '        <div class="form-group">';
  html += '          <label class="col-sm-2 control-label"><?php echo $entry_grid_gutter; ?></label>';
  html += '          <div class="col-sm-1">';
  html += '            <input type="text" name="group_tab[' + group_row + '][gutter]" value="" class="form-control" />';
  html += '          </div>';
  html += '          <div class="text-px"><?php echo $text_px; ?></div>';                       
  html += '        </div>';
  html += '        <div class="form-group">';
  html += '          <label class="col-sm-2 control-label breakpoints-label"><span><?php echo $entry_breakpoints; ?></span><a href="#pojasnenie-custom-grid" data-toggle="modal" class="help-breakpoints" target="_blank"><?php echo $help_breakpoints; ?></a></label>';
  html += '          <div class="col-sm-10">';
  html += '            <div class="table-responsive">';
  html += '              <table id="grid-breakpoints-group' + group_row + '" class="table table-striped table-bordered table-hover">';
  html += '                <thead>';
  html += '                  <tr>';
  html += '                    <td class="text-left"><span data-toggle="tooltip" title="<?php echo $help_breakpoints_name; ?>"><?php echo $text_breakpoints_name; ?></span></td>';
  html += '                    <td class="text-left"><span data-toggle="tooltip" title="<?php echo $help_grid_range; ?>"><?php echo $text_grid_range; ?></span></td>';
  html += '                    <td class="text-left"><?php echo $text_grid_column; ?></td>';
  html += '                    <td class="text-left"><?php echo $text_gutter_column; ?></td>';
  html += '                    <td></td>';              
  html += '                  </tr>';                                
  html += '                </thead>';
  html += '                <tbody>';
  html += '                </tbody>';
  html += '                <tfoot>';
  html += '                  <tr>';
  html += '                    <td colspan="4"></td>';
  html += '                    <td class="text-left"><button type="button" onclick="addGridBreakpoints(' + group_row + ');" data-toggle="tooltip" title="<?php echo $button_add; ?>" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button></td>';
  html += '                  </tr>';
  html += '                </tfoot>';
  html += '              </table>';
  html += '            </div>';
  html += '          </div>';
  html += '        </div>';
  html += '        <div class="form-group">';
  html += '          <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="<?php echo $help_width_mobile_image; ?>"><?php echo $entry_width_mobile_image; ?></span></label>';
  html += '          <div class="col-sm-10">';
  html += '            <div class="input-group">';
  html += '              <input type="text" name="group_tab[' + group_row + '][max_width_image_mobile]" value="" class="form-control" />';
  html += '              <div class="input-group-addon"><?php echo $text_px; ?></div>';
  html += '            </div>';
  html += '          </div>';
  html += '        </div>';
  html += '        <div class="form-group">';
  html += '          <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="<?php echo $help_banner_width_mobile; ?>"><?php echo $entry_viewport; ?></span></label>';
  html += '          <div class="col-sm-10">';
  html += '            <label class="radio-inline">';
  html += '              <input type="radio" name="group_tab[' + group_row + '][banner_width_mobile]" value="1" />';
  html += '              <?php echo $text_yes; ?>';
  html += '            </label>';
  html += '            <label class="radio-inline">';
  html += '              <input type="radio" name="group_tab[' + group_row + '][banner_width_mobile]" value="0" checked="checked" />';
  html += '              <?php echo $text_no; ?>';
  html += '            </label>';
  html += '          </div>';
  html += '        </div>';
  html += '      </div>';
  html += '    </div>';
  /* === end Group Setting === */
  
  /* === Banners Setting === */
  html += '    <div class="tab-pane" id="tab-setting-banners-group' + group_row + '">';
  html += '      <div class="form-group block-image-sizes block-image-sizes-group' + group_row + '" style="display:none;">';
  html += '        <label class="col-sm-3 control-label"><?php echo $entry_dimension; ?></label>';
  html += '        <div class="col-sm-9">';
  html += '          <div class="row">';
  html += '            <div class="col-sm-6 image-sizes">';
  html += '              <div class="input-group">';
  html += '                <div class="input-group-addon"><?php echo $entry_width; ?></div>';
  html += '                <input type="text" name="group_tab[' + group_row + '][width_image]" value="" id="input-width-group' + group_row + '" class="form-control" />';
  html += '                <div class="input-group-addon"><?php echo $text_px; ?></div>';
  html += '              </div>';
  html += '            </div>';
  html += '            <div class="col-sm-6 image-sizes">';
  html += '            <div class="input-group">';
  html += '              <div class="input-group-addon"><?php echo $entry_height; ?></div>';
  html += '              <input type="text" name="group_tab[' + group_row + '][height_image]" value="" id="input-height-group' + group_row + '" class="form-control" />';
  html += '              <div class="input-group-addon"><?php echo $text_px; ?></div>';
  html += '            </div>';
  html += '            </div>';
  html += '          </div>';
  html += '        </div>';
  html += '      </div>';
  html += '      <div class="form-group block-image-sizes block-image-sizes-group' + group_row + '" style="display:none;">';
  html += '        <label class="col-sm-3 control-label"><?php echo $entry_dimension_mobile; ?></label>';
  html += '        <div class="col-sm-9">';
  html += '          <div class="row">';
  html += '            <div class="col-sm-6 image-sizes">';
  html += '              <div class="input-group">';
  html += '                <div class="input-group-addon"><?php echo $entry_width; ?></div>';
  html += '                <input type="text" name="group_tab[' + group_row + '][width_image_mobile]" value="" id="input-width-mobile-group' + group_row + '" class="form-control" />';
  html += '                <div class="input-group-addon"><?php echo $text_px; ?></div>';
  html += '              </div>';
  html += '            </div>';
  html += '            <div class="col-sm-6 image-sizes">';
  html += '              <div class="input-group">';
  html += '                <div class="input-group-addon"><?php echo $entry_height; ?></div>';
  html += '                <input type="text" name="group_tab[' + group_row + '][height_image_mobile]" value="" id="input-height-mobile-group' + group_row + '" class="form-control" />';
  html += '                <div class="input-group-addon"><?php echo $text_px; ?></div>';
  html += '              </div>';
  html += '            </div>';
  html += '          </div>';
  html += '        </div>';
  html += '      </div>';
  html += '      <div class="row">';
  html += '        <div class="col-sm-3">';  
  html += '          <ul class="nav nav-pills nav-stacked" id="banner-image-group' + group_row + '">';
	html += '    		     <li class="banner-image-add" id="banner-image-add-group' + group_row + '"><a onclick="addBanner(' + group_row + ');"><i class="fa fa-plus-circle"></i> <?php echo $text_add_banner; ?></a></li>';
  html += '    	     </ul>';
  html += '        </div>';  
  html += '        <div class="col-sm-9">';
  html += '          <div class="tab-content">';
  html += '          </div>';
  html += '        </div>';  
  html += '      </div>';
  html += '    </div>';
  /* === END Banners Setting === */
  
  html += '  </div>';  	
  html += '</div>';

  $('#tab-banners .tab-content:first').append(html);
		
	$('#group-add').before('<li><a href="#tab-group' + group_row + '" data-toggle="tab"><i class="fa fa-minus-circle" onclick="$(\'a[href=\\\'#tab-group' + group_row + '\\\']\').parent().remove(); $(\'#tab-group' + group_row + '\').remove(); $(\'#tab-banners a:first\').tab(\'show\');"></i> <?php echo $text_group; ?> - ' + group_row + '</a></li>');

	$('#tab-banners a[href=\'#tab-group' + group_row + '\']').tab('show'); 
  
  showSettingGroup(group_row);
  
  group_row++;
}
//--></script> 
<script type="text/javascript">
var grid_row = <?php echo $grid_row; ?>;

<?php $group_row = 0; ?>
<?php foreach($group_tabs as $group_tab) { ?>
/* Grid<?php echo $group_row; ?> */
var grid<?php echo $group_row; ?> = GridStack.init({ cellHeight: '75px', cellHeightThrottle: 100, resizable: { handles: 'e, se, s, sw, w' }, }, '.grid-stack.grid-stack-group<?php echo $group_row; ?>');
GridAddedChange(grid<?php echo $group_row; ?>);

<?php $group_row++; ?>
<?php } ?>

function GridAddedChange(grid) {
  grid.on('added change removed', function(e, items) {
    var element = items[0].el;

    var id = $(element).attr('gs-id'); 
    var x = $(element).attr('gs-x');
    var y = $(element).attr('gs-y');
    var width = $(element).attr('gs-w');
    var height = $(element).attr('gs-h');

    $(element).children('#gs_id_' + id).val(id);
    $(element).children('#gs_x_' + id).val(x);
    $(element).children('#gs_y_' + id).val(y);
    $(element).children('#gs_width_' + id).val(width);
    $(element).children('#gs_height_' + id).val(height);
    
    if (grid.getGridItems() < 1) {
      grid.el.previousElementSibling.classList.remove("hidden");
    }
  }); 
}

function addGridElement(group_row) {
  var nestOptions = {
    resizable: {
      handles: 'e, se, s, sw, w'
    },
  };
  
  var grid = GridStack.init(nestOptions, '.grid-stack.grid-stack-group' + group_row);
  GridAddedChange(grid);
   
  var widget_id = (Math.random() * 10000).toFixed();
   
  html  = '<div class="grid-stack-item grid-stack-item-group' + group_row + '">';
  html += '  <input type="hidden" name="group_tab[' + group_row + '][grid_stack][' + grid_row + '][gs_id]" value="' + widget_id + '" id="gs_id_' + widget_id + '" class="form-control" />';
  html += '  <input type="hidden" name="group_tab[' + group_row + '][grid_stack][' + grid_row + '][gs_x]" value="" id="gs_x_' + widget_id + '" class="form-control" />';
  html += '  <input type="hidden" name="group_tab[' + group_row + '][grid_stack][' + grid_row + '][gs_y]" value="" id="gs_y_' + widget_id + '" class="form-control" />';
  html += '  <input type="hidden" name="group_tab[' + group_row + '][grid_stack][' + grid_row + '][gs_width]" value="" id="gs_width_' + widget_id + '" class="form-control" />';
  html += '  <input type="hidden" name="group_tab[' + group_row + '][grid_stack][' + grid_row + '][gs_height]" value="" id="gs_height_' + widget_id + '" class="form-control" />';
  html += '  <div class="grid-stack-item-content">';
  html += '    <i class="fa fa-trash-o fa-trash' + group_row + '" data-toggle="tooltip" title="<?php echo $button_remove; ?>"></i>';
  html += '  </div>';
  html += '</div>';

  grid.addWidget(html, {id: widget_id});
  
  $('.fa-trash' + group_row).on('click', function(){
    grid.removeWidget(this.parentNode.parentNode);
    
    if (grid.getGridItems() < 1) {
      $('.grid-stack-not-el-' + group_row).removeClass('hidden');
    }
  });
    
  grid_row++;
}
</script>
<script type="text/javascript"><!--
var carousel_item_row = <?php echo $carousel_item_row; ?>;

function addCarouselItem(group_row) {
  html  = '  <tr id="carousel-item-row-group' + group_row + '-' + carousel_item_row + '">';
  html += '    <td class="text-left">';
  html += '      <input type="text" name="group_tab[' + group_row + '][carousel_item][' + carousel_item_row + '][window]" value="" placeholder="<?php echo $entry_window; ?>" class="form-control" />';
  html += '    </td>';
  html += '    <td class="text-left">';
  html += '      <input type="text" name="group_tab[' + group_row + '][carousel_item][' + carousel_item_row + '][item]" value="" placeholder="<?php echo $text_quantity_prod; ?>" class="form-control" />';
  html += '    </td>';
  html += '    <td class="text-left">';                                                                                      
  html += '      <input type="text" name="group_tab[' + group_row + '][carousel_item][' + carousel_item_row + '][spaceBetween]" value="" class="form-control" />';
  html += '    </td>';
  html += '    <td class="text-left"><button type="button" onclick="$(\'#carousel-item-row-group' + group_row + '-' + carousel_item_row + '\').remove();" data-toggle="tooltip" title="<?php echo $button_remove; ?>" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>';
  html += '  </tr>';
                                                                                                              
	$('#carousel-items-group' + group_row +' tbody').append(html);
  
  carousel_item_row++;
}
//--></script>
<script type="text/javascript"><!--
var breakpoint_row = <?php echo $breakpoint_row; ?>;

function addGridBreakpoints(group_row) {
  html  = '  <tr id="grid-breakpoint-group' + group_row + '-' + breakpoint_row + '">';
  html += '    <td class="text-left">';
  html += '      <input type="text" name="group_tab[' + group_row + '][breakpoint][' + breakpoint_row + '][name]" value="" class="form-control" />';
  html += '    </td>';
  html += '    <td class="text-left">';
  html += '      <input type="text" name="group_tab[' + group_row + '][breakpoint][' + breakpoint_row + '][range]" value="" class="form-control" />';
  html += '    </td>'; 
  html += '    <td class="text-left">';
  html += '      <input type="text" name="group_tab[' + group_row + '][breakpoint][' + breakpoint_row + '][column]" value="" class="form-control" />';
  html += '    </td>';
  html += '    <td class="text-left">';                                                                                      
  html += '      <input type="text" name="group_tab[' + group_row + '][breakpoint][' + breakpoint_row + '][gutter]" value="" class="form-control" />';
  html += '    </td>';
  html += '    <td class="text-left"><button type="button" onclick="$(\'#grid-breakpoint-group' + group_row + '-' + breakpoint_row + '\').remove();" data-toggle="tooltip" title="<?php echo $button_remove; ?>" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>';
  html += '  </tr>';
                                                                                                              
	$('#grid-breakpoints-group' + group_row +' tbody').append(html);
  
  breakpoint_row++;
}
//--></script>
<script type="text/javascript"><!--
function showSettingGroup(group_row) {
  $('#input-mode-group' + group_row).change(function() {
    var str = '';
    $('#input-mode-group' + group_row + ' option:selected').each(function() {
	    str = $(this).val();
	  });
	      
    if (str == 'grid') {
      $('.block-rows-group' + group_row).show(300);
    } else {
      $('.block-rows-group' + group_row).hide(300);
	  }

    if (str == 'carousel') {
      $('.block-carousel-group' + group_row).show(300);
    } else {
      $('.block-carousel-group' + group_row).hide(300);
	  }
    
    if (str == 'respgrid') {
      $('.block-image-sizes-group' + group_row).hide(300);
      $('.block-grid-gutter-group' + group_row).show(300);
    } else {
      $('.block-image-sizes-group' + group_row).show(300);
      $('.block-grid-gutter-group' + group_row).hide(300);
	  }
  }).change();
}
//--></script>
<script type="text/javascript"><!--
$('#group li').each(function(index, element) {
	showSettingGroup(index);
  
  $('#banner-image-group' + index + ' li:first-child a').tab('show');
});
//--></script>
<script type="text/javascript"><!--
function addBanner(group_row) {
  var banner_row = $('#banner-image-group' + group_row).children().length;

  html  = '<div class="tab-pane" id="tab-banner-images-group' + group_row + '-banner' + banner_row + '">';

  html += '  <div class="block-type-banner block-type-banner-group' + group_row + '-banner' + banner_row + '">';
  html += '    <div class="form-group">';                                                                 
  html += '      <label class="col-sm-2 control-label" for="input-banner-type-group' + group_row + '-banner' + banner_row + '"><?php echo $entry_image_type; ?></label>';
  html += '      <div class="col-sm-10">';
  html += '        <select name="group_tab[' + group_row + '][banner_image][' + banner_row + '][type]" id="input-banner-type-group' + group_row + '-banner' + banner_row + '" class="form-control">';
  html += '          <option value="image_image"><?php echo $entry_type_image_image; ?></option>';                     
  html += '          <option value="image_video"><?php echo $entry_type_image_video; ?></option>';
  html += '          <option value="image_slider" class="image-slider-group' + group_row + '-banner' + banner_row + '"><?php echo $entry_type_image_slider; ?></option>';                     
  html += '        </select>';
  html += '      </div>';
  html += '    </div>';
  html += '  </div>';    
  html += '  <div class="form-group">';
  html += '    <label class="col-sm-2 control-label" for="banner-status-group' + group_row + '-banner' + banner_row + '"><?php echo $entry_status; ?></label>';
  html += '    <div class="col-sm-10">';
  html += '      <select name="group_tab[' + group_row + '][banner_image][' + banner_row + '][status]" id="banner-status-group' + group_row + '-banner' + banner_row + '" class="form-control">';
  html += '        <option value="1" selected="selected"><?php echo $text_enabled; ?></option>';
  html += '        <option value="0"><?php echo $text_disabled; ?></option>';
  html += '      </select>';
  html += '    </div>';
  html += '  </div>';
  html += '  <div class="form-group sort-banner">';
  html += '    <label class="col-sm-2 control-label" for="input-banner-sort-group' + group_row + '-banner' + banner_row + '"><?php echo $entry_sort_order; ?></label>';
  html += '    <div class="col-sm-10">';
  html += '      <input type="text" name="group_tab[' + group_row + '][banner_image][' + banner_row + '][sort_order]" value="" id="input-banner-sort-group' + group_row + '-banner' + banner_row + '" placeholder="<?php echo $entry_sort_order; ?>" class="form-control" />';
  html += '    </div>';
  html += '  </div>';
  html += '    <ul class="nav nav-tabs" id="language-group' + group_row + '-banner' + banner_row + '">';
  <?php foreach ($languages as $language) { ?>
  html += '      <li><a href="#tab-images-group' + group_row + '-banner' + banner_row + '-language<?php echo $language['language_id']; ?>" data-toggle="tab"><img src="language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png" title="<?php echo $language['name']; ?>" /> <?php echo $language['name']; ?></a></li>';
  <?php } ?>
  html += '    </ul>';
  html += '    <div class="tab-content">';  
  <?php foreach ($languages as $language) { ?>
  html += '      <div class="tab-pane" id="tab-images-group' + group_row + '-banner' + banner_row + '-language<?php echo $language['language_id']; ?>">';
  html += '        <div class="block-video block-video-group' + group_row + '-banner' + banner_row + '-language<?php echo $language['language_id']; ?>" style="display: none;">';
  html += '          <div class="form-group">';                                                                 
  html += '            <label class="col-sm-2 control-label" for="input-video-host-group' + group_row + '-banner' + banner_row + '-language<?php echo $language['language_id']; ?>"><?php echo $entry_video_host; ?></label>';
  html += '            <div class="col-sm-10">';
  html += '              <select name="group_tab[' + group_row + '][banner_image][' + banner_row + '][type_image_video_host][<?php echo $language['language_id']; ?>]" id="input-video-host-group' + group_row + '-banner' + banner_row + '-language<?php echo $language['language_id']; ?>" class="form-control">';
  html += '                <option value=""><?php echo $text_select; ?></option>';
  html += '                <option value="youtube"><?php echo $entry_youtube; ?></option>';                     
  html += '                <option value="vimeo"><?php echo $entry_vimeo; ?></option>';
  html += '              </select>';
  html += '            </div>';
  html += '          </div>';
  html += '          <div class="form-group">';
  html += '            <label class="col-sm-2 control-label" for="input-link-image-video-group' + group_row + '-banner' + banner_row + '-language<?php echo $language['language_id']; ?>"><?php echo $entry_video_id; ?></label>';
  html += '            <div class="col-sm-6">';
  html += '              <input type="text" name="group_tab[' + group_row + '][banner_image][' + banner_row + '][type_image_video_id][<?php echo $language['language_id']; ?>]" value="" id="input-link-image-video-group' + group_row + '-banner' + banner_row + '-language<?php echo $language['language_id']; ?>" class="form-control" />';
  html += '            </div>';
  html += '            <div class="col-sm-4 example-video"><a href="#modal-video-id" data-toggle="modal"><?php echo $text_example_video; ?></a></div>'
  html += '          </div>';
  html += '          <div class="form-group">';
  html += '            <label class="col-sm-2 control-label" for="input-title-video-group' + group_row + '-banner' + banner_row + '-language<?php echo $language['language_id']; ?>"><?php echo $entry_title; ?></label>';
  html += '            <div class="col-sm-10">';
  html += '              <input type="text" name="group_tab[' + group_row + '][banner_image][' + banner_row + '][title_video][<?php echo $language['language_id']; ?>]" value="" id="input-title-video-group' + group_row + '-banner' + banner_row + '-language<?php echo $language['language_id']; ?>" placeholder="<?php echo $entry_title; ?>" class="form-control" />';
  html += '            </div>'; 
  html += '          </div>';
  html += '          <div class="form-group">';
  html += '            <label class="col-sm-2 control-label"><?php echo $entry_title_banner; ?></label>';
  html += '            <div class="col-sm-10">';
  html += '              <label class="radio-inline">';
  html += '                <input type="radio" name="group_tab[' + group_row + '][banner_image][' + banner_row + '][title_video_show][<?php echo $language['language_id']; ?>]" value="1" />';
  html += '                <?php echo $text_yes; ?>';
  html += '              </label>';
  html += '              <label class="radio-inline">';
  html += '                <input type="radio" name="group_tab[' + group_row + '][banner_image][' + banner_row + '][title_video_show][<?php echo $language['language_id']; ?>]" value="0" checked="checked" />';
  html += '                <?php echo $text_no; ?>';
  html += '              </label>';
  html += '            </div>';
  html += '          </div>';
  html += '          <div class="form-group">';
  html += '            <label class="col-sm-2 control-label" for="position-title-video-group' + group_row + '-banner' + banner_row + '-language<?php echo $language['language_id']; ?>"><?php echo $entry_position_desc; ?></label>';
  html += '            <div class="col-sm-10">';
  html += '              <select name="group_tab[' + group_row + '][banner_image][' + banner_row + '][position_title_video][<?php echo $language['language_id']; ?>]" id="position-title-video-group' + group_row + '-banner' + banner_row + '-language<?php echo $language['language_id']; ?>" class="form-control">';
  html += '                <option value=""><?php echo $text_select; ?></option>';
  html += '                <option value="title_after_image"><?php echo $text_title_after_image; ?></option>';                     
  html += '                <option value="title_before_image"><?php echo $text_title_before_image; ?></option>';                     
  html += '              </select>';
  html += '            </div>';
  html += '          </div>';
  html += '          <div class="form-group">';
  html += '            <label class="col-sm-2 control-label" for="video-title-align-group' + group_row + '-banner' + banner_row + '-language<?php echo $language['language_id']; ?>"><?php echo $entry_text_align; ?></label>';
  html += '            <div class="col-sm-10">';
  html += '              <select name="group_tab[' + group_row + '][banner_image][' + banner_row + '][align_title_video][<?php echo $language['language_id']; ?>]" id="video-title-align-group' + group_row + '-banner' + banner_row + '-language<?php echo $language['language_id']; ?>" class="form-control">';
  html += '                <option value=""><?php echo $text_select; ?></option>';
  html += '                <option value="left"><?php echo $text_align_left; ?></option>';                     
  html += '                <option value="center"><?php echo $text_align_center; ?></option>';                     
  html += '                <option value="right"><?php echo $text_align_right; ?></option>';                    
  html += '              </select>';
  html += '            </div>';
  html += '          </div>';
  html += '        </div>';  
  html += '        <div class="block-image block-image-group' + group_row + '-banner' + banner_row + '-language<?php echo $language['language_id']; ?>">';
  html += '          <div class="form-group">';
  html += '            <label class="col-sm-2 control-label" for="input-image-group' + group_row + '-banner' + banner_row + '-language<?php echo $language['language_id']; ?>"><?php echo $entry_thumb; ?></label>';
  html += '            <div class="col-sm-10">';                                                                                                                                                        
  html += '              <a href="" id="thumb-image-group' + group_row + '-banner' + banner_row + '-language<?php echo $language['language_id']; ?>" data-toggle="image" class="img-thumbnail"><img src="<?php echo $placeholder; ?>" alt="" title="" data-placeholder="<?php echo $placeholder; ?>" /></a>';
  html += '              <input type="hidden" name="group_tab[' + group_row + '][banner_image][' + banner_row + '][image][<?php echo $language['language_id']; ?>]" value="" id="input-image-group' + group_row + '-banner' + banner_row + '-language<?php echo $language['language_id']; ?>" />';
  html += '            </div>';
  html += '          </div>';
  html += '          <div class="form-group">';
  html += '            <label class="col-sm-2 control-label" for="animation-group' + group_row + '-banner' + banner_row + '-language<?php echo $language['language_id']; ?>"><?php echo $entry_hover_effects; ?></label>';
  html += '            <div class="col-sm-4">';
  html += '              <select name="group_tab[' + group_row + '][banner_image][' + banner_row + '][animation][<?php echo $language['language_id']; ?>]" id="animation-group' + group_row + '-banner' + banner_row + '-language<?php echo $language['language_id']; ?>" class="form-control">';
  html += '                <option value=""><?php echo $text_select; ?></option>';
  html += '                <option value="scale"><?php echo $text_scale; ?></option>';                     
  html += '                <option value="grayscale"><?php echo $text_grayscale; ?></option>';                     
  html += '                <option value="opacity"><?php echo $text_opacity; ?></option>';                     
  html += '                <option value="sepia"><?php echo $text_sepia; ?></option>';                     
  html += '                <option value="apollo" class="animation-group' + group_row + '-banner' + banner_row + '-language<?php echo $language['language_id']; ?>"><?php echo $text_apollo; ?></option>';
  html += '                <option value="jazz" class="animation-group' + group_row + '-banner' + banner_row + '-language<?php echo $language['language_id']; ?>"><?php echo $text_jazz; ?></option>';
  html += '                <option value="sarah" class="animation-group' + group_row + '-banner' + banner_row + '-language<?php echo $language['language_id']; ?>"><?php echo $text_sarah; ?></option>';
  html += '                <option value="romeo" class="animation-group' + group_row + '-banner' + banner_row + '-language<?php echo $language['language_id']; ?>"><?php echo $text_romeo; ?></option>';
  html += '                <option value="bubba" class="animation-group' + group_row + '-banner' + banner_row + '-language<?php echo $language['language_id']; ?>"><?php echo $text_bubba; ?></option>';
  html += '                <option value="marley" class="animation-group' + group_row + '-banner' + banner_row + '-language<?php echo $language['language_id']; ?>"><?php echo $text_marley; ?></option>';
  html += '                <option value="oscar" class="animation-group' + group_row + '-banner' + banner_row + '-language<?php echo $language['language_id']; ?>"><?php echo $text_oscar; ?></option>';
  html += '                <option value="sadie" class="animation-group' + group_row + '-banner' + banner_row + '-language<?php echo $language['language_id']; ?>"><?php echo $text_sadie; ?></option>';
  html += '              </select>';
  html += '            </div>';
  html += '            <div class="col-sm-6 example-effect"><a href="//oc-day.ru/examples-of-hover-effects/" target="_blank"><?php echo $text_example_effect; ?></a></div>';
  html += '          </div>';
  html += '          <div class="form-group">';
  html += '            <label class="col-sm-2 control-label" for="input-title-image-group' + group_row + '-banner' + banner_row + '-language<?php echo $language['language_id']; ?>"><?php echo $entry_title; ?></label>';
  html += '            <div class="col-sm-10">';
  html += '              <input type="text" name="group_tab[' + group_row + '][banner_image][' + banner_row + '][title_image][<?php echo $language['language_id']; ?>]" value="" id="input-title-image-group' + group_row + '-banner' + banner_row + '-language<?php echo $language['language_id']; ?>" placeholder="<?php echo $entry_title; ?>" class="form-control" />';
  html += '            </div>'; 
  html += '          </div>';
  html += '          <div class="form-group">';
  html += '            <label class="col-sm-2 control-label" for="input-alt-image-group' + group_row + '-banner' + banner_row + '-language<?php echo $language['language_id']; ?>"><?php echo $entry_alt; ?></label>';
  html += '            <div class="col-sm-10">';
  html += '              <input type="text" name="group_tab[' + group_row + '][banner_image][' + banner_row + '][alt_image][<?php echo $language['language_id']; ?>]" value="" id="input-alt-image-group' + group_row + '-banner' + banner_row + '-language<?php echo $language['language_id']; ?>" placeholder="<?php echo $entry_alt; ?>" class="form-control" />';
  html += '            </div>';
  html += '          </div>';
  html += '          <div class="form-group title-show title-show-group' + group_row + '-banner' + banner_row + '-language<?php echo $language['language_id']; ?>">';
  html += '            <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="<?php echo $help_hidden_setting; ?>"><?php echo $entry_title_banner; ?></span></label>';
  html += '            <div class="col-sm-10">';
  html += '              <label class="radio-inline">';
  html += '                <input type="radio" name="group_tab[' + group_row + '][banner_image][' + banner_row + '][title_show][<?php echo $language['language_id']; ?>]" value="1" />';
  html += '                <?php echo $text_yes; ?>';
  html += '              </label>';
  html += '              <label class="radio-inline">';
  html += '                <input type="radio" name="group_tab[' + group_row + '][banner_image][' + banner_row + '][title_show][<?php echo $language['language_id']; ?>]" value="0" checked="checked" />';
  html += '                <?php echo $text_no; ?>';
  html += '              </label>';
  html += '            </div>';
  html += '          </div>';
  html += '          <div class="block-title-banner block-title-banner-group' + group_row + '-banner' + banner_row + '-language<?php echo $language['language_id']; ?>" style="display: none;">';
  html += '            <div class="form-group">';
  html += '              <label class="col-sm-2 control-label" for="position-title-image-group' + group_row + '-banner' + banner_row + '-language<?php echo $language['language_id']; ?>"><?php echo $entry_position_desc; ?></label>';
  html += '              <div class="col-sm-10">';
  html += '                <select name="group_tab[' + group_row + '][banner_image][' + banner_row + '][position_title][<?php echo $language['language_id']; ?>]" id="position-title-image-group' + group_row + '-banner' + banner_row + '-language<?php echo $language['language_id']; ?>" class="form-control">';
  html += '                  <option value=""><?php echo $text_select; ?></option>';
  html += '                  <option value="title_after_image"><?php echo $text_title_after_image; ?></option>';                     
  html += '                  <option value="title_before_image"><?php echo $text_title_before_image; ?></option>';                     
  html += '                  <option value="title_html_image"><?php echo $text_title_html_image; ?></option>';                     
  html += '                </select>';
  html += '              </div>';
  html += '            </div>';
  html += '            <div class="form-group">';
  html += '              <label class="col-sm-2 control-label" for="input-text-align-group' + group_row + '-banner' + banner_row + '-language<?php echo $language['language_id']; ?>"><?php echo $entry_text_align; ?></label>';
  html += '              <div class="col-sm-10">';
  html += '                <select name="group_tab[' + group_row + '][banner_image][' + banner_row + '][text_align][<?php echo $language['language_id']; ?>]" id="input-text-align-group' + group_row + '-banner' + banner_row + '-language<?php echo $language['language_id']; ?>" class="form-control">';
  html += '                  <option value=""><?php echo $text_select; ?></option>';
  html += '                  <option value="left"><?php echo $text_align_left; ?></option>';                     
  html += '                  <option value="center"><?php echo $text_align_center; ?></option>';                     
  html += '                  <option value="right"><?php echo $text_align_right; ?></option>';
  html += '                </select>';
  html += '              </div>';
  html += '            </div>';
  html += '          </div>';  
  html += '          <div class="form-group link-image">';
  html += '            <label class="col-sm-2 control-label" for="input-link-image-group' + group_row + '-banner' + banner_row + '-language<?php echo $language['language_id']; ?>"><?php echo $entry_link; ?></label>';
  html += '            <div class="col-sm-10">';
  html += '              <input type="text" name="group_tab[' + group_row + '][banner_image][' + banner_row + '][link_image][<?php echo $language['language_id']; ?>]" value="" id="input-link-image-group' + group_row + '-banner' + banner_row + '-language<?php echo $language['language_id']; ?>" placeholder="<?php echo $entry_link; ?>" class="form-control" />';
  html += '            </div>';
  html += '          </div>';
  html += '          <div class="form-group">';
  html += '            <label class="col-sm-2 control-label"><?php echo $entry_link_video; ?></label>';
  html += '            <div class="col-sm-10">';
  html += '              <label class="radio-inline">';
  html += '                <input type="radio" name="group_tab[' + group_row + '][banner_image][' + banner_row + '][link_video][<?php echo $language['language_id']; ?>]" value="1" />';
  html += '                <?php echo $text_yes; ?>';
  html += '              </label>';
  html += '              <label class="radio-inline">';
  html += '                <input type="radio" name="group_tab[' + group_row + '][banner_image][' + banner_row + '][link_video][<?php echo $language['language_id']; ?>]" value="0" checked="checked" />';
  html += '                <?php echo $text_no; ?>';
  html += '              </label>';
  html += '            </div>';
  html += '          </div>';  
  html += '          <div class="form-group">';
  html += '            <label class="col-sm-2 control-label" for="input-banner-modal-group' + group_row + '-banner' + banner_row + '-language<?php echo $language['language_id']; ?>"><?php echo $entry_modal; ?></label>';
  html += '            <div class="col-sm-10">';
  html += '              <select name="group_tab[' + group_row + '][banner_image][' + banner_row + '][modal][<?php echo $language['language_id']; ?>]" id="input-banner-modal-group' + group_row + '-banner' + banner_row + '-language<?php echo $language['language_id']; ?>" class="form-control">';
  html += '                <option value="self"><?php echo $text_self; ?></option>';
  html += '                <option value="blank"><?php echo $text_target; ?></option>';                     
  html += '                <option value="modal"><?php echo $text_modal; ?></option>';                     
  html += '              </select>';
  html += '            </div>';
  html += '          </div>';
  html += '          <div class="form-group banner-desc-group' + group_row + '-banner' + banner_row + '-language<?php echo $language['language_id']; ?>">';
  html += '            <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="<?php echo $help_hidden_setting; ?>"><?php echo $entry_banner_desc_show; ?></span></label>';
  html += '            <div class="col-sm-10">';
  html += '              <label class="radio-inline">';
  html += '                <input type="radio" name="group_tab[' + group_row + '][banner_image][' + banner_row + '][desc_show][<?php echo $language['language_id']; ?>]" value="1" />';
  html += '                <?php echo $text_yes; ?>';
  html += '              </label>';
  html += '              <label class="radio-inline">';
  html += '                <input type="radio" name="group_tab[' + group_row + '][banner_image][' + banner_row + '][desc_show][<?php echo $language['language_id']; ?>]" value="0" checked="checked" />';
  html += '                <?php echo $text_no; ?>';
  html += '              </label>';
  html += '            </div>';
  html += '          </div>';
  html += '          <div class="block-banner-desc-group' + group_row + '-banner' + banner_row + '-language<?php echo $language['language_id']; ?>" style="display: none;">';
  html += '            <div class="form-group">';
  html += '              <label class="col-sm-2 control-label" for="input-desc-group' + group_row + '-banner' + banner_row + '-language<?php echo $language['language_id']; ?>"><?php echo $text_description; ?></label>';
  html += '              <div class="col-sm-10">';
  html += '                <textarea class="form-control hide-editor" name="group_tab[' + group_row + '][banner_image][' + banner_row + '][description][<?php echo $language['language_id']; ?>]" rows="5" placeholder="<?php echo $text_description; ?>" id="input-desc-group' + group_row + '-banner' + banner_row + '-language<?php echo $language['language_id']; ?>" data-lang="<?php echo $lang; ?>"></textarea>';
  html += '                <a onclick="showEditorBanner(' + group_row +', ' + banner_row +', <?php echo $language['language_id']; ?>);" class="check-ckeditor check-ckeditor-group' + group_row +'-banner' + banner_row +'-language<?php echo $language['language_id']; ?>"><?php echo $text_show_editor; ?></a>';
  html += '              </div>';
  html += '            </div>';
  html += '          </div>';
  html += '        </div>';   
  
  // Block settings Slider 
  html += '        <div class="block-slider block-slider-group' + group_row + '-banner' + banner_row + '-language<?php echo $language['language_id']; ?>">';
  html += '          <div class="slide-block-button">';
  html += '            <div class="slide-add">';
  html += '              <a onclick="addSliderElement(' + group_row + ', ' + banner_row + ', <?php echo $language['language_id']; ?>);" class="btn btn-success"><?php echo $entry_add_slide; ?></a>';             
  html += '            </div>';
  html += '            <div class="slider-setting">';
  html += '              <a data-target="#slider-setting-group' + group_row + '-banner' + banner_row + '-language<?php echo $language['language_id']; ?>" data-toggle="modal" class="btn btn-setting"><?php echo $entry_settings; ?></a>';
  html += '            </div>';
  html += '          </div>';
  html += '          <div id="slider-setting-group' + group_row + '-banner' + banner_row + '-language<?php echo $language['language_id']; ?>" class="modal fade">';
  html += '            <div class="modal-dialog modal-lg">';
  html += '              <div class="modal-content">';
  html += '                <div class="modal-header">';
  html += '                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>';
  html += '                  <h4 class="modal-title"><?php echo $entry_settings; ?></h4>';
  html += '                </div>';
  html += '                <div class="modal-body">';
  html += '                  <div class="form-group">';
  html += '                    <label class="col-sm-3 control-label" for="slider-mode-group' + group_row + '-banner' + banner_row + '-language<?php echo $language['language_id']; ?>"><?php echo $entry_slider_mode; ?></label>';
  html += '                    <div class="col-sm-9">';
  html += '                      <select name="group_tab[' + group_row + '][banner_image][' + banner_row + '][slider_mode][<?php echo $language['language_id']; ?>]" id="slider-mode-group' + group_row + '-banner' + banner_row + '-language<?php echo $language['language_id']; ?>" class="form-control">';
  html += '                        <option value="slide"><?php echo $text_slide; ?></option>';                     
  html += '                        <option value="fade"><?php echo $text_fade; ?></option>';                     
  html += '                      </select>';
  html += '                    </div>';
  html += '                  </div>';
  html += '                  <div class="form-group">';
  html += '                    <label class="col-sm-3 control-label"><?php echo $text_carousel_autoplay; ?></label>';
  html += '                    <div class="col-sm-2">';
  html += '                      <label class="radio-inline">';
  html += '                        <input type="radio" name="group_tab[' + group_row + '][banner_image][' + banner_row + '][slider_autoplay][<?php echo $language['language_id']; ?>]" value="1" />';
  html += '                        <?php echo $text_yes; ?>';
  html += '                      </label>';
  html += '                      <label class="radio-inline">';
  html += '                        <input type="radio" name="group_tab[' + group_row + '][banner_image][' + banner_row + '][slider_autoplay][<?php echo $language['language_id']; ?>]" value="0" checked="checked" />';
  html += '                        <?php echo $text_no; ?>';
  html += '                      </label>';
  html += '                    </div>';
  html += '                    <label class="col-sm-4 control-label" for="slider-autoplay-speed-group' + group_row + '-banner' + banner_row + '-language<?php echo $language['language_id']; ?>"><?php echo $text_carousel_autoplay_speed; ?></label>';
  html += '                    <div class="col-sm-3">';
  html += '                      <input type="text" name="group_tab[' + group_row + '][banner_image][' + banner_row + '][slider_autoplay_speed][<?php echo $language['language_id']; ?>]" value="" id="slider-autoplay-speed-group' + group_row + '-banner' + banner_row + '-language<?php echo $language['language_id']; ?>" class="form-control" />';
  html += '                    </div>';
  html += '                  </div>';
  html += '                  <div class="form-group">';
  html += '                    <label class="col-sm-3 control-label"><?php echo $text_carousel_navigation; ?></label>';
  html += '                    <div class="col-sm-9">';
  html += '                      <label class="radio-inline">';
  html += '                        <input type="radio" name="group_tab[' + group_row + '][banner_image][' + banner_row + '][slider_navigation][<?php echo $language['language_id']; ?>]" value="1" />';
  html += '                        <?php echo $text_yes; ?>';
  html += '                      </label>';
  html += '                      <label class="radio-inline">';
  html += '                        <input type="radio" name="group_tab[' + group_row + '][banner_image][' + banner_row + '][slider_navigation][<?php echo $language['language_id']; ?>]" value="0" checked="checked" />';
  html += '                        <?php echo $text_no; ?>';
  html += '                      </label>';
  html += '                    </div>';
  html += '                  </div>';
  html += '                  <div class="form-group">';
  html += '                    <label class="col-sm-3 control-label"><?php echo $text_carousel_pagination; ?></label>';
  html += '                    <div class="col-sm-9">';
  html += '                      <label class="radio-inline">';
  html += '                        <input type="radio" name="group_tab[' + group_row + '][banner_image][' + banner_row + '][slider_pagination][<?php echo $language['language_id']; ?>]" value="1" />';
  html += '                        <?php echo $text_yes; ?>';
  html += '                      </label>';
  html += '                      <label class="radio-inline">';
  html += '                        <input type="radio" name="group_tab[' + group_row + '][banner_image][' + banner_row + '][slider_pagination][<?php echo $language['language_id']; ?>]" value="0" checked="checked" />';
  html += '                        <?php echo $text_no; ?>';
  html += '                      </label>';
  html += '                    </div>';
  html += '                  </div>';
  html += '                  <div class="form-group">';
  html += '                    <label class="col-sm-3 control-label"><?php echo $text_carousel_loop; ?></label>';
  html += '                    <div class="col-sm-9">';
  html += '                      <label class="radio-inline">';
  html += '                        <input type="radio" name="group_tab[' + group_row + '][banner_image][' + banner_row + '][slider_loop][<?php echo $language['language_id']; ?>]" value="1" />';
  html += '                        <?php echo $text_yes; ?>';
  html += '                      </label>';
  html += '                      <label class="radio-inline">';
  html += '                        <input type="radio" name="group_tab[' + group_row + '][banner_image][' + banner_row + '][slider_loop][<?php echo $language['language_id']; ?>]" value="0" checked="checked" />';
  html += '                        <?php echo $text_no; ?>';
  html += '                      </label>';
  html += '                    </div>';
  html += '                  </div>';
  html += '                </div>';
  html += '                <div class="modal-footer">';
  html += '                  <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $button_close; ?></button>';
  html += '                </div>';
  html += '              </div>';
  html += '            </div>';
  html += '          </div>';
  html += '          <div id="slider-wrapper-group' + group_row + '-banner' + banner_row + '-language<?php echo $language['language_id']; ?>">';
  html += '          </div>';
  html += '        </div>'; 
  // end Block settings Slider
  
  html += '      </div>';
  <?php } ?>
  html += '    </div>';
  
  html += '</div>';
  
  $('#tab-setting-banners-group' + group_row + ' .tab-content:first').append(html);
 
	$('#banner-image-add-group' + group_row).before('<li class="banner-image"><a href="#tab-banner-images-group' + group_row + '-banner' + banner_row + '" data-toggle="tab"><?php echo $entry_banner; ?> - ' + banner_row + ' <i class="fa fa-minus-circle" onclick="$(\'a[href=\\\'#tab-banner-images-group' + group_row + '-banner' + banner_row + '\\\']\').parent().remove(); $(\'#tab-banner-images-group' + group_row + '-banner' + banner_row + '\').remove(); $(\'#banner-image-group' + group_row + ' a:first\').tab(\'show\');"></i></a></li>');
                                 
  $('#tab-group' + group_row + ' a[href=\'#tab-banner-images-group' + group_row + '-banner' + banner_row + '\']').tab('show');
  
  $('#language-group' + group_row + '-banner' + banner_row + ' li:first-child a').tab('show');

  showSettingBanner(group_row, banner_row);
  
  sortSlider(group_row, banner_row);
  
  banner_row++;
}
//--></script>
<script type="text/javascript"><!--
var languages = Array();
<?php foreach ($languages as $language) { ?>
languages.push('<?php echo $language['language_id']; ?>');
<?php } ?>
function showSettingBanner(group_row, banner_row) {
  $('#input-mode-group' + group_row).change(function () {
    var str = '';
    $('#input-mode-group' + group_row + ' option:selected').each(function() {
	    str = $(this).val();
	  });
  
    if (str == 'carousel') {
      $('.image-slider-group' + group_row + '-banner' + banner_row).hide();
    } else {
      $('.image-slider-group' + group_row + '-banner' + banner_row).show();
	  }
  
    if (str == 'respgrid') {
      $('.block-respgrid-group' + group_row + '-banner' + banner_row).show();
      $.each(languages, function(index, value) {
        $('.animation-group' + group_row + '-banner' + banner_row + '-language' + value).hide();
      });
    } else {
      $('.block-respgrid-group' + group_row + '-banner' + banner_row).hide();
      $.each(languages, function(index, value) {
        $('.animation-group' + group_row + '-banner' + banner_row + '-language' + value).show();
      });
	  }
  }).change();
  
  $.each(languages, function(index, value) {
    $('#input-banner-type-group' + group_row + '-banner' + banner_row).change(function () {
      var str = '';
      $('#input-banner-type-group' + group_row + '-banner' + banner_row + ' option:selected').each(function() {
        str = $(this).val();
      });
  
      if (str == 'image_image') {
        $('.block-image-group' + group_row + '-banner' + banner_row + '-language' + value).show(300);
      } else {
        $('.block-image-group' + group_row + '-banner' + banner_row + '-language' + value).hide(300);
      }
  
      if (str == 'image_video') {
        $('.block-video-group' + group_row + '-banner' + banner_row + '-language' + value).show(300);
      } else {
        $('.block-video-group' + group_row + '-banner' + banner_row + '-language' + value).hide(300);
      }
  
      if (str == 'image_slider') {
        $('.block-slider-group' + group_row + '-banner' + banner_row + '-language' + value).show(300);
      } else {
        $('.block-slider-group' + group_row + '-banner' + banner_row + '-language' + value).hide(300);
      }
    }).change();
      
    $('.title-show-group' + group_row + '-banner' + banner_row + '-language' + value + ' input').change(function () {
      var str = '';
      $('.title-show-group' + group_row + '-banner' + banner_row + '-language' + value + ' input:checked').each(function() {
        str = $(this).val();
      });

      if (str == '1') {
        $('.block-title-banner-group' + group_row + '-banner' + banner_row + '-language' + value).show(300);
      } else {
        $('.block-title-banner-group' + group_row + '-banner' + banner_row + '-language' + value).hide(300);
      }
    }).change();
            
    $('.banner-desc-group' + group_row + '-banner' + banner_row + '-language' + value + ' input').change(function () {
      var str = '';
      $('.banner-desc-group' + group_row + '-banner' + banner_row + '-language' + value + ' input:checked').each(function() {
        str = $(this).val();
      });

      if (str == '1') {
        $('.block-banner-desc-group' + group_row + '-banner' + banner_row + '-language' + value).show(300);
      } else {
        $('.block-banner-desc-group' + group_row + '-banner' + banner_row + '-language' + value).hide(300);
      }
    }).change();
  });
}

function sortSlider(group_row, banner_row) {
  $.each(languages, function(index, value) {
    var el_Sortable = document.getElementById('slider-wrapper-group' + group_row + '-banner' + banner_row + '-language' + value);
    
    if (el_Sortable !== null) {
      new Sortable(el_Sortable, {
        handle: ".handle-slider",
        animation: 150
      });
    }
  });
}
//--></script>
<script type="text/javascript"><!--
$('#group li').each(function(index_group, element) {
  $('#banner-image-group' + index_group + ' li').each(function(index_banner, element) {
    $('#language-group' + index_group + '-banner' + index_banner + ' li:first-child a').tab('show');
    
    showSettingBanner(index_group, index_banner);
    sortSlider(index_group, index_banner);
  });                 
});
//--></script>
<script type="text/javascript"><!--
function addSliderElement(group_row, banner_row, language_id) {
  var slider_item_row = $('#slider-wrapper-group' + group_row +'-banner' + banner_row +'-language' + language_id).children().length;

  html  = '<div class="slider-block slider-block-group' + group_row +'-banner' + banner_row +'-language' + language_id + '-item' + slider_item_row +'">';
  
  html += '  <div class="slide-panel-heading">';
  html += '    <i class="fa fa-arrows handle handle-slider"></i>';
  html += '    <a data-toggle="collapse" href="#slide' + slider_item_row +'-group' + group_row +'-banner' + banner_row +'-language' + language_id + '"><?php echo $entry_slide; ?> - ' + slider_item_row + '</a>';
  html += '    <div class="slide-button">';
  html += '      <i class="fa fa-pencil" data-tooltip="tooltip" title="<?php echo $button_edit; ?>" data-toggle="collapse" data-target="#slide' + slider_item_row +'-group' + group_row +'-banner' + banner_row +'-language' + language_id + '"></i>';
  html += '      <i class="fa fa-life-ring hidden" data-target="#modal-decor-slide' + slider_item_row +'-group' + group_row +'-banner' + banner_row +'-language' + language_id + '" data-toggle="modal" data-tooltip="tooltip" title="<?php echo $button_decor; ?>"></i>';
  html += '      <label>';
  html += '        <i onclick="$(this).toggleClass(\'slide-on slide-off\');" class="fa fa-power-off slide-on" data-tooltip="tooltip" title="<?php echo $button_status; ?>"></i>';
  html += '        <input type="checkbox" name="group_tab[' + group_row +'][banner_image][' + banner_row +'][image_slider][' + language_id + '][' + slider_item_row +'][status]" value="1" checked="checked" id="slide-status-group' + group_row +'-banner' + banner_row +'-language' + language_id + '-item' + slider_item_row +'" />';
  html += '      </label>';
  html += '      <i class="fa fa-trash-o" data-toggle="tooltip" title="<?php echo $button_remove; ?>" onclick="$(this).parent().parent().parent().remove();"></i>';
  html += '    </div>';
  html += '  </div>';
  html += '  <div id="modal-decor-slide' + slider_item_row +'-group' + group_row +'-banner' + banner_row +'-language' + language_id + '" class="modal fade">';
  html += '    <div class="modal-dialog modal-lg">';
  html += '      <div class="modal-content">';
  html += '        <div class="modal-header">';
  html += '          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>';
  html += '          <h4 class="modal-title"><?php echo $button_decor; ?> [<?php echo $entry_slide; ?> - ' + slider_item_row +']</h4>';
  html += '        </div>';
  html += '        <div class="modal-body">';
  html += '          <?php echo $text_decor_development; ?>';
  html += '        </div>';
  html += '        <div class="modal-footer">';
  html += '          <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>';
  html += '        </div>';
  html += '      </div>';
  html += '    </div>';
  html += '  </div>';
  html += '  <div id="slide' + slider_item_row +'-group' + group_row +'-banner' + banner_row +'-language' + language_id + '" class="panel-collapse collapse">';
  html += '    <div class="slide-panel-body">';
  html += '      <div class="form-group">';
  html += '        <label class="col-sm-2 control-label" for="input-image-slide-group' + group_row +'-banner' + banner_row +'-language' + language_id + '"><?php echo $entry_thumb; ?></label>';
  html += '        <div class="col-sm-10">';                                                                                                                                                        
  html += '          <a href="" id="thumb-image-slide-group' + group_row +'-banner' + banner_row +'-language' + language_id + '-item' + slider_item_row +'" data-toggle="image" class="img-thumbnail"><img src="<?php echo $placeholder; ?>" alt="" title="" data-placeholder="<?php echo $placeholder; ?>" /></a>';
  html += '          <input type="hidden" name="group_tab[' + group_row +'][banner_image][' + banner_row +'][image_slider][' + language_id + '][' + slider_item_row +'][image_slide]" value="" id="input-image-slide-group' + group_row +'-banner' + banner_row +'-language' + language_id + '-item' + slider_item_row +'" />';
  html += '        </div>';
  html += '      </div>';
  html += '      <div class="form-group">';
  html += '        <label class="col-sm-2 control-label" for="input-slider-item-title-slide-group' + group_row +'-banner' + banner_row +'-language' + language_id + '-item' + slider_item_row +'"><?php echo $entry_title; ?></label>';
  html += '        <div class="col-sm-10">';
  html += '          <input type="text" name="group_tab[' + group_row +'][banner_image][' + banner_row +'][image_slider][' + language_id + '][' + slider_item_row +'][title_slide]" value="" id="input-slider-item-title-slide-group' + group_row +'-banner' + banner_row +'-language' + language_id + '-item' + slider_item_row +'" placeholder="<?php echo $entry_title; ?>" class="form-control" />';
  html += '        </div>'; 
  html += '      </div>';
  html += '      <div class="form-group">';
  html += '        <label class="col-sm-2 control-label" for="input-slider-item-alt-slide-group' + group_row +'-banner' + banner_row +'-language' + language_id + '-item' + slider_item_row +'"><?php echo $entry_alt; ?></label>';
  html += '        <div class="col-sm-10">';
  html += '          <input type="text" name="group_tab[' + group_row +'][banner_image][' + banner_row +'][image_slider][' + language_id + '][' + slider_item_row +'][alt_slide]" value="" id="input-slider-item-alt-slide-group' + group_row +'-banner' + banner_row +'-language' + language_id + '-item' + slider_item_row +'" placeholder="<?php echo $entry_alt; ?>" class="form-control" />';
  html += '        </div>'; 
  html += '      </div>';
  html += '      <div class="form-group">';
  html += '        <label class="col-sm-2 control-label"><?php echo $entry_title_banner; ?></label>';
  html += '        <div class="col-sm-10">';
  html += '          <label class="radio-inline">';
  html += '            <input type="radio" name="group_tab[' + group_row +'][banner_image][' + banner_row +'][image_slider][' + language_id + '][' + slider_item_row +'][title_slide_show]" value="1" />';
  html += '            <?php echo $text_yes; ?>';
  html += '          </label>';
  html += '          <label class="radio-inline">';
  html += '            <input type="radio" name="group_tab[' + group_row +'][banner_image][' + banner_row +'][image_slider][' + language_id + '][' + slider_item_row +'][title_slide_show]" value="0" checked="checked" />';
  html += '            <?php echo $text_no; ?>';
  html += '          </label>';
  html += '        </div>';
  html += '      </div>';
  html += '      <div class="form-group">';
  html += '        <label class="col-sm-2 control-label" for="input-slide-text-align-group' + group_row +'-banner' + banner_row +'-language' + language_id + '-item' + slider_item_row +'"><?php echo $entry_text_align; ?></label>';
  html += '        <div class="col-sm-10">';
  html += '          <select name="group_tab[' + group_row +'][banner_image][' + banner_row +'][image_slider][' + language_id + '][' + slider_item_row +'][title_slide_align]" class="form-control">';
  html += '            <option value=""><?php echo $text_select; ?></option>';
  html += '            <option value="left"><?php echo $text_align_left; ?></option>';                     
  html += '            <option value="center"><?php echo $text_align_center; ?></option>';                     
  html += '            <option value="right"><?php echo $text_align_right; ?></option>';                     
  html += '          </select>';
  html += '        </div>';
  html += '      </div>';
  html += '      <div class="form-group">';
  html += '        <label class="col-sm-2 control-label" for="input-slide-link-group' + group_row +'-banner' + banner_row +'-language' + language_id + '-item' + slider_item_row +'"><?php echo $entry_link; ?></label>';
  html += '        <div class="col-sm-10">';
  html += '          <input type="text" name="group_tab[' + group_row +'][banner_image][' + banner_row +'][image_slider][' + language_id + '][' + slider_item_row +'][link_slide]" value="" id="input-slide-link-group' + group_row +'-banner' + banner_row +'-language' + language_id + '-item' + slider_item_row +'" placeholder="<?php echo $entry_link; ?>" class="form-control" />';
  html += '        </div>';
  html += '      </div>';
  html += '      <div class="form-group">';
  html += '        <label class="col-sm-2 control-label"><?php echo $entry_link_video; ?></label>';
  html += '        <div class="col-sm-10">';
  html += '          <label class="radio-inline">';
  html += '            <input type="radio" name="group_tab[' + group_row +'][banner_image][' + banner_row +'][image_slider][' + language_id + '][' + slider_item_row +'][link_slide_video]" value="1" />';
  html += '            <?php echo $text_yes; ?>';
  html += '          </label>';
  html += '          <label class="radio-inline">';
  html += '            <input type="radio" name="group_tab[' + group_row +'][banner_image][' + banner_row +'][image_slider][' + language_id + '][' + slider_item_row +'][link_slide_video]" value="0" checked="checked" />';
  html += '            <?php echo $text_no; ?>';
  html += '          </label>';
  html += '        </div>';
  html += '      </div>';
  html += '      <div class="form-group">';
  html += '        <label class="col-sm-2 control-label" for="input-slide-link-video-group' + group_row +'-banner' + banner_row +'-language' + language_id + '-item' + slider_item_row +'"><?php echo $entry_modal; ?></label>';
  html += '        <div class="col-sm-10">';
  html += '          <select name="group_tab[' + group_row +'][banner_image][' + banner_row +'][image_slider][' + language_id + '][' + slider_item_row +'][link_slide_video_modal]" id="input-slide-link-video-group' + group_row +'-banner' + banner_row +'-language' + language_id + '-item' + slider_item_row +'" class="form-control">';
  html += '            <option value="self"><?php echo $text_self; ?></option>';                     
  html += '            <option value="blank"><?php echo $text_target; ?></option>';                     
  html += '            <option value="modal"><?php echo $text_modal; ?></option>';                     
  html += '          </select>';
  html += '        </div>';
  html += '      </div>';
  html += '      <div class="form-group">';
  html += '        <label class="col-sm-2 control-label"><?php echo $entry_banner_desc_show; ?></label>';
  html += '        <div class="col-sm-10">';
  html += '          <label class="radio-inline">';
  html += '            <input type="radio" name="group_tab[' + group_row +'][banner_image][' + banner_row +'][image_slider][' + language_id + '][' + slider_item_row +'][desc_slide_show]" value="1" />';
  html += '            <?php echo $text_yes; ?>';
  html += '          </label>';
  html += '          <label class="radio-inline">';
  html += '            <input type="radio" name="group_tab[' + group_row +'][banner_image][' + banner_row +'][image_slider][' + language_id + '][' + slider_item_row +'][desc_slide_show]" value="0" checked="checked" />';
  html += '            <?php echo $text_no; ?>';
  html += '          </label>';
  html += '        </div>';
  html += '      </div>';
  html += '      <div class="form-group">';
  html += '        <label class="col-sm-2 control-label" for="input-slide-desc-group' + group_row +'-banner' + banner_row +'-language' + language_id + '-item' + slider_item_row +'"><?php echo $text_description; ?></label>';
  html += '        <div class="col-sm-10">';
  html += '          <textarea class="form-control hide-editor" name="group_tab[' + group_row +'][banner_image][' + banner_row +'][image_slider][' + language_id + '][' + slider_item_row +'][desc_slide]" rows="5" placeholder="<?php echo $text_description; ?>" id="input-slide-desc-group' + group_row +'-banner' + banner_row +'-language' + language_id + '-item' + slider_item_row +'" data-lang="<?php echo $lang; ?>"></textarea>';
  html += '          <a onclick="showEditorSlide(' + group_row +', ' + banner_row +', ' + language_id + ', ' + slider_item_row +');" class="check-ckeditor check-ckeditor-group' + group_row +'-banner' + banner_row +'-language' + language_id + '-item' + slider_item_row +'"><?php echo $text_show_editor; ?></a>';
  html += '        </div>';
  html += '      </div>';
  html += '    </div>';
  html += '  </div>';

  html += '</div>';

  $('#slider-wrapper-group' + group_row +'-banner' + banner_row +'-language' + language_id).append(html);

  slider_item_row++;
}
//--></script>
<script type="text/javascript"><!--
function showEditorSlide(group_row, banner_row, language_id, slider_item_row) {
  var textarea = $('#input-slide-desc-group' + group_row +'-banner' + banner_row +'-language' + language_id + '-item' + slider_item_row); 
  
  <?php if ($ckeditor) { ?>
  if (CKEDITOR.instances[$(textarea).attr('id')]) {
		CKEDITOR.instances[$(textarea).attr('id')].destroy(true);
		$('.check-ckeditor-group' + group_row +'-banner' + banner_row +'-language' + language_id + '-item' + slider_item_row).text('<?php echo $text_show_editor; ?>');
	} else {
		ckeditorInit('input-slide-desc-group' + group_row +'-banner' + banner_row +'-language' + language_id + '-item' + slider_item_row + '', getURLVar('token'));
    $('.check-ckeditor-group' + group_row +'-banner' + banner_row +'-language' + language_id + '-item' + slider_item_row).text('<?php echo $text_hide_editor; ?>');
  }
  <?php } else { ?>
  if($(textarea).hasClass('summernote')) {
    $(textarea).removeClass('summernote show-editor').summernote('destroy');
    $('.check-ckeditor-group' + group_row +'-banner' + banner_row +'-language' + language_id + '-item' + slider_item_row).text('<?php echo $text_show_editor; ?>');
  } else {
    $(textarea).addClass('summernote show-editor').summernote({height: 200, lang:'<?php echo $lang; ?>'});
    $('.check-ckeditor-group' + group_row +'-banner' + banner_row +'-language' + language_id + '-item' + slider_item_row).text('<?php echo $text_hide_editor; ?>');
  }
  <?php } ?>
}
//--></script>
<script type="text/javascript"><!--
<?php $group_row = 0; ?>
<?php foreach($group_tabs as $group_tab) { ?>
<?php $banner_row = 0; ?>
<?php foreach ($group_tab['banner_image'] as $banner_image) { ?>
<?php foreach ($languages as $language) { ?>
if ($('#input-desc-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>').hasClass('show-editor')) {
  ckeditorInit('input-desc-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>', getURLVar('token'));
}

$('.check-ckeditor-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>').click(function(){
  var textarea = $('#input-desc-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>');

  <?php if ($ckeditor) { ?>
  if (CKEDITOR.instances[$(textarea).attr('id')]) {
		CKEDITOR.instances[$(textarea).attr('id')].destroy(true);
		$(this).text('<?php echo $text_show_editor; ?>');
	} else {
		ckeditorInit('input-desc-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>', getURLVar('token'));
    $(this).text('<?php echo $text_hide_editor; ?>');
  }
  <?php } else { ?>
  if($(textarea).hasClass('summernote')) {
    $(textarea).removeClass('summernote show-editor').summernote('destroy');
    $(this).text('<?php echo $text_show_editor; ?>');
  } else {
    $(textarea).addClass('summernote show-editor').summernote({height: 200, lang:'<?php echo $lang; ?>'});
    $(this).text('<?php echo $text_hide_editor; ?>');
  } 
  <?php } ?>
});

// START Visual Editor Slide
<?php $slider_item_row = 0; ?>
<?php if (isset($banner_image['image_slider'][$language['language_id']])) { ?>
<?php foreach ($banner_image['image_slider'][$language['language_id']] as $slider_item) { ?>
if ($('#input-slide-desc-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>-item<?php echo $slider_item_row; ?>').hasClass('show-editor')) {
  ckeditorInit('input-slide-desc-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>-item<?php echo $slider_item_row; ?>', getURLVar('token'));
}

$('.check-ckeditor-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>-item<?php echo $slider_item_row; ?>').click(function(){
  var textarea = $('#input-slide-desc-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>-item<?php echo $slider_item_row; ?>');
  
  <?php if ($ckeditor) { ?>
  if (CKEDITOR.instances[$(textarea).attr('id')]) {
		CKEDITOR.instances[$(textarea).attr('id')].destroy(true);
		$(this).text('<?php echo $text_show_editor; ?>');
	} else {
		ckeditorInit('input-slide-desc-group<?php echo $group_row; ?>-banner<?php echo $banner_row; ?>-language<?php echo $language['language_id']; ?>-item<?php echo $slider_item_row; ?>', getURLVar('token'));
    $(this).text('<?php echo $text_hide_editor; ?>');
  }
  <?php } else { ?>
  if($(textarea).hasClass('summernote')) {
    $(textarea).removeClass('summernote show-editor').summernote('destroy');
    $(this).text('<?php echo $text_show_editor; ?>');
  } else {
    $(textarea).addClass('summernote show-editor').summernote({height: 200, lang:'<?php echo $lang; ?>'});
    $(this).text('<?php echo $text_hide_editor; ?>');
  }
  <?php } ?>
});
<?php $slider_item_row++; ?>
<?php } ?>
<?php } ?>
// END Visual Editor Slide

<?php } ?>
<?php $banner_row++; ?>
<?php } ?>
<?php $group_row++; ?>
<?php } ?>
//--></script>
<script type="text/javascript"><!--
function showEditorBanner(group_row, banner_row, language_id) {
  var textarea = $('#input-desc-group' + group_row +'-banner' + banner_row +'-language' + language_id); 
  
  <?php if ($ckeditor) { ?>
  if (CKEDITOR.instances[$(textarea).attr('id')]) {
		CKEDITOR.instances[$(textarea).attr('id')].destroy(true);
		$('.check-ckeditor-group' + group_row +'-banner' + banner_row +'-language' + language_id).text('<?php echo $text_show_editor; ?>');
	} else {
		ckeditorInit('input-desc-group' + group_row +'-banner' + banner_row +'-language' + language_id + '', getURLVar('token'));
    $('.check-ckeditor-group' + group_row +'-banner' + banner_row +'-language' + language_id).text('<?php echo $text_hide_editor; ?>');
  }
  <?php } else { ?>
  if($(textarea).hasClass('summernote')) {
    $(textarea).removeClass('summernote show-editor').summernote('destroy');
    $('.check-ckeditor-group' + group_row +'-banner' + banner_row +'-language' + language_id).text('<?php echo $text_show_editor; ?>');
  } else {
    $(textarea).addClass('summernote show-editor').summernote({height: 200, lang:'<?php echo $lang; ?>'});
    $('.check-ckeditor-group' + group_row +'-banner' + banner_row +'-language' + language_id).text('<?php echo $text_hide_editor; ?>');
  }
  <?php } ?>
}
//--></script>
<script type="text/javascript"><!--
$('#input-width-container').change(function() {
  var str = '';
  
  $('#input-width-container option:selected').each(function() {
    str = $(this).val();
  });
	      
  if (str == '3') {
    $('.image-bg').show(300);
  } else {
    $('.image-bg').hide(300);
  }
}).change();

$('#bg-mode').change(function() {
  var str = '';
  
  $('#bg-mode option:selected').each(function() {
    str = $(this).val();
  });
	      
  if (str == 'bg_color') {
    $('.mode-bg-image').hide();
    $('.mode-bg-color').show(300);
  } else {
    $('.mode-bg-color').hide();
    $('.mode-bg-image').show(300);
  }
}).change();

$('#group a:first').tab('show');

$(function () {   
  $('[data-tooltip="tooltip"]').tooltip()
});  

$(document).ready(function() {
  var myCodeMirror = CodeMirror.fromTextArea(document.getElementById('input-css'), {
    lineNumbers: true,               
    mode: 'css', 
    theme: 'dracula',        
  });
    
  $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
    myCodeMirror.refresh();   
  });
});
//--></script>
<script type="text/javascript"><!--
$('input[name=\'product_name\']').autocomplete({
	source: function(request, response) {
		$.ajax({
			url: 'index.php?route=catalog/product/autocomplete&<?php echo $token_text; ?>=<?php echo $token; ?>&filter_name=' +  encodeURIComponent(request),
			dataType: 'json',
			success: function(json) {
				response($.map(json, function(item) {
					return {
						label: item['name'],
						value: item['product_id']
					}
				}));
			}
		});
	},
	select: function(item) {
		$('input[name=\'product_name\']').val('');
		
		$('#featured-product' + item['value']).remove();
		
		$('#featured-product').append('<div id="featured-product' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="ocdbanner_product[]" value="' + item['value'] + '" /></div>');	
	}
});
	
$('#featured-product').delegate('.fa-minus-circle', 'click', function() {
	$(this).parent().remove();
});
//--></script>
<script type="text/javascript">
$('.colorpicker').each(function(index) {
  $(this).attr('id', 'colorpicker_'+index);
	
  var colorpicker = new Array();
	
  colorpicker[index] = $('#colorpicker_'+index).val();
	
  $('#colorpicker_'+index).css('border-left-color', colorpicker[index]);

	$('#colorpicker_'+index).colpick({
	  layout:'rgbhex',
		submit:0,
		color: colorpicker[index],
		onChange:function(hsb,hex,rgb,el,bySetColor) {
		  if(!bySetColor) {
			  $(el).val('#'+hex);
			  $('#colorpicker_'+index).val('#'+hex );
			}
			$(el).css('border-left-color','#'+hex);
			$(this+' .colpick_current_color').css('background-color', colorpicker[index] );
			$('.colpick_current_color').css('display', 'visible' );

		}
	}).keyup(function(){
	  $(this).colpickSetColor(this.value);
	});
});
</script>
<div id="pojasnenie-custom-grid" class="modal fade">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i></button>
        <h4><?php echo $text_pojasnenie_header; ?></h4>
      </div>
      <div class="modal-body"><?php echo $text_pojasnenie_custom_grid; ?></div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $button_close; ?></button>
      </div>
    </div>
  </div>
</div>
<div id="modal-video-id" class="modal fade">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i></button>
        <h4><?php echo $text_video_id_header; ?></h4>
      </div>
      <div class="modal-body"><?php echo $text_video_id; ?></div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $button_close; ?></button>
      </div>
    </div>
  </div>
</div>
<?php } ?>
<?php echo $footer; ?>
