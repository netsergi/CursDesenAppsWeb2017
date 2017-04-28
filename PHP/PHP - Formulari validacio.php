<!DOCTYPE HTML>  
<html>
<head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
  .error {color: #FF0000;}
  body { padding: 10px; }
  .w3-note { padding: 5px; }
  label { background-color: red; padding: 5px;
          color: white;
          margin: 0px 5px 0px 0px;
          font-weight: bold;
          border-radius: 5px;
          *overflow: hidden;
          vertical-align: baseline;

           }
</style>
</head>
<body>  

  <?php
 
  $nameErr = $emailErr = $genderErr = $websiteErr = "";
  $name = $email = $edad = $gender = $comment = $website = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
      $nameErr = "Name is required";
    } else {
      $name = test_input($_POST["name"]);
    }
    
    if (empty($_POST["email"])) {
      $emailErr = "Email is required";
    } else {
      $email = test_input($_POST["email"]);
    }

    if (empty($_POST["edad"])) {
      $edaderr = "Edad is required";
    } else {
        $edad = test_input($_POST["edad"]);
        if ($edad < 18) $edaderr = "Edad ha de ser superior a 18";      
    }        
      
    if (empty($_POST["website"])) {
      $website = "";
    } else {
      $website = test_input($_POST["website"]);
    }

    if (empty($_POST["comment"])) {
      $comment = "";
    } else {
      $comment = test_input($_POST["comment"]);
    }

    if (empty($_POST["gender"])) {
      $genderErr = "Gender is required";
    } else {
      $gender = test_input($_POST["gender"]);
    }
  }

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  ?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  <label for="name">Name </label><input type="text" name="name" value="<?php echo $_POST["name"]; ?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  <label for="email">E-mail </label> <input type="text" name="email" value="<?php echo $_POST["email"]; ?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  <label for="website">Website </label><input type="text" name="website" value="<?php echo $_POST["website"]; ?>">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  <label id="com" for="comment">comment </label> <textarea name="comment" rows="5" cols="40"><?php echo $_POST["comment"]; ?></textarea>
  <br><br>
  <label for="edad">Edad </label><input type="text" name="edad" value="<?php echo $_POST["edad"]; ?>">
  <span class="error">* <?php echo $edaderr;?></span>  
  <br><br>
  <label for="gender">Gender </label>
  <input type="radio" name="gender" value="female" <?php 
    echo $gender == "female"? checked: ""; ?>>Female
  <input type="radio" name="gender" value="male" <?php 
    echo $gender == "male"? checked: ""; ?>>Male
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
echo "<br>";
echo $edad;
?>

</body>
</html>