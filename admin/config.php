<?php
$host = $_SERVER['HTTP_HOST'];
// HTTP
define('HTTP_SERVER', 'https://'.$host.'/admin/');
define('HTTP_CATALOG', 'https://'.$host.'/');

// HTTPS
define('HTTPS_SERVER', 'https://'.$host.'/admin/');
define('HTTPS_CATALOG', 'https://'.$host.'/');

$dir = dirname(dirname(__FILE__));

// DIR
define('DIR_APPLICATION', $dir.'/admin/');
define('DIR_SYSTEM', $dir.'/system/');
define('DIR_IMAGE', $dir.'/image/');
define('DIR_STORAGE', '/home/u651415643/domains/sekolina.com/public_html/storage/');
define('DIR_CATALOG', $dir.'/catalog/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/template/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'u651415643_adm');
define('DB_PASSWORD', 'nN!Wl6$D');
define('DB_DATABASE', 'u651415643_adm');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');

// OpenCart API
define('OPENCART_SERVER', 'https://www.opencart.com/');
