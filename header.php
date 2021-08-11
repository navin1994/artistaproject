<?php session_start(); ?>
<!DOCTYPE html>
<html>
      <head>
	  <title>Login form</title>
	  <link rel="stylesheet" type="text/css" href="style.css">
	  <link async href="http://fonts.googleapis.com/css?family=Antic" data-generated="http://enjoycss.com" rel="stylesheet" type="text/css"/>
	  <script type="text/javascript" src="jquery-3.3.1.min.js"></script>
	  </head>
      <body>
      	<h1></h1>
      	
      	<header>
      		<nav>
		<div class="main-wrapper">
			<ul>
				<li><a href="index.php">Home</a></li>
				<?php
          if(!isset($_SESSION['u_id'])){
          	echo "<li><a href='login.php'>Login</a></li>
				<li><a href='signup.php'>Sign Up</a></li>";
          }else{
          	echo"<li><a href='issueForm.php'>Report Issue</a></li>
          	<li><a href='includes/logout.inc.php'>Logout</a></li>";
          }
		 ?>
				
			</ul>
		</div>
	</nav>
      	</header>