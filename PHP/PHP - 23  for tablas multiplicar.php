<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Taula del 7</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<style>
		
		.w3-table { width: 300px; height: auto; margin: 20px auto;
					float: left; margin: 0px 10px 0px 20px;}
		caption { font-weight: bold;
				  font-size: 20px;
				  margin-top: 10px; }
		b { color: blue; }
		.w3-tag { padding: 5px; }
		main { margin: 0 auto; width: 800px; min-height: 100%; 
			 height: 100%;
			 min-height: 100%;
			   border: 2px solid black;}
	</style>
</head>
<body>
	<main>
	<?php  for ($n = 1; $n <= 10; $n++): ?>
	<table align="center" class="w3-table w3-striped w3-hoverable w3-table-all">
	<caption>Taula de multiplicar del <?php echo $n ?></caption>
		<?php  for ($x = 0; $x <= 10; $x++): ?>
		 <tr><td><b><?php echo $n ?></b> x <?php echo $x ?> = <span class="w3-badge w3-blue w3-large"><?php $res = $n*$x; echo $res; ?></span>
		  <span class="w3-tag w3-red">
			  <?php if ($res%2 == 1): ?>
			  	Numero Senar
			  <?php else: ?>
			  	Numero Parell
			  <?php endif ?>
		  </span>
		 </td></tr>
		<?php endfor ?>
		<?php endfor ?>
	</table>
	</main>
</body>
</html>


