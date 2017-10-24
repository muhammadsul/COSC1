<?php

session_destroy();
echo "I hope you enjoy our website " . $_SESSION['user'];
	echo "<p><a href= 'index.php'> Press here to login again</a>";

header ('location:/');



?>