<?php

class Home extends Controller {

    public function index($name = '') {		
    echo "Welcome " . $_SESSION['user'];
		echo "<br>";
		echo "Today is " . date("d/m/Y") . "<br>";
		echo "<p><a href= 'logout.php'> Press here to logout</a>";

    public function login($name = '') {
        $this->view('home/login');
    }

}
