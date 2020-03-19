<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ballroom extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->model('ballroom_model');
   }

   public function index()
   {
      $data      =  [
         'title' => SITE_NAME,
         'judul' => 'Ballroom',
         'isi'   => 'admin/ballroom/read-ballroom'
      ];
      $data['ballroom'] = $this->ballroom_model->getDataBallroom()->result_array();
      $this->load->view('_templatesAdmin/home', $data);
   }

   public function add()
   {
      $this->form_validation->set_rules('kd_ballroom', 'Kode Ballroom', 'required|trim');
      $this->form_validation->set_rules('jenis_ballroom', 'Jenis Ballroom', 'required|trim');
      $this->form_validation->set_rules('harga', 'harga', 'required|trim');
      $this->form_validation->set_rules('detail', 'detail', 'required|trim');
      if ($this->form_validation->run() == FALSE) {
      $data = [
         'title' => SITE_NAME,
         'judul' => 'Add Ballroom',
         'isi'   => 'admin/ballroom/add-ballroom'
      ];
      $data['rules'] = $this->db->get('m_ballroom')->result_array();
      $this->load->view('_templatesAdmin/home', $data);
      } else{
       $data =  [
                  'kd_ballroom' => $this->input->post('kd_ballroom'),
                  'jenis_ballroom' => $this->input->post('jenis_ballroom'),
                  'mata_uang' => $this->input->post('mata_uang'),
                  'harga' => $this->input->post('harga'),
                  'satuan' => $this->input->post('satuan'),
                  'detail' => $this->input->post('detail'),
                  'kategori' => $this->input->post('kategori')
         ];
         $cek = $this->ballroom_model->save($data);
         if ($cek){
            $this->session->set_flashdata('pesan', 'Berhasil Menambahkan Data Ballroom');
            redirect(base_url('ballroom'));
         }
      }
   }

   public function hapus($kd_ballroom)
   {
      $this->ballroom_model->HapusDataBallroom($kd_ballroom);
      $this->session->set_flashdata('flash', 'Dihapus');
      redirect(base_url('ballroom'));
   }
}
