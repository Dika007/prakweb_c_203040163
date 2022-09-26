<?php
require 'function.php';

//cek apakah tombol tambah sudah ditekan
if (isset($_POST['tambah'])) {


  if (tambah($_POST) > 0) {
    echo "<script>
              alert('data berhasil di tambahkan');
              document.location.href = 'coba.php';
            </script>";
  } else {
    echo "<script>
           alert('data gagal di tambahkan');
           document.location.href = 'coba.php';
              </script>";
  }
}

?>









<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Tambah data buku</title>
</head>

<body>
  <h3>form tambah data buku</h3>

  <form action="" method="POST">
    <ul>

      <li style="list-style:none;">
        <label>

          nama :
          <input type="text" name="Nama_buku" autofocus required>
        </label>

      </li>


      <li style="list-style:none;">
        <label>

          Penulis :
          <input type="text" name="Penulis_buku" required>
        </label>

      </li>


      <li style="list-style:none;">
        <label>

          Jumlah Halaman :
          <input type="text" name="Jumlah_halaman" required>
        </label>

      </li>


      <li style="list-style:none;">
        <label>

          Tahun terbit :
          <input type="text" name="Tahun_terbit" required>
        </label>

      </li>


      <li style="list-style:none;">
        <label>

          gambar :
          <input type="text" name="Gambar_buku" required>
        </label>

      </li>

      <li style="list-style:none;">
        <button type="submit" name="tambah">tambah data!!</button>
      </li>

    </ul>

  </form>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>