<?php require DIR_TEMPLATE . 'extension/module/' . $_name . '-header.tpl'; ?>
<br /><?php echo $entry_default_values; ?><br /><br />
<img src="<?php echo $HTTP_URL; ?>view/stylesheet/mf/images/default-values-options.png" /><br /><br />
<?php 
	
	$_optionsName		= $_name . '_options';
	$_optionsValues		= $options;
	
	require DIR_TEMPLATE . 'extension/module/' . $_name . '-options.tpl';
	
?>
			
<?php require DIR_TEMPLATE . 'extension/module/' . $_name . '-footer.tpl'; ?>