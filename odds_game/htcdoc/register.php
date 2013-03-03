<?php
include "../configs/load.php";

$smarty->assign("urlroot" , urlroot);
$smarty->display("register.tpl");

?>