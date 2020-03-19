<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fasilitas_model extends CI_Model
{
  private $_table = "m_fasilitas";

   public function getDataFasilitas(){
    return $this->db->get($this->_table);
  }

  public function save($data){

  	//insert ke dalam tabel users
  	return $this->db->insert($this->_table, $data);
  }

    public function HapusDataFasilitas($kd_fasilitas)
  {
    $this->db->where('kd_fasilitas', $kd_fasilitas);
    $this->db->delete('m_fasilitas');

  }

}
