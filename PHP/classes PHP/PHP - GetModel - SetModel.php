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
      	PHP - Classe Setters / Getters
    </div>
    <br>
    <?php 
		class Car {
			// The private access modifier denies access to the
			// method from outside the class’s scope
			private $model;
			private $allowedModels = array("Mercedes","Audi","Seat","Opel");
			// The public access modifier allows the access to
			// the method from outside the class
			public function setModel($model)
			{
			// Validate that only certain car models are assigned
			// to the $carModel property			
				if(in_array($model,$this->allowedModels))
				{
					$this -> model = $model;
				} 
			}
			public function getModel()
			{
				return "The car model is " . $this -> model;		
			}
		}

		$mercedes = new Car();
		// Set the car’s model
		$mercedes -> setModel("Opel");
		// Get the car’s model
		echo $mercedes -> getModel(); 
    ?>
  </main>
</body>
</html>