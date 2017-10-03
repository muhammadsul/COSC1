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
	<input type="Username" name="Username"><br>
	 <label><l>Password:</l></label>
	<input type="Password" name="Password"><br>
	<input type="submit" value = login name = "login">
		
	</form>
	
	<form method = "post" action= "attempts.php">
	
	<input type="submit" value = attempts name = "attempts">

	</form>
	

	<html>