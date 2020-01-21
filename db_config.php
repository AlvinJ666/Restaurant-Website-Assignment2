<?php 
			$host = "localhost";
		    $username = "alvinpol_eatery";
		    $password = "192602508.";
		    $database = "alvinpol_eatery";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";

?>