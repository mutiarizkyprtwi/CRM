<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Room extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->model('room_model');
      otentikasi();
   }

   public function index()
   {
      $data      =  [
         'title' => SITE_NAME,
         'judul' => 'Type Room',
         'isi'   => 'admin/room/read-room'
      ];
      $data['room'] = $this->room_model->getDataRoom()->result_array();
      $this->load->view('_templatesAdmin/home', $data);
   }

   public function add()
   {
      $this->form_validation->set_rules('kd_room', 'Kode Room', 'required|trim');
      $this->form_validation->set_rules('room', 'Room', 'required|trim');
      $this->form_validation->set_rules('location', 'Location', 'required|trim');
      $this->form_validation->set_rules('size', 'Size', 'required|trim');
      $this->form_validation->set_rules('theatre', 'Theatre', 'required|trim');
      $this->form_validation->set_rules('u-shape', 'U-shape', 'required|trim');
      $this->form_validation->set_rules('class', 'Class', 'required|trim');
      if ($this->form_validation->run() == FALSE) {
      $data = [
         'title' => SITE_NAME,
         'judul' => 'Add Room',
         'isi'   => 'admin/room/add-room'
      ];
      $data['rules'] = $this->db->get('m_room')->result_array();
      $this->load->view('_templatesAdmin/home', $data);
      } else{
       $data =  [
                  'kd_room' => $this->input->post('kd_room'),
                  'room' => $this->input->post('room'),
                  'location' => $this->input->post('location'),
                  'size' => $this->input->post('size'),
                  'theatre' => $this->input->post('theatre'),
                  'u-shape' => $this->input->post('u-shape'),
                  'round' => $this->input->post('round'),
                  'class' => $this->input->post('class')
         ];
         $cek = $this->room_model->save($data);
         if ($cek){
            $this->session->set_flashdata('pesan', 'Berhasil Menambahkan Data Ballroom');
            redirect(base_url('room'));
         }
      }
   }

   public function hapus($kd_room)
   {
      $this->room_model->HapusDataRoom($kd_room);
      $this->session->set_flashdata('flash', 'Dihapus');
      redirect(base_url('room'));
   }
}
