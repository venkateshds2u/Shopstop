<?php
	

	function venkateshConnection(){

		$servername = "107.180.46.187:3306";
		$username = "shauryamittal";
		$password = "shauryamittal";
		$dbname = "websiteuser123";
		
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		return $conn;

	}


?>