
<?php

class Schoolstaffs extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }

    public function index()
    {
        $this->load->view('admin_master/head');
        $this->load->view('job details of all teachers and staffs/schoolstaffs');
        $this->load->view('admin_master/foot');
    }
    
}
