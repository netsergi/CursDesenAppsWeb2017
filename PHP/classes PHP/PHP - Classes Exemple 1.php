<html>
<head>
<title>Pruebas</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style type="">
  body { font-family: "Verdana"; }
  main { padding: 10px; width: 300px; height: 300px; margin: 50px auto;}
  main div:first-of-type { padding: 5px;  }
 
</style>
</head>
<body>
<main class="w3-pannel w3-card w3-padding-16">
  <div class="w3-note w3-blue">
    Classes exemple - Persona
  </div>
  <br>
     <?php
    class Persona {
      private $nombre;
      public $edat;
      public function inicializar($nombre,$edat)
      {
        $this->nombre=$nombre;
        $this->edat=$edat;

      }
      public function imprimir()
      {
        echo "<b>Nom:</b> " . $this->nombre . " | <b>Edad:</b> " . $this->edat; 
        echo '<br>';
        
      }
    }
    $sumaEdats= 0;
    $datos = array();
    $per1=new Persona();
    $per1->inicializar('Juan',22);
    $per1->imprimir();
    array_push($datos,$per1);
    $per2=new Persona();
    $per2->inicializar('Ana',32);
    $per2->imprimir();
    array_push($datos,$per2);
    $per3=new Persona();
    $per3->inicializar('Pedro',24);
    $per3->imprimir();
    array_push($datos,$per3);
    $per4=new Persona();
    $per4->inicializar('Maria',45);
    $per4->imprimir();
    array_push($datos,$per4);

    for ($i=0; $i < count($datos) ; $i++)
    {
      $sumaEdats += $datos[$i]->edat;
    }

    /*foreach ($datos as $valor) {
      $sumaEdats += $valor->edat;
    } */
      echo "<hr><p class='w3-note w3-red w3-padding-16'><b>Suma total de las edats:</b> ". $sumaEdats . "</p><br><br>";
    ?>
 
</main>
</body>
</html>