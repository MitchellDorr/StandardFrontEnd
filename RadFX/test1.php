<?php
$servername = "192.168.10.159";
$username = "RADFX";
$password = "Test1234!";
$database = "RADFX";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$results = mysqli_query($conn, 'SELECT * FROM sessions');
foreach ($_POST as $data){
	echo $data . "<div></div>";
}

?>