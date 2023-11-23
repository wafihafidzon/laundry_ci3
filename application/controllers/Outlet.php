<?php

class Outlet extends CI_Controller
{

  public function __construct()
 {
  parent::__construct();
  if($this->session->userdata('role')!= 'Admin') {
    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Belum Login <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
   redirect('auth/login');
  }
 }
  public function index() {
    $data['outlet'] = $this->Model_outlet->get_outlet()->result();
    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('outlet/outlet', $data);
    $this->load->view('templates/footer');
  }

  public function tambah() {
    $outlet = $this->input->post('outlet');
    $alamat = $this->input->post('alamat');
    $tlp = $this->input->post('telepon');

    $data = array(
      'nama' => $outlet,
      'alamat' => $alamat,
      'tlp' => $tlp
    );

    $this->Model_outlet->insert('tb_outlet', $data);
    redirect('outlet');
  }

  public function hapus($id) {
    $where = array('id' => $id);
    $this->Model_outlet->delete('tb_outlet', $where);
    redirect('outlet');
  }

  public function edit($id) {
    $data['outlet'] = $this->Model_outlet->get_edit($id)->result();
    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('outlet/edit_outlet', $data);
    $this->load->view('templates/footer');
  }

  public function update() {
    $id = $this->input->post('id');
    $outlet = $this->input->post('outlet');
    $alamat = $this->input->post('alamat');
    $tlp = $this->input->post('telepon');

    $data = array(
      'nama' => $outlet,
      'alamat' => $alamat,
      'tlp' => $tlp
    );

    $where = array(
      'id' => $id
    );

    $this->Model_outlet->update('tb_outlet', $data, $where);
    redirect('outlet');
  }

}
