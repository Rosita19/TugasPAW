<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form Edit Buku</title>
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
	<center><h2>Form Edit Buku</h2></center>
	<?php
		include "koneksi.php";

		$kd_buku = $_GET['kd_buku'];

		$query = "SELECT *FROM tbl_002 WHERE kd_buku='".$kd_buku."'";
		$sql = mysqli_query($konek, $query);
		$data = mysqli_fetch_array($sql);
	?>
	<form method="post" action="proses_EditBuku.php?kd_buku=<?php echo $kd_buku; ?>"> 
		<div class="form-group" style="padding: 20px;">
			<label class="col-md-3 control-label" for="demo-text-input">Judul Buku</label>
			<div class="col-md-9">
				<input type="text" name="judul_buku" id="demo-text-input" class="form-control" value="<?= $data['judul_buku'];?>">
			</div>
		</div>
		<div class="form-group" style="padding: 20px;">
			<label class="col-md-3 control-label" for="demo-text-input">Pengarang</label>
			<div class="col-md-9">
				<input type="text" name="pengarang" id="demo-text-input" class="form-control" value="<?= $data['pengarang'];?>">
			</div>
		</div>
		<div class="form-group" style="padding:20px;">
			<label class="col-md-3 control-label" for="demo-text-input">Penerbit</label>
			<div class="col-md-9">
				<input type="text" name="penerbit" id="demo-text-input" class="form-control" value="<?= $data['penerbit'];?>">
			</div>
		</div>
		<div class="form-group" style="padding:20px;">
			<label class="col-md-3 control-label" for="demo-year-input">Tahun</label>
			<div class="col-md-9">
				<input type="year" name="tahun" id="demo-year-input" class="form-control" value="<?= $data['tahun'];?>">
			</div>
		</div>
		<div class="form-group" style="padding:20px;">
			<label class="col-md-3 control-label" for="demo-number-input">Harga Buku</label>
			<div class="col-md-9">
				<input type="number" name="harga" id="demo-number-input" class="form-control" value="<?= $data['harga'];?>">
			</div>
		</div>
		<div class="form-group" style="padding:20px;">
			<input type="submit" name="submit" value="Simpan" class="btn btn-primary">
			<a href="dataBuku.php"><input type="button" value="Batal" class="btn btn-primary">
		</div>
	</form>

</body>
</html>