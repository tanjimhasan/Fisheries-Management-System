<?php
/**
* 
*/
class model_problem_details extends CI_Model
{
	function insertProblem($data)
	{
		$this->db->insert("tbl_problem_details",$data);
	}
	function fetch_all_problem($category)
	{
		$this->db->select("id,firstname,lastname,fish_name,problem_details,tbl_problem_details.status");
		$this->db->from("tbl_problem_details");
		
		$this->db->join("user_info","user_info.user_id = tbl_problem_details.user_id");
		$this->db->where("tbl_problem_details.problem_category" , $category);
		$query = $this->db->get();
		return $query;
	}
	function fetch_all_solved_problem()
	{
		$this->db->select("tbl_problem_details.id,firstname,lastname,problem_image,problem_title,tbl_problem_details.status");
		$this->db->from("tbl_problem_details");
		$this->db->join("tbl_solution_details","tbl_solution_details.problem_id = tbl_problem_details.id");
		$this->db->join("user_info","user_info.user_id = tbl_problem_details.user_id");
		$query = $this->db->get();
		return $query;
	}

	function fetch_problem_details($id)
	{
		$this->db->select("*");
		$this->db->from("tbl_problem_details");
		$this->db->where("id" , $id);
		$query = $this->db->get();
		return $query;
	}

	function check_solution($id){
		$this->db->select("*");
		$this->db->from("tbl_solution_details");
		$this->db->where("problem_id" , $id);
		$query = $this->db->get();
		return $query;
	}
	function fetch_problem_list($id){
		$this->db->select("*");
		$this->db->from("tbl_problem_details");
		//$this->db->join("tbl_solution_details","tbl_solution_details.problem_id = tbl_problem_details.id");
		$this->db->where("user_id" , $id);
		$query = $this->db->get();
		return $query;
	}
	function get_unsolved_problem(){
		$this->db->select("*");
		$this->db->from("tbl_problem_details");
		$this->db->where("status" , 0);
		$query = $this->db->get();
		return $query;
	}
}
?>