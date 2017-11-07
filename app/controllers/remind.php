<?php

class Remind extends Controller {
	
    public function index($id = '') {		
        $r = $this->model('Reminders');
		$list = $r->get_reminders();
		
		if ($id) {
			$item = $r->get_reminder($id);
			
			print_r ($item);
			
			die;
		}
		
		$this->view('Reminders/index', [
		'list' => $list
		] );
    }
	
	public function update($id) {
		$r = $this->model('Reminders');

        $item = $r->get_reminder($id);

        if(isset($_POST['submit'])){
        $subject=$_POST['subject'];
        $description=$_POST['description'];
	}
		$this->view('Reminders/update', ['item' => $item] );
			
    }
	
	public function remove($id = '') {
		$r = $this->model('Reminders');
		$r->removeItem($id);
		header('Location:/remind');
    }
	
	public function create() {
		$r = $this->model('Reminders');
		if(isset($_POST['add'])){
			$usersubject=$_POST['user_subject'];
			$userdescription=$_POST['user_description'];
			$r->add($usersubject,$userdescription);
		}
    }
}