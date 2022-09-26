<?php
require 'function.php';


// a,bil id dari url
$id = $_GET['id'];

// query mahasiswa berdasarkan id
$b = query("SELECT * FROM buku WHERE id = $id");



?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail buku</title>
</head>

<body>
  <h3 style="font-size: 30px; text-indent: 47%;">detail buku</h3>
  <br>
  <ul>
    <li style="list-style:none;" align="center"><img src="img/<?= $b['Gambar_buku']; ?>"></li>
    <br>
    <li style="list-style:none; text-indent: 44%; font-size: 20px" text-indent: 10px;>Nama buku : <?= $b['Nama_buku']; ?></li>
    <li style="list-style:none; text-indent: 44%; font-size: 20px">Penulis : <?= $b['Penulis_buku']; ?></li>
    <li style="list-style:none; text-indent: 44%; font-size: 20px">Jumlah halaman : <?= $b['Jumlah_halaman']; ?></li>
    <li style="list-style:none; text-indent: 44%; font-size: 20px">Tahun terbit : <?= $b['Tahun_terbit']; ?></li>
    <br>
    <li style="list-style:none; font-size: 20px" align="center"><a href="ubah.php?id=<?= $b['id']; ?>">ubah</a> | <a href="hapus.php?id=<?= $b['id']; ?>" onclick="return confirm('apakah anda yakin?')">hapus</a></li>
    <br><br><br>
    <li style="list-style:none; text-align: right; font-size: 20px"><a href="coba.php">kembali ke halaman sebelumnya</a></li>
  </ul>
</body>

</html>