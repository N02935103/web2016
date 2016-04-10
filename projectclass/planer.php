<?php $firstname = $_POST['firstname'];
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

$classes = array("$cs1", "$cs2", "$asmbl", "$ops", "$cs3", "$lngproc", "$oop", "$seng", "$disc", "$algr", "$elect", "$proj", "$calc1", "$calc2", "$sci1", "$sci2", "$egc", "$egclab");
$passingGrades = array("A", "A-", "B+", "B", "B-", "C+", "C", "C-");
$stack = array();
foreach ($classes as $value) {
	if (in_array($value, $passingGrades)) {
		//$value="pass";
		$value = '<div class="pass timeline-image">';
	} else {
		//$value="fail";
		$value = '<div class="fail timeline-image">';
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
   <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.0/angular.min.js"></script>
 
  <link rel="stylesheet" href="main.css">
  <link rel="stylesheet" href="timeline.css">

</head>

<header>
<div  class="container ">
 <div  class="well">
 	 	 	<b id="goback"> <a href="list.php" class="btn btn-lg btn-info myButton2"><span class="glyphicon glyphicon-new-window"></span> Student List</a></b>
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
          <br>
                    <br>

          <div>
          	
          	
       
          	
                 	
		<button type="button" data-toggle="modal" data-target="#myModal1" class="btn btn-warning btn-md" name="grade" value="<?php echo "$cs1"; ?>" 
			data-value="CPS210-CompSci-I (4)">
         <span class="glyphicon glyphicon-education	"></span> Grade
        </button>
        <script>
			$('button[name="grade"]').click(function() {
				var grade = $(this).val();
var cs = $(this).attr("data-value");

				if (grade == "") {
					$('#grade').html("<h4> Fail or no grade recived for "+cs+" " + grade + "</h4>");

				} else {
					$('#grade').html("<h4> Grade recived for " +cs+"<br> " + grade + "</h4>");

				}

			});

        </script>
       
		<button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-info btn-md" name="className" value="CPS210-CompSci-I (4)">
          <span class="glyphicon glyphicon-comment"></span> Comment
        </button>	
        
        <script>
			$('button[name="className"]').click(function() {
				var className = $(this).val();

				$('#class-name').html("<h4> Note for class " + className + "</h4>");
			});
        </script>
        

        
        
         </div>
          
								</div>
							</li>
							<li>
									<?php print($stack[1]); ?>
									<h4>CPS310-CompSci-II (4)</h4>
									 <br>
                    <br>

         <div>
          	
          	
       
          	
                 	
		<button type="button" data-toggle="modal" data-target="#myModal1" class="btn btn-warning btn-md" name="grade" value="<?php echo "$cs2"; ?>" 
			data-value="CPS210-CompSci-I (4)">
         <span class="glyphicon glyphicon-education	"></span> Grade
        </button>
        <script>
			$('button[name="grade"]').click(function() {
				var grade = $(this).val();
var cs = $(this).attr("data-value");

				if (grade == "") {
					$('#grade').html("<h4> Fail or no grade recived for "+cs+" " + grade + "</h4>");

				} else {
					$('#grade').html("<h4> Grade recived for " +cs+"<br> " + grade + "</h4>");

				}

			});

        </script>
       
		<button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-info btn-md" name="className" value="CPS310-CompSci-II (4)">
          <span class="glyphicon glyphicon-comment"></span> Comment
        </button>	
        
        <script>
			$('button[name="className"]').click(function() {
				var className = $(this).val();

				$('#class-name').html("<h4> Note for class " + className + "</h4>");
			});
        </script>
        

        
        
         </div>
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
									 <br>
                    <br>

         <div>
          	
          	
       
          	
                 	
		<button type="button" data-toggle="modal" data-target="#myModal1" class="btn btn-warning btn-md" name="grade" value="<?php echo "$asmbl"; ?>" 
			data-value="CPS330-Assembly.Arch. (4)">
         <span class="glyphicon glyphicon-education	"></span> Grade
        </button>
       <script>
			$('button[name="grade"]').click(function() {
				var grade = $(this).val();
var cs = $(this).attr("data-value");

				if (grade == "") {
					$('#grade').html("<h4> Fail or no grade recived for "+cs+" " + grade + "</h4>");

				} else {
					$('#grade').html("<h4> Grade recived for " +cs+"<br> " + grade + "</h4>");

				}

			});

        </script>
       
       
		<button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-info btn-md" name="className" value="CPS330-Assembly.Arch. (4)">
          <span class="glyphicon glyphicon-comment"></span> Comment
        </button>	
        
        <script>
			$('button[name="className"]').click(function() {
				var className = $(this).val();

				$('#class-name').html("<h4> Note for class " + className + "</h4>");
			});
        </script>
        

        
        
         </div>
								</div>
							</li>
							<li>
									<?php print($stack[3]); ?>
									<h4>CPS340-Op.Sys (4)</h4>
									<br>
                    <br>

         <div>
          	
          	
       
          	
                 	
		<button type="button" data-toggle="modal" data-target="#myModal1" class="btn btn-warning btn-md" name="grade" value="<?php echo "$ops"; ?>" 
			data-value="CPS340-Op.Sys(4)">
         <span class="glyphicon glyphicon-education	"></span> Grade
        </button>
       <script>
			$('button[name="grade"]').click(function() {
				var grade = $(this).val();
var cs = $(this).attr("data-value");

				if (grade == "") {
					$('#grade').html("<h4> Fail or no grade recived for "+cs+" " + grade + "</h4>");

				} else {
					$('#grade').html("<h4> Grade recived for " +cs+"<br> " + grade + "</h4>");

				}

			});

        </script>
       
       
		<button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-info btn-md" name="className" value="CPS340-Op.Sys (4)">
          <span class="glyphicon glyphicon-comment"></span> Comment
        </button>	
        
        <script>
			$('button[name="className"]').click(function() {
				var className = $(this).val();

				$('#class-name').html("<h4> Note for class " + className + "</h4>");
			});
        </script>
        

        
        
         </div>
									
								</div>
							</li>
						</ul>
						
					</div>
					<div class="col-xs-8 col-md-3">
						<ul class="timeline">
											
								<li>
									<?php print($stack[4]); ?>
									<h4>CPS315-CompSci-III (4)</h4>
									<br>
                    <br>

         <div>
          	
          	
       
          	
                 	
		<button type="button" data-toggle="modal" data-target="#myModal1" class="btn btn-warning btn-md" name="grade" value="<?php echo "$cs3"; ?>" 
			data-value="CPS315-CompSci-III (4)">
         <span class="glyphicon glyphicon-education	"></span> Grade
        </button>
        <script>
			$('button[name="grade"]').click(function() {
				var grade = $(this).val();
var cs = $(this).attr("data-value");

				if (grade == "") {
					$('#grade').html("<h4> Fail or no grade recived for "+cs+" " + grade + "</h4>");

				} else {
					$('#grade').html("<h4> Grade recived for " +cs+"<br> " + grade + "</h4>");

				}

			});

        </script>
       
       
		<button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-info btn-md" name="className" value="CPS315-CompSci-III (4)">
          <span class="glyphicon glyphicon-comment"></span> Comment
        </button>	
        
        <script>
			$('button[name="className"]').click(function() {
				var className = $(this).val();

				$('#class-name').html("<h4> Note for class " + className + "</h4>");
			});
        </script>
        

        
        
         </div>
								</div>
							</li>
							<li>
									<?php print($stack[5]); ?>
									<h4>CPS425-Lang.Processing (4)</h4>
									<br>
                    <br>

         <div>
          	
          	
       
          	
                 	
		<button type="button" data-toggle="modal" data-target="#myModal1" class="btn btn-warning btn-md" name="grade" value="<?php echo "$lngproc"; ?>" 
			data-value="CPS425-Lang.Processing (4)">
         <span class="glyphicon glyphicon-education	"></span> Grade
        </button>
       <script>
			$('button[name="grade"]').click(function() {
				var grade = $(this).val();
var cs = $(this).attr("data-value");

				if (grade == "") {
					$('#grade').html("<h4> Fail or no grade recived for "+cs+" " + grade + "</h4>");

				} else {
					$('#grade').html("<h4> Grade recived for " +cs+"<br> " + grade + "</h4>");

				}

			});

        </script>
       
       
		<button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-info btn-md" name="className" value="CPS425-Lang.Processing (4)">
          <span class="glyphicon glyphicon-comment"></span> Comment
        </button>	
        
        <script>
			$('button[name="className"]').click(function() {
				var className = $(this).val();

				$('#class-name').html("<h4> Note for class " + className + "</h4>");
			});
        </script>
        

        
        
         </div>
								</div>
							</li>
						</ul>
						
					</div>
					<div class="col-xs-8 col-md-3">
						<ul class="timeline">
											
								<li>
									<?php print($stack[6]); ?>
									<h4>CPS352-OOP (3) </h4>
									<br>
                    <br>

         <div>
          	
          	
       
          	
                 	
		<button type="button" data-toggle="modal" data-target="#myModal1" class="btn btn-warning btn-md" name="grade" value="<?php echo "$oop"; ?>" 
			data-value="CPS352-OOP (3)">
         <span class="glyphicon glyphicon-education	"></span> Grade
        </button>
       <script>
			$('button[name="grade"]').click(function() {
				var grade = $(this).val();
var cs = $(this).attr("data-value");

				if (grade == "") {
					$('#grade').html("<h4> Fail or no grade recived for "+cs+" " + grade + "</h4>");

				} else {
					$('#grade').html("<h4> Grade recived for " +cs+"<br> " + grade + "</h4>");

				}

			});

        </script>
       
       
		<button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-info btn-md" name="className" value="CPS352-OOP (3)">
          <span class="glyphicon glyphicon-comment"></span> Comment
        </button>	
        
        <script>
			$('button[name="className"]').click(function() {
				var className = $(this).val();

				$('#class-name').html("<h4> Note for class " + className + "</h4>");
			});
        </script>
        

        
        
         </div>
								</div>
							</li>
							<li>
									<?php print($stack[7]); ?>
									<h4>CPS353-SoftEng (3)</h4>
									<br>
                    <br>

         <div>
          	
          	
       
          	
                 	
		<button type="button" data-toggle="modal" data-target="#myModal1" class="btn btn-warning btn-md" name="grade" value="<?php echo "$seng"; ?>" 
			data-value="CPS353-SoftEng (3)">
         <span class="glyphicon glyphicon-education	"></span> Grade
        </button>
        <script>
			$('button[name="grade"]').click(function() {
				var grade = $(this).val();
var cs = $(this).attr("data-value");

				if (grade == "") {
					$('#grade').html("<h4> Fail or no grade recived for "+cs+" " + grade + "</h4>");

				} else {
					$('#grade').html("<h4> Grade recived for " +cs+"<br> " + grade + "</h4>");

				}

			});

        </script>
       
       
		<button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-info btn-md" name="className" value="CPS353-SoftEng (3)">
          <span class="glyphicon glyphicon-comment"></span> Comment
        </button>	
        
        <script>
			$('button[name="className"]').click(function() {
				var className = $(this).val();

				$('#class-name').html("<h4> Note for class " + className + "</h4>");
			});
        </script>
        

        
        
         </div>
								</div>
							</li>
						</ul>
						
					</div>
					<div class="col-xs-8 col-md-3">
						<ul class="timeline">
											
								<li>
									<?php print($stack[8]); ?>
									<h4>MAT320-DiscreteMath (3)</h4>
									<br>
                    <br>

         <div>
          	
          	
       
          	
                 	
		<button type="button" data-toggle="modal" data-target="#myModal1" class="btn btn-warning btn-md" name="grade" value="<?php echo "$disc"; ?>" 
			data-value="MAT320-DiscreteMath (3)">
         <span class="glyphicon glyphicon-education	"></span> Grade
        </button>
       <script>
			$('button[name="grade"]').click(function() {
				var grade = $(this).val();
var cs = $(this).attr("data-value");

				if (grade == "") {
					$('#grade').html("<h4> Fail or no grade recived for "+cs+" " + grade + "</h4>");

				} else {
					$('#grade').html("<h4> Grade recived for " +cs+"<br> " + grade + "</h4>");

				}

			});

        </script>
       
       
		<button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-info btn-md" name="className" value="MAT320-DiscreteMath (3)">
          <span class="glyphicon glyphicon-comment"></span> Comment
        </button>	
        
        <script>
			$('button[name="className"]').click(function() {
				var className = $(this).val();

				$('#class-name').html("<h4> Note for class " + className + "</h4>");
			});
        </script>
        

        
        
         </div>
								</div>
							</li>
							<li>
									<?php print($stack[9]); ?>
									<h4>CPS415-Disc.Cont.Algorithms (3)</h4>
									<br>
                    <br>

         <div>
          	
          	
       
          	
                 	
		<button type="button" data-toggle="modal" data-target="#myModal1" class="btn btn-warning btn-md" name="grade" value="<?php echo "$algr"; ?>" 
			data-value="CPS415-Disc.Cont.Algorithms (3)">
         <span class="glyphicon glyphicon-education	"></span> Grade
        </button>
        <script>
			$('button[name="grade"]').click(function() {
				var grade = $(this).val();
var cs = $(this).attr("data-value");

				if (grade == "") {
					$('#grade').html("<h4> Fail or no grade recived for "+cs+" " + grade + "</h4>");

				} else {
					$('#grade').html("<h4> Grade recived for " +cs+"<br> " + grade + "</h4>");

				}

			});

        </script>
       
       
		<button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-info btn-md" name="className" value="CPS415-Disc.Cont.Algorithms (3)">
          <span class="glyphicon glyphicon-comment"></span> Comment
        </button>	
        
        <script>
			$('button[name="className"]').click(function() {
				var className = $(this).val();

				$('#class-name').html("<h4> Note for class " + className + "</h4>");
			});
        </script>
        

        
        
         </div>
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
									<br>
                    <br>

         <div>
          	
          	
       
          	
                 	
		<button type="button" data-toggle="modal" data-target="#myModal1" class="btn btn-warning btn-md" name="grade" value="<?php echo "$elect"; ?>" 
			data-value="Database (3)">
         <span class="glyphicon glyphicon-education	"></span> Grade
        </button>
        <script>
			$('button[name="grade"]').click(function() {
				var grade = $(this).val();
var cs = $(this).attr("data-value");

				if (grade == "") {
					$('#grade').html("<h4> Fail or no grade recived for "+cs+" " + grade + "</h4>");

				} else {
					$('#grade').html("<h4> Grade recived for " +cs+"<br> " + grade + "</h4>");

				}

			});

        </script>
       
       
		<button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-info btn-md" name="className" value="Database (3)">
          <span class="glyphicon glyphicon-comment"></span> Comment
        </button>	
        
        <script>
			$('button[name="className"]').click(function() {
				var className = $(this).val();

				$('#class-name').html("<h4> Note for class " + className + "</h4>");
			});
        </script>
        

        
        
         </div>
								</div>
								</li>
						
						
					</div>
					<div class="col-xs-8 col-md-3">
						<ul class="timeline">
											
								<li>
									<?php print($stack[10]); ?>
									<h4>Web Programming (3) </h4>
									<br>
                    <br>

         <div>
          	
          	
       
          	
                 	
		<button type="button" data-toggle="modal" data-target="#myModal1" class="btn btn-warning btn-md" name="grade" value="<?php echo "$elect"; ?>" 
			data-value="Web Programming (3)">
         <span class="glyphicon glyphicon-education	"></span> Grade
        </button>
        <script>
			$('button[name="grade"]').click(function() {
				var grade = $(this).val();
var cs = $(this).attr("data-value");

				if (grade == "") {
					$('#grade').html("<h4> Fail or no grade recived for "+cs+" " + grade + "</h4>");

				} else {
					$('#grade').html("<h4> Grade recived for " +cs+"<br> " + grade + "</h4>");

				}

			});

        </script>
       
       
		<button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-info btn-md" name="className" value="Web Programming (3)">
          <span class="glyphicon glyphicon-comment"></span> Comment
        </button>	
        
        <script>
			$('button[name="className"]').click(function() {
				var className = $(this).val();

				$('#class-name').html("<h4> Note for class " + className + "</h4>");
			});
        </script>
        

        
        
         </div>
								</div>
								</li>
						
						
					</div>
					<div class="col-xs-8 col-md-3">
						<ul class="timeline">
											
								<li>
									<?php print($stack[10]); ?>
									<h4>Networks (3) </h4>
									<br>
                    <br>

         <div>
          	
          	
       
          	
                 	
		<button type="button" data-toggle="modal" data-target="#myModal1" class="btn btn-warning btn-md" name="grade" value="<?php echo "$elect"; ?>" 
			data-value="Networks (3) ">
         <span class="glyphicon glyphicon-education	"></span> Grade
        </button>
       <script>
			$('button[name="grade"]').click(function() {
				var grade = $(this).val();
var cs = $(this).attr("data-value");

				if (grade == "") {
					$('#grade').html("<h4> Fail or no grade recived for "+cs+" " + grade + "</h4>");

				} else {
					$('#grade').html("<h4> Grade recived for " +cs+"<br> " + grade + "</h4>");

				}

			});

        </script>
       
       
		<button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-info btn-md" name="className" value="Networks (3) ">
          <span class="glyphicon glyphicon-comment"></span> Comment
        </button>	
        
        <script>
			$('button[name="className"]').click(function() {
				var className = $(this).val();

				$('#class-name').html("<h4> Note for class " + className + "</h4>");
			});
        </script>
        

        
        
         </div>
								</div>
								</li>
						
						
					</div>
					<div class="col-xs-8 col-md-3">
						<ul class="timeline">
											
								<li>
									<?php print($stack[10]); ?>
									<h4>AI/Robotics (3) </h4>
									<br>
                    <br>

         <div>
          	
          	
       
          	
                 	
		<button type="button" data-toggle="modal" data-target="#myModal1" class="btn btn-warning btn-md" name="grade" value="<?php echo "$elect"; ?>" 
			data-value="AI/Robotics (3) ">
         <span class="glyphicon glyphicon-education	"></span> Grade
        </button>
       <script>
			$('button[name="grade"]').click(function() {
				var grade = $(this).val();
var cs = $(this).attr("data-value");

				if (grade == "") {
					$('#grade').html("<h4> Fail or no grade recived for "+cs+" " + grade + "</h4>");

				} else {
					$('#grade').html("<h4> Grade recived for " +cs+"<br> " + grade + "</h4>");

				}

			});

        </script>
       
       
		<button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-info btn-md" name="className" value="AI/Robotics (3) ">
          <span class="glyphicon glyphicon-comment"></span> Comment
        </button>	
        
        <script>
			$('button[name="className"]').click(function() {
				var className = $(this).val();

				$('#class-name').html("<h4> Note for class " + className + "</h4>");
			});
        </script>
        

        
        
         </div>
								</div>
								</li>
						
						
					</div>
					
					<div class="col-xs-8 col-md-3">
						<ul class="timeline">
											
								<li>
									<?php print($stack[10]); ?>
									<h4>Embedded Linux (3) </h4>
									<br>
                    <br>

         <div>
          	
          	
       
          	
                 	
		<button type="button" data-toggle="modal" data-target="#myModal1" class="btn btn-warning btn-md" name="grade" value="<?php echo "$elect"; ?>" 
			data-value="Embedded Linux (3) ">
         <span class="glyphicon glyphicon-education	"></span> Grade
        </button>
       <script>
			$('button[name="grade"]').click(function() {
				var grade = $(this).val();
var cs = $(this).attr("data-value");

				if (grade == "") {
					$('#grade').html("<h4> Fail or no grade recived for "+cs+" " + grade + "</h4>");

				} else {
					$('#grade').html("<h4> Grade recived for " +cs+"<br> " + grade + "</h4>");

				}

			});

        </script>
       
       
		<button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-info btn-md" name="className" value="Embedded Linux (3) ">
          <span class="glyphicon glyphicon-comment"></span> Comment
        </button>	
        
        <script>
			$('button[name="className"]').click(function() {
				var className = $(this).val();

				$('#class-name').html("<h4> Note for class " + className + "</h4>");
			});
        </script>
        

        
        
         </div>
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
									<br>
                    <br>

         <div>
          	
          	
       
          	
                 	
		<button type="button" data-toggle="modal" data-target="#myModal1" class="btn btn-warning btn-md" name="grade" value="<?php echo "$proj"; ?>" 
			data-value="Project (4)">
         <span class="glyphicon glyphicon-education	"></span> Grade
        </button>
        <script>
			$('button[name="grade"]').click(function() {
				var grade = $(this).val();
var cs = $(this).attr("data-value");

				if (grade == "") {
					$('#grade').html("<h4> Fail or no grade recived for "+cs+" " + grade + "</h4>");

				} else {
					$('#grade').html("<h4> Grade recived for " +cs+"<br> " + grade + "</h4>");

				}

			});

        </script>
       
       
		<button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-info btn-md" name="className" value="Project (4)">
          <span class="glyphicon glyphicon-comment"></span> Comment
        </button>	
        
        <script>
			$('button[name="className"]').click(function() {
				var className = $(this).val();

				$('#class-name').html("<h4> Note for class " + className + "</h4>");
			});
        </script>
        

        
        
         </div>
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
									<br>
                    <br>

         <div>
          	
          	
       
          	
                 	
		<button type="button" data-toggle="modal" data-target="#myModal1" class="btn btn-warning btn-md" name="grade" value="<?php echo "$calc1"; ?>" 
			data-value="MAT251-Calc-I (4) ">
         <span class="glyphicon glyphicon-education	"></span> Grade
        </button>
      <script>
			$('button[name="grade"]').click(function() {
				var grade = $(this).val();
var cs = $(this).attr("data-value");

				if (grade == "") {
					$('#grade').html("<h4> Fail or no grade recived for "+cs+" " + grade + "</h4>");

				} else {
					$('#grade').html("<h4> Grade recived for " +cs+"<br> " + grade + "</h4>");

				}

			});

        </script>
       
       
		<button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-info btn-md" name="className" value="MAT251-Calc-I (4) ">
          <span class="glyphicon glyphicon-comment"></span> Comment
        </button>	
        
        <script>
			$('button[name="className"]').click(function() {
				var className = $(this).val();

				$('#class-name').html("<h4> Note for class " + className + "</h4>");
			});
        </script>
        

        
        
         </div>
								</div>
							</li>
							<li>
									<?php print($stack[13]); ?>
									<h4>MAT251-Calc-II (4)</h4>
									<br>
                    <br>

         <div>
          	
          	
       
          	
                 	
		<button type="button" data-toggle="modal" data-target="#myModal1" class="btn btn-warning btn-md" name="grade" value="<?php echo "$calc2"; ?>" 
			data-value="MAT251-Calc-II (4)">
         <span class="glyphicon glyphicon-education	"></span> Grade
        </button>
       <script>
			$('button[name="grade"]').click(function() {
				var grade = $(this).val();
var cs = $(this).attr("data-value");

				if (grade == "") {
					$('#grade').html("<h4> Fail or no grade recived for "+cs+" " + grade + "</h4>");

				} else {
					$('#grade').html("<h4> Grade recived for " +cs+"<br> " + grade + "</h4>");

				}

			});

        </script>
       
       
		<button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-info btn-md" name="className" value="MAT251-Calc-II (4)">
          <span class="glyphicon glyphicon-comment"></span> Comment
        </button>	
        
        <script>
			$('button[name="className"]').click(function() {
				var className = $(this).val();

				$('#class-name').html("<h4> Note for class " + className + "</h4>");
			});
        </script>
        

        
        
         </div>
								</div>
							</li>
						</ul>
						
					</div>
					<div class="col-xs-8 col-md-4">
						<ul class="timeline">
											
								<li>
									<?php print($stack[14]); ?>
									<h4>SCIENCE-I (4) </h4>
									<br>
                    <br>

         <div>
          	
          	
       
          	
                 	
		<button type="button" data-toggle="modal" data-target="#myModal1" class="btn btn-warning btn-md" name="grade" value="<?php echo "$sci1"; ?>" 
			data-value="SCIENCE-I (4) ">
         <span class="glyphicon glyphicon-education	"></span> Grade
        </button>
        <script>
			$('button[name="grade"]').click(function() {
				var grade = $(this).val();
var cs = $(this).attr("data-value");

				if (grade == "") {
					$('#grade').html("<h4> Fail or no grade recived for "+cs+" " + grade + "</h4>");

				} else {
					$('#grade').html("<h4> Grade recived for " +cs+"<br> " + grade + "</h4>");

				}

			});

        </script>
       
       
		<button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-info btn-md" name="className" value="SCIENCE-I (4)">
          <span class="glyphicon glyphicon-comment"></span> Comment
        </button>	
        
        <script>
			$('button[name="className"]').click(function() {
				var className = $(this).val();

				$('#class-name').html("<h4> Note for class " + className + "</h4>");
			});
        </script>
        

        
        
         </div>
								</div>
							</li>
							<li>
									<?php print($stack[15]); ?>
									<h4>SCIENCE-II (4)</h4>
									<br>
                    <br>

         <div>
          	
          	
       
          	
                 	
		<button type="button" data-toggle="modal" data-target="#myModal1" class="btn btn-warning btn-md" name="grade" value="<?php echo "$sci2"; ?>" 
			data-value="SCIENCE-II (4)">
         <span class="glyphicon glyphicon-education	"></span> Grade
        </button>
       <script>
			$('button[name="grade"]').click(function() {
				var grade = $(this).val();
var cs = $(this).attr("data-value");

				if (grade == "") {
					$('#grade').html("<h4> Fail or no grade recived for "+cs+" " + grade + "</h4>");

				} else {
					$('#grade').html("<h4> Grade recived for " +cs+"<br> " + grade + "</h4>");

				}

			});

        </script>
       
       
		<button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-info btn-md" name="className" value="SCIENCE-II (4)">
          <span class="glyphicon glyphicon-comment"></span> Comment
        </button>	
        
        <script>
			$('button[name="className"]').click(function() {
				var className = $(this).val();

				$('#class-name').html("<h4> Note for class " + className + "</h4>");
			});
        </script>
        

        
        
         </div>
								</div>
							</li>
						</ul>
						
					</div>
					<div class="col-xs-8 col-md-4">
						<ul class="timeline">
											
								<li>
									<?php print($stack[16]); ?>
									<h4>EGC230-Dig.Logic (3)</h4>
									<br>
                    <br>

         <div>
          	
          	
       
          	
                 	
		<button type="button" data-toggle="modal" data-target="#myModal1" class="btn btn-warning btn-md" name="grade" value="<?php echo "$egc"; ?>" 
			data-value="EGC230-Dig.Logic (3)">
         <span class="glyphicon glyphicon-education	"></span> Grade
        </button>
        <script>
			$('button[name="grade"]').click(function() {
				var grade = $(this).val();
var cs = $(this).attr("data-value");

				if (grade == "") {
					$('#grade').html("<h4> Fail or no grade recived for "+cs+" " + grade + "</h4>");

				} else {
					$('#grade').html("<h4> Grade recived for " +cs+"<br> " + grade + "</h4>");

				}

			});

        </script>
       
       
		<button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-info btn-md" name="className" value="EGC230-Dig.Logic (3)">
          <span class="glyphicon glyphicon-comment"></span> Comment
        </button>	
        
        <script>
			$('button[name="className"]').click(function() {
				var className = $(this).val();

				$('#class-name').html("<h4> Note for class " + className + "</h4>");
			});
        </script>
        

        
        
         </div>
								</div>
							</li>
							<li>
									<?php print($stack[17]); ?>
									<h4>EGC208-Dig.Logic.Lab (1)</h4>
									<br>
                    <br>

         <div>
          	
          	
       
          	
                 	
		<button type="button" data-toggle="modal" data-target="#myModal1" class="btn btn-warning btn-md" name="grade" value="<?php echo "$egclab"; ?>" 
			data-value="EGC208-Dig.Logic.Lab (1)">
         <span class="glyphicon glyphicon-education	"></span> Grade
        </button>
        <script>
			$('button[name="grade"]').click(function() {
				var grade = $(this).val();
var cs = $(this).attr("data-value");

				if (grade == "") {
					$('#grade').html("<h4> Fail or no grade recived for "+cs+" " + grade + "</h4>");

				} else {
					$('#grade').html("<h4> Grade recived for " +cs+"<br> " + grade + "</h4>");

				}

			});

        </script>
       
       
		<button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-info btn-md" name="className" value="CPS330-Assembly.Arch. (4)">
          <span class="glyphicon glyphicon-comment"></span> Comment
        </button>	
        
        <script>
			$('button[name="className"]').click(function() {
				var className = $(this).val();

				$('#class-name').html("<h4> Note for class " + className + "</h4>");
			});
        </script>
        

        
        
         </div>
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
		

	
	 <div ng-app ng-init="note='Here you can write a note for a student to help you advise'" class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><?php echo "Note for $firstname $lastname" ?></h4>
          				  <p id="class-name"></p>                               
           </div>
           
            <div class="modal-body">
             <div class="form-group">
		     <textarea class="form-control" ng-model="note"
              placeholder="{{note}}" id="message" 
              required data-validation-required-message="Please enter a note"></textarea>
			   <p class="help-block text-danger"></p>
			    <label class="light">
			  </div>
				  <hr>
	             								
   			   <h5>Note Regarding: {{note}} </h5>
     
      	  </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
    
  </div>
  
  <div class="modal fade" id="myModal1" role="dialog" >
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">          <h4 class="modal-title"><?php echo "Grade for $firstname $lastname" ?></h4>
</h4>
        </div>
        <div class="modal-body">
          				  <p id="grade"></p>
        </div>
                
        
        <div class="modal-footer" ng-controller="PopoverDemoCtrl">
        	 <button uib-popover-template="dynamicPopover.templateUrl" popover-title="{{dynamicPopover.title}}" type="button" class="btn btn-default">Popover With Template</button>

    <script type="text/ng-template" id="myPopoverTemplate.html">
        <div>{{dynamicPopover.content}}</div>
        <div class="form-group">
          <label>Popup Title:</label>
          <input type="text" ng-model="dynamicPopover.title" class="form-control">
        </div>
    </script>
        	
        	
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  
  <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-animate.js"></script>


	
	<script src="../projectclass/js/ng-app.js" type="text/javascript"></script>

</body>
</html>


 