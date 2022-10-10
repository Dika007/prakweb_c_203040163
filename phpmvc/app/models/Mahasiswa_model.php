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
  // private $dbh; // data base handler
  // private $stmt;

  private $table = 'mahasiswa';
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getALLMahasiswa()
  {
    $this->db->query('SELECT * FROM ' . $this->table);
    return $this->db->resultSet();
  }

  public function getMahasiswaById($id)
  {

    $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
    $this->db->bind('id', $id);
    return $this->db->single();
  }
}
