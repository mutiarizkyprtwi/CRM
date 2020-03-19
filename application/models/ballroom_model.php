<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ballroom_model extends CI_Model
{
  private $_table = "m_ballroom";

   public function getDataBallroom(){
    return $this->db->get($this->_table);
  }

  public function save($data){
  	//insert ke dalam tabel users
  	return $this->db->insert($this->_table, $data);
  }

   public function HapusDataBallroom($kd_ballroom)
  {
    $this->db->where('kd_ballroom', $kd_ballroom);
    $this->db->delete('m_ballroom');

  }

}
