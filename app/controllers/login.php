<?php

class Login extends Controller {
    public function index() {
        $user = $this->model('User');

	if(isset($_POST['login'])){
      $name=$_POST['user'];
      $pass=$_POST['code'];

        $user->authenticate();

        if ($user->auth == TRUE) {
            $_SESSION['auth'] = true;
        }
        
        header('Location: /home');
    }
	
	public function register () {
		$user = $this->model('User');

		 if(isset($_POST['insert'])){
    $myName=$_POST['name'];
    $myPasscode=$_POST['code'];
    $emailAdress=$_POST['email'];
    $hash = password_hash($myPasscode, PASSWORD_DEFAULT)
    }


		
			
			$user->register($myName, $myPasscode, $emailAdress);
			$_SESSION['auth'] = true;
		}
		
		$this->view('home/register');
	}
}
