<!DOCTYPE html>
<?php
/**
* Ce script est notre premier, y en a pas deux comme lui
* 
* @author amn <annaline.mosimann@cpnv.ch>
* @date 2015.02.19 
*/


// Variables
$mon_nom = 'Annaline Mosimann';
$adresse_email = '';


// Constantes
define('SERVER', 'localhost');


// Début du code

echo "Mon nom est : $mon_nom";

// Fin du code

?>
<html lang="fr">
    <head>
        
        <meta charset="utf-8">
        <title>Ma première page</title>
        
    </head>
    
    <body>
        
        Tant qu'on est pas dans du code php,
        <br>
        ces lignes seront imprimées telle quelles
        
        
        <?php

        echo "Bonjour de la commande echo\n";

        ?>
        <br>
        Et encore une autre ligne
    
    
    
    
    
    </body>

</html>
