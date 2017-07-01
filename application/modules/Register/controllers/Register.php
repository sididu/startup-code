<?php

/**
* 
*/
class Register extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$data['content_view'] = 'Register/rp1_v';

		$this->template->admin_template($data);
	}

	function rp2()
	{
		$data['content_view'] = 'Register/rp2_v';

		$this->template->admin_template($data);
	}

	function rp3mum()
	{
		$data['content_view'] = 'Register/rp3mum_v';

		$this->template->admin_template($data);
	}

	function rp3sus()
	{
		$data['content_view'] = 'Register/rp3sus_v';

		$this->template->admin_template($data);
	}

	function rb1()
	{
		$data['content_view'] = 'Register/rb1_v';

		$this->template->admin_template($data);
	}

	function rt1()
	{
		$data['content_view'] = 'Register/rt1_v';

		$this->template->admin_template($data);
	}

	function jaksa()
	{
		$data['content_view'] = 'Register/jaksa_v';

		$this->template->admin_template($data);
	}

	function kategori_subyek()
	{
		$data['content_view'] = 'Register/kategori_subyek_v';

		$this->template->admin_template($data);
	}

	function pasal()
	{
		$data['content_view'] = 'Register/pasal_v';

		$this->template->admin_template($data);
	}
}