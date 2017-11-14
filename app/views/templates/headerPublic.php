<?php
require_once('../app/core/utils.php');

if (isset($_SESSION['auth']) == 1) {
    header('Location: /home');
}
?>

<!DOCTYPE html>
<html lang="en">
    <link href= "/css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <title>COSC 4806</title>
    <meta charset="UTF-8">
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
            <li class="active"><a href='/login/register'>Sign up</a></li>
            <li class="active"><a href="#">About</a></li>
        </ul>

	<footer id="page-footer">
			<form class="nav navbar-nav navbar-right">
				<div id="course-footer"></div>
				<p class="helplink"></p>
				<div class="footnote text-center"><div class="text_to_html"><p>COSC 4806</p></div></div></div></footer>
			</form>
			<form class="nav navbar-nav navbar-right">
				<button type="button" class="btn btn-secondary" title="" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Popover Title">Top</button>
			</form>
		</footer>
</body>
</html>
