<?php       




$hash = ezmlm_hash($_POST["emailAddress"]);

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
	else
	{   
		if(isset($_POST["btnSubmit"])){

		if($_POST["customerfName"]!=null && $_POST["customerlName"]!=null && $_POST["phoneNumber"]!=null && $_POST["emailAddress"]!=null && $_POST["username"]!=null && $_POST["referral"]!=null)
		{ 
		$fname=$_POST["customerfName"];
		$lname=$_POST["customerlName"];
		$phone=$_POST["phoneNumber"];
		$eml=$_POST["emailAddress"];
		$uname=$_POST["username"];
		$ref=$_POST["referral"];
		$sqlInsert = "insert into mailingList(firstName,lastName,phoneNumber,emailAddress,emailHash,userName,referer) VALUES ('$fname','$lname','$phone','$eml','$hash','$uname','$ref')";

					
		if ($mysqli->query($sqlInsert) == TRUE) {
		    echo "added";
		} 
		else 
		{
		    echo "Error: " . $sqlInsert . "<br>" . $mysqli->error;
		}

		}

		
 		else 
			echo "Please make sure all fields are not empty and valid.";
		
		
		}


    }
 ?>

<?php include("header.php"); ?>

            <div id="content" class="clearfix">
                <aside>
                        <h2>Mailing Address</h2>
                        <h3>1385 Woodroffe Ave<br>
                            Ottawa, ON K4C1A4</h3>
                        <h2>Phone Number</h2>
                        <h3>(613)727-4723</h3>
                        <h2>Fax Number</h2>
                        <h3>(613)555-1212</h3>
                        <h2>Email Address</h2>
                        <h3>info@wpeatery.com</h3>
                </aside>
                <div class="main">
                    <h1>Sign up for our newsletter</h1>
                    <p>Please fill out the following form to be kept up to date with news, specials, and promotions from the WP eatery!</p>
                    <form name="frmNewsletter" id="frmNewsletter" method="post">
                        <table>
                            <tr>
                                <td>First Name:</td>
                                <td><input type="text" name="customerfName" id="customerfName" size='40'></td>
                            </tr>
                            <tr>
                                <td>Last Name:</td>
                                <td><input type="text" name="customerlName" id="customerlName" size='40'></td>
                            </tr>
                            <tr>
                                <td>Phone Number:</td>
                                <td><input type="text" name="phoneNumber" id="phoneNumber" size='40'></td>
                            </tr>
                            <tr>
                                <td>Email Address:</td>
                                <td><input type="text" name="emailAddress" id="emailAddress" size='40'>
                            </tr>
                             <tr>
                                <td>Username:</td>
                                <td><input type="text" name="username" id="username" size='20'>
                            </tr>
                            <tr>
                                <td>How did you hear<br> about us?</td>
                                <td>
                                   <select name="referral" size="1">
                                      <option>Select referer</option>
                                      <option value="newspaper">Newspaper</option>
                                      <option value="radio">Radio</option>
                                      <option value="tv">Television</option>
                                      <option value="other">Other</option>
                                   </select>
                                </td>
                            </tr>
                            <tr>
                                <td colspan='2'><input type='submit' name='btnSubmit' id='btnSubmit' value='Sign up!'>&nbsp;&nbsp;<input type='reset' name="btnReset" id="btnReset" value="Reset Form"></td>
                            </tr>
                        </table>
                    </form>
                </div><!-- End Main -->
            </div><!-- End Content -->
            
    <?php include("footer.php"); ?>