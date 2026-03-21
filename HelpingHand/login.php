<?php include('server.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>Helping Hand</title>
	<link rel="stylesheet" type="text/css" href="style.css" color= white>
</head>
<body>

<div class="title"><center><h1>Helping Hand</h1></center></div>
<div class="header"> <h2>Log In</h2></div>
<form method="post" action="login.php">
	<div class="input-group">
	   <label for="username">Username</label>
        <input type="text" name="username" id="username" required autocomplete="username">
	</div>
	
	<div class="input-group">
	   <label for="password">Password</label>
	   <input type="password" name="password_1" id="password" required autocomplete="current-password">
	</div>

	<div class="input-group"> <button type="submit" name="login" class="btn">Log In</button> </div>  
	<p>Not a member Yet? <a href="register.php">Sign up</a> </p>

</form>

</body>
</html>