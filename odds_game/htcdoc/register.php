<?php
include "../configs/load.php";

$smarty->assign("urlroot" , $rooturl);
$smarty->display("register.tpl");

?>