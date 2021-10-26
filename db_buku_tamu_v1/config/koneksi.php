<!-- Nama Eko Muchamad Haryono
Kelas XI - RPL -->
<?php 
$koneksi = mysqli_connect("localhost","root","","db_buku_tamu");

if (!$koneksi){
	echo "Gagal Terhubung Ke Database!" . mysql_connect_error();
}

?>