<?php 

	include "koneksi.php";

	if (isset($_POST['submit'])) {
		$kd_buku	= $_GET['kd_buku'];
		$judul_buku	= $_POST['judul_buku'];
		$pengarang	= $_POST['pengarang'];
		$penerbit	= $_POST['penerbit'];
		$tahun		= $_POST['tahun'];
		$harga		= $_POST['harga'];

		$query = "UPDATE tbl_002 SET judul_buku = '$judul_buku', pengarang = '$pengarang', penerbit = '$penerbit', tahun = '$tahun', harga = '$harga' WHERE kd_buku = '$kd_buku'";
		$sql = mysqli_query($konek, $query);
		if ($sql) {
		    	echo "<script>alert('Berhasil Mengedit Data');window.location = 'dataBuku.php'</script>";
		    }else{
		    	echo "Terjadi kesalahan saat melakukan pengeditan";
		    	echo "</br><a href = 'form_EditBuku.php'>Kembali ke form edit</a>";
		    }    
	}
?>