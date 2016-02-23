<?php

session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {

}

if (isset($_POST['submit'])) {



// Define $username and $password
 $name=$_POST['username'];
 $pass=$_POST['password'];

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "company";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, username, password FROM login";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "id: " . $row["id"]. " - Name: " . $row["username"]. " " . $row["password"]. "<br>";
        if($name==$row["username"] && $pass== $row["password"]){
			header("location: ../php/profile.php"); // Redirecting To Other Page
        }else{
        	$error="Username or Password is invalid";
        }
       	
    }
				
}



	
	 else {
    echo "Server is down";
}
$conn->close();
}

?>


