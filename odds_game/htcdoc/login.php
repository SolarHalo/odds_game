<?php
include "../configs/load.php";
include BASE_HOME."includes/IboUser.class.php";
include BASE_HOME.'includes/saetv2.ex.class.php';

$smarty->assign("urlroot" , $urlroot);
if(array_key_exists("email", $_GET) && array_key_exists("password", $_GET)){
	$email = $_GET['email'];
	$pass = $_GET['password'];
	$userdb = new IboUser($dbutil);
	$user = $userdb->getUser($email);
	if($user){
		if(encodePassword($pass) == $user->user_passwd){
			$_SESSION['user'] = $user;
			$smarty->assign("logintem", "loginsuccess.tpl");
		}else{
			$smarty->assign("logintem", "loginForm.tpl");
			$smarty->assign("loginInfo", "用户名密码不正确!");
		}
	}
	else{
		$smarty->assign("logintem", "loginForm.tpl");
		$smarty->assign("loginInfo", "用户名不存在!");
	}
	
}else{
	define( "WB_AKEY" , '995123813' );
	define( "WB_SKEY" , '9c0a16dd718ee29b2278342230e6ed2a' );
	define( "WB_CALLBACK_URL" , DOMAIN_HOME.'/sinalogin.php' );

	$o = new SaeTOAuthV2( WB_AKEY , WB_SKEY );

	$code_url = $o->getAuthorizeURL( WB_CALLBACK_URL );
	
	
	$smarty->assign("loginInfo", "");
	$smarty->assign("logintem", "loginForm.tpl");
	$smarty->assign("sinaauthurl", $code_url);
}

$smarty->display("login.tpl");

?>