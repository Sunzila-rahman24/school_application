<?php

class Exam extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }

    public function index()
    {
        $this->load->view('admin_master/head');
        $this->load->view('exam/exams');
        $this->load->view('admin_master/foot');
    }
    
}
