<?php
	$myUser= "Muhammad";
	$myPass = "1111";

	if(isset($_POST['login'])){
	$user = $_POST['Username'];
	$pass = $_POST['Password'];
	if ($user == $myUser and $pass == $myPass ){
		session_start();
		$_SESSION['Username'] = $user;
		$_SESSION['Password'] = $pass;
		$_SESSION['isauthenticated']= true;
		
		header("location: success.php");

	} 
	
	else{
	if(isset($_POST['login'])){
	if ($user != $myUser or $pass != $myPass ){
		session_start();

		$_SESSION['attempts'] = $_SESSION['attempts']+1 ;
		echo "count is: ". $_SESSION['attempts'];
		}
		}	
				echo "<br>";

			echo " Please check username or password <p><a href= 'index.php'> Press here to try again!</a>";
		$_SESSION['isauthenticated']= false;

	}//else
	}//if
	else {
	header("location: index.php");
	}

	?>