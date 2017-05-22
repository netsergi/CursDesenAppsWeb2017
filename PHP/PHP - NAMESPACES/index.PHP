<?php

	require "src/Car/Carintro.php";
	require "src/Vehicle/Car/Carintro.php";

	use Acme\Vehicles\Car\Carintro as car1;
	use Acme\Car\Carintro as car2;

	$car = new car1;
	echo get_class($car) . " | ". $car -> sayHello(); 
	echo "<br><br>";
	$car = new car2;
	echo get_class($car) . " | ". $car -> sayHello(); 
	
?>
