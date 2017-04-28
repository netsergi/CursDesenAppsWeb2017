
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <style type="text/css">
    div { width: 350px; margin: 40px auto;
          padding: 10px; }
    .w3-note { padding: 5px;
               box-shadow: 2px 2px 2px #ccc; }

  </style>
</head>
<body>
<div class="w3-pannel w3-card w3-padding-16">
  <?php
  $cars = array
    (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
    );
    $suma = 0; 

    for ($row = 0; $row < 4; $row++): ?>

    <?php if ($cars[$row][1] > 10): ?>  
        <p class="w3-note w3-blue"><b>Row number <?php echo $row ?></b></p>
        <ul>
        <?php for ($col = 0; $col < 3; $col++): ?>
          <li><?php echo $cars[$row][$col] ?></li>
        <?php endfor ?>
        </ul>
        <?php $suma += $cars[$row][2]; ?>
    <?php endif ?> 

  <?php endfor ?>
    <hr><p class="w3-note w3-red"><b>Suma total de cotxes venuts:</b></p>
    <div style="width: auto; text-align: center;padding: 0px; margin: 0;">
    <span class="w3-badge w3-blue w3-xlarge"><?php echo $suma ?></span>
    </div>
</div>
</body>
</html>