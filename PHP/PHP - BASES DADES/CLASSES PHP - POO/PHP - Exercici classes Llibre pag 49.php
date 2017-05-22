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
        Exerciçi PHP llibre pàgina 49
    </div>
    <br>
    <?php 
      class User
      {
        protected $username;

        public function setName($username)
        {
          $this->username = $username;
        }       
      }

      class Admin extends User
      {
        public function expressYourRole()
        {
          return "Your role is administrator.";
        }

        public function sayHello()
        {
          return "Hello admin, ".$this->username;
        }
      }
      
      $admin1 = new Admin();
      $admin1->setName("Balthazar");
      echo $admin1->sayHello();
    ?>
  </main>
</body>
</html>