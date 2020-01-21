<?php include("header.php"); ?>

            <div id="content" class="clearfix">
                <p>&nbsp;</p>
                <h1>Special for today</h1>
                <p>Thank you for visiting our menu.</p>
				<?php
				$w = date('w');
				if($w==0)
				echo '<img src="images/bacon.jpg" width="400"
				height="400"/>';
				else if($w==1)
				echo '<img src="images/burger.jpg" width="400"
				height="400"/>';
				else if($w==2)
				echo '<img src="images/corns.jpg" width="400"
				height="400"/>';
				else if($w==3)
				echo '<img src="images/pasta.jpg" width="400"
				height="400"/>';
				else if($w==4)
				echo '<img src="images/salad.jpg" width="400"
				height="400"/>';
				else if($w==5)
				echo '<img src="images/salmon.jpg" width="400"
				height="400"/>';
				else 
				echo '<img src="images/turkey.jpg" width="400"
				height="400"/>';
				 ?>
            </div><!-- End Content -->
<?php include("footer.php"); ?>
