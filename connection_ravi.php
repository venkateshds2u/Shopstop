<?php
	

	function raviConnection(){

		$servername = "198.91.81.5:3306";
		$username = "neelkanth_admin";
		$password = "root";
		$dbname = "sjdu";
		
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		return $conn;

	}


?>