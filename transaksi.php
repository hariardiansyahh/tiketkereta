<?php
require "koneksi.php";

$sql = "SELECT tb_transaksi.id_transaksi, tb_pengunjung.nama_pengunjung, tb_tiket.nama_kereta, tb_transaksi.harga_tiket, tb_transaksi.jumlah_tiket, tb_transaksi.total_pembayaran FROM tb_tiket INNER JOIN tb_transaksi ON tb_tiket.id_tiket = tb_transaksi.id_tiket INNER JOIN tb_pengunjung ON tb_pengunjung.id_pengunjung = tb_transaksi.id_pengunjung";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Data Transaksi</title>
</head>
<body>
<nav>
        <ul>
            <li><a href ="tiket.php">Data Tiket</a></li>
            <li><a href ="pengujung.php">Data Pengunjung</a></li>
            <li><a href ="transaksi.php">Data Transaksi</a></li>
        </ul>
    </nav>
    <center>
        <h2>DATA TRANSAKSI</h2>
    <table border= "1" cellpadding="10" cellspacing="0" class="table-design">
    <tr>
        <th>ID Transaksi</th>
        <th>Nama Kereta</th>
        <th>Nama Pengujung</th>
        <th>Harga</th>
        <th>Jumlah</th>
        <th>Total Pembayaran</th>
    </tr>
    <?php while ($row=mysqli_fetch_assoc($result)): ?>
    <tr>
        <td><?= $row['id_transaksi']?></td>
        <td><?= $row['nama_kereta']?></td>
        <td><?= $row['nama_pengunjung']?></td>
        <td><?= $row['harga_tiket']?></td>
        <td><?= $row['jumlah_tiket']?></td>
        <td><?= $row['total_pembayaran']?></td>
    </tr>
    <?php endwhile ?>
    </center>
    </table>
</body>
</html>