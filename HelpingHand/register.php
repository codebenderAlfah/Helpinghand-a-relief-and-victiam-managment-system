<?php include('server.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
		<input type="text" name="username" id="username" required>
	</div>
	
	<div class="input-group">
		<label for="first_name">First Name</label>
		<input type="text" name="first_name" id="first_name" required>
	</div>
	
	<div class="input-group">
		<label for="last_name">Last Name</label>
		<input type="text" name="last_name" id="last_name" required>
	</div>
	
	<div class="input-group">
		<label for="email">Email</label>
		<input type="email" name="email" id="email" required>
	</div>
	
	<div class="input-group">
		<label for="password_1">Password</label>
		<input type="password" name="password_1" id="password_1" required>
	</div>
	
	<div class="input-group">
		<label for="password_2">Confirm Password</label>
		<input type="password" name="password_2" id="password_2" required>
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