<?php

class User {

    public $username;
    public $password;
    public $auth = false;

    public function __construct() {
        
    }

    public function authenticate() {
        /*
         * if username and password good then
         * $this->auth = true;
         */
		 
		$db = db_connect();
        $query="SELECT * FROM users WHERE Name=:user AND passcode=:code";
        $checkstat=$conn->prepare($query);
        $checkstat->execute(array(
            'user' => $_POST['user'],
            'code' => $_POST['code']
        ));
        $count=$checkstat->rowCount();
        if($count>0){
            $_SESSION['user']=$_POST['user'];
		}
    }
	
	public function register ($username, $password) {
		$db = db_connect();
        $connprep=$conn->prepare("INSERT INTO Users(Name, Passcode, address)
    						 values(:name,:code,:email)");
    $connprep->bindParam('name',$myName);
	$connprep->bindParam('code',$myPasscode);
    $connprep->bindParam('email',$emailAdress);
    $connprep->execute();

	}

}
