<?php include('server.php');?>
<?php session_start(); ?>
  
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Helping Hand - Victim Search</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
	.logo {
	    width: 265px;
	    margin: 60px auto;
	}
	.vsearch-label {
		font-size: 1.5em;
		font-weight: bold;
		display: block;
		margin-bottom: 10px;
	}
	</style>
</head>
<body>

 <div class="title"><center>
    <?php 
        if(isset($_SESSION['logged'])) {          
            echo $_SESSION['username'];
            echo '<h1><a href="logout.php">Log Out</a></h1>';
        }
        else echo '<h1><a href="login.php">Log In</a></h1>';
    ?>
 </center></div>     
     
<div class="title">
	<center>
    <a href="index.php">
  <img src="hh.png" alt="Helping Hand Logo" style="width:150px;height:150px;border:0">
</a>
        </center>
    </div>       
<div class="taskmenu">
	<ul>
	<li><a href="team.php">Team</a></li>
	<li><a href="crisis.php">Crisis</a></li>
	<li><a href="counters.php">Relief count</a></li>
    <li><a href="vsearch.php">Victim Search</a></li>
	</ul>
</div>
     <form method="post" action="vresult.php">
    <div class="input-group">
        <label for="name">Victim Name</label>
	   <input type="text" name="name" id="name" required>
        <label for="area">Area</label>
	   <input type="text" name="area" id="area" required>
	</div>

	<div class="input-group" id="btn"> <button type="submit" name="Submit" class="btn">Search</button> </div>  
        
    </form>
    </body>
</html>
