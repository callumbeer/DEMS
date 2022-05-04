<?php
class DemsModel extends CI_Model {
        
        public function __construct()
        {
                parent::__construct();
        }

        public function getImages($id) {
	       
            $this->db->where('case_no', $id);
            $this->db->where('file_type', 'image');
            $result = $this->db->get('file');
            return $result->result_array();
        } 

        public function getVideo($id) {
	       
          $this->db->where('case_no', $id);
          $this->db->where('file_type', 'video');
          $result = $this->db->get('file');
          return $result->row();
      } 
    
        public function get_records($select = null ,$table = null,$limit=null,$sortby_col=null, $asc_or_desc = null, $isvisible=null, $isvisible_value=null,$isdeleted=null,$isdeleted_value=null) {
	        if($select != null)
        	$this->db->select($select);
	        if($isvisible != null && $isvisible_value !=null)
        		$this->db->where($isvisible,$isvisible_value);
    		if($isdeleted != null && $isdeleted_value !=null)
        		$this->db->where($isdeleted,$isdeleted_value);
	        if($limit != null)
	            $this->db->limit($limit);
	        if($sortby_col != null && $asc_or_desc != null )
	            $this->db->order_by($sortby_col,$asc_or_desc);
	        $result = $this->db->get($table);
        	return $result->result_array();
    	}

	    public function get_multiple_rows_byCol($select = null ,$table = null,$colt=null,$valt=null,$limit=null,$sortby_col=null, $asc_or_desc = null, $isvisible=null, $isvisible_value=null,$isdeleted=null,$isdeleted_value=null) {
	        if($select != null)
        	$this->db->select($select);
	        $this->db->where($col, $val);
	        if($isvisible != null && $isvisible_value !=null)
        		$this->db->where($isvisible,$isvisible_value);
    		if($isdeleted != null && $isdeleted_value !=null)
        		$this->db->where($isdeleted,$isdeleted_value);
	        if($limit != null)
	            $this->db->limit($limit);
	        if($sortby_col != null && $asc_or_desc != null )
	            $this->db->order_by($sortby_col,$asc_or_desc);
	        $result = $this->db->get($table);
	        return $result->result_array();
	    } 

        public function get_info_by_id($select = null ,$table=null,$col= null,$val= null,$isvisible=null,$isvisible_value=null,$isdeleted=null,$isdeleted_value=null){
        if($select != null)
        	$this->db->select($select);
        $this->db->where($col,$val);
        if($isvisible != null && $isvisible_value !=null)
        	$this->db->where($isvisible,$isvisible_value);
    	if($isdeleted != null && $isdeleted_value !=null)
        	$this->db->where($isdeleted,$isdeleted_value);
        $data = $this->db->get($table)->row();
        return $data;
        
        }
        
        public function get_info_by_id2($table,$col,$val){
    
        $this->db->where($col,$val);
        $data = $this->db->get($table)->row();
        return $data;
        
        }

        public function get_info_array_by_id($table= null,$col= null,$val= null,$isvisible=null,$isvisible_value=null,$isdeleted=null,$isdeleted_value=null){
    
          $this->db->where($col,$val);
          if($isvisible != null && $isvisible_value !=null)
            $this->db->where($isvisible,$isvisible_value);
        if($isdeleted != null && $isdeleted_value !=null)
            $this->db->where($isdeleted,$isdeleted_value);
          $array = $this->db->get($table)->result_array();
          return $array;
        
        }

        function case_search($search_cases){

            $this->db->like('case_no', $search_cases);
            $this->db->or_like('title', $search_cases);
            $this->db->or_like('date_created', $search_cases);
            $this->db->or_like('case_type', $search_cases);
            $query = $this->db->get('case');
            return $query->result_array();
}


         


  }