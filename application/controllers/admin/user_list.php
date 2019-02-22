<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_list extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url','file'));
        $this->load->library(array('session', 'form_validation', 'email','javascript','upload'));
        $this->load->library('upload');
        $this->load->database();
		$this->load->model('admin/model_user_list');
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
		
		$data["fetch_all_user"] = $this->model_user_list->fetch_all_user();
		$this->load->view('user_list',$data);
		$this->load->view('footer');
	}

	function enable_user(){
		$user_id = $this->uri->segment(4);
		
		$enable_user=$this->model_user_list->enable_user($user_id);
		//var_dump($user_id);
		$this->session->set_flashdata('enabled_message', 'success message');
	 	redirect(base_url().'index.php/admin/user_list');
	}

	function disable_user(){
		$user_id = $this->uri->segment(4);
		
		$disable_user=$this->model_user_list->disable_user($user_id);
		//var_dump($user_id);
		$this->session->set_flashdata('disabled_message', 'success message');
	 	redirect(base_url().'index.php/admin/user_list');
	}


}
