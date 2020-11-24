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
        $student_name = $this->input->post('student_name');
        $student_address = $this->input->post('student_address');
        $student_roll = $this->input->post('student_roll');
        $birth_certificate = $this->input->post('birth_certificate');
        $blood_group = $this->input->post('blood_group');
        $student_gender = $this->input->post('student_gender');
        $father_name = $this->input->post('father_name');
        $nid_no = $this->input->post('nid_no');
        $mobile_no = $this->input->post('mobile_no');
        $mail_add = $this->input->post('mail_add');
        $mother_name = $this->input->post('mother_name');
        $nid_no = $this->input->post('nid_no');
        $mobile_no = $this->input->post('mobile_no');
        $mail_add = $this->input->post('mail_add');
        $local_guardian = $this->input->post('local_guardian');
        $guardian_relation = $this->input->post('guardian_relation');
        $nid_no = $this->input->post('nid_no');
        $mobile_no = $this->input->post('mobile_no');


        $data = array(
            'student_name' => $student_name,
            'student_address' => $student_address, 
            'student_roll' => $student_roll,  
            'birth_certificate_no' =>  $birth_certificate, 
            'blood_group' => $blood_group, 
            'father_name' => $father_name, 
            'fathers_mobile_no' => $mobile_no, 
            'fathers_NID_no' =>  $nid_no, 
            'mother_name' => $mother_name, 
            'mothers_mobile_no' =>  $mobile_no,
            'mothers_NID_no' => $nid_no , 
            'local_guardian_name' => $local_guardian,
            'relation_with_lg' => $guardian_relation ,
            'lg_mobile_no' => $mobile_no,
            'lg_NID_no' => $nid_no ,

        ); 

      $this->Student_model->new_student_add($data);
      redirect('student');


    }
    
}
