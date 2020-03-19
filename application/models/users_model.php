<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users_model extends CI_Model
{
  private $_table = "users";

  public function getDataUsers(){
  	$this->db->join('users_role', 'users.role_id=users_role.id_role');
  	$this->db->join('users_profile', 'users.id_user=users_profile.id_user', 'left');
  	return $this->db->get($this->_table);
  }
  public function save($data){

  	//insert ke dalam tabel users
  	return $this->db->insert($this->_table, $data);
  }

   public function HapusDataUsers($id_user)
  {
    $this->db->where('id_user', $id_user);
    $this->db->delete('users');

  }
}
