<?php

/**
* League Controller
*/
class League extends Controller
{
	
	function __construct()
	{
		$this->index();
	}

	public function index() 
	{
		// Load my model data
		$teams = $this->model('teams');

		$teamname = $teams->teamname; //* single public variable from the model

		$allteams = $teams->allteams; //* array of team data from a function in the model

		// push the data through to the view
		// $this->view('league');
		$this->view('league', ['teamname' => $teamname, 'allteams' => $allteams]);		
	}
	
}