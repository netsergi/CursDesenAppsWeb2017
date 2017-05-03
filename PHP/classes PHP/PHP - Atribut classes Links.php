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
      PHP - Classe menú - color de fons
    </div>
    <br>
    <?php
    class Menu {
      private $enlaces=array();
      private $titulos=array();
      public $color = "#FFF";

      public function cargarOpcion($en,$tit)
      {
        $this->enlaces[]=$en;
        $this->titulos[]=$tit;
      }

      public function carregar_color($color)
      {
        $this->color = $color;
      }

      public function mostrar()
      {
        echo '<div style="background-color: ' .$this->color. ';">';
        /*for($f=0;$f<count($this->enlaces);$f++)
        {
          echo '<a href="'.$this->enlaces[$f].'">'.$this->titulos[$f].'</a>';
          echo "-";
        } */
        
        foreach ($this->enlaces as $indice => $valor) {
           echo '<a href="'.$valor.'">'.$this->titulos[$indice].'</a>';
           echo "-";
        }
        echo "</div>";
      }
    }
    $menu1= new Menu();
    $menu1->carregar_color('lightblue');
    $menu1->cargarOpcion('http://www.google.com','Google');
    $menu1->cargarOpcion('http://www.yahoo.com','Yhahoo');
    $menu1->cargarOpcion('http://www.msn.com','MSN');
    $menu1->mostrar();
    ?>
  </main>
</body>
</html>