<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      otentikasi();
      $this->load->model('profile_model');
   }
   public function index()
   {
      $data      =  [
         'title' => SITE_NAME,
         'judul' => 'Profile Users',
         'isi'   => 'admin/profile/read-profile'
      ];
      $data['dataprofil'] = $this->profile_model->getDataById();
      $this->load->view('_templatesAdmin/home', $data);
   }

   public function edit()
   {
      $data      =  [
         'title' => SITE_NAME,
         'judul' => 'Edit Profile',
         'isi'   => 'admin/profile/read-profile'
      ];
      $data['dataprofil'] = $this->profile_model->getDataById();
      $this->load->view('_templatesAdmin/home', $data);
   }

   public function save()
   {
      $data = [
         'idUser'       => $this->input->post('idUser'),
         'namaDepan'    => $this->input->post('namaDepan'),
         'namaBelakang' => $this->input->post('namaBelakang'),
         'tglLahir'     => $this->input->post('tglLahir'),
         'jk'           => $this->input->post('jk'),
         'kontak'       => $this->input->post('kontak'),
         'email'        => $this->input->post('email'),
         'alamat'       => $this->input->post('alamat')
      ];

      if ($_FILES['photo']['name'] !== '') {
         $config['image_library']  = 'gd2';
         $config['upload_path']    = './assets/images/profile';
         $config['allowed_types']  = 'gif|jpg|png|jpeg';
         $config['max_size']       = 2024;
         $config['create_thumb']   = FALSE;
         $config['maintain_ratio'] = FALSE;
         $config['width']          = 128;
         $config['height']         = 128;

         $this->load->library('upload', $config);

         if ($this->upload->do_upload('photo')) {
            $data['photo'] =  $this->upload->data('file_name');
            $config['source_image']   = './assets/images/profile/' . $data['photo'];
            $config['new_image']      = './assets/images/profile/resize/' . $data['photo'];
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();

            $this->profile_model->update($data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> <i class="zmdi zmdi-check-circle-u"></i> Data berhasil diubah!</div>');
            redirect(base_url('profile'));
         } else {
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert"> <i class="zmdi zmdi-info-outline"></i> ' . str_replace(['<p>', '</p>'], '', $error['error']) . '!</div>');
            redirect(base_url('profile'));
         }
      } else {
         $data['photo'] = NULL;
         $upd = $this->profile_model->update($data);
         if ($upd) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> <i class="zmdi zmdi-check-circle-u"></i> Data berhasil diubah!</div>');
            redirect(base_url('profile'));
         }
      }
   }
}
