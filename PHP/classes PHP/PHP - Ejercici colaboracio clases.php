<html>
<head>
<title>Pruebas</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
  main { padding: 10px; width: 800px; height: 300px; margin: 50px auto;}
  main div:first-of-type { padding: 5px;  }
</style>
</head>
<body>
  <main class="w3-pannel w3-card w3-padding-16">
  <?php include ("celda.php"); 
     $celda = new celda("llll","white","blue");
     echo $celda->getTexto()."<br>";
     echo $celda->getColorFuente()."<br>";
     echo $celda->getColorFondo()."<br>";
  ?>
  </main>
</body>
</html>