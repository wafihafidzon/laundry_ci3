<?php

class Model_outlet extends CI_Model
{
  public function get_outlet()
  {
    return $this->db->get('tb_outlet');
  }
  public function insert($table, $data)
  {
    $this->db->insert($table, $data);
  }
  public function delete($table, $where)
  {
    $this->db->delete($table, $where);
  }
  public function get_edit($id)
  {
    return $this->db->where('id', $id)->get('tb_outlet');
  }
  public function update($table, $data, $where)
  {
    $this->db->update($table, $data, $where);
  }
}