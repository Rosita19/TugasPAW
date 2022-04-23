<?php 
	include "koneksi.php";

	if (isset($_POST['submit'])) {
		$id_002		= $_GET['id_002'];
		$nama_002 	= $_POST['nama_002'];
		$email_002	= $_POST['email_002'];

		$query 	= "UPDATE tbl_002 SET nama_002 = '$nama_002', email_002 = '$email_002' WHERE id_002 = '$id_002'";
		$sql	= mysqli_query($konek, $query);
		if ($sql) {
			echo "<script>alert('Berhasil mengupdate data');window.location = 'dataRosita.php'</script>";
		}else{
			echo "Gagal menginputkan data ke database";
			echo "<br><a href = 'ubahData.php'>Kembali ke form Ubah</a>";
		}
	}
?>