<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->model('login_model');
   }

   public function index()
   {
      $data      =  [
         'title' => SITE_NAME,
         'judul' => 'Login Page'
      ];
      $this->load->view('auth/login', $data);
   }

   public function login()
   {
      $this->form_validation->set_rules('username', 'Username', 'required|trim');
      $this->form_validation->set_rules('password', 'Password', 'required|min_length[3]|max_length[16]');
      if ($this->form_validation->run() == FALSE) {
         $this->load->view('auth/login');
      } else {
         $username = $this->input->post('username');
         $password = $this->input->post('password');

         $user = $this->login_model->cekUsername('users', ['username' => $username]);

         if ($user) {
            if ($user['aktif'] == "Y") {
               if (password_verify($password, $user['password'])) {
                  $data = [
                     'idUser'    => $user['id_user'],
                     'usernama'  => $user['username'],
                     'createdAt' => $user['created_at'],
                     'roleId'    => $user['role_id'],
                     'role'      => $user['role']
                  ];
                  $qloginat = "UPDATE users SET login_at=CURRENT_TIMESTAMP() WHERE username='$username'";
                  $this->db->query($qloginat);
                  $this->session->set_userdata($data);
               } else {
                  $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert"> <i class="zmdi zmdi-alert-circle-o"></i> Wrong password!</div>');
                  $this->load->view('auth/login');
               }
            } else {
               $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert"> <i class="zmdi zmdi-alert-circle-o"></i> User account is not actived!</div>');
               $this->load->view('auth/login');
            }
         } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert"> <i class="zmdi zmdi-alert-circle-o"></i> Username is not registered!</div>');
            $this->load->view('auth/login');
         }
      }
   }
}
