<!DOCTYPE html>
<html>
<style>

body{
  background:#d9ecf8;
  text-align:center;
}
 </style>


<title> Simple Login Screen</title>
<h1><b><font color="RoyalBlue">	Login Screen	</font></b></h1>

<h5> <l><font color="LightSkyBlue"> Welcome back to our humble website.. </font></l> </h5>
<h5> <l><font color="Tomato"> Please enter your username and password.. </font></l> </h5>


  <div class="loginScreen">
  

	<form method = "post" action= "checker.php">
	 <label><l>Username:</l></label>
	<input type="user" name="user"><br>
	 <label><l>Password:</l></label>
	<input type="password" name="code"><br>
	<input type="submit" value = login name = "login">
	<input type="submit" value = attempts name = "attempts">

		
	</form>
	</html>
	
	<?php

	
	if(isset($_SESSION['is authenticated'])){
	header("Location:success.php");
	}	
	
	echo "<p><a href= 'registration.php'> Get your account!! </a>";

	?>