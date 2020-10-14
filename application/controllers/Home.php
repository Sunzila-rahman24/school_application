<?php

class Home extends CI_Controller
{
    function index () {
        $this->load->view('custom');

    }

    function golabo(){
    	$this->load->view('deer');

    }
    function hidden () {
        $this->load->view('dashboard/index');
    }
}


