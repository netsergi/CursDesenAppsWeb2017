<html>
<head>
<title>Pruebas</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style>
  .well { width: 400px; margin: 100px auto; }
</style>
</head>
<body>
<div class="well">
  <?php

  class Operacion {
    protected $valor1;
    protected $valor2;
    protected $resultado;
    public function cargar1($v)
    {
      $this->valor1=$v;
    }
    public function cargar2($v)
    {
      $this->valor2=$v;
    }
    public function imprimirResultado()
    {
      echo "<span class='label label-primary'>".$this->resultado."</span><br>";
    }
  }

  class Suma extends Operacion{
    public function operar()
    {
      $this->resultado=$this->valor1+$this->valor2; 
    }
  }

  class Resta extends Operacion{
    public function operar()
    {
      $this->resultado=$this->valor1-$this->valor2;
    }
  }

  class Producto extends Operacion{
    public function operar()
    {
      $this->resultado=$this->valor1*$this->valor2;
    }
  }


  $suma=new Suma();
  $suma->cargar1(10);
  $suma->cargar2(10);
  $suma->operar();
  echo 'El resultado de la suma de 10+10 es:';
  $suma->imprimirResultado();

  $resta=new Resta();
  $resta->cargar1(10);
  $resta->cargar2(5);
  $resta->operar();
  $resta->imprimirResultado();
   
   $producto=new Producto();
  $producto->cargar1(10);
  $producto->cargar2(5);
  $producto->operar();
  echo 'El resultado del producto de 10 y 5 es:';
  $producto->imprimirResultado();

  ?>
</div>
</body>
</html> 