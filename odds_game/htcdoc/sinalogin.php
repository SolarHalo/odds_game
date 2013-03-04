<?php
$code = $_GET['code'];

header("client_id: 995123813");
header("client_secret: 9c0a16dd718ee29b2278342230e6ed2a");
header("Location: https://api.weibo.com/oauth2/access_token?grant_type=".$code."&redirect_uri=http://www.ibo123.com/odds_game/htcdoc/sinaloginsuccess.php&code=CODE");
?>