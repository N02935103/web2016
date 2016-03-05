<?php

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$calc1 = $_POST['calc1'];
$calc2 = $_POST['calc2'];
$disc = $_POST['disc'];
$cs1 = $_POST['cs1'];
$cs2 = $_POST['cs2'];
$cs3 = $_POST['cs3'];
$asmbl = $_POST['asmbl'];

$oop = $_POST['oop'];
$seng = $_POST['seng'];
$algr = $_POST['algr'];
$ops = $_POST['ops'];
$lngproc = $_POST['lngproc'];

$elect = $_POST['elect'];
$proj = $_POST['proj'];
$egc = $_POST['egc'];
$egclab = $_POST['egclab'];
$sci1 = $_POST['sci1'];
$sci2 = $_POST['sci2'];




$classes = array("$cs1", "$cs2","$asmbl", "$ops","$cs3", "$lngproc","$oop", "$seng","$disc", "$algr","$elect","$proj","$calc1", "$calc2","$sci1","$sci2","$egc","$egclab"); 
$passingGrades = array("A", "A-", "B+", "B", "B-", "C+", "C", "C-");
$stack = array();
foreach ($classes as $value) {
if (in_array($value, $passingGrades)) {
	//$value="pass";
    $value='<div class="pass timeline-image">';
}else{
		//$value="fail";
	     $value='<div class="fail timeline-image">';
}

array_push($stack, "$value");

}
//print_r($stack);

//print($stack[0]);




  
 

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
  <link rel="stylesheet" href="timeline.css">

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
	
	<div class="row no-gutter">
					<div class="col-lg-12 text-center">
						<h2 class="section-heading">SUNY New Paltz Computer Science Courses</h2>
						<h3 class="section-heading"><?php echo "Advising for $firstname  $lastname"; ?></h3>

					</div>
										</div>
	
	<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
					</div>
				</div>
				<div class="row" id="about-affects">
					<div class="col-lg-12">
						<ul class="timeline">
											
								<li>
									<?php print($stack[0]); ?>

									<h4>CPS210-CompSci-I (4) </h4>
								</div>
							</li>
							<li>
									<?php print($stack[1]); ?>
									<h4>CPS310-CompSci-II (4)</h4>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
			
			
			
			
			<section id="mustTakeAll">

			<div class="container-fluid">
				<div class="row no-gutter">
					<div class="col-lg-12 text-center">
						<h2 class="section-heading">Knowladge Courses </h2>
						<hr class="primary">
					</div>
										</div>


					
				<div class="row border">


					<div class="col-xs-8 col-md-3">
						<ul class="timeline">
											
								<li>
									<?php print($stack[2]); ?>
									<h4>CPS330-Assembly.Arch. (4) </h4>
								</div>
							</li>
							<li>
									<?php print($stack[3]); ?>
									<h4>CPS340-Op.Sys (4)</h4>
								</div>
							</li>
						</ul>
						
					</div>
					<div class="col-xs-8 col-md-3">
						<ul class="timeline">
											
								<li>
									<?php print($stack[4]); ?>
									<h4>CPS315-CompSci-III (4)</h4>
								</div>
							</li>
							<li>
									<?php print($stack[5]); ?>
									<h4>CPS425-Lang.Processing (4)</h4>
								</div>
							</li>
						</ul>
						
					</div>
					<div class="col-xs-8 col-md-3">
						<ul class="timeline">
											
								<li>
									<?php print($stack[6]); ?>
									<h4>CPS352-OOP (3) </h4>
								</div>
							</li>
							<li>
									<?php print($stack[7]); ?>
									<h4>CPS353-SoftEng (3)</h4>
								</div>
							</li>
						</ul>
						
					</div>
					<div class="col-xs-8 col-md-3">
						<ul class="timeline">
											
								<li>
									<?php print($stack[8]); ?>
									<h4>MAT320-DiscreteMath (3)</h4>
								</div>
							</li>
							<li>
									<?php print($stack[9]); ?>
									<h4>CPS415-Disc.Cont.Algorithms (3)</h4>
								</div>
							</li>
						</ul>
						
					</div>
				</div>
			</div>
						</div>

		</section>
	
	<section id="mustTakeOne">

			<div class="container-fluid">
				<div class="row no-gutter">
					<div class="col-lg-12 text-center">
						<h2 class="section-heading">Skills Courses </h2>
						<hr class="primary">
					</div>
										</div>
										
										<div class="row border">


					<div class="col-xs-8 col-md-3">
						<ul class="timeline">
											
								<li>
									<?php print($stack[10]); ?>
									<h4>Database (3) </h4>
								</div>
								</li>
						
						
					</div>
					<div class="col-xs-8 col-md-3">
						<ul class="timeline">
											
								<li>
									<?php print($stack[10]); ?>
									<h4>Web Programming (3) </h4>
								</div>
								</li>
						
						
					</div>
					<div class="col-xs-8 col-md-3">
						<ul class="timeline">
											
								<li>
									<?php print($stack[10]); ?>
									<h4>Networks (3) </h4>
								</div>
								</li>
						
						
					</div>
					<div class="col-xs-8 col-md-3">
						<ul class="timeline">
											
								<li>
									<?php print($stack[10]); ?>
									<h4>AI/Robotics (3) </h4>
								</div>
								</li>
						
						
					</div>
					
					<div class="col-xs-8 col-md-3">
						<ul class="timeline">
											
								<li>
									<?php print($stack[10]); ?>
									<h4>Embedded Linux (3) </h4>
								</div>
								</li>
						
						
					</div>
					</div>
					
					<div class="row">


					<div class="col-xs-8 col-md-3">
						<ul class="timeline">
											
								<li>
								
							</li>
							<li>
									<?php print($stack[11]); ?>
									<h4>Project (4)</h4>
								</div>
							</li>
						</ul>
						
					</div>
					
				
				

										
																			</section>
																			
																			<section id="mustTakeAll">

			<div class="container-fluid">
				<div class="row no-gutter">
					<div class="col-lg-12 text-center">
						<h2 class="section-heading">Math, Science and Engineering Courses </h2>
						<hr class="primary">
					</div>
										</div>


					
				<div class="row border">

<div>
					<div class="col-xs-8 col-md-4">
						<ul class="timeline">
											
								<li>
									<?php print($stack[12]); ?>
									<h4>MAT251-Calc-I (4) </h4>
								</div>
							</li>
							<li>
									<?php print($stack[13]); ?>
									<h4>MAT251-Calc-II (4)</h4>
								</div>
							</li>
						</ul>
						
					</div>
					<div class="col-xs-8 col-md-4">
						<ul class="timeline">
											
								<li>
									<?php print($stack[14]); ?>
									<h4>SCIENCE-I (4) </h4>
								</div>
							</li>
							<li>
									<?php print($stack[15]); ?>
									<h4>SCIENCE-II (4)</h4>
								</div>
							</li>
						</ul>
						
					</div>
					<div class="col-xs-8 col-md-4">
						<ul class="timeline">
											
								<li>
									<?php print($stack[16]); ?>
									<h4>CPS425-Lang.Processing (3)</h4>
								</div>
							</li>
							<li>
									<?php print($stack[17]); ?>
									<h4>CPS493-Elect-1 (1)</h4>
								</div>
							</li>
						</ul>
						
					</div>
					
				</div>
				</div>
			</div>
</div>
<br>
		</section>

	
	
	
	
	
<script src="../projectclass/js/main.js" type="text/javascript"></script>
</body>
</html>


 