<?php

/*
* Register Controller
 
will take input from the register view and validate the input using the model function and submit to db for processing

if the validation fails show the form again else show success / redirect to login

*/
class Register extends Controller
{
	
	function __construct()
	{
		// $this->index();
	}

	public function index() 
	{
		// Connect to the user model
		$user = $this->model('user');

		

		$userdata = $user->userposted(); //* holds the posted data

		// is the form submission valid?
		$valid = $user->validate($userdata);
		
		$username = $userdata['name'];
		$useremail = $userdata['email'];
		$userpassword = $userdata['password'];
		//$userpassconfirm = $userdata['confirmpassword'];	

		if ($valid) {
			$user->registerUser($userdata);
			// echo "valid";
		} else {
			// echo "not valid";
			// show the form
		}	

		$this->view('register', ['userposted' => $userdata, 'name' => $username]); //* for testing	

		//$name = $this->validate();

		//$valid = $this->validate(); use when live to check if the posted data is valid

		// push the data through to the view

		// if ($valid) 
		// {
		// 	$this->view('register', ['userposted' => $userposted]);			
		// 	// $this->view('account', ['userposted' => $userposted]);
		// } else {
		// 	$this->view('register', ['userposted' => $userposted, 'error' => $error]);
		// }		
	}

	
	
}