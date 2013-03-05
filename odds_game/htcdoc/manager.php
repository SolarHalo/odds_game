<?php
include "../configs/load.php";
include BASE_HOME."/includes/IboBet.class.php";

$user = $_SESSION['user'];

$betdb = new IboBet($dbutil);

$bets = $betdb->getAllBet4User($user->user_email);

$betsHistory = $betdb->getAllBetHistory4User($user->user_email);

if($user){
	$smarty->assign("ownmoney" , $user->user_vmoney);
	$smarty->assign("username" , $user->user_email);
	$smarty->assign("name" , $user->user_name);
	$smarty->assign("userid" , $user->user_id);
	
}else{
// 	$smarty->assign("ownmoney" , "未登录");
// 	$smarty->assign("name" , "222");
// 	$smarty->assign("userid" ,"1");
}
$rooturl ="";
$smarty->assign("urlroot" , $rooturl);
$smarty->assign("betsData", $bets);
$smarty->assign("betsHistoryData", $betsHistory);
$smarty->display("manager.tpl");

?>
