
 <?php include("footer.php"); ?>


 <?php include("header.php"); ?>
<?php include("class_lib.php"); ?>

            <div id="content" class="clearfix">
                <aside>
                         <h2><?php echo date("l") . "'s"; ?> Specials</h2> <!-- Step6  -->
                        <hr>                        
                        <h3>The WP Burger</h3>
                        <p>Freshly made all-beef patty served up with homefries - $14</p>
                        <hr>
                        <h3>WP Kebobs</h3>
                        <p>Tender cuts of beef and chicken, served with your choice of side - $17</p>
                        <hr>
                        <h2>Private Dining</h2>                        
                        <p>Call us to find out more about our private dinning options.</p>
                </aside>
                <div class="main">
                    <h1>View All Customers</h1></br>
	</br>
	</br>

	<?php 	


	$host = "localhost";
		    $username = "alvinpol_eatery";
		    $eamil = "192602508.";
		    $database = "alvinpol_eatery";
    $mysqli = new mysqli($host, $username, $eamil, $database);

	if ($mysqli->connect_error) 
	{
		die('Connect Error (' . $mysqli->connect_errno . ') '
		            . $mysqli->connect_error);
	}
//echo "Connected successfully";

	echo "<h4>FullName&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	Email&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	EmailHash&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	Phone&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	</h4>";
	$sql = "SELECT firstName,lastName,emailAddress,emailHash,phoneNumber FROM mailingList";
	$result = mysqli_query($mysqli, $sql);

echo "<table>";
	$ctr=0;
	while ($row = mysqli_fetch_assoc($result)) { 
	$ctr=5;
	echo "<tr>";
    foreach ($row as $field => $value) { 
	   if($ctr%5==0)
			echo "<td>".$value."&nbsp"."</td>" ;
	   else
			echo "<td>".$value."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"."</td>" ;
		$ctr=$ctr-1;
    }
    echo "</tr>";
}
echo "</table>";
 ?>
                </div><!-- End Main -->
            </div><!-- End Content -->
            
            <?php include("footer.php"); ?>
