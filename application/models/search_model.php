<?php
/**
* 
*/
class search_model extends CI_Model
{
	function fetch_searched_data($search_item)
	{
		
		$query = $this->db->query("SELECT id,post_title FROM cultivation_process WHERE post_title  LIKE '%$search_item%'");
		
		return $query;
	}
	function fetch_searched_solution($search_item)
	{		
		$query = $this->db->query("SELECT id,problem_title FROM tbl_solution_details WHERE problem_title  LIKE '%$search_item%'");
		
		return $query;
	}
	
}
?>