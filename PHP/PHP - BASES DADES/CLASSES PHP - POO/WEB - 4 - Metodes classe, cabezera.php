<html>
<head>
<title>Pruebas</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
  body { font-family: "Verdana"; }
  main { padding: 10px; width: 300px; height: 300px; margin: 50px auto;
         width: 800px;}
  main div:first-of-type { padding: 5px;  }
</style>
</head>
<body>
  <main class="w3-pannel w3-card w3-padding-16">
    <div class="w3-note w3-blue">
      PHP - Capçalera posicionar
    </div>
    <br>
      <?php
        class CabeceraPagina {
          private $titulo;
          private $ubicacion;
          public $color;
          public function inicializar($tit,$ubi,$color)
          {
            $this->titulo=$tit;
            $this->ubicacion=$ubi;
            $this->color=$color;
          }
          public function graficar()
          {
            echo '<div style="font-size:40px;text-align:'.$this->ubicacion.'; color: ' . $this->color . ';">';
            echo $this->titulo;
            echo '</div>';
          }
        }

        $cabecera=new CabeceraPagina();
        $cabecera->inicializar('El blog del programador','right','blue');
        $cabecera->graficar();
      ?>
  </main>
</body>
</html>