<?php

	require_once ('dades_conexio.php');

	// Create connection
	$conn = mysqli_connect($servername, $username, $password,$db_name);

	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
	echo "Connected successfully <br>";

	$sql = "INSERT INTO MyGuests (firstname, lastname, email)
	VALUES ('Michael', 'Norman', 'michael@example.com')";

	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
	$conn->close();

?>