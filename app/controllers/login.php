<?php

class Login extends Controller {
    public function index() {
      $user = $this->model('User');
 
      if(isset($_POST['login'])){
        $name=$_POST['user'];
        $pass=$_POST['code'];
        $checkpass=password_verify($pass,$hash);
        $user->authenticate($name,$checkpass);
        header('Location: /home');
      }
      else{
        $_SESSION['attempts']++;
        echo "<br>"."Please check your password or username again, this your attempts:   ".$_SESSION['attempts'];
        echo "<p><a href= '../app/views/login.php'> click here to try again</a>";
      }
    }
    public function register () {
      $user = $this->model('User');
		  $this->view('home/register');
		  if(isset($_POST['insert'])){
        $myName=$_POST['name'];
        $myPasscode=$_POST['code'];
        $emailAdress=$_POST['email'];
        if($myPasscode<8){
          echo 'Please your password is too short!!';
          die();
    }
        $hash=password_hash($pass1,PASSWORD_DEFAULT);
			   $user->register($name,$hash,$email);
		}
	}
}
