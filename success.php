<?php
	session_start();	
		echo "Welcome " . $_SESSION['user'];
		echo "<br>";
		echo "Today is " . date("d/m/Y") . "<br>";
		echo "<p><a href= 'logout.php'> Press here to logout</a>";
	// 	if(!isset($_SESSION['is authenticated'])){
// 	header("Location:index.php");
// 	}	
?>