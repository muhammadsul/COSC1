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
        $checkstat= $db->prepare($query);
        $checkstat->execute(array(
            'user' => $_POST['user'],
            'code' => $_POST['code']
        ));
        $count=$checkstat->rowCount();
        if($count>0){
            this-> auth = true;
            $_SESSION['user']=$rows['user'];
            $_SESSION['code']=$rows['code'];


        }
    }
    
	
	public function register ($username, $password) {
	else{
           $db = db_connect();

            $connprep= $db->prepare("INSERT INTO Users(Name, Passcode, address)
                             values(:name,:code,:email)");
    $connprep->bindParam('name',$myName);
    $connprep->bindParam('code',$myPasscode);
    $connprep->bindParam('email',$emailAdress);
    $connprep->execute();
        }

}
