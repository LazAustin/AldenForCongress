<?php

	$link = mysqli_connect("mysql.aldenforcongress.com", "lazaustincom1", "Avengers12-0", "aldenforcongress_users");	
				
	if (mysqli_connect_error()){

		die ("There was an error connecting to the database");
		
	}
	
	$query = "INSERT INTO 'users' ('first_name', 'last_name', 'email_address') VALUES('Laz', 'Austin', 'lazaustin94@gmail.com')";
	
	mysqli_query($link, $query);
	
	$query = "SELECT * FROM users";

	if ($result = mysqli_query($link, $query)) {
		
		$row = mysqli_fetch_array($result);

		print_r($row);
		
	}
	
	
?>