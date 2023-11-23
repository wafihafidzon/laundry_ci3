<?php

class Model_invoice extends CI_Model
{
  public function index()
  {
    date_default_timezone_set('Asia/Jakarta');
    $id_outlet = $this->session->userdata('id_outlet');
    $nama = $this->input->post('nama');
    $alamat = $this->input->post('alamat');
    $tlp = $this->input->post('no_telpon');
    $status_pembayaran = $this->input->post('status_pembayaran');

    $member = array(
      'nama' => $nama,
      'alamat' => $alamat,
      'tlp' => $tlp
    );

    $this->db->insert('tb_member', $member);
    $id_member = $this->db->insert_id();

    $invoice = array(
      "kode_invoice" => 'INV-'.date('mdHis').'-'.sprintf("%04s", $id_member),
      'id_member' => $id_member,
      'id_outlet' => $id_outlet,
      'tgl_bayar' => date('Y-m-d H:i:s'),
      'status_laundry' => 'baru',
      'status_pembayaran' => 'dibayar',
    );

    $this->db->insert('tb_transaksi', $invoice);
    $id_invoice = $this->db->insert_id();

    foreach ($this->cart->contents() as $item) {
      $date = array(
        'id_transaksi' => $id_invoice,
        'id_paket' => $item['id'],
        'qty' => $item['qty'],
      );

      $this->db->insert('tb_detail_transaksi', $date);
    }

    return true;
  }

  public function tampil_data()
  {
    $this->db->select('*');
    $this->db->from('tb_transaksi');
    $this->db->join('tb_member', 'tb_member.id = tb_transaksi.id_member');
    $result = $this->db->get();
    if ($result->num_rows() > 0) {
      return $result->result();
    } else {
      return false;
    }

  }

  public function detail($id) 
  {
    $this->db->select('*');
    $this->db->from('tb_detail_transaksi');
    $this->db->join('tb_paket', 'tb_paket.id = tb_detail_transaksi.id_paket');
    $this->db->join('tb_outlet', 'tb_outlet.id = tb_paket.id_outlet');
    $this->db->join('tb_transaksi', 'tb_transaksi.id = tb_detail_transaksi.id_transaksi');
    $this->db->where('tb_detail_transaksi.id', $id);
    $result = $this->db->get();
    if ($result->num_rows() > 0) {
      return $result->result();
    } else {
      return false;
    }
  }

  public function edit($id)
  {
    $this->db->where('id', $id);
    $result = $this->db->get('tb_transaksi');
    if ($result->num_rows() > 0) {
      return $result->result();
    } else {
      return false;
    }
  }

  public function update($data, $id)
  {
    $this->db->where('id', $id);
    $this->db->update('tb_transaksi', $data);
  }
}