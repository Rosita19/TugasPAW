<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tugas 1 PAW</title>
</head>
<body>
	<?php
	$a1 = 10; //membuat variable a1 yang memiliki value 10
	$a2 = 5; //membuat variable a2 yang memiliki value 5
	$a3 = 2; //membuat variable a3 yang memiliki value 2
	$tambah = $a1 + $a2 + $a3; //membuat variable tambah untuk mengoperasikan penjumlahan
	$kurang = $a1 - $a2 - $a3; //membuat variable kurang untuk mengoperasikan pengurangan
	$kali = $a1 * $a2 *$a3; //membuat variable kali untuk mengoperasikan perkalian
	$hasil = ($a1 * $a2) - $a3; //membuat variable hasil untuk mengoperasikan perkalian dan pengurangan

	echo "Operasi Aritmatika <br>";
	echo "Angka $a1 ditambah $a2 ditambah $a3 = $tambah <br>"; //menampilkan variable $tambah
	echo "Angka $a1 dikurangi $a2 dikurangi $a3 = $kurang <br>"; //menampilkan variable $kurang
	echo "Angka $a1 dikali $a2 dikali $a3 = $kali <br>"; //menampilkan variable $kali
	echo "Angka $a1 dikali $a2 dikurangi $a3 = $hasil <br>"; //menampilkan variable $hasil
	?>

</body>
</html>