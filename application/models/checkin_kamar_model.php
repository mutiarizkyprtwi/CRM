<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Checkin_kamar_model extends CI_Model
{
  private $_table = "checkin";

   public function getDataCheckinKamar(){
    return $this->db->get($this->_table);
  }

  public function save($data){
  	//insert ke dalam tabel users
  	return $this->db->insert($this->_table, $data);
  }

   public function HapusDataBallroom($id_user)
  {
    $this->db->where('id_user', $id_user);
    $this->db->delete('checkin');

  }

}
