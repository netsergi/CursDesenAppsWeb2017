<?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
$numl = 0;
$txt = "";
while(!feof($myfile)) {
  $txt = fgets($myfile);
  echo $txt . " / Longintud: <h3 style='display: inline;'>" . strlen($txt). "</h2><br><br>";
  
  $numl++;
}
fclose($myfile);
?>
<br>
<h2 Style='border: 1px solid black;padding:5px; width: 300px;'>Num linies: <?php echo $numl ?></h2>