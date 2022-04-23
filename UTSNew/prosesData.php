<?php 
	include "koneksi.php";

	if (isset($_POST['submit'])) {
		$id_002		= $_POST['id_002'];
		$nama_002 	= $_POST['nama_002'];
		$email_002	= $_POST['email_002'];

		$query 	= "INSERT INTO tbl_002 (id_002, nama_002, email_002) VALUES ('".$id_002."', '".$nama_002."', '".$email_002."')";
		$sql	= mysqli_query($konek, $query);
		if ($sql) {
			echo "<script>alert('Berhasil menginputkan data');window.location = 'dataRosita.php'</script>";
		}else{
			echo "Gagal menginputkan data ke database";
			echo "<br><a href = 'index.php'>Kembali ke form input</a>";
		}
	}
?>