<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
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
			

			$sql="SELECT * FROM MyGuests WHERE id=".$_GET['id']." LIMIT 1";
			$result = $conn->query($sql);
			$row = $result->fetch_assoc(); 
			$conn->close();
	?>



	<div class="w3-card-4">
		<header class="w3-container w3-blue">
		 <h1><?php echo $row["id"] ?> </h1>
		</header>

	<div class="w3-container">
	  <p><?php echo $row["firstname"]; ?></p>
	  <p><?php echo $row["lastname"]; ?></p>
	  <p><?php echo $row["email"]; ?></p>
	  <p><?php echo $row["reg_date"]; ?></p>

	</div>

	<footer class="w3-container w3-blue">
	  <h5><a onclick="window.close()" href="#">Tancar finestra</a></h5>
	</footer>

	</div>


</body>
</html>