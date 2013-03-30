<?php
include '../configs/load.php';
include BASE_HOME."/includes/Latestupdate.class.php";

$method = $_GET['method'];

if($method == 'followUser'){
	$fans = $_GET['fans'];
	$superStar = $_GET['superStar'];
	$latestupdate = new Latestupdate($dbutil);
	$watch = $latestupdate->userFollow($fans,$superStar);
	if($watch){
		echo "success";
		exit(0);
	}else{
		echo "error";
		exit(0);
	}
}

if($method == 'unFollowUser'){
	$fans = $_GET['fans'];
	$superStar = $_GET['superStar'];
	$latestupdate = new Latestupdate($dbutil);
	$latestupdate->userUnFollow($fans,$superStar);
	echo "success";
}

?>