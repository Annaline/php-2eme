<!DOCTYPE html>
<?php
/* ---------------------------------------------------------------------
 *                         Hello World!
 *
 * Auteur: PKR
 * Date: Janvier 2006
 * Description: Ce programme affiche des variables
 * ---------------------------------------------------------------------
 */
 // Variables
 $nom = 'Chapline';
 $ville = 'Vevey';
 $pays = 'Suisse';
 $operation = '';
?>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Premier programme en PHP</title>
  </head>
  <body>
    <?php
	echo "Bonjour <strong>$nom</strong> ! <br> Vous habitez à $ville en $pays<br><br>";
	
    echo 'Bonjour <strong>' . $nom . '</strong> !<br>Vous habitez à ' . $ville .
         ' en ' . $pays . '<br><br>';
    
    // Autre façon de faire : utiliser la fonction printf
    printf('Bonjour <strong>%s</strong> !<br>Vous habitez à %s en %s<br><br>',
            $nom, $ville, $pays);
            
    $operation = strlen($nom);
    echo "strlen avec la variable \$nom
    ?>
  </body>
</html>	
