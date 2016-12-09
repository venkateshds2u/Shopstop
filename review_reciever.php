<?php
		$summary = $_POST["summary"];
		$details = $_POST["details"];
        $product_id = $_POST["product_id"];
        $rating = $_POST["rating"];

	$servername = "50.62.209.185";
	$user = "marianne";
	$pass = "password123";
	$dbname = "mariannepaulson_";
	
	// Create connection
	$conn = new mysqli($servername, $user, $pass, $dbname);
	
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	$sql = "INSERT INTO reviews (product_id, summary, details, rating)
					VALUES ('$product_id', '$summary', '$details', '$rating')";
					
	if ($conn->query($sql) === TRUE) {
	    
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

?>