<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<style type="text/css">
		div { margin: 0 auto;
			  width: 800px;
			  text-align: center; border: 1px solid black; }
		.w3-note, .w3-badge { padding: 10px; 
				   border: 3px solid white;
				   box-shadow: 2px 2px 2px #ccc;}
		

	</style>
</head>
<body>
		<div class="w3-card w3-panel w3-padding-16">
		<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  			Numero 1: <input type="number" name="num1" 	value="<?php echo $_REQUEST['num1']?>"><br><br>
  			Numero 2: <input type="number" name="num2" value="<?php echo $_REQUEST['num2']?>"><br><br>
  			<input type="submit">
		</form>
		<br><br>

		<?php if ($_SERVER["REQUEST_METHOD"] == "POST") : ?>
		  
			 <?php  // collect value of input field
			    $num1 = htmlspecialchars($_REQUEST['num1']);
			    $num2 = htmlspecialchars($_REQUEST['num2']);  ?>
			 <?php if (empty($num1) || empty($num2)): ?>
			        <span class="w3-note w3-red w3-xlarge"><?php echo "Camp buit"; ?></span>
			 <?php else: ?>
			        <span class="w3-note w3-blue w3-xlarge"><?php echo ($num1+$num2); ?></span>
			 <?php endif ?>

		<?php endif ?>
		
		 </div>
		
</body>
</html>