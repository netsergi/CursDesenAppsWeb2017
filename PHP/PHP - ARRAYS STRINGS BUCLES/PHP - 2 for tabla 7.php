<!DOCTYPE html>
<html lang="eS">
<head>
	<meta charset="UTF-8">
	<title>SELECT</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<style>
		.w3-table { width: 400px; height: auto; margin: 20px auto;}
		caption { font-weight: bold;
				  font-size: 20px; }
	</style>
</head>
<body>
	<table align="center" class="w3-table w3-striped w3-hoverable w3-table-all">
		<caption><img src="Taula de multiplicar del 7</caption>
		<?php 
			for ($x = 0; $x <= 10; $x++) {
			  echo ("<tr><td> 7 x " . $x . " = " . "<span class='w3-badge w3-blue'> " . 7*$x . "</span></td></tr>");
			 } 
		?>
	</table>
</body>
</html>


