<html>
<head>
<title>Pruebas</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
  body { font-family: "Verdana"; }
  main { padding: 10px; width: 300px; min-height: 300px; margin: 50px auto;}
  main div:first-of-type { padding: 5px;  }
  main div:last-of-type { border: 1px solid black;
        width: 100px;
        height: 100px; }
</style>
</head>
<body>
  <main class="w3-pannel w3-card w3-padding-16">
    <div class="w3-note w3-blue">
      PHP - Clonacio Classe Cuadrado
    </div>
    <br>
    <div></div>
    <br>
    <?php 
      class Cuadrado
      {
        private $costat;
        private $perimetre;
        private $area;

        public function __construct($costat)
        {
           $this->costat = $costat;
           $this->area = pow($costat,2);
           $this->perimetre = 4*$costat;
        }

        public function getPerimetre()
        {
          return $this->perimetre;
        }

        public function getArea()
        {
          return $this->area;
        }

        public function getCostat()
        {
          return $this->costat;
        }

        public function setCostat($costat)
        {
          $this->__construct($costat);
        }


      }

      $cuadrado = new Cuadrado(5);
      echo "<b>Perimetre:</b> ".$cuadrado->getPerimetre();
      echo "<br>";
      echo "<b>Cuadrat:</b> ".$cuadrado->getArea()." m2";

      $cuadrado2 = $cuadrado; // Passem objecte per referencia
      $cuadrado3 = clone($cuadrado); //Clonem objecte
      echo "<hr>";
      $cuadrado->setCostat(4);

      // Objecte cuadrado2 passat per referencia
      echo "<b>Perimetre2:</b> ".$cuadrado2->getPerimetre();
      echo "<br>";
      echo "<b>Cuadrat2:</b> ".$cuadrado2->getArea()." m2";
      echo "<hr>";

      // Objecte cuadrado3 clonat - no es modifica l'original
      echo "<b>Perimetre3:</b> ".$cuadrado3->getPerimetre();
      echo "<br>";
      echo "<b>Cuadrat3:</b> ".$cuadrado3->getArea()." m2";




    ?>
  </main>
</body>
</html>