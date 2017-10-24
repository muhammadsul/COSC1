<?php require_once '../app/views/templates/headerPublic.php' ?>


<div class="row">
		<h1><b><font color="RoyalBlue">	Create your account	</font></b></h1>

<h5> <l><font color="Tomato"> Please enter your username and password and your E-mail.. </font></l> </h5>


  

	<form method= "post" action = "/login/register" >
	
	 <label><l>Username:</l></label>
	<input type="Username" name="name"><br>
	
	 <label><l>Password:</l></label>
	<input type="Password" name="code"><br>
	
	 <label><l>E-mail:</l></label>
	  <input type="text" name="email" ><br>

	
	<input type="submit" value = Save name = "insert">

		
	</form>
</div>
	</html>

    <?php require_once '../app/views/templates/footer.php' ?>
