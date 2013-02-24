<?php
include "../configs/load.php";
include BASE_HOME."/includes/IboEvent.class.php";


$eventdb = new IboEvent($dbutil);

$events = $eventdb->getAllEvent(null,null,null,null);

$user = $_SESSION['user'];
if($user){
	$smarty->assign("ownmoney" , $user->user_vmoney);
	$smarty->assign("username" , $user->user_email);
}else{
	$smarty->assign("ownmoney" , "未登录");
}

$smarty->assign("urlroot" , $rooturl);
$smarty->assign("events", $events);
$smarty->display("index.tpl");

?>
