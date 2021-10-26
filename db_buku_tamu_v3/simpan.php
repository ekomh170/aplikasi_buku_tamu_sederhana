<html>
<head>
	<title>Apps Sederhana Buku Tamuku</title>
</head>
<link rel="stylesheet" type="text/css" href="assets/
css/bootstrap-grid.min.css">
<link rel="stylesheet" type="text/css" href="assets/
css/bootstrap-reboot.min.css">
<link rel="stylesheet" type="text/css" href="assets/
css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/
css/bootstrap.rtl.min.css">
<link rel="stylesheet" type="text/css" href="assets/
css/bootstrap-utilities.min.css">
<body>
	<div class="container m-3">
		<div class="card" style="width: 30rem;">
			<div class="card-body">
				<div class="h1 text-center">BUKU TAMU</div>
				<div style="float: right;">
					<a href="index.php" class="btn btn-primary"> Kembali ke Buku Tamu</a>
				</div>
				<div style="float: left;">
					<a href="tampil.php" class="btn btn-primary"> Lihat Buku Tamu</a>
				</div>
				<br><br><br><br>

				<div class="h4 text-center text-danger">
					<?php
					include ("koneksi.php");
					$nama=$_POST['nama'];
					$email=$_POST['email'];
					$alamat=$_POST['alamat'];
					$kota=$_POST['kota'];
					$pesan=$_POST['pesan'];

	// sql entry data pada tabel
					$sql = "INSERT INTO data_tamu (nama, email, alamat, kota, pesan)
					VALUES ('$nama','$email','$alamat','$kota','$pesan')";

					if ($koneksi->query($sql) === TRUE) {
						echo "Notice Pesan : Pesan telah terkirim!";
					} else {
						echo "Error: " . $sql . "<br>" . $koneksi->error;
					}

					$koneksi->close();
					?>
				</div>
			</div>
		</div>
		<br>
		<div class="card" style="width: 25rem;">
			<p>Pembuat : Eko Muchamad Haryono</p>
			<p>Kelas : XII - RPL</p>
			<p>Mapel : Basis Data</p>
			<p>Nama Guru : Yayang Ds</p>
			<script type="text/javascript">
				arrbulan = ["Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"];
				date = new Date();
				hari = date.getDay();
				tanggal = date.getDate();
				bulan = date.getMonth();
				tahun = date.getFullYear();
				keterangan = "Tanggal : "
				document.write(keterangan+ "" +tanggal+"-"+arrbulan[bulan]+"-"+tahun);
			</script>
		</div>
	</div>
</div>
</body>
</html>