<?php
defined('BASEPATH') or exit('No direct script access allowed');

class paketmakan_model extends CI_Model
{
  private $_table = "paket_makan";

   public function getDataPaketMakan(){
    return $this->db->get($this->_table);
  }

  public function save($data){

  	//insert ke dalam tabel users
  	return $this->db->insert($this->_table, $data);
  }

  public function HapusDataPaketMakan($kd_paket)
  {
    $this->db->where('kd_paket', $kd_paket);
    $this->db->delete('paket_makan');
  }

  public function UbahPaketMakan($data, $kd_paket)
  {
    //insert ke dalam tabel users
    return $this->db->update($this->_table, $data, ['kd_paket'=>$kd_paket]);
  }

}
