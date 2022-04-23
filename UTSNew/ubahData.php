<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>UTS PAW</title>
</head>
<body>
	<center><h1><b>Form Ubah Data</b></h1></center>
	<?php 
		include "koneksi.php";

		$id_002 = $_GET['id_002'];
		$query	= "SELECT * FROM tbl_002 WHERE id_002 = '".$id_002."'";
		$sql	= mysqli_query($konek, $query);
		$data	= mysqli_fetch_array($sql);
	?>
	<form action="prosesUbah.php?id_002=<?php echo $id_002;?>" method="post">
		<center><table border="0">
			<tr><td>Nama 002</td>
				<td><input type="text" name="nama_002" placeholder="Nama 002" style="padding-right: 50px;" value="<?=$data['nama_002'];?>"></td></tr>
			<tr><td>Email 002</td>
				<td><input type="text" name="email_002" placeholder="Email 002" style="padding-right: 50px;" value="<?=$data['email_002'];?>"></td></tr>
			<tr>
				<td><input type="submit" name="submit" value="Simpan">
				<a href="dataRosita.php"><input type="button" value="Batal"></a></td>
			</tr>
		</table>
	</form></center>

</body>
</html>