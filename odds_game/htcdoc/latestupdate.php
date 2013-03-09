<?php
include "../configs/load.php";
include BASE_HOME.'includes/Latestupdate.class.php';


$smarty->assign("mainmenu" , "latestupdate");

$latestupdate = new Latestupdate($dbutil);

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
	$smarty->assign("ownmoney" , "未登录");
}

if (array_key_exists("user", $_SESSION)){
	$user = $_SESSION['user'];
	$userid = $user->user_id;
	$watchid = $user->watchid;
	$lastbets = $latestupdate->LoginGetLatestBets($watchid);
}else{
	$userid = 4;
	$lastbets = $latestupdate->noLoginGetLatestBets();
}
$smarty->assign("userid" , $userid); 
$smarty->assign("latestBets", $lastbets);
$smarty->display("latestupdate.tpl");
?>