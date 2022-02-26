<?php

	$link = mysqli_connect("mysql.aldenforcongress.com", "lazaustincom1", "Avengers12-0", "aldenforcongress_users");	
				
	$query = "INSERT INTO 'users' ('id', 'first_name', 'last_name', 'email_address') VALUES('', '$_REQUEST["firstName"]', '$_REQUEST["lastName"]', '$_REQUEST["email"]')";
				
	mysqli_query($link, $query);


?>