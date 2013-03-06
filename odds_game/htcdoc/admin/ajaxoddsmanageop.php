<?php
include '../../configs/load.php';
include BASE_HOME."includes/IboEvent.class.php";
include BASE_HOME."includes/IboBet.class.php";



$method = $_GET['method'];
if($method=='getEventUserBet'){
	$event_id = $_GET['event_id'];
	$event = new IboEvent($dbutil);
	$users = $event->getEventUserBet($event_id);
	echo $users=json_encode($users);
}else if($method=='getEventOddsHistory'){
	$event_id = $_GET['event_id'];
	$event = new IboEvent($dbutil);
	$historyscores = $event->getEventOddsHistory($event_id);
	echo $historyscores=json_encode($historyscores);
}else if($method=='getUserHistoryBet'){
	$username = $_GET['useremail'];
	$IboBet = new IboBet($dbutil);
	$userHistoryBets = $IboBet->getUserHistoryBet($username);
	echo $userHistoryBets=json_encode($userHistoryBets);
}
?>