<?php
require 'function.php';

// jika tidak ada id di url 
if (!isset($_GET['id'])) {
  header("Location: coba.php");
  exit;
}

// ambil id dari url
$id = $_GET['id'];

// query mahasiswa berdasarkan id
$b = query("SELECT * FROM buku WHERE id = $id");

//cek apakah tombol ubah sudah ditekan
if (isset($_POST['ubah'])) {


  if (ubah($_POST) > 0) {
    echo "<script>
              alert('data berhasil di ubah');
              document.location.href = 'coba.php';
            </script>";
  } else {
    echo "data gagal di ubah";
  }
}

?>









<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah data buku</title>
</head>

<body>
  <h3>Form ubah data buku</h3>

  <form action="" method="POST">
    <input type="hidden" name="id" value="<?= $b['id']; ?>">
    <ul>

      <li style="list-style:none;">
        <label>

          Nama buku :
          <input type="text" name="Nama_buku" autofocus required value="<?= $b['Nama_buku']; ?>">
        </label>

      </li>


      <li style="list-style:none;">
        <label>

          Penulis buku :
          <input type="text" name="Penulis_buku" required value="<?= $b['Penulis_buku']; ?>">
        </label>

      </li>


      <li style="list-style:none;">
        <label>

          Jumlah halaman :
          <input type="text" name="Jumlah_halaman" required value="<?= $b['Jumlah_halaman']; ?>">
        </label>

      </li>


      <li style="list-style:none;">
        <label>

          Tahun terbit :
          <input type="text" name="Tahun_terbit" required value="<?= $b['Tahun_terbit']; ?>">
        </label>

      </li>


      <li style="list-style:none;">
        <label>

          gambar :
          <input type="text" name="Gambar_buku" required value="<?= $b['Gambar_buku']; ?>">
        </label>

      </li>

      <li style="list-style:none;">
        <button type="submit" name="ubah">ubah data!!</button>
      </li>

    </ul>






  </form>





</body>

</html>