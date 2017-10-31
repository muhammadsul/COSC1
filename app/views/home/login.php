<?php require_once '../app/views/templates/headerPublic.php' ?>
<head>
<link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
<title> Simple Login Screen</title>
<h1><b>	Login Screen	</b></h1>

<h5>  Welcome back to our website.. </h5>
<h4>  Please enter your username and password.. </h5>


  

	<form method= "post" action = "/login/index" >
	<div class="center">
	<label>Username:</label>
	<input type="text" name="user"><br>
	
	<label>Password:</label>
	<input type="text" name="code"><br>
	
	<input type="submit" value = login name = "login">
	
	<input type="submit" value = attempts name = "attempts">
	
	<a href='/login/register'> Sign up here </a>
</div>
		
	
	</html>
	
    <?php require_once '../app/views/templates/footer.php' ?>
