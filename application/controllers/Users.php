<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
   }

   public function index()
   {
      $data      =  [
         'title' => SITE_NAME,
         'judul' => 'Users',
         'isi'   => 'admin/users/read-users'
      ];
      $this->load->view('_templatesAdmin/home', $data);
   }
}
