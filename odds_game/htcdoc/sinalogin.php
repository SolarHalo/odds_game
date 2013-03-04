<?php
include "../configs/load.php";
include BASE_HOME.'includes/saetv2.ex.class.php';

$o = new SaeTOAuthV2( WB_AKEY , WB_SKEY );

if (isset($_REQUEST['code'])) {
	$keys = array();
	$keys['code'] = $_REQUEST['code'];
	$keys['redirect_uri'] = WB_CALLBACK_URL;
	try {
		$token = $o->getAccessToken( 'code', $keys ) ;
	} catch (OAuthException $e) {
	}
}
print_r($token);
if ($token) {
	print_r($token);
}else{
	
}
?>