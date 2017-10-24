<?php

class Home extends Controller {

    public function index($name = '') {		
        $user = $this->model('User');


        $message =   ' Hey ' . $_SESSION['user']. 
        '. Today is '. date("d/m/Y") ;
        $this->view('home/index', ['message' => $message]);
    }

    public function login($name = '') {
        $this->view('home/login');
    }

}
