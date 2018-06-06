<?php 
include "header.php";
include "db.php";
include "session.php";
?>
<link rel="stylesheet" type="text/css" href="signup.css">


<form class="login" action="userlogin.php" method="POST">		
	<legend>Log In</legend>
	<p class="helper-text" style="margin-bottom:0;">All fields are mandatory</p>
		<label for="email">Email</label>
		<br>
		<input type="text" name="email">
		<br>
		<label for="temp_password">Password</label>
		<br>
		<input type="password" name="temp_password">
		<br>
		<button type="submit" name="login" value="submit">Login</button>
</form>

<p class="signuplink">Don't have an account? <a href="signup.php">Sign Up</a></p>


<?php include "footer.php";





