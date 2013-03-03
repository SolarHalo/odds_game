<?php
include "../configs/load.php";
include BASE_HOME."/includes/IboEvent.class.php";


$eventdb = new IboEvent($dbutil);

$events = $eventdb->getAllEvent(null,null,null,null);

$user = $_SESSION['user'];
if($user){
	$smarty->assign("ownmoney" , $user->user_vmoney);
	$smarty->assign("username" , $user->user_email);
	$smarty->assign("mainmenu" , "gamecenter");
}else{
	$smarty->assign("ownmoney" , "未登录");
}

$smarty->assign("urlroot" , urlroot);
$smarty->assign("events", $events);
$smarty->display("index.tpl");

?>
