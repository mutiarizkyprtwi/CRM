<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fasilitas extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->model('fasilitas_model');
   }

   public function index()
   {
      $data      =  [
         'title' => SITE_NAME,
         'judul' => 'Fasilitas Hotel',
         'isi'   => 'admin/fasilitas/read-fasilitas'
      ];
      $data['fasilitas'] = $this->fasilitas_model->getDataFasilitas()->result_array();
      $this->load->view('_templatesAdmin/home', $data);
   }

   public function add()
   {
      $this->form_validation->set_rules('kd_fasilitas', 'Kode Fasilitas', 'required|trim');
      $this->form_validation->set_rules('fasilitas', 'Fasilitas', 'required|trim');
      if ($this->form_validation->run() == FALSE) {
      $data = [
         'title' => SITE_NAME,
         'judul' => 'Add Fasilitas',
         'isi'   => 'admin/fasilitas/add-fasilitas'
      ];
      $data['rules'] = $this->db->get('m_fasilitas')->result_array();
      $this->load->view('_templatesAdmin/home', $data);
      } else{
         $data =  [
                  'kd_fasilitas' => $this->input->post('kd_fasilitas'),
                  'fasilitas' => $this->input->post('fasilitas')
         ];
         $cek = $this->fasilitas_model->save($data);
         if ($cek){
            $this->session->set_flashdata('pesan', 'Berhasil Menambahkan Data Fasilitas');
            redirect(base_url('fasilitas'));
         }
      }
   }

    public function hapus($kd_fasilitas)
   {
      $this->fasilitas_model->HapusDataFasilitas($kd_fasilitas);
      $this->session->set_flashdata('flash', 'Dihapus');
      redirect(base_url('fasilitas'));
   }
}