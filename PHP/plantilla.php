<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
		<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  			Name: <input type="text" name="fname">
  			<input type="submit">
		</form>

		<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		    // collect value of input field
		    $name = htmlspecialchars($_REQUEST['fname']); 
		    if (empty($name)) {
		        echo "Name is empty";
		    } else {
		        echo $name;
		    }
		}
		?>
</body>
</html>