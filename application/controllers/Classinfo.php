<?php

class Classinfo extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('classinfo_model');
      
    }

    public function index()
    {
        $data['all_class'] = $this->classinfo_model->get_all_class();
        $this->load->view('admin_master/head');
        $this->load->view('class_section/class_info', $data);
        $this->load->view('admin_master/foot');

    }

    
}