<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Nokamar_model extends CI_Model
{
  private $_table = "m_kamar";

   public function getDataNoKamar(){
    $this->db->join('m_kategori', 'm_kamar.kd_kategori=m_kategori.kd_kategori');
    return $this->db->get($this->_table);
  }

  public function save(){

  	//ambil semua data form users
  	$this->no_kamar = $this->input->post('no_kamar');
  	$this->lantai = $this->input->post('lantai');
  	$this->kd_kategori = $this->input->post('kd_kategori');
  	//insert ke dalam tabel users
  	$this->db->insert($this->_table, $this);
  }

   public function HapusDataNoKamar($no_kamar)
  {
    $this->db->where('no_kamar', $no_kamar);
    $this->db->delete('m_kamar');

  }

}
