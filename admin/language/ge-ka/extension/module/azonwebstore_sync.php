<?php

if (!defined('_JEXEC'))
    define('_JEXEC', 1);

// Heading
$_['heading_title']		  									= 'AzonWebStore Amazon Affiliate Plugin'; 

// Text
$_['text_module']         									= 'Modules';
$_['text_success']        									= 'Success: You have modified module AzonWebStore Amazon Affiliate Plugin!';
$_['text_edit']              								= 'Edit Settng';
$_['text_yes']      	  									= 'Yes';
$_['text_no']	      	  									= 'No';
$_['text_azonwebstore_sync_debug_mode']					= 'Set "<b>Yes</b>" for Debugging Mode';
$_['text_azonwebstore_sync_powered_by']					= 'Powered by <a href="http://www.azonwebstore.com" target="_new"><font color="blue">http://www.azonwebstore.com</font></a>';

$_['text_content_top']    									= 'Content Top';
$_['text_content_bottom'] 									= 'Content Bottom';
$_['text_column_left']    									= 'Column Left';
$_['text_column_right']   									= 'Column Right';

$_['text_azonwebstore_sync_tab_general']					= 'General Settings';
$_['text_azonwebstore_sync_tab_amazon']					= 'Amazon Settings';
$_['text_azonwebstore_sync_tab_category']					= 'Criteria Settings';
$_['text_azonwebstore_sync_tab_product']					= 'Product Settings';
$_['text_azonwebstore_sync_tab_seo']					    = 'SEO Settings';
$_['text_azonwebstore_sync_tab_misc']						= 'Misc Settings';

$_['text_opencart']      	  								= 'Opencart';
$_['text_amazon']	      	  								= 'Amazon';

// Entry
$_['entry_layout']        									= 'Layout';
$_['entry_position']      									= 'Position';
$_['entry_status']        									= 'Status';
$_['entry_sort_order']    									= 'Sort Order';

$_['entry_azonwebstore_sync_cartversion']     			= 'Version';
$_['entry_azonwebstore_sync_data_sync_url']    			= 'Data Sync URL';
$_['help_azonwebstore_sync_data_sync_url'] 				= 'Example:&nbsp;&nbsp;&nbsp;' . HTTPS_CATALOG . 'azonwebstoresync';
//$_['help_azonwebstore_sync_data_sync_url'] 				= 'Example:&nbsp;&nbsp;&nbsp;http' . ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? 's' : '') . '://' . "{$_SERVER['HTTP_HOST']}" . '/azonwebstoresync';

$_['entry_azonwebstore_sync_locale']       				= 'Your Locale/Region';
$_['entry_azonwebstore_sync_merchant']      				= 'Default Merchant';
$_['entry_azonwebstore_sync_language']      				= 'Default Language';
$_['entry_azonwebstore_sync_public_key']   				= 'AWS Access Key ID';
$_['entry_azonwebstore_sync_private_key']   				= 'AWS Secret Access Key';
$_['entry_azonwebstore_sync_associate_id']  				= 'Associate ID/Affiliate ID';
$_['entry_azonwebstore_sync_status'] 						= 'Status';
$_['entry_azonwebstore_sync_debug_mode'] 					= 'Is Debugging Mode';
$_['entry_azonwebstore_sync_server']						= 'I am running on';
$_['entry_azonwebstore_sync_memory_limit']				= 'Memory Limit';

$_['entry_azonwebstore_sync_item_page']					= 'Item Page Range from 1 - 10 only';
$_['entry_azonwebstore_sync_condition']					= 'Condition';
$_['entry_azonwebstore_sync_minimum_price']				= 'Minimum Price';
$_['entry_azonwebstore_sync_maximum_price']				= 'Maximum Price';
$_['entry_azonwebstore_sync_keywords']					= 'Keywords';
$_['entry_azonwebstore_sync_keywords_eg']					= '<br />Maximum 10 Keywords delimited by comma. For example: <b>tablets,kindle fire,notebook</b>';

$_['entry_azonwebstore_sync_item_quantity']				= 'Default Product Quantity';
$_['entry_azonwebstore_sync_tax_class']   			    = 'Default Tax Class';
$_['entry_azonwebstore_sync_category']         			= 'Categories';
$_['entry_azonwebstore_sync_stock_status_filter']       		= 'Disabled When Stock Status';
$_['help_azonwebstore_sync_stock_status_filter'] 			= '(Autocomplete)';
$_['help_azonwebstore_sync_item_quantity'] 				= ' Minimum 5';
$_['help_azonwebstore_sync_category']          			= '(Autocomplete)';
$_['entry_azonwebstore_sync_auto_disabled_product']		= 'Disabled Product';
$_['entry_azonwebstore_sync_auto_disabled_product_eg']	= '<span><font color="red">Set Products Status = Disabled when the product have been removed from Amazon or product Out Of Range between Minimum and Maximum Price</font></span>';
$_['entry_azonwebstore_sync_update_product']				= 'Update Product Information';
$_['entry_azonwebstore_sync_update_product_title']		= 'Update Product Title';
$_['entry_azonwebstore_sync_update_product_desc']			= 'Update Product Description';
$_['entry_azonwebstore_sync_update_product_model']		= 'Update Product Model';
$_['entry_azonwebstore_sync_update_product_sku']			= 'Update Product SKU';
$_['entry_azonwebstore_sync_update_product_upc']			= 'Update Product UPC';
$_['entry_azonwebstore_sync_update_product_price']		= 'Update Product Price';
$_['entry_azonwebstore_sync_update_product_special']		= 'Update Product Special Price';
$_['entry_azonwebstore_sync_update_product_image']		= 'Update Product Image';
$_['entry_azonwebstore_sync_update_product_to_category']	= 'Update Product To Category';
$_['entry_azonwebstore_sync_update_product_related']		= 'Update Product Related';
$_['entry_azonwebstore_sync_update_product_specification']	= 'Update Product Specification';
$_['entry_azonwebstore_sync_update_product_option']		= 'Update Product Option like Size, Color';
$_['entry_azonwebstore_sync_show_amazon_review']			= 'Show Amazon Customer Reviews';
$_['entry_azonwebstore_sync_show_extra_product_info']		= 'Show Product More Info';
$_['entry_azonwebstore_sync_show_search_by_amazon']		= 'Show Search By Amazon';
$_['entry_azonwebstore_sync_default_search_by_amazon']	= 'Default Search By';
$_['entry_azonwebstore_sync_show_disclaimer']				= 'Show Product Disclaimer';
$_['entry_azonwebstore_sync_information_title']			= 'Information Title';
$_['entry_azonwebstore_sync_checkout_clear']				= 'Empty Cart After Checkout By Amazon';
$_['entry_azonwebstore_sync_enabled_api'] 				= 'Is Enabled API';
$_['entry_azonwebstore_sync_api_key']						= 'My API Key';
$_['entry_azonwebstore_sync_generate_api_key']			= 'Generate New API';
$_['entry_azonwebstore_sync_api_key_access']				= '<br />Enter your API Key for External Access';
$_['entry_azonwebstore_sync_csv_delimiter']				= 'CSV Header Delimiter By';
$_['entry_azonwebstore_sync_csv_remove']					= 'Removed CSV File After Processing';
$_['entry_azonwebstore_sync_product_redirect']			= 'Redirect To Amazon';
$_['help_azonwebstore_sync_product_redirect']    			= '(Autocomplete)';
$_['entry_azonwebstore_sync_product_redirect_eg']			= '<span><font color="red">Redirect the product to Amazon without Add To Cart Button.</font></span>';

$_['entry_azonwebstore_sync_seo_title']					= 'Product Title Length';
$_['entry_azonwebstore_sync_seo_image']					= 'Product Image Length';

$_['help_azonwebstore_sync_seo_title']					= '<span class="help">Suggested to be 150 character long.</font></span>';
$_['help_azonwebstore_sync_seo_image']					= '<span class="help">Suggested to be 200 character long.</font></span>';
$_['help_azonwebstore_sync_google_url'] 					= '<span class="help">&nbsp;&nbsp;&nbsp;<a href="https://support.google.com/merchants/answer/188494?hl=en" target="new_">https://support.google.com/merchants/answer/188494?hl=en</a></span>'; 

// Error
$_['error_permission'] 										= 'Warning: You do not have permission to modify module AzonWebStore Amazon Affiliate Plugin!';
$_['error_azonwebstore_sync_data_sync_url'] 				= 'Data Sync URL Required';
$_['error_azonwebstore_sync_locale'] 						= 'Amazon Locale/Region Required';
$_['error_azonwebstore_sync_public_key'] 					= 'AWS Access Key ID Required';
$_['error_azonwebstore_sync_private_key'] 				= 'AWS Secret Access Key Required';
$_['error_azonwebstore_sync_associate_id'] 				= 'Associate ID/Affiliate ID Required';
$_['error_azonwebstore_sync_item_page'] 					= 'Item Page Range from 1 - 10 only';
$_['error_azonwebstore_sync_minimum_price'] 				= 'Minimum Price cannot less than 0';
$_['error_azonwebstore_sync_maximum_price'] 				= 'Maximum Price cannot greater than 1,000,000';
$_['error_azonwebstore_sync_is_number_only'] 				= 'Item Quantity must be number only. For example: 10';
$_['error_azonwebstore_sync_item_quantity'] 				= 'Minimum Item Quantity = 1';
$_['error_azonwebstore_sync_seo_title'] 				= 'Product Title Length must be number only. For example: 150'; 
$_['error_azonwebstore_sync_seo_image'] 				= 'Product Image Length must be number only. For example: 2000';
?>