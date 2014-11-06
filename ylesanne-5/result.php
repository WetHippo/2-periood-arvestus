<?php session_start(); ?>
<?php
    $username = $_SESSION["username"]; 
    $password = $_SESSION["password"]; 
?>
<!DOCTYPE html>
<html lang="en">
 <head>
 <meta charset="UTF-8">
 <title>II perioodi arvestustöö - Ülesanne 5 - Sessiooni tagasiside</title>
 </head>
 <body>
 <a href="index.php">Back</a> </br>
 <?php 
 $validUsername = $_SESSION["username"];
 $validPassword = $_SESSION["password"];
 if (($validUsername == "Marko") && ($validPassword == "258789753")){
 echo "Kasutajanimi ja parool on õiged.";
 }
 else{
 echo "Kasutajanimi ja/või parool ei klapi.";
 }
 ?>
 </body>
</html>