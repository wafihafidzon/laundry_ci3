<?php

class Model_user extends CI_Model
{
  public function get_user($id)
{
    $this->db->select('tb_user.id, tb_user.nama, tb_user.username, tb_user.role, tb_outlet.id as id_outlet');
    $this->db->from('tb_user');
    $this->db->join('tb_outlet', 'tb_outlet.id = tb_user.id_outlet');
    $this->db->where('tb_outlet.id', $id);

    $result = $this->db->get()->result();
    return $result;
}

  

  public function insert_user($data)
  {
    $this->db->insert('tb_user', $data);
  }

  public function delete_user($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('tb_user');
  }

  public function get_user_by_id($id)
  {
    $this->db->select('tb_user.id, tb_user.nama, tb_user.username, tb_user.password, tb_user.role, tb_outlet.nama as outlet, tb_outlet.id as id_outlet');
    $this->db->from('tb_user'); 
    $this->db->join('tb_outlet', 'tb_outlet.id = tb_user.id_outlet');
    $this->db->where('tb_user.id', $id);
    return $this->db->get();
  }

  public function update($data, $id)
  {
    $this->db->where('id', $id);
    $this->db->update('tb_user', $data);
  }

  public function get_admin_owner(){
    $this->db->group_start();
    $this->db->where('role', 'Admin');
    $this->db->or_where('role', 'owner');
    $this->db->group_end();
    
    $result = $this->db->get('tb_user')->result();
    return $result;
    
  }
  public function get_admin_by_id($id){
    $this->db->where('id', $id);
    
    $result = $this->db->get('tb_user');
    return $result;
    
  }

  
}