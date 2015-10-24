<?php

if (!defined('APP_VERSION')) {
	$version = file_get_contents('data/VERSION');
	if ($version) {
		define('APP_VERSION', $version);
		define('APP_INDEX_ROOT_FILE', __FILE__);
		define('APP_INDEX_ROOT_PATH', str_replace('\\', '/', rtrim(dirname(__FILE__), '\\/').'/'));
	}
}

if(isset($_GET["auto_log"])) {
	$_ENV['RAINLOOP_INCLUDE_AS_API'] = true;
}

if (file_exists(APP_INDEX_ROOT_PATH.'rainloop/v/'.APP_VERSION.'/include.php')) {
	include APP_INDEX_ROOT_PATH.'rainloop/v/'.APP_VERSION.'/include.php';
} else {
	echo '[105] Missing version directory';
	exit(105);
}

if(isset($_GET["auto_log"])) {
	if (isset($_SERVER['HTTP_EMAIL']) && isset($_SERVER['PHP_AUTH_PW'])) {
		$email = $_SERVER['HTTP_EMAIL'];
		$password = $_SERVER['PHP_AUTH_PW'];
		$ssoHash = \RainLoop\Api::GetUserSsoHash($email, $password);

		// redirect to webmail sso url
		\header('Location: https://domain.tldPATHTOCHANGE/index.php?sso&hash='.$ssoHash);
	}
	exit();
}

?>
