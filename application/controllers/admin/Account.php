<?php

class Account extends AdminController {
               
	function __construct()
	{
 		parent::__construct();
	}	
	function index()
	{			
		echo 'account says hello';
		// $this->load->view('index');
	}
}
?>