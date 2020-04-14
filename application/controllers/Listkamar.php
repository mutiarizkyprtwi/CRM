<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Listkamar extends CI_Controller
{ 

	public function __construct(){
		parent::__construct();
		$this->load->model('listkamar_model');
	}
	
   public function index()
   {
      $data      =  [
         'title' => SITE_NAME,
         'judul' => 'Dashboard',
         'isi'   => 'malaka/listkamar/list'
      ];
      $data['kamar']=$this->listkamar_model->getAllKamar();
      $data['categories']=$this->listkamar_model->getCategories();
      $this->load->view('_templates/home', $data);
   }
}
