<?php 
include 'koneksi.php';
 
$nama = $_POST['nama'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$kota = $_POST['kota'];
$telp = $_POST['telp'];

$d = mysqli_query($koneksi,"INSERT INTO tb_tamu VALUES('','$nama','$email','$alamat','$kota','$telp')");
 
header("location:index.php");
 
?>