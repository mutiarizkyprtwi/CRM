<?php
defined('BASEPATH') or exit('No direct script access allowed');

class No_kamar extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->model('nokamar_model');
   }

   public function index()
   {
      $data      =  [
         'title' => SITE_NAME,
         'judul' => 'Kamar',
         'isi'   => 'admin/no_kamar/read-nokamar'
      ];
      $data['no_kamar'] = $this->nokamar_model->getDataNoKamar()->result_array();
      $this->load->view('_templatesAdmin/home', $data);
   }

   public function add()
   {
      $this->form_validation->set_rules('no_kamar', 'Nomor Kamar', 'required|trim');
      $this->form_validation->set_rules('lantai', 'Lantai', 'required|trim');
      if ($this->form_validation->run() == FALSE) {
      $data = [
         'title' => SITE_NAME,
         'judul' => 'Add Nomor Kamar',
         'isi'   => 'admin/no_kamar/add-nokamar'
      ];
      $data['rules'] = $this->db->get('m_kamar')->result_array();
      $this->load->view('_templatesAdmin/home', $data);
      } else{
       $data =  [
                  'no_kamar' => $this->input->post('no_kamar'),
                  'lantai' => $this->input->post('lantai'),
                  'mata_uang' => $this->input->post('mata_uang'),
                  'kd_kategori' => $this->input->post('kd_kategori')
         ];
         $cek = $this->nokamar_model->save($data);
         if ($cek){
            $this->session->set_flashdata('pesan', 'Berhasil Menambahkan Data Ballroom');
            redirect(base_url('no_kamar'));
         }
      }
   }

   public function hapus($no_kamar)
   {
      $this->nokamar_model->HapusDataNoKamar($no_kamar);
      $this->session->set_flashdata('flash', 'Dihapus');
      redirect(base_url('no_kamar'));
   }
}