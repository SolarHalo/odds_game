<?php
require_once("../includes/qqapi/qqConnectAPI.php");
$qc = new QC();
$token = $qc->qq_callback();
$openid = $qc->get_openid();
$qc2 = new QC($token, $openid);
$att = $qc2->get_user_info();
print_r($att);
?>