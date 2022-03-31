<?php 
	include "koneksi.php";

	if (isset($_POST['submit'])) {
		$kd_buku	= $_POST['kd_buku'];
		$judul_buku	= $_POST['judul_buku'];
		$pengarang	= $_POST['pengarang'];
		$penerbit	= $_POST['penerbit'];
		$tahun		= $_POST['tahun'];
		$harga		= $_POST['harga'];

		$query = "INSERT INTO tbl_002 (kd_buku, judul_buku, pengarang, penerbit, tahun, harga) VALUES ('".$kd_buku."', '".$judul_buku."', '".$pengarang."', '".$penerbit."', '".$tahun."', '".$harga."')";
		$sql = mysqli_query($konek, $query);
		if ($sql) {
		 	echo "<script>alert('Berhasil Menginput Data');window.location = 'dataBuku.php'</script>";
		 }else{
		 	echo "Terjadi kesalahan saat masuk database";
		 	echo "</br><a href = 'index.php'>Kembali ke form Input Buku</a>";
		 }
	}
?>