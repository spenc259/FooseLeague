<?php

/**
* Connect to database
*/
class Mydb
{
	
	protected $db;
	protected $host = 'localhost';
	protected $user = 'root';
	protected $password = 'Aur0r4!!';
	protected $table = 'league';

	public function __construct()
	{
		//* create connection
		$this->db = new mysqli($this->host, $this->user, $this->password, $this->table);

	}

	/* get data from a table in db
	*
	*  $table: table name
	*/
	public function get($table) {

		return $this->db->query("SELECT * FROM $table");

	}

	/* insert data from a table in db
	*
	*  $table: table name
	*/
	public function insert($table, $fields, $values) {

		// return $this->db->query("INSERT INTO `teams` (`team_id`, `name`, `bio`) VALUES (NULL, 'dsda', 'adas')");
		// return $this->db->query("INSERT INTO `$table` (`team_id`, `name`, `bio`) VALUES (NULL, '$team_name', '$team_bio')");
		return $this->db->query("INSERT INTO $table ($fields) VALUES ($values)") or die(mysqli_error($this->db));

	}

	/* update data from a table in db
	*
	*  $table: table name
	*/
	public function update($table, $query) {

		return $this->db->query("UPDATE $table WHERE $query");

	}

	/* delete data from a table in db
	*
	*  $table: table name
	*/
	public function delete($table, $field, $query) {

		return $this->db->query("DELETE FROM $table WHERE $table.$field = $query");

	}
}


?>