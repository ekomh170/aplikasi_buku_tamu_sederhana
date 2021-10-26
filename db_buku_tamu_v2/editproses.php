<?php 

include 'koneksi.php';
 
$nama = $_POST['nama'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$kota = $_POST['kota'];
$telp = $_POST['telp'];
 

mysqli_query($koneksi,"UPDATE tb_tamu SET nama='$nama', email='$email', alamat='$alamat, kota='$kota', telp='$telp WHERE id='$id'");

header("location:index.php");