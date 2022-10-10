<?php

class Mahasiswa_model
{
  // private $mhs = [
  //   [
  //     "nama" => "Dika",
  //     "nrp" => "3249034",
  //     "email" => "DADA@sdbaj.com",
  //     "jurusan" => "Teknik"
  //   ],
  //   [
  //     "nama" => "fass",
  //     "nrp" => "3825492",
  //     "email" => "DAD32A@sdbaj.com",
  //     "jurusan" => "Teknik"
  //   ],
  //   [
  //     "nama" => "adfnjdf",
  //     "nrp" => "1489384",
  //     "email" => "DA@sdbaj.com",
  //     "jurusan" => "Teknik"
  //   ]
  // ];
  private $dbh; // data base handler
  private $stmt;

  public function __construct()
  {
    // data source name
    $dsn = 'mysql:host=localhost;dbname=phpmvc';

    try {
      $this->dbh = new PDO($dsn, 'root', '');
    } catch (PDOException $e) {
      die($e->getMessage());
    }
  }
  public function getALLMahasiswa()
  {
    $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
    $this->stmt->execute();
    return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}
