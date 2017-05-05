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
        Exerciçi llibre pag. 54
    </div>
    <br>
    <?php 
      abstract class User
      {
        protected $username;

        public abstract function stateYourRole();

        public function setUserName($username)
        {
          $this->username = $username;
        }

        public function getUserName()
        {
          return $this->username;
        }   
      } 

      class Admin extends User
      {
          public function stateYourRole()
          {
            return "Admin";
          }
      }

      class Viewer extends User
      {
          public function stateYourRole()
          {
            return "Viewer";
          }
      }
      $admin1 = new Viewer();
      $admin1->setUserName("Balthazar");
      echo "<b>Username:</b> ".$admin1->getUserName()."<br>";
      echo "<b>Role:</b>".$admin1->stateYourRole();      
    ?>
  </main>
</body>
</html>