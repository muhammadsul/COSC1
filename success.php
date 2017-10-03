<?php
	session_start();	
		echo "Welcome " . $_SESSION['Username'];
		echo "<br>";
		echo "Your Password:  " . $_SESSION['Password'];
		echo "<br>";
		echo "Today is " . date("d/m/Y") . "<br>";
		echo "<p><a href= 'logout.php'> Press here to logout</a>";

?>