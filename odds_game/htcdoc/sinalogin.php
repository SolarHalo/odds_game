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
	$c = new SaeTClientV2( WB_AKEY , WB_SKEY , $token['access_token'] );
	$ms  = $c->home_timeline(); // done
	$uid_get = $c->get_uid();
	$uid = $uid_get['uid'];
	$user_message = $c->show_user_by_id( $uid);
	print_r($user_message);
}else{
	echo "ddddddddddddddddddddddd";
}
?>