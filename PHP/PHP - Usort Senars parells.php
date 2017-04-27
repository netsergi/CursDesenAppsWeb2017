<!DOCTYPE html>
<html>
<body>

<?php
function my_sort($a,$b)
{
if ($a==$b) return 0;
if ($a%2 == 0 && $b%2 == 0) return 0; // el deixa igual
if ($a%2 == 0 && $b%2 == 1) return -1; // -1 Deixa el primer en primer ordre
else return 1;  //  1 canvia el segon per el tercer.
}

$a=array(11,-4,8,6,-3,1,3,2,4,7);
usort($a,"my_sort");

$arrlength=count($a);
for($x=0;$x<$arrlength;$x++)
  {
  echo $a[$x];
  echo "<br>";
  }

?> 

</body>
</html>