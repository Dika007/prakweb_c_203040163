<?php

use Produk as GlobalProduk;

class Produk
{
  public  $judul,
    $penulis,
    $penerbit,
    $harga;
  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }
  public function getlabel()
  {
    return "$this->penulis, $this->penerbit";
  }
}


$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 2000);
$produk2 = new Produk("Uncharted", "Neil Druckman", "Sony computer", 2500000);
$produk3 = new Produk("Dragon Ball");

echo "Komik : " . $produk1->getlabel();
echo "<br>";
echo "Game  :  " . $produk2->getlabel();
echo "<br>";
echo "Game  :  " . $produk3->getlabel();
var_dump($produk3);
