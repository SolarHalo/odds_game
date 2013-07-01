<?php
ob_start();
include "../configs/load.php";
include BASE_HOME.'includes/saetv2.ex.class.php';
require_once(BASE_HOME."/includes/Tencent.php");




if(array_key_exists("email", $_POST) && array_key_exists("password", $_POST)){
	$email = $_POST['email'];
	$pass = $_POST['password'];
	$checks = checkLoginState($email, encodePassword($pass), $dbutil);
	if(!is_int($checks)){
		if(isset($_POST['holdlogin'])){
				$cookiemsg = array();
				$cookiemsg['email'] = $email;
				$cookiemsg['key'] = passport_encrypt(encodePassword($pass) , COOKIEENCRYPTKEY);
				setcookie("usermsg", json_encode($cookiemsg), time() + 3600 * 24 * 30);
		}
		$redirectUrl = $_GET['redirectUrl'];
		//登陆成功后，直接转向当前页面
		if($redirectUrl!=null){
			header("Location: ".$redirectUrl);
		}	
		$smarty->assign("logintem", "loginsuccess.tpl");
	}else if($checks == 2){
		$smarty->assign("logintem", "loginForm.tpl");
		$smarty->assign("loginInfo", "用户名密码不正确!");
	}else{
		$smarty->assign("logintem", "loginForm.tpl");
		$smarty->assign("loginInfo", "用户名不存在!");
	}
	
	
}else{
	define( "WB_AKEY" , '995123813' );
	define( "WB_SKEY" , '9c0a16dd718ee29b2278342230e6ed2a' );
	define( "WB_CALLBACK_URL" , DOMAIN_HOME.'sinalogin.php' );
	//填写自己的appid
	$client_id = '801324132';
	//填写自己的appkey
	$client_secret = 'fbb14745941f5586e78bd6e03d268d8a';
	OAuth::init($client_id, $client_secret);

	$o = new SaeTOAuthV2( WB_AKEY , WB_SKEY );

	$code_url = $o->getAuthorizeURL( WB_CALLBACK_URL );
	
	$tencentCallBack = OAuth::getAuthorizeURL("http://www.ibo123.com/odds_game/htcdoc/qqlogin.php");
	
	if(array_key_exists("error", $_GET)){
		$error = $_GET['error'];
		if($error == "sina"){
			$smarty->assign("othererror", "新浪微博登录认证错误，请重试！");
		}
		if($error == "tencent"){
			$smarty->assign("othererror", "QQ登录认证错误，请重试！");
		}
	}else{
		$smarty->assign("othererror", "");
	}
	
	$smarty->assign("loginInfo", "");
	$smarty->assign("logintem", "loginForm.tpl");
	$smarty->assign("sinaauthurl", $code_url);
	$smarty->assign("tencenturl", $tencentCallBack);
}

$smarty->display("login.tpl");

?>
