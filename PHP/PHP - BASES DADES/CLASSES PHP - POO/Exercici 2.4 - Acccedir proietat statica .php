<?php

	class Cliente {
		static public $nombre_completo = 'Cliente desconocido';
		public $id = 1001;
	}
	print Cliente::$nombre_completo ."<br>";
	$cliente = new Cliente();
	print $cliente->nombre_completo;
	echo "<hr>";
	print Cliente::$nombre_completo;
	print Cliente::$id;
?>