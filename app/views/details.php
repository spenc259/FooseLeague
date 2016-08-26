<?php

	include 'header.php';

?>

<div class="intro">
	<p>Your account info</p>
</div>

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