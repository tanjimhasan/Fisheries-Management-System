<?php
/**
* 
*/
class account_model extends CI_Model
{
	function fetch_all_user()
	{
		
		$this->db->select("*");
		$query = $this->db->get("user_info");
		return $query;
	}
	function add_admin($data)
	{
		$this->db->insert("admin",$data);
	}
	function user_login($data)
	{
		$this->db->select("*");
		$this->db->where("email",$data['email']);
		$this->db->where("password",$data['password']);
		$query = $this->db->get("admin");
		return $query;
	}

}
?>