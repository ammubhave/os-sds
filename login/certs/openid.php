<?php
require "../../vendor/autoload.php";
require "../../sds.php";

$deskip = sdsGetStrOption('desk-ip');
if($_SERVER["REMOTE_ADDR"] === $deskip) {
  header("Location: " . SDS_AUTO_LOGIN_URL);
  exit;
}

try {
  $oidc = new OpenIDConnectClient(getenv(OPENID_URL),
                                  getenv(OPENID_CLIENT_ID),
                                  getenv(OPENID_CLIENT_SECRET));
  $oidc->addScope('profile');
  $oidc->authenticate();
  $username = $oidc->requestUserInfo('preferred_username');
} catch (OpenIDConnectClientException $e) {
  header("Location: " . SDS_AUTO_LOGIN_URL . '&error=' . $e->getMessage());
  exit;
}

if(!isset($session) or $username !== $session->username) {
  $session = createSession($username);
}
header("Location: " . $_REQUEST['url']);
exit;
?>

