<?php
	require_once('../dades_conexio.php');

	$conn = mysqli_connect($servername, $username, $password,$db_name);

	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
	echo "Connected successfully <br>";

	$sql = 'DELETE FROM MyGuests where id='.$_GET['id'];
	if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
	} else {
    echo "Error deleting record: " . $conn->error;
	}
	header('location: SELECT QUERY.php?result="borrat"');
?>