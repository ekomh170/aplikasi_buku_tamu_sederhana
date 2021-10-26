<!DOCTYPE html>
<html>
<head>
	<title>Proses Menambahkan Data</title>
</head>
<body>
	<?php
	include 'koneksi.php';

	$nama 	= $_POST['nama'];
	$email 	= $_POST['email'];
	$alamat = $_POST['alamat'];
	$kota 	= $_POST['kota'];
	$telp   = $_POST['telp'];

	mysqli_query($koneksi, "INSERT INTO tb_tamu(nama, email, alamat, kota, telp) VALUES ('$nama','$email', '$alamat', '$kota', '$telp')");

	echo "<h3>Data Yang Anda Masukan</h3>";
	echo "Nama : $nama<br>";
	echo "Email : $email<br>";
	echo "Alamat : $alamat<br>";
	echo "Kota : $kota<br>";
	echo "Telp : $telp<br>";
	echo "<br>";

	echo "Data Berhasil Dimasukan<br><br>";
	echo "<a href='index.php'>Data Tamu</a>";
	?>
</body>
</html>