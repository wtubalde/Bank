<?php

class Transaction extends AdminController {
               
	function __construct()
	{
 		parent::__construct();
	}	
	function index()
	{			
		$this->load->view('index');
	}
}
?>