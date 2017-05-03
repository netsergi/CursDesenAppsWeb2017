<html>
<head>
<title>Pruebas</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style type="">
  body { font-family: "Verdana"; }
  main { padding: 10px; width: 300px; height: 300px; margin: 50px auto;}
  main div:first-of-type { padding: 5px;  }
  b { border: 1px solid black;
      padding: 3px;
      box-shadow: 1px 1px 1px #ccc;
      border-radius: 5px; }
</style>
</head>
<body>
<main class="w3-pannel w3-card w3-padding-16">
  <div class="w3-note w3-blue">
    Classe- Empleado Sueldo > 3000
  </div>
  <br>
     <?php
    class Empleado {
      private $nombre;
      private $sueldo;
      public function iniciar($nombre,$sueldo)
      {
        $this->nombre=$nombre;
        $this->sueldo=$sueldo;
      }
      public function imprimir()
      {
        echo "<br>" . $this->nombre . " | Sueldo:  " . $this->sueldo . "<br>";
        if ( $this->sueldo > 3000)
          { echo "<br><b style='color: red;'>Paga impuestos</b>"; }
        else
          { echo "<br><b style='color: green;'>No paga impuestos</b><br>"; }              
      }
    }
    $emp1 = new Empleado();
    $emp1->iniciar('Juan',234);
    $emp1->imprimir();
    $emp2 = new Empleado();
    $emp2->iniciar('Ana',3500);
    $emp2->imprimir();
    ?>
 
</main>
</body>
</html>