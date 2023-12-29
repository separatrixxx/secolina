<?php

	require_once DIR_TEMPLATE . 'extension/module/mega_filter-fn.tpl';
	
?>

<ul class="nav nav-tabs attributes">
	<?php if( ! empty( $_configurationMain ) ) { ?>
		<li class="active"><a data-toggle="tab" href="#tab-base-attributes"><i class="glyphicon glyphicon-wrench"></i> <?php echo $tab_base_attributes; ?></a></li>
	<?php } ?>
	<li<?php echo empty( $_configurationMain ) ? ' class="active"' : ''; ?>><a data-toggle="tab" href="#tab-refresh-results"><i class="glyphicon glyphicon-repeat"></i> <?php echo $tab_refresh_results; ?></a></li>
	<li><a data-toggle="tab" href="#tab-display-list-of-items"><i class="glyphicon glyphicon-eye-open"></i> <?php echo $tab_display_list_of_items; ?></a></li>
	<li><a data-toggle="tab" href="#tab-style"><i class="glyphicon glyphicon-adjust"></i> <?php echo $tab_style; ?></a></li>
	<li><a data-toggle="tab" href="#tab-widget"><i class="glyphicon glyphicon-search"></i> <?php echo $text_widget; ?></a></li>
	<?php if( ! empty( $_configurationMain ) ) { ?>
		<li><a data-toggle="tab" href="#tab-themes"><i class="glyphicon glyphicon-file"></i> <?php echo $tab_themes; ?></a></li>
	<?php } ?>
	<li><a data-toggle="tab" href="#tab-javascript"><i class="glyphicon glyphicon-edit"></i> <?php echo $tab_javascript; ?></a></li>
	<li><a data-toggle="tab" href="#tab-other"><i class="glyphicon glyphicon-pencil"></i> <?php echo $tab_other; ?></a></li>
</ul>

<div class="tab-content">
	<?php if( ! empty( $_configurationMain ) ) { ?>
		<div class="tab-pane active" id="tab-base-attributes">
			<br /><?php echo $entry_default_values; ?><br /><br />
			<img src="<?php echo $HTTP_URL; ?>view/stylesheet/mf/images/default-values-base-attributes.png" /><br /><br />
			<?php 

				$_baseName		= $_name . '_settings[attribs]';
				$_baseValues	= $_configurationValues['attribs'];

				require DIR_TEMPLATE . 'extension/module/' . $_name . '-base-attribs.tpl';

			?>
		</div>
	<?php } ?>
	<div class="tab-pane<?php echo empty( $_configurationMain ) ? ' active' : ''; ?>" id="tab-refresh-results">
		<table class="table table-tbody">
			<tbody>
				<tr>
					<td width="200"><?php echo $entry_show_loader_over_results; ?></td>
					<td>
						<?php echo mf_render_btn_group( $text_yes, $text_no, $_configurationName . '[show_loader_over_results]', ! empty( $_configurationValues['show_loader_over_results'] ) ); ?>
					</td>
				</tr>
				<tr>
					<td><?php echo $entry_show_loader_over_filter; ?></td>
					<td>
						<?php echo mf_render_btn_group( $text_yes, $text_no, $_configurationName . '[show_loader_over_filter]', ! empty( $_configurationValues['show_loader_over_filter'] ) ); ?>
					</td>
				</tr>
				<tr>
					<td><?php echo $entry_auto_scroll_to_results; ?></td>
					<td>
						<div style="vertical-align: middle; display: inline">
							<?php echo mf_render_btn_group( $text_yes, $text_no, $_configurationName . '[auto_scroll_to_results]', ! empty( $_configurationValues['auto_scroll_to_results'] ) ); ?>
						</div>
						- <?php echo $entry_add; ?>
						<input size="4" type="text" name="<?php echo $_configurationName; ?>[add_pixels_from_top]" value="<?php echo empty( $_configurationValues['add_pixels_from_top'] ) ? 0 : $_configurationValues['add_pixels_from_top']; ?>" />
						<?php echo $text_pixels_from_top; ?>
					</td>
				</tr>
				<tr>
					<td><?php echo $entry_ajax_pagination; ?></td>
					<td>
						<?php echo mf_render_btn_group( $text_yes, $text_no, $_configurationName . '[ajax_pagination]', ! empty( $_configurationValues['ajax_pagination'] ) ); ?>
					</td>
				</tr>
				<tr>
					<td><?php echo $entry_infinite_scroll; ?></td>
					<td>
						<?php echo mf_render_btn_group( $text_yes, $text_no, $_configurationName . '[infinite_scroll]', ! empty( $_configurationValues['infinite_scroll'] ) ); ?>
					</td>
				</tr>
				<tr>
					<td rowspan="3">
						<?php echo $entry_refresh_results; ?>
					</td>
					<td>
						<input id="refresh_results_a" type="radio" name="<?php echo $_configurationName; ?>[refresh_results]" value="immediately" <?php echo empty( $_configurationValues['refresh_results'] ) || $_configurationValues['refresh_results'] == 'immediately' ? 'checked="checked"' : ''; ?> />
						<label for="refresh_results_a"><?php echo $text_immediately; ?></label>

						<div class="help"><?php echo $text_immediately_help; ?></div>
					</td>
				</tr>
				<tr>
					<td style="width: auto">
						<input id="refresh_results_b" type="radio" name="<?php echo $_configurationName; ?>[refresh_results]" value="with_delay" <?php echo ! empty( $_configurationValues['refresh_results'] ) && $_configurationValues['refresh_results'] == 'with_delay' ? 'checked="checked"' : ''; ?> />
						<label for="refresh_results_b"><?php echo $text_with_delay; ?></label>

						<div class="help"><?php echo $text_with_delay_guide; ?></div><br />
						<?php echo $text_with_delay_help; ?><input type="text" size="5" name="<?php echo $_configurationName; ?>[refresh_delay]" value="<?php echo empty( $_configurationValues['refresh_delay'] ) ? '1000' : $_configurationValues['refresh_delay']; ?>" /> <?php echo $text_milliseconds; ?>
					</td>
				</tr>
				<tr>
					<td style="width: auto">
						<input id="refresh_results_c" type="radio" name="<?php echo $_configurationName; ?>[refresh_results]" value="using_button" <?php echo ! empty( $_configurationValues['refresh_results'] ) && $_configurationValues['refresh_results'] == 'using_button' ? 'checked="checked"' : ''; ?> />
						<label for="refresh_results_c"><?php echo $text_using_button; ?></label>

						<div class="help"><?php echo $text_using_button_help; ?></div><br />

						<table style="margin-left: -4px"><tr><td width="100" style="vertical-align: top;"><b><?php echo $text_place_button; ?>:</b></td><td style="line-height: 20px">
							<input style="vertical-align: middle; margin-top: 0" <?php echo empty( $_configurationValues['place_button'] ) || $_configurationValues['place_button'] == 'bottom' ? ' checked="checked"' : ''; ?> type="radio" name="<?php echo $_configurationName; ?>[place_button]" value="bottom" id="place_button_a" /> <label for="place_button_a"><?php echo $text_place_button_bottom; ?></label><br />
							<input style="vertical-align: middle; margin-top: 0" <?php echo ! empty( $_configurationValues['place_button'] ) && $_configurationValues['place_button'] == 'top' ? ' checked="checked"' : ''; ?> type="radio" name="<?php echo $_configurationName; ?>[place_button]" value="top" id="place_button_b" /> <label for="place_button_b"><?php echo $text_place_button_top; ?></label><br />
							<input style="vertical-align: middle; margin-top: 0" <?php echo ! empty( $_configurationValues['place_button'] ) && $_configurationValues['place_button'] == 'bottom_top' ? ' checked="checked"' : ''; ?> type="radio" name="<?php echo $_configurationName; ?>[place_button]" value="bottom_top" id="place_button_c" /> <label for="place_button_c"><?php echo $text_place_button_bottom_top; ?></label><br />
							</td></tr></table>
						
						<table>
							<tr>
								<td width="50">
									<?php echo mf_render_btn_group( $text_yes, $text_no, $_configurationName . '[using_button_with_count_info]', ! empty( $_configurationValues['using_button_with_count_info'] ) ); ?> 
								</td>
								<td>
									<label for="using_button_with_count_info"><?php echo $text_using_button_with_count_info; ?></label>
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</tbody>
		</table>
	</div>

	<div class="tab-pane" id="tab-display-list-of-items">
		<table class="table table-tbody">
			<tbody>
				<tr>
					<td width="200">
						<label for="display-list-of-items_a">
							<img src="<?php echo $HTTP_URL; ?>view/stylesheet/mf/images/display-list-of-items-scroll.png?v2" />
						</label>
						<center><input id="display-list-of-items_a" type="radio" name="<?php echo $_configurationName; ?>[display_list_of_items][type]" value="scroll"<?php echo empty( $_configurationValues['display_list_of_items']['type'] ) || $_configurationValues['display_list_of_items']['type'] == 'scroll' ? ' checked="checked"' : ''; ?> /></center>
					</td>
					<td style="vertical-align: top">
						<?php echo $entry_max_height; ?><br />
						<input type="text" name="<?php echo $_configurationName; ?>[display_list_of_items][max_height]" value="<?php echo empty( $_configurationValues['display_list_of_items']['max_height'] ) ? 155 : (int) $_configurationValues['display_list_of_items']['max_height']; ?>" /> px
						
						<br /><br />
						<?php echo $text_standard_scroll; ?>:
						<?php echo mf_render_btn_group( $text_yes, $text_no, $_configurationName . '[display_list_of_items][standard_scroll]', ! empty( $_configurationValues['display_list_of_items']['standard_scroll'] ) ); ?>
					</td>
				</tr>
				<tr>
					<td>
						<label for="display-list-of-items_b">
							<img src="<?php echo $HTTP_URL; ?>view/stylesheet/mf/images/display-list-of-items-button-more.png?v2" />
						</label>
						<center><input id="display-list-of-items_b" type="radio" name="<?php echo $_configurationName; ?>[display_list_of_items][type]" value="button_more"<?php echo ! empty( $_configurationValues['display_list_of_items']['type'] ) && $_configurationValues['display_list_of_items']['type'] == 'button_more' ? ' checked="checked"' : ''; ?> /></center>
					</td>
					<td style="vertical-align: top">
						<?php echo $entry_limit_of_items; ?><br />
						<input type="text" name="<?php echo $_configurationName; ?>[display_list_of_items][limit_of_items]" value="<?php echo empty( $_configurationValues['display_list_of_items']['limit_of_items'] ) ? 4 : (int) $_configurationValues['display_list_of_items']['limit_of_items']; ?>" />
					</td>
				</tr>
				<tr>
					<td>
						<img src="<?php echo $HTTP_URL; ?>view/stylesheet/mf/images/display-live-filter.png" />
					</td>
					<td style="vertical-align: top">
						<?php echo $text_enabled; ?>:
						<?php echo mf_render_btn_group( $text_yes, $text_no, $_configurationName . '[display_live_filter][enabled]', ! empty( $_configurationValues['display_live_filter']['enabled'] ) ); ?>
						<br /><br />
						
						<?php echo $entry_limit_live_filter; ?><br />
						
						<input type="text" name="<?php echo $_configurationName; ?>[display_live_filter][items]" value="<?php echo empty( $_configurationValues['display_live_filter']['items'] ) ? '' : (int) $_configurationValues['display_live_filter']['items']; ?>" />
					</td>
				</tr>
			</tbody>
		</table>
	</div>

	<div class="tab-pane" id="tab-style">
		<table class="table table-tbody">
			<tr>
				<td style="width: 230px;"><?php echo $entry_color_counter_background; ?></td>
				<td width="300">
					<div class="input-group" style="width:250px;">
						<input class="form-control mf-colorPicker" type="text" name="<?php echo $_configurationName; ?>[background_color_counter]" value="<?php echo ! empty( $_configurationValues['background_color_counter'] ) ? $_configurationValues['background_color_counter'] : '#428bca'; ?>" />
						<span class="input-group-addon" style="padding: 0">
							<img src="<?php echo $HTTP_URL; ?>view/stylesheet/mf/images/couter-color.png" />
						</span>
					</div>
				</td>
				<td width="200"><?php echo $entry_color_counter_text; ?></td>
				<td>
					<div class="input-group" style="width:250px;">
						<input class="form-control mf-colorPicker" type="text" name="<?php echo $_configurationName; ?>[text_color_counter]" value="<?php echo ! empty( $_configurationValues['text_color_counter'] ) ? $_configurationValues['text_color_counter'] : '#ffffff'; ?>" />
						<span class="input-group-addon" style="padding: 0">
							<img src="<?php echo $HTTP_URL; ?>view/stylesheet/mf/images/couter-color.png" />
						</span>
					</div>
				</td>
			</tr>
			<tr>
				<td><?php echo $entry_color_search_button_background; ?></td>
				<td>
					<div class="input-group" style="width:250px;">
						<input class="form-control mf-colorPicker" type="text" name="<?php echo $_configurationName; ?>[background_color_search_button]" value="<?php echo ! empty( $_configurationValues['background_color_search_button'] ) ? $_configurationValues['background_color_search_button'] : '#428bca'; ?>" />
						<span class="input-group-addon" style="padding: 0">
							<img src="<?php echo $HTTP_URL; ?>view/stylesheet/mf/images/search-button-color.png" />
						</span>
					</div>
				</td>
				<td><?php echo $entry_color_slider_background; ?></td>
				<td>
					<div class="input-group" style="width:250px;">
						<input class="form-control mf-colorPicker" type="text" name="<?php echo $_configurationName; ?>[background_color_slider]" value="<?php echo ! empty( $_configurationValues['background_color_slider'] ) ? $_configurationValues['background_color_slider'] : ''; ?>" />
						<span class="input-group-addon" style="padding: 0">
							<img src="<?php echo $HTTP_URL; ?>view/stylesheet/mf/images/slider-color.png" />
						</span>
					</div>
				</td>
			</tr>
			<tr>
				<td><?php echo $entry_color_header_background; ?></td>
				<td width="300">
					<div class="input-group" style="width:250px;">
						<input class="form-control mf-colorPicker" type="text" name="<?php echo $_configurationName; ?>[background_color_header]" value="<?php echo ! empty( $_configurationValues['background_color_header'] ) ? $_configurationValues['background_color_header'] : ''; ?>" />
						<span class="input-group-addon" style="padding: 0">
							<img src="<?php echo $HTTP_URL; ?>view/stylesheet/mf/images/header-color.png" />
						</span>
					</div>
				</td>
				<td width="200"><?php echo $entry_color_header_text; ?></td>
				<td>
					<div class="input-group" style="width:250px;">
						<input class="form-control mf-colorPicker" type="text" name="<?php echo $_configurationName; ?>[text_color_header]" value="<?php echo ! empty( $_configurationValues['text_color_header'] ) ? $_configurationValues['text_color_header'] : ''; ?>" />
						<span class="input-group-addon" style="padding: 0">
							<img src="<?php echo $HTTP_URL; ?>view/stylesheet/mf/images/header-color.png" />
						</span>
					</div>
				</td>
			</tr>
			<tr>
				<td style="width: 230px;"><?php echo $entry_color_header_border_bottom; ?></td>
				<td width="300">
					<div class="input-group" style="width:250px;">
						<input class="form-control mf-colorPicker" type="text" name="<?php echo $_configurationName; ?>[border_bottom_color_header]" value="<?php echo ! empty( $_configurationValues['border_bottom_color_header'] ) ? $_configurationValues['border_bottom_color_header'] : ''; ?>" />
						<span class="input-group-addon" style="padding: 0">
							<img src="<?php echo $HTTP_URL; ?>view/stylesheet/mf/images/header-border-bottom-color.png" />
						</span>
					</div>
				</td>
				<td width="200"><?php echo $entry_image_size; ?></td>
				<td>
					<div class="input-group" style="width:250px;">
						<input class="form-control" type="text" name="<?php echo $_configurationName; ?>[image_size_width]" size="5" value="<?php echo ! empty( $_configurationValues['image_size_width'] ) ? $_configurationValues['image_size_width'] : '20'; ?>" />
						<span class="input-group-addon">
							x
						</span>
						<input class="form-control" type="text" name="<?php echo $_configurationName; ?>[image_size_height]" size="5" value="<?php echo ! empty( $_configurationValues['image_size_height'] ) ? $_configurationValues['image_size_height'] : '20'; ?>" />
						<span class="input-group-addon" style="padding: 0">
							<img src="<?php echo $HTTP_URL; ?>view/stylesheet/mf/images/image-size.png" />
						</span>
					</div>
				</td>
			</tr>
			<tr>
				<td><?php echo $entry_color_of_loader_over_results; ?></td>
				<td>
					<div class="input-group" style="width:250px;">
						<input class="form-control mf-colorPicker" type="text" name="<?php echo $_configurationName; ?>[color_of_loader_over_results]" value="<?php echo ! empty( $_configurationValues['color_of_loader_over_results'] ) ? $_configurationValues['color_of_loader_over_results'] : ''; ?>" />
					</div>
				</td>
				<td><?php echo $entry_color_of_loader_over_filter; ?></td>
				<td>
					<div class="input-group" style="width:250px;">
						<input class="form-control mf-colorPicker" type="text" name="<?php echo $_configurationName; ?>[color_of_loader_over_filter]" value="<?php echo ! empty( $_configurationValues['color_of_loader_over_filter'] ) ? $_configurationValues['color_of_loader_over_filter'] : ''; ?>" />
					</div>
				</td>
			</tr>
			<tr>
				<td><?php echo $entry_color_of_box_background; ?></td>
				<td colspan="3">
					<div class="input-group" style="width:250px;">
						<input class="form-control mf-colorPicker" type="text" name="<?php echo $_configurationName; ?>[background_color_box]" value="<?php echo ! empty( $_configurationValues['background_color_box'] ) ? $_configurationValues['background_color_box'] : ''; ?>" />
					</div>
				</td>
			</tr>
			<tr>
				<td><?php echo $entry_css_style; ?></td>
				<td colspan="3">
					<?php if( empty( $_configurationMain ) ) { ?>
						<div style="margin-bottom: 10px;"><?php echo sprintf( $text_define_own_styles, $IDX ); ?></div>
					<?php } ?>
					<textarea name="<?php echo $_configurationName; ?>[css_style]" <?php echo ! empty( $_configurationMain ) ? 'cols="150"' : 'style="width:100%"'; ?> rows="20"><?php echo empty( $_configurationValues['css_style'] ) ? '' : $_configurationValues['css_style']; ?></textarea>
				</td>
			</tr>
		</table>
	</div>

	<div class="tab-pane" id="tab-widget">
		<table class="table table-tbody">
			<tr>
				<td><?php echo $entry_widget_button_position; ?></td>
				<td colspan="3">
					<?php echo mf_render_btn(array(
						'sticked' => array( 'name' => $text_sticked ),
						'fixed_top_left' => array( 'name' => $text_fixed . ' ' . $text_top . ' ' . $text_left ),
						'fixed_top_right' => array( 'name' => $text_fixed . ' ' . $text_top . ' ' . $text_right ),
						'fixed_bottom_left' => array( 'name' => $text_fixed . ' ' . $text_bottom . ' ' . $text_left ),
						'fixed_bottom_right' => array( 'name' => $text_fixed . ' ' . $text_bottom . ' ' . $text_right ),
						'fixed_top_center' => array( 'name' => $text_fixed . ' ' . $text_top . ' ' . $text_center ),
						'fixed_bottom_center' => array( 'name' => $text_fixed . ' ' . $text_bottom . ' ' . $text_center )
					), $_configurationName . '[widget_button_position]', empty( $_configurationValues['widget_button_position'] ) ? 'sticked' : $_configurationValues['widget_button_position']); ?>
				</td>
			</tr>
			<tr>
				<td><?php echo $entry_widget_backdrop; ?></td>
				<td>
					<?php echo mf_render_btn(array(
						'' => array( 'name' => $text_no ),
						'1' => array( 'name' => $text_yes ),
						'pc' => array( 'name' => $text_pc ),
						'mobile' => array( 'name' => $text_mobile ),
					), $_configurationName . '[widget_backdrop]', empty( $_configurationValues['widget_backdrop'] ) ? '' : $_configurationValues['widget_backdrop']); ?>
				</td>
				<td><?php echo $entry_widget_backdrop_clickable; ?></td>
				<td>
					<?php echo mf_render_btn(array(
						'' => array( 'name' => $text_no ),
						'1' => array( 'name' => $text_yes ),
						'pc' => array( 'name' => $text_pc ),
						'mobile' => array( 'name' => $text_mobile ),
					), $_configurationName . '[widget_backdrop_clickable]', empty( $_configurationValues['widget_backdrop_clickable'] ) ? '' : $_configurationValues['widget_backdrop_clickable']); ?>
				</td>
			</tr>
			<tr>
				<td><?php echo $entry_widget_button_margin_top; ?></td>
				<td>
					<div class="input-group" style="width:250px;">
						<input class="form-control" type="number" min="1" name="<?php echo $_configurationName; ?>[widget_button_margin_top]" value="<?php echo ! empty( $_configurationValues['widget_button_margin_top'] ) ? $_configurationValues['widget_button_margin_top'] : '40'; ?>" data-default="40" placeholder="-" />
						<span class="input-group-addon">px</span>
					</div>
				</td>
				<td><?php echo $entry_widget_button_margin_bottom; ?></td>
				<td>
					<div class="input-group" style="width:250px;">
						<input class="form-control" type="number" min="1" name="<?php echo $_configurationName; ?>[widget_button_margin_bottom]" value="<?php echo ! empty( $_configurationValues['widget_button_margin_bottom'] ) ? $_configurationValues['widget_button_margin_bottom'] : '10'; ?>" data-default="10" placeholder="-" />
						<span class="input-group-addon">px</span>
					</div>
				</td>
			</tr>
			<tr>
				<td><?php echo $entry_widget_button_margin_left; ?></td>
				<td>
					<div class="input-group" style="width:250px;">
						<input class="form-control" type="number" min="1" name="<?php echo $_configurationName; ?>[widget_button_margin_left]" value="<?php echo ! empty( $_configurationValues['widget_button_margin_left'] ) ? $_configurationValues['widget_button_margin_left'] : '10'; ?>" data-default="10" placeholder="-" />
						<span class="input-group-addon">px</span>
					</div>
				</td>
				<td><?php echo $entry_widget_button_margin_right; ?></td>
				<td>
					<div class="input-group" style="width:250px;">
						<input class="form-control" type="number" min="1" name="<?php echo $_configurationName; ?>[widget_button_margin_right]" value="<?php echo ! empty( $_configurationValues['widget_button_margin_right'] ) ? $_configurationValues['widget_button_margin_right'] : '10'; ?>" data-default="10" placeholder="-" />
						<span class="input-group-addon">px</span>
					</div>
				</td>
			</tr>
			<tr>
				<td><?php echo $entry_widget_margin_top; ?></td>
				<td>
					<div class="input-group" style="width:250px;">
						<input class="form-control" type="number" min="1" name="<?php echo $_configurationName; ?>[widget_margin_top]" value="<?php echo ! empty( $_configurationValues['widget_margin_top'] ) ? $_configurationValues['widget_margin_top'] : '40'; ?>" />
						<span class="input-group-addon">px</span>
					</div>
				</td>
				<td><?php echo $entry_widget_button_icon_position; ?></td>
				<td>
					<?php echo mf_render_btn(array(
						'left' => array( 'name' => $text_left ),
						'right' => array( 'name' => $text_right ),
					), $_configurationName . '[widget_button_icon_position]', empty( $_configurationValues['widget_button_icon_position'] ) ? 'left' : $_configurationValues['widget_button_icon_position']); ?>
				</td>
			</tr>
			<tr>
				<td><?php echo $entry_widget_button_text_size; ?></td>
				<td>
					<div class="input-group" style="width:250px;">
						<input class="form-control" type="number" min="1" name="<?php echo $_configurationName; ?>[widget_button_text_size]" value="<?php echo ! empty( $_configurationValues['widget_button_text_size'] ) ? $_configurationValues['widget_button_text_size'] : '15'; ?>" />
						<span class="input-group-addon">px</span>
					</div>
				</td>
				<td><?php echo $entry_widget_button_icon_size; ?></td>
				<td>
					<div class="input-group" style="width:250px;">
						<input class="form-control" type="number" min="1" name="<?php echo $_configurationName; ?>[widget_button_icon_size]" value="<?php echo ! empty( $_configurationValues['widget_button_icon_size'] ) ? $_configurationValues['widget_button_icon_size'] : '20'; ?>" />
						<span class="input-group-addon">px</span>
					</div>
				</td>
			</tr>
			<tr>
				<td width="250"><?php echo $entry_widget_button_icon; ?></td>
				<td width="300">
					<div class="input-group" style="width:250px;">
						<span class="input-group-addon"><i class=""></i></span>
						<input class="form-control" type="text" name="<?php echo $_configurationName; ?>[widget_button_icon]" value="<?php echo ! empty( $_configurationValues['widget_button_icon'] ) ? $_configurationValues['widget_button_icon'] : 'fa fa-search'; ?>" />
						<span class="input-group-addon" style="padding: 0"><img src="<?php echo $HTTP_URL; ?>view/stylesheet/mf/images/widget-button-background.png" /></span>
					</div>
				</td>
				<td width="250"><?php echo $entry_widget_button_icon_close; ?></td>
				<td>
					<div class="input-group" style="width:250px;">
						<span class="input-group-addon"><i class=""></i></span>
						<input class="form-control" type="text" name="<?php echo $_configurationName; ?>[widget_button_icon_close]" value="<?php echo ! empty( $_configurationValues['widget_button_icon_close'] ) ? $_configurationValues['widget_button_icon_close'] : 'fa fa-times'; ?>" />
						<span class="input-group-addon" style="padding: 0"><img src="<?php echo $HTTP_URL; ?>view/stylesheet/mf/images/widget-button-background.png" /></span>
					</div>
				</td>
			</tr>
			<tr>
				<td><?php echo $entry_widget_button_icon_color; ?></td>
				<td>
					<div class="input-group" style="width:250px;">
						<input class="form-control mf-colorPicker" type="text" name="<?php echo $_configurationName; ?>[widget_button_icon_color]" value="<?php echo ! empty( $_configurationValues['widget_button_icon_color'] ) ? $_configurationValues['widget_button_icon_color'] : ''; ?>" />
						
						<span class="input-group-addon" style="padding: 0">
							<img src="<?php echo $HTTP_URL; ?>view/stylesheet/mf/images/widget-button-background.png" />
						</span>
					</div>
				</td>
				<td><?php echo $entry_widget_close_button_icon_color; ?></td>
				<td>
					<div class="input-group" style="width:250px;">
						<input class="form-control mf-colorPicker" type="text" name="<?php echo $_configurationName; ?>[widget_close_button_icon_color]" value="<?php echo ! empty( $_configurationValues['widget_close_button_icon_color'] ) ? $_configurationValues['widget_close_button_icon_color'] : ''; ?>" />
						
						<span class="input-group-addon" style="padding: 0">
							<img src="<?php echo $HTTP_URL; ?>view/stylesheet/mf/images/widget-button-background.png" />
						</span>
					</div>
				</td>
			</tr>
			<tr>
				<td><?php echo $entry_widget_button_background; ?></td>
				<td>
					<div class="input-group" style="width:250px;">
						<input class="form-control mf-colorPicker" type="text" name="<?php echo $_configurationName; ?>[background_color_widget_button]" value="<?php echo ! empty( $_configurationValues['background_color_widget_button'] ) ? $_configurationValues['background_color_widget_button'] : ''; ?>" />
					
						<span class="input-group-addon" style="padding: 0">
							<img src="<?php echo $HTTP_URL; ?>view/stylesheet/mf/images/widget-button-background.png" />
						</span>
					</div>
				</td>
				<td><?php echo $entry_widget_close_button_background; ?></td>
				<td>
					<div class="input-group" style="width:250px;">
						<input class="form-control mf-colorPicker" type="text" name="<?php echo $_configurationName; ?>[background_color_widget_close_button]" value="<?php echo ! empty( $_configurationValues['background_color_widget_close_button'] ) ? $_configurationValues['background_color_widget_close_button'] : ''; ?>" />
					
						<span class="input-group-addon" style="padding: 0">
							<img src="<?php echo $HTTP_URL; ?>view/stylesheet/mf/images/widget-button-background.png" />
						</span>
					</div>
				</td>
			</tr>
			<tr>
				<td><?php echo $entry_widget_backdrop_background; ?></td>
				<td>
					<div class="input-group" style="width:250px;">
						<input class="form-control mf-colorPicker" type="text" name="<?php echo $_configurationName; ?>[widget_backdrop_background]" value="<?php echo ! empty( $_configurationValues['widget_backdrop_background'] ) ? $_configurationValues['widget_backdrop_background'] : ''; ?>" />
					</div>
				</td>
				<td><?php echo $entry_widget_button_show_when_scrolled_from_top; ?></td>
				<td>
					<div class="input-group" style="width:250px;">
						<input class="form-control" type="number" min="0" name="<?php echo $_configurationName; ?>[widget_button_show_when_scrolled_from_top]" value="<?php echo ! empty( $_configurationValues['widget_button_show_when_scrolled_from_top'] ) ? $_configurationValues['widget_button_show_when_scrolled_from_top'] : '0'; ?>" placeholder="-" />
						<span class="input-group-addon">px</span>
					</div>
				</td>
			</tr>
			<tr>
				<td><?php echo $entry_widget_button_text; ?></td>
				<td colspan="3">
					<?php foreach( $languages as $language ) { ?>
						<div class="col-lg-3" style="padding-left: 0">
							<div class="input-group">
								<input class="form-control" type="text" placeholder="<?php echo $language['name']; ?>" name="<?php echo $_configurationName; ?>[widget_button_text][<?php echo $language['language_id']; ?>]" value="<?php echo ! empty( $_configurationValues['widget_button_text'][$language['language_id']] ) ? $_configurationValues['widget_button_text'][$language['language_id']] : ''; ?>" />
								<span class="input-group-addon"><img src="<?php echo $HTTP_URL; ?>language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png" alt="<?php echo $language['name']; ?>" /></span>
							</div>
						</div>
					<?php } ?>
				</td>
			</tr>
			<tr>
				<td><?php echo $entry_widget_button_text_close; ?></td>
				<td colspan="3">
					<?php foreach( $languages as $language ) { ?>
						<div class="col-lg-3" style="padding-left: 0">
							<div class="input-group">
								<input class="form-control" type="text" placeholder="<?php echo $language['name']; ?>" name="<?php echo $_configurationName; ?>[widget_button_text_close][<?php echo $language['language_id']; ?>]" value="<?php echo ! empty( $_configurationValues['widget_button_text_close'][$language['language_id']] ) ? $_configurationValues['widget_button_text_close'][$language['language_id']] : ''; ?>" />
								<span class="input-group-addon"><img src="<?php echo $HTTP_URL; ?>language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png" alt="<?php echo $language['name']; ?>" /></span>
							</div>
						</div>
					<?php } ?>
				</td>
			</tr>
		</table>
	</div>
	
	<?php if( ! empty( $_configurationMain ) ) { ?>
		<div class="tab-pane" id="tab-themes">
			abc
		</div>
	
		<script type="text/javascript">
			$('#tab-themes').text('<?php echo $text_loading; ?>...').load('<?php echo $themes_url; ?>'.replace(/&amp;/g,'&'));
		</script>
	<?php } ?>

	<div class="tab-pane" id="tab-javascript">
		<table class="table table-tbody">
			<tr>
				<td width="200"><?php echo $entry_javascript; ?></td>
				<td>
<?php
			
$javascript_example_code = 
"MegaFilter.prototype.beforeRequest = function() {
	var self = this;
};

MegaFilter.prototype.beforeRender = function( htmlResponse, htmlContent, json ) {
	var self = this;
};

MegaFilter.prototype.afterRender = function( htmlResponse, htmlContent, json ) {
	var self = this;
};
";
					
					?>
					<textarea name="<?php echo $_configurationName; ?>[javascript]" <?php echo ! empty( $_configurationMain ) ? 'cols="150"' : 'style="width:100%"'; ?> rows="20"><?php echo empty( $_configurationValues['javascript'] ) ? $javascript_example_code : $_configurationValues['javascript']; ?></textarea>
				</td>
			</tr>
			<tr>
				<td><?php echo $entry_content_selector; ?></td>
				<td>
					<table>
						<tr>
							<td>
								<?php echo $entry_main_content_selector; ?><br />
								$(<input type="text" style="width:350px" name="<?php echo $_configurationName; ?>[content_selector]" value="<?php echo ! empty( $_configurationValues['content_selector'] ) ? $_configurationValues['content_selector'] : '#mfilter-content-container'; ?>" />)
								
								<br /><br />
								
								<?php echo $entry_h1_content_selector; ?><br />
								$(<input type="text" style="width:350px" name="<?php echo $_configurationName; ?>[content_selector_h1]" value="<?php echo ! empty( $_configurationValues['content_selector_h1'] ) ? $_configurationValues['content_selector_h1'] : '#content h1,#content h2'; ?>" />).first()
								
								<br /><br />
								
								<?php echo $entry_pagination_content_selector; ?><br />
								$(<input type="text" style="width:350px" name="<?php echo $_configurationName; ?>[content_selector_pagination]" value="<?php echo ! empty( $_configurationValues['content_selector_pagination'] ) ? $_configurationValues['content_selector_pagination'] : '#mfilter-content-container .pagination:first'; ?>" />)
								<br /><br />
								
								<?php echo $entry_product_content_selector; ?><br />
								$(<input type="text" style="width:350px" name="<?php echo $_configurationName; ?>[content_selector_product]" value="<?php echo ! empty( $_configurationValues['content_selector_product'] ) ? $_configurationValues['content_selector_product'] : '#mfilter-content-container .product-layout:first'; ?>" />)
							</td>
							<td>
								<?php echo $text_content_selector_guide; ?><br />
								<img src="<?php echo $HTTP_URL; ?>view/stylesheet/mf/images/content_selector.jpg" />
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<?php if( ! empty( $_configurationMain ) ) { ?>
				<tr>
					<td><?php echo $entry_home_page_by_ajax; ?></td>
					<td>
						<?php echo mf_render_btn_group( $text_yes, $text_no, $_configurationName . '[home_page_ajax]', ! empty( $_configurationValues['home_page_ajax'] ) ); ?>
						<br /><br />
						$(<input size="50" type="text" placeholder="<?php echo $text_content_selector; ?>" name="<?php echo $_configurationName; ?>[home_page_content_selector]" value="<?php echo ! empty( $_configurationValues['home_page_content_selector'] ) ? $_configurationValues['home_page_content_selector'] : '#content'; ?>" />)
					</td>
				</tr>
			<?php } ?>
		</table>
	</div>

	<div class="tab-pane" id="tab-other">
		<table class="table table-tbody">
			<tr>
				<td><?php echo $entry_type_of_condition; ?></td>
				<td>
					<select name="<?php echo $_configurationName; ?>[type_of_condition]">
						<option value="or" <?php echo ! empty( $_configurationValues['type_of_condition'] ) && $_configurationValues['type_of_condition'] == 'or' ? 'selected="selected"' : ''; ?>>OR</option>
						<option value="and" <?php echo ! empty( $_configurationValues['type_of_condition'] ) && $_configurationValues['type_of_condition'] == 'and' ? 'selected="selected"' : ''; ?>>AND</option>
					</select>
				</td>
			</tr>
			<tr>
				<td width="300"><?php echo $entry_calculate_number_of_products; ?></td>
				<td>
					<?php echo mf_render_btn_group( $text_yes, $text_no, $_configurationName . '[calculate_number_of_products]', ! empty( $_configurationValues['calculate_number_of_products'] ) ); ?>
				</td>
			</tr>
			<tr>
				<td><?php echo $entry_show_products; ?></td>
				<td>
					<?php echo mf_render_btn_group( $text_yes, $text_no, $_configurationName . '[show_number_of_products]', ! empty( $_configurationValues['show_number_of_products'] ) ); ?>
				</td>
			</tr>
			<tr>
				<td>
					<?php echo $entry_hide_inactive_values; ?>
				</td>
				<td>
					<?php echo mf_render_btn_group( $text_yes, $text_no, $_configurationName . '[hide_inactive_values]', ! empty( $_configurationValues['hide_inactive_values'] ) ); ?>
					<img src="<?php echo $HTTP_URL; ?>view/stylesheet/mf/images/hide-inactive-values.png" style="vertical-align: middle; margin-left: 20px;" />
				</td>
			</tr>
			<tr>
				<td><?php echo $entry_show_reset_button; ?></td>
				<td>
					<?php echo mf_render_btn_group( $text_yes, $text_no, $_configurationName . '[show_reset_button]', ! empty( $_configurationValues['show_reset_button'] ) ); ?>
				</td>
			</tr>
			<tr>
				<td><?php echo $entry_show_top_reset_button; ?></td>
				<td>
					<?php echo mf_render_btn_group( $text_yes, $text_no, $_configurationName . '[show_top_reset_button]', ! empty( $_configurationValues['show_top_reset_button'] ) ); ?>
				</td>
			</tr>
			<?php if( ! empty( $_configurationMain ) ) { ?>
				<tr>
					<td>
						<?php echo $entry_enable_cache; ?>
						<span class="help">
							<?php echo $text_cache_help; ?>
							<select name="<?php echo $_configurationName . '[cache_lifetime]'; ?>">
								<?php $tmp = array( 1 => "1 $text_hour", 2 => "2 $text_hours", 5 => "5 $text_hours", 12 => "12 $text_hours", 24 => "1 $text_day", 48 => "2 $text_days", 168 => "7 $text_days", 720 => "30 $text_days", 2160 => "90 $text_days" ); foreach( $tmp as $tmpval => $tmpname ) { ?>
									<option <?php echo ( ! isset( $_configurationValues['cache_lifetime'] ) && $tmpval == 24 ) || ( isset( $_configurationValues['cache_lifetime'] ) && $_configurationValues['cache_lifetime'] == $tmpval ) ? ' selected="selected"' : ''; ?> value="<?php echo $tmpval; ?>"><?php echo $tmpname; ?></option>
								<?php } ?>
							</select>
						</span>
					</td>
					<td>
						<table>
							<tr>
								<td>
									<?php echo mf_render_btn_group( $text_yes, $text_no, $_configurationName . '[cache_enabled]', ! empty( $_configurationValues['cache_enabled'] ) ); ?>
									<a href="<?php echo $action_clear_cache; ?>" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> <?php echo $text_clear_cache; ?></a>
								</td>
								<td style="padding: 0 10px 0 30px;">
									<?php echo $entry_try_to_boost_speed; ?>
									<span class="help">
										<?php echo $text_try_to_boost_speed_help; ?>
									</span>
								</td>
								<td>
									<?php echo mf_render_btn_group( $text_yes, $text_no, $_configurationName . '[try_to_boost_speed]', ! empty( $_configurationValues['try_to_boost_speed'] ) ); ?>
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td><?php echo $entry_show_products_from_subcategories; ?></td>
					<td>
						<?php if( version_compare( VERSION, '1.5.5', '>=' ) ) { ?>
							<input style="vertical-align: middle; margin-top: -2px;" type="checkbox" name="<?php echo $_configurationName; ?>[show_products_from_subcategories]" value="1" <?php echo ! empty( $_configurationValues['show_products_from_subcategories'] ) ? 'checked="checked"' : ''; ?> />

							- <?php echo $text_start_level; ?>
							<select name="<?php echo $_configurationName; ?>[level_products_from_subcategories]">
								<?php for( $i = 1; $i <= 10; $i++ ) { ?>
									<option <?php echo ! empty( $_configurationValues['level_products_from_subcategories'] ) && $_configurationValues['level_products_from_subcategories'] == $i ? ' selected="selected"' : ''; ?> value="<?php echo $i; ?>"><?php echo $i; ?></option>
								<?php } ?>
							</select>

							<span class="help"><?php echo $text_start_level_help; ?></span>
							
							<table style="margin-top:10px" id="try_to_boost_subcategories_speed">
								<tr>
									<td>
										<?php echo mf_render_btn_group( $text_yes, $text_no, $_configurationName . '[try_to_boost_subcategories_speed]', ! empty( $_configurationValues['try_to_boost_subcategories_speed'] ) ); ?>
									</td>
									<td style="padding-left: 10px;">
										<?php echo $entry_try_to_boost_subcategories_speed; ?>
										<span class="help">
											<?php echo $text_try_to_boost_subcategories_speed_help; ?>
										</span>
									</td>
								</tr>
							</table>
							
							<script type="text/javascript">
								$('input[type=checkbox][name*=show_products_from_subcategories]').change(function(){
									$('#try_to_boost_subcategories_speed')[$(this).is(':checked')?'removeClass':'addClass']('hide');
								}).trigger('change');
							</script>
						<?php } else { ?>
							<?php echo $text_oc_155; ?>
						<?php } ?>
					</td>
				</tr>
				<tr>
					<td>
						<?php echo $entry_layout_category; ?>
					</td>
					<td>
						<select name="<?php echo $_configurationName; ?>[layout_c]">
							<?php foreach( $layouts as $layout ) { ?>
								<option value="<?php echo $layout['layout_id']; ?>"<?php if( $_configurationValues['layout_c'] == $layout['layout_id'] ) { ?> selected="selected"<?php } ?>><?php echo $layout['name']; ?></option>
							<?php } ?>
						</select>
					</td>
				</tr>
			<?php } ?>
				<tr>
					<td>
						<?php echo $entry_in_stock_status; ?>
					</td>
					<td>
						<?php if( ! empty( $_configurationMain ) ) { ?>
							<select name="<?php echo $_configurationName; ?>[in_stock_status]" style="margin-bottom: 8px">
								<?php foreach( $stockStatuses as $stock_status ) { ?>
									<option value="<?php echo $stock_status['stock_status_id']; ?>"<?php if( ( is_array( $_configurationValues['in_stock_status'] ) && in_array( $stock_status['stock_status_id'], $_configurationValues['in_stock_status'] ) ) || ( ! is_array( $_configurationValues['in_stock_status'] ) && $_configurationValues['in_stock_status'] == $stock_status['stock_status_id'] ) ) { ?> selected="selected"<?php } ?>><?php echo $stock_status['name']; ?></option>
								<?php } ?>
							</select>
							<br />
						<?php } ?>
						
						<?php echo mf_render_btn(array(
								'1' => array( 'name' => $text_yes ),
								'ifa' => array( 'name' => $text_only_if_filter_is_active ),
								'0' => array( 'name' => $text_no )
							), $_configurationName . '[in_stock_default_selected]', isset( $_configurationValues['in_stock_default_selected'] ) ? $_configurationValues['in_stock_default_selected'] : '0' ); 
						?>
						
						<?php if( ! empty( $mfp_plus_version ) ) { ?>
							<br /><br />
							<?php echo mf_render_btn_group( $text_yes, $text_no, $_configurationName . '[stock_for_options_plus]', ! empty( $_configurationValues['stock_for_options_plus'] ) ); ?> <?php echo $text_stock_for_options_plus; ?>
						<?php } ?>
					</td>
				</tr>
			<?php if( ! empty( $_configurationMain ) ) { ?>
				<tr>
					<td>
						<?php echo $entry_in_stock_default_selected; ?>
					</td>
					<td>
						<select name="<?php echo $_configurationName; ?>[in_stock_status_selected][]" multiple="multiple" style="margin-bottom: 8px">
							<?php foreach( $stockStatuses as $stock_status ) { ?>
								<option value="<?php echo $stock_status['stock_status_id']; ?>"<?php 
									if( 
										( isset( $_configurationValues['in_stock_status_selected'] ) && in_array( $stock_status['stock_status_id'], $_configurationValues['in_stock_status_selected'] ) ) 
											|| 
										( ! isset( $_configurationValues['in_stock_status_selected'] ) && $_configurationValues['in_stock_status'] == $stock_status['stock_status_id'] ) 
									) { ?> selected="selected"<?php } ?>><?php echo $stock_status['name']; ?></option>
							<?php } ?>
						</select>
					</td>
				</tr>
				<tr>
					<td>
						<?php echo $entry_allow_search_for_empty_keyword; ?>
					</td>
					<td>
						<input type="checkbox" name="<?php echo $_configurationName; ?>[allow_search_for_empty_keyword]" value="1" <?php echo ! empty( $_configurationValues['allow_search_for_empty_keyword'] ) ? 'checked="checked"' : ''; ?> />
					</td>
				</tr>
				<tr>
					<td>
						<?php echo $entry_not_remember_filter_for_subcategories; ?>
					</td>
					<td>
						<input type="checkbox" name="<?php echo $_configurationName; ?>[not_remember_filter_for_subcategories]" value="1" <?php echo ! empty( $_configurationValues['not_remember_filter_for_subcategories'] ) ? 'checked="checked"' : ''; ?> />
						<img src="<?php echo $HTTP_URL; ?>view/stylesheet/mf/images/not-remember-filter-for-subcategories.png" style="vertical-align: middle; margin-left: 20px;" />
					</td>
				</tr>
				<tr>
					<td>
						<?php echo $entry_not_remember_filter_for_products; ?>
					</td>
					<td>
						<input type="checkbox" name="<?php echo $_configurationName; ?>[not_remember_filter_for_products]" value="1" <?php echo ! empty( $_configurationValues['not_remember_filter_for_products'] ) ? 'checked="checked"' : ''; ?> />
						<br /><small><?php echo $text_not_remember_filter_for_products_help; ?></small>
					</td>
				</tr>
				<tr>
					<td>
						<?php echo $entry_search_keywords_via_search_field_also_in_product_descriptions; ?>
					</td>
					<td>
						<input type="checkbox" name="<?php echo $_configurationName; ?>[search_keywords_via_search_field_also_in_product_descriptions]" value="1" <?php echo ! empty( $_configurationValues['search_keywords_via_search_field_also_in_product_descriptions'] ) ? 'checked="checked"' : ''; ?> />
						<br /><small><?php echo $text_search_keywords_via_search_field_also_in_product_descriptions_help; ?></small>
					</td>
				</tr>
				<tr>
					<td>
						<?php echo $entry_attribute_separator; ?>
						<span class="help"><?php echo $text_attribute_separator_guide; ?></span>
					</td>
					<td>
						<?php $separators = array( ',', '|', ';', '#', '/', '–' ); ?>
						<select name="<?php echo $_configurationName; ?>[attribute_separator]">
							<option value=""><?php echo $text_none; ?></option>
							<?php foreach( $separators as $separator ) { ?>
								<option value="<?php echo $separator; ?>"<?php if( ! empty( $_configurationValues['attribute_separator'] ) && $_configurationValues['attribute_separator'] == $separator ) { ?> selected="selected"<?php } ?>><?php echo $separator; ?></option>
							<?php } ?>
						</select>
						<img src="<?php echo $HTTP_URL; ?>view/stylesheet/mf/images/attribute-spearator.png?v2" style="vertical-align: middle; margin-left: 20px;" />
					</td>
				</tr>
			<?php } ?>
			<tr>
				<td><?php echo $entry_manual_init; ?></td>
				<td>
					<?php echo mf_render_btn_collapsed( $text_yes, $text_no, $text_pc, $text_mobile, $_configurationName . '[manual_init]', empty( $_configurationValues['manual_init'] ) ? '0' : $_configurationValues['manual_init'] ); ?>
					<img src="<?php echo $HTTP_URL; ?>view/stylesheet/mf/images/manual-init.png" style="vertical-align: middle; margin-left: 20px;" />
				</td>
			</tr>
			<tr>
				<td><?php echo $entry_change_top_to_column_on_mobile; ?></td>
				<td>
					<?php echo mf_render_btn_group( $text_yes, $text_no, $_configurationName . '[change_top_to_column_on_mobile]', ! empty( $_configurationValues['change_top_to_column_on_mobile'] ) ); ?>
				</td>
			</tr>
			<?php if( ! empty( $_configurationMain ) ) { ?>
				<tr>
					<td><?php echo $entry_minify_support; ?></td>
					<td>
						<?php echo mf_render_btn_group( $text_yes, $text_no, $_configurationName . '[minify_support]', ! empty( $_configurationValues['minify_support'] ) ); ?>
						<br />
						<div style="margin: 7px 0; padding: 3px 5px; background: #ffffdf; border: 1px solid #e9eeb1; display: inline-block;">
							<i class="fa fa-info-circle"></i> <?php echo $entry_minify_support_help; ?>
						</div>
					</td>
				</tr>
				<tr>
					<td><?php echo $entry_combine_js_css_fiels; ?></td>
					<td>
						<?php echo mf_render_btn_group( $text_yes, $text_no, $_configurationName . '[combine_js_css_files]', ! empty( $_configurationValues['combine_js_css_files'] ) ); ?>
						<br />
						<div style="margin: 7px 0; padding: 3px 5px; background: #ffffdf; border: 1px solid #e9eeb1; display: inline-block;">
							<i class="fa fa-info-circle"></i> <?php echo $entry_combine_js_css_fiels_help; ?>
						</div>
					</td>
				</tr>
				<tr>
					<td><?php echo $entry_enable_to_sort_subqueries; ?></td>
					<td>
						<?php echo mf_render_btn_group( $text_yes, $text_no, $_configurationName . '[enable_to_sort_subqueries]', ! empty( $_configurationValues['enable_to_sort_subqueries'] ) ); ?>
						<br />
						<div style="margin: 7px 0; padding: 3px 5px; background: #ffffdf; border: 1px solid #e9eeb1; display: inline-block;">
							<i class="fa fa-info-circle"></i> <?php echo $entry_enable_to_sort_subqueries_help; ?>
						</div>
					</td>
				</tr>
				<tr>
					<td><?php echo $entry_calculate_number_of_products_for_sliders; ?></td>
					<td>
						<?php echo mf_render_btn_group( $text_yes, $text_no, $_configurationName . '[calculate_number_of_products_for_sliders]', ! empty( $_configurationValues['calculate_number_of_products_for_sliders'] ) ); ?>
						<br />
						<div style="margin: 7px 0; padding: 3px 5px; background: #ffffdf; border: 1px solid #e9eeb1; display: inline-block;">
							<i class="fa fa-info-circle"></i> <?php echo $entry_calculate_number_of_products_for_sliders_help; ?>
						</div>
					</td>
				</tr>
				<?php if( ! empty( $mfp_plus_version ) ) { ?>
					<tr>
						<td><?php echo $entry_disable_tags_indexing; ?></td>
						<td>
							<?php echo mf_render_btn_group( $text_yes, $text_no, $_configurationName . '[disable_tags_indexing]', ! empty( $_configurationValues['disable_tags_indexing'] ) ); ?>
							<br />
							<div style="margin: 7px 0; padding: 3px 5px; background: #ffffdf; border: 1px solid #e9eeb1; display: inline-block;">
								<i class="fa fa-info-circle"></i> <?php echo $entry_disable_tags_indexing_help; ?> <?php echo $entry_disable_tags_indexing_help2; ?>
							</div>
						</td>
					</tr>
				<?php } ?>
				<tr>
					<td><?php echo $entry_sql_parser; ?></td>
					<td>
						<?php echo mf_render_btn(array(
							'basic' => array( 'name' => $text_sql_parser_basic ),
							'advanced' => array( 'name' => $text_sql_parser_advanced ),
						), $_configurationName . '[sql_parser]', empty( $_configurationValues['sql_parser'] ) ? 'basic' : $_configurationValues['sql_parser'] ); ?>
						<br />
						<div style="margin: 7px 0; padding: 3px 5px; background: #ffffdf; border: 1px solid #e9eeb1; display: inline-block;">
							<i class="fa fa-info-circle"></i> <?php echo $entry_sql_parser_help; ?>
						</div>
					</td>
				</tr>
				<tr>
					<td><?php echo $entry_increase_precision_price_filter; ?></td>
					<td>
						<?php echo mf_render_btn(array(
							'0' => array( 'name' => $text_no ),
							'1' => array( 'name' => $text_yes ),
						), $_configurationName . '[increase_precision_price_filter]', empty( $_configurationValues['increase_precision_price_filter'] ) ? '0' : $_configurationValues['increase_precision_price_filter'] ); ?>
						<br />
						<div style="margin: 7px 0; padding: 3px 5px; background: #ffffdf; border: 1px solid #e9eeb1; display: inline-block;">
							<i class="fa fa-info-circle"></i> <?php echo $entry_increase_precision_price_filter_help; ?>
						</div>
					</td>
				</tr>
			<?php } ?>
			<?php /*
			<tr>
				<td><?php echo $entry_pin_box; ?></td>
				<td>
					<?php echo mf_render_btn_group( $text_yes, $text_no, $_configurationName . '[pin_box]', ! empty( $_configurationValues['pin_box'] ) ); ?>
					<br />
					<div style="margin: 7px 0; padding: 3px 5px; background: #ffffdf; border: 1px solid #e9eeb1; display: inline-block;">
						<i class="fa fa-info-circle"></i> <?php echo $entry_pin_box_help; ?>
					</div>
					<br />
					$filter_box.(<input type="text" style="width:350px" name="<?php echo $_configurationName; ?>[pin_container_selector]" value="<?php echo ! empty( $_configurationValues['pin_container_selector'] ) ? $_configurationValues['content_selector_h1'] : ''; ?>" />).closest()
				</td>
			</tr> */ ?>
			<tr>
				<td><?php echo $entry_swipe_settings; ?></td>
				<td>
					<table>
						<tr>
							<td class="text-right"><?php echo $entry_swipe_threshold; ?>&nbsp;</td>
							<td>
								<div class="input-group" style="width: 100px;">
									<input type="text" class="form-control" name="<?php echo $_configurationName; ?>[swipe_threshold]" value="<?php echo ! empty( $_configurationValues['swipe_threshold'] ) ? $_configurationValues['swipe_threshold'] : '75'; ?>" />
									<div class="input-group-addon">
										px
									</div>
								</div>
							</td>
							<td>
								<div style="margin: 7px 0 7px 10px; padding: 3px 5px; background: #ffffdf; border: 1px solid #e9eeb1; display: inline-block;">
									<i class="fa fa-info-circle"></i> <?php echo $entry_swipe_threshold_help; ?>
								</div>
							</td>
						</tr>
						<tr>
							<td class="text-right"><?php echo $entry_swipe_cancel_threshold; ?>&nbsp;</td>
							<td>
								<div class="input-group" style="width: 100px;">
									<input type="text" class="form-control" name="<?php echo $_configurationName; ?>[swipe_cancel_threshold]" value="<?php echo ! empty( $_configurationValues['swipe_cancel_threshold'] ) ? $_configurationValues['swipe_cancel_threshold'] : ''; ?>" />
									<div class="input-group-addon">
										px
									</div>
								</div>
							</td>
							<td>
								<div style="margin: 7px 0 7px 10px; padding: 3px 5px; background: #ffffdf; border: 1px solid #e9eeb1; display: inline-block;">
									<i class="fa fa-info-circle"></i> <?php echo $entry_swipe_cancel_threshold_help; ?>
								</div>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</div>
</div>

<link type="text/css" href="<?php echo $HTTP_URL; ?>view/stylesheet/mf/css/colorpicker.css" rel="stylesheet" />
<script type="text/javascript" src="<?php echo $HTTP_URL; ?>view/stylesheet/mf/js/colorpicker.js"></script>

<link type="text/css" href="<?php echo $HTTP_URL; ?>view/stylesheet/mf/css/fontawesome-iconpicker.min.css" rel="stylesheet" />
<script type="text/javascript" src="<?php echo $HTTP_URL; ?>view/stylesheet/mf/js/fontawesome-iconpicker.min.js"></script>

<script type="text/javascript">	
	(function($){
		$().ready(function(){
			var icons = (function searchCssClass() {
				var icons = [];
				
				function is_icon(text) {
					return text && text.indexOf('fa-')>-1 && text.indexOf('::before')>-1;
				}
				
				function add(texts) {
					var skip = [
						'share', 'twitter-square', 'facebook-square', 'linkedin-square', 'pinterest-square', 'google-plus-square',
						'youtube-square', 'xing-square', 'share-alt', 'pinterest-p', 'share-square-o'
					];
					texts = texts.split(',');
					
					for( var i = 0; i < texts.length; i++ ) {
						var text = 'fa ' + texts[i].replace('.', '').replace('::before', '').replace(/^ +| +$/, ''),
							sk = false;

						for( var j = 0; j < skip.length; j++ ) {
							if( text == 'fa fa-' + skip[j] ) {
								sk = true;
								break;
							}
						}
						
						if( ! sk ) {
							icons.push({ title: text, searchTerms: [] });
						}
					}
				}
				
				for (let i = 0; i < document.styleSheets.length; i++) {
				  let styleSheet = document.styleSheets[i];
				  try {
					for (let j = 0; j < styleSheet.cssRules.length; j++) {
					  let rule = styleSheet.cssRules[j];
					  if ( is_icon( rule.selectorText ) ) {
						add( rule.selectorText );
					  }
					}
					if (styleSheet.imports) {
					  for (let k = 0; k < styleSheet.imports.length; k++) {
						let imp = styleSheet.imports[k];
						for (let l = 0; l < imp.cssRules.length; l++) {
						  let rule = imp.cssRules[l];
						  if ( is_icon( rule.selectorText ) ) {
							add( rule.selectorText );
						  }
						}
					  }
					}
				  } catch (err) {}
				}
				
				return icons;
			  })();
			
			
			$('input[name="<?php echo $_configurationName; ?>[calculate_number_of_products]"]').change(function(){
				var checked = $(this).val() == '1';
				
				$('input[name="<?php echo $_configurationName; ?>[show_number_of_products]"],input[name="<?php echo $_configurationName; ?>[hide_inactive_values]"]').parent().parent().parent().parent()[checked?'show':'hide']();
			}).filter(':checked').trigger('change');
			
			$('input[name="<?php echo $_configurationName; ?>[widget_button_position]"]').change(function(){
				var p = $(this).val(),
					a = {
						top: p != 'fixed_top_left' && p != 'fixed_top_right' && p != 'sticked' && p != 'fixed_top_center',
						bottom: p != 'fixed_bottom_left' && p != 'fixed_bottom_right' && p != 'fixed_bottom_center',
						left: p != 'fixed_top_left' && p != 'fixed_bottom_left',
						right: p != 'fixed_top_right' && p != 'fixed_bottom_right'
					},
					i;
				
				for( i in a ) {
					$('input[name="<?php echo $_configurationName; ?>[widget_button_margin_' + i + ']"]').attr('readonly', a[i]).each(function(){
						if( a[i] ) {
							$(this).val('');
						} else if( $(this).val() == '' ) {
							$(this).val( $(this).data('default') );
						}
					});
				}
				
				$('input[name="<?php echo $_configurationName; ?>[widget_button_show_when_scrolled_from_top]"').attr('readonly', p == 'sticked').each(function(){
					if( p == 'sticked' ) {
						$(this).val('');
					} else if( $(this).val() == '' ) {
						$(this).val(0);
					}
				});
			}).filter(':checked').trigger('change');		
			
			
			$('input[name="<?php echo $_configurationName; ?>[widget_button_icon]"]').iconpicker({
				icons: icons
			});
			
			$('input[name="<?php echo $_configurationName; ?>[widget_button_icon_close]"]').iconpicker({
				icons: icons
			});
			
			$('.iconpicker-items a[role=button]').click(function(e){
				e.preventDefault();
			});
		});
	})(jQuery);
	
	jQuery('input[name="<?php echo $_configurationName; ?>[refresh_results]"]').change(function(){
		jQuery('input[name="<?php echo $_configurationName; ?>[refresh_results]"]').each(function(){
			var $inputs = jQuery(this).parent().find('input:not([name="<?php echo $_configurationName; ?>[refresh_results]"])');

			if( jQuery(this).is(':checked') ) {
				$inputs.removeAttr('disabled');
			} else {
				$inputs.attr('disabled', true);
			}
		});
	}).trigger('change');
	
	//Color Pickers
		jQuery("input.mf-colorPicker").each(function(){
			var tis = jQuery(this);

			if( tis.ColorPicker ) {
				tis.ColorPicker({
					onSubmit: function(hsb, hex, rgb, el) {
						jQuery(el).val("#"+hex).next().css("background-color","#"+hex);
						jQuery(el).ColorPickerHide();
					},
					onChange: function(hsb, hex, rgb) {
						tis.val("#"+hex).next().css("background-color","#"+hex);
					},
					onBeforeShow: function() {
						tis.ColorPickerSetColor(tis.val());
					}
				}).bind('keyup', function(){
					tis.ColorPickerSetColor("#"+tis.val());
				});
			}
		});
</script>