<?php
include "../configs/load.php";

$smarty->assign("wolrd" , "wolrd");
$smarty->assign("domainname" , DOMAIN_HOME);
$smarty->display("admin/index.tpl");
?>