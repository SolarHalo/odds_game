<?php
include "../configs/load.php";
include BASE_HOME."includes/IboEvent.class.php";
include BASE_HOME."includes/IboBet.class.php";
include BASE_HOME."includes/IboOdds.class.php";

$eventid = $_GET['eventid'];

$eventDb = new IboEvent($dbutil);
$betDb = new IboBet($dbutil);

$event = $eventDb->getEventById($eventid);
$betStatistics = $betDb->getBetStatisticByEventId($eventid);

$betStatisticsorder = array();
//按照胜平负排序
if(!empty($betStatistics)){
	$i = 0;
	foreach($betStatistics as $key=>$betStatistic){
		if($betStatistic->odds_name == '胜'){
			$betStatisticsorder[0]=$betStatistic;
		}else if($betStatistic->odds_name == '平'){
			$betStatisticsorder[1]=$betStatistic;
		}else{
			$betStatisticsorder[2]=$betStatistic;
		}
	}
	ksort($betStatisticsorder);
}

$smarty->assign('event',$event);
$smarty->assign('betStatistics',$betStatisticsorder);


$smarty->display("singleeventmsg.tpl");
?>