<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
        public function __construct()
        {
                 parent::__construct();
				 $this->load->database();
				  if($this->session->userdata('id'))
					{
						redirect(base_url().'admin');
					}
					$this->load->library('form_validation');
					$this->load->model('loginmodel');
        }
      
		public function index()
		{
			$this->form_validation->set_rules('email','Email','required|valid_email');
			$this->form_validation->set_rules('password', 'Password', 'trim|min_length[6]');
			
				if( ! $this->form_validation->run())
			    {
			       $this->load->view('admin/login');
			    }
			    else
			    {
			        $email = 	  $this->input->post('email');
					$password =   $this->input->post('password');
					$result = $this->loginmodel->can_login($email, $password);
					if($result == '')
					{
						
						redirect(base_url().'admin');
					}
					else	
				    	$this->load->view('admin/login');
					
			   
				}
		}
						
}
