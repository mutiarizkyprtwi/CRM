<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_model extends CI_Model
{
   function cekUsername($table, $username)
   {
      $this->db->join('users_role', 'users.role_id = users_role.id_role');
      $query = $this->db->get_where($table, $username)->row_array();
      return $query;
   }
}
