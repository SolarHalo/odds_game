<?php
include "../../configs/load.php";
include BASE_HOME."includes/Administrator.class.php";

$mgtype = false;
if(array_key_exists('type', $_GET)){
	$mgtype = $_GET['type'];
}else{
	$mgtype = 'user';
}

//if(!array_key_exists('administrator', $_SESSION)){
//	header("Location: login.php");
//}



//$admin_user = $_SESSION['administrator'];

$smarty->assign("currentnav" , "usermanage");
$smarty->assign("mgtype", $mgtype);

if($mgtype == 'user'){
	$smarty->assign("managetpl", "admin/normalusermanage.tpl");
}else if($mgtype == 'admin'){
	$smarty->assign("managetpl", "admin/adminusermanage.tpl");
}

if($mgtype == 'admin'){
	$admindb = new Administrator($dbutil);
	$admins = $admindb->getAllAdmins();
	$smarty->assign('admins', $admins);
}elseif ($mgtype == 'user'){
	$admindb = new Administrator($dbutil);
	$users = $admindb->getAllUsers();
	$smarty->assign('users',$users);
}

$smarty->assign("modulename","用户管理首页");
$smarty->display("admin/usermanage.tpl");
?>