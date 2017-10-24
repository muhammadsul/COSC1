<?php require_once '../app/views/templates/header.php' ?>
<?php
echo "Welcome " . $_SESSION['user'];
		echo "<br>";
		echo "Today is " . date("d/m/Y") . "<br>";
		echo "<p><a href= 'logout.php'> Press here to logout</a>”;
?>

    <?php require_once '../app/views/templates/footer.php' ?>
