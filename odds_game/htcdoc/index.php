<?php
include "../configs/load.php";
include BASE_HOME."/includes/IboEvent.class.php";


$eventdb = new IboEvent($dbutil);

$events = $eventdb->getAllEvent(null,null,null,null);
$smarty->assign("mainmenu" , "gamecenter"); 
 
$smarty->assign("events", $events);
$smarty->display("index.tpl");

?>
