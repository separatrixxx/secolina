<?php
// English
// Heading
$_['heading_title']		  = '<img src="view/seo_package/img/icon.png" style="vertical-align:top;padding-right:4px"/><b style="color:#555">Complete</b> <b style="color:#11b209">SEO Package</b>';
$_['module_title']		  = 'Complete SEO <span>Package</span>';
  
$_['text_store_select'] = 'Store';

// Dashboard
$_['tab_seo_dashboard'] = 'Dashboard';
$_['text_seo_score'] = 'SEO Power';
$_['text_dashboard_config'] = 'SEO Overview';

// Tab multistore
$_['tab_seo_multistore'] = 'Multistore';
$_['info_multistore_dashboard']	= 'Here you can define specific parameters each store.<br/><br/>If Multistore SEO component is enabled you can also set specific urls for each store products/categories/informations and the mass update tab will be available here.<br/><br/>Enabling Multistore component will insert new tables in your database to handle the multistore urls and seo data (titles, metas, etc.).';

// Tab seo editor
$_['tab_seo_editor']      					= 'SEO Editor';
$_['tab_seo_editor_product']			= 'Product';
$_['tab_seo_editor_category']			= 'Category';
$_['tab_seo_editor_information']		= 'Information';
$_['tab_seo_editor_manufacturer']	= 'Manufacturer';
$_['tab_seo_editor_image']	= 'Image';
$_['tab_seo_editor_absolute']			= 'Absolute Url';
$_['tab_seo_editor_common']			= 'Common Page Url';
$_['tab_seo_editor_special']			= 'Param Url';
$_['tab_seo_editor_redirect']			= 'Url Redirection';
$_['tab_seo_editor_autolink']			= 'Auto-links';
$_['tab_seo_editor_dynamic_redirect']			= 'Dynamic Redirection';
$_['tab_seo_editor_404']			= '404 Manager';
$_['text_multistore']			= 'Multistore SEO';
$_['info_multistore']			= 'Give different SEO information (keyword, metas, etc) on products and categories for each store';
$_['text_editor_show_columns']	= 'Select visible columns: ';
$_['text_editor_count']					= 'Count';
$_['text_editor_query']					= 'Query';
$_['text_editor_query_redirect'] = 'Query';
$_['text_editor_query_absolute']		= 'Full Query (value after route=)';
$_['text_editor_query_common']		= 'Query (value after route=)';
$_['text_editor_query_special']		= 'Query (ex: custom_id=1)';
$_['text_editor_query_autolink']  = 'Keyword (ex: Apple)';
$_['text_editor_image']					= 'Image';
$_['text_editor_name']					= 'Name';
$_['text_editor_title']						= 'Title';
$_['text_editor_meta_title']				= 'Meta title';
$_['text_editor_meta_keyword']		= 'Meta keyword';
$_['text_editor_meta_description']	= 'Meta description';
$_['text_editor_url']						= 'SEO url';
$_['text_editor_url_absolute']	= 'Full seo url';
$_['text_editor_url_redirect']	= 'Redirect to';
$_['text_editor_url_autolink']	= 'Link url';
$_['text_editor_tag']						= 'Tags';
$_['text_editor_h1']						= 'Seo H1';
$_['text_editor_item_name']	= 'Product name';
$_['text_editor_image_name']	= 'Name';
$_['text_editor_image_alt']	= 'Alt';
$_['text_editor_image_title']	= 'Title';
$_['text_editor_related']			= 'Related';
$_['text_seo_new_alias_title']			= 'Insert new url alias';
$_['text_seo_new_autolink_info'] = 'Choose some keyword on which you would like to automatically add a link, for example if you have <b>Apple</b> appearing in your descriptions then if you want to redirect to https://mywebsite/apple you can do it with this section.<br/><br/>This is working for descriptions texts of products, categories and informations.';
$_['text_seo_new_absolute_alias_info'] = 'Rewrite an url in absolute way, for example index.php?route=<b>blog/blog&post_id=123</b><br/>In query field put <b>blog/blog&post_id=123</b> (insert only the value after index.php?route=)<br/>In SEO url field put the url you want: <b>blog/this-is-a-blog-post</b>';
$_['text_seo_new_alias_info']			= 'Rewrite an url that use the route parameter, for example index.php?route=<b>account/account</b><br/>In query field put <b>account/account</b> (it is not necessary to insert route=)<br/>In SEO url field put the url you want: <b>my-account</b>';
$_['text_seo_new_spec_alias_info']	= 'Rewrite urls that belongs to any custom module even if it is not made to handle friendly urls.<br/>For example index.php?<b>blog_news_id=123</b><br/>In query field put <b>blog_news_id=123</b><br/>In SEO url field put the url you want: <b>a-great-url-for-my-great-news</b>';
$_['text_seo_new_redirect']	= 'This generates a 301 redirection to indicate to search engines that the current url has been moved permanently to a new one. Use this feature to fix crawling errors from google webmaster.<br/><br/>In query type the full url <b>http://example.com/broken-url</b><br/>In redirect field put new url <b>http://example.com/fixed-url</b><br/><br/>Or without the domain name (don\'t forget the initial /)<br/>In query: <b>/broken-url</b><br/>In redirect field: <b>/fixed-url</b><br/><br/>Dynamic redirection<br/>If you want to make it work even with further url updates fill the redirect field that way:<br/><b>product/product&product_id=42</b> (where 42 is your actual product id)';
$_['text_info_limits_tab'] = 'Meta fields limits';
$_['text_info_limits_title'] = 'Meta title and description limits';
$_['text_info_404_options'] = '<h4>Log</h4>
<p>When a 404 page is reached on your website this option will log the reached url into SEO Editor > 404 Manager, so you can know which urls are wrong on your website and eventually redirect them to another one.</p>
<h4>Redirect to search</h4>
<p>If the current url is for example like this <code>http://yourwebsite/category/subcategory/my-product</code> and is not found then the module will try to redirect to search page with "my product" inside the search field. The page will also be logged in 404 manager.</p>
<h4>Filter 404 urls</h4>
<p>You may not want all 404 urls to be logged, in this case just use this section to set some text to filter, if the text is found in the url then it won\'t be logged into 404 manager, use | as separator in order to use various snippets.</p>';
$_['text_info_robots'] = '<h4>Meta Robots</h4>
<p>The robots meta tag lets you utilize a granular, page-specific approach to controlling how an individual page should be indexed and served to users in search results.<br/>The setting defined here will be the default one for all pages of your store, then you can edit a specific product to change the robots value (in data tab) for this product only.<br/>The meta robots parameter will be set in your page as meta tag in head section: &lt;meta name="robots" /&gt;</p>
<table class="table table-bordered">
  <tbody><tr><th>Directive</th><th>Meaning</th></tr>
  <tr><td><code><span>all</span></code></td>
    <td>There are no restrictions for indexing or serving.<br/>Note: this
      directive is the default value and has no effect if explicitly
      listed, so when you choose this value the meta robots tag won\'t be displayed</td></tr>
  <tr><td><code><span>noindex,&nbsp;follow</span></code></td>
    <td>Do not show this page in search results, but follow the links</td></tr>
  <tr><td><code><span>index,&nbsp;nofollow</span></code></td>
    <td>Index but do not follow the links on this page</td></tr>
  <tr><td><code><span>none</span></code></td>
    <td>Do not index, do not follow links, equivalent to <code><span>noindex, nofollow</span></code></td></tr>
  <tr><td><code><span>noimageindex</span></code></td>
    <td>Do not index images on this page</td></tr>
</tbody></table>
<h4>Automatic settings</h4>
<p>Once enabled you will be able to define the default value for meta robots, and the module will automatically apply the best parameter for some specific pages, please see the following list to know which parameters are automatically set on your website:</p>
<table class="table table-bordered">
<tr><th style="width:220px">Type</th><th>Meta robots value</th></tr>
<tr><td>Pagination pages</td><td><code>noindex, follow</code></td></tr>
<tr><td>Page with sort or limit parameter</td><td><code>noindex, follow</code></td></tr>
<tr><td>Search pages</td><td><code>none</code> (noindex, nofollow)</td></tr>
</table>
<h4>Recommended settings</h4>
<p>Here is recommendations to set this section for most common use:</p>
<table class="table table-bordered">
<tr><th style="width:220px">Type</th><th>Meta robots value</th></tr>
<tr><td>Product</td><td><code>all</code></td></tr>
<tr><td>Category</td><td><code>all</code></td></tr>
<tr><td>Information</td><td><code>all</code></td></tr>
<tr><td>Account</td><td><code>none</code></td></tr>
<tr><td>Cart and Checkout</td><td><code>none</code></td></tr>
</table>
';
$_['text_info_limits'] = '<h4>Meta title and description limits</h4>
<p>Meta title and description are very important since they are what the user will see when making a request on search engines, title as the main link and description the little text below.</p>
<p><img src="view/seo_package/img/help/meta_title_desc.png" alt="" class="img-thumbnail"/></p>
<p>Google is truncating your title after 67 characters but will index a few more, to get this easy to visualise the title field will become orange in case of bypassing 67 chars and red in case of bypassing 85 chars.<br/>The limit for description are ~300 chars for truncating and a bit more for indexing.</p>
<p><span style="color:#fc7402">Orange color</span> means your text will surely be truncated but will be fully indexed anyway.<br /><span style="color:#f23333">Red color</span> means some words at the end of your text won\'t be indexed.</p>
<p><b>Important:</b> default database field of opencart for meta description is limited to 255 chars, so if you want to have meta descriptions for 300 chars you should change the actual limit. To do so go into PHPMyAdmin > table oc_product_description > edit meta_description field and set 350 as the limit instead of 255.</p>';

// Tab seo configuration
$_['tab_seo_options']      	= 'SEO Configuration';
$_['text_seo_package_status']	= 'SEO Package status:';
$_['text_seo_components']	= 'Components:';
$_['text_seo_tab_general_1']	= 'Components';
$_['text_seo_tab_general_2']	= 'Language tag';
$_['text_seo_tab_general_3']	= 'Hreflang';
$_['text_seo_tab_general_4']	= 'Keyword options';
$_['text_seo_tab_general_5']	= 'Auto update';
$_['text_seo_tab_general_6']	= 'Friendly URLs';
$_['text_seo_tab_general_7']	= 'Cache';
$_['text_seo_tab_general_8']	= 'Canonical links';
$_['text_seo_tab_general_9']	= '';
$_['text_seo_tab_general_10']	= 'Reviews';
$_['text_seo_tab_general_11']	= 'Request headers';
$_['text_seo_tab_general_12']	= 'Sitemap';
$_['text_seo_tab_general_13']	= 'Meta robots';
$_['text_seo_tab_general_14']	= 'Redirections';
$_['text_seo_tab_general_16']	= 'Modules SEO';
$_['text_seo_tab_general_17']	= '404 Manager';
$_['text_seo_tab_general_18']	= 'SEO Headings';
$_['text_info_general']		= 'These settings impact the global functioning of SEOs, they take effect immediately and can be changed at any time.';
$_['text_info_general_3']		= 'Hreflang tag allow search engines to know the url of current page for other languages.<br/>Once activated it will be included in all pages of your website, and also into the seo package sitemap (feed > seo package sitemap).<br/> More information : <a href="https://support.google.com/webmasters/answer/189077?hl=en" target="new">here</a>';
$_['text_info_general_6']		= 'Rewrite pagination links SEO friendly, for example website.com/category?page=3 will become website.com/category/page-3';
$_['text_info_general_7']		= 'The cache feature will speed up your website by caching all url links instead of calculating them each time.<br/>Warning: this feature is experimental and may not work on all configurations, if you have another cache module or cache integrated with your theme disable this option.';
$_['text_info_general_8']		= 'Canonical links are informing search engines that if it find a same page elsewhere on the website it have to only consider one link, this is important in order to avoid duplicate content penalties';
$_['text_info_general_10']		= 'In default opencart reviews are loaded dynamically by ajax, that make search engines to not see the content of reviews which would be valuable content for your website, enable this option to be able to insert a block containing the user reviews in HTML in order to make search engines to be able to see them.<br /><br />You have to insert manually this code in your /catalog/view/theme/[your_theme]/template/product/product[.tpl|.twig] template, for tpl: <b>&lt;?php echo $seo_reviews; ?&gt;</b> for twig: {{ seo_reviews }}<br /><br /> Try to find where is the actual review tab to put the code inside.<br /><br />Then you can style it as you want, container class is <b>.seo_reviews</b>, item class is <b>.seo_review</b>';
$_['text_info_general_12']		= 'The sitemap have to be configured into feeds section, please click on the button below to configure it.';
$_['text_seopackage_sitemap']		= 'SEO Package Sitemap';
$_['text_seo_pagination_fix'] = 'Prev/next fix:<span class="help">Fix opencart 2.2+ issue with prev/next in subcategories</span>';
$_['text_seo_pagination_canonical'] = 'Canonical with pagination:<span class="help">Set canonical link of pagination pages to include the page number (not recommended)</span>';
$_['text_seo_canonical']		= 'Canonical:<span class="help">Enable canonical for all pages</span>';
$_['text_seo_pagination_name']		= 'Page name:<span class="help">Set name of page as it will appear for the page number in breadcrumbs</span>';
$_['text_seo_absolute']		= 'Absolute category path:';
$_['text_seo_absolute_help']		= 'Allow to use same keyword for sub-categories and something else (ex: <br/>/laptop/apple<br/>/desktop/apple<br/>/apple (manufacturer))<br/>If you give keyword for manufacturer, it cannot be used for top category (/apple and /apple), only subcategories';
$_['text_seo_reviews']		= 'SEO reviews:<span class="help">Insert reviews in HTML content</span>';
$_['text_safe_url_mode']		= 'Keyword sanitize:<span class="help">Choose how the keyword is sanitized by default, you can add new characters to remove or replace with the options below</span>';
$_['text_safe_url_min']		= 'Minimal - various special characters are allowed (parenthesis, dot, etc)';
$_['text_safe_url_ext']		= 'Extended - also removes most common special characters';
$_['text_safe_url_max']		= 'Maximum - remove any special characters, only letters allowed';
$_['text_seo_extension']		= 'Extension:<span class="help">Add the extension of your choice at the end of a product keyword (ex: .html)</span>';
$_['text_seo_extension_mode'] = 'Apply extension to:';
$_['text_ext_mode_all'] = 'All urls';
$_['text_ext_mode_nocat'] = 'All urls except category urls';
$_['text_seo_flag_tag']				= 'Tag after domain';
$_['text_seo_flag_store']				= 'Tag as subdomain';
$_['text_disable_other_store_links'] = 'Disable other links:<span class="help">Disable all links that does not belong to current store</span>';
$_['text_seo_flag']				= 'Language tag mode:';
$_['text_seo_flag_detect'] = 'Language detection:<span class="help">What to do when no language tag is present in the url?</span>';
$_['text_seo_flag_detect_auto'] = 'Auto-detect based on browser language';
$_['text_seo_flag_detect_force'] = 'Force default language';
$_['text_seo_flag_short']				= 'Short tag:';
$_['text_seo_flag_upper']	= 'Tag in uppercase:';
$_['text_seo_flag_default']	= 'No tag for default:';
$_['text_seo_flag_custom']	= 'Custom tag:<span class="help">Use this if you want to display different tag, can be useful in case of same initial language codes like zh-cn and zh-hk, let empty if you want to use default configuration</span>';
$_['text_seo_urlcache']		= 'URL Cache:<span class="help">Speed up page loading by using url caching</span>';
$_['text_seo_redirect_dynamic']		= 'Redirect dynamic links:<span class="help">Dynamic links (route=product/product&product_id=32) will be automatically redirected to their friendly url if it exists. The redirection is 301 so search engine will stop to index it and take only friendly url as reference.</span>';
$_['text_seo_redirect_canonical']		= 'Redirect to canonical:<span class="help">This is for friendly urls, it checks if the current link is the canonical link, if not it will be redirected to the canonical. This avoid to have multiple urls active for same item. The redirection is 301.<br/><br/><b>Important:</b> do not use redirect with category links when using a module like mega filter, because it will make the filters to not work.</span>';
$_['text_seo_redirect_canonical_1']		= 'Redirect all links except category links';
$_['text_seo_redirect_canonical_2']		= 'Redirect all links including category links';
$_['text_seo_redirect_http']	      	= 'HTTP mode:<span class="help">Use this to force your website to use SSL or www, if an url is not correct a 301 redirection will be made.</span>';
$_['text_seo_redirect_ssl']	      	    = 'Force SSL value, don\'t change WWW';
$_['text_seo_redirect_www']	      	    = 'Force WWW value, don\'t change SSL';
$_['text_seo_redirect_sslwww']	      	= 'Force both SSL and WWW values';
$_['text_seo_redirect_http_1']	      	= 'No-SSL, no-WWW - http://example.com';
$_['text_seo_redirect_http_2']	      	= 'No-SSL, WWW - http://www.example.com';
$_['text_seo_redirect_http_3']	      	= 'SSL, no-WWW - https://example.com';
$_['text_seo_redirect_http_4']	      	= 'SSL, WWW - https://www.example.com';
$_['text_seo_redirect_http_5']	      	= 'SSL - https://(www.)example.com';
$_['text_seo_redirect_http_6']	      	= 'No-SSL - http://(www.)example.com';
$_['text_seo_redirect_http_7']	      	= 'WWW - http(s)://www.example.com';
$_['text_seo_redirect_http_8']	      	= 'No-WWW - http(s)://example.com';
$_['text_seo_special_group']		= 'Special price group:<span class="help">[price] tag can calculate the special price, define here which customer group you want to use for calculating it, if disabled then only default price will be displayed</span>';
$_['text_seo_format_tag']		= 'Tag formatting:<span class="help">Add commas between each words to product tags when generating in mass update or auto-update</span>';
$_['text_seo_banner']		= 'Banner links rewrite:<span class="help">Dynamically generate seo link on banners (used in banner, carousel, slideshow modules)</span>';
$_['text_seo_banner_help']	= 'In banners section, do not enter the seo link (/category/product_name) but enter instead the default opencart link : <b>index.php?route=product/product&path=10_21&product_id=54</b>.<br />You can also strip out the index.php, like this : <b>product/product&path=23&product_id=48</b>';
$_['text_seo_hreflang']			= 'Enable hreflang tag:';
$_['text_seo_hreflang_mode']			= 'Hreflang lang display:';
$_['text_seo_hreflang_mode_1']			= 'Language only';
$_['text_seo_hreflang_mode_2']			= 'Language + country';
$_['text_seo_substore']			= 'Enable multi-store rewriting:';
$_['text_seo_substore_config'] = 'Actual configuration:';
$_['text_no_language_defined'] = 'No language defined';
$_['text_info_transform']		= 'All these settings define the way that the keyword will be generated when saving an item or using the mass update.';
$_['text_seo_whitespace']		= 'Spaces:<span class="help">Replace space chars by...</span>';
$_['text_seo_lowercase']		= 'Lowercase:<span class="help">QWERTY => qwerty</span>';
$_['text_seo_remove']		= 'Remove sentence:<span class="help">Remove some sentence when generating the urls, it will remove the sentence anywhere in the string<br/>Must be separated by comma</span>';
$_['text_seo_replace']		= 'Replace:<span class="help">Replace sentences when generating the urls<br/>For example:<br/><b>&:and</b> means replace "&" by "and"<br/>If you want to just remove do not set any replacement<br/>Must be separated by |</span>';
$_['text_seo_duplicate']			= 'Duplicates:<span class="help">Allow to use same keyword for distinct language version of an item</span>';
$_['text_seo_ascii']				= 'ASCII mode:<span class="help">Replace accentuated chars by their ascii equivalent<br/>"éàôï" => "eaoi"<br/>Supported languages: All latin (French, Italian, Spanish, Portuguese, etc), Arabic, Bulgarian, Croatian, Czech, Georgian, German, Greek, Latvian, Lithunanian, Polish, Romanian, Russian, Serbian, Slovak, Slovenian, Turkish, Ukrainian</span>';
$_['text_seo_autofill']				= 'Auto fill';
$_['text_seo_autofill_on']		= 'on:';
$_['text_seo_autofill_desc']		= 'Auto fill:<span class="help">If left the field blank on insert or edit, a value will be created automatically based on the pattern in mass update tab.<br/><br/>This works for : <br/>- products<br/>- categories<br/>- informations</span>';
$_['text_seo_autourl']			= 'Auto URL:<span class="help">If left blank on insert or edit, seo url keyword will be generated automatically using the parameter set in "Mass update" tab<br/>This works for products, categories and informations</span>';
$_['text_seo_autotitle']			= 'Auto title and desc for other langs:<span class="help">If left blank on insert or edit, titles and descriptions of other languages will copy the default language title and description<br/>This works for products, categories and informations</span>';
$_['text_headers_lastmod'] = 'Last-Modified:<span class="help">Add last modified date in headers</span>';
$_['text_all']						= 'All';
$_['text_insert']						= 'Insert';
$_['text_edit']						= 'Edit';
$_['text_fix_search']   = 'Fix search url:';
$_['text_fix_search_help']   = '<span class="help">Search url cannot be friendly for the top search bar because the url is hardcoded in javascript, enable this option if you want to have the search url rewritten. If it is not working with your theme please contact us.</span>';
$_['text_fix_cart']   = 'Fix cart remove issue:';
$_['text_fix_cart_help']   = '<span class="help">When there is friendly url for checkout/cart the remove of a product is not updating the current screen, enable this to fix this issue.</span>';
$_['tab_friendly_pagination']   = 'Pagination';
$_['tab_friendly_sorting']   = 'Sorting';
$_['tab_friendly_tag']   = 'Tags';
$_['tab_friendly_search']   = 'Search';
$_['text_seo_search']   = 'Enable friendly search<span class="help">Make search urls like /search/something</span>';
$_['text_seo_search_keyword']		= 'Search keyword:<span class="help">Choose keyword for search</span>';
$_['text_seo_pagination']		= 'Friendly url for pagination:<span class="help">Warning: this is not compatible with ajax pagination included some themes, if it doesn\'t work you will have to disable seo pagination or ajax pagination of the theme</span>';
$_['text_seo_sort']		= 'Enable friendly sorting:<span class="help">?sort=p.name&order=asc will be transformed to /sort-name-asc</span>';
$_['text_seo_tag']		= 'Enable friendly tag:';
$_['text_seo_pagination_keyword']		= 'Pagination keyword:<span class="help">?page=2 will be rewritten to /page-2</span>';
$_['text_seo_sorting_keyword']		= 'Sort keyword:<span class="help">Choose keyword for sort</span>';
$_['text_seo_order_keyword']		= 'Order keywords:<span class="help">Choose the keywords for asc and desc, must be separated by |</span>';
$_['text_seo_sortname_keyword']		= 'Sort type keywords:<span class="help">Choose the keywords for sort types (name, price, rating, mode), must be separated by |, must be in correct order</span>';
$_['text_seo_limit_keyword']		= 'Limit keyword:<span class="help">?limit=25 will be transformed to /limit-25</span>';
$_['text_seo_tag_keyword']		= 'Tag keyword:<span class="help">For tag urls (route=product/search&tag=something) define the keyword to use for nice url, for example if you set "tag" the result url will be /tag/something</span>';
$_['entry_404_log']		= 'Log 404 pages:<span class="help">When enabled the 404 pages will be logged and can be viewed in SEO Editor > 404 Manager</span>';
$_['entry_404_redir']		= 'Auto-redirect to search:<span class="help">Redirect 404 to search page containing last keyword</span>';
$_['entry_404_filter']		= 'Filter logging:<span class="help">Set some patterns on which a 404 page will not be logged, use | as separator</span>';
$_['entry_404_filter_ext']		= 'Filter extension:<span class="help">Set some file extension on which a 404 page will not be logged, use | as separator</span>';
$_['entry_shortcut']		= 'Module shortcut:<span class="help">Where do you want to display the module shortcut?</span>';
$_['text_shortcut_ext']		= 'Extensions menu';
$_['text_shortcut_top']		= 'Top level menu';
$_['text_shortcut_no']		= 'No shortcut';
$_['entry_url_backup']		= 'URL Auto Backup';
$_['info_url_backup']		= 'Don\'t worry anymore of changing any url on your website,<br/>when you change something this option will automatically save the old url and redirect to the new one';
$_['text_heading_position']		= 'Position';
$_['text_heading_position_i']		= 'Where to display the heading titles?';
$_['text_heading_css']		= 'Style';
$_['text_heading_css_i']		= 'Optionnal, apply some css to the title';
$_['text_headings_manual']		= 'Manual - see help section below';
$_['text_headings_topdesc']	= 'Top of description';
$_['text_headings_botdesc']	= 'Bottom of description';

// Tab store seo
$_['tab_seo_store']      			= 'Store SEO';
$_['text_info_store']				= '<h4>Store SEO</h4>
<p>In this section you can customize the meta title, h1, meta keywords and description on home page for each store and each language!</p><p>Anything entered here will bypass the values entered in opencart settings.</p>
<h4>Meta Title prefix and suffix</h4>
<p>Use this parameter to add some text before or after all your website meta titles, they can be defined for each store and each language.</p>
<p>For example if you want to have your title like <b>"Product title | My store"</b> just put <b>" | My store"</b> in suffix.</p>';
$_['text_info_seo_titles_tab']				= 'SEO titles (H1, H2, H3)';
$_['text_info_seo_titles']				= '<h4>SEO titles (H1, H2, H3)</h4>
<p>If you prefer other position for SEO titles than top or bottom of description then choose "Manual" position, if you do so you will need to manually insert a code snippet in your templates, in any case it must be inserted manually for home page.<br/><br/>Files to modify (.tpl or .twig):<br/><code style="padding:0">/catalog/view/theme/[theme]/template/common/home<br/>/catalog/view/theme/[theme]/template/product/product<br/>/catalog/view/theme/[theme]/template/product/category<br/>/catalog/view/theme/[theme]/template/information/information<br/>/catalog/view/theme/[theme]/template/product/manufacturer_info</code><br/><br/>Insert these codes for .tpl (please note $heading_title is automatically containing $seo_h1, so it is generally not necessary to put seo h1, just h2 and h3): <br/><code style="padding:0">&lt;h1&gt;&lt;?php echo $seo_h1; ?&gt;&lt;/h1&gt;<br/>&lt;h2&gt;&lt;?php echo $seo_h2; ?&gt;&lt;/h2&gt;<br/>&lt;h3&gt;&lt;?php echo $seo_h3; ?&gt;&lt;/h3&gt;</code><br/><br/>Or these codes for .twig  (please note {{ heading_title }} is automatically containing {{ seo_h1 }}, so it is generally not necessary to put seo h1, just h2 and h3): <br/><code style="padding:0">&lt;h1&gt;{{ seo_h1 }}&lt;/h1&gt;<br/>&lt;h2&gt;{{ seo_h2 }}&lt;/h2&gt;<br/>&lt;h3&gt;{{ seo_h3 }}&lt;/h3&gt;</code><br/></p>
<p>Consider that elements with display:none may not be considered by search engines, so you may want to insert only some of these depending your template (h1 is the most important).</p>';
$_['entry_robots']      = 'Enable meta robots';
$_['entry_robots_product'] = 'Products';
$_['entry_robots_product_i'] = 'Default robots value for products, can be altered per-product in product edition &gt; Data';
$_['entry_robots_category'] = 'Category';
$_['entry_robots_category_i'] = 'Default robots value for categories';
$_['entry_robots_information'] = 'Information';
$_['entry_robots_information_i'] = 'Default robots value for informations, can be altered per-information in information edition &gt; Data';
$_['entry_robots_account'] = 'Account';
$_['entry_robots_account_i'] = 'Default robots value for customer account (login, register, ...)';
$_['entry_robots_checkout'] = 'Cart and Checkout';
$_['entry_robots_checkout_i'] = 'Default robots value for checkout pages (cart, checkout, ...)';
$_['entry_robots_manufacturer'] = 'Manufacturers';
$_['entry_robots_manufacturer_i'] = 'Default robots value for manufacturers';
$_['store_seo_global'] = 'Global settings';
$_['store_seo_home'] = 'Homepage only';
$_['entry_robots_default']      = 'Default value';
$_['entry_store_seo_title']      = 'Meta Title:';
$_['entry_store_seo_title_extra'] = 'Meta Title prefix and suffix:';
$_['entry_store_title']      		= 'Title H1:';
$_['entry_store_h2']      	  	= 'Title H2:';
$_['entry_store_h3']      	  	= 'Title H3:';
$_['entry_store_desc']      		= 'Meta Description:';
$_['entry_store_keywords']	= 'Meta Keywords:';
$_['info_store_heading']	= 'See information below to include in your theme';

// Tab store analytics
$_['tab_seo_analytics'] = 'Analytics';
$_['tab_analytics'] = 'Analytics';
$_['entry_gg_components'] = 'Google Analytics components:';
$_['text_gg_analytics'] = 'Google Analytics';
$_['text_gg_enhanced'] = 'Track Ecommerce (advanced tracking of products view/add to cart/purchase)';
$_['text_gg_adwords'] = 'Google Adwords';
$_['entry_analytics_code'] = 'Google Analytics ID:<span class="help">It is ID in Google Analytics 4 format: G-123456789, or old format UA-123456789, use G- format to benefit of latest GA4 panel and improved analytics</span>';
$_['entry_adwords_code'] = 'Google Adwords ID:<span class="help">It is ID in this format: AW-12345678</span>';
$_['text_info_analytics4_tab'] = 'Google Analytics 4';
$_['text_info_analytics_tab'] = 'Google Analytics 3';
$_['text_info_analytics4'] = '<h4>Set up Google Analytics 4 (recommended)</h4>
<p>You can have detailled information of your website SEO using latest Google Analytics 4 tracking, for that connect to <a href="https://analytics.google.com" target="_blank">https://analytics.google.com</a> and register your website, make sure to create a Google Analytics 4 property.</p><p>Check this help section to see how to create your analytics account and GA 4 property: <a href="https://support.google.com/analytics/answer/9304153" target="_blank">Set up Analytics for a website and/or app (GA4)</a></p>
<h4 id="account">Create an Analytics account</h4>
<p>Your first step is to set up an Analytics account, unless you already have one. Skip to <a href="#property">creating a property</a> unless you want to create a separate account for this website and/or app. For example, you might want to create another account if this website and/or app belong(s) to a separate business.</p>
<ol>
  <li>In <a class="glossary-term" data-answer="6132368" href="https://support.google.com/analytics/answer/6132368" target="_blank" rel="noopener" data-stats-ve="40">Admin</a>, in&nbsp;the <em>Account</em> column, click <strong>Create Account</strong>.</li>
  <li>Provide an account name. Configure the <a href="https://support.google.com/analytics/answer/1011397" target="_blank" rel="noopener">data-sharing settings</a> to control which data you share with Google.</li>
  <li>Click <strong>Next</strong> to add the first property to the account.</li>
</ol>
<h4 id="property">&nbsp;Create&nbsp;a Google Analytics 4 property</h4>
<p>You need <a href="https://support.google.com/analytics/answer/9305587" target="_blank" rel="noopener">Edit permission</a> to add properties to a Google Analytics account. If you created this account, you automatically have Edit permission.&nbsp;You can add up to 100 properties to an Analytics account. To raise this limit, reach out to your account manager.&nbsp;</p>
<p>To create a property:</p>
<ol>
  <li>Are you continuing from "Create an Analytics account", above? If so, skip to step 2.&nbsp; Otherwise,
    <ul>
      <li>In&nbsp;<a class="glossary-term" data-answer="6132368" href="https://support.google.com/analytics/answer/6132368" target="_blank" rel="noopener" data-stats-ve="40">Admin</a>, look at the <em>Account</em> column to make sure that you\'ve selected the right account. Then, in the <em>Property</em> column, click <strong>Create Property</strong>.<br/><img src="//storage.googleapis.com/support-kms-prod/b8SYTWe17HviZx95qPL9HzIp2aVJKNlKM0Xk" alt="" width=""></li>
    </ul>
  </li>
  <li>Enter a name for the property and&nbsp;select the reporting time zone&nbsp;and&nbsp;currency. Time zone determines&nbsp;the day boundary for your reports regardless of where the data originates.
    <ul>
      <li>If you choose a time zone that honors Daylight Savings Time, Analytics automatically adjusts for time changes. Use Greenwich Mean Time if you don\'t want to adjust for Daylight Savings Time.</li>
      <li>Changing the time zone only affects data going forward. If you change the time zone for an existing property, you may see a flat spot or a spike in your data, caused by the time shift forwards or backwards, respectively. Report data may refer to the old time zone for a short period after you update your settings, until Analytics servers have processed the change.</li>
    </ul>
  </li>
  <li>Click <strong>Next.</strong>&nbsp;Select your industry category and&nbsp;business size.</li>
  <li>Click <strong>Create&nbsp;</strong>and accept the Analytics Terms of Service and the Data Processing Amendment.</li>
  <li>Copy your ID starting by G- in module option <strong>Google Analytics ID</strong></li>
</ol>
<p>It may take up to 30 minutes for data collection to start. You can then use the <a href="https://support.google.com/analytics/answer/9271392" target="_blank" rel="noopener">Realtime report</a> to verify that you\'re receiving data.</p>

';
$_['text_info_analytics'] = '<h4>Set up Google Analytics in old format</h4>
<p>You can have detailled information of your website SEO using Google Analytics and Enhanced eCommerce Tracking, for that connect to <a href="https://analytics.google.com" target="_blank">https://analytics.google.com</a> and register your website, make sure to create a Google Analytics 4 property.</p><p>Check this help section to see how to create your analytics account and GA 4 property: <a href="https://support.google.com/analytics/answer/9304153" target="_blank">Set up Analytics for a website and/or app (GA4)</a></p>
<p><img src="view/seo_package/img/help/analytics_1.png" alt="" class="img-thumbnail"/></p>
<p><img src="view/seo_package/img/help/analytics_2.png" alt="" class="img-thumbnail"/></p>
';
$_['text_info_analytics_verification'] = '<h4>Verify your website on Google Analytics</h4>
<p>You can have detailled information of your website SEO using google analytics, for that connect to <a href="https://www.google.com/webmasters/" target="_blank">https://www.google.com/webmasters/</a> and click on ADD A PROPERTY, then choose the HTML tag verification method like on the image below.</p>
<p><img src="view/seo_package/img/help/analytics_verif.png" alt="" class="img-thumbnail"/></p>
<p>Copy the code given by google here to activate the verification of your website. Now you should be able to verify on google page.</p>';

// Tab rich snippets
$_['tab_seo_snippets']			= 'Rich Snippets';
$_['text_seo_tab_snippet_1']		= 'Google Microdata (Rich Cards)';
$_['text_seo_tab_snippet_2']		= 'Facebook Open Graph';
$_['text_seo_tab_snippet_3']		= 'Twitter Card';
$_['text_seo_tab_snippet_3']		= 'Twitter Card';
$_['text_seo_tab_snippet_4']		= 'Google Publisher';
$_['text_seo_tab_snippet_5']		= 'Facebook Pixel';
$_['tab_faq']		                = 'FAQ';
$_['tab_microdata_1']		        = 'Product';
$_['tab_microdata_2']		        = 'Organization';
$_['tab_microdata_3']		        = 'Store';
$_['tab_microdata_4']		        = 'Website';
$_['tab_microdata_5']		        = 'Place';
$_['tab_microdata_6']		        = 'Breadcrumbs';
$_['tab_microdata_7']		        = 'Category';
$_['entry_snippet_order_status'] = 'Stock statuses:<span class="help">Select to which microdata stock status you want to bind each of your stock status, any other than "In stock" is displayed only when product reach zero quantity</span>';
$_['entry_snippet_pricerange']	= 'Price range:';
$_['entry_snippet_same_as']		  = 'Same as:';
$_['entry_enable_microdata']		= 'Enable Google Microdata:';
$_['entry_microdata_search']		= 'Search box';
$_['entry_microdata_logo']		  = 'Logo';
$_['entry_microdata_address']	  = 'Address';
$_['entry_snippet_contact']		  = 'Contacts';
$_['entry_microdata_gps']		    = 'GPS coordinates';
$_['entry_gps_lat']		          = 'Latitude';
$_['entry_gps_long']		        = 'Longitude';
$_['entry_address_street']      = 'Street';
$_['entry_address_city']        = 'Locality';
$_['entry_address_region']      = 'Region';
$_['entry_address_code']        = 'Postal code';
$_['entry_address_country']     = 'Country';
$_['entry_email']		            = 'Email';
$_['entry_phone']		            = 'Phone';
$_['entry_product_data']		    = 'Include product data:';
$_['entry_snippet_data']		    = 'Include data:';
$_['entry_model']		            = 'Model';
$_['entry_description']		      = 'Description (based on meta description)';
$_['entry_reviews']		          = 'Reviews';
$_['entry_cat_reviews']		      = 'Reviews';
$_['entry_cat_reviews_i']		    = 'Warning if you have a lot of products in a category this can slow down a bit the opening of the category because it calculate the average rating of all products in current category.<br>In case of lot of products it is recommended to disable this option or to have a cache module like our Rocket Boost module.';
$_['entry_sku']		              = 'SKU';
$_['entry_upc']		              = 'UPC';
$_['entry_mpn']		              = 'MPN';
$_['entry_ean']		              = 'EAN';
$_['entry_isbn']		            = 'ISBN';
$_['entry_rating']		          = 'Average rating';
$_['entry_manufacturer']		    = 'Manufacturer';
$_['entry_brand']		            = 'Manufacturer';
$_['entry_enable_opengraph']		= 'Enable Facebook Open Graph:';
$_['entry_opengraph_id']		    = 'Facebook App ID:';
$_['entry_enable_tcard']		    = 'Enable Twitter Card:';
$_['entry_twitter_nick']		    = 'Twitter nickname (optional):';
$_['entry_twitter_home_type']		= 'Home page type:';
$_['entry_twitter_summary']		  = 'Summary';
$_['entry_twitter_summary_large'] = 'Summary with large image';
$_['entry_enable_gpublisher']		    = 'Enable Google Publisher:';
$_['entry_gpublisher_url']		    = 'Google+ url:';


// Tab friendly urls
$_['tab_seo_friendly']				= 'Friendly URLs';
$_['text_seo_export_urls']		= 'Export URLs';
$_['text_seo_export_urls_tooltip'] = 'Export Friendly URLs and send them to the developer for integration in official package';
$_['text_seo_reset_urls']  		= 'Restore default URLs';
$_['text_seo_reset_urls_tooltip']= 'If the current language does not have predefined urls the module will load english version';
$_['text_info_friendly']			= 'Here you can manage the friendly urls, edit them as you want.<br/>You have also the possibility to add new url, it works for example for any custom module you installed, just fill the 1st field with the value in route (?route=mymodule/action) and the 2nd field with the keyword you want to appear in the url.';
$_['text_seo_friendly']			= 'Common Pages Urls';
$_['info_seo_friendly']			= 'Enable this component in order to rewrite urls for common pages urls and param urls';
$_['info_seo_absolute']			= 'Enable this component in order to use absolute urls';
$_['info_seo_autolink']			= 'Enable this component in order to use auto-links';
$_['info_seo_404']			    = 'Enable this component to activate the logging of 404 error pages';
$_['info_seo_redirect']			= 'Enable this component to activate 301 redirections';
$_['text_seo_cat_slash']			= 'Final slash on category';
$_['text_seo_cat_slash_help']			= 'Insert a final slash at the end of category urls';
$_['text_seo_redir_reviews'] = 'Redirect orhpan reviews:<span class="help">If a review page index.php?route=product/product/review is not accessed through ajax request then redirect 301 to the product page. This prevent these review snippet to be indexed.</span>';
$_['text_seo_remove_urls'] = 'Remove all entries';
$_['text_seo_remove_redirected'] = 'Remove redirected entries';
$_['text_seo_add_url']      = 'Add new entry';

// Tab full product path
$_['tab_seo_fpp']			= 'Path Manager';
// Text
$_['tab_fpp_product']   = 'Product';
$_['tab_fpp_category']   = 'Category';
$_['tab_fpp_manufacturer']   = 'Manufacturer';
$_['tab_fpp_search']   = 'Search/Tag';
$_['tab_fpp_common']   = 'Common';
$_['text_fpp_cat_canonical']   = 'Category canonical:';
$_['text_fpp_cat_mode_0']   = 'Direct link';
$_['text_fpp_cat_mode_1']   = 'Full path';
$_['text_fpp_cat_canonical_help']   = 'What kind of link you want to give to search engines ?<br/><b>Direct link</b>: /category (default)<br/><b>Full path</b>: /cat1/cat2/category<br/><br/>With direct link path mode the canonical is automatically set on directl link too';
$_['text_fpp_mode']   = 'Product path mode:';
$_['text_fpp_mode_0']   = 'Direct link';
$_['text_fpp_mode_1']   = 'Shortest path';
$_['text_fpp_mode_2']   = 'Largest path';
$_['text_fpp_mode_3']   = 'Manufacturer path';
$_['text_fpp_mode_4']   = 'Last category';
$_['text_fpp_slash']   = 'Final slash';
$_['text_fpp_slash_mode_0']   = 'No final slash';
$_['text_fpp_slash_mode_1']   = 'Final slash on categories';
$_['text_fpp_slash_mode_2']   = 'Final slash on all urls';
$_['text_fpp_slash_help']   = 'Insert a final slash on urls, this is matter of preference, there is no SEO impact.';
$_['placeholder_category']   = 'Categories';
$_['text_fpp_noprodbreadcrumb'] = 'Remove last breadcrumb:';
$_['text_fpp_noprodbreadcrumb_help'] = '<span class="help">Do not display the last breadcrumb link</span>';
$_['text_fpp_bc_mode'] = 'Breadcrumbs mode:';
$_['text_fpp_breadcrumbs_fix'] = 'Breadcrumbs generator:';
$_['text_fpp_breadcrumbs_0']   = 'Default';
$_['text_fpp_breadcrumbs_1']   = 'Generate if empty';
$_['text_fpp_breadcrumbs_2']   = 'Always generate';

$_['text_fpp_mode_help']   = '<span class="help"><b>Direct link:</b> direct link to product, no category included (ex: /product_name), this is default opencart behaviour<br/>
																		  <b>Shortest path:</b> shortest path by default, can be altered by banned categories (ex: /category/product_name)<br/>
																		  <b>Largest path:</b> largest path by default, can be altered by banned categories (ex: /category/sub-category/product_name)<br/>
																		  <b>Last category:</b> only the last category of the product will be displayed, if you have a product in /category/sub-category/product_name the link will be /sub-category/product_name<br/>
																		  <b>Manufacturer path:</b> manufacturer path instead of categories (ex: /manufacturer/product_name)</span>';
$_['text_fpp_breadcrumbs_help']   = '<span class="help"><b>Default:</b> default opencart behaviour: will display breadcrumbs coming from categories<br/>
																		  <b>Generate if empty:</b> generate breadcrumbs only when it is not already available, so category breadcrumb is preserved (recommended)<br/>
																		  <b>Always generate:</b> overwrite also the category breadcrumbs, so the only breadcrumbs you will get is the one generated by the module<br/></span>';
$_['text_fpp_bypasscat'] = 'Rewrite product path in categories:';
$_['text_fpp_bypasscat_help'] = '<span class="help">If disabled, the product link from categories remains the same in order to preserve normal behaviour and breadcrumbs.<br/>If enabled, the product link from categories is overwritten with path generated by the module.<br>In any case canonical link is updated with good value so google will only see the url generated by the module for a given product.</span>';
$_['text_fpp_directcat'] = 'Category path mode:';
$_['text_fpp_directcat_help'] = 'What kind of link you want to display on your website ?<br/><b>Direct link</b>: /category<br/><b>Full path</b>: /cat1/cat2/category (default)';
$_['text_fpp_homelink'] = 'Rewrite home link:';
$_['text_fpp_homelink_help'] = '<span class="help">Set homepage link to mystore.com instead of mystore.com/index.php?route=common/home</span>';
$_['text_fpp_depth']   		= 'Max levels:';
$_['text_fpp_depth_help']   = '<span class="help">Maximum category depth you want to display, for example if you have a product in /cat/subcat/subcat/product and set this option to 2 the link will become /cat/subcat/product<br/>This option works in largest and shortest path modes</span>';
$_['text_fpp_unlimited']   = 'Unlimited';
$_['text_fpp_brand_parent']   = 'Manufacturer parent:';
$_['text_fpp_brand_parent_help']   = '<span class="help">Include the manufacturers inside the manufacturer list url.<br/>For example if your manufacturer list is /brand, the manufacturer apple will appear this way /brand/apple instead of direct /apple</span>';
$_['text_fpp_remove_search']   = 'Remove search/tag parameters:';
$_['text_fpp_remove_search_help']   = '<span class="help">Remove the search or tag parameter (?search=something, ?tag=something) from product urls in search results (products urls only, not search page url itself)</span>';
$_['entry_category']		= 'Banned categories:<span class="help">Choose the categories that will never be displayed in case of multiple paths</span>';

// Tab mass update
$_['tab_seo_update']       = 'Mass Update';
$_['text_info_update']     = 'Be careful when using this function since it will overwrite all your keywords.<br/>You can use the simulate function to check the result before really update.<br/>Select the language flags to update only these languages.';
$_['text_seo_generator_report'] = 'Report';
$_['text_seo_generator_report_i'] = 'Check database to find if there is any issue';
$_['text_seo_generator_cleanup'] = 'Clean up';
$_['text_seo_generator_cleanup_i'] = 'Remove old urls in database, make a clean up if you have troubles with some urls';
$_['text_seo_generator_deduplicate'] = 'Remove duplicates';
$_['text_seo_generator_deduplicate_i'] = 'Check and remove any duplicates in url aliases';
$_['text_seo_mode_robots'] = 'Robots';
$_['text_seo_generator_robots'] = 'Generate robots.txt file';
$_['text_seo_generator_robots_i'] = 'If you use a cache extension the robots value set in each product will not work, in this case you will have to generate a robots.txt file to avoid this issue. This generator will automatically take all values for robots set in products and generate the corresponding robots.txt file';
$_['text_seo_mode_internal_links'] = 'Internal links';
$_['text_seo_generator_internal_links_i'] = 'Search for product names into your descriptions to automatically create a link to this product';
$_['text_seo_generator_internal_links'] = 'Generate internal links';
$_['text_cache']					= 'URL cache:<span class="help">Generate or delete url cache</span>';
$_['text_redirection']					= 'Dynamic backup urls:<span class="help">Save all actual urls for further redirection, then you can change the seo keyword, google will keep the track.</span>';
$_['text_cache_create_btn']= 'Generate cache';
$_['text_redirect_create_btn']= 'Generate redirection';
$_['text_cache_delete_btn']= 'Clear cache';
$_['text_cleanup_btn']		= 'Clean up';
$_['text_cleanup_duplicate_btn']		= 'Remove duplicate url alias';
$_['text_cleanup_done']		= 'Clean up done, %d entries deleted';
$_['text_seo_languages']   = 'Select languages';
$_['text_seo_simulate']    = 'Simulation:<span class="help">No changes are made while this button is on</span>';
$_['text_seo_empty_only']    = 'Update empty values only:<span class="help">Check off to overwrite all values</span>';
$_['text_seo_redirect']    = 'Redirection';
$_['text_seo_redirect_mode']    = 'Url redirection:<span class="help">Automatically insert a redirection for old urls</span>';
$_['text_image_name_lang'] = 'Image names can be set in only one language, please choose one and click on generate again';
$_['text_enable']   	 		 = 'Enable';
$_['text_deleted']   	 	 = 'Deleted';

// Tab cron
$_['tab_seo_cron'] 			= 'Cron';
$_['text_seo_cron_update'] = 'Update:';
$_['text_clear_logs'] = 'Clear logs';
$_['text_tab_cron_1'] = 'Configuration';
$_['text_tab_cron_2'] = 'Report';
$_['text_seo_cron_log'] = 'Cron log:';
$_['text_log_all'] = 'Full - log all updated items and report';
$_['text_log_report'] = 'Report - log only report with number of items and elapsed time';
$_['text_log_off'] = 'Disabled - do not log anything';
$_['text_cli_log_save'] = 'Save log file';
$_['text_cli_log_too_big'] = 'Your log file is too big (%s) to be displayed here - you can download it or clear it with buttons below';

// Tab about
$_['tab_seo_about']			 = 'About';

$_['text_nothing_changed']    				= 'Zero items';
$_['text_seo_no_language']    				= 'No language selected';
$_['text_seo_fullscreen']    						= 'Fullscreen';
$_['text_seo_show_old']    						= 'Display old value';
$_['text_seo_change_count']    				= 'entries changed';
$_['text_seo_old_value']    						= 'Old value';
$_['text_seo_new_value']    					= 'New value';
$_['text_seo_item']    					= 'Item';
$_['text_simulation']    					= 'Simulation mode';
$_['text_write']    					    = 'Write mode';
$_['text_empty_only']    					    = 'Empty values only';
$_['text_all_values']    					    = 'All values';
$_['text_seo_update_info']    					= '1. Enable or disable simulation mode<br/>2. Select if you want to update only empty items or all items<br/>3. Click on the Generate button of your choice<br/>4. Results will be displayed here';
$_['text_seo_simulation_mode']    			= '<span>SIMULATION MODE</span><br/>No changes will be made to database';
$_['text_seo_write_mode']		    			= '<span>WRITE MODE</span><br/>Modifications will be saved';
$_['text_seo_product']							= 'Product';
$_['text_seo_category']							= 'Category';
$_['text_seo_manufacturer']					= 'Manufacturer';
$_['text_seo_information']						= 'Information';
$_['text_seo_cache']								= 'Name';
$_['text_seo_cleanup']							= 'Entry (url)';
$_['text_seo_type_product']					= 'Products';
$_['text_seo_type_category']					= 'Categories';
$_['text_seo_type_manufacturer']			= 'Manufacturers';
$_['text_seo_type_information']				= 'Informations';
$_['text_seo_type_redirect']				= 'Backup URLs';
$_['text_seo_mode_product']					= 'Products';
$_['text_seo_mode_category']					= 'Categories';
$_['text_seo_mode_manufacturer']			= 'Manufacturers';
$_['text_seo_mode_information']				= 'Informations';
$_['text_seo_mode_url_alias']				= 'Url Alias';
$_['text_seo_mode_duplicate']				= 'Remove duplicate';
$_['text_seo_mode_redirection']					= 'Backup URLs';
$_['text_seo_type_redirection']					= 'Backup URL';
$_['text_seo_type_report']						= 'Report';
$_['text_seo_type_cache']						= 'Cache';
$_['text_seo_type_cleanup']					= 'Clean up';
$_['text_seo_generator_product']			= 'Products';
$special_tags = '<strong>Special tags</strong><br/><b>[current]</b> Current value<br/><b>[store]</b> Store name<br/><b>[lang]</b> Current language<br/><b>[lang_id]</b> Current language ID<br/><b>{aa|bb|cc}</b> Random values<br/><b>{en}..{/en}</b> Only for lang<br/><b>{upcase}..{/upcase}</b> Uppercase<br/><b>{lowcase}..{/lowcase}</b> Lowercase<br/><b>{ucfirst}..{/ucfirst}</b> Uppercase on first letter<br/><b>{limit:100}</b> Limit text to 100 chars';
$_['text_seo_generator_product_desc']	= '<strong>Main</strong><br/><b>[name]</b> Product name<br/><b>[model]</b> Model<br/><b>[category]</b> Category name<br/><b>[parent_cat]</b> Parent category<br/><b>[cat_X]</b> Category level X (set number)<br/><b>[desc]</b> Description extract<br/><b>[desc_sentence]</b> 1st sentence<br/><b>[price]</b> Price with tax<br/><b>[price_notax]</b> Price without tax<br/><br/><strong>Attributes and options</strong><br/><b>[attributes]</b> All attributes<br/><b>[attr_name]</b> Attribute (replace name)<br/><b>[opt_name]</b> Option (replace name)<br/><br/><strong>Product data</strong><br/><b>[upc]</b> <b>[sku]</b> <b>[ean]</b> <b>[jan]</b> <b>[isbn]</b> <b>[mpn]</b> <b>[location]</b> <b>[prod_id]</b> <b>[cat_id]</b><br/><br/><strong>Manufacturer data</strong><br/><b>[brand]</b> <b>[brand_title]</b> <b>[brand_desc]</b> <b>[brand_meta_desc]</b> <b>[brand_keywords]</b> <b>[brand_h1]</b> <b>[brand_h2]</b> <b>[brand_h3]</b><br/><br/>'.$special_tags;
$_['text_seo_generator_category']			= 'Categories';
$_['text_seo_generator_category_desc']	= '<strong>Main</strong><br/><b>[name]</b> Category name<br/><b>[desc]</b> Description extract<br/><b>[desc_sentence]</b> 1st sentence<br/><b>[parent]</b> Parent category name<br/><b>[grandparent]</b> Grandparent category name<br/><b>[child]</b> Child category name<br/><b>[lowest_price]</b> Lowest product price<br/><b>[highest_price]</b> Highest product price<br/><br/>'.$special_tags;
$_['text_seo_generator_information']		= 'Informations pages';
$_['text_seo_generator_information_desc']= '<strong>Main</strong><br/><b>[name]</b> Information title<br/><b>[desc]</b> Description extract<br/><b>[desc_sentence]</b> 1st sentence<br/><br/>'.$special_tags;
$_['text_seo_generator_manufacturer']	= 'Manufacturers';
$_['text_seo_generator_manufacturer_desc']= '<strong>Main</strong><br/><b>[name]</b> Manufacturer name<br/><br/>'.$special_tags;
$_['text_seo_generator_other']	= 'Extra functions';
$_['text_seo_generator_other_desc']	= '';
$_['text_seo_generator_drag_info']	= '<i class="fa fa-info-circle"></i> Tip: drag and drop the tag into replacement pattern';
$_['text_type'] = 'Type';
$_['text_info'] = 'Info';
$_['text_patterns']	= 'Replacement pattern';
$_['text_generate']	= 'Generate';
$_['text_available_tags']	= 'Available tags';
$_['text_seo_mode_url']					= 'SEO URLs';
$_['text_seo_generator_redirect']	= 'Generate Backup URLs';
$_['text_seo_generator_redirect_i']	= 'Save all actual urls as 301 redirect to a dynamic link, this will make for example to save "apple-iphone" to its corresponding product id, then if later you change this product url it will be automatically redirected to the new url "apple-iphone-new".<br/>Generate here only if you don\'t use the Auto URL Backup mode.';
$_['text_seo_mode_title']				= 'Meta Title';
$_['seo_title_prefix']				= 'Prefix';
$_['seo_title_suffix']				= 'Suffix';
$_['text_seo_mode_h1']				  = 'SEO H1';
$_['text_seo_mode_h2']				  = 'SEO H2';
$_['text_seo_mode_h3']				  = 'SEO H3';
$_['text_seo_mode_image_name']  = 'Image name';
$_['text_seo_mode_image_alt']  = 'Image alt';
$_['text_seo_mode_image_title']  = 'Image title';
$_['text_seo_mode_keyword'] 		= 'Meta Keywords';
$_['text_seo_mode_description']		= 'Meta Description';
$_['text_seo_mode_full_desc']		= 'Description';
$_['text_seo_mode_related']		= 'Related products';
$_['text_seo_mode_tag']				= 'Tags';
$_['text_seo_mode_create']			= 'Generate';
$_['text_seo_mode_delete']			= 'Delete';
$_['text_seo_generator_url']			= 'Generate URLs';
$_['text_seo_generator_title']			= 'Generate Meta Title';
$_['text_seo_generator_keywords'] = 'Generate Meta Keywords';
$_['text_seo_generator_desc']		= 'Generate Meta Description';
$_['text_seo_generator_full_desc']		= 'Generate Description';
$_['text_seo_generator_store_copy_i']		= 'Copy store data from default store';
$_['text_seo_generator_store_copy']		= 'Copy store SEO data';
$_['text_seo_mode_store_copy']		= 'Copy store SEO data';
$_['text_seo_generator_tag']			= 'Generate Tags';
$_['text_seo_generator_h1']			= 'Generate SEO H1';
$_['text_seo_generator_h2']			= 'Generate SEO H2';
$_['text_seo_generator_h3']			= 'Generate SEO H3';
$_['text_seo_generator_imgalt']	= 'Generate Image Alt';
$_['text_seo_generator_imgtitle']	= 'Generate Image Title';
$_['text_seo_generator_imgname'] = 'Generate Image Name';
$_['text_seo_generator_related'] = 'Generate Related Products';
$_['text_seo_generator_related_no']	= 'Qty:';
$_['text_seo_generator_related_relevance'] = 'Relevance (0-10):';
$_['text_seo_generator_related_samecat'] = 'Same category';
$_['text_query']		= 'Query';
$_['text_keyword']		= 'Keyword';
$_['text_status']		= 'Status';
$_['text_empty']		= 'Empty';
$_['text_duplicate']		= 'Duplicate';
$_['text_report']		= 'Report';
$_['text_url_alias_report_btn']		= 'Url alias report';

$_['text_seo_result']      = 'Result:';

$_['text_module']          = 'Modules';
$_['text_success']         = 'Success: You have modified module SEO module!';

$_['text_man_ext']				 = 'Manufacturer extended';

$_['text_seo_confirm']		 = 'Are you sure ?';
$_['text_description']		 = 'Description';


// Full product path

// Help sections

$_['tab_info_request'] = 'Request headers';
$_['title_common_overview'] = 'Url components';
$_['text_info_common_overview'] = '
<p><b>Url components quick description, check dedicated section for more information.</b></p>
<h4>Absolute url</h4>
<p>Use this component to set friendly url to any custom module, works with full url instead of url keyword.</p>
<p>http://website.com/index.php?<b>route=blog/blog&path=12&post=32</b> &nbsp;&nbsp;&nbsp;&gt;&nbsp;&nbsp;&nbsp; http://website.com/<b>blog/blog-cat/this-is-a-blog-post</b></p>
<h4>Common Page Url</h4>
<p>Use this component to set friendly url to default opencart pages (account, contact, checkout, ...), handles only the route= parameter.</p>
<p>http://website.com/index.php?<b>route=account/register</b> &nbsp;&nbsp;&nbsp;&gt;&nbsp;&nbsp;&nbsp; http://website.com/<b>my-account/register</b></p>
<h4>Param url</h4>
<p>This component lists the seo url parameters from custom modules, so you can quick check them, you can create new parameters but it may not work on some modules so absolute url is recommended because it will work in any case.</p>
<p>http://website.com/some-category?<b>super_filter=42</b> &nbsp;&nbsp;&nbsp;&gt;&nbsp;&nbsp;&nbsp; http://website.com/some-category/<b>filter-blue</b></p>';
$_['text_info_absolute'] = '
<h4>Absolute Url - Handle any custom module url</h4>
<p>Opencart is working by default with url keywords, for example <b>/desktop/pc/some-computer</b>, from this url opencart is searching in database each part to determine to what it relates (category, product, information, etc), then it will compute this link to an understandable one for the system which will look like <b>index.php?route=product/product&path=12_31&product_id=54</b>.</p>
<p>With absolute url component you can define an url not using the keyword part but the full url itself, it is no use for product/information/categories etc but it can be very handy for making to work with any custom module.</p>
<p>It is working with unlimited parameters in source url and unlimited levels in seo url.</p>
<h4>Set up a new absolute url</h4>
<p>Example, transform <b>http://website.com/index.php?route=blog/blog&post=32</b> into <b>http://website.com/blog/this-is-a-blog-post</b>.</p>
<ol>
<li>Click on <span class="gkd-badge"><i class="fa fa-plus" style="color:#4CBD35"></i> Add new entry</span></li>
<li>Insert in query field <b>blog/blog&post=32</b> (do not insert index.php?route=)</li>
<li>in Full seo url field <b>blog/this-is-a-blog-post</b></li>
</ol>
</ul>
<h4>Use the wildcard to handle urls with extra parameters</h4>
<p>In previous example, when the url <b>http://website.com/blog/this-is-a-blog-post</b> is reached it works only if it is the exact url, if the url contains extra parameters like this <b>http://website.com/blog/this-is-a-blog-post?search=true</b> then it does not work anymore.<br/>In such case you can use the wildcard at the end of the url so any url with extra parameters will work.</p>
<ol>
<li>Click on <span class="gkd-badge"><i class="fa fa-plus" style="color:#4CBD35"></i> Add new entry</span></li>
<li>Insert in query field <b>blog/blog&post=32</b> (do not insert index.php?route=)</li>
<li>in Full seo url field <b>blog/this-is-a-blog-post<span style="color:red">*</span></b></li>
</ol>
</ul>';
$_['text_info_common'] = '
<h4>Common Page Url - Give friendly url to default opencart pages (account, contact, checkout, ...)</h4>
<p>By default opencart is not rewritting the common page urls, they remain this way <b>index.php?route=account/login</b>.</p>
<p>With common page url component you can define an seo url for all these pages </p>
<p>For example you can rewrite <b>index.php?route=account/register</b> to <b>register</b>, just put <b>account/register</b> in query (do not insert index.php?route=), and put <b>register</b> in seo url field.</p>
<p>Here you can not insert any parameter, for example <b>account/register&amp;param=value</b> won\'t work, you have to use absolute url for such link or insert the parameter into parameter url</p>
<h4>Get predefined urls</h4>
<p>Complete SEO comes with predefined urls for all common opencart pages, there various languages available and they will be automatically retrieved for current selected language if exists, if not it will get english urls instead.</p>
<p>Warning: using restore default urls will replace all existent common page urls listed for current language.</p>
<ol>
<li>Click on <span class="gkd-badge"><i class="fa fa-caret-down"></i></span> on the bottom button to get access to advanced options.</li>
<li>Then click on <span class="gkd-badge"><i class="fa fa-magic" style="color:#FB7C00"></i> Restore default URLs</span></li>
<li>If the keywords are available for current language they will be displayed, if not english language will be displayed and you will have to translate.</li>
<li>You translated a new language and want us to integrate in main package? then click on <span class="gkd-badge"><i class="fa fa-save" style="color:#4276D2"></i> Export URLs</span> and send us export file at support@geekodev.com</li>
</ol>
<h4>Set up a new common page url</h4>
<p>Example, transform <b>http://website.com/index.php?route=account/register</b> into <b>http://website.com/my-account/register</b>.</p>
<ol>
<li>Click on <span class="gkd-badge"><i class="fa fa-plus" style="color:#4CBD35"></i> Add new entry</span></li>
<li>Insert in query field <b>account/register</b> (do not insert route=)</li>
<li>in Full seo url field <b>my-account/register</b></li>
</ol>
</ul>';
$_['text_info_special'] = '
<h4>Param url - Manage seo keywords of parameters in url</h4>
<p>If you have a custom module which is handling seo keywords, its keywords will generally appear there, so you can easily give a look on them and change if necessary.</p>
<p>If your custom module does not manage seo url automatically then it is recommended to use Absolute Url component to handle the urls. You can also use a combination of Common Page and Param url to handle it but Absolute url is easier for that, so this component is recommended only for view and not for url creation.</p>
<h4>Set up a new redirection</h4>
<p><span class="gkd-badge"><i class="fa fa-plus" style="color:#4CBD35"></i> Add new entry</span> click on this button and follow the instructions to set your url redirection.</p>
</ul>';
$_['text_info_404'] = '
<h4>Not found (404) manager</h4>
<p>This section lists all url accessed on your website that are actually not existant or that opencart system have not been able to forward to any content. For example when you arrive on such page:</p>
<p><img class="img-thumbnail" src="view/seo_package/img/help/not_found.png" alt=""/></p>
<p>In such case Complete SEO Package will automatically save this url so you will be able to easily check all not found urls in this table and how many times they have been requested.</p>
<h4>Create a redirection from a not found url</h4>
<p>Click on the button <img src="view/seo_package/img/help/btn_plus.png"/> to a easily add a redirection for this url, once added your redirection will appear into "Url redirection" tab, and here the url will appear in <span class="text-success">green color</span> to indicate that this url already have a redirection.</p>
<h4>Remove actual entries</h4>
<p>These entries are for your information only, there is no impact to remove them, to do so just click on one of the following buttons:</p>
<ul class="list-unstyled">
<li style="margin-top:12px"><span class="gkd-badge"><i class="fa fa-minus" style="color:#ED5555"></i> Remove redirected entries</span> this will remove all urls marked as <span class="text-success">green</span> which means any url that already have his redirection set</li>
<li style="margin-top:12px"><span class="gkd-badge"><i class="fa fa-close" style="color:#ED5555"></i> Remove all entries</span> this will remove all urls in this table, marked green or not, don\'t worry this is not deleting the redirections made on these urls</li>
</ul>';
$_['text_info_redirections'] = '
<h4>Url redirection</h4>
<p>Here you can define your own URL redirections, this is using the redirection 301, it means search engines will consider the new url as the valid one.</p>
<p>If you need to change the URL of a page as it is shown in search engine results, we recommend that you use a server-side 301 redirect. This is the best way to ensure that users and search engines are directed to the correct page. The 301 status code means that a page has permanently moved to a new location.</p>
<p>301 redirects are particularly useful if you have any url not found on your website.</p>
<h4>Set up a new redirection</h4>
<p><span class="gkd-badge"><i class="fa fa-plus" style="color:#4CBD35"></i> Add new entry</span> click on this button and follow the instructions to set your url redirection.</p>';
$_['text_info_dynamic_redirections'] = '
<h4>How does it work?</h4>
<p>Dynamic redirections is a way to handle URL change on your website and avoir 404 not found results on already indexed pages.</p>
<p>If you going to update your seo urls, then it\'s better to save dynamic redirectionss. What it means: You have 2 types of urls <b>domain.com/product-seo-url</b> (seo link) and <b>domain.com/index.php?route=product/product&product_id=123</b> (dynamic link).</p>
<p>Before changing your urls, you can generate dynamic redirection, so all your current seo urls will obtain their dynamic url correspondence, and this will make that the module will automatically find new url if it has changed. For example you generate a dynamic redirection like this: <b>domain.com/product</b> -> <b>domain.com/index.php?route=product/product&product_id=1</b></p>
<p>Then you change your seo url, to <b>domain.com/product-name-2019-high-quality</b></p>
<p>But google already indexed your old seo url <b>/product</b> and in google results will show your old url.</p>
<p>When customer will go to your product with old url, he should get 404 page (Not found) because you changed seo url, BUT you generated dynamic redirections and Complete SEO module will check: "Is this old url has dynamic correspondence?</p>
<p>Yes, it\'s exist, it\'s <b>/index.php?route=product/product&product_id=1</b></p>
<p>Ok, then let\'s search new seo url with product_id=1, oh it\'s also exist, it\'s <b>/product-name-2019-high-quality</b></p>
<p>So your customer will be properly redirected from old url <b>/product</b> to current seo url -> <b>/product-name-2019-high-quality</b></p>
<p>If you change again the url then <b>/product</b> will alway be redirected to latest url. But if you want</p>
<p>And after some time google will reindex your pages to their new links without loosing ranking of your pages and being penalized because of 404 pages.</p>
<h4>Set up Dynamic redirections</h4>
<p>You have 2 ways to generate the dynamic redirections:</p>
<ul><li>Manually in SEO Editor > Url Redirection</li>
<li>Automatically in Mass Update > Generate dynamic redirections</li></ul>
';
$_['text_info_request'] = '<h4>Request headers</h4>
<p>Request headers are part of the HTTP protocol, they are sent on each request made to the server.<br/>Here you will be able to change some parameters related to request headers, such optimizations can improve performance for the end user and also for search engine crawling robots.</p>
<h5>Last-Modified</h5>
<p>Include the last modified date of the actual item, improves performance for user (browser will fetch page from cache if not updated) and for crawling robots. For products the date will be the one of the last edit of product or the one of the last review if any. It is highly recommended to activate this setting.</p><p><img class="img-thumbnail" src="view/seo_package/img/help/headers-last-modified.png" alt=""/></p>';
$_['help_fb_appid_tab'] = 'Facebook App ID';
$_['help_microdata'] = '
<h4>Google microdata</h4>
<p>Microdata is widely used by search engines to format the search result in better way, for example a product can display the price and review rating directly in search results : </p>
<p><img class="img-thumbnail" src="view/seo_package/img/help/microdata-product.jpg" alt=""/></p>
<p>Complete SEO Package is using the latest JSON-LD format to include the microdata on your website. Basic informations are included (category, description, image, price, stock) and you can select extra data you want to display.</p>
<h4>Benefits of using microdata</h4>
<p><ul>
  <li>Eye catching results - Drawing a search users attention from your competitors and to your own result.</li>
  <li>Potential CTR increase - Possibly increasing click through rates and lowering the chance of the user bouncing as they have more information on the page before clicking through.</li>
  <li>Providing quality results - Offering results that are closer to user specifications.</li>
</ul></p>
<h4>Testing tool</h4>
<p>Use the following testing tool to check your actual microdata: <a href="https://search.google.com/structured-data/testing-tool" target="_blank">Google structured data testing tool</a></p>
';
$_['help_microdata_faq'] = '
<h4>Warning: "This Product is missing a global identifier"</h4>
<p>Global identifier (GTIN) make know to google your product identifier, if you have this warning it means you need to fill in your products one of these values: <b>UPC, EAN, JAN or ISBN</b>, and then enable corresponding value in Complete SEO > Rich Snippet > Google > Product.</p>
';
$_['entry_facebook_pixel'] = 'Facebook Pixel code:';
$_['help_fb_pixel_tab'] = 'About Facebook Pixel';
$_['help_fb_pixel2_tab'] = 'Install Facebook Pixel';
$_['help_fb_pixel'] = '<div><h4>About Facebook Pixel</h4><p>The Facebook pixel is an analytics tool that allows you to measure the effectiveness of your advertising by understanding the actions people take on your website. </p></div><div>When someone visits your website and takes an action (like completing a purchase), the Facebook pixel is triggered and reports this action. This way, you\'ll know when a customer takes an action, and will be able to reach that customer again through future Facebook ads. </p></div><div><p></p><h4>Benefits</h4><p></p><ul><li>Reach the right people</li><li>Drive more sales</li><li>Measure the results of your ads</li></ul><div><p></p><h4>How the Facebook pixel collects data</h4><p></p><p> When you set up the Facebook pixel, we will start to receive information from your website. This information allows us to better target your ads and optimize your ads for conversions. You can also use this information to build website Custom Audiences and reach people who are likely to convert.</p><p class="_3p8"> Once you implement the pixel base code, we will start to receive the following information:</p><p class="_3p8"></p><ul><li>HTTP headers – Anything present in HTTP headers. HTTP headers are a standard web protocol sent between any browser and any server on the internet. HTTP headers include IP addresses, information about the web browser, page location, document, referrer and device.</li><li>Pixel-specific data – Includes Pixel ID and the Facebook cookie.</li><li>Button-click data – Includes any buttons clicked by site visitors, the labels of those buttons and any pages visited as a result of the button clicks. Also, includes website form field names such as ‘email’, ‘address’, ‘quantity’ for when you purchase a product or service. We don\'t capture form field values unless you include them as part of <a target="_blank" href="https://developers.facebook.com/docs/facebook-pixel/pixel-with-ads/conversion-tracking#advanced_match">Advanced Matching</a> or optional values.</li><li>Page metadata - Includes page descriptions, tags, and keywords. This is the same data typically used by search engines and other web services to rank pages.</li></ul></div></div><p></p><h4>Facebook Pixel documentation</h4><p>See full Facebook pixel documentation here: <a target="_blank" href="https://www.facebook.com/business/help/553691765029382">Facebook Pixel documenation</a></p>';
$_['help_fb_pixel2'] = '<h4>1. Create a Facebook pixel</h4><ol><li>Go to your <a target="_blank" href="https://www.facebook.com/ads/manager/pixel/facebook_pixel"><b>Pixels</b></a> tab in Events Manager.</li><li>Click <b>Create a Pixel</b>. </li><li>Click <b>Create</b> in the box that appears to finish creating your pixel. </li></ol><h4>2. Add the Facebook pixel to your website</h4><p>Once you\'ve created your pixel, you\'re ready to put the Facebook pixel code on your website. Choose the statement below that best fits how you make updates to your website\'s code for instructions:</p><div ><ol><li>Go to the Pixels tab in Ads Manager.</li><li>Click <b>Set Up Pixel</b></li><li>Click <b>Install the Code Yourself.</b></li><li>Copy the entire code and paste it here in <b>Facebook Pixel code</b>.</li></ol></div>';
$_['help_fb_appid'] = '
<h4>Facebook App ID</h4>
<p>You must fill your facebook App ID in order to get this feature working, you will find it in the settings of your developper panel: <a href="http://facebook.com/developers">http://facebook.com/developers</a>.</p>
<p><img class="img-thumbnail" src="view/seo_package/img/help/settings_app-id.gif" alt=""/></p>
';
$_['help_fb_setup_tab'] = 'How to use Facebook Opengraph';
$_['help_fb_setup']	= '
<h4>Install the Facebook Developer Application</h4>
<p>The first step in creating an application in Facebok is to install the Facebook Developer application.</p>
<p>To do that, log in to Facebook and then visit the URL <a href="http://facebook.com/developers">http://facebook.com/developers</a>.</p>
<p>If this is the first time you’ve installed the Developer Application, you will see the Request for Permission dialog show below:</p>
<p><img class="img-thumbnail" src="view/seo_package/img/help/permission.jpg" alt="" /></p>
<p>Click the <b>Allow</b> button to proceed.</p>
<h4>Creating the Facebook Application for your Website</h4>
<p>Now that you have the Developer App installed, click on the<b> Create New App</b> button.<br/><img class="img-thumbnail" src="view/seo_package/img/help/create-new-app.gif" alt=""/></p>
<p>Give your application an "App Display Name" (the name displayed to users).</p>
<p>For purposes of this tutorial, you don’t need to have a "Namespace".</p>
<p>Click the "I agree to Facebook Platform Policies" box; then click the <b>Continue</b> button.<br/><img class="img-thumbnail" src="view/seo_package/img/help/dialog_new-app.gif" alt=""/></p>
<p>On the next screen, enter the security phrase and then click <b>Submit</b>.</p>
<p><img class="img-thumbnail" src="view/seo_package/img/help/new-app_captcha.gif" alt=""/></p>
<p>There are a lot of options you can tweak related to your application. In this post, we are going to focus on the basics needed to get your website set up with a Facebook App ID.</p>
<h4>The Settings Tab</h4>
<p>This is where you do the basic set up for your app</p>
<p><img class="img-thumbnail" src="view/seo_package/img/help/settings_app-id.gif" alt=""/></p>
<p>App ID is now set up. Your App ID is the value you’ll be using to integrate your website with Facebook’s APIs so you can add the Social Plugins (Like Button, Send Button, Comments Box, etc.).</p>
<p>You don’t need to add an icon. If your website has a favicon, it will be displayed next to your site’s URL in Facebook Insights.</p>
<p><b>Basic info:</b></p>
<p><ul>
<li><b>App Display Name:</b> Make this the same as the original value you provided</li>
<li><b>App Namespace:</b> Leave blank</li>
<li><b>Contact Email:</b> Where you want Facebook to send emails regarding your app</li>
<li><b>App Domain:</b> just put “mydomain.com” where “mydomain.com” is your website’s domain URL (TLD)</li>
<li><b>Category:</b> Select a category from the pulldown list (optional)</li>
</ul></p>
<p>Your website is now an “object” in Facebook’s Open Graph, with its own App ID.</p>
';
$_['help_flag_mode'] = '
<h4>Tag after domain</h4>
<p>Language prefix mode permits to add the language code just after the domain name:</p>
<p><code>http://example.com/<b>en</b></code><br/><code>http://example.com/<b>fr</b></code>
<p>It can be useful to have a good separation between each language in multilingual websites.</p>
<p>This parameter can be enabled anytime and take effect immediately, there is no need to re-generate the urls.</p>
<h4>Extra options</h4>
<table class="table table-bordered">
<tr><th style="width:220px">Option</th><th>Effect</th></tr>
<tr><td><code>Short tag</code></td><td>Display <b>/en</b> instead of <b>/en-gb</b> in case you have full format defined</td></tr>
<tr><td><code>No tag for default</code></td><td>Default language won\'t display the language tag</td></tr>
<tr><td><code>Tag in uppercase</code></td><td>Display tag in uppercase <b>/EN, /FR</b></td></tr>
</table>
';
$_['help_store_mode'] = '
<h4>Tag as subdomain</h4>
<p>Enable this option if you want your links to be written with specific store depending the language. For example if you have 2 stores defined like this :</p>
<p><code>http://<b>en</b>.domain.com</code><br/><code>http://<b>fr</b>.domain.com</code></p>
<p>By default opencart allows to change language but stay on same domain, if you enable this option and change the language, you will be redirected to the other domain. Also the hreflang links will be correctly updated with corresponding store url.</p>
<p>This setting is using your stores configuration, so you have to configure the stores correctly to get this working, also note that this is not limited to subdomains, you could also use separate domains names for each language:</p>
<p><code>http://<b>english-store</b>.com</code><br/><code>http://<b>french-store</b>.com</code></p>
<p>If you make any modification on configuration in Settings > Stores, come back here and save settings again.</p>
<h5>Actual configuration</h5>
<p>In this section you can see how are actually binded your stores to each language, you must have only one store for each language in order to get this option working properly, if a store have no defined language you will get the message "<span class="text-danger">No language defined</span>", in this case it is necessary you define a language for this store in Settings > Stores.</p>
';

$_['help_cron_title'] = 'Cron jobs';
$_['help_cron_setup_title'] = 'Set up a cron job';
$_['help_cron'] = '
<h4>What is a cron job?</h4>
<p>Cron is a linux utility which schedules a command or script on your server to run automatically at a specified time and date. A cron job is the scheduled task itself. Cron jobs can be very useful to automate repetitive tasks.</p><p>In Complete SEO Package the cron job is used to automatically update your store data just like you would do manually using the mass updater.</p>
<h4>Time Intervals</h4>
<p>Cron jobs can be set to run by the minute, hour, day of the week, day of the month, month or any combination of these.</p><p>This has to be set when creating the cron job on your server (in cPanel for example).</p>
<h4>Limitations</h4>
<p>Cron jobs may not be able generate unlimited items depending on your server limitations and number of items you have you may face error on using cron, it is recommended to use the "empty only" parameter to limit the number of items you are going to update using cron.</p>
';
$_['help_cron_setup'] = '
<h4>Cron command</h4>
<p>Use this cron command for main store:<br/><code>/[path_to_php]/php '.str_replace('system/', '', DIR_SYSTEM).'seo_package_cli.php</code></p>
<p>Or this one for sub-stores (replace X by store ID):<br/><code>/[path_to_php]/php '.str_replace('system/', '', DIR_SYSTEM).'seo_package_cli.php store=X</code></p>
<p>Use this path if you put the seo_package_cli.php file into your root opencart directory, if elsewhere don\'t forget to adapt the path to match the correct file location.</p>
<h4>How to set up a cron job with cPanel?</h4>
<ol>
<li>Copy the file seo_package_cli.php from module package > _extra files to your FTP (preferably into a directory outside of web root)</li>
<li>Log in your cPanel and go to <b>Cron Jobs</b> section</li>
<li>Select the wanted time interval, for example <b>once per day</b></li>
<li>In <b>command</b> copy the <i>cron command</i> displayed at top of this section</li>
<li>Adapt [path_to_php] to your server path to php, it is generally written inside cPanel cron section</li>
<li>Click on Add new cron job.</li>
</ol>
<p>That\'s all! Now your server will call the update script at specified times, and you will be able to see the result into the report section.</p>
<h4>Specific cron command for single type</h4>
<p>By default the cron command will update all data types you selected in cron section, if you want to update only one data type you can use this command::<br/><code>/[path_to_php]/php '.str_replace('system/', '', DIR_SYSTEM).'seo_package_cli.php product=X simulation=1 empty_only=1</code></p>
<p>You can use category, information or manufacturer instead of product, simulation and empty_only are disabled by default, set them to 1 to enable<br/>Replace X by one of the following data types:
<ul>
<li><b>product:</b> url, title, keyword, description, full_desc, h1, h2, h3, tag</li>
<li><b>category:</b> url, title, keyword, description, full_desc, h1, h2, h3</li>
<li><b>information:</b> url, title, keyword, description, full_desc, h1, h2, h3</li>
<li><b>manufacturer:</b> url</li>
<li><b>redirection:</b> product, category, information, manufacturer</li>
</ul>
</p>
';

$_['text_hours'] = 'hours';
$_['text_minutes'] = 'minutes';
$_['text_seconds'] = 'seconds';

// Extra modules
$_['text_seo_generator_j3posts_desc']= '<strong>Main</strong><br/><b>[name]</b> Journal3 Blog Post title<br/><br/>'.$special_tags;
$_['text_seo_generator_j3posts']      = 'Journal3 Blog Posts';

// Error
$_['error_permission'] = 'Warning: You do not have permission to modify this module!';
$_['error_module_disabled'] = 'Complete SEO Package is currently disabled, you can enable with the button on dashboard tab.';
$_['error_friendly_disabled'] = 'Warning: Common Page Url component is disabled, you can edit all values but they will be active on front only when you activate this component in SEO Configuration';
$_['error_404_disabled'] = 'Warning: 404 Manager component is disabled, the logging of not found pages will be active only when you activate this component in SEO Configuration';
$_['error_absolute_disabled'] = 'Warning: Absolute Url component is disabled, you can edit all values but they will be active on front only when you activate this component in SEO Configuration';
$_['error_redirect_disabled'] = 'Warning: Url Redirection component is disabled, you can edit all values but they will be active on front only when you activate this component in SEO Configuration';
?>