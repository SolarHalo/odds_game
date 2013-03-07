<?php
include "../configs/load.php";
include BASE_HOME."/includes/IboBet.class.php";

$type = $_GET['type'];
if($type == null){
	$type = "all";
}

$user = $_SESSION['user'];

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
}else{
// 	$smarty->assign("ownmoney" , "未登录");
// 	$smarty->assign("name" , "222");
// 	$smarty->assign("userid" ,"1");
}
$smarty->assign("urlroot" , $rooturl);
$smarty->assign("betsData", $bets);
$smarty->assign("betsHistoryData", $betsHistory);
$smarty->display("manager.tpl");

?>
