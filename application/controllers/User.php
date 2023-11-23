<?php

class User extends CI_Controller
{
  public function pegawai($id) {
    $data['user'] = $this->Model_user->get_user($id);
    $data['id_outlet'] = $id;
    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('user/user', $data);
    $this->load->view('templates/footer');
  }

  public function tambah() {
    $id = $this->input->post('id_outlet');
    $nama = $this->input->post('nama');
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $role = $this->input->post('role');


    $data = array(
      'nama' => $nama,
      'username' => $username,
      'password' => $password,
      'role' => $role,
      'id_outlet' => $id
    );

    $this->Model_user->insert_user($data);
    redirect('user/pegawai/' . $id);
  }

  public function edit($id) {
    $data['user'] = $this->Model_user->get_user_by_id($id)->result();
    $data['outlet'] = $this->Model_outlet->get_outlet()->result();
    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('user/edit_user', $data);
    $this->load->view('templates/footer');
  }

  public function update() {
    $id = $this->input->post('id');
    $nama = $this->input->post('nama');
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $role = $this->input->post('role');
    $outlet = $this->input->post('outlet');

    $data = array(
      'nama' => $nama,
      'username' => $username,
      'password' => $password,
      'role' => $role,
      'id_outlet' => $outlet
    );

    $where = array(
      'id' => $id
    );

    $this->Model_user->update($data, $id);
    redirect('user/pegawai/'.$outlet);
  }

  public function hapus($id) {
    $id_outlet = $this->uri->segment(4);
    $this->Model_user->delete_user($id);
    redirect('user/pegawai/' . $id_outlet);
  }
}