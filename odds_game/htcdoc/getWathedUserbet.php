<?php
include "../configs/load.php";
include BASE_HOME."includes/IboUser.class.php";

$notlogin = false;
$userbets = array();
if(isset($_SESSION['user'])){
	$user = $_SESSION['user'];
	$userdb = new IboUser($dbutil);
	$result = $userdb->getLastThreeBetWathedUser($user->user_id);
	
	foreach ($result as $re){
		if(isset($userbets[$re->user_id])){
			$userbets[$re->user_id][] = $re;
		}else{
			$userbets[$re->user_id] = array();
			$userbets[$re->user_id][] = $re;
		}
	}
	$smarty->assign("userbets", $userbets);
}else{
	$notlogin = true;
}
$smarty->assign("notlogin", $notlogin);
$smarty->assign("userbets", $userbets);
$smarty->display("watheduser.tpl");
?>

