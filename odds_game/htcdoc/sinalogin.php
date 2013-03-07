<?php
header('Content-Type: text/html; charset=UTF-8');
include "../configs/load.php";
include BASE_HOME.'includes/saetv2.ex.class.php';
include BASE_HOME."includes/IboUser.class.php";

define( "WB_AKEY" , '995123813' );
define( "WB_SKEY" , '9c0a16dd718ee29b2278342230e6ed2a' );
define( "WB_CALLBACK_URL" , DOMAIN_HOME.'sinalogin.php' );

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
if ($token) {
	$c = new SaeTClientV2( WB_AKEY , WB_SKEY , $token['access_token'] );
	$ms  = $c->home_timeline(); // done
	$uid_get = $c->get_uid();
	$uid = $uid_get['uid'];
	$user_message = $c->show_user_by_id( $uid);
	if( array_key_exists("error", $user_message)){
		header("Location: login.php?error=sina");
		exit(0);
	}
	$userdb = new IboUser($dbutil);
	$user = $userdb->getUser("sina_".strval($user_message['id']));
	if($user){
		$u = array('user_name'=>$user_message['name'], "user_photo"=>$user_message['profile_image_url']);
		$userdb->updateUserMessage($u, "sina_".strval($user_message['id']));
	}else{
		$userdb->addUser("sina_".strval($user_message['id']), "", $user_message['name'], $user_message['profile_image_url'], 0);
	}
	$user = $userdb->getUser("sina_".strval($user_message['id']));
	$_SESSION['user'] = $user;
	header("Location: index.php");
}else{
	header("Location: login.php?error=sina");
}
?>