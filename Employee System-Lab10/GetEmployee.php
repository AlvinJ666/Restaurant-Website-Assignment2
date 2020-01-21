<?php
	$q = $_GET["q"];

	if (empty($q)) 
	{
		echo "Please choose one employee";
		exit;
	}
	else
	{
		if ($q == "Mike Casselman") 
		{
			$fName = "Mike";
			$lName = "Casselman";
		}
		else if ($q == "Pavel Saab") 
		{
			$fName = "Pavel";
			$lName = "Saab";
		}
		else if ($q == "Vince Tam") 
		{
			$fName = "Vince";
			$lName = "Tam";
		}
		else if($q == "Souhail Abdala")
		{
			$fName = "Souhail";
			$lName = "Abdala";
		}

		else if ($q == "Nick Delorme") 
		{
			$fName = "Nick";
			$lName = "Delorme";
		}
	}


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
		$sql = "SELECT * FROM Employee WHERE FirstName = '$fName' and LastName = '$lName'";
		$result = mysqli_query($mysqli, $sql);


		if ($result->num_rows > 0) {
			echo "<table border = '1'>";
			echo "<tr>";
			echo "<th>First Name</th>";
			echo "<th>Last Name</th>";
			echo "<th>Email Address</th>";   
			echo "<th>Phone Number</th>"; 
			echo "<th>SIN</th>";  
			echo "<th>Password</th>";
			echo "</br>";
			echo "</tr>";
			while ($row = mysqli_fetch_array($result)) 
 			{
 				echo "<tr>";
 				echo "<td>" .$row['FirstName']. "</td>";
 				echo "<td>" .$row['LastName']. "</td>";
 				echo "<td>" .$row['EmailAddress']. "</td>";
 				echo "<td>" .$row['TelephoneNumber']. "</td>";
 				echo "<td>" .$row['SocialInsuranceNumber']. "</td>";
 				echo "<td>" .$row['Password']. "</td>";
 				echo "</br>";
 				echo "</tr>";
 			}
			echo "</table>";
			echo "</br>";
			echo "</br>";
			echo "</br>";
			
		}

 		$mysqli->close();		
	}

?>