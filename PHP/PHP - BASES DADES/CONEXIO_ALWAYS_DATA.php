<?php
$servername = "mysql-netsergi.alwaysdata.net";
$username = "netsergi";
$password = "master12";
$db_name = 'netsergi_mydb';

// Create connection
$conn = mysqli_connect($servername, $username, $password,$db_name);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully <br>";



$conn->close();


?>