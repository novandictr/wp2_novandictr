<?php
class Siswa extends CI_Controller
{
  public function index()
  {
    $this->load->view('view-form-siswa');
  }
  public function cetak()
  {
    $this->form_validation->set_rules(
      'nama',
      'Nama Siswa',
      'required|min_length[2]',
      [
        'required' => 'Nama Siswa Harus diisi',
        'min_length' => 'Nama Terlalu Pendek'
      ]
    );
    $this->form_validation->set_rules(
      'nis',
      'NO Induk Siswa',
      'required|numeric[3]',
      [
        'required' => 'No Induk Harus diisi',
        'numeric' => 'NIS Tidak Sesuai'
      ]
    );
    if ($this->form_validation->run() != true) {
      $this->load->view('view-form-siswa');
    } else {
      $data = [
        'nama' => $this->input->post('nama'),
        'nis' => $this->input->post('nis'),
        'kelas' => $this->input->post('kelas'),
        'tanggal' => $this->input->post('tanggal'),
        'tempat' => $this->input->post('tempat'),
        'alamat' => $this->input->post('alamat'),
        'kelamin' => $this->input->post('kelamin'),
        'agama' => $this->input->post('agama')
      ];
      $this->load->view('view-data-siswa', $data);
    }
  }
}