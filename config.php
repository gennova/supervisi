<?php
// FRONTEND CONFIG

// HTTP
define('HTTP_SERVER', 'http://gennova.esy.es/');
define('HTTP_CATALOG', 'http://gennova.esy.es/');
define('HTTP_IMAGE', 'http://gennova.esy.es/image/');
define('HTTP_ADMIN', 'http://gennova.esy.es/admin/');

// HTTPS
define('HTTPS_SERVER', HTTP_SERVER);
define('HTTPS_CATALOG', HTTP_CATALOG);
define('HTTPS_IMAGE', HTTP_IMAGE);
define('HTTPS_ADMIN', HTTP_ADMIN);

// DIR
define('DIR_CATALOG', '/home/u973082655/public_html/catalog/');
define('DIR_APPLICATION', DIR_CATALOG);
define('DIR_SYSTEM', '/home/u973082655/public_html/system/');
define('DIR_LANGUAGE', DIR_APPLICATION.'language/');
define('DIR_TEMPLATE', DIR_APPLICATION.'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM.'config/');
define('DIR_IMAGE', '/home/u973082655/public_html/image/');
define('DIR_CACHE', DIR_SYSTEM.'cache/');
define('DIR_DOWNLOAD', DIR_SYSTEM.'download/');
define('DIR_UPLOAD', DIR_SYSTEM.'upload/');
define('DIR_MODIFICATION', DIR_SYSTEM.'modification/');
define('DIR_LOGS', DIR_SYSTEM.'logs/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'mysql');
define('DB_USERNAME', 'u973082655_nunes');
define('DB_PASSWORD', 'HyMyruSyRu');
define('DB_DATABASE', 'u973082655_sywug');
define('DB_PREFIX', 'gocc_');
define('DB_PORT', '3306');
?>