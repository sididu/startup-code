<?php

/**
* 
*/
class Template extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		echo "welcome to Sample Template";
	}

	function sample_template($data = NULL)
	{
		$this->load->view('template/sample_template_v', $data);
	}

	function admin_template($data = NULL)
	{
		$this->load->view('template/admin_template_v', $data);
	}

}