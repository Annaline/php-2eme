<!DOCTYPE html>
<?php
/* ---------------------------------------------------------------------
 *                         Hello World!
 *
 * Auteur: PKR
 * Date: Janvier 2006
 * Description: Ce programme affiche des opérations
 * ---------------------------------------------------------------------
 */
 $nom = 'Gaston Lagaffe';
 $var1 = 10;
 $var2 = 3.3;
 $operation = 0;
?>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Opérateurs</title>
  </head>
  <body>
    <?php
    // Affiche la chaîne de caractère
    // <br> Permet de faire un saut à la ligne, c'est une balise HTML
    echo "Bonjour <strong>$nom</strong>! <br>";
    $operation = $var1 + $var2;
    echo "var1 + var2 = $operation<br>";
    
    $operation = $var1 % $var2;
    echo "var1 % var2 = $operation<br>";
    
    $operation = round($var1 / $var2);
    echo "var1 / var2 = $operation<br>";
    
    $var1 = + 20;
    echo "Incrémentation de 20 pour var1: $var1<br>";
    
    $var1 = + 1;
    echo "Incrémentation de 1 pour var1: $var1<br>";
    
    $var1 = (int)$var2;
    echo "var1 vaut la valeur entière de var2: $var1<br>";
    ?>
  </body>
</html>
