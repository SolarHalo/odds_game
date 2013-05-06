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

$smarty->assign('event',$event);
$smarty->assign('betStatistics',$betStatistics);


$smarty->display("singleeventmsg.tpl");
?>