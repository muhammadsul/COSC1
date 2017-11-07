<?php require_once '../app/views/templates/headerPublic.php' ?>
<head>
<link rel="stylesheet" type="text/css" href="/css/style.css">
</head>


    <h1> Create your account </h1>

<h4>  Please enter your username and password and your E-mail..  </h5>


  

  <form method= "post" action = "/login/register" >
    <div class="center">

   <label><l>Username:</l></label>
  <input type="text" name="name"><br>

   <label><l>Password:</l></label>
  <input type="text" name="code"><br>
  
   <label><l>E-mail:</l></label>
    <input type="text" name="email" ><br>
  
  <a href= '../app/views/login.php'> You already have account! </a><br>
  
  <input type="submit" value = Save name = "insert">


   
    
</div>

    <?php require_once '../app/views/templates/footer.php' ?>
