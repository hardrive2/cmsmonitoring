<?php 
 
class M_auth extends CI_Model{

	function login($post){

		$this->db->from('tb_login');
		$this->db->where('username', $post['username']);
		$this->db->where('password', sha1($post['password']));
		$query = $this->db->get();
		return $query;

	}
}