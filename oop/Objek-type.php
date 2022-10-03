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

class CetakInfoProduk
{
  public function cetak(Produk $produk)
  {
    $str = "{$produk->judul} |  {$produk->getlabel()}  (Rp. {$produk->harga})";
    return $str;
  }
}


$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 2000);
$produk2 = new Produk("Uncharted", "Neil Druckman", "Sony computer", 2500000);


echo "Komik : " . $produk1->getlabel();
echo "<br>";
echo "Game  :  " . $produk2->getlabel();
echo "<br>";
$infoproduk1 = new CetakInfoProduk();
echo $infoproduk1->cetak($produk1);
