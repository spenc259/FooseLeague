<?php 

/*

teams model

will get all data relating to the teams
 - teams, played, won, lost, points

*/

class Teams extends Mydb
{

	public $teamname = "Rangers";
	public $allteams;

	public function __construct()
	{
		//* create connection
		$this->db = new Mydb;

		$this->allteams = $this->allTeams();

		// print_r($this->allteams);

	}

	public function allTeams() {

		// $this->allteams = "Rangers, QOS, Hibs";

		$teamnames = $this->db->get('teams');

		while ($row = $teamnames->fetch_assoc()) {
			// echo $row['name'] . '<br />';
			// $names[] = $row['name']; //* gets names
			$names[] = $row;

		}

		return $names;
	}

}