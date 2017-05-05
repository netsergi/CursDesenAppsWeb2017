<html>
<head>
<title>Pruebas</title>
</head>
<body>
<?php
class Opcion {
  private $titulo;
  private $enlace;
  private $colorFondo;
  public function __construct($tit,$enl,$cfon)
  {
    $this->titulo=$tit;
    $this->enlace=$enl;
    $this->colorFondo=$cfon;
  }
  public function graficar()
  {
    echo '<a style="background-color:'.$this->colorFondo.
         '" href="'.$this->enlace.'">'.$this->titulo.'</a>';
  }

  public function getTitulo()
  {
      return $this->titulo;
  }
}

class Menu {
  private $opciones=array();
  private $direccion;
  private $existe = false;
  public function __construct($dir)
  {
    $this->direccion=$dir;
  }
  public function insertar($op)
  {
    foreach ($this->opciones as $valor)
    {
       if ($op->getTitulo() == $valor->getTitulo()) { $existe = true; }
    }
   if (!$existe) $this->opciones[]=$op;
  }
  private function graficarHorizontal()
  {
    for($f=0;$f<count($this->opciones);$f++)
    {
      $this->opciones[$f]->graficar();
    }
  }
  private function graficarVertical()
  {
    for($f=0;$f<count($this->opciones);$f++)
    {
      $this->opciones[$f]->graficar();
      echo '<br>';
    }
  }
  public function graficar()
  {
    if (strtolower($this->direccion)=="horizontal")
      $this->graficarHorizontal();
    else
      if (strtolower($this->direccion)=="vertical")
        $this->graficarVertical();
  }
}

$menu1=new Menu('vertical');
$opcion1=new Opcion('Google','http://www.google.com','#C3D9FF');
$menu1->insertar($opcion1);
$opcion2=new Opcion('Google','http://www.google.com','#C3D9FF');
$menu1->insertar($opcion2);
$opcion3=new Opcion('Yahoo','http://www.yahoo.com','#CDEB8B');
$menu1->insertar($opcion3);
$opcion4=new Opcion('MSN','http://www.msn.com','#C3D9FF');
$menu1->insertar($opcion4);
$menu1->graficar();
?>
</body>
</html>