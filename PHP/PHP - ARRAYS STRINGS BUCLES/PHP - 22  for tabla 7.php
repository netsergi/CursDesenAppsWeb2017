<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Taula del 7</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<style>
		.w3-table { width: 400px; height: auto; margin: 20px auto;}
		caption { font-weight: bold;
				  font-size: 20px; }
		b { color: blue; }
		.w3-tag { padding: 5px; }
	</style>
</head>
<body>
	<table align="center" class="w3-table w3-striped w3-hoverable w3-table-all">
	<caption>Taula de multiplicar del 7</caption>
		<?php  for ($x = 0; $x <= 10; $x++): ?>
		 <tr><td><b>7</b> x <?php echo $x ?> = <span class="w3-badge w3-blue w3-large"><?php $res = 7*$x; echo $res; ?></span>
		  <span class="w3-tag w3-red">
			  <?php if ($res%2 == 1): ?>
			  	Numero Senar
			  <?php else: ?>
			  	Numero Parell
			  <?php endif ?>
		  </span>
		 </td></tr>
		<?php endfor ?>
	</table>
</body>
</html>


