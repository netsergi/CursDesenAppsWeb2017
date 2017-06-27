<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "db_empl";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	} 
	echo "Connected successfully <br>";

	$sql = 'DELETE FROM empleados where id='.$_GET['id'];
	if ($conn->query($sql) === TRUE) {
    	$msg = "Registre esborrat amb exit!";
	} else {
    	$msg = "Error al esborrar: ". $conn->error;
	}

	/* Conecto de nou amb la bbdd i executo la consulta delete amb l'id que li
	   passo per get, corresponent al registre a esborrar, retorno un missatge amb el resultat.  */


	header('location: form.php?msg='.$msg);
?>