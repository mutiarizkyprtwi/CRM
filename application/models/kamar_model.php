<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kamar_model extends CI_Model
{
  private $_table = "m_kategori";

   public function getDataKamar(){
    return $this->db->get($this->_table);
  }

  public function save($data)
  {
  	//insert ke dalam tabel users
  	return $this->db->insert($this->_table, $data);
  }

  public function HapusDataKamar($kd_kategori)
  {
    $this->db->where('kd_kategori', $kd_kategori);
    $this->db->delete('m_kategori');
  }

  public function UbahKategoriKamar($data, $kd_kategori)
  {
    //insert ke dalam tabel users
    return $this->db->update($this->_table, $data, ['kd_kategori'=>$kd_kategori]);
  }

   public function HapusFotoKamar($id_fotokamar)
  {
    $this->db->where('id_fotokamar', $id_fotokamar);
    $this->db->delete('m_fotokamar');
  }

}
