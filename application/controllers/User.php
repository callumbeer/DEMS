<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

		public function __construct()
		{
			parent::__construct();
			$this->load->database();

			$this->load->model('usersModel');
			$this->load->model('DemsModel');	
		}
	
		public function save()
		{	
			$this->form_validation->set_rules('first_name', 'First Name', 'required');
			$this->form_validation->set_rules('surname', 'Surname', 'required');
			$this->form_validation->set_rules('pass_number', 'Pass Number', 'required|trim');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[user.email]');
			$this->form_validation->set_rules('phone', 'Phone', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[6]');
			if ($this->form_validation->run() == FALSE)
			{				
				$this->load->view('admin/user/register');
			}
			else
			{
				$data['first_name'] =	$this->input->post('first_name');
				$data['surname']	=	$this->input->post('surname');
				$data['pass_number']=	$this->input->post('pass_number');
				$data['email']	 	=	$this->input->post('email');
				$data['phone_number']	=	$this->input->post('phone');
				$data['password']	=	md5($this->input->post('password'));

				$id = $this->usersModel->insertUser($data);
				
				redirect(base_url().'login/');
			}
		}
	
		public function register(){
			$this->load->view('admin/user/register');
		}

		public function add_user()
		{
			if(!$this->session->userdata('id') || $this->session->userdata('isAdmin') != true)
			{
				redirect(base_url().'login/');
			}
			if ($_SERVER['REQUEST_METHOD'] == 'POST'){
				
				$this->form_validation->set_rules('first_name', 'First Name', 'required');
				$this->form_validation->set_rules('surname', 'Surname', 'required');
				$this->form_validation->set_rules('pass_number', 'Pass Number', 'required');
				$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[user.email]');
				$this->form_validation->set_rules('phone_number', 'Phone', 'required');
				$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[6]');
				if ($this->form_validation->run() == FALSE)
				{
					$this->session->set_flashdata('error', 'Validation Error!');
					//$data['error'] = $this->session->flashdata('error');
					$data['breadcrumb_name'] = 'Add User';
					$data['page_name'] = 'add_user';						
					$this->load->view('admin/index',$data);
				}
				else
				{	
					$data['first_name'] =	$this->input->post('first_name');
					$data['surname']	=	$this->input->post('surname');
					$data['pass_number']=	$this->input->post('pass_number');
					$data['email']	 	=	$this->input->post('email');
					$data['phone_number']	=	$this->input->post('phone_number');
					$data['password']	=	md5($this->input->post('password'));
					$data['account_type']	=	md5($this->input->post('account_type'));

					$this->usersModel->insertUser($data);
					$data['breadcrumb_name'] = 'User List';
					$data['page_name'] = 'view_user';						
					$this->load->view('admin/index',$data);
				}
			}
			else
			{
				$data['breadcrumb_name'] = 'Add User';
				$data['page_name'] = 'add_user';						
				$this->load->view('admin/index',$data);
			}
		}

		public function view_user()
		{		if(!$this->session->userdata('id') || $this->session->userdata('isAdmin') != true)
				{
					redirect(base_url().'login/');
				}
				$data['breadcrumb_name'] = 'User List';
				$data['page_name'] = 'view_user';						
		    	$this->load->view('admin/index',$data);
		}

		public function edit_user($id)
		{		
				if(!$this->session->userdata('id') || $this->session->userdata('isAdmin') != true)
				{
					redirect(base_url().'login/');
				}
				$data['user_id'] = $id;
				$data['breadcrumb_name'] = 'Edit User';
				$data['page_name'] = 'edit_user';						
		    	$this->load->view('admin/index',$data);

		}

		public function delete_user(){
			if(!$this->session->userdata('id') || $this->session->userdata('isAdmin') != true)
			{
				redirect(base_url().'login/');
			}
			$id = $this->input->post('id');
			if(null !=($id)){
				$this->db->where('pass_number', $id);
				$this->db->delete('user');
				echo "1";
				
			}
		}
		
		public function update_user($id){
			if(!$this->session->userdata('id') || $this->session->userdata('isAdmin') != true)
			{
				redirect(base_url().'login/');
			}
		if ($_SERVER['REQUEST_METHOD'] == 'POST'){
				$this->form_validation->set_rules('first_name', 'First Name', 'required');
				$this->form_validation->set_rules('surname', 'Surname', 'required');
				//$this->form_validation->set_rules('pass_number', 'Pass Number', 'required');
				$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
				$this->form_validation->set_rules('phone_number', 'Phone', 'required');
				$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[6]');
				if ($this->form_validation->run() == FALSE)
                {	
                  	$data['breadcrumb_name'] = 'Edit User';
					$data['page_name'] = 'edit_user';		
					$data['user_id'] = $id;		
			    	$this->load->view('admin/index',$data);
                }
                else
                {
					$data['first_name'] =	$this->input->post('first_name');
					$data['surname']	=	$this->input->post('surname');
					//$data['pass_number']=	$this->input->post('pass_number');
					$data['email']	 	=	$this->input->post('email');
					$data['phone_number']	=	$this->input->post('phone_number');
					$data['account_type']	=	$this->input->post('account_type');
					$data['password']	=	md5($this->input->post('password'));

					$this->db->where('pass_number',$id);
					$this->db->update('user',$data);
					$this->session->set_flashdata('success', 'User profile has been updated successfully!');
					redirect(base_url().'user/view_user');
					

                }
        }
            else{
            	$data['breadcrumb_name'] = 'User List';
				$data['page_name'] = 'view_user';						
			    $this->load->view('admin/index',$data);
            }
			
		}
}

