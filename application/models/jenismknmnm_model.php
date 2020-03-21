<?php
defined('BASEPATH') or exit('No direct script access allowed');

class jenismknmnm_model extends CI_Model
{
  private $_table = "m_jenismakanan";

   public function getDataJenisMknMnm(){
    return $this->db->get($this->_table);
  }

  public function save($data){

  	//insert ke dalam tabel users
  	return $this->db->insert($this->_table, $data);
  }

  public function HapusDataJenisResto($kd_jns_menu)
  {
    $this->db->where('kd_jns_menu', $kd_jns_menu);
    $this->db->delete('m_jenismakanan');
  }

  public function UbahJenisMknMnm($data, $kd_jns_menu)
  {
    //insert ke dalam tabel users
    return $this->db->update($this->_table, $data, ['kd_jns_menu'=>$kd_jns_menu]);
  }

}
