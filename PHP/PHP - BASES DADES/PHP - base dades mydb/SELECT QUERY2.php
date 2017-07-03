<!DOCTYPE html>
<html lang="eS">
<head>
	<meta charset="UTF-8">
	<title>SELECT</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="estilos.css">
	
</head>
<body>

	<div class="w3-pannel capa">
		<br>
		<table border="1" class="w3-table-all" >
		<caption>TAULA MYGUESTS</caption>
		<tr>
		<th>ID</th>
		<th>FIRSTNAME</th>
		<th>LASTNAME</th>
		<th>EMAIL</th>
		<th></th>
		</tr>
		<tr>
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
		//echo " Connected successfully <br>";

		$sql = "SELECT id, firstname, lastname, email, reg_date FROM MyGuests";
		$result = $conn->query($sql);
		
		if ($result->num_rows > 0) : ?>
		   <h2> s'han trobat  <b class="w3-badge w3-green"><?php echo $result->num_rows; ?> </b> registres </h2>
		   <br><br>
		 <?php while($row = $result->fetch_assoc()): ?>
		        <td><a target="_blank" class="w3-badge w3-green w3-xlarge" href="persona.php?id=<?php echo $row["id"];?>" onclick="window.open(this.href, this.target, 'width=800,height=500,top=200,left=150');"><?php echo $row["id"]; ?></a>
		        </td>
		        <td><?php echo $row["firstname"]; ?></td>
		        <td><?php echo $row["lastname"]; ?></td>
		        <td><?php echo $row["email"]; ?></td>
		        <td>
		      		<a onclick="esborrar()" id="Esborrar" href="borrar.php?id=<?php echo $row["id"];?>" class="w3-button w3-red"> Esborrar </a>
		      		<a  id="modificar" target="_blank" href="modificar.php?id=<?php echo $row["id"];?>" class="w3-button w3-blue" onclick="window.open(this.href, this.target, 'width=650,height=400,top=200,left=150');"> Modificar </a>

		      		<a  id="insertar" href="#" class="w3-button w3-green" onclick="show()"> Insertar </a>
		        </td>
		        </tr>
		    <?php endwhile ?>
			   	</table>
		<?php else : ?>
		    <p> 0 results </p>
		<?php endif ?>
		<?php $conn->close();?>
		<br>
		<div class="esborrat"><?php if (isset($_GET['result'])) echo "Registre Borrat"; ?></div>
		<br>
	</div>
	<div class="ventana"><iframe id="ifrins" src="#"></iframe></div>
	<script type="text/javascript">
		$(document).ready(function(){
   			$(".ventana").hide();   			
		});
		function show()
   			{
   				$(".ventana").show();
   			}
	</script>	
</body>
</html>
