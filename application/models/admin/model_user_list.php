<?php
/**
* 
*/
class model_user_list extends CI_Model
{
	function fetch_all_user()
	{
		
		$this->db->select("*");
		$query = $this->db->get("user_info");
		return $query;
	}
	function enable_user($id){
		$this->db->set('status', 1);
		$this->db->where('user_id', $id);
		$this->db->update('user_info');
	}
	function disable_user($id){
		$this->db->set('status', 0);
		$this->db->where('user_id', $id);
		$this->db->update('user_info');
	}
}
?>