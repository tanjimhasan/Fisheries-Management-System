<?php
/**
* 
*/
class model_user extends CI_Model
{
	function check_email($email)
	{
		
		$this->db->select("*");
		$this->db->where("email", $email);
		$query = $this->db->get("user_info");
		return $query;
	}
	function fetch_user_details($user_id)
	{
		
		$this->db->select("*");
		$this->db->where("user_id", $user_id);
		$query = $this->db->get("user_info");
		return $query;
	}
	function insertUser($data)
	{
		$this->db->insert("user_info",$data);
	}
	function user_login($data)
	{
		$this->db->select("*");
		$this->db->where("email",$data['email']);
		$this->db->where("usertype",$data['usertype']);
		$this->db->where("password",$data['password']);
		$query = $this->db->get("user_info");
		return $query;
	}



	function editUserData($data,$user_id){
		$this->db->where("user_id", $user_id);
		$this->db->update("user_info",$data);
		if ($this->db->affected_rows()>0) {
        	return true;
        }else{
        	return NULL;
        }
	}
}
?>