<?php
/* ---------------------------------------------------------------------
 *                        Exercice 2-005                            
 * Nom du fichier: devine.php 
 * Auteur: AMN
 * Date: Avril 2015
 * Description: Ce script affiche un jeu                     
 * ---------------------------------------------------------------------
 */
// Variables
//
$nombre = 0;
const nbr_max = 5;
const nbr_min = 0;

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercice 2-005</title>
    </head>
<body>

    <h3>Jeu de devinette</h3>
    <p>Devinez le nombre entre 0 et 5</p>
    <form name="form1" method="post" action="resultat.php">
        <input type="text" name="nbr" />
        <p>
        <input type="submit" name="Submit" value="Tester">
        <br>
        </p>
    </form>
    
    <!-- int rand ([ int nbr_min ], int nbr_max ) -->

<?php

echo

?>

</body>
</html>
