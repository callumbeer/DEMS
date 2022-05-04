<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
				$this->load->database();
                $this->load->model('DemsModel');
				if(!$this->session->userdata('id'))
				{
					redirect(base_url().'login/');
				}
				
        }
		public function index()
		{	
			$data['isSearch'] = FALSE;
			$searchParams = $this->input->get('search', TRUE);
			if(!empty($searchParams))
			{
				$data['isSearch'] = TRUE;
				if ($query = $this->DemsModel->case_search($searchParams))
				{
					$data['searches'] = $query;
				}
			}
			$data['breadcrumb_name'] = 'Dashboard';
		   	$data['page_name'] = 'dashboard';					
		   	$this->load->view('admin/index',$data);
		}
		public function logout() {

	        $data = $this->session->all_userdata();
			foreach($data as $row => $rows_value)
			{
				$this->session->unset_userdata($row);
			}
			
	        redirect('admin-login');
	    }
	   
}
