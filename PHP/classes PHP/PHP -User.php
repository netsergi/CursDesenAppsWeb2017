<html>
<head>
<title>Pruebas</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
  body { font-family: "Verdana"; }
  main { padding: 10px; width: 400px; height: 300px; margin: 50px auto;}
  main div:first-of-type { padding: 5px;  }
  b { color: white; background-color: blue; 
      border-radius: 4px; 
      padding: 3px; 
    }
  span {  background-color: yellow;
          color: white;
          border-radius: 4px; 
          padding: 3px; }
</style>
</head>
<body>
  <main class="w3-pannel w3-card w3-padding-16">
    <div class="w3-note w3-blue">
      PHP - Classe Construct - Getter / Setter
    </div>
    <br>
    <?php 
        class User {
          private $firstName;
          private $lastName;

          public function __construct($nombre,$lastName)
          {
            $this->firstName = $nombre;
            $this->lastName = $lastName;
          }

          public function getFullName()
          {
            return $this->firstName. "   ".$this->lastName;
          }
        }

        $usuario = new User("Pedro","Garcia Alonso");
        echo "<span>".$usuario->getFullName()."</span>";
 
    ?>
  </main>
</body>
</html>