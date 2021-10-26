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
        <center>
            <div class="card" style="width: 25rem;">
                <div class="card-body">
                    <h5 class="card-title text-center">Buku Tamu</h5>
                    <a href="db_buku_tamu_v1" class="btn btn-dark">Buku Tamu Tugas 1</a>
                    <a href="db_buku_tamu_v2" class="btn btn-dark">Buku Tamu Tugas 2</a>
                    <hr>
                    <form name="tamu" method="post" action="simpan.php">
                        <b>Nama :</b><input style="margin: 5px 5px 5px 20px;" type="text" name="nama"><br>
                        <b>Email :</b><input style="margin: 5px 5px 5px 24px;" type="text" name="email"><br>
                        <b>Alamat :</b><input style="margin: 5px 5px 5px 14px;" type="text" name="alamat"><br>
                        <b>Kota :</b><input style="margin: 5px 5px 5px 26px;" type="text" name="kota"><br><br>
                        <b>Pesan : </b><br><textarea style="width: 210px; margin-bottom: 10px;"
                            name="pesan"></textarea><br>
                        <div style="float: right;">
                            <button type="submit" name="submit" value="Send" class="btn btn-primary">Kirim</button>
                        </div>
                        <div style="float: left;">
                            <button type="reset" name="reset" value="Reset" class="btn btn-primary">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
            <br>
            <div class="card" style="width: 25rem;">
                <p>Pembuat : Eko Muchamad Haryono</p>
                <p>Kelas : XII - RPL</p>
                <p>Mapel : Basis Data</p>
                <p>Nama Guru : Yayang Ds</p>
                <script type="text/javascript">
                arrbulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September",
                    "Oktober", "November", "Desember"
                ];
                date = new Date();
                hari = date.getDay();
                tanggal = date.getDate();
                bulan = date.getMonth();
                tahun = date.getFullYear();
                keterangan = "Tanggal Live : "
                document.write(keterangan + "" + tanggal + "-" + arrbulan[bulan] + "-" + tahun);
                </script>
            </div>
        </center>
    </div>
</body>

</html>