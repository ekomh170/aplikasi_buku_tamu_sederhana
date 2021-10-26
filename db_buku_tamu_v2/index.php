<!-- Nama Eko Muchamad Haryono
Kelas XI - RPL -->
<!DOCTYPE html>
<html>

<head>
    <title>Buku Tamu</title>
    <style type="text/css">
    body {
        background: cyan;
        font-family: Bodoni MT Black;
        line-height: 1.75em;
        font-size: 20px;
    }

    h1 {
        font-size: 50px;
    }

    .table1 {
        font-family: sans-serif;
        color: #232323;
        border-collapse: collapse;
    }

    .table1,
    th,
    td {
        border: 1px solid #999;
        padding: 8px 20px;
    }
    </style>
</head>

<body>
    <center>
        <h1>Daftar Tamu</h1>
        <br />
        <table class="table1">
            <tr>
                <th>NO</th>
                <th>Nama</th>
                <th>E-mail</th>
                <th>Alamat</th>
                <th>Kota</th>
            </tr>
            <?php
            require 'koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi, "select * from data_tamu");
            while ($tamu = mysqli_fetch_array($data)) {
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $tamu['nama']; ?></td>
                <td><?php echo $tamu['email']; ?></td>
                <td><?php echo $tamu['alamat']; ?></td>
                <td><?php echo $tamu['kota']; ?></td>
            </tr>
            <?php } ?>
        </table>
    </center>
</body>

</html>