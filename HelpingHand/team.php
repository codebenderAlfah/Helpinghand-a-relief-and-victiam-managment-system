<?php include('server.php'); ?>
<?php session_start(); ?>
  
<!DOCTYPE html>
<style>
.logo {
    width: 265px;
    margin: 60px auto;
}
</style>
<html>
 <div class="title"><center>
    <?php 
        if(isset($_SESSION['logged'])) {          
            echo $_SESSION['username'];
            echo '<h1><a href="logout.php">Log Out</a></h1>';
        }
        else echo '<h1><a href="login.php">Log In</a></h1>';
    ?>
 </center></div>     
     
<head>
	<title>helping hand</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

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
<div class="taskmenu">
    <li><a href="team/allO.php">Organizers Information</a></li>
	<li><a href="team/allV.php">Volunteers Information</a></li>
	<li><a href="team/org&vol.php">Team Structure</a></li>
	
</div>

</body>
</html>