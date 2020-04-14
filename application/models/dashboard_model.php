<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_model extends CI_Model
{
  private $_table = "m_kategori";

   public function getAllKamar(){
    $sql = "SELECT * FROM ".$this->_table." inner join m_fotokamar on m_kategori.kd_kategori=m_fotokamar.kd_kategori group by m_kategori.kd_kategori order by RAND() limit 4";
    return $this->db->query($sql)->result_array();
  }

   public function getAllRoom(){
    $sql = "SELECT * FROM m_room left join m_fotoroom on m_room.kd_room=m_fotoroom.kd_room group by m_room.kd_room";
    return $this->db->query($sql)->result_array();
  }

}
