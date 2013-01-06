<?php
include '../../configs/load.php';
include BASE_HOME."includes/Administrator.class.php";

$method = $_GET['method'];

if($method == 'addadmin'){
	$username = $_GET['username'];
	$password = $_GET['password'];
	$admindb = new Administrator($dbutil);
	$user = $admindb->getAdminByName($username);
	if($user){
		echo "error";
	}else{
		$admindb->addAdmin(array('admin_name'=>$username, 'admin_passwd'=>encodePassword($password)));
		echo "success";
	}
	exit(0);
}else if($method == 'updateadmin'){
	$username = $_GET['username'];
	$password = $_GET['password'];
	$admindb = new Administrator($dbutil);
	$admindb->updateAdmin(array('admin_passwd'=> encodePassword($password)), $username);
	echo "success";
	exit(0);
}elseif ($method == 'deleteadmin'){
	$username = $_GET['username'];
	$admindb = new Administrator($dbutil);
	$admindb->deleteAdmin($username);
	echo "success";
	exit(0);
}

?>