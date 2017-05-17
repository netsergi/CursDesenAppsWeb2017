<html>
<head>
<title>Activitat 2</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style type="text/css">
  .color  { color: red; }
</style>
</head>
<body>
  <main style="padding: 10px; width: 300px; min-height: 100px; margin: 50px auto;" class="w3-pannel w3-card w3-padding-16">
   <?php 
      class Usuari {

        protected $nom;
        protected $password;

        public function setNom ($nom) // Setter del nom
        {
            $this->nom = $nom;
        }

        public function setPassword($password) // Setter del password
        {
            $this->password = $password;
        }

        public function getNom ()// getter del nom
        {
            return $this->nom;
        }

        public function getPassword() // getter del password
        {
            return $this->password;
        }
        // Constructor que inicialitzara les propietats de nom i password al ser instanciada la classe.
        public function __construct($nom,$password)
        {
            $this->nom = $nom;
            $this->password = $password;
        }
        // Funció saludar, en cas de rebre el nom de Joan a la propietat nom de l'objecte fa un echo de salutació.
        public function saludar()
        {
          if ($this->nom == "Joan") echo "Hola soc el ". $this->nom;
        }
      }

      class Administrador extends Usuari {

        public function banear ($nom)
        {
          // comprobo que al cridar el metode banear desde Administrador la propiuetat nom sigui igual a "Pere" per mostrar el missatge.
          if ($this->nom == "Pere") echo "<b class='color'>Pere ha estat banejat</b>";

        }
      }

      $usuari = new Usuari(); // Instancio la classe usuari per tal de fer les comprobacions. En aquest cas com te un constuctor tambe li podia passar els valors directament entre parentesis al instanciar la classe, pero en aquest cas comprobo que els setters funcionen.
      $usuari->setNom('Joan');
      $usuari->setPassword('12345'); 
      echo "<b>Usuari: </b>".$usuari->getNom()."<br><b> Password: </b> ".$usuari->getPassword()."<br><hr>" ;
      //Comprobo que les propietats s'ha assignat correctament, mostran les dades.
      $Administrador = new Administrador("Pere","54321"); // Instancio un nou usuari, ara si li passo directament per que el constructor assigni els valors a les propietats, ja que al estar heredada de Usuari tambe dispossa dels seus metordes i propietats sempre que li hagi possat protected a les propietats.
      echo "<b>Usuari: </b>".$Administrador->getNom()."<br><b> Password: </b> ".$Administrador->getPassword()."<br><br>" ;
      //Faig els getters ara amb l'Administrador per veure si agafa ve els valors.
      $Administrador->banear("Pere");
      // Comprobo que al cridar el metode banear d'Administrador fa la comprobació del nom i si es Pera mostra el missatge de banejat.
      ?>

  </main>
</body>
</html>  