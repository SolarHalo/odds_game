<?php
require 'config.php';
session_start(); 
require BASE_HOME.'includes/DBUtil.class.php';
include BASE_HOME.'includes/setup.php';
include BASE_HOME.'includes/CommonUtil.php';

$dbutil = new DbUtil(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

$smarty = new Smarty_Ibo();

$smarty->assign("domainname", DOMAIN_HOME);
$smarty->assign("urlroot", URL_ROOT); 
//add user for header start
$user = $_SESSION['user'];
if($user){
	$smarty->assign("ownmoney" , $user->user_vmoney);
	$smarty->assign("username" , $user->user_email); 
}else{
	$smarty->assign("ownmoney" , "未登录");
}
//end

//开启session


?>
