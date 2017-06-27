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
?>
<!DOCTYPE html>
<html>
<title>Examen Final Prova Practica Modul 2</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<script type="text/javascript">
		function esborrar()
		{
			return confirm('Vols esborrar? ');
		}
</script>
<style>
	.msg { padding: 10px;
		   color: red;
		   font-weight: bold; }
</style>
<body>
	<div class="w3-card-4">

	<div class="w3-container w3-brown">
	  <h2>Registre d'empleats</h2>
	</div>
	<form class="w3-container" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

	<p>
	<label class="w3-label w3-text-brown"><b>Nom</b></label>
	<input class="w3-input w3-border w3-sand" name="nom" type="text"></p>

	<p>
	<label class="w3-label w3-text-brown"><b>Cognom</b></label>
	<input class="w3-input w3-border w3-sand" name="cognom" type="text"></p>
	<p>

	<p>
	<label class="w3-label w3-text-brown"><b>Data Naix.</b><i> (format: 2016-07-17)</i></label>
	<input class="w3-input w3-border w3-sand" name="datanaix" type="text"></p>
	
	<p><button class="w3-btn w3-brown">Enregistrar</button></p>

	</form>
	<div class="msg"><?php echo $_GET["msg"] ?></div>
	<hr>

</div>
	
<div class="w3-container w3-responsive">
<?php 
//Si es POST es crea un nou registre
if ($_SERVER["REQUEST_METHOD"] == "POST"):
	$nom = test_input($_POST["nom"]);
  	$cognom = test_input($_POST["cognom"]);
  	$datanaix = test_input($_POST["datanaix"]);

	$sql = "INSERT INTO empleados (nombre, apellidos, fechanac)
	VALUES ('".$nom."', '".$cognom."', '".$datanaix."')";

	if ($conn->query($sql) === TRUE) {
	    echo "Se ha creado un nuevo registro";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

endif; ?>

<?php
//Sempre mostra el llistat d'empleats
$sql = "SELECT id, nombre, apellidos, fechanac FROM empleados ORDER BY id DESC";
$result = $conn->query($sql);
?>
<table class="w3-table w3-bordered w3-striped w3-large">
	<tr>
	  <th>Id</th>
	  <th>Nom</th>
	  <th>Cognoms</th>
	  <th>Data Naix.</th>
	</tr>

<?php
if ($result->num_rows > 0):
	while($row = $result->fetch_assoc()):
?>
	<tr>
	  <td><?php echo $row["id"] ?></td>
	  <td><?php echo $row["nombre"] ?></td>
	  <td><?php echo $row["apellidos"] ?></td>
	  <td><?php echo $row["fechanac"] ?></td>
	  <td><a onclick="return esborrar()" id="Esborrar" href="borrar.php?id=<?php echo $row["id"];?>" class="w3-button w3-red"> Esborrar </a>
	  </td>
	  <!-- Faig una nova columan a la taula amb el boto esborrar que cridara el php
	  	   borrar.php i li passara com a parametre per get, el id corresponent.
	  	   Tambe crido la funcio javascript esborrar abans, per que doni l'opcio
	  	   de no esborrar amb un confirm. -->
	</tr>
	

<?php
	endwhile;
endif;
?>
</table>
<?php
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
$conn->close();
?>
</div>
</body>
</html>