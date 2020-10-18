<?php

class Student extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
      
    }

    public function index()
    {
        $this->load->view('admin_master/head');
        $this->load->view('student/student');
        $this->load->view('admin_master/foot');
    }
    
}
