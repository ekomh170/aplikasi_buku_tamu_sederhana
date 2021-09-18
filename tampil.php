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
    <div class="card" style="width: 25rem;">
      <div class="card-body">
        <h5 class="card-title text-center">Buku Tamu</h5>
        <hr>
        <p class="card-text">
          <?php
          include ("koneksi.php");

          $sql = "SELECT * FROM data_tamu";
          $result = $koneksi->query($sql);

          if ($result->num_rows > 0) {

            while($row = $result->fetch_assoc()) {

              echo "<br>".
              "<b>Nomor Kunjungan : </b>". $row["id"]. "<br>".
              "<b>Nama   : </b>". $row["nama"]. "<br>".
              "<b>Email  : </b>". $row["email"]. "<br>".
              "<b>Alamat : </b>". $row["alamat"]. "<br>".
              "<b>Kota   : </b>". $row["kota"]. "<br>".
              "<b>Pesan  : </b>". $row["pesan"]. "<br>";
            }
          } else {
            echo "0 results";
          }
          $koneksi->close()
          ?></p>
          <div style="float: right;">
            <a href="index.php" class="btn btn-primary"> Kembali ke Buku Tamu</a>
          </div>
          <div style="float: left;">
            <a href="tampil.php" class="btn btn-primary"> Lihat Buku Tamu</a>
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