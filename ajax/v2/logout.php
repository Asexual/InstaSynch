<?php
	require "cors.php";
	setcookie("username", "", time() - (60*60*24*7), "/",".instasynch.com");
	setcookie("sessionid", "", time() - (60*60*24*7), "/",".instasynch.com");
?>