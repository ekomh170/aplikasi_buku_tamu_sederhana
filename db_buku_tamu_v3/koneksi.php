<?php 

$koneksi = mysqli_connect("localhost","root","","db_buku_tamu");

if (mysqli_connect_errno()){
	echo "<b> Koneksi database gagal : </b>" . mysqli_connect_error();
}

?>