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
 $login   = $_POST['identifiant'];
 $mdp     = $_POST['mdp'];
 $majeur  = $_POST['majeur'];
 
 $sexe    = 'non renseigné';
 
 if (isset($_POST['genre'])) {
     $sexe = $_POST['genre'];
 }


 $lettre  =  isset($_POST['lettre']) ? $_POST['lettre'] : 0;
 $membre  =  isset($_POST['membre']) ? $_POST['membre'] : 0;
?>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Récupération formulaire</title>
  </head>
  <body>
      <!-- Affiche les valeurs remplies -->
      Votre login: <?= $login ?></br>
      Votre mot de passe: <?= $mdp ?></br>
      Majeur: <?= $majeur ?></br>
      Type: <?= $sexe ?></br>
      Lettre de nouvelle: <?= $lettre ?></br>
      Membre de soutien: <?= $membre ?></br>
  </body>
</html>
