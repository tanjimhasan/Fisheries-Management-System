<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class account extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url','file'));
        $this->load->library(array('session', 'form_validation', 'email','javascript','upload'));
        $this->load->library('upload');
        $this->load->database();
		$this->load->model('admin/account_model');
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
		  $id = ($this->session->userdata['logged_in']['user_id']);
		  redirect(base_url().'index.php/admin/dashboard/');
		}else{

			$this->load->view('admin/login');
		}
	}

	function hashpassword($password)
	 {
        return md5($password);
    }
	public function login(){
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
    			'password' => $this->hashpassword($this->input->post('password'))
    		);

    		$log_result = $this->account_model->user_login($data);
    		
    		$row = $log_result->row();
    		if ($log_result->num_rows() > 0) {
    				$session_data = array(
	    				'user_id' =>$row->user_id,
	    				'firstname' =>$row->firstname,
	    				'lastname' =>$row->lastname,
	    				'email' =>$row->email,
	    				'usertype' =>$row->usertype,
	    				'profileImage' =>$row->profileImage,
	    				'mobile' =>$row->mobile,
	    				'address' =>$row->address
    				);
	    			$this->session->set_userdata('logged_in', $session_data);
	    			$this->session->set_flashdata('success', 'login');
					redirect(base_url().'index.php/user/user_profile_show');
    			    			

    		}else{

				$this->session->set_flashdata('invalid_error', 'Any Field Must Not be Empty');
				redirect(base_url().'index.php/admin/account');
    		}
    	}
	}

	public function register(){
		if ($this->input->post('register')) {
			echo "correct";
		}else{
			var_dump($_FILES);
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
           $this->load->model('model_user');
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
					'usertype' => 'নিয়ন্ত্রক',
					'password'  => $this->hashpassword($this->input->post('password')),
					'mobile' => $this->input->post('phone'),
					'address' => $this->input->post('address')
				);
				$insertUserData=$this->account_model->add_admin($data);
				$this->session->set_flashdata('success', 'success message');
				redirect(base_url().'index.php/admin/account');			
			}
		}
	}
}
