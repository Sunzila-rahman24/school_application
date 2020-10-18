<?php 

class Classinfo extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
    	
    	$this->load->view('admin_master/head');
        $this->load->view('class_section/class_info');
        $this->load->view('admin_master/foot');

                
    }
    
}

