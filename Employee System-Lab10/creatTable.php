<?php


			$host = "localhost";
		    $username = "alvinpol_cst8238";
		    $password = "192602508.";
		    $database = "alvinpol_cst8238";

    $mysqli = new mysqli($host, $username, $password, $database);

    if ($mysqli->connect_error) {
        die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
    }
    else
    {
    	$sql = "CREATE TABLE Employee (
        EmployeeId INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
        FirstName VARCHAR(50) NULL,
        LastName VARCHAR(50) NULL,
        EmailAddress VARCHAR(255) NULL,
        TelephoneNumber VARCHAR(20) NULL,
        SocialInsuranceNumber VARCHAR(11) NULL,
        Password VARCHAR(50) NULL
        )";

        if ($mysqli->query($sql) === TRUE) 
        {
  			echo "yeah: ";
		}
		 else 
		{
    		echo "Error creating table: " . $mysqli->error;
		}
	}

	$mysqli->close();

?>