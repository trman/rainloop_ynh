<?php
if (!defined('APP_VERSION')) {
	$version = file_get_contents('/var/www/rainloop/app/data/VERSION');
	if ($version) {
		define('APP_VERSION', $version);
		define('APP_INDEX_ROOT_FILE', __FILE__);
		define('APP_INDEX_ROOT_PATH', str_replace('\\', '/', rtrim(dirname(__FILE__), '\\/').'/'));
	}
}

if (file_exists(APP_INDEX_ROOT_PATH.'rainloop/v/'.APP_VERSION.'/include.php')) {
	include APP_INDEX_ROOT_PATH.'rainloop/v/'.APP_VERSION.'/include.php';
} else {
	echo '[105] Missing version directory';
	exit(105);
}

?>
