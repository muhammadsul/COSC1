<?php
if (isset($_SESSION['auth']) != 1) {
    header('Location: /home');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href= "/css/booststrap.css" rel="stylesheet" type="text/css"/>
    <title>COSC 4806</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href='/home'>Home</a></li>
            <li class="active"><a href='/remind/index'>Reminder</a></li>
            <li class="active"><a href="#">About</a></li>
            <li class="active"><a href="/logout">Logout</a></li>
        </ul>
        <form class="nav navbar-nav navbar-right">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
        </form>
    </nav>
    <div class="container">
        <h3>This is my website with some simple bootstrap</h3>
        <p>I'm willing to improve this website, I hope you enjoy it for now</p>
    </div>
</div>
</body>
</html>