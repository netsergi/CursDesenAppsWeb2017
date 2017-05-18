<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
		<?php
			$arxiu ="";
			$contenido="";
			if (file_exists("datos.txt") != 1)
			{
				$arxiu = fopen("datos.txt","a+");	
				modificiar($arxiu);
			}
			else {
				$arxiu = fopen("datos.txt","a");
				modificar($arxiu);
			}

			function modificar($arxiu)
			{
				fwrite ($arxiu, "hola mundo");
				fclose ($arxiu);
				
			}

			function leer()
			{
				$arxiu = fopen("datos.txt","r");
				echo fgetc ($arxiu);
				fclose($arxiu);
			}
			
		?>

		<div class="w3-note w3-blue">
		yy
		<?php leer($arxiu); ?>
		</div>
</body>
</html>