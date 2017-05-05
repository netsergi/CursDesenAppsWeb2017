<html>
<head>
<title>Pruebas</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style type="">
  body { font-family: "Verdana"; }
  main { padding: 10px; width: 300px; height: 300px; margin: 50px auto;}
  main div:first-of-type { padding: 5px;  }
  b { padding: 3px;
      border: 2px solid darkblue;}
</style>
</head>
<body>
<main class="w3-pannel w3-card w3-padding-16">
  <div class="w3-note w3-blue">
    PHP - Herencia Exercicí 2 
  </div>
  <br>
     <?php
       Class Persona
       {
          protected $nom;
          protected $edat;

          public function __construct ($nom,$edat)
          {
            $this->nom = $nom;
            $this->edat = $edat;
          }

          public function imprimir()
          {
            return $this->nom.",".$this->edat;
          }
       } 

       Class Empleat extends Persona
       {
          private $sou;

          public function __construct($nom,$edat,$sou)
          {
              parent::__construct($nom,$edat);
              $this->sou = $sou;           
          }

          public function imprimir()
          {
            return parent::imprimir().",".$this->sou;
          }
       }
      $empleat = new Empleat("Laura",28,1500);
      echo "<b>Nom, edad i sou</b> ".$empleat->imprimir();    
    ?>
</main>
</body>
</html>