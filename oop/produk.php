<?php


class Produk
{
  public  $judul = "judul",
    $penulis = "penulis",
    $penerbit = "penerbit",
    $harga = 0;

  public function getlabel()
  {
    return "$this->penulis, $this->penerbit";
  }
}
// $produk1 =  new Produk();
// $produk1->judul = "naruto";
// var_dump($produk1);

// $produk2 =  new Produk();
// $produk2->judul = "Naskar";
// $produk2->tambahproperty = "wadidaw";
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 2000;

$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Druckman";
$produk4->penerbit = "Sony computer";
$produk4->harga = 2500000;

echo "Komik : " . $produk3->getlabel();

echo "<br>";
echo "Game : " . $produk4->getlabel();
