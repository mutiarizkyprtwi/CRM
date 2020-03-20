<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->model('users_model');
      otentikasi();
   }

   public function index()
   {
      $data      =  [
         'title' => SITE_NAME,
         'judul' => 'Users',
         'isi'   => 'admin/users/read-users'
      ];
      $data['users'] = $this->users_model->getDataUsers()->result_array();
      $this->load->view('_templatesAdmin/home', $data);
   }

   public function add()
   {
      $this->form_validation->set_rules('username', 'Username', 'required|trim');
      $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_emails');
      $this->form_validation->set_rules('password', 'password', 'required|min_length[3]|max_length[16]');
      if ($this->form_validation->run() == FALSE) {
          $data      =  [
         'title' => SITE_NAME,
         'judul' => 'Users',
         'isi'   => 'admin/users/add-users'
          ];
         $data['rules'] = $this->db->get('users_role')->result_array();
         $this->load->view('_templatesAdmin/home', $data);
      } else {
       //CEK JIKA PASSWORD KOSONG
            if ($this->input->post('password')==NULL) {
               $password = password_hash(DEFAULT_USER_PASSWORD,PASSWORD_DEFAULT);
          }
       else{
            $password = password_hash($this->input->post('password'),PASSWORD_DEFAULT);
          }
         $data =  [
                  'username' => $this->input->post('username'),
                  'email' => $this->input->post('email'),
                  'password' => $password,
                  'role_id' => $this->input->post('roleId')
         ];
         $cek = $this->users_model->save($data);
         if ($cek){
            $this->session->set_flashdata('pesan', 'Berhasil Menambahkan Users');
            redirect(base_url('users'));
         }
      } 
   }

    public function hapus($id_user)
   {
      $this->users_model->HapusDataUsers($id_user);
      $this->session->set_flashdata('flash', 'Dihapus');
      redirect(base_url('users'));
   }
}

