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
   public function edit_student($edit_student)
  {
      $this->db->where('student_auto_iid', $edit_student);
      $sql = $this->db->get('student_info');
      return $sql->row();
  }
}


}
