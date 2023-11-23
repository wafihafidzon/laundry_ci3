<?php

class Model_paket extends CI_Model
{
  public function get_paket($id_outlet) {
    $this->db->select('*');
    $this->db->from('tb_paket');
    $this->db->where('id_outlet', $id_outlet);
    $query = $this->db->get();
    return $query->result();
  }

  public function tambah_paket($data) {
    $this->db->insert('tb_paket', $data);
  }

  public function hapus_paket($id_paket) {
    $this->db->where('id', $id_paket);
    $this->db->delete('tb_paket');
  }

  public function find($id) {
    $this->db->select('*');
    $this->db->from('tb_paket');
    $this->db->where('id', $id);
    return $this->db->get()->row();
  }
}

