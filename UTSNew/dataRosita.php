<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>UTS PAW</title>
</head>
<body>
	<center><h1><b>Daftar Data Masukan</b></h1></center>
	<center><table border="1" style="width: 100%;">
		<tr>
			<th>Id 002</th>
			<th>Nama 002</th>
			<th>Email 002</th>
			<th colspan="2">Action</th>

			<?php
					include "koneksi.php";

					$query = "SELECT * FROM tbl_002";
					$sql = mysqli_query($konek, $query);

					while ($data = mysqli_fetch_array($sql)) {
						echo "<tr>";
						echo "<td>".$data['id_002']."</td>";
						echo "<td>".$data['nama_002']."</td>";
						echo "<td>".$data['email_002']."</td>";
						echo "<td><a href='hapusData.php?id_002=".$data['id_002']."'>Hapus</a></td>";
						echo "<td><a href='ubahData.php?id_002=".$data['id_002']."'>Ubah</a></td>";
					}
				?>
		</tr>
	</table></center>
	<center><p><a href="index.php">Kembali ke form</a></p></center>

</body>
</html>