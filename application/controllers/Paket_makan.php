<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Paket_makan extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->model('paketmakan_model');
      otentikasi();
   }

   public function index()
   {
      $data      =  [
         'title' => SITE_NAME,
         'judul' => 'Paket Makan',
         'isi'   => 'admin/paket_makan/read-paketmakan'
      ];
      $data['paket_makan'] = $this->paketmakan_model->getDataPaketMakan()->result_array();
      $this->load->view('_templatesAdmin/home', $data);
   }

   public function add()
   {
      $this->form_validation->set_rules('kd_paket', 'Kode Paket', 'required|trim');
      $this->form_validation->set_rules('nama_paket', 'Nama Paket', 'required|trim');
      $this->form_validation->set_rules('harga', 'harga', 'required|trim');
      $this->form_validation->set_rules('ket', 'Keterangan', 'required|trim');
      if ($this->form_validation->run() == FALSE) {
      $data = [
         'title' => SITE_NAME,
         'judul' => 'Add Paket Makan',
         'isi'   => 'admin/paket_makan/add-paketmakan'
      ];
      $data['rules'] = $this->db->get('paket_makan')->result_array();
      $this->load->view('_templatesAdmin/home', $data);
      } else{
       $data =  [
                  'kd_paket' => $this->input->post('kd_paket'),
                  'nama_paket' => $this->input->post('nama_paket'),
                  'harga' => $this->input->post('harga'),
                  'satuan' => $this->input->post('satuan'),
                  'ket' => $this->input->post('ket'),
                  'kategori' => $this->input->post('kategori')
         ];
         $cek = $this->paketmakan_model->save($data);
         if ($cek){
            $this->session->set_flashdata('pesan', 'Berhasil Menambahkan Data Paket Makan');
            redirect(base_url('paket_makan'));
         }
      }
   }

   public function hapus($kd_paket)
   {
      $this->paketmakan_model->HapusDataPaketMakan($kd_paket);
      $this->session->set_flashdata('flash', 'Dihapus');
      redirect(base_url('paket_makan'));
   }
}
