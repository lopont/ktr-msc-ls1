<?php 

	$servername = "localhost:3306";
	$dbName = "epitech";
	$username = "loris";
	$password = "lorisMDPultrasecure";


	// Create connection
	$conn = new mysqli($servername, $username, $password);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	// echo "Connected to data Base";


?>
