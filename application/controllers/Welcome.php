<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url','file'));
        $this->load->library(array('session', 'form_validation', 'email','javascript','upload'));
        $this->load->library('upload');
        $this->load->database();
		$this->load->model('model_post');
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
		if (isset($this->session->userdata['logged_in'])) {
			 redirect(base_url().'index.php/user/user_profile_show');
		}else{
		// $this->load->view('sidebar');
		// $this->load->view('header');
		$data["fetch_all_posts"] = $this->model_post->fetch_all_posts();
		$this->load->model('model_problem_details');
		$data["fetch_all_solved_problem"] = $this->model_problem_details->fetch_all_solved_problem();
		//var_dump($data["fetch_all_posts"]->result_array());
		$this->load->view('home',$data);
		//$this->load->view('footer');
		}
		
	}

	public function post_details()
	{
		$id = $this->uri->segment(3);
		$data["fetch_post_details"] = $this->model_post->fetch_post_details("$id");
		$this->load->view('post_details',$data);
		

	}
	public function solution_details()
	{
		

		$this->load->model('model_problem_details');
		$this->load->model('model_solutions');
		$id = $this->uri->segment(3);
		$data["fetch_problem_details"] = $this->model_problem_details->fetch_problem_details("$id");
		$data["fetch_solution"] = $this->model_problem_details->check_solution("$id");
		// var_dump($data["fetch_problem_details"]->result());
		$this->load->view('solution_details',$data);

		

	}
	public function show_edit_post(){
		$id = $this->uri->segment(3);
		$this->load->view('sidebar');
		$this->load->view('header');
		$data["fetch_post_details"] = $this->model_post->fetch_post_details("$id");
		$this->load->view('edit_post',$data);
		$this->load->view('footer');
	}

	public function edit_post(){


		$id = $this->uri->segment(3);
		$data["fetch_post_details"] = $this->model_post->fetch_post_details("$id");
		foreach ($data["fetch_post_details"]->result() as $row) {
			$old_image = $row->fish_image;
			$post_id = $row->id;
		}

		//var_dump($data["fetch_post_details"]->result());
		 

			$image_path = realpath(APPPATH . '../images/cultivation_post_image');
			$config['upload_path'] = $image_path;
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['file_name'] = $_FILES['fish_image']['name'];
            $config['overwrite'] = FALSE;
            
            
            if ( $config['file_name']) {
            	$this->load->library('upload',$config);
            	$error = array('error' => $this->upload->display_errors());
	            //var_dump($image_path);
	            $this->upload->initialize($config);
            	$file_name = $this->upload->data('file_name');
            	unlink($image_path."/".$old_image);
            }else{
            	$file_name = $old_image;
            }
            if (!$this->upload->do_upload('fish_image')) {
            	$error = array('error' => $this->upload->display_errors());
            	
            }
             
		$data = array(
			'post_title' => $this->input->post('post_title'),
			'fish_name' => $this->input->post('fish_name'),
			'fish_image' => $file_name,
			'fish_meal' => $this->input->post('fish_meal'),
			'food_soyabin' => $this->input->post('food_soyabin'),
			'food_gom' => $this->input->post('food_gom'),
			'food_vutta' => $this->input->post('food_vutta'),
			'food_dhan' => $this->input->post('food_dhan'),
			'food_sorisa' => $this->input->post('food_sorisa'),
			'food_gur' => $this->input->post('food_gur'),
			'fish_culi_info' => $this->input->post('fish_culi_info')
		);

		$updatePostData=$this->model_post->updatePostData($data,$post_id);
		if ($updatePostData) {
			$this->session->set_flashdata('success', 'success message');
			$this->show_edit_post();
			
		}else{
			//$this->session->set_flashdata('success', 'success message');
			$this->show_edit_post();
		}
		
		

	}
	public function process_post()
	{
		$this->load->view('sidebar');
		$this->load->view('header');
		$this->load->view('post');
		$this->load->view('footer');
	}

	public function insert_post(){
		$user_id = $this->uri->segment(3);

		$image_path = realpath(APPPATH . '../images/cultivation_post_image');
			$config['upload_path'] = $image_path;
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['file_name'] = $_FILES['fish_image']['name'];
            $config['overwrite'] = FALSE;
            $this->load->library('upload',$config);
            var_dump($config);
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('fish_image')) {
            	echo "eror";
            }
            $file_name = $this->upload->data('file_name');
            	$current_date = date("j F, Y");
	            $engDATE = array('1','2','3','4','5','6','7','8','9','0','January','February','March','April','May','June','July','August','September','October','November','December','Saturday','Sunday','Monday','Tuesday','Wednesday','Thursday','Friday');
				$bangDATE = array('১','২','৩','৪','৫','৬','৭','৮','৯','০','জানুয়ারী','ফেব্রুয়ারী','মার্চ','এপ্রিল','মে','জুন','জুলাই','আগস্ট','সেপ্টেম্বর','অক্টোবর','নভেম্বর','ডিসেম্বর','শনিবার','রবিবার','সোমবার','মঙ্গলবার','
				বুধবার','বৃহস্পতিবার','শুক্রবার' 
				);
				$convertedDATE = str_replace($engDATE, $bangDATE, $current_date);
				//echo "$convertedDATE";
               
		$data = array(
			'user_id' => $user_id,
			'date' => $convertedDATE,
			'post_title' => $this->input->post('post_title'),
			'fish_name' => $this->input->post('fish_name'),
			'fish_image' => $file_name,
			'fish_meal' => $this->input->post('fish_meal'),
			'food_soyabin' => $this->input->post('food_soyabin'),
			'food_gom' => $this->input->post('food_gom'),
			'food_vutta' => $this->input->post('food_vutta'),
			'food_dhan' => $this->input->post('food_dhan'),
			'food_sorisa' => $this->input->post('food_sorisa'),
			'food_gur' => $this->input->post('food_gur'),
			'fish_culi_info' => $this->input->post('fish_culi_info')
		);
		// echo "<pre>";
		// var_dump($data);
		// echo "<pre>";
		$insertPostData=$this->model_post->insertPost($data);
		$this->session->set_flashdata('success', 'success message');
		redirect(base_url().'index.php/Welcome/process_post');
	}

	function show_post_list(){
		$this->load->view('sidebar');
		$this->load->view('header');
		$data["fetch_all_posts"] = $this->model_post->fetch_all_posts();
		$this->load->view('post_list',$data);
		$this->load->view('footer');
	}
}
