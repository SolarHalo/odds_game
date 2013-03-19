<?php
include "../configs/load.php";
include BASE_HOME."/includes/IboBet.class.php";
include BASE_HOME.'includes/Latestupdate.class.php';
include BASE_HOME.'includes/IboUser.class.php';

$spaceuid = $_GET['uid'];
$userdb = new IboUser($dbutil);
$spaceuser = $userdb->getUserById($spaceuid);
$spaceemail = $spaceuser->user_email;
$spacetype = $_GET['spacetype'];
if($spacetype == null){
	$spacetype = "all";
}

if($spaceuser==null){
	echo "<script language='javascript' type='text/javascript'>";
	echo "window.location.href='".URL_ROOT."'";
	echo "</script>";
	exit(0);
}

$betdb = new IboBet($dbutil);
$spacebets = null;
$spacebetsHistory = null;
if($spacetype =="now"||$spacetype =="all"){
	$spacebets = $betdb->getAllBet4User($spaceuser->user_email,$spacetype == "now");
}
if($spacetype =="his"||$spacetype =="all"){
	$spacebetsHistory = $betdb->getAllBetHistory4User($spaceuser->user_email,$spacetype == "his");
}
if($user){
	$smarty->assign("spaceownmoney" , $spaceuser->user_vmoney);
	$smarty->assign("spaceusername" , $spaceuser->user_name);
	//$smarty->assign("name" , $user->user_email);
	$smarty->assign("spaceuserid" , $spaceuser->user_id);
	$smarty->assign("spaceuserphoto" ,$spaceuser->user_photo );
	$smarty->assign("spacetype" ,$spacetype );
	$latestupdate = new Latestupdate($dbutil);
	$spacefans = $latestupdate->getUersFans($spaceuser->user_id);
	$spacesuperStars = $latestupdate->getUersSuperStar($spaceuser->user_id);
	$smarty->assign("spacefans",$spacefans);
	$smarty->assign("spacesuperStars",$spacesuperStars);
	
}else{
// 	$smarty->assign("ownmoney" , "未登录");
// 	$smarty->assign("name" , "222");
// 	$smarty->assign("userid" ,"1");
}

$smarty->assign("spacebetsData", $spacebets);
$smarty->assign("spacebetsHistoryData", $spacebetsHistory);
$smarty->display("space.tpl");

?>
