<?php

/**
* Account Controller
*/
class Account extends Controller
{
	
	function __construct()
	{
		//$this->index();
	}

	public function index($team = '') 
	{
		// Connect to my db model
		//$db = $this->model('mydb');

		// make use of the get function declared in mydb class
		//$team = $db->get('teams');			

		// push the data through to the view
		$this->view('account');		
	}
	
}