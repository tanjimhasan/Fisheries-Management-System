<?php
/**
* 
*/
class search_model extends CI_Model
{
	function fetch_searched_data($search_item)
	{
		
		//$this->db->select("id,post_title");
		// $this->db->like('post_title', $search_item);
		// $query = $this->db->get("cultivation_process");
		$query = $this->db->query("SELECT id,post_title FROM cultivation_process WHERE post_title  LIKE '%$search_item%'");
		//$result= $this->db->last_query();
		return $query;
	}
	function fetch_searched_solution($search_item)
	{
		
		//$this->db->select("id,post_title");
		// $this->db->like('post_title', $search_item);
		// $query = $this->db->get("cultivation_process");
		$query = $this->db->query("SELECT id,problem_title FROM tbl_solution_details WHERE problem_title  LIKE '%$search_item%'");
		//$result= $this->db->last_query();
		return $query;
	}
	
}
?>