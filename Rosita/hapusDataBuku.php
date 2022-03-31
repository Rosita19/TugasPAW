<?php 
	include "koneksi.php";

	$kd_buku = $_GET['kd_buku'];

	$query = "DELETE FROM tbl_002 WHERE kd_buku = '$kd_buku'";
	$sql = mysqli_query($konek, $query);
	if ($sql) {
		echo "<script>alert('Berhasil Menghapus Data');window.location = 'dataBuku.php'</script>";
	}else{
		echo "Gagal menghapus";
		echo "</br><a href = 'hapusDataBuku.php'>Kembali ke dataBuku</a>";
	}
?>