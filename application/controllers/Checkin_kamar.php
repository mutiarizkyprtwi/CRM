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
      $this->form_validation->set_rules('email_pemesan', 'Email Pemesan', 'required|trim');
      $this->form_validation->set_rules('lama_menginap', 'lama_menginap', 'required|trim');
      $this->form_validation->set_rules('harga_awal', 'Harga Awal', 'required|trim');
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
                  'no_kamar' => $this->input->post('no_kamar'),
                  'email_pemesan' => $this->input->post('email_pemesan'),
                  'arrival' => date("Y-m-d", strtotime($this->input->post('arrival'))),
                  'depart' => date("Y-m-d", strtotime($this->input->post('depart'))),
                  'lama_menginap' => $this->input->post('lama_menginap'),
                  'harga_awal' => $this->input->post('harga_awal'),
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

   public function hapus($nomor_checkin)
   {
      $this->checkin_kamar_model->HapusDataCheckin($nomor_checkin);
      $this->session->set_flashdata('flash', 'Dihapus');
      redirect(base_url('checkin_kamar'));
   }
}
