<?php
include "../configs/load.php";
include BASE_HOME."includes/IboUser.class.php";


$smarty->assign("urlroot" , urlroot);
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
	$smarty->assign("loginInfo", "");
	$smarty->assign("logintem", "loginForm.tpl");
}

$smarty->display("login.tpl");

?>