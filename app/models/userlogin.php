<?php


/**
* 
*/
class Userlogin extends Mydb
{

	public $username = "";
	
	function __construct()
	{
		//* create connection
		$this->db = new Mydb;

		//* create a session
		session_start();

		
	}


	/*
	* log the user in - should check the db for username and password and set logged in to 1
	*
	*/
	function login() {

		$username = $_POST['name'];
		$password = $_POST['password'];

		$user = array($username, $password);

		return $user; 

	}

	/*
	* log the user out - look up username / session and set logged in to 0
	*
	*/
	function logout() {}

	/*
	* check if the user is logged in - check the session data
	*
	*/
	function loggedin() {}


	
}

?>