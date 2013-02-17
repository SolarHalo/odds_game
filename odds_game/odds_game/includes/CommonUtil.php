<?php
function encodePassword($password){
	return md5($password."iboadmin");
}
?>