<?php include 'header.php'; ?>
<link rel="stylesheet" type="text/css" href="signup.css">


<form class="signup" action="register.php" method="POST">		
	<legend>Sign Up</legend>
	<p class="helper-text" style="margin-bottom:0;">All fields are mandatory</p>
		<label for="firstName">First Name</label>
		<br>
		<input type="text" name="firstName">
		<br>
		<label for="lastName">Last Name</label>
		<br>
		<input type="text" name="lastName">
		<br>
		<label for="email">Email</label>
		<br>
		<input type="text" name="email">
		<br>
		<label for="userName">User Name</label>
		<br>
		<input type="text" name="userName">
		<br>
		<label for="password">Password</label>
		<br>
		<input type="password" name="password">
		<br>
		<label for="confirmPassword">Confirm Password</label>
		<br>
		<input type="password" name="confirmPassword">
		<br>
		<button type="submit" name="submit" value="Submit">Submit</button>
</form>

<?php include "footer.php"; ?>
