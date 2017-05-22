<html>
<head>
<title>Pruebas</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style type="text/css">
  table { width: 400px; 
          margin: 50px auto;
          border-collapse: collapse;
          padding: 5px;}

  td { padding: 5px; text-align: center; }
</style>
</head>
<body>
  <?php
    include ("celda.php");
    class Tabla {
      private $mat=array(); //Array bidimensional de cel.les
      private $cantFilas;
      private $cantColumnas;

      public function __construct($fi,$co)
      {
        $this->cantFilas=$fi;
        $this->cantColumnas=$co;
      }

      public function cargar($fila,$columna,$celda)
      {
        $this->mat[$fila][$columna]=$celda;
      }

      private function inicioTabla()
      {
        echo '<table align="center" class="w3-large" border="3" >';
      }
        
      private function inicioFila()
      {
        echo '<tr>';
      }

      private function mostrar($fi,$co)
      {
        echo $this->mat[$fi][$co]->mostrarCelda();
      }

      private function finFila()
      {
        echo '</tr>';
      }

      private function finTabla()
      {
        echo '</table>';
      }

      public function graficar()
      {
        $this->inicioTabla();
        for($f=1;$f<=$this->cantFilas;$f++)
        {
          $this->inicioFila();
          for($c=1;$c<=$this->cantColumnas;$c++)
          {
            $this->mostrar($f,$c);
          }
          $this->finFila();
        }
        $this->finTabla();
      }
    }
    $fils = 6;
    $cols = 9;
    $contador = 1;
    $tabla1=new Tabla($fils,$cols);
    for($f=1; $f<=$fils; $f++){
      for($c=1; $c<=$cols; $c++){
        if ($contador%2 == 0) { $celda =  new celda($contador,"blue","#ccffff");}
        else { $celda =  new celda($contador,"black","lightyellow"); }
        $tabla1->cargar($f, $c, $celda); 
        $contador++;
      }  
    }
    $tabla1->graficar(); 
  ?>
   
 
</body>
</html>