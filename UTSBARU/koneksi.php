<?php 
	$host 	= "localhost";
	$user 	= "root";
	$pass 	= "";
	$db	  	= "db_rosita";
	$konek	= mysqli_connect($host, $user, $pass, $db);
	if (!$konek) {
		echo "Gagal Melakukan Login";
	}
?>