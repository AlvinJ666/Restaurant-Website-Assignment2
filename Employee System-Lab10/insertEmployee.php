<?php

			$host = "localhost";
		    $username = "alvinpol_cst8238";
		    $password = "192602508.";
		    $database = "alvinpol_cst8238";
    $mysqli = new mysqli($host, $username, $password, $database);

	if ($mysqli->connect_error) 
	{
		die('Connect Error (' . $mysqli->connect_errno . ') '
		            . $mysqli->connect_error);
	}
	else
	{   
        $sqlInsert = "insert into Employee(FirstName,LastName,EmailAddress,TelephoneNumber,SocialInsuranceNumber,Password) VALUES
        	 		('Mike','Casselman','mk@gmail.com','613-345-6789','987654321','321'),
        			('Pavel','Saab','ps@gmail.com','613-646-6700','987000021','331'),
        			('Vince','Tam','vt@gmail.com','613-385-6789','220654321','021'),
        			('Souhail','Abdala','sa@gmail.com','613-000-6789','911154321','131'),
        			('Nick','Delorme','nd@gmail.com','613-345-1144','123854321','333')";

		if ($mysqli->query($sqlInsert) == TRUE) {
		    echo "yeah";
		} 
		else 
		{
		    echo "Error: " . $sqlInsert . "<br>" . $mysqli->error;
		}

    }
?>