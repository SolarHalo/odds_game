<?php
session_start();
unset($_SESSION['user']);
setcookie("usermsg", "", time() -3600);

header("Location: index.php")
?>