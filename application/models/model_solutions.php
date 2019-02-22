<?php
/**
* 
*/
class model_solutions extends CI_Model
{
	function insert_solution_data($data){
		$this->db->insert("tbl_solution_details",$data);
	}

	function updateStatus($problem_id){
		$this->db->set('status', '1');
		$this->db->where('id', $problem_id);
		$this->db->update('tbl_problem_details');
	}

	function updatNotificationStatus($id){
		$this->db->set('notification_status', 1);
		$this->db->where('problem_id', $id);
		$this->db->update('tbl_solution_details');
	}

	function updateSolution($id,$data){
		$this->db->where('problem_id', $id);
		$this->db->update('tbl_solution_details',$data);
		if ($this->db->affected_rows()>0) {
        	return true;
        }else{
        	return false;
        }
	}

	function get_notification(){
		$this->db->select("*");
		$this->db->from("tbl_solution_details");
		$this->db->join("tbl_problem_details","tbl_problem_details.id = tbl_solution_details.problem_id");
		$this->db->join("user_info","user_info.user_id = tbl_problem_details.user_id");
		$this->db->where("notification_status" , 0);
		$query = $this->db->get();
		return $query;
	}

	function fetch_all_notification()
	{
		$this->db->select("id,firstname,solution_details");
		$this->db->from("tbl_solution_details");
		$this->db->join("user_info","user_info.user_id = tbl_solution_details.specialist_id");
		$query = $this->db->get();
		return $query;
	}
}
?>