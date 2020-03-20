<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kamar extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->model('kamar_model');
      otentikasi();
   }

   public function index()
   {
      $data      =  [
         'title' => SITE_NAME,
         'judul' => 'Kategori Kamar',
         'isi'   => 'admin/kamar/read-kamar'
      ];
      $data['kamar'] = $this->kamar_model->getDataKamar()->result_array();
      $this->load->view('_templatesAdmin/home', $data);
   }

   public function add()
   {
      $this->form_validation->set_rules('kd_kategori', 'Kode Kategori', 'required|trim');
      $this->form_validation->set_rules('kategori', 'Kategori', 'required|trim');
      $this->form_validation->set_rules('keterangan', 'Keterangan', 'required|trim');
      $this->form_validation->set_rules('harga', 'harga', 'required|trim');
      if ($this->form_validation->run() == FALSE) {
      $data = [
         'title' => SITE_NAME,
         'judul' => 'Add Kategori Kamar',
         'isi'   => 'admin/kamar/add-kamar'
      ];
      $data['rules'] = $this->db->get('m_kategori')->result_array();
      $this->load->view('_templatesAdmin/home', $data);
      } else{
         $data =  [
                  'kd_kategori' => $this->input->post('kd_kategori'),
                  'kategori' => $this->input->post('kategori'),
                  'keterangan' => $this->input->post('keterangan'),
                  'harga' => $this->input->post('harga')
         ];
         $cek = $this->kamar_model->save($data);
         if ($cek){
            $this->session->set_flashdata('pesan', 'Berhasil Menambahkan Data Kamar');
            redirect(base_url('kamar'));
         }
      }
   }

   public function hapus($kd_kategori)
   {
      $this->kamar_model->HapusDataKamar($kd_kategori);
      $this->session->set_flashdata('flash', 'Dihapus');
      redirect(base_url('kamar'));
   }

   public function ubah($kdkategori)
   {
      $this->form_validation->set_rules('kd_kategori', 'Kode Kategori', 'required|trim');
      $this->form_validation->set_rules('kategori', 'Kategori', 'required|trim');
      $this->form_validation->set_rules('keterangan', 'Keterangan', 'required|trim');
      $this->form_validation->set_rules('harga', 'harga', 'required|trim');
      if ($this->form_validation->run() == FALSE) {
      $data = [
         'title' => SITE_NAME,
         'judul' => 'Ubah Kategori Kamar',
         'isi'   => 'admin/kamar/ubah-kamar'
      ];
      $data['rules'] = $this->db->get_where('m_kategori', ['kd_kategori'=>$kdkategori])->result_array();
      $this->load->view('_templatesAdmin/home', $data);
      } else{
         $data =  [
                  'kategori' => $this->input->post('kategori'),
                  'keterangan' => $this->input->post('keterangan'),
                  'harga' => $this->input->post('harga')
         ];
         $cek = $this->kamar_model->UbahKategoriKamar($data, $kdkategori);
         if ($cek){
            $this->session->set_flashdata('pesan', 'Berhasil Mengubah Data Kamar');
            redirect(base_url('kamar'));
         }
      }
   }
}