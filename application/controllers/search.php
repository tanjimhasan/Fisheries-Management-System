<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class search extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url','file'));
        $this->load->library(array('session', 'form_validation', 'email','javascript','upload'));
        $this->load->library('upload');
        $this->load->database();
		$this->load->model('search_model');
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
		$this->load->helper('url');
		$this->load->view('solution_search');
	}
	public function search_info(){
		$search_item = $this->input->post('search');
		$output = "";
		$data['fetch_searched_data'] =$this->search_model->fetch_searched_data($search_item);
		$data['fetch_searched_solution'] =$this->search_model->fetch_searched_solution($search_item);

		$i = 0;

		if ($data["fetch_searched_data"]->num_rows()>0) {
					foreach ($data["fetch_searched_data"]->result() as $row) { ?>
					<tr>
		                <td><?php echo ++$i ?></td>
		                <td><?php echo $row->post_title; ?></td>
		                <td>
		                    <td><a href="<?php echo base_url(); ?>index.php/Welcome/post_details/<?php echo $row->id; ?>" target="_blank" class="btn btn-info">বিস্তারিত </a></td>
		                </td>
	            	</tr>
				<?php 
					}
				
			}

			if($data['fetch_searched_solution']->num_rows()>0){
					//$i = 0;
					foreach ($data['fetch_searched_solution']->result() as $row) { ?>
						<tr>
			                <td><?php echo ++$i ?></td>
			                <td><?php echo $row->problem_title; ?></td>
			                <td>
			                    <td><a href="<?php echo base_url(); ?>index.php/Welcome/solution_details/<?php echo $row->id; ?>" target="_blank" class="btn btn-info">সমাধান </a></td>
			                </td>
		            	</tr>
			<?php
				}

		//$this->load->view('solution_search',$data);
		//var_dump($data['fetch_searched_data']->result());
	}

	if($data['fetch_searched_data']->num_rows()<=0 && $data['fetch_searched_solution']->num_rows()<=0){ 

		?>
		<tr>
            <td>তথ্য খুঁজে পাওয়া জায় নি </td>
        </tr>
	
	<?php

		}
	}
}
?>




				
				

