<html>
<head>
<title>Pruebas</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
  body { font-family: "Verdana"; }
  main { padding: 10px; width: 300px; height: 300px; margin: 50px auto;}
  main div:first-of-type { padding: 5px;  }
</style>
</head>
<body>
  <main class="w3-pannel w3-card w3-padding-16">
    <div class="w3-note w3-blue">
      
    </div>
    <br>
    <?php 
      abstract class Treballador
      {
        protected $nom;
        protected $sou;

        public function imprimir()
        {
          return $this->nom."   ".$this->sou;
        }

        public abstract function calcularSueldo();
      }

      class Empleat extends Treballador
      {
        private $horasTrabajadas;
        private $valorHora = 3.50;

        public function __construct($nom,$horasTrabajadas)
        {
            $this->nom = $nom;
            $this->horasTrabajadas = $horasTrabajadas;
        }

       

        public function calcularSueldo()
        {
            $this->sou = $this->horasTrabajadas*$this->valorHora;
        }
      }

      class Gerent extends Treballador
      {
        private $horasTrabajadas;
        private $valorHora = 3.50;

         public function __construct($nom,$horasTrabajadas)
          {
              $this->nom = $nom;
              $this->horasTrabajadas = $horasTrabajadas;
          }

           public function calcularSueldo()
          {
             $this->sou = ($this->horasTrabajadas*$this->valorHora)*1.10;
          }
      }
      
      $empleat = new Empleat("joan",40);
      $empleat->calcularSueldo();
      echo $empleat->imprimir();
      $gerent = new Gerent("Pep",40);
      $gerent->calcularSueldo();
      echo "<br>".$gerent->imprimir();
      

    ?>
  </main>
</body>
</html>