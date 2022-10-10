<?php
class Mahasiswa extends Controller
{
  public function index()
  {
    $data['judul'] = 'Data Mahasiswa';
    $data['mhs'] = $this->model('Mahasiswa_model')->getALLMahasiswa();
    $this->view('templates/header', $data);
    $this->view('mahasiswa/index', $data);
    $this->view('templates/footer');
  }
}
