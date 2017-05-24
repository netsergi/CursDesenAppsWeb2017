<?php
	require __DIR__ . '/vendor/autoload.php';
	$log = new Monolog\Logger('name');
	$log->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING));
	$log->addWarning('Foo');

	$var = array ("num1" => 1,"num2" => 2,"num3" => 3,"num4" => 4);
	dump($var);

	use Acme\Car\Carintro as car1;
	use Acme\Vehicle\Car\Carintro as car2;

	$car = new car2;
	dump ($car);


?>