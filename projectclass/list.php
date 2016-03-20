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
<div  class="container ">
 <div  class="well">
 	<div id="profile">
 	<b id="welcome"><i><?php echo $login_session; ?></i></b>
 	<b id="logout"> <a href="../projectclass/php/logout.php" class="btn btn-lg btn-warning myButton1"><span class="glyphicon glyphicon-log-out"></span> Log-out</a></b>
	<!-- <b id="logout"><a href="../projectclass/php/logout.php">Log Out</a></b> -->	</div>
    <h1>Advising WebApp</h1>   
    <p> Web App that helps with advising of CS majors!</p> 
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
        <th>Progress</th>
      </tr>
    </thead>
    <tbody id="studentList" class="studentList">
    </div>
    </tbody>
  </table>
    	
    	
    	</div>
    	
    	
  </div>
  
  <div class="container col-md-12  ">
  
  <div class="panel panel-success">
    <div class="panel-heading text-center">
    	<h2>Hello Professor, Here's you can upload CSV file as a list of the students you advising.</h2>
    </div>
    <div class="panel-body">
    	<table width="800">
<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" enctype="multipart/form-data">

<tr>
<td width="20%">Select file</td>
<td width="80%"><input type="file" name="file" id="file" /></td>
</tr>

<tr>
<td>Submit</td>
<td><input type="submit" name="submit" /></td>
</tr>

</form>
</table>
    	
    	
    	</div>
    	
    	
  </div>
  
  

    	
<script src="../projectclass/js/main.js" type="text/javascript"></script>
</body>
</html>

