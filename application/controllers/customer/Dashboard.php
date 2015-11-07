<?php

class Dashboard extends CustomerController {
               
	function __construct()
	{
 		parent::__construct();
	}	
	function index()
	{	
		$this->load->view('customer/index');
	}
}
?>