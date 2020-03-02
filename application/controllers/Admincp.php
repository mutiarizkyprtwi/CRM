<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admincp extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();

      if ($this->session->userdata('status') != "login") {
         redirect(base_url("auth"));
      }
   }

   public function index()
   {
      $data      =  [
         'title' => SITE_NAME,
         'judul' => 'Dashboard',
         'isi'   => 'admin/dashboard'
      ];
      $this->load->view('_templatesAdmin/home', $data);
   }
}
