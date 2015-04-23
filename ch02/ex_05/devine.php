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
const NBR_MAX = 5;
const NBR_MIN = 0;

$nombre = rand(NBR_MIN, NBR_MAX);

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
        <input type="text" name="nbr">
        <p>
        <input type="submit" name="Submit" value="Tester">
        <br>
        </p>
        <input type="hidden" name="valeurADeviner" value="<?= $nombre ?>">
    </form>

</body>
</html>
