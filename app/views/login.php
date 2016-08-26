<?php
	include 'header.php';
?>

<div class="intro">
	<p>Login to youraccount.</p>
</div>
<div class="register">
	<h3>Please use the form to login to your account</h3>
</div>
<div class="test">User Post Data: <?php print_r($data['userposted']); ?></div>
<div class="test">Name variable: <?php //print_r($data['name']); ?></div>
<div class="account">
	<form action="login" method="post">
		<label for="name">
			<div class="label">username:</div>
			<input type="text" name="name" value="<?php //echo $data['name'] ?>">
			<div class="error"><?php //echo $data['nameerror'] ?></div>
		</label>
		<label for="password">
			<div class="label">password:</div>
			<input type="text" name="password" value="">
		</label>
		<button name="submit" type="submit">login</button>
	</form>
</div>

<?php 
	include 'footer.php';
?>

