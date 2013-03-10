<?php
include "../configs/load.php";
include BASE_HOME.'includes/Latestupdate.class.php';


$smarty->assign("mainmenu" , "latestupdate");

$latestupdate = new Latestupdate($dbutil);

if (array_key_exists("user", $_SESSION)){
	$user = $_SESSION['user'];
	$userid = $user->user_id;
	$lastbets = $latestupdate->LoginGetLatestBets($userid);
}else{
	$lastbets = $latestupdate->noLoginGetLatestBets();
}
$smarty->assign("userid" , $userid); 
$smarty->assign("latestBets", $lastbets);
$smarty->display("latestupdate.tpl");
?>