<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class user extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url'));
        $this->load->library(array('session', 'form_validation', 'email','javascript','upload'));
        $this->load->library('upload');
        $this->load->database();
        $this->load->model('model_user');
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
		$this->load->view('register2');
	}

	public function user_login_show()
	{
		$this->load->view('login');
	}

	public function user_profile_show()
	{
		$this->load->view('sidebar');
		$this->load->view('header');
		$this->load->view('profile');
		$this->load->view('footer');
	}

	public function edit_user_profile()
	{
		$user_id = $this->uri->segment(3);
		$this->load->view('sidebar');
		$this->load->view('header');
		$data["fetch_user_details"] = $this->model_user->fetch_user_details($user_id);
		$this->load->view('edit_profile',$data);
		$this->load->view('footer');
	}

	public function edit_profile_info()
	{
		$user_id = $this->input->post('user_id');
		$data = array(
					'user_id' => $user_id,
					'firstname' => $this->input->post('firstname'),
					'lastname' => $this->input->post('lastname'),
					'email' => $this->input->post('email'),
					'mobile' => $this->input->post('mobile'),
					'address' => $this->input->post('address')
				);
		$editUserData=$this->model_user->editUserData($data,$user_id);
		if (!$editUserData) {
			echo "no_edit";
			exit();
		}
	}

	public function edit_profile_image()
	{
		$user_id = $this->uri->segment(3);
		if ($_FILES['profileImage']['name'] !="") {
			$image_path = realpath(APPPATH . '../images');
			$config['upload_path'] = $image_path;
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['file_name'] = $_FILES['profileImage']['name'];
            $config['overwrite'] = FALSE;
            $this->load->library('upload',$config);
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('profileImage')) {
            	echo "eror";
            }
            $file_name = $this->upload->data('file_name');
            $data = array(
					'profileImage' => $file_name					
				);
			$editUserData=$this->model_user->editUserData($data,$user_id);
			if (!$editUserData) {
				$this->session->set_flashdata('success', 'success message');
				redirect(base_url().'index.php/user/edit_user_profile/'.$user_id);
			}elseif ($editUserData == true) {
				$this->session->set_flashdata('success', 'success message');
				redirect(base_url().'index.php/user/edit_user_profile/'.$user_id);
			}
			
		}else{
			echo "Not Found";
		}
		
	}

	public function user_registration()
	{	
		if ($this->input->post('register')) {
			echo "correct";
		}else{
		   $image_path = realpath(APPPATH . '../images');
		   echo $config['upload_path'] = $image_path;
		   $config['allowed_types'] = 'jpg|jpeg|png|gif';
           $config['file_name'] = $_FILES['pro_image']['name'];
           $config['overwrite'] = FALSE;
           $this->load->library('upload',$config);
           var_dump($config);
           $this->upload->initialize($config);
           if (!$this->upload->do_upload('pro_image')) {
            	echo "eror";
           }
           $file_name = $this->upload->data('file_name');
            
            

           $email = $this->input->post('email');
           $check_result= $this->model_user->check_email($email);

           if($check_result->num_rows() > 0)
			{
				$this->session->set_flashdata('email_error', 'Any Field Must Not be Empty');
				redirect(base_url().'index.php/user');
			}else{	
				$data = array(
					'firstname' => $this->input->post('firstname'),
					'lastname' => $this->input->post('lastname'),
					'profileImage' => $file_name,
					'email' => $email,
					'usertype' => $this->input->post('usertype'),
					'password'  => $this->hashpassword($this->input->post('password')),
					'mobile' => $this->input->post('phone'),
					'address' => $this->input->post('address')
				);
				$insertUserData=$this->model_user->insertUser($data);
				$this->session->set_flashdata('success', 'success message');
				redirect(base_url().'index.php/user/');			
			}
		}
	}

	function hashpassword($password)
	 {
        return md5($password);
    }


    public function user_login()
    {
    	$this->form_validation->set_rules('email','Email','required');
    	$this->form_validation->set_rules('password','Password','required');
    	
    	if ($this->form_validation->run() == false) {


    		if (isset($this->session->userdata['loggedin'])) {
    			$this->session->set_flashdata('success', 'Any Field Must Not be Empty');
				redirect(base_url().'index.php/user/profile');
    		}else{
    			$this->session->set_flashdata('error', 'Any Field Must Not be Empty');
				redirect(base_url().'index.php/user/user_login');
    		}
    		
    	}else{
    		$data = array(
    			'email' => $this->input->post('email'),
    			'usertype' => $this->input->post('usertype'),
    			'password' => $this->hashpassword($this->input->post('password'))
    		);

    		$log_result = $this->model_user->user_login($data);
    		
    		$row = $log_result->row();
    		if ($log_result->num_rows() > 0) {
    			if ($row->status == 0) {
    				$this->session->set_flashdata('status_error', 'disabled message');
					redirect(base_url().'index.php/user/user_login_show');
    			}else{
    				$session_data = array(
	    				'user_id' =>$row->user_id,
	    				'firstname' =>$row->firstname,
	    				'lastname' =>$row->lastname,
	    				'usertype' =>$row->usertype,
	    				'profileImage' =>$row->profileImage,
	    				'mobile' =>$row->mobile,
	    				'email' =>$row->email,
	    				'address' =>$row->address
    				);
	    			$this->session->set_userdata('logged_in', $session_data);
	    			$this->session->set_flashdata('success', 'login');
					redirect(base_url().'index.php/user/user_profile_show');
    			}
    			

    		}else{

				$this->session->set_flashdata('invalid_error', 'Any Field Must Not be Empty');
				redirect(base_url().'index.php/user/user_login_show');
				
    		}
    	}
    }

    public function log_out()
    {
    	$sess_array = array(
    		firstname =>''
    	);
    	$this->session->unset_userdata('logged_in', $sess_array);
    	redirect(base_url().'index.php/');
    }
    public function select_validate($abcd)
    {
    	if ($abcd == "none") {
    		$this->session->set_flashdata('email_error', 'Any Field Must Not be Empty');
			redirect(base_url().'index.php/user/user_login_show');
    		
    	}else{
    		return true;
    	}
    }
}
