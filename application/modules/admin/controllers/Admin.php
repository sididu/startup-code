<?php

/**
* 
*/
class Admin extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$data['content_view'] = 'Admin/users_v';

		$this->template->admin_template($data);
	}
}