<?php
require 'function.php';


$buku = query("SELECT * FROM buku");
// ketika tombol cari di klik
if (isset($_POST['cari'])) {

  $buku = cari($_POST['keyword']);
}



?>










<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>Daftar buku</title>
</head>

<body>
  <h3>Daftar buku aku</h3>
  <a href="tambah.php">Tambah data buku</a>
  <br><br>

  <form action="" method="POST">
    <input type="text" name="keyword" size="30" placeholder="Masukan keyword pencarian.." autocomplete="off" autofocus>
    <button type="submit" name="cari">Cari</button>




  </form>

  <br><br>


  <table border="1" cellpadding="10" cellspacing="0" align="center">
    <tr>
      <th>#</th>
      <th>Gambar</th>

      <th>Nama buku</th>

      <th>aksi</th>
    </tr>
    <?php if (empty($buku)) : ?>
      <tr>
        <td colspan="4">
          <p style="color: red; font-style: italic;">maaf, data buku tidak ditemukan</p>
        </td>
      </tr>
    <?php endif; ?>


    <?php $i = 1;
    foreach ($buku as $b) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><img src="img/<?= $b['Gambar_buku']; ?>" width="80"></td>

        <td><?= $b['Nama_buku']; ?></td>

        <td>
          <a href="detail.php?id=<?= $b['id']; ?>">Selengkapnya</a>
        </td>
      </tr>
    <?php endforeach; ?>

  </table>
</body>

</html>