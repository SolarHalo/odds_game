<?php
require '../../configs/load.php';
include BASE_HOME.'includes/Administrator.class.php';

$result = true;

if(array_key_exists('username', $_POST) && array_key_exists('password', $_POST)){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$admindb = new Administrator($dbutil);
	$result = $admindb->checkLogin($username, encodePassword($password));
	if($result){
		$_SESSION['administrator'] = $result;
		header("Location: index.php");
	}
}

$smarty->assign("modulename", "后台登陆");

if($result == false){
	$smarty->assign("error", true);
}else{
	$smarty->assign("error", false);
}

$smarty->display("admin/login.tpl");
?>