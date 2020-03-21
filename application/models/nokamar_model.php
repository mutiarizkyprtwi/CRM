<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Nokamar_model extends CI_Model
{
  private $_table = "m_kamar";

   public function getDataNoKamar(){
    $this->db->join('m_kategori', 'm_kamar.kd_kategori=m_kategori.kd_kategori');
    return $this->db->get($this->_table);
  }

  public function save($data){

  	//insert ke dalam tabel users
    return $this->db->insert($this->_table, $data);
  }

   public function HapusDataNoKamar($no_kamar)
  {
    $this->db->where('no_kamar', $no_kamar);
    $this->db->delete('m_kamar');

  }

  public function UbahNoKamar($data, $no_kamar)
  {
    //insert ke dalam tabel users
    $this->db->join('m_kategori', 'm_kamar.kd_kategori=m_kategori.kd_kategori');
    return $this->db->update($this->_table, $data, ['no_kamar'=>$no_kamar]);
  }

}
