<?php
	class celda
	{
		private $texto;
		private $colorFuente;
		private $colorFondo;

		public function __construct($texto,$colorFuente,$colorFondo)
		{
			$this->texto = $texto;
			$this->colorFuente =  $colorFuente;
			$this->colorFondo = $colorFondo;
		}

		public function getTexto()
		{
			return $this->texto;
		}

		public function getColorFuente()
		{
			return $this->colorFuente;
		}

		public function getColorFondo()
		{
			return $this->colorFondo;
		}

		public function mostrarCelda()
		{
			return "<td style='color:".$this->colorFuente."; background-color: ".$this->colorFondo.";'> ".$this->texto ." </td>";
		}
	}
?>