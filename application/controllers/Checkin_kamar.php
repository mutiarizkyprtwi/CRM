<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Checkin_kamar extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->model('checkin_kamar_model');
      otentikasi();
   }

   public function index()
   {
      $data      =  [
         'title' => SITE_NAME,
         'judul' => 'Check-in kamar',
         'isi'   => 'admin/checkin_kamar/read-checkin_kamar'
      ];
      $data['checkin_kamar'] = $this->checkin_kamar_model->getDataCheckinKamar()->result_array();
      $this->load->view('_templatesAdmin/home', $data);
   }

   public function add()
   {
      $this->form_validation->set_rules('no_kamar', 'Nomor Kamar', 'required|trim');
      $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
      $this->form_validation->set_rules('harga', 'Harga', 'required|trim');
      $this->form_validation->set_rules('bf', 'bf', 'required|trim');
      $this->form_validation->set_rules('extra_bed', 'Extra Bed', 'required|trim');
      $this->form_validation->set_rules('total_harga', 'Total Harga', 'required|trim');
      $this->form_validation->set_rules('pax', 'pax', 'required|trim');
      $this->form_validation->set_rules('hu', 'HU', 'required|trim');
      $this->form_validation->set_rules('remark', 'Remark', 'required|trim');
      if ($this->form_validation->run() == FALSE) {
      $data = [
         'title' => SITE_NAME,
         'judul' => 'Add Check-in Kamar',
         'isi'   => 'admin/checkin_kamar/add-checkin_kamar'
      ];
      $data['rules'] = $this->db->get('checkin')->result_array();
      $this->load->view('_templatesAdmin/home', $data);
      } else{
       $data =  [
                  'id_user' => $this->input->post('id_user'),
                  'no_kamar' => $this->input->post('no_kamar'),
                  'type_room' => $this->input->post('type_room'),
                  'harga' => $this->input->post('harga'),
                  'bf' => $this->input->post('bf'),
                  'extra_bed' => $this->input->post('extra_bed'),
                  'total_harga' => $this->input->post('total_harga'),
                  'pax' => $this->input->post('pax'),
                  'hu' => $this->input->post('hu'),
                  'remark' => $this->input->post('remark')
         ];
         $cek = $this->checkin_kamar_model->save($data);
         if ($cek){
            $this->session->set_flashdata('pesan', 'Berhasil Menambahkan Data Check-in Kamar');
            redirect(base_url('checkin_kamar'));
         }
      }
   }

   public function hapus($id_user)
   {
      $this->checkin_kamar_model->HapusDataBallroom($id_user);
      $this->session->set_flashdata('flash', 'Dihapus');
      redirect(base_url('checkin_kamar'));
   }
}
