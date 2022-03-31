<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form Input Buku</title>
	<link rel="shortcut icon" href="img/favicon.ico">
	<!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--Jasmine Stylesheet [ REQUIRED ]-->
    <link href="css/style.css" rel="stylesheet">
    <!--Font Awesome [ OPTIONAL ]-->
    <link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!--Switchery [ OPTIONAL ]-->
    <link href="plugins/switchery/switchery.min.css" rel="stylesheet">
    <!--Switchery [ OPTIONAL ]-->
    <link href="plugins/jvectormap/jquery-jvectormap.css" rel="stylesheet">
    <!--Bootstrap Select [ OPTIONAL ]-->
    <link href="plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet">
    <!--Bootstrap Validator [ OPTIONAL ]-->
    <link href="plugins/bootstrap-validator/bootstrapValidator.min.css" rel="stylesheet">
    <!--Demo [ DEMONSTRATION ]-->
    <link href="css/demo/jquery-steps.min.css" rel="stylesheet">
    <!--Demo [ DEMONSTRATION ]-->
    <link href="css/demo/jasmine.css" rel="stylesheet">
    <!--SCRIPT-->
    <!--=================================================-->
    <!--Page Load Progress Bar [ OPTIONAL ]-->
    <link href="plugins/pace/pace.min.css" rel="stylesheet">
    <script src="plugins/pace/pace.min.js"></script>
</head>
<body>
	<center><h2 style="font-family: Times New Roman;">Tabel Daftar Buku</h2></center>
	<div class="table-responsive">
		<table class="table table-striped">
			<tr>
				<th>Kode Buku</th>
				<th>Judul Buku</th>
				<th>Pengarang Buku</th>
				<th>Penerbit Buku</th>
				<th>Tahun Terbit</th>
				<th>Harga Buku</th>
				<th colspan="2">Action</th>
			</tr>
				<?php
					include "koneksi.php";

					$query = "SELECT *FROM tbl_002";
					$sql = mysqli_query($konek, $query);

					while ($data = mysqli_fetch_array($sql)) {
						echo "<tr>";
						echo "<td>".$data['kd_buku']."</td>";
						echo "<td>".$data['judul_buku']."</td>";
						echo "<td>".$data['pengarang']."</td>";
						echo "<td>".$data['penerbit']."</td>";
						echo "<td>".$data['tahun']."</td>";
						echo "<td>".$data['harga']."</td>";
						echo "<td><a href='hapusDataBuku.php?kd_buku=".$data['kd_buku']."' class = 'btn btn-danger'>Hapus</a></td>";
						echo "<td><a href='form_EditBuku.php?kd_buku=".$data['kd_buku']."' class = 'btn btn-success'>Ubah</a></td>";
					}
				?>
		</table>
		<center><a href="index.php"><input type="submit" name="submit" value="Tambah Data" class="btn btn-primary"></center>
	</div>
</div>


</body>
</html>