<?php 

require "koneksi.php";

$link 		= open_connection();
$tablename 	= "tb_tamu";
$sqlstr		= "SELECT * FROM $tablename";
$result 	= mysqli_query($sqlstr) or die("KESALAHAN PADA SQL");
mysqli_close($link); 

echo "<table border='1'>";
echo "<tr><th>NO</th><th>Nama</th><th>E-mail</th><th>Alamat</th><th>Kota</th><th>Nomer Telpon</th></tr>";

while ($row = mysqli_fetch_object($result))
{
	$no++;
	$nomer  = $row->nomer;
	$email  = $row->email;
	$alamat = $row->alamat;
	$kota   = $row->kota;
	$telp   = $row->telp;
}

echo "<tr><td>$no</td><td>$email</td><td>$alamat</td><td>$kota</td><td>$telp</td></tr>";
?>