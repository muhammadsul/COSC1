<?php

class Profile extends Controller {
	
    public function index() {


    	$user=$this->model('profile');
        if(isset($_POST['enter'])){
        	$firstNM = $_POST['firstNM'];
        	$lastNM = $_POST['lastNM'];
        	$myEmail = $_POST['myEmail'];
        	$phoneN = $_POST['phoneN'];
        	$birthD = $_POST['birthD'];

        	$user->personalDetails($firstNM, $lastNM, $myEmail, $phoneN,$birthD);
        }
        $this->view('Profile/profile');
    }
}
