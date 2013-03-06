<?php
include "../configs/load.php";
 
$smarty->assign("urlroot" , $urlroot);
$smarty->assign("mainmenu" , "latestupdate");
$smarty->display("latestupdate.tpl");
?>