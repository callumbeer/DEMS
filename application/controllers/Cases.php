<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cases extends CI_Controller {

	
		public function __construct()
		{
				parent::__construct();
				$this->load->database();
				$this->load->model('DemsModel');
				$this->load->library('cache');
				if(!$this->session->userdata('id'))
				{
					redirect(base_url().'login/');
				}
				
				/*cache control*/
				$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
				$this->output->set_header('Pragma: no-cache');

		}

	
		public function add_form()
		{			
			$data['page_name'] = 'add_case';
			$data['breadcrumb_name'] = 'New Case';					
		    $this->load->view('admin/index',$data);
		}

		
		public function addcase()
		{	
			$this->form_validation->set_rules('case_no', 'Case No', 'required');
			$this->form_validation->set_rules('title', 'Title', 'required');
			$this->form_validation->set_rules('description', 'Description', 'required');
			$this->form_validation->set_rules('case_type', 'Case Type', 'required');
			$this->form_validation->set_rules('date_created', 'Date Created', 'required');
			if ($this->form_validation->run() == FALSE)
	        {
				$data['page_name'] = 'add_case';
				$data['breadcrumb_name'] = 'New Case';					
			    $this->load->view('admin/index',$data);
	        }
	        else
	        {
	        
				$case_id = $name = $data['case_no']	 	= $this->input->post('case_no'); 
				$data['title']	 	=	$this->input->post('title');
				$data['description']	 	= $this->input->post('description');
				$data['case_type']	 	= $this->input->post('case_type'); 
				$data['date_created']	 	= $this->input->post('date_created'); 
				$data['createdBy']	 	= $this->session->userdata('id') != null ? $this->session->userdata('id') : 0; 
				
				$this->db->insert('case',$data);
				if(null !=($_FILES['video']['name'])) 
				{
					$ext1 =  $_FILES['video']['name'];
					move_uploaded_file($_FILES['video']['tmp_name'], 'assets/videos/'.str_replace(' ', '-', $name).'-'.$case_id.'.'.$ext1);
					
					$vid_data['file_name'] = str_replace(' ', '-', $name).'-'.$case_id.'.'.$ext1;
					$vid_data['case_no'] = $case_id;
					$vid_data['file_type'] = 'video';
					$this->db->insert('file',$vid_data);
				}
				
				if(null !=($_FILES['case_image']['name'])){
					
					$image_names_array = $_FILES['case_image']['name'];
					$image_tmp_array = $_FILES['case_image']['tmp_name'];
					$i = 1;
					foreach($image_names_array as $key=>$image_item):
						if(null !=($image_item))
						{
 
							$file_name = str_replace(' ', '-', $name).'-'.$case_id.'-'.$key.'.jpg';

							move_uploaded_file($image_tmp_array[$key], 'assets/images/cases/'.$file_name);


							$img_data['file_name'] = $file_name; 
						}
						else
						{
							$img_data['file_name'] =  'default_icon.png';	
						}
						$img_data['case_no'] = $case_id;
						$img_data['file_type'] = 'image';
						$this->db->insert('file',$img_data);
					endforeach;
				}
				// prject images End////////////
				$this->session->set_flashdata('success', 'Case has been added successfully');
				redirect(base_url().'cases/view_cases');
			}
		}

		public function updatecase($case_id)
		{	
			$name = $case_id;
			//$this->form_validation->set_rules('case_no', 'Case No', 'required');
			$this->form_validation->set_rules('title', 'Title', 'required');
			$this->form_validation->set_rules('description', 'Description', 'required');
			$this->form_validation->set_rules('case_type', 'Case Type', 'required');
			$this->form_validation->set_rules('date_created', 'Date Created', 'required');
			if ($this->form_validation->run() == FALSE)
            {		
			    $data['case_id'] = $case_id;
				$data['page_name'] = 'edit_case';
				$data['breadcrumb_name'] = 'Case Edit Form';					
	    	  	$this->load->view('admin/index',$data);
			}
            else
            {

				$data['title']	 	=	$this->input->post('title');
				$data['description']	 	= $this->input->post('description');
				$data['case_type']	 	= $this->input->post('case_type'); 
				$data['date_created']	 	= $this->input->post('date_created'); 
				
				
				if(null !=($_FILES['video']['name']))
				{
					$ext1 =  $_FILES['video']['name'];
					move_uploaded_file($_FILES['video']['tmp_name'], 'assets/videos/'.str_replace(' ', '-', $name).'-'.$case_id.'.'.$ext1);
					$data2['file_name'] = str_replace(' ', '-', $name).'-'.$case_id.'.'.$ext1;
					$this->db->where('case_no',$case_id);
					$this->db->where('file_type',"video");
					$this->db->update('file',$data2);
				}
				
				$this->db->where('case_no',$case_id);
				$this->db->update('case',$data);

				$this->db->where('case_no',$case_id);
				$this->db->where('file_type',"image");
				$this->db->delete('file');


				// case images ////////////
				if(null !=($_FILES['case_image']['name'])){
					$i =1;
				$image_names_array = $_FILES['case_image']['name'];
				$image_tmp_array = $_FILES['case_image']['tmp_name'];
				$image_hiddent_input = $this->input->post('case_image_hidden_input');
				foreach($image_hiddent_input as $key=>$image_item):
					if(null !=($image_item))
					{

						$file_name = str_replace(' ', '-', $name).'-'.$case_id.'-'.$key.'.jpg';

							move_uploaded_file($image_tmp_array[$key], 'assets/images/cases/'.$file_name);


							$img_data['file_name'] = $file_name; 
					}
					else
					{
						$img_data['file_name'] =  'default_icon.png';	
					}
					$img_data['case_no'] = $case_id;
					$img_data['file_type'] = 'image';
					$this->db->insert('file',$img_data);
				endforeach;
				}
				
				// case images End////////////
				
				$this->session->set_flashdata('success', 'One case has been updated successfully');
				redirect(base_url().'cases/view_cases');
			} 
		}		
		
		
		public function view_cases()
		{	$data['isSearch'] = FALSE;
			$searchParams = $this->input->get('search', TRUE);
			if(!empty($searchParams))
			{
				$data['isSearch'] = TRUE;
				if ($query = $this->DemsModel->case_search($searchParams))
				{
					$data['searches'] = $query;
				}
			}
				
			$data['page_name'] = 'view_cases';
			$data['breadcrumb_name'] = 'Case List';					
			$this->load->view('admin/index',$data);
		}	

		public function caseeditform($id)
		{			
			if(empty($id))	
			{
				show_404();	
			}
			$data['case_id'] = $id;
			$data['page_name'] = 'edit_case';
			$data['breadcrumb_name'] = 'Case Edit Form';
			$this->load->view('admin/index',$data);
		}

		public function delete_case()
		{
			$id = $this->input->post('id');
			if(null !=($id))	
			{
				$this->db->where('case_no',$id);
				$this->db->delete('case');
				$this->db->delete('file');
				echo "1";
						
			}
		}

		public function case_details($id)
		{			
			if(empty($id))	
			{
				show_404();	
			}
			$data['case_id'] = $id;
			$data['page_name'] = 'case_details';
			$data['breadcrumb_name'] = 'Case Details Page';
			$this->load->view('admin/index',$data);
		}


		function search(){

			$this->dashboard();
			$data['searches'] = array();
			if ($query = $this->DemsModel->case_search($this->input->get('search')))
			{
				$data['searches'] = $query;
			}
			$data['page_name'] = 'view_cases';
			$data['breadcrumb_name'] = 'Case List';
			 $this->load->view('dashboard', $data);
		
		}
		

}