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
        $this->load->view('class_section/class_info',$data);
        $this->load->view('admin_master/foot');

    }
    public function add_new_class()
    {
        $class_name = $this->input->post('class_name');
        $class_shortname = $this->input->post('class_shortname');


        $data = array(
            'class_full_name' => $class_name,
            'class_short_name' => $class_shortname,
            );
    
      $this->classinfo_model->new_class_add($data);
      redirect('classinfo');
    }
    public function edit_class_form()
    {
       $edit_class = $this->input->get('class_id');
       $data = $this->classinfo_model->edit_class($edit_class);
       echo json_encode($data);
    }
}