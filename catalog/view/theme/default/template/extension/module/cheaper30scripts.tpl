<script>
/*$(document).ready(function() {*/
function hrefButton(_this){
	<?php if ($route == 'product/product'){ ?>
		var href_module = _this.attr('onclick');
		if (href_module.indexOf('&prod_id=<?php echo "<?php echo product_id; ?>"; ?>') == '-1'){
			href_module = href_module.replace('<?php echo $extension; ?>module/cheaper30&module_id=','<?php echo $extension; ?>module/cheaper30&prod_id=<?php echo $product_id; ?>&module_id=');
		}
		_this.attr('onclick', href_module);
	<?php } ?>
}
/*});*/
</script>