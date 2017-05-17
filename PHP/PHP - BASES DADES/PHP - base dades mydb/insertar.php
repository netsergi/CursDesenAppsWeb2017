<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'/>
		<title>Modificar persona</title>
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="estilos.css">
		<style type="text/css">
			div { margin: 10px auto;
				  padding: 10px; 
				  width: 550px; }
			span { font-size: 20px;
				   vertical-align: middle;
				   padding: 10px; }

			
			


		</style>
	</head>
	<body>
		<?php
			require_once('../dades_conexio.php');

			$conn = mysqli_connect($servername, $username, $password,$db_name);

			if (!$conn) {
			    die("Connection failed: " . mysqli_connect_error());
			}
			//echo "Connected successfully <br>";

			
			if ($_SERVER['REQUEST_METHOD'] == 'POST')
			{
				$sql= "INSERT INTO MyGuests (firstname, lastname,email) VALUES ('".$_POST['firstname']."','".$_POST['lastname']."','".$_POST['email']."');";
				
				if ($conn->query($sql) === TRUE) {
    				$msg = "Registro nuevo añadido con exito!";
    				$last_id = $conn->insert_id;
    				header ('location: modificar.php?id='.$last_id);
				} else {
    				$msg= "Error updating record: " . $conn->error;
				}

			}

			
			
		?>
		<div class="w3-card-2">
			<h2 class="w3-note w3-blue"> Nou usuari </h2>
			<br>			
			<form name="modificar" action="insertar.php?" method="POST">
				<input type="text" name="id" value="<?php echo $row[id]; ?>"  style="display:none;"><img class="user" src="useradd.png">
				<label for="firstname">Firstname: </label>
				<input type="text" name="firstname" value="<?php echo $row[firstname]; ?>">
				<br><br>
				<label for="lastname">Lastname: </label>
				<input type="text" name="lastname" value="<?php echo $row[lastname]; ?>">
				<br><br>
				<label for="email">Email: </label>
				<input type="text" name="email" value="<?php echo $row[email]; ?>">
				<br><hr>
				<input class="w3-button w3-green" type="submit" name="insertar" value="Insertar">
				<input id="btnclose" class="w3-button w3-red" type="button" name="salir" value="Tancar finestra" onclick="window.close();">
			</form>
			<br>
			<span><?php echo $msg; ?></span>
		</div>	
	</body>
</html>



