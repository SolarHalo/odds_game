<?php
include '../configs/load.php';
include BASE_HOME."includes/IboUser.class.php";

$method = $_GET['method'];

if($method == "checkemail"){
	$email = $_GET['email'];
	$userdb = new IboUser($dbutil);
	$re = $userdb->checkEmailUnique($email);
	if($re){
		echo "yes";
	}else{
		echo "no";
	}
	exit(0);
}

if($method == "checkcode"){
	$code = $_GET['code'];
	$vcode = $_SESSION['VerifyCode'];
	if(strtolower($code) == strtolower($vcode)){
		echo "yes";
	}else{
		echo "no";
	}
	exit(0);
}

if($method == "register"){
	$email = $_GET['email'];
	$pass = $_GET['pass'];
	$userdb = new IboUser($dbutil);
	$userdb->addUser($email, $pass);
	echo "yes";
	exit(0);
}
?>