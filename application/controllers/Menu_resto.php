<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_resto extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->model('menuresto_model');
   }

   public function index()
   {
      $data      =  [
         'title' => SITE_NAME,
         'judul' => 'Menu Resto',
         'isi'   => 'admin/menu_resto/read-menuresto'
      ];
      $data['menu_resto'] = $this->menuresto_model->getDataMenuResto()->result_array();
      $this->load->view('_templatesAdmin/home', $data);
   }

   public function add()
   {
      $this->form_validation->set_rules('kd_menu', 'Kode Paket', 'required|trim');
      $this->form_validation->set_rules('nama_menu', 'Nama Menu', 'required|trim');
      $this->form_validation->set_rules('harga', 'Harga', 'required|trim');
      if ($this->form_validation->run() == FALSE) {
      $data = [
         'title' => SITE_NAME,
         'judul' => 'Add Menu Resto',
         'isi'   => 'admin/menu_resto/add-menuresto'
      ];
      $data['rules'] = $this->db->get('menu_resto')->result_array();
      $this->load->view('_templatesAdmin/home', $data);
      } else{
       $data =  [
                  'kd_menu' => $this->input->post('kd_menu'),
                  'kd_jns_menu' => $this->input->post('kd_jns_menu'),
                  'nama_menu' => $this->input->post('nama_menu'),
                  'harga' => $this->input->post('harga'),
                  'ket' => $this->input->post('ket')
         ];
         $cek = $this->menuresto_model->save($data);
         if ($cek){
            $this->session->set_flashdata('pesan', 'Berhasil Menambahkan Menu Resto');
            redirect(base_url('menu_resto'));
         }
      }
   }

   public function hapus($kd_menu)
   {
      $this->menuresto_model->HapusDataMenuResto($kd_menu);
      $this->session->set_flashdata('flash', 'Dihapus');
      redirect(base_url('menu_resto'));
   }
}
