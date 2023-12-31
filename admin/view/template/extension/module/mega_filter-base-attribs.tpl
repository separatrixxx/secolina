<?php

	require_once DIR_TEMPLATE . 'extension/module/mega_filter-fn.tpl';

	if( ! isset( $IDX ) )
		$IDX = 0;

?>

<table class="table">
	<thead>
		<tr>
			<td class="left"><?php echo $text_attribute_name; ?></td>
			<td class="center" width="90"><?php echo $text_enabled; ?></td>
			<td class="center" width="80"><?php echo $text_sort_order; ?></td>
			<td class="center" width="180"><?php echo $text_display_as_type; ?></td>
			<td class="center" width="145"><?php echo $text_display_list_of_items; ?></td>
			<td class="left"><?php echo $text_settings; ?></td>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td width="200">
				<?php echo $attrib_search; ?>
			</td>
			<td class="center">
				<?php echo mf_render_btn(array(
					'1' => array( 'name' => '<i class="fa fa-check"></i>', 'tooltip' => $text_yes ),
					'0' => array( 'name' => '<i class="fa fa-remove"></i>', 'tooltip' => $text_no ),
					'logged' => array( 'name' => '<i class="fa fa-key"></i>', 'tooltip' => $text_display_only_logged )
				), $_baseName . '[search][enabled]', isset( $_baseValues['search']['enabled'] ) ? $_baseValues['search']['enabled'] : false); ?>
			</td>
			<td class="center">
				<input class="form-control" type="text" name="<?php echo $_baseName; ?>[search][sort_order]" value="<?php echo ! isset( $_baseValues['search']['sort_order'] ) ? '' : $_baseValues['search']['sort_order']; ?>" size="3" />
			</td>
			<td class="center">
				-
			</td>
			<td class="center">
				-
			</td>
			<td class="left">
				<input id="<?php echo $IDX; ?>_attribs_search_collapsed_a" style="vertical-align: middle; margin-top: 0" type="radio" name="<?php echo $_baseName; ?>[search][collapsed]" value="" <?php echo ! empty( $_baseValues['search']['collapsed'] ) ? '' : 'checked="checked"'; ?> />
				<label for="<?php echo $IDX; ?>_attribs_search_collapsed_a"><?php echo $text_show_header; ?></label>
				&nbsp;&nbsp;&nbsp;
				<input id="<?php echo $IDX; ?>_attribs_search_collapsed_b" style="vertical-align: middle; margin-top: 0" type="radio" name="<?php echo $_baseName; ?>[search][collapsed]" value="1" <?php echo ! empty( $_baseValues['search']['collapsed'] ) && $_baseValues['search']['collapsed'] == '1' ? 'checked="checked"' : ''; ?> />
				<label for="<?php echo $IDX; ?>_attribs_search_collapsed_b"><?php echo $text_collapsed_by_default; ?> <?php echo $text_and_show_header; ?></label>
				&nbsp;&nbsp;&nbsp;
				<input id="<?php echo $IDX; ?>_attribs_search_collapsed_c" style="vertical-align: middle; margin-top: 0" type="radio" name="<?php echo $_baseName; ?>[search][collapsed]" value="hide_header" <?php echo ! empty( $_baseValues['search']['collapsed'] ) && $_baseValues['search']['collapsed'] == 'hide_header' ? 'checked="checked"' : ''; ?> />
				<label for="<?php echo $IDX; ?>_attribs_search_collapsed_c"><?php echo $text_hide_header; ?></label>
				
				<br />
				
				<?php echo $text_with_delay_help; ?><input type="text" size="5" name="<?php echo $_baseName; ?>[search][refresh_delay]" value="<?php echo empty( $_baseValues['search']['refresh_delay'] ) ? '1000' : $_baseValues['search']['refresh_delay']; ?>" /> <?php echo $text_milliseconds; ?> ( -1 <?php echo $text_disabled; ?> )<br />
				
				<br />
				
				<?php echo $text_show_button_search; ?>: <?php echo mf_render_btn_group( $text_yes, $text_no, $_baseName . '[search][button]', ! empty( $_baseValues['search']['button'] ) ); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $attrib_price; ?>
			</td>
			<td class="center">
				<?php echo mf_render_btn(array(
					'1' => array( 'name' => '<i class="fa fa-check"></i>', 'tooltip' => $text_yes ),
					'0' => array( 'name' => '<i class="fa fa-remove"></i>', 'tooltip' => $text_no ),
					'logged' => array( 'name' => '<i class="fa fa-key"></i>', 'tooltip' => $text_display_only_logged )
				), $_baseName . '[price][enabled]', isset( $_baseValues['price']['enabled'] ) ? $_baseValues['price']['enabled'] : false); ?>
			</td>
			<td class="center">
				<input class="form-control" type="text" name="<?php echo $_baseName; ?>[price][sort_order]" value="<?php echo ! isset( $_baseValues['price']['sort_order'] ) ? '' : $_baseValues['price']['sort_order']; ?>" size="3" />
			</td>
			<td class="center">
				-
			</td>
			<td class="center">
				-
			</td>
			<td class="left">
				<?php echo $text_collapsed_by_default; ?>: <?php echo mf_render_btn_collapsed( $text_yes, $text_no, $text_pc, $text_mobile, $_baseName . '[price][collapsed]', empty( $_baseValues['price']['collapsed'] ) ? '0' : $_baseValues['price']['collapsed'] ); ?>
		
			</td>
		</tr>
		<?php 
		
			$tmp_attribs = array(
				'manufacturers', 'model', 'sku', 'upc', 'ean', 'jan', 'isbn', 'mpn', 'location', 'length', 'width', 'height', 'weight', 'tags', 'discounts', 'discounted',
			);
		
		?>
		<?php foreach( $tmp_attribs as $tmp_attrib ) { if( $tmp_attrib == 'tags' && empty( $tagsSupport ) ) continue; ?>
			<tr>
				<td>
					<?php echo ${'attrib_' . $tmp_attrib}; ?>
				</td>
				<td class="center">
				<?php echo mf_render_btn(array(
					'1' => array( 'name' => '<i class="fa fa-check"></i>', 'tooltip' => $text_yes ),
					'0' => array( 'name' => '<i class="fa fa-remove"></i>', 'tooltip' => $text_no ),
					'logged' => array( 'name' => '<i class="fa fa-key"></i>', 'tooltip' => $text_display_only_logged )
				), $_baseName . '[' . $tmp_attrib . '][enabled]', isset( $_baseValues[$tmp_attrib]['enabled'] ) ? $_baseValues[$tmp_attrib]['enabled'] : false); ?>
				</td>
				<td class="center">
					<input class="form-control" type="text" name="<?php echo $_baseName; ?>[<?php echo $tmp_attrib; ?>][sort_order]" value="<?php echo ! isset( $_baseValues[$tmp_attrib]['sort_order'] ) ? '' : $_baseValues[$tmp_attrib]['sort_order']; ?>" size="3" />
				</td>
				<td class="center">
					<?php 
					
						$tmpTypes = $tmp_attrib == 'discounted' ? array( 'checkbox' ) : array( 'checkbox', 'radio', 'select' );
						
						switch( $tmp_attrib ) {
							case 'manufacturers': {
								$tmpTypes[] = 'image_list_checkbox';
								$tmpTypes[] = 'image_list_radio';
								$tmpTypes[] = 'image';
								$tmpTypes[] = 'image_radio';
								
								break;
							}
							case 'length':
							case 'width':
							case 'height': 
							case 'weight' : {
								array_unshift( $tmpTypes, 'slider' );
								//array_unshift( $tmpTypes, 'numeric_slider' );
								
								break;
							}
							case 'sku':
							case 'upc':
							case 'ean':
							case 'jan':
							case 'isbn':
							case 'mpn':
							case 'location': 
							case 'model' : {
								array_unshift( $tmpTypes, 'text' );
								
								break;
							}
						}
					
					?>
					<select class="form-control" name="<?php echo $_baseName; ?>[<?php echo $tmp_attrib; ?>][display_as_type]">
						<?php $idxx = 0; foreach( $tmpTypes as $tmpType ) { ?>
							<option value="<?php echo $tmpType; ?>"<?php echo ( empty( $_baseValues[$tmp_attrib]['display_as_type'] ) && ! $idxx ) || ( ! empty( $_baseValues[$tmp_attrib]['display_as_type'] ) && $_baseValues[$tmp_attrib]['display_as_type'] == $tmpType ) ? ' selected="selected"' : ''; ?>>
								<?php echo ${'text_type_' . $tmpType}; ?>
							</option>
						<?php $idxx++; } ?>
					</select>
				</td>
				<td class="center">
					<select class="form-control" name="<?php echo $_baseName; ?>[<?php echo $tmp_attrib; ?>][display_list_of_items]">
						<option value=""<?php echo empty( $_baseValues[$tmp_attrib]['display_list_of_items'] ) ? ' selected="selected"' : ''; ?>><?php echo $text_by_default; ?></option>
						<option value="scroll"<?php echo ! empty( $_baseValues[$tmp_attrib]['display_list_of_items'] ) && $_baseValues[$tmp_attrib]['display_list_of_items'] == 'scroll' ? ' selected="selected"' : ''; ?>><?php echo $text_with_scroll; ?></option>
						<option value="button_more"<?php echo ! empty( $_baseValues[$tmp_attrib]['display_list_of_items'] ) && $_baseValues[$tmp_attrib]['display_list_of_items'] == 'button_more' ? ' selected="selected"' : ''; ?>><?php echo $text_with_button_more; ?></option>
					</select>
				</td>
				<td class="left">
					<?php echo mf_render_btn_collapsed( $text_yes, $text_no, $text_pc, $text_mobile, $_baseName . '[' . $tmp_attrib . '][collapsed]', empty( $_baseValues[$tmp_attrib]['collapsed'] ) ? '0' : $_baseValues[$tmp_attrib]['collapsed'] ); ?> - <?php echo $text_collapsed_by_default; ?>
					&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
					<select name="<?php echo $_baseName; ?>[<?php echo $tmp_attrib; ?>][display_live_filter]">
						<option value=""<?php echo empty( $_baseValues[$tmp_attrib]['display_live_filter'] ) ? ' selected="selected"' : ''; ?>><?php echo $text_display_live_filter; ?> <?php echo $text_by_default; ?></option>
						<option value="1"<?php echo ! empty( $_baseValues[$tmp_attrib]['display_live_filter'] ) && $_baseValues[$tmp_attrib]['display_live_filter'] == '1' ? ' selected="selected"' : ''; ?>><?php echo $text_display_live_filter; ?> - <?php echo $text_yes; ?></option>
						<option value="-1"<?php echo ! empty( $_baseValues[$tmp_attrib]['display_live_filter'] ) && $_baseValues[$tmp_attrib]['display_live_filter'] == '-1' ? ' selected="selected"' : ''; ?>><?php echo $text_display_live_filter; ?> - <?php echo $text_no; ?></option>
					</select>
					<br>
					<?php echo mf_render_btn_collapsed( $text_yes, $text_no, $text_pc, $text_mobile, $_baseName . '['.$tmp_attrib.'][select_deselect_all]', empty( $_baseValues[$tmp_attrib]['select_deselect_all'] ) ? '0' : $_baseValues[$tmp_attrib]['select_deselect_all'] ); ?> - <label class="control-label"><span data-toggle="tooltip" title="<?php echo $text_select_deselect_all_button_help; ?>"><?php echo $text_select_deselect_all_button; ?></span></label>
				</td>
			</tr>
		<?php } ?>
		<tr>
			<td>
				<?php echo $attrib_stock_status; ?>
			</td>
			<td class="center">
				<?php echo mf_render_btn(array(
					'1' => array( 'name' => '<i class="fa fa-check"></i>', 'tooltip' => $text_yes ),
					'0' => array( 'name' => '<i class="fa fa-remove"></i>', 'tooltip' => $text_no ),
					'logged' => array( 'name' => '<i class="fa fa-key"></i>', 'tooltip' => $text_display_only_logged )
				), $_baseName . '[stock_status][enabled]', isset( $_baseValues['rating']['enabled'] ) ? $_baseValues['stock_status']['enabled'] : false); ?>
			</td>
			<td class="center">
				<input class="form-control" type="text" name="<?php echo $_baseName; ?>[stock_status][sort_order]" value="<?php echo ! isset( $_baseValues['stock_status']['sort_order'] ) ? '' : $_baseValues['stock_status']['sort_order']; ?>" size="3" />
			</td>
			<td class="center">
				<?php $tmpTypes = array( 'checkbox', 'radio', 'select' ); ?>
				<select class="form-control" name="<?php echo $_baseName; ?>[stock_status][display_as_type]">
					<?php $idxx = 0; foreach( $tmpTypes as $tmpType ) { ?>
						<option value="<?php echo $tmpType; ?>"<?php echo ( empty( $_baseValues['stock_status']['display_as_type'] ) && ! $idxx ) || ( ! empty( $_baseValues['stock_status']['display_as_type'] ) && $_baseValues['stock_status']['display_as_type'] == $tmpType ) ? ' selected="selected"' : ''; ?>>
							<?php echo ${'text_type_' . $tmpType}; ?>
						</option>
					<?php $idxx++; } ?>
				</select>
			</td>
			<td class="center">
				<select class="form-control" name="<?php echo $_baseName; ?>[stock_status][display_list_of_items]">
					<option value=""<?php echo empty( $_baseValues['stock_status']['display_list_of_items'] ) ? ' selected="selected"' : ''; ?>><?php echo $text_by_default; ?></option>
					<option value="scroll"<?php echo ! empty( $_baseValues['stock_status']['display_list_of_items'] ) && $_baseValues['stock_status']['display_list_of_items'] == 'scroll' ? ' selected="selected"' : ''; ?>><?php echo $text_with_scroll; ?></option>
					<option value="button_more"<?php echo ! empty( $_baseValues['stock_status']['display_list_of_items'] ) && $_baseValues['stock_status']['display_list_of_items'] == 'button_more' ? ' selected="selected"' : ''; ?>><?php echo $text_with_button_more; ?></option>
				</select>
			</td>
			<td class="left">
				<?php echo $text_collapsed_by_default; ?>: <?php echo mf_render_btn_collapsed( $text_yes, $text_no, $text_pc, $text_mobile, $_baseName . '[stock_status][collapsed]', empty( $_baseValues['stock_status']['collapsed'] ) ? '0' : $_baseValues['stock_status']['collapsed'] ); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $attrib_rating; ?>
			</td>
			<td class="center">
				<?php echo mf_render_btn(array(
					'1' => array( 'name' => '<i class="fa fa-check"></i>', 'tooltip' => $text_yes ),
					'0' => array( 'name' => '<i class="fa fa-remove"></i>', 'tooltip' => $text_no ),
					'logged' => array( 'name' => '<i class="fa fa-key"></i>', 'tooltip' => $text_display_only_logged )
				), $_baseName . '[rating][enabled]', isset( $_baseValues['rating']['enabled'] ) ? $_baseValues['rating']['enabled'] : false); ?>
			</td>
			<td class="center">
				<input class="form-control" type="text" name="<?php echo $_baseName; ?>[rating][sort_order]" value="<?php echo ! isset( $_baseValues['rating']['sort_order'] ) ? '' : $_baseValues['rating']['sort_order']; ?>" size="3" />
			</td>
			<td class="center">
				-
			</td>
			<td class="center">
				-
			</td>
			<td class="left">
				<?php echo $text_collapsed_by_default; ?>: <?php echo mf_render_btn_collapsed( $text_yes, $text_no, $text_pc, $text_mobile, $_baseName . '[rating][collapsed]', empty( $_baseValues['rating']['collapsed'] ) ? '0' : $_baseValues['rating']['collapsed'] ); ?>
			</td>
		</tr>
	</tbody>
</table>