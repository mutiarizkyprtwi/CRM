<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jenis_Makan_Minum extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->model('jenismknmnm_model');
      otentikasi();
   }

   public function index()
   {
      $data      =  [
         'title' => SITE_NAME,
         'judul' => 'Jenis Pilihan Resto',
         'isi'   => 'admin/jenismknmnm/read-jenismknmnm'
      ];
      $data['jenismknmnm'] = $this->jenismknmnm_model->getDataJenisMknMnm()->result_array();
      $this->load->view('_templatesAdmin/home', $data);
   }

   public function add()
   {
      $this->form_validation->set_rules('kd_jns_menu', 'Kode Jenis Menu', 'required|trim');
      $this->form_validation->set_rules('jns_menu', 'Jenis Menu', 'required|trim');
      if ($this->form_validation->run() == FALSE) {
      $data = [
         'title' => SITE_NAME,
         'judul' => 'Add Jenis resto',
         'isi'   => 'admin/jenismknmnm/add-jenismknmnm'
      ];
      $data['rules'] = $this->db->get('m_jenismakanan')->result_array();
      $this->load->view('_templatesAdmin/home', $data);
      } else{
       $data =  [
                  'kd_jns_menu' => $this->input->post('kd_jns_menu'),
                  'jns_menu' => $this->input->post('jns_menu')
         ];
         $cek = $this->jenismknmnm_model->save($data);
         if ($cek){
            $this->session->set_flashdata('pesan', 'Berhasil Menambahkan Jenis Resto');
            redirect(base_url('jenis_makan_minum'));
         }
      }
   }

   public function hapus($kd_jns_menu)
   {
      $this->jenismknmnm_model->HapusDataJenisResto($kd_jns_menu);
      $this->session->set_flashdata('flash', 'Dihapus');
      redirect(base_url('jenis_makan_minum'));
   }


   public function ubah($kd_jns_menu)
   {
      $this->form_validation->set_rules('kd_jns_menu', 'Kode Jenis Menu', 'required|trim');
      $this->form_validation->set_rules('jns_menu', 'Jenis Menu', 'required|trim');
      if ($this->form_validation->run() == FALSE) {
      $data = [
         'title' => SITE_NAME,
         'judul' => 'Ubah Jenis Resto',
         'isi'   => 'admin/jenismknmnm/ubah-jenismknmnm'
      ];
      $data['rules'] = $this->db->get_where('m_jenismakanan', ['kd_jns_menu'=>$kd_jns_menu])->result_array();
      $this->load->view('_templatesAdmin/home', $data);
      } else{
         $data =  [
                  'kd_jns_menu' => $this->input->post('kd_jns_menu'),
                  'jns_menu' => $this->input->post('jns_menu')
                  ];
         $cek = $this->jenismknmnm_model->UbahJenisMknMnm($data, $kd_jns_menu);
         if ($cek){
            $this->session->set_flashdata('pesan', 'Berhasil Mengubah Data Jenis Menu');
            redirect(base_url('jenis_makan_minum'));
         }
      }
   }
}




