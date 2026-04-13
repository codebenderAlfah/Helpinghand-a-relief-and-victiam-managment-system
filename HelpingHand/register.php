<?php include('server.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>Helping Hand</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<div class="title"><center><h1>Helping Hand</h1></center></div>
<div class="header"><h2>Register</h2></div>

<form method="post" action="register.php">
<?php include('errors.php');?>
	<div class="input-group">
		<label for="username">Username</label>
		<input type="text" id="username" name="username" autocomplete="username">
	</div>
	
	<div class="input-group">
		<label for="first_name">First Name</label>
		<input type="text" id="first_name" name="first_name" autocomplete="given-name">
	</div>
	
	<div class="input-group">
		<label for="last_name">Last Name</label>
		<input type="text" id="last_name" name="last_name" autocomplete="family-name">
	</div>
	
	<div class="input-group">
		<label for="email">Email</label>
		<input type="email" id="email" name="email" autocomplete="email">
	</div>
	
	<div class="input-group">
		<label for="password">Password</label>
		<input type="password" id="password" name="password_1" autocomplete="new-password">
	</div>
	
	<div class="input-group">
		<label for="confirm_password">Confirm Password</label>
		<input type="password" id="confirm_password" name="password_2" autocomplete="new-password">
	</div>
	
	<div>
		<div class="input-group">
			<button type="submit" name="register" class="btn">Register</button>
		</div>
	</div>
	<p> Already a member? <a href="login.php">Sign In</a></p>

</form>

</body>
</html>