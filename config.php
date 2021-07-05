<?php

// HTTP
define('HTTP_SERVER', 'http://' . $_SERVER['HTTP_HOST'] . '/');

// HTTPS
define('HTTPS_SERVER', 'http://' . $_SERVER['HTTP_HOST'] . '/');
define('DOMAIN_URL', 'http://' . $_SERVER['HTTP_HOST']);
define('DOMAIN_NAME', $_SERVER['HTTP_HOST']);

// DIR
define('DIR_ROOT', $_SERVER['DOCUMENT_ROOT']);

define('DIR_APPLICATION', 'C:/xampp/htdocs/empire-hall/catalog/'); // C:/xampp/htdocs/empire_hall/
define('DIR_SYSTEM', 'C:/xampp/htdocs/empire-hall/system/');
define('DIR_IMAGE', 'C:/xampp/htdocs/empire-hall/image/');
define('DIR_LANGUAGE', DIR_APPLICATION . '/language/');
define('DIR_TEMPLATE', DIR_APPLICATION . '/view/theme/');
define('DIR_STORAGE', 'C:/xampp/htdocs/empire-hall/system/storage/');
define('DIR_FILES', HTTPS_SERVER . '/system/storage/download/');
define('DIR_CONFIG', DIR_SYSTEM . '/config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . '/download/');
define('DIR_LOGS', DIR_STORAGE . '/logs/');
define('DIR_MODIFICATION', DIR_STORAGE . '/modification/');
define('DIR_SESSION', DIR_STORAGE . '/session/');
define('DIR_UPLOAD', DIR_STORAGE . '/upload/');
define('DIR_COMPRESSION', DIR_ROOT . '/compression/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', '127.0.0.1');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '1qaz2wsX');
define('DB_DATABASE', 'empireha_db');
define('DB_PORT', '3307');
define('DB_PREFIX', 'oc_');

// ERRORS
ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_WARNING & ~E_DEPRECATED);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
ini_set('html_errors', 1);