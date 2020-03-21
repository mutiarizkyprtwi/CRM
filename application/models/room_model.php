<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Room_model extends CI_Model
{
  private $_table = "m_room";

   public function getDataRoom(){
    return $this->db->get($this->_table);
  }

  public function save($data){
  	//insert ke dalam tabel users
  	return $this->db->insert($this->_table, $data);
  }

   public function HapusDataRoom($kd_room)
  {
    $this->db->where('kd_room', $kd_room);
    $this->db->delete('m_room');
  }

  public function Ubahroom($data, $kd_room)
  {
    //insert ke dalam tabel users
    return $this->db->update($this->_table, $data, ['kd_room'=>$kd_room]);
  }

}
