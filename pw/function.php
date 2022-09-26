<?php
function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'prakweb_c_203040163_pw');
}

function query($query)
{
  $conn = koneksi();

  $result = mysqli_query($conn, $query);

  // jiika hasilnya hanya 1 data
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }


  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function tambah($data)
{

  $conn = Koneksi();

  $nama = htmlspecialchars($data['Nama_buku']);
  $penulis = htmlspecialchars($data['Penulis_buku']);
  $jumlahhalaman = htmlspecialchars($data['Jumlah_halaman']);
  $tahunterbit = htmlspecialchars($data['Tahun_terbit']);
  $gambar = htmlspecialchars($data['Gambar_buku']);

  $query = "INSERT INTO
              buku
              VALUES
              (null,'$nama','$penulis','$jumlahhalaman','$tahunterbit','$gambar');
              ";

  mysqli_query($conn, $query);

  echo mysqli_error($conn);

  return mysqli_affected_rows($conn);
}

function hapus($id)
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM buku WHERE id = $id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}


function ubah($data)
{

  $conn = Koneksi();

  $id = $data['id'];
  $nama = htmlspecialchars($data['Nama_buku']);
  $penulis = htmlspecialchars($data['Penulis_buku']);
  $jumlahhalaman = htmlspecialchars($data['Jumlah_halaman']);
  $tahunterbit = htmlspecialchars($data['Tahun_terbit']);
  $gambar = htmlspecialchars($data['Gambar_buku']);



  $query = "UPDATE buku SET
            Nama_buku = '$nama',
            Penulis_buku = '$penulis',
            Jumlah_halaman = '$jumlahhalaman',
            Tahun_terbit = '$tahunterbit',
            Gambar_buku = '$gambar'
          WHERE id = $id ";

  mysqli_query($conn, $query)  or die(mysqli_error($conn));



  return mysqli_affected_rows($conn);
}

function cari($keyword)
{
  $conn = koneksi();

  $query = "SELECT * FROM buku 
            WHERE Nama_buku LIKE '%$keyword%'";


  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }


  return $rows;
}
