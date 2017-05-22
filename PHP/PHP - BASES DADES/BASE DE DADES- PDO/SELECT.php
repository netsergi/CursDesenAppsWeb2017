<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<style>
		.w3-panel { width: 600px; margin: 50px auto;height:auto; font-weight: bold; font-size: 14px; }
		table th { background-color: lightblue; }

	</style>
</head>
<body>
	<div class="w3-panel w3-card w3-padding-16">
		<div id="num" class="w3-note  w3-blue">
			SELECT PDO - TAULA USUARIS
		</div>
		<br>
		<br>
		<table border=1 class="w3-table-all">
		<tr>
			<td colspan='5'> SELECT FROM usuaris WHERE email = 'lauri@example.com'<tr>	
		<tr>
		<tr>
			<th>ID</th>
			<th>NOMBRE</th>
			<th>APELLIDO</th>
			<th>CLAVE</th>
			<th>EMAIL</th>
		</tr>
		<?php
			// DB credentials.
			define('DB_HOST','mysql-netsergi.alwaysdata.net');
			define('DB_USER','netsergi');
			define('DB_PASS','master12');
			define('DB_NAME','netsergi_book_example');
			// Establish database connection.
			try
			{
				$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,
				DB_USER, DB_PASS,
				array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
				$sql = "SELECT * FROM usuarios WHERE email = :email;";
				$query = $dbh -> prepare($sql);
				$query -> bindParam(':email', $email, PDO::PARAM_STR);
				$email = "lauri@example.com";
				$query -> execute();
				$results = $query -> fetchAll(PDO::FETCH_OBJ);
				if($query -> rowCount() > 0)
				{
					foreach($results as $result)
					{
						echo "<tr>";
						echo "<td>" . $result -> id . "</td>";
						echo "<td>" . $result -> nombre ."</td>";
						echo "<td>" . $result -> apellido ."</td>";
						echo "<td>" . $result -> clave . "</td>";
						echo "<td>" . $result -> email . "</td>";
						echo "</tr>";						
					}

				}
			   echo "<tr><td colspan='5'>SELECT * FROM usuarios WHERE email='marconi@mail.com'</td></tr>";
			   $email = "marconi@mail.com";
			   echo "<tr><th>ID</th><th>NOMBRE</th><th>APELLIDO</th><th>CLAVE</th>
				<th>EMAIL</th></tr>";
		       $query -> execute();
			   $results = $query -> fetchAll(PDO::FETCH_OBJ);
			   if($query -> rowCount() > 0)
				{
				  foreach($results as $result)
					{
						echo "<tr>";
						echo "<td>" . $result -> id . "</td>";
						echo "<td>" . $result -> nombre ."</td>";
						echo "<td>" . $result -> apellido ."</td>";
						echo "<td>" . $result -> clave . "</td>";
						echo "<td>" . $result -> email . "</td>";
						echo "</tr>";						
					}

				}
			}
			catch (PDOException $e)
			{
				exit("Error: " . $e->getMessage());
			}	
		?>
		</table>
	</div>

</body>
</html>