<?php
/* ---------------------------------------------------------------------
 *                        Test PHP                           
 * Nom du fichier: resultat.php 
 * Auteur: AMN
 * Date: Mai 2015
 * ---------------------------------------------------------------------
 */
// Variables
//
$nbrEntrer = filter_input(INPUT_POST, 'nbrEntrer', FILTER_SANITIZE_NUMBER_INT); // RÉCUPÉRATION DE LA SAISIE

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Test PHP</title>
        <style>
        table {
            border-collapse: collapse;
        }
        table, tr, td, th {
            border: 1px solid black;
        }
        </style>
    </head>
    
    <body>

<?php

    if ($nbrEntrer < 2 || $nbrEntrer > 16) {
        
        echo "Vous devez saisir un nombre entre 2 et 16"; // MESSAGE D'ALERTE EN CAS DE MAUVAISE SAISIE
        
    } else { // AFFICHE LE TABLEAUX D'ADDITION
        
        echo "<table>\n";
        
        echo "<tr>\n";
        
        echo "<th>+</th>\n";
        
        for ($i = 0; $i < $nbrEntrer; $i++) {
            echo "<th>$i</th>\n";
        }
        
        echo "</tr>\n";
        
        // LA PREMIÈRE LIGNE EST TERMINÉE
        // ON COMMENCE LE RESTE DE LA TABLE
        
        for ($i = 0; $i < $nbrEntrer; $i++) {
            
            // ON COMMENCE UNE NOUVELLE LIGNE
            echo "<tr>\n";
            echo "<th>$i</th>\n";
            
            for ($j = 0; $j < $nbrEntrer; $j++) {
            
                $calcul = $j + $i ;
                $resultat = base_convert ( $calcul , 10 , $nbrEntrer ); // FONCTION QUI RETOURNE LES RÉSULTATS EN BINAIRE
                
                echo "<td>$resultat</td>\n";
            }
            
            echo "</tr>\n";
        }
        
        echo "</table>\n";
        // FIN DU TABLEAU D'ADDITION
        
        echo "<br>";
        echo "<br>";
        echo "<br>";
        
        // AFFICHE LE TABLEAU DE MULTIPLICATION
        
        echo "<table>\n";
        
        echo "<tr>\n";
        
        echo "<th>x</th>\n";
        
        for ($i = 0; $i < $nbrEntrer; $i++) {
            echo "<th>$i</th>\n";
        }
        
        echo "</tr>\n";
        
        // LA PREMIÈRE LIGNE EST TERMINÉE
        // ON COMMENCE LE RESTE DE LA TABLE
        
        for ($i = 0; $i < $nbrEntrer; $i++) {
            
            // ON COMMENCE UNE NOUVELLE LIGNE
            echo "<tr>\n";
            echo "<th>$i</th>\n";
            
            for ($j = 0; $j < $nbrEntrer; $j++) {
            
                $calcul = $j * $i;
                $resultat = base_convert ( $calcul , 10 , $nbrEntrer ); // FONCTION QUI RETOURNE LES RÉSULTATS EN BINAIRE
                
                echo "<td>$resultat</td>\n";
            }
            
            echo "</tr>\n";
        }
        
        echo "</table>\n";
        // FIN DE LA TABLE DE MULTIPLICATION
    }
    
?>
    </body>
</html>
