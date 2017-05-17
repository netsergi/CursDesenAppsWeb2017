<html>
<head>
<title>Activitat 1</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
	main { width: 800px; min-height: 100px; margin: 50px auto; padding: 10px; }
</style>
</head>
<body>
  <main class="w3-pannel w3-card w3-padding-16">
   <?php 
      $arxiu = fopen("dictionary.txt","r");
      //Obro l'arxiu en mode de nomes lectura "r"
      $linea=""; // Guardo en aquesta variable cada linea del arxiu
      $pos; // A la varible pos guardare la posicio on comença el primer caracter que es la S.

      while (!feof($arxiu)) { // fins que  no arribi al final del arxiu s'anira executant
		$linea =  fgets($arxiu);// Guardo cada linea del arxiu
		$pos = strlen($linea) - strlen(stristr($linea,"S",0));
		// Strlen em dona la longitud d'una cadea, a la variable pos li resto, la longitud de la variable $linea que conte una linea del arxiu amb la longitud resultant d'utilitzar stristr()-> Aquesta funciona busca la posicio de la lletra que estic buscant i em retorna l'string restant, pel que al fer la resta em dona la diferencia que es on es troba la posicio de la lletra que esticu buscant.
		if ($pos==0) echo $linea . "<br><br>";
		//Li dic que si es 0, es a dir la S estaba al principi de la linia la mostri.
		}
      fclose($arxiu);
    ?>
  </main>
</body>
</html>