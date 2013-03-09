<?php
include '../configs/load.php';
include BASE_HOME."/includes/Latestupdate.class.php";

$method = $_GET['method'];

if($method == 'followUser'){
	$fans = $_GET['fans'];
	$superStar = $_GET['superStar'];
	$latestupdate = new Latestupdate($dbutil);
	echo $fans."xxxxxxxxx".$superStar;
	$watch = $latestupdate->userFollow($fans,$superStar);
	if($watch){
		echo "error";
	}else{
		$admindb->addAdmin(array('admin_name'=>$username, 'admin_passwd'=>encodePassword($password)));
		echo "success";
	}
	
}

?>