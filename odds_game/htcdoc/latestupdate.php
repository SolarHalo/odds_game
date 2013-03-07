<?php
include "../configs/load.php";
include BASE_HOME.'includes/IboBet.class.php';
 
$smarty->assign("urlroot" , $urlroot);
$smarty->assign("mainmenu" , "latestupdate");

$betdb = new IboBet($dbutil);
$lastbets = $betdb->getLastBet();
$smarty->assign("lastbets", $lastbets);
$smarty->display("latestupdate.tpl");
?>