<!DOCTYPE html>
<html>

<head>
    <title>Edit Buku Tamu</title>
</head>

<body>
    <h1>EDIT DATA MAHASISWA</h1>
    <br />
    <br />
    <?php
    include 'koneksi.php';
    $id = $_GET['id'];
    $data = mysqli_query($koneksi, "SELECT * from data_tamu where id='$id'");
    while ($tamu = mysqli_fetch_array($data)) {
    ?>
    <form method="post" action="update.php">
        <table>
            <tr>
                <td>Nama</td>
                <td>
                    <input type="hidden" name="id" value="<?php echo $tamu['id']; ?>">
                    <input type="text" name="nama" value="<?php echo $tamu['nama']; ?>">
                </td>
            </tr>
            <tr>
                <td>E-mail</td>
                <td><input type="text" name="email" value="<?php echo $tamu['email']; ?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value="<?php echo $tamu['alamat']; ?>"></td>
            </tr>
            <tr>
                <td>Kota</td>
                <td><input type="text" name="kota" value="<?php echo $tamu['kota']; ?>"></td>
            </tr>
            <tr>
                <td>Nomer Telpon</td>
                <td><input type="text" name="telp" value="<?php echo $tamu['telp']; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
    <?php } ?>
    <a href="index.php">KEMBALI</a>
</body>

</html>