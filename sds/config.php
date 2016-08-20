<?php
# Set default base url as /
$SDS_BASE_URL = getenv('SDS_BASE_URL');
if ($SDS_BASE_URL === false) $SDS_BASE_URL = '/';

define ('SDS_BASE_URL', $SDS_BASE_URL);
define ('SDS_HOME_URL', SDS_BASE_URL . 'home.php');
define ('SDS_LOGIN_URL', SDS_BASE_URL . 'login/certs/login.php');
define ('SDS_AUTO_LOGIN_URL',  SDS_BASE_URL . 'login/certs/login.php?auto=1');
define ('SDS_BASE', dirname(__DIR__));
define ('SDS_COOKIE_PATH', SDS_BASE_URL);

$SDB_HOST = getenv('SDB_HOST'); if ($SDB_HOST === false) $SDB_HOST = 'localhost';
$SDB_PORT = getenv('SDB_PORT'); if ($SDB_PORT === false) $SDB_PORT = '5432';

define ('SDB_HOST', $SDB_HOST);
define ('SDB_PORT', $SDB_PORT);
define ('SDB_DATABASE', getenv('SDB_DATABASE'));
define ('SDB_USER', getenv('SDB_USER'));
define ('SDB_PASSWORD', getenv('SDB_PASSWORD'));
define ('SDS_QUERY_LOG', "/tmp/querylogs/sds");
?>
