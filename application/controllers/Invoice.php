<?php

class Invoice extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    if ($this->session->userdata('role') != 'Admin')
    {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Belum Login <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
      redirect('auth/login');
    }
  }
  public function index()
  {
    // echo random_string('alnum', 16);
    $data['invoice'] = $this->Model_invoice->tampil_data();
    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('invoice/index', $data);
    $this->load->view('templates/footer');
  }

  public function detail($id)
  {
    $data['invoice'] = $this->Model_invoice->detail($id);
    // var_dump($data['invoice']);
    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('invoice/invoice_detail', $data);
    $this->load->view('templates/footer');
  }

  public function edit($id)
  {
    $data['invoice'] = $this->Model_invoice->detail($id);
    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('invoice/invoice_edit', $data);
    $this->load->view('templates/footer');
  }

  public function update()
  {
    $status_pemabayaran = $this->input->post('status_pembayaran');
    $status_laundry = $this->input->post('status_laundry');
    $id = $this->input->post('id');

    $data = [
      'status_pembayaran' => $status_pemabayaran,
      'status_laundry' => $status_laundry
    ];

    $this->Model_invoice->update($data, $id);
    redirect('invoice');
  }
}