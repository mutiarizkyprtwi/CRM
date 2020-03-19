<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile_model extends CI_Model
{
   private $_table = "users_profile";

   public function getDataById()
   {
      $id = $this->session->userdata('idUser');
      return $this->db->get_where($this->_table, ['id_user' => $id])->result_array();
   }

   public function update($data)
   {
      if ($data['photo'] == NULL) {
         $update = array(
            'nama_depan'    => $data['namaDepan'],
            'nama_belakang' => $data['namaBelakang'],
            'tgl_lahir'     => date('Y-m-d', strtotime($data['tglLahir'])),
            'jk'            => $data['jk'],
            'alamat'        => $data['alamat'],
            'kontak'        => $data['kontak']
         );
      } else {
         $update = array(
            'nama_depan'    => $data['namaDepan'],
            'nama_belakang' => $data['namaBelakang'],
            'tgl_lahir'     => $data['tglLahir'],
            'jk'            => $data['jk'],
            'alamat'        => $data['alamat'],
            'kontak'        => $data['kontak'],
            'foto'          => $data['photo']
         );
      }
      return $this->db->update($this->_table, $update, ['id_user' => $data['idUser']]);
   }
}
