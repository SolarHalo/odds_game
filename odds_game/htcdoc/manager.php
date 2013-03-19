<?php
include "../configs/load.php";
include BASE_HOME."/includes/IboBet.class.php";
include BASE_HOME.'includes/Latestupdate.class.php';

$type = $_GET['type'];
if($type == null){
	$type = "all";
}

$user = $_SESSION['user'];
if($user==null){
	echo "<script language='javascript' type='text/javascript'>";
	echo "window.location.href='".URL_ROOT."'";
	echo "</script>";
	exit(0);
}

$betdb = new IboBet($dbutil);
$bets = null;
$betsHistory = null;
if($type =="now"||$type =="all"){
	$bets = $betdb->getAllBet4User($user->user_email,$type == "now");
}
if($type =="his"||$type =="all"){
	$betsHistory = $betdb->getAllBetHistory4User($user->user_email,$type == "his");
}
if($user){
	$smarty->assign("ownmoney" , $user->user_vmoney);
	$smarty->assign("username" , $user->user_name);
	//$smarty->assign("name" , $user->user_email);
	$smarty->assign("userid" , $user->user_id);
	$smarty->assign("userphoto" ,$user->user_photo );
	$smarty->assign("type" ,$type );
	$latestupdate = new Latestupdate($dbutil);
	$fans = $latestupdate->getUersFans($user->user_id);
	$superStars = $latestupdate->getUersSuperStar($user->user_id);
	$smarty->assign("fans",$fans);
	$smarty->assign("superStars",$superStars);
	
}else{
// 	$smarty->assign("ownmoney" , "未登录");
// 	$smarty->assign("name" , "222");
// 	$smarty->assign("userid" ,"1");
}

$smarty->assign("betsData", $bets);
$smarty->assign("betsHistoryData", $betsHistory);
$smarty->display("manager.tpl");

?>
