<?php// require_once '../app/views/templates/headerPublic.php' ?>
<div class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h1>You are not logged in!</h1>
                <p class="lead"> <?= date("F jS, Y"); ?></p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <form class="form-horizontal" action="/login/index" method="post">
			    <fieldset>
					<div class="form-group">
	 <label><l>Username:</l></label>
	<input type="user" name="user"><br>
	 <label><l>Password:</l></label>
	<input type="password" name="code"><br>
	<input type="submit" value = login name = "login">
	<input type="submit" value = attempts name = "attempts">

					  </div>
					</div>
			    </fieldset>
			</form>
			<a href="/login/register"> Get your account here </a>
        </div>
    </div>

    <?php require_once '../app/views/templates/footer.php' ?>
