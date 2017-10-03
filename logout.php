<?php
	session_start();
	session_destroy();
	echo "I hope you enjoy our website " . $_SESSION['Username'];
	echo "<p><a href= 'index.php'> Press here to login again</a>";
?>