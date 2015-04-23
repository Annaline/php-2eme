<?php
/* ---------------------------------------------------------------------
 *                        Exercice 3-001                            
 * Nom du fichier: immobilier.php 
 * Auteur: AMN
 * Date: Avril 2015
 * ---------------------------------------------------------------------
 */
// Variables
//
$prixMaison   = $_POST['prix'];
$fondsPropres = $_POST['fonds'];

$montantMin  = $prixMaison * 0.2 ;
$montantPret = $prixMaison * 0.5 ;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercice 3-001</title>
    </head>
<body>

<?php
    if ($fondsPropres < $montantMin) {
        echo "Vous ne disposez pas des fonds propres nécessaire";
    }

// Ca ne s'affiche pas (?)     
    if ($fondsPropres => $montantPret) {
        echo "Montant de l'emprunt : " $prixMaison;
        echo "<br>";
        echo "Montant du premier rang : " $montantMin;
        echo "<br>";
        echo "Montant du second rang : " $montantPret;
        echo "<br>";
        echo "Intérêts du premier rang à un taux de 3.5% : " ;
        echo "<br>";
        echo "Intérêts du second rang à un taux de 2.5% : " ;
        
    }
    

?>

</body>
</html>
