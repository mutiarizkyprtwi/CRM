<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Listkamar_model extends CI_Model
{
  private $_table = "m_kategori";

   public function getAllKamar(){
    $sql = "SELECT * FROM ".$this->_table." inner join m_fotokamar on m_kategori.kd_kategori=m_fotokamar.kd_kategori group by m_kategori.kd_kategori";
    return $this->db->query($sql)->result_array();
  }

  
   public function getCategories(){
    $sql = "SELECT * FROM ".$this->_table." group by kategori";
    return $this->db->query($sql)->result_array();
  }


}
