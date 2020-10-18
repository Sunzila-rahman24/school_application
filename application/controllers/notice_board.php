<?php

class Notice_board extends CI_Controller
{
	
	public function __construct()
	{
		parent ::__construct();
	}
	public function index()
	{
		$this->load->view('noticeboard/noticeboard');
	}
}