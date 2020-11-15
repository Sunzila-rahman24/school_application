<?php

class Student extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Student_model');
      
    }

    public function index()
    {
        $data['std_info'] = $this->Student_model->get_std_info();
        $this->load->view('admin_master/head');
        $this->load->view('student/student', $data);
        $this->load->view('admin_master/foot');
    }
    public function add_new_student()
    {
        
    }
    
}
