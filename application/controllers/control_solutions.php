<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class control_solutions extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library(array('session', 'form_validation', 'email','javascript','upload'));
        $this->load->library('upload');
        $this->load->database();
		$this->load->model('model_solutions');
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('sidebar');
		$this->load->view('header');
		$this->load->view('footer');
	}
	// public function post_problem_form()
	// {
	// 	$this->load->view('sidebar');
	// 	$this->load->view('header');
	// 	$this->load->view('add_problem');
	// 	$this->load->view('footer');
	// }
	// public function post_problem()
	// {
	// 	$id = $this->uri->segment(3);
	// 	$image_path = realpath(APPPATH . '../images');
	// 		$config['upload_path'] = $image_path;
	// 		$config['allowed_types'] = 'jpg|jpeg|png|gif';
 //            $config['file_name'] = $_FILES['problem_img']['name'];
 //            $config['overwrite'] = FALSE;
 //            $this->load->library('upload',$config);
 //            var_dump($config);
 //            $this->upload->initialize($config);
 //            if (!$this->upload->do_upload('problem_img')) {
 //            	echo "eror";
 //            }
 //            $file_name = $this->upload->data('file_name');

	// 	$data = array(
	// 		'user_id' => $id,
	// 		'fish_name' => $this->input->post('fish_name'),
	// 		'problem_category' => $this->input->post('problem_category'),
	// 		'problem_image' => $file_name,
	// 		'fish_age_day' => $this->input->post('fish_age_day'),
	// 		'fish_age_month' => $this->input->post('fish_age_month'),
	// 		'pond_type' => $this->input->post('pond_type'),
	// 		'problem_details' => $this->input->post('problem_details'),
	// 	);

	// 	$insertProblemData=$this->model_problem_details->insertProblem($data);
	// 	$this->session->set_flashdata('success', 'success message');
	// 	redirect(base_url().'index.php/control_problem_post/post_problem_form');
		
	// }


	function insert_solution()
	{
		$problem_id = $this->input->post('problem_id');
		$data = array(
				'problem_id'=> $problem_id,
				'specialist_id'=> $this->input->post('user_id'),
				'solution_details'=> $this->input->post('solution_details'),
				'problem_title'=> $this->input->post('problem_title')
				);
		var_dump($data);
		$updateStatus=$this->model_solutions->updateStatus($problem_id);
		$insertSolutionData=$this->model_solutions->insert_solution_data($data);
		 
		
	}
	function edit_solution()
	{
		$problem_id = $this->input->post('problem_id');
		$data = array(
				'solution_details'=> $this->input->post('solution_details')
				);
		
		$updateSolution=$this->model_solutions->updateSolution($problem_id,$data);

		var_dump($updateSolution);
		
		
	}

	// function show_solution(){
	// 	$id = $this->uri->segment(3);
	// 	$this->load->view('solution.php');
	// 	$updateStatus=$this->model_solutions->updateSolutionStatus($id);
	// }

	function show_notification(){
		$data['fetch_unseen_notification'] =$this->model_solutions->get_notification();
		$data['fetch_all_notification'] = $this->model_solutions->fetch_all_notification();
		$output ='';
		if ($data['fetch_all_notification']->num_rows()>0){
			 foreach ($data['fetch_all_notification']->result() as $row) {
			 		  $remove_tag = strip_tags($row->solution_details);
                      $text = substr($remove_tag, 0,100);
                      $firstname = $row->firstname;
                       $url= base_url('index.php/control_solutions/show_solution/'.$row->id);
                    $output .= '
							  <li>
							  <a href="'.$url.'">
							  <span>
                          		<span>'.$firstname.'</span>
                       		 </span>
							  <span class="message">'.$text.'</span>
							  </a>
							  </li>

							  ';
							  //$output =  utf8_decode($output);
                  
			 }
		}


 		$count =  $data['fetch_unseen_notification']->num_rows();

		$data = array(
			'unseen_notification' => $count
		);
		//$result = mb_convert_encoding($data['notification'], 'UTF-8', 'UTF-8');
		echo json_encode($data);
		//var_dump($data);
		//var_dump(json_encode($data));
	}
function show_solution()
	{
		$this->load->model('model_problem_details');
		$id = $this->uri->segment(3);
		$this->load->view('sidebar');
		$this->load->view('header');
		$data["fetch_problem_details"] = $this->model_problem_details->fetch_problem_details("$id");
		$data["fetch_solution"] = $this->model_problem_details->check_solution("$id");
		$updatNotificationStatus=$this->model_solutions->updatNotificationStatus($id);
		// var_dump($data["fetch_problem_details"]->result());
		$this->load->view('problem_detail',$data);
		$this->load->view('footer');
	}

}