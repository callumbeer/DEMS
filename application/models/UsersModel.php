<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class UsersModel extends CI_Model
{
   function __construct()
   {
      parent::__construct();
      $this->load->database();
      //$this->load->library('session');
   }
   function insertUser($data)
   {
      $this->db->insert('user',$data);
      return $this->db->insert_id();
   }
   
   public function get_users()
   {
      $array = $this->db->get('user')->result_array();
      return $array;
   }
	
   public function user_info_by_id($id)
   {
      $this->db->where('id',$id);
      $data = $this->db->get('user')->row();
      return $data;
   }


}
