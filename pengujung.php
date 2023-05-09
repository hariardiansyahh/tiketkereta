<?php
require 'koneksi.php';

$sql = "SELECT * FROM tb_pengunjung";
$result = mysqli_query ($conn,$sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Data Pengujung</title>
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
        <h2>DATA PENGUNJUNG</h2>
    <table border= "1" cellpadding="10" cellspacing="0" class="table-design">
    <tr>
        <th>ID Pengunjung</th>
        <th>Nama Pengunjung</th>
        <th>Alamat</th>
        <th>NO Telp</th>
        <th>Email</th>
    </tr>
    <?php while ($row=mysqli_fetch_assoc($result)): ?>
    <tr>
        <td><?= $row['id_pengunjung']?></td>
        <td><?= $row['nama_pengunjung']?></td>
        <td><?= $row['alamat']?></td>
        <td><?= $row['no_telp']?></td>
        <td><?= $row['email']?></td>
    </tr>
    <?php endwhile ?>
    </center>
    </table>
</body>
</html>