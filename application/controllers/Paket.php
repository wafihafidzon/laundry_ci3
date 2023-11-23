<?php

class Paket extends CI_Controller
{
  public function detail_paket($id) {
    $data['paket'] = $this->Model_paket->get_paket($id);
    $data['id_outlet'] = $id;
    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('paket/index', $data);
    $this->load->view('templates/footer');
  }

  public function tambah() {
    $nama = $this->input->post('nama_paket');
    $harga = $this->input->post('harga');
    $jenis = $this->input->post('jenis');
    $id_outlet = $this->input->post('id_outlet');

    $data = [
      'nama_paket' => $nama,
      'harga' => $harga,
      'jenis' => $jenis,
      'id_outlet' => $id_outlet
    ];

    $this->Model_paket->tambah_paket($data);
    redirect('paket/detail_paket/'.$id_outlet);
  }

  public function hapus($id, $id_outlet) {
    $this->Model_paket->hapus_paket($id);
    redirect('paket/detail_paket/'.$id_outlet);
  }
}