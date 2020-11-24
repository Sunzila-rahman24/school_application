<?php

class Student_model extends CI_Model
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->database();

    }

    public function get_std_info()
    {
    	$std = $this->db->get('student_info');
    	return $std->result();
    }


  
  public function new_student_add($data)
  {
  	$this->db->insert('student_info', $data);
 
  }

}
