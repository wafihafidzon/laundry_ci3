<?php

class Dashboard extends CI_Controller
{
       public function __construct()
       {
                     parent::__construct();
                     $this->load->library('session');
              // parent::__construct();
              // if ($this->session->userdata('role')=='Kasir') {
              //        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Belum Login <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
              //        redirect('auth/login');
              // }
       }
       public function index()
       {

              $id = $this->session->userdata('id_outlet');
              $data['paket'] = $this->Model_paket->get_paket($id);
              $data['id_outlet'] = $id;
              $this->load->view('templates/header');
              $this->load->view('templates/sidebar');
              $this->load->view('kasir/index', $data);
              $this->load->view('templates/footer');
       }
       public function pembayaran_non_member()
       {
              $this->load->view('templates/header');
              $this->load->view('templates/sidebar');
              $this->load->view('kasir/pembayaran_non_member');
              $this->load->view('templates/footer');
       }
       public function proses_pembayaran()
       {
              $is_processed = $this->Model_invoice->index();
              if ($is_processed) {
                     $this->cart->destroy();
                     redirect('/dashboard');
              } else {
                     echo "Maaf, Pesanan Anda Gagal di Proses";
              }
       }
       public function keranjang()
       {
              $this->load->view('templates/header');
              $this->load->view('templates/sidebar');
              $this->load->view('kasir/keranjang');
              $this->load->view('templates/footer');
       }
       public function tambah_ke_keranjang()
       {
              $id_brg = $this->uri->segment(3);
              $data_barang = $this->Model_paket->find($id_brg);
              $data_cart = array(
                     'id' => $data_barang->id,
                     'qty' => 1,
                     'price' => $data_barang->harga,
                     'name' => $data_barang->nama_paket,
                     'jenis' => $data_barang->jenis,
              );

              $this->cart->insert($data_cart);
              redirect('/dashboard');
       }

}