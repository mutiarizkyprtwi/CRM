<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Checkin_kamar_model extends CI_Model
{
  private $_table = "checkin";

   public function getDataCheckinKamar(){
    $this->db->join('m_kamar', 'checkin.no_kamar=m_kamar.no_kamar');
    $this->db->join('m_kategori', 'm_kamar.kd_kategori=m_kategori.kd_kategori');
    return $this->db->get($this->_table);
  }

  public function save($data){
  	//insert ke dalam tabel users
  	return $this->db->insert($this->_table, $data);
  }

   public function HapusDataCheckin($nomor_checkin)
  {
    $this->db->where('nomor_checkin', $nomor_checkin);
    $this->db->delete('checkin');

  }

}
