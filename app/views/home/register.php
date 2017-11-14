<?php require_once '../app/views/templates/headerPublic.php' ?>
<head>
  <link rel="stylesheet" type="text/css" href="/css/booststrap.css">
</head>
<h1> Create your account </h1>
<h4>  Please enter your username and password and your E-mail..  </h5>
  <form method= "post" action = "/login/register" >
    <div class="center">
      <label><l>Username:</l></label>
      <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter username" ><br>
      <label><l>Password:</l></label>
      <input type="text" name="code" class="form-control" id="exampleInputPassword1" placeholder="Entert password"><br>
      <label><l>E-mail:</l></label>
      <input type="text" name="email" class="form-control" id="exampleInputPassword1" placeholder="Entert email"><br>
      <a href= '../app/views/login.php'> You already have account! </a><br>
      <input type="submit" value = Save name = "insert"  class="btn btn-success">
    </div>
</form>>


<?php require_once '../app/views/templates/footer.php' ?>
