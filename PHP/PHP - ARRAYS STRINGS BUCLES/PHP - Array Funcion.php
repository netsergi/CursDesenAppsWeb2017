<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<style>
		div { margin: 40px auto; width: 500px; border: 2px solid black;
			  padding: 5px;}
		.w3-note { padding: 5px; }
	</style>
</head>
<body>
		<div>
		<?php $array = array("Jani","Hege","Stale","Kai Jim","Borge","Herman"); 
		  function familynames($fnames)
		  {
		  		echo $fnames;
		  } 
		?>
		<?php foreach ($array as $valor): ?>
			<?php if (stripos($valor, "j") === 0) : ?> 
				<p class="w3-note w3-card w3-blue"><?php familynames($valor); ?></p>
			<?php endif ?>	
		<?php endforeach ?>
		</div>
</body>
</html>