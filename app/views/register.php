<?php
	include 'header.php';
?>


<div class="intro">
	<p>Register for an account.</p>
</div>
<div class="register">
	<h3>Please use the form to create your account below</h3>
</div>
<div class="test">User Post Data: <?php print_r($data['userposted']); ?></div>
<div class="test">Name variable: <?php print_r($data['name']); ?></div>
<div class="account">
	<form action="register" method="post">
		<label for="name">
			<div class="label">Name:</div>
			<input type="text" name="name" value="<?php echo $data['name'] ?>">
			<div class="error"><?php //echo $data['nameerror'] ?></div>
		</label>
		<label for="email">
			<div class="label">email:</div>
			<input type="text" name="email" value="">
		</label>
		<label for="password">
			<div class="label">password:</div>
			<input type="text" name="password" value="">
		</label>
		<label for="confirmpassword">
			<div class="label">Confirm password:</div>
			<input type="text" name="confirmpassword" value="">
		</label>
		<button name="submit" type="submit">Register</button>
	</form>
</div>



<?php 
	include 'footer.php';
?>
