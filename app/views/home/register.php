<?php //require_once '../app/views/templates/headerPublic.php' ?>
<div class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h1>Please create an account</h1>
                <p class="lead"> <?= date("F jS, Y"); ?></p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <form class="form-horizontal" action="/login/register" method="post">
			    <fieldset>
					<div class="form-group">
		
	 <label><l>Username:</l></label>
	<input type="Username" name="name" placeholder="Username"> <br>
	
	 <label><l>Password:</l></label>
	<input type="Password" name="code" placeholder="Password"><br>
	
	 <label><l>E-mail:</l></label>
	  <input type="text" name="email" placeholder="E-mail"><br>

	
	<input type="submit" value = Save name = "insert">
					  </div>
					</div>
			    </fieldset>
			</form>
			<a href="/login/register"> Sign up here </a>
        </div>
    </div>

    <?//php require_once '../app/views/templates/footer.php' ?>
