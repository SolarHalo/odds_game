<?php
/**
 * 开发要求：
 * get传参数1个，为eventid，获取赛事相关内容展示。
 * 
 * ajax投注，可参考主页投注方式，传送urlajaxeventopt.php， 参数格式为：{'method': 'betevent', 'betodd' :betodd}，
 * 其中betodd 格式为： betodd[eid][oddname] = {'odd': odd, 'oddname': oddname, 'betmoney': m}
 * betodd为二维数组，eid为eventid，oddname为主胜或负，内容为odd倍率，betmoney投注金额
 */
include "../configs/load.php";
include BASE_HOME."includes/IboEvent.class.php";
include BASE_HOME."includes/IboBet.class.php";
include BASE_HOME."includes/IboOdds.class.php";

$eventid = $_GET['eventid'];

$eventDb = new IboEvent($dbutil);
$betDb = new IboBet($dbutil);
$oddsDb = new IboOdds($dbutil);

$event = $eventDb->getEventById($eventid);
$betStatistics = $betDb->getBetStatisticByEventId($eventid);


$historyOdds = $oddsDb->getHistoryOddsByEventId($eventid);
$currentOdd = $oddsDb->getOddsByEventId($eventid);

array_push($historyOdds,$currentOdd);


$historyOdds = json_encode($historyOdds);
$smarty->assign("mainmenu" , "gamecenter"); 
$smarty->assign('event',$event);
$smarty->assign('betStatistics',$betStatistics);
$smarty->assign('oddsdata',$historyOdds);

$smarty->display("singleevent.tpl");

?>