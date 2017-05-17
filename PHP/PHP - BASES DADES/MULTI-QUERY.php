<?php

	require_once ('dades_conexio.php');

	// Create connection
	$conn = mysqli_connect($servername, $username, $password,$db_name);

	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
	echo "Connected successfully <br>";

	$persones = array
		(
		 array ('John','Doe','jhon@example.com'),
		 array ('Mary','Moe','mary@example.com'),
		 array ('Julie','Dooley','julie@example.com')
		);

	$sql = "";
	for ($i=0; $i < count($persones); $i++)
	{
		$sql .= "INSERT INTO MyGuests (firstname, lastname, email) VALUES 
		( '". $persones[i][0] . "','" . $persones[i][1]. "','" .$persones[i][2]."');";
	}

	if ($conn->multi_query($sql) === TRUE) {
	    echo "New records created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

?>