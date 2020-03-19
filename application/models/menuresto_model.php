<?php
defined('BASEPATH') or exit('No direct script access allowed');

class menuresto_model extends CI_Model
{
  private $_table = "menu_resto";

   public function getDataMenuResto(){
    $this->db->join('m_jenismakanan', 'menu_resto.kd_jns_menu=m_jenismakanan.kd_jns_menu');
    return $this->db->get($this->_table);
  }

  public function save($data){

  	//insert ke dalam tabel users
  	return $this->db->insert($this->_table, $data);
  }

  public function HapusDataMenuResto($kd_menu)
  {
    $this->db->where('kd_menu', $kd_menu);
    $this->db->delete('menu_resto');

  }

}
