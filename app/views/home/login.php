<?php require_once '../app/views/templates/headerPublic.php' ?>
<head>
	<link rel="stylesheet" type="text/css" href="/css/booststrap.css">
</head>
<title> Simple Login Screen</title>
<h1><b>	Login Screen	</b></h1>
<h5>  Welcome back to our website.. </h5>
<h4>  Please enter your username and password.. </h5>
	<form method= "post" action = "/login/index" >
		<div class="center">
			<label>Username:</label>
			<input type="text" name="user" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter username" > <br>
			<label>Password:</label>
			<input type="text" name="code" class="form-control" id="exampleInputPassword1" placeholder="Entert password"><br>
			<input type="submit" value = login name = "login" class="btn btn-warning">
			<input type="submit" value = attempts name = "attempts" class="btn btn-warning">
			<a href='/login/register'> Sign up here </a>
		</div>
		</html>
		<?php require_once '../app/views/templates/footer.php' ?>
