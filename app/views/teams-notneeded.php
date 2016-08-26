<?php 

include 'header.php';

$con = new mysqli('localhost', 'root', 'Aur0r4!!', 'league');

include 'db.php';

$mydb = new mydb($con);

//* gather post data
if ($_SERVER["REQUEST_METHOD"] == "POST") {	   	
	   	
	$data = ['name' => $team_name = $_POST["team_name"], 'bio' => $team_bio = $_POST["team_bio"]];
	$values = [];

	foreach ($data as $field => $value) {
		if (is_numeric($value))
		{
			$values[] = $value;
		} else {
			$values[] = "'" . mysql_real_escape_string($value) . "'";
		}
	}

}

//$post = ['team_name' => $team_name, 'team_bio' => $team_bio];
$team = $mydb->insert('teams', $fields, $values); 
 

//* get the registered teams
$team = $mydb->get('teams');



?>


	<div class="intro">
		<h1>register your team</h1>
		<h2>Please enter details about your team</h2>
	</div>

	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

		<div class="team_info">
			<label for="team_name">Team name</label>
			<input type="text" name="team_name" value="<?php $team_name ?>" />
			<span class="error"><?php echo $team_nameErr;?></span>					
		</div>

		<div class="team_info">
			<label for="team_bio">Team Bio</label>
			<input type="text" name="team_bio" value="<?php $team_bio ?>" />
			<span class="error"><?php echo $team_bioErr;?></span>					
		</div>

		<button type="submit">Submit</button>

	</form>

	<div class="your_team_info">
		<div class="intro">
			<h3>Your Team details</h3>
		</div>
		<table class="your_team">
			<thead>
				<th>Team id</th>
				<th>Team name</th>
				<th>Team bio</th>
			</thead>
			<tbody>
				<?php
				foreach ($team as $row) { 
				echo "<tr>
				    <td>".$row['team_id']."</td>
				    <td>".$row['name']."</td>
				    <td>".$row['bio']."</td>
				</tr>
				"; } ?>

			</tbody>
		</table>
	</div>

<?php

	include 'footer.php';

?>