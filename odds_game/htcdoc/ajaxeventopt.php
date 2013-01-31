<?php
include '../configs/load.php';
include BASE_HOME."includes/IboEvent.class.php";

$method = $_GET['method'];
$user = $_SESSION['user'];

if($method == 'getAllEvent'){
	$eventdb = new IboEvent($dbutil);
	$events = $eventdb->getAllEvent();
	$smarty->assign("events", $events);
	echo $smarty->fetch("eventtable.tpl", false);
	exit(0);
}

if($method == 'betevent'){
	if(!$user){
		echo "您还未登录，请先登录！";
		exit(0);
	}
	$mybets = $_GET['betodd'];
	$eventdb = new IboEvent($dbutil);
	foreach ($mybets as $key => $mybet){
		foreach ($mybet as $bet){
			$data = array('event_id'=> $key, 'odds_name'=>$bet['oddname'], 'user_name'=> $user->user_email,
							'bet_time'=>date("c"), 'bet_vmoney'=> $bet['betmoney'], 'bet_odd'=> $bet['odd']);
			$eventdb->setBet($data);
		}
	}
	echo "投注已保存成功！";
	exit(0);
}
?>