<?php

/*
* Register Controller
 
will take input from the register view and validate the input using the model function and submit to db for processing

if the validation fails show the form again else show success / redirect to login

*/
class Login extends Controller
{
	
	function __construct()
	{
		// $this->index();
	}

	public function index() 
	{
		// Connect to the user model
		$login = $this->model('userlogin');
		// $user = $this->model('user');

		
		$user = $login->login();
		// $userdata = $user->userposted(); //* holds the posted data

		// is the user logged in?
		// if yes direct to account page
		// if not log user in and then direct to account page

		// $this->view('login', ['userposted' => $userdata, 'name' => $username]); //* for testing	
		$this->view('login', ['userposted' => $user]);
		
	}
	
}