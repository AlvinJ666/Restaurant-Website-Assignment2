<!DOCTYPE html>
<html>
	<link rel = "StyleSheet" type="text/css" href="StyleSheet.css">
<body>

<div id="wrap">
<?php include 'Header.php';?>	
<?php include 'Menu.php' ;?>	
<?php include 'Footer.php';?>
<div id="content" align="center">
    <?php 
    	$doc = new DOMDocument();
    	$doc->load('http://www.rejaul.com/CST8238/Lab10/Books.xml');

    	$books = $doc->getElementsByTagName("book");
    	$counter = 1;

    	echo "<table border = '1'>";
    	echo "<tr>";
    	echo "<td><b>Book #</b></td>"; 
    	echo "<td><b>Author</b></td>"; 
    	echo "<td><b>Title</b></td>"; 
    	echo "<td><b>Genre</b></td>"; 
    	echo "<td><b>Price($)</b></td>"; 
    	echo "<td><b>Publish Date</b></td>"; 
    	echo "<td><b>Description</b></td>"; 
    	echo "</tr>";

    	foreach ($books as $book) 
    	{
    		$authors = $book->getElementsByTagName("author");
    		$author = $authors->item(0)->nodeValue;

    		$titles = $book->getElementsByTagName("title");
    		$title = $titles->item(0)->nodeValue;

    		$genres = $book->getElementsByTagName("genre");
    		$genre = $genres->item(0)->nodeValue;

    		$prices = $book->getElementsByTagName("price");
    		$price = $prices->item(0)->nodeValue;

    		$publishers = $book->getElementsByTagName("publish_date");
    		$publisher = $publishers->item(0)->nodeValue;

    		$descriptions = $book->getElementsByTagName("description");
    		$description = $descriptions->item(0)->nodeValue;
    		
    		echo "<tr>";
    		echo "<td> Book#".$counter."</td>"; 
    		echo "<td>".$author."</td>"; 
    		echo "<td>".$title."</td>";
    		echo "<td>".$genre."</td>";
    		echo "<td>".$price."</td>";
    		echo "<td>".$publisher."</td>";
    		echo "<td>".$description."</td>";
			echo "</tr>";

    		$counter++;
    	}
    	echo "</table>";
	?>

</br>
</br>
</br>
</br>

 
   

 </div>
</div>
</body>
</html> 
