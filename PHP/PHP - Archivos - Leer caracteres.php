<?php
	$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
	$txt = "";
	$vocales = "aAeEiIoOuU";

	 for ($x = 0;$x<filesize("webdictionary.txt");$x++)
	 {
	 	 	$txt = fread($myfile, 1);
	 	 	if (!preg_match('/[aAeEiIoOuU]/',$txt)) { echo $txt; }
	 	 	else { echo " "; }
	 }
	 fclose($myfile);
?>