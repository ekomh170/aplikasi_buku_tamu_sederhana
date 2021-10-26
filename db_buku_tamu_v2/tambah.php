<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>
</head>
<body>
	<h1>Tambah Daftar Tamu</h1>
	<br><br>
	<form method="POST" action="tambahproses.php">
		<table>
			<tr>			
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>E-mail</td>
				<td><input type="email" name="email"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td>Kota</td>
				<td><input type="text" name="kota"></td>
			</tr>
			<tr>
				<td>Nomer Telpon</td>
				<td><input type="text" name="telp"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>		
		</table>
	</form>
<a href="index.php">KEMBALI</a>	
</body>
</html>