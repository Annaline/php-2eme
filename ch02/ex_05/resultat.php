<?php

$valeurADeviner = (int)$_POST['valeurADeviner'];
$valeurEntree   = (int)$_POST['nbr'];

$gagne = $valeurADeviner == $valeurEntree;

if ($gagne) {
    $titre = "You win";
} else {
    $titre = "You loose";
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title> <?= $titre ?> </title>
    <meta content="">
    <style></style>
  </head>
  <body>
 <?php
    if ($gagne) {
        echo "<h1>Vous avez gagné</h1>";
    } else {   
 ?>
    <h1>Vous avez perdu</h1>
    <a href="javascript:history.back()">Réessayer</a>
<?php 
}
?>
  </body>
</html>
