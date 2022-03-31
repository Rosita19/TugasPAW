<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db   = "rosita";
	$konek = mysqli_connect($host, $user, $pass, $db);
	if(!$konek) die('gagal mengkoneksikan');
?>