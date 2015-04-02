<!DOCTYPE html>
<?php
/* ---------------------------------------------------------------------
 *                         Récupération formulaire
 *
 * Auteur: AMN
 * Date: Mars 2015
 * Description: Ce programme récupère les données d'un formulaire
 * ---------------------------------------------------------------------
 */
 // Variables
 $nom = '';
 
 if (! empty($_GET['nom'])) {
     
    $nom = $_GET['nom'];
    
 } else {
     
   // Si on arrive ici, c'est que $_GET['nom'] n'est pas définit.
   // Ce qui veut dire qu'on vient peut-être de post.html
   
   if (! empty($_POST['nom'])) {
       
   $nom = $_POST['nom'];
   
    } else {
        
        $nom = 'Non définit, vous devez utiliser get.php ou post.php';
    }
 }
 
?>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Récupération formulaire</title>
  </head>
  <body>
      <h1>Voici la valeur transmise par l'utilisateur :</h1>
      <p>Nom :</p> <?= $nom ?>
  </body>
</html> 
