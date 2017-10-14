<?php
		session_start();
		if(isset($_SESSION['attempts'])){
	$_SESSION['attempts']=0;
}


	if(isset($_SESSION['attempts'])){
	echo "attempts are: ".$_SESSION['attempts'];
}

?>