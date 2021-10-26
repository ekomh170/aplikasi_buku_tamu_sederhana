<!DOCTYPE html>
<html>
<head>
	<title>Menambahkan Data</title>
</head>
<body>
	<form method="POST" action="inputproses.php">
	<table>	
		<tr>
			<td width="359" colspan="2"><b><font face="Arial">Menambahkan Data</font></b></td>		
		</tr>
		<tr>
			<td width="50">&nbsp;</td>
			<td width="305">&nbsp;</td>
		</tr>
		<tr>
			<td width="50">Nama</td>
			<td width="305"><input type="text" name="nama" size="30"></td>
		</tr>
		<tr>
			<td width="50">Email</td>
			<td width="305"><input type="text" name="email" size="25"></td>
		</tr>
		<tr>
			<td width="50">Alamat</td>
			<td width="305"><input type="text" name="alamat" size="40"></td>
		</tr>
		<tr>
			<td width="50">Kota</td>
			<td width="305"><input type="text" name="kota" size="25"></td>
		</tr>
		<tr>
			<td width="50">No.Telp</td>
			<td width="305"><input type="text" name="telp" size="40"></td>
		</tr>
		<tr>
			<td width="50">&nbsp;</td>
			<td width="305">&nbsp;</td>
		</tr>	
	</table>
	<p><br>
		<input type="submit" value="Submit">
		<input type="reset" value="Reset">
	</p>	
	</form>
	<button><a href="index.php">KEMBALI KE DATA TAMU</a></button>
</body>
</html>