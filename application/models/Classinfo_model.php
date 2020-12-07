<?php

class Classinfo_model extends CI_Model
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->database();

    }

    public function get_all_class()
    {
    	$sql = $this->db->get('class');
    	return $sql->result();
    }
    

  public function new_class_add($data)
  {
  	$this->db->insert('class', $data);
 
  }
  public function edit_class($edit_class)
  {
  		$this->db->where('class_auto_iid', $edit_class);
 	    $sql = $this->db->get('class');
    	return $sql->row();
  }
}

