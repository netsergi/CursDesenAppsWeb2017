<?php 
	if ($_SERVER["REQUEST_METHOD"] =="GET")
	{
		$num1 = $_POST['num1'];
		$num2 = $_POST['num2'];
		echo $num1+$num2;
	}
	else {
			echo "Aquest programa nomes funciona amb POST";
	}
 ?>