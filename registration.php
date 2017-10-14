<?php

	try {
    	$conn = new PDO('mysql:127.0.0.1;=$servername;dbname=COSC', 'root', '');
         echo ' You are successfully connected!!'."<br>";
    if(isset($_POST['insert'])){
    $myName=$_POST['name'];
    $myPasscode=$_POST['code'];
    $emailAdress=$_POST['email'];
    $connprep=$conn->prepare("INSERT INTO Users(Name, Passcode, address)
    						 values(:name,:code,:email)");
    $connprep->bindParam('name',$myName);
	$connprep->bindParam('code',$myPasscode);
    $connprep->bindParam('email',$emailAdress);
    $connprep->execute();
		echo "You are successfully registred!!   " . $_SESSION['name'];
    header("location:index.php");
    
    }
    
    }
	catch(PDOException $ex){
   			$erorrs = $ex->getMessage();
    	}
    $conn = null;	
?> 

<html>
<style>

body{
  background:#d9ecf8;
  text-align:center;
}
 </style>


<title> Simple Login Screen</title>
<h1><b><font color="RoyalBlue">	Create your account	</font></b></h1>

<h5> <l><font color="Tomato"> Please enter your username and password and your E-mail.. </font></l> </h5>


  <div class="loginScreen">
  

	<form method = "post" action= "">
	
	 <label><l>Username:</l></label>
	<input type="Username" name="name"><br>
	
	 <label><l>Password:</l></label>
	<input type="Password" name="code"><br>
	
	 <label><l>E-mail:</l></label>
	  <input type="text" name="email" ><br>

	
	<input type="submit" value = Save name = "insert">

		
	</form>
	</html>
