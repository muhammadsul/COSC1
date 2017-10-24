<?php require_once '../app/views/templates/headerPublic.php' ?>

<title> Simple Login Screen</title>
<h1><b><font color="RoyalBlue">	Login Screen	</font></b></h1>

<h5> <l><font color="LightSkyBlue"> Welcome back to our humble website.. </font></l> </h5>
<h5> <l><font color="Tomato"> Please enter your username and password.. </font></l> </h5>

<div class="row">
  

	<form method= "post" action = "/login/index" >
	 <label><l>Username:</l></label>
	<input type="user" name="user"><br>
	 <label><l>Password:</l></label>
	<input type="password" name="code"><br>
	<input type="submit" value = login name = "login">
	<input type="submit" value = attempts name = "attempts">
			<a href="/login/register"> Sign up here </a>

		
	</form>
</div>
	</html>
	
    <?php require_once '../app/views/templates/footer.php' ?>
