<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{ 

	public function __construct(){
		parent::__construct();
		$this->load->model('dashboard_model');
	}
	
   public function index()
   {
      $data      =  [
         'title' => SITE_NAME,
         'judul' => 'Dashboard',
         'isi'   => 'malaka/dashboard'
      ];
      $data['kamar']=$this->dashboard_model->getAllKamar();
      $data['room']=$this->dashboard_model->getAllRoom();
      $this->load->view('_templates/home', $data);
   }
}
