<?php
include('..php/session.php');
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
<div class="container ">
 <div class="well">
    <h1>Advising WebApp</h1>
    <p> Web App that helps with advising of CS majors!</p> 
  </div>
  <div id="profile">
<b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
<b id="logout"><a href="logout.php">Log Out</a></b>
</div>
  </div>

  </header>
  

<body>
	<div class="container col-md-8 col-md-offset-2 ">
  
  <div class="panel panel-info">
    <div class="panel-heading text-center">
    	<h2>Hello Professor, Here's a list of the students you advising.</h2>
    </div>
    <div class="panel-body">
    	<table class="table table-striped">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Advising</th>
      </tr>
    </thead>
    <tbody id="studentList" class="studentList">
    </div>
    </tbody>
  </table>
    	
    	
    	</div>
  </div>
</div>
<script src="/Applications/MAMP/htdocs/web2016-master/projectclass/js/main.js" type="text/javascript"></script>
</body>

