<?php
include('/Applications/MAMP/htdocs/web2016-master/projectclass/php/login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: /Applications/MAMP/htdocs/web2016-master/projectclass/php/profile.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Advising WebApp</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 
  <link rel="stylesheet" href="main.css">
</head>

<header>
<div class="container">
 <div class="well">
    <h1>Advising WebApp</h1>
    <p> Web App that helps with advising of CS majors!</p> 
  </div>
  </div>

  </header>
  

<body>
	<div class="container col-md-6 col-md-offset-3 ">
  
  <div class="panel panel-info">
    <div class="panel-heading text-center">
    	<h2>Hello Professor, Please login to see the list of the students you advising.</h2>
    </div>
    <div class="panel-body">
    	
    	<form data-toggle="validator" role="form" class="form-horizontal" action="" method="post">
								<div class="form-group has-feedback">
									<label class="col-xs-3 control-label">Username</label>
									<div class="col-xs-5">
										<input type="text" pattern="^[_A-z0-9]{1,}$" maxlength="15" class="form-control" placeholder="Your username" id="name" name="username" required data-validation-required-message="Please enter your username.">
										<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
										<!-- <span class="help-block">Minimum of 6 characters</span> -->
																			<span class="help-block with-errors"></span>


									</div>
								</div>

								<div class="form-group has-feedback">
									<label class="col-xs-3 control-label">Password</label>
									<div class="col-xs-5">
										<input type="password"  class="form-control" id="password" name="password" placeholder="Password" required data-validation-required-message="Please enter your password.">
										<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
										<!-- <span class="help-block">Minimum of 6 characters</span> -->
										<span class="help-block with-errors"></span>

									</div>
								</div>

								<div class="form-group">
									<div class="col-xs-5 col-xs-offset-3">
										<div id="success"></div>
										<button class="btn btn-primary" name="submit" type="submit" >
											Login
										</button>
										<span><?php echo $error; ?></span>
										
									</div>
								</div>
							</form>
    	
    	</div>
  </div>
</div>
<script src="js/main.js" type="text/javascript"></script>
<script src="js/bootstrapvalidator.js" type="text/javascript"></script>

</body>

</html>
