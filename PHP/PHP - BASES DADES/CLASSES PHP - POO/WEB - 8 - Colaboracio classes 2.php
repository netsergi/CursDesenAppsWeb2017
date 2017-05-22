<html>
<head>
<title>Pruebas</title>
</head>
<body>
  <?php
    include("cabecera.php");
    include("cuerpo.php");
    include("pie.php");
    
    class Pagina {
      private $cabecera;
      private $cuerpo;
      private $pie;
      public function __construct($texto1,$texto2)
      {
        $this->cabecera=new Cabecera($texto1);
        $this->cuerpo=new Cuerpo();
        $this->pie=new Pie($texto2);
      }
      public function insertarCuerpo($texto)
      {
        $this->cuerpo->insertarParrafo($texto);
      }
      public function graficar()
      {
        $this->cabecera->graficar();
        $this->cuerpo->graficar();
        $this->pie->graficar();
      }
    }
    
    $pagina1=new Pagina('Título de la Página','Pie de la página');
    $pagina1->insertarCuerpo('Esto es una prueba que debe aparecer dentro del cuerpo de la página 1');
    $pagina1->insertarCuerpo('Esto es una prueba que debe aparecer dentro del cuerpo de la página 2');
    $pagina1->insertarCuerpo('Esto es una prueba que debe aparecer dentro del cuerpo de la página 3');
    $pagina1->insertarCuerpo('Esto es una prueba que debe aparecer dentro del cuerpo de la página 4');
    $pagina1->insertarCuerpo('Esto es una prueba que debe aparecer dentro del cuerpo de la página 5');
    $pagina1->insertarCuerpo('Esto es una prueba que debe aparecer dentro del cuerpo de la página 6');
    $pagina1->insertarCuerpo('Esto es una prueba que debe aparecer dentro del cuerpo de la página 7');
    $pagina1->insertarCuerpo('Esto es una prueba que debe aparecer dentro del cuerpo de la página 8');
    $pagina1->insertarCuerpo('Esto es una prueba que debe aparecer dentro del cuerpo de la página 9');
    $pagina1->graficar();
  ?>
</body>
</html>