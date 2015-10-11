<?php
$_ENV['RAINLOOP_INCLUDE_AS_API'] = true;
include '/var/www/rainloop/app/index.php';

$oConfig = \RainLoop\Api::Config();
$oConfig->SetPassword('ADMINPASSWORD');
echo $oConfig->Save() ? 'Admin password updated' : 'Admin password not updated';

?>