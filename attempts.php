<?php
		session_start();
		if(isset($_POST['attempts'])){
		$_SESSION['attempts'] = $_SESSION['attempts']+1 ;
		echo "count is: ". $_SESSION['attempts'];
		}

?>