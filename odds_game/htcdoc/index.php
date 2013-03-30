<?php
include "../configs/load.php";
include BASE_HOME."/includes/IboEvent.class.php";
include BASE_HOME."/includes/Ranking.class.php";


$eventdb = new IboEvent($dbutil);
$rankdb = new IboRanking($dbutil);

$events = $eventdb->getAllEvent(null,null,null,null);
$smarty->assign("mainmenu" , "gamecenter"); 

$weekRanks = $rankdb->getWeekRanking();
$monthRanks = $rankdb->getMonthRanking();
$totalRanks = $rankdb->getTotalRanking();

$smarty->assign("weekranks" , $weekRanks); 
$smarty->assign("monthranks" , $monthRanks); 
$smarty->assign("totalranks" , $totalRanks); 
 
$smarty->assign("events", $events);
$smarty->display("index.tpl");

?>
