<!DOCTYPE html>
<html>


<title> Simple Login Screen</title>
<h1><b><font color="green">	This is my login Screen...	</font></b></h1>

<h5> <l><font color="red"> This is 1st assignment of Web Data Manegment. </font></l> </h5>

  <div class="loginScreen">
  

	<form action="index.php" method="post">
	 <label><l>Username:</l></label>
	<input type="Username" name="Username"><br>
	 <label><l>Password:</l></label>
	<input type="Password" name="Password"><br>
	<input type="submit" value = Enter>
	</form>
	
	<?php
	$Username = $_POST['Username'];
	$myArray = array('Mike', 'Muhammad', 'Alex');
	for($i=0;$i<$myArray;$i++){
	if ($Username==$myArray[$i]){
	echo 'Welcome back';
	break;
	} else{
	echo 'Please check your username or password';
	break;
	}
	
	}

	?>
	<html>