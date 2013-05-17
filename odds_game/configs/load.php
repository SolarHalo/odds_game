<?php
session_start(); 
require 'config.php';

require BASE_HOME.'includes/DBUtil.class.php';
include BASE_HOME.'includes/setup.php';
include BASE_HOME.'includes/CommonUtil.php';

$dbutil = new DbUtil(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

$smarty = new Smarty_Ibo();

$smarty->assign("domainname", DOMAIN_HOME);
$smarty->assign("urlroot", URL_ROOT); 
//add user for header start
if(array_key_exists("user", $_SESSION)){
	$user = $_SESSION['user'];
	$username = "";
	if($user->user_name){
		$username = $user->user_name;
	}else{
		$username = $user->user_email;
	}
	$smarty->assign("ownmoney" , $user->user_vmoney);
	$smarty->assign("username" , $username); 
}
else{
	if(isset($_COOKIE['usermsg'])){
		$loginmsg = $_COOKIE['usermsg'];
		$loginmsg = json_decode($loginmsg);
		$check = checkLoginState($loginmsg->email, passport_decrypt($loginmsg->key, COOKIEENCRYPTKEY), $dbutil);
		if(!is_int($check)){
			$user = $_SESSION['user'];
			$username = "";
			if($user->user_name){
				$username = $user->user_name;
			}else{
				$username = $user->user_email;
			}
			$smarty->assign("ownmoney" , $user->user_vmoney);
			$smarty->assign("username" , $username); 
		}
	}else{
		$smarty->assign("ownmoney" , "未登录");
	}
}
//end

//开启session


?>
