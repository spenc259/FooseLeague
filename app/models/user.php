<?php


/**
* 
*/
class User extends Mydb
{

	public $nameErr;
	
	function __construct()
	{
		//* create connection
		$this->db = new Mydb;

		//$nameErr = $this->validate();
	}

	//* validate 
	// input - check if empty, sanitize, remove characters etc
	//  - name: allow characters and whitespace only
	//  - email: has to be in a valid email format
	//  - password: has to have entered a password

	function validate($userdata) 
	{
		$name = $userdata['name'];
		$email = $userdata['email'];
		$password = $userdata['password'];

		$valid = "";
		//* Check if empty fields were submitted
		if (empty($name) || empty($email) || empty($password)) {
	    	// $nameErr = "please select a name";
	    	$valid = false;
	   	} else {
	     	// $name = $_POST["name"];
	     	$valid = true;
	   	}

	   	// check if name only contains letters and whitespace
	    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
	      // $nameErr = "Only letters and white space allowed"; 
	    	$valid = false;
	    }


	    if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email)) {
	      //$emailErr = "Invalid email format"; 
	    	$valid = false;
	    }

	    if ( $valid ) {
	    	echo "valid";
	    	return true;
	    } else {
	    	echo "not valid";
	    	return false;
	    }	    
	}

	//* submit the data to the database
	function registerUser ($userdata) {

		$values = [];

		foreach ($userdata as $field => $value) {
			if (is_numeric($value))
			{
				$values[] = $value;
				$fields[] = $field;
			} else {
				$values[] = "'" . $value . "'";
				$fields[] = $field;
			}
		}
		
		$values = implode(',', $values); // convert to a string
		
		$fields = implode(',', $fields);

		$this->db->insert('user', $fields, $values);
	}

	//* gather post data
	public function userposted() {
		if ($_SERVER["REQUEST_METHOD"] == "POST") {	   	
			   	
			$data = ['name' => $name = $_POST["name"], 'email' => $email = $_POST["email"], 'password' => $confirmpassword = $_POST["confirmpassword"]];

			$user = $data;

			return $user;
		}
	}


		// public function addUser($userposted) {
	// 	foreach ($userposted as $ => $value) {
	// 		# code...
	// 	}
	// }

	//$post = ['team_name' => $team_name, 'team_bio' => $team_bio];
	//$team = $mydb->insert('teams', $fields, $values); 

	

	//* Sample Code
	/*

	

	*/

	// register user - check form validates and add to the database, add in a message if user exists

	// sign-in user - check if exists, match name and email if successful, redirect to account page

	// public function validate()
	// {
	// 	//* run test input on the posted data
	// 	/*
	// 	function test_input($data) {
	// 	   $data = trim($data);
	// 	   $data = stripslashes($data);
	// 	   $data = htmlspecialchars($data);
	// 	   return $data;
	// 	}
	// 	$this->user(); //* this is the posted user
	// 	*/

	// 	//* make the posted data available
	// 	$user = $this->userposted();

	// 	//* set up the posted data ready to validate
	// 	$name = $user['name'];
	// 	$email = $user['email'];
	// 	$password = $user['password'];

	// 	//* can possibly return an array of error messages
		
	// 	//* validation
	// 	// check if any is empty
	// 	if (empty($name) || empty($email) || empty($password)) {
 //    		$error = "you left a field empty!";
 //    		return $error;
	//    	} else {
	//      	return $name;
	//    	}
	   	

	// }
	
}

?>