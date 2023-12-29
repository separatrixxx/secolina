<?php echo $header; ?><?php echo $column_left; ?>
 <div id="content">
   <div class="page-header">
    <div class="container-fluid">
      <div class="pull-right">
		<?php if (isset($module_id)) { ?><button type="button" data-toggle="tooltip" title="<?php echo $button_delete; ?>" class="btn btn-danger" onclick="confirm('<?php echo $text_confirm; ?>') ? $('#form-delete').submit() : false;"><i class="fa fa-trash-o"></i></button><?php } ?>
		<button onClick="$('#form-module').submit();" data-toggle="tooltip" title="<?php echo $button_save; ?>" class="btn btn-primary" id="save_click"><i class="fa fa-save"></i></button>
        <a href="<?php echo $cancel; ?>" data-toggle="tooltip" title="<?php echo $button_cancel; ?>" class="btn btn-default"><i class="fa fa-reply"></i></a></div>
      <h1><?php echo $heading_title; ?></h1>
      <ul class="breadcrumb">
	    <?php foreach ($breadcrumbs as $breadcrumb) { ?>
        <li><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a></li>
        <?php } ?>
      </ul>
    </div>
  </div>
  <div class="container-fluid">
    <?php if ($error_warning) { ?>
    <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> <?php echo $error_warning; ?>
      <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
    <?php } ?>
	<?php if ($success) { ?>
    <div class="alert alert-success"><i class="fa fa-check-circle"></i> <?php echo $success; ?>
      <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
    <?php } ?>
	<ul class="nav nav-tabs" id="tab">
		<li<?php if (isset($module_id)){ ?> class="active"<?php } ?>><a ref="#tab-guest"><i class="fa fa-list"></i> <?php echo $cheapering; ?></a></li>
		<li<?php if (!isset($module_id)){ ?> class="active"<?php } ?>><a ref="#tab-settings"><i class="fa fa-wrench"></i> <?php echo $text_settings; ?></a></li>
		<li><a ref="#tab-template"><i class="fa fa-laptop"></i> <?php echo $text_template; ?></a></li>
		<li><a ref="#tab-captcha"><i class="fa fa-android"></i> <?php echo $text_captcha; ?></a></li>
	</ul>
    <div class="panel panel-default tab-content">
		<form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" id="form-module" class="form-horizontal">
		<div class="tab-pane<?php if (!isset($module_id)){ ?> active<?php } ?>" id="tab-settings">
			<fieldset>
				<div class="form-group"><br /></div>
				<div class="form-group bg-gray">
					<div class="col-sm-12">
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
				<div class="form-group"><br /></div>
				<div class="fields-text" id="select-text">
					<div class="form-group">
						<div class="col-sm-12">
							<label class="col-sm-2 control-label" for="input-name"><?php echo $entry_name; ?></label>
							<div class="col-sm-10">
							  <input type="text" name="name" value="<?php echo $name; ?>" placeholder="<?php echo $entry_name; ?>" id="input-name" class="form-control" />
							  <?php if ($error_name) { ?>
							  <div class="text-danger"><?php echo $error_name; ?></div>
							  <?php } ?>
							</div>
						</div>
					</div>
					<div class="form-group fields-text">
						<label class="col-sm-2 control-label"><?php echo $text_settings_text; ?></label>
						<div class="col-sm-10">
							<div class="form-group">
								<div class="col-sm-3 text-right"><br /><label class="control-label">
									<span data-toggle="tooltip" title="" data-title="<?php echo $help_text_tooltip_fields; ?>" style="font-weight: normal;"><?php echo $text_h1_module; ?></span>
								</label></div>
								<div class="col-sm-9">
									<div class="col-sm-12">
										<ul class="nav nav-tabs" id="language_h1">
											<?php foreach ($languages as $language) { ?>
											<li><a href="#language_h1<?php echo $language['language_id']; ?>" data-toggle="tab" aria-expanded="true"><img src="<?php if ($version == '2.3' or $version == '2.2'){ ?>language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png<?php } ?><?php if ($version == '2.1' or $version == '2.0'){ ?>view/image/flags/<?php echo $language['image']; ?><?php } ?>" title="<?php echo $language['name']; ?>"> <?php echo $language['name']; ?></a></li>
											<?php } ?>
										</ul>
										<div class="tab-content padding">
											<?php foreach ($languages as $language) { ?>
												<div id="language_h1<?php echo $language['language_id']; ?>" class="tab-pane">
													<input type="text" name="cheaper30_h1[<?php echo $language['language_id']; ?>]" value="<?php if (isset($cheaper30_h1[$language['language_id']])){ ?><?php echo $cheaper30_h1[$language['language_id']]; ?><?php } ?>" placeholder="<?php echo $text_select; ?>" class="form-control" maxlength="200" />
												</div>
											<?php } ?>
											<?php if ($error_cheaper30_h1) { ?>
												<div class="text-danger"><?php echo $error_cheaper30_h1; ?></div>
											<?php } ?>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-3 text-right"><br /><label class="control-label">
									<span data-toggle="tooltip" title="" data-title="<?php echo $help_text_tooltip_fields; ?>" style="font-weight: normal;"><?php echo $text_h4_module; ?></span>
								</label></div>
								<div class="col-sm-9">
									<div class="col-sm-12">
										<ul class="nav nav-tabs" id="language_h4">
											<?php foreach ($languages as $language) { ?>
											<li><a href="#language_h4<?php echo $language['language_id']; ?>" data-toggle="tab" aria-expanded="true"><img src="<?php if ($version == '2.3' or $version == '2.2'){ ?>language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png<?php } ?><?php if ($version == '2.1' or $version == '2.0'){ ?>view/image/flags/<?php echo $language['image']; ?><?php } ?>" title="<?php echo $language['name']; ?>"> <?php echo $language['name']; ?></a></li>
											<?php } ?>
										</ul>
										<div class="tab-content padding">
											<?php foreach ($languages as $language) { ?>
												<div id="language_h4<?php echo $language['language_id']; ?>" class="tab-pane">
													<input type="text" name="cheaper30_h4[<?php echo $language['language_id']; ?>]" value="<?php if (isset($cheaper30_h4[$language['language_id']])) { ?><?php echo $cheaper30_h4[$language['language_id']]; ?><?php } ?>" placeholder="<?php echo $text_select; ?>" class="form-control" maxlength="200" />
												</div>
											<?php } ?>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-3 text-right"><br /><label class="control-label">
									<span data-toggle="tooltip" title="" data-title="<?php echo $help_text_tooltip_fields_required; ?>" style="font-weight: normal;"><?php echo $text_succes_cheaper; ?></span>
								</label></div>
								<div class="col-sm-9">
									<div class="col-sm-12">
										<ul class="nav nav-tabs" id="language_success">
											<?php foreach ($languages as $language) { ?>
											<li><a href="#language_success<?php echo $language['language_id']; ?>" data-toggle="tab" aria-expanded="true"><img src="<?php if ($version == '2.3' or $version == '2.2'){ ?>language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png<?php } ?><?php if ($version == '2.1' or $version == '2.0'){ ?>view/image/flags/<?php echo $language['image']; ?><?php } ?>" title="<?php echo $language['name']; ?>"> <?php echo $language['name']; ?></a></li>
											<?php } ?>
										</ul>
										<div class="tab-content padding">
											<?php foreach ($languages as $language) { ?>
												<div id="language_success<?php echo $language['language_id']; ?>" class="tab-pane">
													<input type="text" name="cheaper30_succes[<?php echo $language['language_id']; ?>]" value="<?php if (isset($cheaper30_succes[$language['language_id']])) { ?><?php echo $cheaper30_succes[$language['language_id']]; ?><?php } ?>" placeholder="<?php echo $text_select; ?>" class="form-control" maxlength="200" />
												</div>
											<?php } ?>
											<?php if ($error_cheaper30_succes) { ?>
												<div class="text-danger"><?php echo $error_cheaper30_succes; ?></div>
											<?php } ?>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-3 text-right"><br /><label class="control-label">
									<span data-toggle="tooltip" title="" data-title="<?php echo $help_text_tooltip_fields_required; ?>" style="font-weight: normal;"><?php echo $text_error_cheaper; ?></span>
								</label></div>
								<div class="col-sm-9">
									<div class="col-sm-12">
										<ul class="nav nav-tabs" id="language_error">
											<?php foreach ($languages as $language) { ?>
											<li><a href="#language_error<?php echo $language['language_id']; ?>" data-toggle="tab" aria-expanded="true"><img src="<?php if ($version == '2.3' or $version == '2.2'){ ?>language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png<?php } ?><?php if ($version == '2.1' or $version == '2.0'){ ?>view/image/flags/<?php echo $language['image']; ?><?php } ?>" title="<?php echo $language['name']; ?>"> <?php echo $language['name']; ?></a></li>
											<?php } ?>
										</ul>
										<div class="tab-content padding">
											<?php foreach ($languages as $language) { ?>
												<div id="language_error<?php echo $language['language_id']; ?>" class="tab-pane">
													<input type="text" name="cheaper30_errort[<?php echo $language['language_id']; ?>]" value="<?Php if (isset($cheaper30_errort[$language['language_id']])){ ?><?php echo $cheaper30_errort[$language['language_id']]; ?><?php } ?>" placeholder="<?php echo $text_select; ?>" class="form-control" maxlength="200" />
												</div>
											<?php } ?>
											<?php if ($error_cheaper30_errort) { ?>
												<div class="text-danger"><?php echo $error_cheaper30_errort; ?></div>
											<?php } ?>
										</div>
									</div>
								</div>
							</div>
						</div><div class="clearfix"></div>
					</div>
					<div class="form-group fields-text">
						<label class="col-sm-2 control-label"><?php echo $text_settings_input; ?><br /><br /><br /><br />
						  <div class="well well-sm button-default"><?php echo $entry_defaults; ?><br /><br /><br />
							<span class="btn btn-primary" id="tableLoadcheaper" data-toggle="tooltip" type="button" title="<?php echo $entry_defaults_1; ?>" onClick="table_load('cheaper');"><i class="fa fa-level-down"></i> <?php echo $help_entry_defaults_1; ?></span><br /><br />
							<span class="btn btn-primary" id="tableLoadquestion" data-toggle="tooltip" type="button" title="<?php echo $entry_defaults_2; ?>" onClick="table_load('question');"><i class="fa fa-question"></i> <?php echo $help_entry_defaults_2; ?></span><br /><br />
							<span class="btn btn-primary" id="tableLoadsurvey" data-toggle="tooltip" type="button" title="<?php echo $entry_defaults_3; ?>" onClick="table_load('survey');"><i class="fa fa-bar-chart"></i> <?php echo $help_entry_defaults_3; ?></span><br /><br />
							<span class="btn btn-primary" id="tableLoadcallback" data-toggle="tooltip" type="button" title="<?php echo $entry_defaults_4; ?>" onClick="table_load('callback');"><i class="fa fa-phone"></i> <?php echo $help_entry_defaults_4; ?></span><br /><br />
						  </div>
						  
						</label>
						<div class="col-sm-10"><div class="col-sm-12"><div>
							<fieldset class="fields-value-fieldset"><br /><br />
							<table id="fields-value" class="table table-striped table-bordered table-hover">
							  <thead>
								<tr>
								  <td class="text-center"><?php echo $entry_icons_fields; ?></td>
								  <td class="text-left required"><?php echo $entry_name_fields; ?></td>
								  <td class="text-center"><?php echo $entry_type_fields; ?></td>
								  <td class="text-center">
									<label class="control-label"><span style="font-weight: normal;"  title="<?php echo $help_entry_select_fields; ?>" data-toggle="tooltip"><?php echo $entry_select_fields; ?></span></label>
								  </td>
								  <td class="text-center">
									<label class="control-label"><span style="font-weight: normal;"  title="<?php echo $help_entry_validation_fields; ?>" data-toggle="tooltip"><?php echo $entry_validation_fields; ?></span></label>
								  </td>
								  <td class="text-center">
									<label class="control-label"><span style="font-weight: normal;"  title="<?php echo $help_entry_required_fields; ?>" data-toggle="tooltip"><?php echo $entry_required_fields; ?></span></label>
								  </td>
								  <td class="text-center"><?php echo $entry_sort_order; ?></td>
								  <td></td>
								</tr>
							  </thead>
							  <tbody><tr><td style="display: none;"></td></tr>
							  <?php $fields_value_row = 1; ?>
							  <?php foreach ($results as $field_value_id => $result) { ?>
							  <tr id="fields-value-row<?php echo $fields_value_row; ?>">
								<td class="nav text-center">
									<li>
									  <span type="text" class="btn btn-default icons" data-field="<?php echo $fields_value_row; ?>" onClick="selectIcons('<?php echo $fields_value_row; ?>'); return false;"><?php if ($result['icon']) { ?><i class="fa fa-<?php echo $result['icon']; ?>"></i><?php } else { ?><?php echo $text_select_icons; ?><?php } ?></span>
									  <input type="hidden" value="<?php if ($result['icon']){ ?><?php echo $result['icon']; ?><?php } ?>" name="field_value[<?php echo $fields_value_row; ?>][icon]">
									</li>
								</td>
								<td class="text-left"><input type="hidden" name="field_value[<?php echo $fields_value_row; ?>][field_value_id]" value="<?php echo $fields_value_row; ?>" />
								<?php foreach ($languages as $language) { ?>
									<div class="input-group">
										<span class="input-group-addon"><img src="<?php if ($version == '2.3' or $version == '2.2'){ ?>language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png<?php } ?><?php if ($version == '2.1' or $version == '2.0'){ ?>view/image/flags/<?php echo $language['image']; ?><?php } ?>" title="<?php echo $language['name']; ?>" /></span><input type="text" name="field_value[<?php echo $fields_value_row; ?>][name][<?php echo $language['language_id']; ?>]" value="<?php echo $result['name'][$language['language_id']]; ?>" placeholder="<?php echo $entry_name_fields; ?>" class="form-control name-fields" />
									</div>
									<?php if (isset($error_name_field[$fields_value_row][$language['language_id']])){ ?>
										<div class="text-danger"><?php echo $error_name_field[$fields_value_row][$language['language_id']]; ?></div>
									<?php } ?>
								<?php } ?>
								</td>
								<td class="text-right">
									<select name="field_value[<?php echo $fields_value_row; ?>][type]" value=""  class="form-control select-regex" data-row="<?php echo $fields_value_row; ?>">
										<?php foreach($select_type as $select){ ?>
											<optgroup label="<?php echo $select['text']; ?>">
											<?php foreach($select['items'] as $key => $item){ ?>
											<option value="<?php echo $key; ?>"<?php if ($key == $result['type']){ ?> selected="selected"<?php } ?>><?php echo $item; ?></option><?php } ?></optgroup>
										<?php } ?>
									</select>
								</td>
								<td class="text-center parameter">
								<?php if ($result['type'] == 'select' or $result['type'] == 'radio' or $result['type'] == 'checked'){ ?>
									<div class="radio-div well well-sm">
										<?php if (isset($result['query_value'][$result['id']])) { ?>
											<label class="checked_value control-label"><?php echo $text_select_value; ?></span></label>
											<?php if ($result['type'] == 'select'){ ?>
												<select class="form-control">
												<?php foreach ($result['query_value'][$result['id']] as $query_value){ ?>
													<optgroup label="<?php echo $query_value[$config_language_id]; ?>"></optgroup>
												<?php } ?>
												</select>
											<?php } ?>
											<?php if ($result['type'] == 'radio'){ ?>
												<?php foreach ($result['query_value'][$result['id']] as $query_value){ ?>
													<label class="text-left"><input type="radio" disabled="disabled" /> <?php echo $query_value[$config_language_id]; ?></label>
												<?php } ?>
											<?php } ?>
											<?php if ($result['type'] == 'checked'){ ?>
												<?php foreach ($result['query_value'][$result['id']] as $query_value){ ?>
													<label class="text-left"><input type="checkbox" disabled="disabled" /> <?php echo $query_value[$config_language_id]; ?></label>
												<?php } ?>
											<?php } ?>
										<?php } else { ?>
											<label class="checked_value control-label"><?php echo $text_select_value_empty; ?></span></label>
										<?php } ?>
									</div>
									<span class="btn btn-primary" data-toggle="tooltip" onClick="selectValue('<?php echo $fields_value_row; ?>','<?php echo $result['type']; ?>'); updateNumberValue('<?php echo $fields_value_row; ?>'); return false;" title="<?php echo $button_field_parametr_add; ?>"><i class="fa fa-edit"></i></span>
								<?php } else { ?>-<?php } ?>
								</td>
								<td class="text-center regex">
									<?php if ($result['type'] == 'text' or $result['type'] == 'textarea'){ ?>
										<select name="field_value[<?php echo $fields_value_row; ?>][regex]" class="form-control type-regex select<?php echo $fields_value_row; ?>" data-row="<?php echo $fields_value_row; ?>">
											<?php if ($result['type'] == 'text'){ ?>
												<?php foreach ($code_regex_text as $regex){ ?>
													<option value="<?php echo $regex['valid']; ?>"<?php if ($result['regex'] == $regex['valid']){ ?> selected="selected"<?php } ?>><?php echo $regex['text']; ?></option>
												<?php } ?>
											<?php } ?>
											<?php if ($result['type'] == 'textarea'){ ?>
												<?php foreach ($code_regex_textarea as $regex){ ?>
													<?php foreach ($regex['valid'] as $reg => $valid){ ?>
														
													<?php } ?>
													<option value="<?php echo $regex['valid']; ?>"<?php if ($result['regex'] == $regex['valid']){ ?> selected="selected"<?php } ?>><?php echo $regex['text']; ?></option>
												<?php } ?>
											<?php } ?>
										</select><br />
										<?php if ($result['regex'] == 'minlength' or $result['regex'] == 'maxlength' or $result['regex'] == 'max' or $result['regex'] == 'min' or $result['regex'] == 'step'){ ?>
											<input type="text" class="form-control" placeholder="<?php echo $result['placeholder']; ?>" value="<?php echo $result['valid']; ?>" name="field_value[<?php echo $fields_value_row; ?>][valid]">
										<?php } ?>
										<?php if ($result['regex'] == 'rangelength' or $result['regex'] == 'range'){ ?>
											<div class="row">
												<div class="col-sm-6 col-xs-12"><input type="text" class="form-control" placeholder="<?php echo $text_range_before; ?>" value="<?php echo $result['valid'][0]; ?>" name="field_value[<?php echo $fields_value_row; ?>][valid][0]"></div>
												<div class="col-sm-6 col-xs-12"><input type="text" class="form-control" placeholder="<?php echo $text_range_after; ?>" value="<?php echo $result['valid'][1]; ?>" name="field_value[<?php echo $fields_value_row; ?>][valid][1]"></div>
											</div>
										<?php } ?>
										<?php if ($result['regex'] == 'phoneUS'){ ?>
											<div class="input-group-phone">
												<label class="control-label" style="text-align: left; padding-bottom: 7px;"><span data-toggle="tooltip" title="<?php echo $text_help_phoneUS; ?>" style="font-weight: normal;"><?php echo $label_help_phoneUS; ?></span></label>
												<?php foreach ($languages as $language){ ?>
													<div class="input-group">
														<span class="input-group-addon"><img title="<?php echo $language['name']; ?>" src="language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png"></span>
														<input type="text" class="form-control" placeholder="<?php if (isset($phones_placeholder[$language['code']])){ ?><?php echo $phones_placeholder[$language['code']]; ?><?php } else { ?><?php echo $text_phoneUS; ?><?php } ?>" value="<?php if ($result['valid'][$language['code']]) { ?><?php echo $result['valid'][$language['code']]; ?><?php } ?>" name="field_value[<?php echo $fields_value_row; ?>][valid][<?php echo $language['code']; ?>]">
													</div>
												<?php } ?>
											</div>
										<?php } ?>
										<?php if (isset($error_name_valid[$fields_value_row])){ ?>
											<div class="text-danger"><?php echo $error_name_valid[$fields_value_row]; ?></div>
										<?php } ?>
									<?php } else { ?>
										-
									<?php } ?>
								</td>
								<td class="text-center"><label><input type="checkbox" name="field_value[<?php echo $fields_value_row; ?>][required]"<?php if ($result['required']){ ?> checked="checked"<?php } ?> value="1"></label><br /></td>
								<td class="text-right"><input type="text" name="field_value[<?php echo $fields_value_row; ?>][sort_order]" value="<?php echo $result['sort_order']; ?>" placeholder="<?php echo $entry_sort_order; ?>" class="form-control" /></td>
								<td class="text-right"><button type="button" onclick="$('#fields-value-row<?php echo $fields_value_row; ?>').remove(); testStorageFields();" data-toggle="tooltip" title="<?php echo $text_remove_module; ?>" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>
							  </tr>
							  <?php $fields_value_row = $fields_value_row + 1; ?>
							  <?php } ?>
							  </tbody>
							  <tfoot>
								<tr>
								  <td colspan="7">
									<?php if ($error_field_value){ ?>
										<div class="text-danger"><br /><?php echo $error_field_value; ?><br /><br /></div>
									<?php } ?>
								  </td>
								  <td class="text-right"><button type="button" onclick="addFieldValue();" data-toggle="tooltip" title="<?php echo $button_field_value_add; ?>" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button></td>
								</tr>
							  </tfoot>
							</table>
						  </fieldset>
						</div></div></div>
					</div>
					<div id="select-value">
				<div class="select-value col-lg-offset-2 col-lg-4 col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8 col-xs-offset-1 col-xs-10 hide">
					<div class="row">
						<h3><i class="fa fa-list-alt" aria-hidden="true"></i>&nbsp; <?php echo $entry_value_fields_option; ?></h3>
						<div class="close-cheaper" onclick="closeIcons('.select-value');"><svg class="svg-icon-cheaper"><use xlink:href="/catalog/view/javascript/cheaper30/icons.svg#svg-close"/></svg></div>
						<?php if ($results){ ?>
							<?php $value_row = 0; ?>
							<?php foreach ($results as $result){ ?><?php $value_row = $value_row + 1; ?>
							<div class="col-sm-12 hide overf" id="body-value-<?php echo $value_row; ?>">
								<div class="container-fluid">
									<div class="pull-right"><span class="btn btn-primary" title="" data-toggle="tooltip" onclick="save<?php echo $result['type']; ?>Value('<?php echo $value_row; ?>'); return false;" data-original-title="<?php echo $button_save; ?>"><i class="fa fa-save"></i> <?php echo $button_save; ?></span></div>
								</div>
								<table class="table table-striped table-bordered table-hover">
									<thead>
										<tr>
											<td class="text-center" width="1%"><?php echo $text_head_value_1; ?></td>
											<td class="text-left"><?php echo $text_head_value_2; ?></td>
											<td width="1%"></td>
										</tr>
									</thead>
									<tbody class="body-value">
									<?php if (isset($result['query_value'][$result['id']]) && $result['query_value'][$result['id']]){ ?>
										<?php foreach ($result['query_value'][$result['id']] as $query_row => $query_value){ ?>
											<tr id="fields-value-<?php echo $query_row; ?>">
												<td class="text-center"><?php echo $query_row; ?></td>
												<td class="text-left">
												<?php foreach ($languages as $language){ ?>
													<div class="input-group">
														<span class="input-group-addon"><img src="<?php if ($version == '2.3' or $version == '2.2'){ ?>language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png<?php } ?><?php if ($version == '2.1' or $version == '2.0'){ ?>view/image/flags/<?php echo $language['image']; ?><?php } ?>" title="<?php echo $language['name']; ?>" /></span><input type="text" name="field_value[<?php echo $value_row; ?>][!<?php echo $result['type']; ?>!][<?php echo $query_row; ?>][<?php echo $language['language_id']; ?>]" value="<?php echo $query_value[$language['language_id']]; ?>" placeholder="<?php echo $entry_param_fields; ?>" class="form-control name-fields" data-language="<?php echo $language['language_id']; ?>" data-row="<?php echo $value_row; ?>" data-type="<?php echo $result['type']; ?>" />
													</div>
												<?php } ?>
												</td>
												<td class="text-right">
													<button class="btn btn-danger" data-toggle="tooltip" onclick="$('#fields-value-<?php echo $query_row; ?>').remove(); updateNumberValue(<?php echo $value_row; ?>);<?php if ($result['type'] == 'select'){ ?> saveselectValue('<?php echo $value_row; ?>');<?php } ?><?php if ($result['type'] == 'radio'){ ?> saveradioValue('<?php echo $value_row; ?>');<?php } ?><?php if ($result['type'] == 'checked'){ ?> savecheckedValue('<?php echo $value_row; ?>');<?php } ?>" type="button" title="<?php echo $text_remove_module; ?>"><i class="fa fa-minus-circle"></i></button>
												</td>
											</tr>
										<?php } ?>
									<?php } ?>
										<tr>
											<td colspan="2"></td>
											<td>
												<button class="btn btn-success" data-toggle="tooltip" onclick="addSelectValue('<?php echo $value_row; ?>','<?php echo $result['type']; ?>');" data-row="<?php echo $value_row; ?>" type="button" title="<?php echo $text_add_module; ?>"><i class="fa fa-plus-circle"></i></button>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
							<?php } ?>
						<?php } ?>
					</div>
				</div>
			</div>	
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label"> <?php echo $text_help_text; ?></label>
					<div class="col-sm-10">
						<div><?php echo $text_format; ?><br /></div>
						<div>
							<select name="format" class="form-control">
								<option value="text"<?php if (isset($protection['format']) && $protection['format'] == 'text'){ ?> selected<?php } ?>><?php echo $text_text; ?></option>
								<option value="checkbox"<?php if (isset($protection['format']) && $protection['format'] == 'checkbox'){ ?> selected<?php } ?>><?php echo $text_checkbox_text; ?></option>
							</select>
						</div><br /><br />
						<ul class="nav nav-tabs" id="language">
							<?php foreach ($languages as $language) { ?>
							<li><a href="#language<?php echo $language['language_id']; ?>" data-toggle="tab" aria-expanded="true"><img src="<?php if ($version == '2.3' or $version == '2.2'){ ?>language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png<?php } ?><?php if ($version == '2.1' or $version == '2.0'){ ?>view/image/flags/<?php echo $language['image']; ?><?php } ?>" title="<?php echo $language['name']; ?>"> <?php echo $language['name']; ?></a></li>
							<?php } ?>
						</ul>
						<div class="tab-content">
							<?php foreach ($languages as $language) { ?>
								<div id="language<?php echo $language['language_id']; ?>" class="tab-pane">
									<textarea type="text" id="cheapering_text<?php echo $language['language_id']; ?>" name="protection_text[<?php echo $language['code']; ?>]" value="" maxlength="10000" size="50" style="height: 70px; width: 500px;" data-lang="<?php echo $lang; ?>" class="form-control summernote" /><?php if (isset($protection['protection_text'][$language['code']])){ ?><?php echo $protection['protection_text'][$language['code']]; ?><?php } ?></textarea>
								</div>
							<?php } ?>
						</div>
					</div>
				</div>
			<div id="select-icons">
				<div class="select-icons col-lg-offset-2 col-lg-6 col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8 col-xs-offset-1 col-xs-10 hide">
					<div class="row">
						<h3><i class="fa fa-flag" aria-hidden="true"></i>&nbsp; <?php echo $entry_icons_fields_fa; ?></h3>
						<div class="close-cheaper" onclick="closeIcons('.select-icons');"><svg class="svg-icon-cheaper"><use xlink:href="/catalog/view/javascript/cheaper30/icons.svg#svg-close"/></svg></div>
						<div class="fa-icons">
						<?php foreach ($default_icons as $id => $icons){ ?>
							<div class="col-sm-12 col-xs-12 text-center"><h4><span>#</span> <strong><?php echo ${'text_select_icons_' . $id}; ?></strong> <span>#</span></h4></div>
							<?php foreach ($icons as $icon){ ?>
								<div class="hover-fa col-sm-4 col-xs-6" data-fa="<?php echo $icon; ?>" data-field="">
									<i class="fa fa-<?php echo $icon; ?>"></i><span>&nbsp;&nbsp;<?php echo $icon; ?></span>
								</div>
							<?php } ?>
							<div class="col-sm-12 col-xs-12"><br /></div>
						<?php } ?>
						</div>
					</div>
				</div>
			</div>
			</fieldset>
		</div>
		<div class="tab-pane" id="tab-template">
			<fieldset>
				<div class="form-group">
					<div class="col-sm-12">
						<label class="col-sm-3 control-label marg-top" for="input-type_view"><span data-toggle="tooltip" title="" data-title="<?php echo $entry_type_view_help; ?>"><?php echo $entry_type_view; ?></span></label>
						<div class="col-sm-9 col-xs-12">
						  <select name="type_view" id="input-type_view" class="form-control" style="margin: 10px 0 !important;">
							<?php if ($type_view){ ?>
							<option value="1" selected="selected"><?php echo $entry_type_view_module; ?></option>
							<option value="0"><?php echo $entry_type_view_button; ?></option>
							<?php } else { ?>
							<option value="1"><?php echo $entry_type_view_module; ?></option>
							<option value="0" selected="selected"><?php echo $entry_type_view_button; ?></option>
							<?php } ?>
						  </select>
						  <div class="text-danger" id="type_view_help">
						  <?php echo $entry_type_view_danger; ?>
						  </div>
						</div>
					</div>
				</div>
				<div class="form-group" id="type_view">
					<div class="col-sm-12"><br /><br />
						<div class="col-sm-3 text-right">
						<label class="control-label" for="input-status" data-toggle="tooltip" title="<?php echo $text_template_button_help; ?>"><span><?php echo $text_template_button; ?></span>
						</label><br />
						<?php if (isset($module_id)){ ?><label class="control-label" id="label-button" for="input-status" data-toggle="tooltip" title="<?php echo $text_template_button_copy_help; ?>">
						<span onClick="copyTextToClipboard($('textarea#href_module').text());" class="btn btn-primary"><?php echo $text_template_button_copy; ?></span></label><?php } ?>
						<div class="error-span hide"><?php echo $text_template_button_copy_error_help; ?></div>
						</div>
						<div class="col-sm-9">
						  <div class="well well-sm">
							<textarea disabled="disabled" class="form-control" id="href_module"><?php if (isset($module_id)){ ?><button onclick="ajaxCheaper('index.php?route=extension/module/cheaper30&module_id=<?php echo $module_id; ?>', this);" class="btn btn-primary cheapering" data-module_id="<?php echo $module_id; ?>"></button><?php } else { ?><?php echo $text_template_button_code; ?><?php } ?></textarea>
						  </div>
						</div>
					</div><br />
				</div>
				<div class="form-group">
				  <div class="col-sm-12">
					<label class="col-sm-3 control-label" for="input-help"><span data-toggle="tooltip" title="<?php echo $help_paste_code_help; ?>"><?php echo $help_paste_code; ?></span><br /><br /><br /></label>
					<div class="col-sm-9 col-xs-12">
						<select id="input-help" class="form-control" style="margin: 10px 0 !important;">
							<option value="" selected="selected"><?php echo $text_none; ?></option>
							<?php foreach($help_hrefs as $help_href){ ?>
								<option value="<?php echo $help_href['href']; ?>"><?php echo $help_href['help']; ?></option>
							<?php } ?>
						</select>
						<div id="help_template" class="text-danger hide_cheaper"></div>
					</div>
				  </div>
				</div>
				<div class="form-group type-product">
					<div class="col-sm-12">
						<label class="col-sm-3 control-label" for="input-product"><span data-toggle="tooltip" title="<?php echo $text_product_help; ?>"><?php echo $text_product_label; ?></span></label>
						<div class="col-sm-9 col-xs-12">
						  <select name="product" id="input-product" class="form-control" style="margin: 10px 0 !important;">
							<?php if ($product){ ?>
							<option value="1" selected="selected"><?php echo $text_enabled; ?></option>
							<option value="0"><?php echo $text_disabled; ?></option>
							<?php } else { ?>
							<option value="1"><?php echo $text_enabled; ?></option>
							<option value="0" selected="selected"><?php echo $text_disabled; ?></option>
							<?php } ?>
						  </select>
						  <div class="text-danger hide" id="update_type"><?php echo $text_template_update_type; ?></div>
						</div>
					</div>
				</div>
				<div class="form-group hide type-product" id="block-product">
					<label class="col-sm-3 control-label" for="input-status"><?php echo $text_image; ?></label>
					<div class="col-sm-9 col-xs-12">
					  <div class="col-sm-6 col-xs-12">
					    <input type="text" name="width" value="<?php if ($width){ ?><?php echo $width; ?><?php } ?>" placeholder="<?php echo $text_width; ?>" class="form-control" data-toggle="tooltip" title="<?php echo $text_help_required; ?>" />
						<?php if ($error_width){ ?>
							<div class="text-danger" style="padding-top: 7px;"><?php echo $error_width; ?></div>
						<?php } ?>
					  </div>
					  <div class="col-sm-6 col-xs-12">
					    <input type="text" name="height" value="<?php if ($height){ ?><?php echo $height; ?><?php } ?>" placeholder="<?php echo $text_height; ?>" class="form-control" />
						<?php if ($error_height){ ?>
							<div class="text-danger" style="padding-top: 7px;"><?php echo $error_height; ?></div>
						<?php } ?>
						
					  </div>
					</div>
				</div>
				<div class="form-group"><br /><br /></div>
				<div class="form-group">
				<div class="col-sm-3">
					<label class="control-label" for="input-status" data-toggle="tooltip" title="<?php echo $text_template_system_help; ?>"><span><?php echo $text_template_system; ?></span></label><br /><br />
				</div>
				<div class="col-sm-4">
				  <label class="col-sm-6 control-label" for="input-status"><?php echo $entry_bootstrap; ?> <span data-toggle="tooltip" title="<?php echo $entry_help_bootstrap; ?>"></span></label>
				  <div class="col-sm-6 text-left">
					<div class="lightOnOff settings">  
					  <input type="checkbox" value="1" id="bootstrap" name="bootstrap"<?php if ($bootstrap){ ?> checked=""<?php } ?> data-name="bootstrap">
					  <label for="bootstrap"></label>
					</div>
				  </div>
				</div>
				<div class="col-sm-4">
				  <label class="col-sm-6 control-label" for="input-status"><?php echo $entry_font; ?> <span data-toggle="tooltip" title="<?php echo $entry_help_font; ?>"></span></label>
				  <div class="col-sm-6 text-left">
					<div class="lightOnOff settings">  
					  <input type="checkbox" value="1" id="font" name="font"<?php if ($font){ ?> checked=""<?php } ?> data-name="font">
					  <label for="font"></label>
					</div>
				  </div>
				</div>
				</div>
				<div class="form-group"><br /></div>
				<div class="form-group">
					<div class="col-sm-12">
						<label class="col-sm-3 control-label" for="input-product"><span data-toggle="tooltip" title="<?php echo $text_style_help; ?>" data-title="<?php echo $text_product_help; ?>"><?php echo $text_style; ?></span></label>
						<div class="col-sm-9 col-xs-12">
						  &lt;style&gt;
						  <textarea class="form-control" name="style" style="min-height: 250px;"><?php if (isset($style)){ ?><?php echo $style; ?><?php } ?></textarea>
						  &lt;/style&gt;
						</div>
					</div>
				</div>
			</fieldset>
		</div>
		<div class="tab-pane" id="tab-captcha">
			<fieldset>
				<div class="form-group">
					<div class="col-sm-12">
						<div class="alert alert-info"><i class="fa fa-info-circle"></i> <?php echo $text_captcha_info; ?></div>
						<label class="col-sm-2 control-label" for="input-captcha"><span data-toggle="tooltip" title="" data-title="<?php echo $entry_type_captcha_help; ?>"><?php echo $entry_type_captcha; ?></span></label>
						<div class="col-sm-10 col-xs-12">
						  <select name="captcha" id="input-captcha" class="form-control">
						    <option value=""><?php echo $text_none; ?></option>
						    <?php foreach($captchas as $captch){ ?>
						    <?php if ($captch['value'] == $captcha){ ?>
						    <option value="<?php echo $captch['value']; ?>" selected="selected"><?php echo $captch['text']; ?></option>
						    <?php } else { ?>
						    <option value="<?php echo $captch['value']; ?>"><?php echo $captch['text']; ?></option>
						    <?php } ?>
						    <?php } ?>
						  </select>
						</div>
					</div>
				</div>
			</fieldset>
		</div>
		</form>
		<form action="<?php echo $delete; ?>" method="post" enctype="multipart/form-data" id="form-delete" class="form-horizontal">
		<div id="tab-guest" class="tab-pane<?php if (isset($module_id)){ ?> active<?php } ?>">
		  <div class="panel-body">
				<div class="row">
				  <div class="col-lg-7 col-md-5 col-xs-6">
					<div class="text-lef"><?php echo $pagination_cheaper; ?></div>
				  </div>
				  <div class="col-lg-3 col-md-4 col-xs-6">
					  <div class="input-group input-group-sm">
						<label class="input-group-addon" for="input-sort"><?php echo $entry_sort_order; ?></label>
						<select id="input-sort" class="form-control" onchange="loadValue(this.value, '#tab-guest');">
						  <?php foreach ($sorts as $sorts) { ?>
						   <?php if ($sorts['value'] == $sort . '-' . $order) { ?>
						  <option value="<?php echo $sorts['href']; ?>" selected="selected"><?php echo $sorts['text']; ?></option>
						  <?php } else { ?>
						  <option value="<?php echo $sorts['href']; ?>"><?php echo $sorts['text']; ?></option>
						  <?php } ?>
						  <?php } ?>
						</select>
					  </div>
				  </div>
				  <div class="col-lg-2 col-md-2 col-xs-6">
					<div class="input-group input-group-sm">
					<label class="input-group-addon" for="input-limit"><?php echo $limit_default; ?></label>
						<select id="input-limit" class="form-control" onchange="loadValue(this.value, '#tab-guest');">
						  <?php foreach ($limits as $limits) { ?>
						  <?php if ($limits['value'] == $limit) { ?>
						  <option value="<?php echo $limits['href']; ?>" selected="selected"><?php echo $limits['text']; ?></option>
						  <?php } else { ?>
						  <option value="<?php echo $limits['href']; ?>"><?php echo $limits['text']; ?></option>
						  <?php } ?>
						  <?php } ?>
						</select>
					</div>
				  </div>
				</div>
			  </div>
			  <div class="col-sm-12 col-xs-12">
			  <div class="table-responsive">
				<table class="table table-bordered table-hover">
				  <thead>
					<tr id="head_table">
					  <td width="1%" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);" /></td>
					  <td width="2%" class="text-left">№</td>
					  <td width="8%" class="text-center"><?php echo $text_date; ?></td>
					  <td class="text-left" width="64%"><?php echo $more_list_module; ?></td>
					  <td class="text-center" width="25%"><?php echo $text_status; ?></td>
					</tr>
				  </thead>
				  <tbody>
				    <?php $a=0; ?>
					<?php foreach ($cheaperings as $n){ ?>
						<?php $a=$a+1; ?>
					<?php } ?>
					<?php foreach ($cheaperings as $n){ ?>
					<?php if ($n['status'] == 0){ ?><?php $status = $status_off; ?><?php $class = " class='bg_status bg_status" . $n['id'] . " on'"; ?><?php } else { ?><?php $status = $status_on; ?><?php $class=" class='bg_status bg_status" . $n['id'] . "'"; ?><?php } ?>
					<tr<?php echo $class; ?>>
					  <td class="text-center">
						<input type="checkbox" name="selected[]" value="<?php echo $n['id']; ?>" />
					  </td>
					  <td class="text-center"><?php echo $a; ?></td>
					  <td class="text-center"><?php echo $n['date']; ?></td>
					   <td class="text-left">
							<?php if ($n['test_product']){ ?>
							<?php echo $text_product; ?>: 
								<span class="normal">
									<?php if ($n['test_product']){ ?><a href="<?php echo $n['href_product']; ?>" target="_blank"><?php } ?><?php echo $n['name_product']; ?><?php if ($n['test_product']){ ?></a><?php } ?>
									<?php if ($n['option']){ ?>
										<?php foreach ($n['option'] as $option){ ?>
											(-	<small><?php echo $option['name']; ?>: <?php echo $option['value']; ?></small>)
										<?php } ?>
									<?php } ?>
								</span>
								<br />
							<?php } ?>
						<?php if ($n['text']){ ?><?php echo $n['text']; ?><?php } ?>
					   </td>
					   <td class="text-center">
							<select name="status_order" id="input-store<?php echo $n['id']; ?>" class="form-control" style="display: inline-block; padding-top: 5px; width: 146px;">
								{<?php if ($n['status'] == 0){ ?>
									<option value="0" selected="selected"><?php echo $status_off; ?></option>
									<option value="1"><?php echo $status_on; ?></option>
								<?php } else { ?>
									<option value="0"><?php echo $status_off; ?></option>
									<option value="1" selected="selected"><?php echo $status_on; ?></option>
								<?php } ?>
							</select>
							<button type="button" onclick="ajaxsavestatus('<?php echo $n['id']; ?>','<?php echo $module_id; ?>');" form="form-featured" data-toggle="tooltip" title="<?php echo $button_save; ?>" class="btn btn-primary" style="" data-original-title="<?php echo $button_save; ?>"><i class="fa fa-save"></i></button>
							<button type="button" data-toggle="tooltip" title="<?php echo $button_delete; ?>" class="btn btn-danger" onclick="confirm('<?php echo $text_confirm; ?>') ? ajaxdelete('<?php echo $n['id']; ?>','<?php echo $module_id; ?>') : false;"><i class="fa fa-trash-o"></i></button>
							<div class="saving"><?php echo $text_save; ?></div>
					   </td>
					</tr>
					<?php $a = $a - 1; ?>
					<?php } ?>
				  </tbody>
				</table>
			  </div></div>
			  <div class="col-sm-12 col-xs-12"><div class="text-right marg-bottom"><?php echo $pagination_cheaper; ?></div></div>
			  <div class="clearfix"></div>
		</div>
		</div>
		</form>
	</div>
  </div>
</div>
<script type="text/javascript"><!--
function testStorageFields(){
	/*$('#save_click').attr('onClick', 'confirm(\'<?php echo $text_confirm_save; ?>\') ? $(\'#form-module\').submit() : false;');*/
	/*$('.alert-info-fixed').remove();
	$('#container').append('<div class="alert-info-fixed"><div class="alert alert-info"><i class="fa fa-info-circle"></i> <?php echo $text_confirm_save; ?></div><div class="alert alert-info"><i class="fa fa-info-circle"></i> <?php echo $text_confirm_save_fixed; ?></div></div>');*/
}
$('#fields-value input[type=\'text\'].name-fields').on('keydown', function(e) {
	testStorageFields();
});
$('body').prepend('<div class="divsend"></div>');
function bluring() {
	if ($("body").hasClass("bluring")) {
		$('body').removeClass('bluring');
		$('.modal-bg').removeClass('show');
	} else {
		$('body').addClass('bluring');
		$('.modal-bg').addClass('show');
	}
}
function getajaxpage(namesend, emailsend) {
    $.ajax({
        url: 'index.php?route=<?php if ($version == '2.3'){ ?>extension/<?php } ?>module/cheaper30/sendform',
		type:'get',
		data: 'namesend=' + namesend + '&emailsend=' + emailsend + '&token=<?php echo $token; ?>',
		success: function(msg){
			$('.divsend').empty();
			$('.divsend').append(msg);
			if ($('body .divsend').hasClass("show")) {
				$('body .divsend').removeClass('show');
			} else {
				$('body .divsend').addClass('show');
				$('.modal-bg').addClass('show');
			}
			bluring();
		}
    });
}
function ajaxsavestatus(id, module_id){
	data = $('select#input-store' + id);
    $.ajax({
        url: 'index.php?route=<?php if ($version == '2.3'){ ?>extension/<?php } ?>module/cheaper30/updating',
		type: 'get',
		data: data.serialize() + '&id=' + id + '&module_id=' + module_id + '&token=<?php echo $token; ?>',
		beforeSend: function(){
			$('.bg_status' + id).addClass('loading');
		},
		success: function(){
			$('#input-store' + id).parent().find('.saving').addClass('show');
			
			if ($('#input-store' + id).val() == '0') {
				$('.bg_status' + id).addClass('on');
			} else {
				$('.bg_status' + id).removeClass('on');
			}
			$('.bg_status' + id).removeClass('loading');
			setTimeout(function () {
				$('#input-store' + id).parent().find('.saving').removeClass('show');
			}, 3000);
			
		}
    });
}
function ajaxdelete(id, module_id){
	data = $('select#input-store' + id);
    $.ajax({
        url: 'index.php?route=<?php if ($version == '2.3'){ ?>extension/<?php } ?>module/cheaper30/delete',
		type: 'get',
		data: data.serialize() + '&id=' + id + '&module_id=' + module_id + '&token=<?php echo $token; ?>',
		beforeSend: function(){
			$('.bg_status' + id).addClass('loading');
		},
		success: function(){
			$('.bg_status' + id).remove();
			$('.bg_status' + id).removeClass('loading');
		}
    });
}
function centering(diving) {
	var wsize = windowWorkSize(),
	testElem = $(diving),
	testElemWid =  testElem.outerWidth(),
	testElemHei =  testElem.outerHeight();
	testElem.css('top', wsize[1]/2 - testElemHei/2 + (document.body.scrollTop || document.documentElement.scrollTop) + 'px');
	
	function windowWorkSize(){
	var wwSize = new Array();
		if (window.innerHeight !== undefined) {wwSize= [window.innerWidth,window.innerHeight]} else {
			wwSizeIE = (document.body.clientWidth) ? document.body : document.documentElement; 
			wwSize= [wwSizeIE.clientWidth, wwSizeIE.clientHeight];
		};
		return wwSize;
	};
}
//--></script>
<script><!--
$('select[name=\'to\']').on('change', function() {
	$('.to').hide();

	$('#to-' + this.value.replace('_', '-')).show();
});

$('select[name=\'to\']').trigger('change');

$('select[name=\'type_view\']').on('change', function() {
	$('#type_view, #type_view_help,#type-product').hide();
	if (this.value == 0){
		$('#type_view').show();
		$('.type-product').show();
	} else {
		$('#type_view_help,#type-product').show();
		$('.type-product').hide();
	}
});
$('select[name=\'type_view\']').trigger('change');
$('select#input-help').on('change', function(){
	if ($(this).val()) {
		$('#help_template').html('<?php echo $help_text_paste; ?> ' + $(this).val() + '<?php echo $help_text_paste23; ?>');
		$('#help_template').removeClass('hide_cheaper');
	} else {
		$('#help_template').addClass('hide_cheaper');
	}
	
});
//--></script>
<?php if ($version == '2.2' or $version == '2.1' or $version == '2.0'){ ?><?php } else { ?>
<link href="view/javascript/codemirror/lib/codemirror.css" rel="stylesheet" />
<link href="view/javascript/codemirror/theme/monokai.css" rel="stylesheet" />
<script type="text/javascript" src="view/javascript/codemirror/lib/codemirror.js"></script> 
<script type="text/javascript" src="view/javascript/codemirror/lib/xml.js"></script> 
<script type="text/javascript" src="view/javascript/codemirror/lib/formatting.js"></script> 
<script type="text/javascript" src="view/javascript/summernote/summernote.js"></script>
<link href="view/javascript/summernote/summernote.css" rel="stylesheet" />
<script type="text/javascript" src="view/javascript/summernote/opencart.js"></script> 
<?php } ?>
  <script type="text/javascript"><!--
// Customers
$('input[name=\'customers\']').autocomplete({
	'source': function(request, response) {
		$.ajax({
			url: 'index.php?route=customer/customer/autocomplete&token=<?php echo $token; ?>&filter_name=' +  encodeURIComponent(request),
			dataType: 'json',
			success: function(json) {
				response($.map(json, function(item) {
					return {
						label: item['name'],
						value: item['customer_id']
					}
				}));
			}
		});
	},
	'select': function(item) {
		$('input[name=\'customers\']').val('');

		$('#input-customer' + item['value']).remove();

		$('#input-customer').parent().find('.well').append('<div id="customer' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="customer[]" value="' + item['value'] + '" /></div>');
	}
});

$('#input-customer').parent().find('.well').delegate('.fa-minus-circle', 'click', function() {
	$(this).parent().remove();
});

// Affiliates
$('input[name=\'affiliates\']').autocomplete({
	'source': function(request, response) {
		$.ajax({
			url: 'index.php?route=customer/customer/autocomplete&token=<?php echo $token; ?>&filter_name=' +  encodeURIComponent(request),
			dataType: 'json',
			success: function(json) {
				response($.map(json, function(item) {
					return {
						label: item['name'],
						value: item['customer_id']
					}
				}));
			}
		});
	},
	'select': function(item) {
		$('input[name=\'affiliates\']').val('');

		$('#input-affiliate' + item['value']).remove();

		$('#input-affiliate').parent().find('.well').append('<div id="affiliate' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="affiliate[]" value="' + item['value'] + '" /></div>');
	}
});

$('#input-affiliate').parent().find('.well').delegate('.fa-minus-circle', 'click', function() {
	$(this).parent().remove();
});

// Products
$('input[name=\'products\']').autocomplete({
	'source': function(request, response) {
		$.ajax({
			url: 'index.php?route=catalog/product/autocomplete&token=<?php echo $token; ?>&filter_name=' +  encodeURIComponent(request),
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
	'select': function(item) {
		$('input[name=\'products\']').val('');

		$('#input-product' + item['value']).remove();

		$('#input-product').parent().find('.well').append('<div id="product' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="product[]" value="' + item['value'] + '" /></div>');
	}
});

$('#input-product').parent().find('.well').delegate('.fa-minus-circle', 'click', function() {
	$(this).parent().remove();
});
$('select[name^=\'product\']').on('change',function(){
	if ($(this).val() == 1){
		$('#block-product').removeClass('hide');
	} else {
		$('#block-product').addClass('hide');
	}
});
localStorage.setItem('storage_text_area', $('textarea#href_module').text());
$('select[name^=\'product\']').trigger('change');

function copyTextToClipboard(text){
  var textArea = document.createElement('textarea');
  textArea.value = text
  document.body.insertBefore(textArea,document.body.firstChild);
  textArea.focus();
  textArea.select();
  try{
    var successful = document.execCommand('copy');
    var msg = successful ? 'successful' : 'unsuccessful';
    $('span[onClick^=\'copyTextToClipboard\']').text('<?php echo $text_template_button_copy_success; ?>').addClass('btn-success');
	setTimeout(function(){
		$('span[onClick^=\'copyTextToClipboard\']').text('<?php echo $text_template_button_copy; ?>').removeClass('btn-success btn-danger');
		$('.error-span').addClass('hide');
	}, 7000);
  } catch (err){
		$('span[onClick^=\'copyTextToClipboard\']').text('<?php echo $text_template_button_copy_error; ?>').addClass('btn-danger');
		$('.error-span').removeClass('hide');
		$('#href_module').removeAttr('disabled');
		$('textarea#href_module').select();
		setTimeout(function(){
			$('span[onClick^=\'copyTextToClipboard\']').text('<?php echo $text_template_button_copy; ?>').removeClass('btn-success btn-danger');
			$('.error-span').addClass('hide');
		}, 5000);
  }
  document.body.removeChild(textArea);
}
function table_load(module){
	$('#tableLoad' + module).button('loading');
	$('#fields-value input, #fields-value select').attr('disabled','disabled');
	$('#select-text').addClass('loading');
	$('#select-text').load('index.php?route=<?php if ($version == '2.3'){ ?>extension/<?php } ?>module/cheaper30/tableload&module=' + module + '&token=<?php echo $token; ?> #select-text', function(){
		$('#tableLoad' + module).button('reset');
		$('#select-text').removeClass('loading');
		moveSortorder();
		tabs_module();
	});
	testStorageFields();
}

function send(url) {
	<?php if ($ckeditor){ ?>
	$('textarea[name=\'message\']').val(CKEDITOR.instances['input-message'].getData());
	<?php } else { ?>
	
	$('textarea[name=\'message\']').val($('#input-message').code());
	<?php } ?>

	$.ajax({
		url: url,
		type: 'post',
		data: $('#content select, #content input, #content textarea'),
		dataType: 'json',
		beforeSend: function() {
			$('#button-send').button('loading');
		},
		complete: function() {
			$('#button-send').button('reset');
		},
		success: function(json) {
			$('.alert, .text-danger').remove();

			if (json['error']) {
				if (json['error']['warning']) {
					$('#content > .container-fluid').prepend('<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + '</div>');
				}

				if (json['error']['subject']) {
					$('input[name=\'subject\']').after('<div class="text-danger">' + json['error']['subject'] + '</div>');
				}

				if (json['error']['message']) {
					$('textarea[name=\'message\']').parent().append('<div class="text-danger">' + json['error']['message'] + '</div>');
				}
			}

			if (json['next']) {
				if (json['success']) {
					$('#content > .container-fluid').prepend('<div class="alert alert-success"><i class="fa fa-check-circle"></i>  ' + json['success'] + '</div>');

					send(json['next']);
				}
			} else {
				if (json['success']) {
					$('#content > .container-fluid').prepend('<div class="alert alert-success"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');
				}
			}
		}
	});
}
function tabs_module(){
	$('#tab a').click(function(){
		$(this).parent().parent().find('li').removeClass('active');
		$(this).parent().addClass('active');
		var id = $(this).attr('ref');
		$('#tab + .tab-content > form > div').removeClass('active');
		$(id).addClass('active');
		return false;
	});
	$('#language a:first').tab('show');
	$('#language_h1 a:first').tab('show');
	$('#language_h4 a:first').tab('show');
	$('#language_success a:first').tab('show');
	$('#language_error a:first').tab('show');
	$('#language_value a:first').tab('show');
	<?php foreach ($error_cheaper30_h1_array as $language_id => $text_error){ ?>
			$('#language_h1 a[href=\'#language_h1<?php echo $language_id; ?>\']').trigger('click');
	<?php } ?>
	<?php foreach ($error_cheaper30_errort_array as $language_id => $text_error){ ?>
			$('#language_error a[href=\'#language_error<?php echo $language_id; ?>\']').trigger('click');
	<?php } ?>
	<?php foreach ($error_cheaper30_succes_array as $language_id => $text_error){ ?>
			$('#language_success a[href=\'#language_success<?php echo $language_id; ?>\']').trigger('click');
	<?php } ?>
}
tabs_module();
var fields_value_row = <?php echo $fields_value_row; ?>;

moveSortorder(fields_value_row);
selectTypeRegex(fields_value_row);

function addFieldValue() {
	html  = '<tr id="fields-value-row' + fields_value_row + '">';
    html  += 	'<td class="nav text-center">';
	html  += 		'<li>';
	html  += 			'<span type="text" class="btn btn-default icons" data-field="' + fields_value_row + '" onClick="selectIcons(\'' + fields_value_row + '\'); return false;"><?php echo $text_select_icons; ?></span>';
	html  += 			'<input type="hidden" value="" name="field_value[' + fields_value_row + '][icon]">';
	html  += 		'</li>';
	html  += 	'</td>';
	html  += 	'<td class="text-left"><input type="hidden" name="field_value[' + fields_value_row + '][field_value_id]" value="' + fields_value_row + '" />';
	<?php foreach ($languages as $language) { ?>
	html  += 		'<div class="input-group">';
	html  += 			'<span class="input-group-addon"><img src="<?php if ($version == '2.3' or $version == '2.2'){ ?>language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png<?php } ?><?php if ($version == '2.1' or $version == '2.0'){ ?>view/image/flags/<?php echo $language['image']; ?><?php } ?>" title="<?php echo $language['name']; ?>" /></span><input type="text" name="field_value[' + fields_value_row + '][name][<?php echo $language['language_id']; ?>]" value="" placeholder="<?php echo $entry_name_fields; ?>" class="form-control name-fields" />';
	html  += 		'</div>';
	<?php } ?>
	html  += 	'</td>';
	html += 	'<td class="text-right"><select name="field_value[' + fields_value_row + '][type]" value=""  class="form-control select-regex" data-row="' + fields_value_row + '"><?php foreach ($select_type as $select){ ?><optgroup label="<?php echo $select['text']; ?>"><?php foreach ($select['items'] as $key => $item){ ?><option value="<?php echo $key; ?>"><?php echo $item; ?></option><?php } ?></optgroup><?php } ?></select></td>';
	html  += 	'<td class="text-center parameter">-</td>';
	html  += 	'<td class="text-center regex">-</td>';
	html  += 	'<td class="text-center"><label><input type="checkbox" name="field_value[' + fields_value_row + '][required]" value="1"></label><br /></td>';
	html  += 	'<td class="text-right"><input type="text" name="field_value[' + fields_value_row + '][sort_order]" value="' + fields_value_row + '" placeholder="<?php echo $entry_sort_order; ?>" class="form-control" /></td>';
	html += '  <td class="text-right"><button type="button" onclick="$(\'#fields-value-row' + fields_value_row + '\').remove(); testStorageFields();" data-toggle="tooltip" title="<?php echo $text_remove_module; ?>" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>';
	html  += '</tr>';
	
	$('#fields-value tbody').append(html);
	
	moveSortorder(fields_value_row);
	selectTypeRegex(fields_value_row);
	
	$('select.select-regex[data-row="' + fields_value_row + '"]').find('option[value=\'text\']').trigger('click');

	fields_value_row++;
	
}
function appendRegexText(fields_value_row) {
	
	html_regex = '  		<select name="field_value[' + fields_value_row + '][regex]" class="form-control type-regex select' + fields_value_row + '" data-row="' + fields_value_row + '">';
		html_regex += '  		<?php foreach ($code_regex_text as $regex){ ?><option value="<?php echo $regex['valid']; ?>"><?php echo $regex['text']; ?></option><?php } ?>';
	html_regex += '  		</select><br />';
	
	return html_regex;
}
function appendRegexTextarea(fields_value_row) {
	
	html_regex = '  		<select name="field_value[' + fields_value_row + '][regex]" class="form-control type-regex-area select' + fields_value_row + '" data-row="' + fields_value_row + '">';
		html_regex += '  		<?php foreach ($code_regex_textarea as $regex){ ?><option value="<?php echo $regex['valid']; ?>"><?php echo $regex['text']; ?></option><?php } ?>';
	html_regex += '  		</select><br />';
	
	return html_regex;
}
function appendSelect(fields_value_row) {
	
	html_select = '<div class="input-group">';
	html_select += 	'<span class="input-group-addon btn-primary" data-toggle="tooltip" onClick="selectValue(\'' + fields_value_row + '); updateNumberValue(' + fields_value_row + '); return false;" title="<?php echo $button_field_parametr_add; ?>"><i class="fa fa-edit"></i></span>';
	html_select += 	'<select class="form-control"></select>';
	html_select += '</div>';
	
	return html_select;
}
function appendRadioSelect(fields_value_row){
	
	html_radio = 	'<div class="radio-div well well-sm"></div>';
	html_radio += 	'<span class="btn btn-primary" data-toggle="tooltip" onClick="selectValue(' + fields_value_row + '); updateNumberValue(' + fields_value_row + '); return false;" title="<?php echo $button_field_parametr_add; ?>"><i class="fa fa-edit"></i></span>';
	
	return html_radio;
}
function appendChecked(fields_value_row){
	html_checked = 	'<div class="radio-div well well-sm"></div>';
	html_checked += 	'<span class="btn btn-primary" data-toggle="tooltip" onClick="selectValue(' + fields_value_row + '); updateNumberValue(' + fields_value_row + '); return false;" title="<?php echo $button_field_parametr_add; ?>"><i class="fa fa-edit"></i></span>';
	
	return html_checked;
}
function tooltipModule(){
	setTimeout(function(){
		$('[data-toggle=\'tooltip\']').tooltip({container: 'body'});
	},0);
}
function ChangeType(row, value_row){
	if (value_row == 'select' || value_row == 'radio' || value_row == 'checked') {
			$('#body-value-' + row + ' tr[id^=\'fields-value-\']').find('input[type=\'text\']').each(function(i){
				var _this = $(this);
				var name_text = '';
				_this.attr('name').split('!').forEach(function(i, item){
					if (item == 1) {
						name_text += '!' + value_row + '!';
					} else {
						name_text += i;
					}
				});
				_this.attr('name',name_text)
			});
			$('#body-value-' + row + ' button[onClick^=\'addSelectValue(\']').each(function(){
				$(this).attr('onClick','addSelectValue(\'' + $(this).attr('data-row') + '\',\'' + value_row + '\');');
			});
			<?php $chet = 0; ?>
			var array_replace = [<?php foreach ($select_type as $select){ ?><?php foreach ($select['items'] as $key => $item){ ?><?php if ($chet > 0){ ?>,<?php } ?>'save<?php echo $key; ?>Value'<?php $chet = $chet + 1; ?><?php } ?><?php } ?>];
			if (value_row == 'select') {
				$('#body-value-' + row + ' tr[id^=\'fields-value-\']').each(function(){
					var _this = $(this);
					if ($(this).find('button.btn-danger').html() != undefined) {
						var attr_onClick = $(this).find('button.btn-danger').attr('onClick')
						array_replace.forEach(function(item){
							attr_onClick = attr_onClick.replace(item, 'saveselectValue');
						});
						if (attr_onClick.indexOf('saveselectValue') == -1){
							attr_onClick += 'saveselectValue(\'' + row + '\', \'false\')';
						}
						$(this).find('button.btn-danger').attr('onClick', attr_onClick);
					}
				});
				$('#body-value-' + row).each(function(){
					var attr_onClick_save = $(this).find('span.btn-primary').attr('onClick');
					array_replace.forEach(function(item){
						attr_onClick_save = attr_onClick_save.replace(item, 'saveselectValue');
					});
					$(this).find('span.btn-primary').attr('onClick', attr_onClick_save);
				});
			}
			if (value_row == 'radio') {
				$('#body-value-' + row + ' tr[id^=\'fields-value-\']').each(function(){
					if ($(this).find('button.btn-danger').html() != undefined) {
						var attr_onClick = $(this).find('button.btn-danger').attr('onClick')
						array_replace.forEach(function(item){
							attr_onClick = attr_onClick.replace(item, 'saveradioValue');
						});
						if (attr_onClick.indexOf('saveradioValue') == -1){
							attr_onClick += 'saveradioValue(\'' + row + '\', \'false\')';
						}
						$(this).find('button.btn-danger').attr('onClick', attr_onClick);
					}
				});
				$('#body-value-' + row).each(function(){
					var attr_onClick_save = $(this).find('span.btn-primary').attr('onClick');
					array_replace.forEach(function(item){
						attr_onClick_save = attr_onClick_save.replace(item, 'saveradioValue');
					});
					$(this).find('span.btn-primary').attr('onClick', attr_onClick_save);
				});
			}
			if (value_row == 'checked') {
				$('#body-value-' + row + ' tr[id^=\'fields-value-\']').each(function(){
					if ($(this).find('button.btn-danger').html() != undefined) {
						var attr_onClick = $(this).find('button.btn-danger').attr('onClick');
						array_replace.forEach(function(item){
							attr_onClick = attr_onClick.replace(item, 'savecheckedValue');
						});
						if (attr_onClick.indexOf('savecheckedValue') == -1){
							attr_onClick += 'savecheckedValue(\'' + row + '\', \'false\')';
						}
						$(this).find('button.btn-danger').attr('onClick', attr_onClick);
					}
				});
				$('#body-value-' + row).each(function(){
					var attr_onClick_save = $(this).find('span.btn-primary').attr('onClick');
					array_replace.forEach(function(item){
						attr_onClick_save = attr_onClick_save.replace(item, 'savecheckedValue');
					});
					$(this).find('span.btn-primary').attr('onClick', attr_onClick_save);
				});
			}
			
		}
}
function moveSortorder(fields_value_row){
	$('select.select-regex').change(function(){
		tooltipModule();
		
		var row = $(this).attr('data-row');
		var value_row = $(this).val();
		ChangeType(row, value_row);
	});
	$('option[value=\'text\']').click(function(){
		if ($(this).parent().parent().attr('data-row')) {
			fields_value_row = $(this).parent().parent().attr('data-row');
		}
		
		$(this).parent().parent().parent().parent().find('.regex, .parameter').empty();

		var regexHtml = appendRegexText(fields_value_row);
		$(this).parent().parent().parent().parent().find('.regex').append(regexHtml);
		$(this).parent().parent().parent().parent().find('.regex select.type-regex').trigger('change');
		selectTypeRegex(fields_value_row);
	});
	$('option[value=\'textarea\']').click(function(){
		if ($(this).parent().parent().attr('data-row')) {
			fields_value_row = $(this).parent().parent().attr('data-row');
		}
		
		$(this).parent().parent().parent().parent().find('.regex, .parameter').empty();

		var regexHtmlArea = appendRegexTextarea(fields_value_row);
		
		$(this).parent().parent().parent().parent().find('.regex').append(regexHtmlArea);
		$(this).parent().parent().parent().parent().find('.regex select.type-regex-area').trigger('change');
		selectTypeRegex(fields_value_row);
	});
	$('option[value=\'select\']').click(function(){
		if ($(this).parent().parent().attr('data-row')) {
			fields_value_row = $(this).parent().parent().attr('data-row');
		}
		
		$(this).parent().parent().parent().parent().find('.regex, .parameter').empty();
		
		var addHtmlSelect = appendRadioSelect(fields_value_row);
		
		$(this).parent().parent().parent().parent().find('.parameter').append(addHtmlSelect);
		
		saveselectValue($(this).parent().parent().attr('data-row'),'select');
		
		selectTypeRegex(fields_value_row);
	});
	$('option[value=\'radio\']').click(function(){
		if ($(this).parent().parent().attr('data-row')) {
			fields_value_row = $(this).parent().parent().attr('data-row');
		}
		
		$(this).parent().parent().parent().parent().find('.regex, .parameter').empty();
		
		var addHtmlRadio = appendRadioSelect(fields_value_row);
		
		$(this).parent().parent().parent().parent().find('.parameter').append(addHtmlRadio);
		
		saveradioValue($(this).parent().parent().attr('data-row'),'radio');
		
		selectTypeRegex(fields_value_row);
	});
	$('option[value=\'checked\']').click(function(){
		if ($(this).parent().parent().attr('data-row')) {
			fields_value_row = $(this).parent().parent().attr('data-row');
		}
		
		$(this).parent().parent().parent().parent().find('.regex, .parameter').empty();
		
		var addHtmlChecked = appendChecked(fields_value_row);
		
		$(this).parent().parent().parent().parent().find('.parameter').append(addHtmlChecked);
		
		savecheckedValue($(this).parent().parent().attr('data-row'),'checked');
		
		selectTypeRegex(fields_value_row);
	});
	$('option[value=\'file\']').click(function(){
		$(this).parent().parent().parent().parent().find('.regex, .parameter').empty();
	});
}

function selectTypeRegex(fields_value_row){
	$('select.type-regex, select.type-regex-area').on('change',function(){
		
		if ($(this).attr('data-row')) {
			fields_value_row = $(this).attr('data-row');
		}

		$(this).parent().find('input, .row, .input-group-phone').remove();
		
		var select_value = $(this).val(); 
		if (select_value == 'minlength'){
			html = '<input type="text" class="form-control" placeholder="<?php echo $text_minlength; ?>" value="" name="field_value[' + fields_value_row + '][valid]">';
			$(this).parent().append(html);
		}
		if (select_value == 'maxlength'){
			html = '<input type="text" class="form-control" placeholder="<?php echo $text_maxlength; ?>" value="" name="field_value[' + fields_value_row + '][valid]">';
			$(this).parent().append(html);
		}
		if (select_value == 'rangelength'){
			html = 	'<div class="row">';
				html += 	'<div class="col-sm-6 col-xs-12"><input type="text" class="form-control" placeholder="<?php echo $text_rangelength_before; ?>" value="" name="field_value[' + fields_value_row + '][valid][0]"></div>';
				html += 	'<div class="col-sm-6 col-xs-12"><input type="text" class="form-control" placeholder="<?php echo $text_rangelength_after; ?>" value="" name="field_value[' + fields_value_row + '][valid][1]"></div>';
			html += 	'</div>';
			
			$(this).parent().append(html);
		}
		if (select_value == 'min'){
			html = '<input type="text" class="form-control" placeholder="<?php echo $text_min; ?>" value="" name="field_value[' + fields_value_row + '][valid]">';
			$(this).parent().append(html);
		}
		if (select_value == 'max'){
			html = '<input type="text" class="form-control" placeholder="<?php echo $text_max; ?>" value="" name="field_value[' + fields_value_row + '][valid]">';
			$(this).parent().append(html);
		}
		if (select_value == 'range'){
			html = 	'<div class="row">';
				html += 	'<div class="col-sm-6 col-xs-12"><input type="text" class="form-control" placeholder="<?php echo $text_range_before; ?>" value="" name="field_value[' + fields_value_row + '][valid][0]"></div>';
				html += 	'<div class="col-sm-6 col-xs-12"><input type="text" class="form-control" placeholder="<?php echo $text_range_after; ?>" value="" name="field_value[' + fields_value_row + '][valid][1]"></div>';
			html += 	'</div>';
			
			$(this).parent().append(html);
		}
		if (select_value == 'step'){
			html = '<input type="text" class="form-control" placeholder="<?php echo $text_step; ?>" value="" name="field_value[' + fields_value_row + '][valid]">';
			$(this).parent().append(html);
		}
		if (select_value == 'phoneUS'){
			html = '<div class="input-group-phone">';
				html += '<label class="control-label" style="text-align: left; padding-bottom: 7px;"><span data-toggle="tooltip" title="<?php echo $text_help_phoneUS; ?>" style="font-weight: normal;"><?php echo $label_help_phoneUS; ?></span></label>';
				<?php foreach ($languages as $language){ ?>
					html += '<div class="input-group">';
						html += '<span class="input-group-addon"><img title="<?php echo $language['name']; ?>" src="language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png"></span>';
						html += '<input type="text" class="form-control" placeholder="<?php if (isset($phones_placeholder[$language['code']])){ ?><?php echo $phones_placeholder[$language['code']]; ?><?php } else { ?><?php echo $text_phoneUS; ?><?php } ?>" value="" name="field_value[' + fields_value_row + '][valid][<?php echo $language['code']; ?>]">';
					html += '</div>';
				<?php } ?>
			html += '</div>';
			$(this).parent().append(html);
			tooltipModule();
		}
	});
}
function selectIcons(field_value_id){
	$('body').removeClass('body-after');
	$('.select-icons').removeClass('hide');
	$('body').addClass('body-after');
	centering('body > .select-icons');
	$('.select-icons .hover-fa').attr('data-field', field_value_id);
}
function selectValue(field_value_id){
	newValueAppendTr(field_value_id);
	$('body').removeClass('body-after');
	$('.select-value').removeClass('hide');
	$('body').addClass('body-after');
	$('.select-value div[id^=\'body-value-\']').addClass('hide');
	$('.select-value #body-value-' + field_value_id).removeClass('hide');
	BindClick();
	
}
function newValueAppendTr(field_value_id){
	var htm_body_value = '';
	
	if ($('#body-value-' + field_value_id).html() == undefined){
		htm_body_value += '<div class="col-sm-12 hide overf" id="body-value-' + field_value_id + '">';
		htm_body_value += 	'<div class="container-fluid">';
		htm_body_value += 		'<div class="pull-right"><span class="btn btn-primary" title="" data-toggle="tooltip" onclick="saveselectValue(\'' + field_value_id + '\'); return false;" data-original-title="<?php echo $button_save; ?>"><i class="fa fa-save"></i> <?php echo $button_save; ?></span></div>';
		htm_body_value += 	'</div>';
		htm_body_value += 	'<table class="table table-striped table-bordered table-hover">';
		htm_body_value += 	  '<thead>';
		htm_body_value += 		'<tr>';
		htm_body_value += 			'<td class="text-center" width="1%"><?php echo $text_head_value_1; ?></td>';
		htm_body_value += 			'<td class="text-left"><?php echo $text_head_value_2; ?></td>';
		htm_body_value += 			'<td width="1%"></td>';
		htm_body_value += 		'</tr>';
		htm_body_value += 	  '</thead>';
		htm_body_value += 	  '<tbody class="body-value">';
		htm_body_value += 		'<tr>';
		htm_body_value += 			'<td colspan="2"></td>';
		htm_body_value += 			'<td>';
		htm_body_value += 				'<button class="btn btn-success" data-toggle="tooltip" onclick="addSelectValue(\'' + field_value_id + '\',\'select\');" data-row="' + field_value_id + '" type="button" title="<?php echo $text_add_module; ?>"><i class="fa fa-plus-circle"></i></button>';
		htm_body_value += 			'</td>';
		htm_body_value += 		'</tr>';
		htm_body_value += 	  '</tbody>';
		htm_body_value += 	'</table>';
		htm_body_value += '</div>';
		
	}
	
	$('#select-value .select-value .close-cheaper').after(htm_body_value);

}
function closeIcons(div){
	$(div).addClass('hide');
	$('body').removeClass('body-after');
}
$('.hover-fa').click(function(){
	var span_icons = $('#fields-value #fields-value-row' + $(this).attr('data-field') + ' span.icons');
	span_icons.empty();
	span_icons.append('<i class="fa fa-' + $(this).attr('data-fa') + '"></i>');
	$('#fields-value input[name=\'field_value[' + $(this).attr('data-field') + '][icon]\']').val($(this).attr('data-fa'));
	$('.close-cheaper').trigger('click');
});
$(document).keydown(function(e) {
	if (e.keyCode === 27) {
		closeIcons('.select-icons');
		closeIcons('.select-value');
		return false;
	}
});
function updateNumberValue(row) {
	$('#body-value-' + row + ' tr[id^=\'fields-value-\']').each(function(i){
		$(this).find('td').first().text(i+1);
	});
	tooltipModule();
}
function addSelectValue(row, type){
	
	var count_tr = 0;
	count_tr = $('#body-value-' + row + ' tr[id^=\'fields-value-\']').length + 1;
	
	var value_html = '';
	
	value_html += '<tr id="fields-value-' + count_tr + '">';
	value_html += 	'<td class="text-center">' + count_tr + '</td>';
	value_html += 		'<td class="text-left">';
								<?php foreach ($languages as $language) { ?>
	value_html += 				'<div class="input-group">';
	value_html += 					'<span class="input-group-addon"><img src="<?php if ($version == '2.3' or $version == '2.2'){ ?>language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png<?php } ?><?php if ($version == '2.1' or $version == '2.0'){ ?>view/image/flags/<?php echo $language['image']; ?><?php } ?>" title="<?php echo $language['name']; ?>" /></span><input type="text" name="field_value[' + row +'][!' + type + '!][' + count_tr +'][<?php echo $language['language_id']; ?>]" value="<?php if (isset($result['param'][$language['language_id']])){ ?><?php echo $result['param'][$language['language_id']]; ?><?php } ?>" placeholder="<?php echo $entry_param_fields; ?>" class="form-control name-fields" data-language="<?php echo $language['language_id']; ?>" data-row="' + row + '" />';
	value_html += 				'</div>';
								<?php } ?>
	value_html += 		'</td>';
	value_html += 		'<td class="text-right">';
	value_html += 			'<button class="btn btn-danger" data-toggle="tooltip" onclick="$(\'#fields-value-' + count_tr + '\').remove(); updateNumberValue(' + row + ');" type="button" title="<?php echo $text_remove_module; ?>"><i class="fa fa-minus-circle"></i></button>';
	value_html += 		'</td>';
	value_html += '</tr>';
	
	$('#body-value-' + row + ' .body-value tr').last().before(value_html);
	
	updateNumberValue(row);
}
function saveselectValue(row, type){
	$('#fields-value-row' + row + ' .radio-div').empty();
	
	var cont = 0;
	
	var html = '<label class="checked_value control-label"><?php echo $text_select_value; ?></span></label>';
	html += 		'<select class="form-control">';
	$('#body-value-' + row + ' input[data-language=\'<?php echo $config_language_id; ?>\']').each(function(){
		html += '<optgroup label="' + $(this).val() + '"></optgroup>';
		cont++;
	});
	html += 		'</select>';
	if (cont == 0) {
		html = '<label class="checked_value control-label"><?php echo $text_select_value_empty; ?></span></label>';
	}
	$('#fields-value-row' + row + ' .radio-div').append(html);
	$('.close-cheaper').trigger('click');
}
function saveradioValue(row){
	$('#fields-value-row' + row + ' .radio-div').empty();
	var html = '<label class="checked_value control-label"><?php echo $text_select_value; ?></span></label>';
	var cont = 0;
	$('#body-value-' + row + ' input[data-language=\'<?php echo $config_language_id; ?>\']').each(function(){
		html += '<label class="text-left"><input type="radio" disabled /> ' + $(this).val() + '</label>';
		cont++;
	});
	if (cont == 0) {
		html = '<label class="checked_value control-label"><?php echo $text_select_value_empty; ?></span></label>';
	}
	$('#fields-value-row' + row + ' .radio-div').append(html);
	$('.close-cheaper').trigger('click');
}
function savecheckedValue(row){
	$('#fields-value-row' + row + ' .radio-div').empty();
	var html = '<label class="checked_value control-label"><?php echo $text_select_value; ?></span></label>';
	var cont = 0;
	$('#body-value-' + row + ' input[data-language=\'<?php echo $config_language_id; ?>\']').each(function(){
		html += '<label class="text-left"><input type="checkbox" disabled /> ' + $(this).val() + '</label>';
		cont++;
	});
	if (cont == 0) {
		html = '<label class="checked_value control-label"><?php echo $text_select_value_empty; ?></span></label>';
	}
	$('#fields-value-row' + row + ' .radio-div').append(html);
	$('.close-cheaper').trigger('click');
}
$('#tab-guest').delegate('.pagination a','click',function(e){
    e.preventDefault();
    loadValue(this.href, '#tab-guest');
});
function loadValue(href, clac){
	$(clac).addClass('loading');
	$(clac).load(href + ' ' + clac, function(){
		$(clac).removeClass('loading');
	});
}
$('#tab-guest').delegate('select#input-sort option, select#input-limit option','change',function(e){
	$('#tab-guest').load(this.val() + ' #tab-guest', function(){
		$('#tab-guest').removeClass('loading');
	});
});
<?php if ($version == '2.1' or $version == '2.0'){ ?>
	<?php foreach ($languages as $language) { ?>
	$('#cheapering_text<?php echo $language['language_id']; ?>').summernote({height: 300<?php if ($version == '2.1'){ ?>, lang:'<?php echo $lang; ?>'<?php } ?>});
	<?php } ?>
<?php } ?>
setTimeout(function(){
	$('.bootstrap-datetimepicker-widget').attr('style', 'z-index: 2147483647 !important');
},1000);
//--></script>
<style type="text/css">
	.select-icons, .select-value {
		background: #fff;
		border: 2px solid #1fa67a;
		border-radius: 4px;
		box-shadow: 0 5px 7px #ddd;
		height: 70%;
		position: fixed;
		top: 15%;
		z-index: 9;
	}
	.select-icons > .row, .select-value > .row {
		height: 100%;
		padding-bottom: 15px;
		padding-top: 55px;
	}
	.overf {
		height: 100%;
		overflow-y: auto;
	}
	.fa-icons {
		height: 100%;
		overflow-y: auto;
	}
	.body-after:after {
		background: #000;
		bottom: 0;
		content: "";
		left: 0;
		opacity: 0.1;
		position: fixed;
		right: 0;
		top: 0;
		z-index: 8;
	}
	.select-icons h3, .select-value h3 {
		background: #1fa67a;
		color: #fff;
		font-size: 18px;
		left: 0;
		padding: 10px 15px;
		position: absolute;
		right: 0;
		top: 0;
	}
	.hover-fa {
		cursor: pointer;
		height: 32px;
		overflow: hidden;
		padding-bottom: 7px;
		padding-top: 7px;
		text-overflow: ellipsis;
		white-space: nowrap;
	}
	.fa-icons span {
		font-size: 14px;
		position: relative;
	}
	.fa-icons h4 span {
		color: #999;
	}
	.hover-fa:hover {
		background: #1fa67a;
		color: #fff;
	}
	.hover-fa:hover span {
		color: #fff;
		top: -5px;
		display: inline-block;
	}
	.hover-fa:hover .fa {
		font-size: 28px;
		margin-top: -5px;
		margin-left: -3px;
	}
	.close-cheaper {
		cursor: pointer;
		padding: 4px 5px;
		position: absolute;
		right: 2px;
		top: 4px;
		z-index: 1;
	}
	.close-cheaper svg {
		fill: #ffffff;
	}
	.svg-icon-cheaper {
		height: 1.8em;
		width: 1.8em;
	}
	#fields-value span.icons {
		border-color: #ddd;
		color: #777;
	}
	#fields-value span.icons .fa {
		font-size: 35px;
	}
	.navs-value {
		margin-bottom: 3px;
	}
	.navs-value input {
		margin-top: 7px;
	}
	.input-group-addon.btn-primary {
		background-color: #1e91cf !important;
		border-color: #197bb0 !important;
		color: #fff !important;
		cursor: pointer;
	}
	.radio-div {
		margin-top: 15px;
	}
	.radio-div input {
		top: 2px;
		font-weight: normal;
	}
	.radio-div label {
		display: block;
		font-weight: normal;
	}
	.checked_value span {
		display: block;
		font-size: 12px;
		margin-bottom: 7px;
	}
	#tab-guest .input-group-sm > .form-control {
		padding: 4px 9px;
	}
</style>
<div class="modal-bg"></div>
<?php echo $footer; ?>