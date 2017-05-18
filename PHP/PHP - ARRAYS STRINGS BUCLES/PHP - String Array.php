<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Proba PHP array</title>
</head>
<body>	
	<?php 
		$txt = "Hola que tal";
		echo substr($txt, 0, strlen($txt)/2);
		echo "|";
		echo substr($txt, strlen($txt) /2);
		echo "<br>";
	 ?>	
</body>
</html>
