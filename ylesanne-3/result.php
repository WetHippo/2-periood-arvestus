<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>II perioodi arvestustöö - Ülesanne 3 - POST päringu tagasiside</title>
  </head>
  <body>
  	<?php 
      $username = $_POST["username"];
      $sex = $_POST["sex"];
    ?>
    <!-- Kustuta see funktsioon (print_r() koos <pre> elemendiga) pärast seda, kui oled veendunud, et programm töötab. -->
    <pre><?php print_r($_POST); ?></pre>
    <?php if (isset($username) && strlen($username) > 0 && isset($sex)) {
      echo "Tere {$username}! Tundub et olete {$sex}";
  	}
    elseif (empty($sex) && empty($username)) {
      echo "Palun minge tagasi ja täitke väljad.";
     } 
    elseif (empty($sex)) {
     	echo "Palun minge tagasi ja valige sugu.";
     }
    else {
     	echo "Palun minge tagasi ja sisestage nimi.";
     }

    //echo "Tundub, et sattusid siia otseteed pidi.";
  ?>
    </br><div><a href="index.php">Back</a></div>
  </body>
</html>