<?php

class User {

    public $username;
    public $password;
    public $auth = false;

    public function __construct() {
        
    }

    public function authenticate() {




        $db = new PDO('mysql:127.0.0.1;=$servername;dbname=COSC', 'root', '');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query="SELECT * FROM users WHERE Name=:user AND passcode=:code";
        $checkstat= $db->prepare($query);
        $checkstat->execute(array(
            'user' => $_POST['user'],
            'code' => $_POST['code']
        ));
        $count=$checkstat->rowCount();
        if($count>0){
            $_SESSION['user']=$rows['user'];
            $_SESSION['auth'] = true;
        }
    }



 
    public function register ($username, $password, $email) {  
        try{
        $db = new PDO('mysql:127.0.0.1;=$servername;dbname=COSC', 'root', '');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connprep=$db->prepare("INSERT INTO users(Name, Passcode, address)"
                            ."values(:name,:code,:email)");
        $connprep->bindParam('name',$username);
        $connprep->bindParam('code',$password);
        $connprep->bindParam('email',$email);
        $connprep->execute();
    }
    catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
    $db = null;
    }
}
