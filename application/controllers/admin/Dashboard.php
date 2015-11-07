<?php

class Dashboard extends AdminController {
               
	function __construct()
	{
 		parent::__construct();
	}	
	function index()
	{			
		$this->load->view('admin/index');
	}
}
?>