<?php

class Admin extends CI_Controller
{

  public function index()
  {
    $data['user'] = $this->Model_user->get_admin_owner();
    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('admin/admin', $data);
    $this->load->view('templates/footer');
  }

  public function tambah() {
    $nama = $this->input->post('nama');
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $role = $this->input->post('role');


    $data = array(
      'nama' => $nama,
      'username' => $username,
      'password' => $password,
      'role' => $role,
    );

    $this->Model_user->insert_user($data);
    redirect('admin/index');
  }
  public function edit($id) {
    $data['user'] = $this->Model_user->get_admin_by_id($id)->result();
    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('admin/edit_user', $data);
    $this->load->view('templates/footer');
  }

  public function update() {
    $id = $this->input->post('id');
    $nama = $this->input->post('nama');
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $role = $this->input->post('role');

    $data = array(
      'nama' => $nama,
      'username' => $username,
      'password' => $password,
      'role' => $role,
    );

    $this->Model_user->update($data, $id);
    redirect('admin/index');
  }

  public function hapus($id) {
    $this->Model_user->delete_user($id);
    redirect('admin/index');
  }

  
}