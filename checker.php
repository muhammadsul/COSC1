<?php
	session_start();
 	try{
	//connect the checker to database
    $conn = new PDO('mysql:127.0.0.1;=$servername;dbname=COSC', 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	// to check if the user entert login it will check if it wrong or 
	// empty will show the user a message 
    if(isset($_POST['login'])){
    if(empty($_POST['user']) || empty($_POST['code'])){
    // this is will count the failed attemps by the user
    	 if(!isset($_SESSION['attempts'])){
 	$_SESSION['attempts']=0;
 }
        echo '<label>Please fill all the fields to process login... </label>';
    }else{
        $query="SELECT * FROM users WHERE Name=:user AND passcode=:code";
        $checkstat=$conn->prepare($query);
        $checkstat->execute(array(
            'user' => $_POST['user'],
            'code' => $_POST['code']
        ));
        $count=$checkstat->rowCount();
        if($count>0){
            $_SESSION['user']=$_POST['user'];
            header("location:success.php");
        }
        else{
        $_SESSION['attempts']= $_SESSION['attempts']+1;
 			echo "<br>"."count failed: ".$_SESSION['attempts'];
 			echo "<br>";
            echo'<label>Please check username or password</label>';
            echo "<p><a href= 'index.php'> home page</a>";
					}
				}
			}
		}
		catch(PDOException $ex){
   			$erorrs = $ex->getMessage();
    	}
	if(isset($_POST['attempts'])){
	echo "attempts are: ".$_SESSION['attempts'];
	}


	?>