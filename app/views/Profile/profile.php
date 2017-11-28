a<?php require_once '../app/views/templates/headerPublic.php' ?>
<head>
	<link rel="stylesheet" type="text/css" href="/css/booststrap.css">
</head>
<form method= "post" action = "/profile/index" >
	<div class="center">
		
		<label>First Name:</label>
		<input type="text" name="firstNM" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Firstname" required> <br>
		<label>Last Name:</label>
		<input type="text" name="lastNM" class="form-control" id="exampleInputPassword1" placeholder="Entert Lastname" required><br>
		<label>E-mail:</label>
		<input type="text" name="myEmail" class="form-control" id="exampleInputPassword1" placeholder="Entert E-mail" required><br>
		<label>Phone Number:</label>
		<input type="text" name="phoneN" class="form-control" id="exampleInputPassword1" placeholder="Entert Phone Number" required><br>
		<label>Birthay:</label>
		<input type="text" name="birthD" class="form-control" id="exampleInputPassword1" placeholder="Entert Birthday" required><br>

		<input type="submit" value = enter name = "enter" class="btn btn-warning">
		
		</div>
		</form>
		</html>
		<?php require_once '../app/views/templates/footer.php' ?>
