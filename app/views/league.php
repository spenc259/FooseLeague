<?php 

include 'header.php';

?>

	<div class="intro">
		<p>This is the league, you can see how your team is doing here</p>
	</div>

	<div class="table">
		<table>
			<thead>
				<th>Team</th>
				<th>P</th>
				<th>W</th>
				<th>D</th>
				<th>L</th>
				<th>GF</th>
				<th>GA</th>
				<th>Pts</th>
			</thead>
			<tbody>
				<?php
				echo "Teamname is: " . $data['teamname'] . "<br/>";
				// print_r($data['allteams']);	
				foreach ($data['allteams'] as $team) {			
				 
				echo "<tr>
				    <td>".$team['team_id']."</td>
				    <td>".$team['name']."</td>
				    <td>".$team['bio']."</td>
				</tr>
				"; } ?>				
				

			</tbody>
		</table>
	</div>

<?php 
	include 'footer.php';
?>