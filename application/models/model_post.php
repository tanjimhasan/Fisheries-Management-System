<?php
/**
* 
*/
class model_post extends CI_Model
{
	function insertPost($data)
	{
		$this->db->insert("cultivation_process",$data);
	}
	function fetch_all_posts()
	{
		$this->db->select("id,date,post_title,firstname,lastname,fish_image");
		$this->db->from("cultivation_process");
		$this->db->join("user_info","user_info.user_id = cultivation_process.user_id");
		$query = $this->db->get();
		return $query;
	}
	function fetch_post_details($id)
	{
		$this->db->select("*");
		$this->db->from("cultivation_process");
		$this->db->where("id" , $id);
		$query = $this->db->get();
		return $query;
	}
	function updatePostData($data,$id)
	{
		 $this->db->where('id', $id);
        $this->db->update('cultivation_process', $data);
        if ($this->db->affected_rows()>0) {
        	return true;
        }else{
        	return false;
        }
       
	}
}
?>