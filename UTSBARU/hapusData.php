<?php 
	include "koneksi.php";

	$id_002 = $_GET['id_002'];

	$query = "DELETE FROM tbl_002 WHERE id_002 = '$id_002'";
	$sql   = mysqli_query($konek, $query);
	if ($sql) {
		echo "<script>alert('Berhasil menghapus data');window.location = 'dataRosita.php'</script>";
	}else{
		echo "Gagal menghapus data ke database";
		echo "<br><a href = 'dataRosita.php'>Kembali ke form Data Masukan</a>";
	}
?>