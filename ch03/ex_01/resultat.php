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

$montantMin    = $prixMaison * 0.2;
$pretTxUnique  = $prixMaison * 0.5;
$pret          = $prixMaison - $fondsPropres;
$premierRang   = $pret * 0.2;
$deuxiemeRang  = $pret * 0.8;
$interets1Rang = $premierRang * 3.5/100;
$interets2Rang = $deuxiemeRang * 2.5/100;

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
        echo "Vous ne disposez pas des fonds propres nécessaire.";
    } elseif ($fondsPropres > $prixMaison) {
        echo "Vous avez mis trop de fonds propres.";
    } elseif ($fondsPropres >= $pretTxUnique) {
        echo "Montant de la maison : ", $prixMaison;
        echo "<br>";
        echo "Montant de l'emprunt : ", $pret;
        echo "<br>";
        echo "Montant du second rang : ", $deuxiemeRang;
        echo "<br>";
        echo "Intérêts du second rang à un taux de 2.5% : ", $interets2Rang;
    }  elseif ($fondsPropres >= $montantMin) {
        echo "Montant de la maison : ", $prixMaison;
        echo "<br>";
        echo "Montant de l'emprunt : ", $pret;
        echo "<br>"; 
        echo "Montant du premier rang : ", $premierRang;
        echo "<br>";
        echo "Montant du second rang : ", $deuxiemeRang;
        echo "<br>";
        echo "Intérêts du premier rang à un taux de 3.5% : ", $interets1Rang;
        echo "<br>";
        echo "Intérêts du second rang à un taux de 2.5% : ", $interets2Rang;
    } 
?>

</body>
</html>
