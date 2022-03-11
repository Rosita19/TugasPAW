<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tugas 1 PAW</title>
</head>
<body>
	<?php
	function Luas_Persegi($panjang, $lebar) { //membuat fungsi luas persegi dengan parameter panjang dan lebar
		$luas = $panjang * $lebar; //membuat variable luas untuk mengoperasikan parameter panjang dan lebar
		return $luas; //untuk menghitung hasil dari pengoperasian di variable luas
	}
	
	echo "Menghitung luas persegi panjang";
	echo "<br>";	
	echo "Luas Persegi Panjang  yang memiliki panjang 10 dan lebar 5 adalah ".Luas_Persegi(10, 5); //menampilkan luas dari persegi panjang yang memiliki panjang 10 lebar 5
	echo "<br>";
	echo "Luas Persegi Panjang  yang memiliki panjang 25 dan lebar 4 adalah ".Luas_Persegi(25, 4); //menampilkan luas dari persegi panjang yang memiliki panjang 25 lebar 4
	echo "<br>";
	echo "Luas Persegi Panjang  yang memiliki panjang 8 dan lebar 2 adalah ".Luas_Persegi(8, 2); //menampilkan luas dari persegi panjang yang memiliki panjang 8 lebar 2
	?>
</body>
</html>
