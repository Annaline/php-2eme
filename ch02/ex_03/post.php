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
 
?>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Formulaire</title>
  </head>
  <body>
      <form name="form1" method="post" action="./traite.php">
            <p> Nom
            <br />
                <input id="login" type="text" name="nom" size="15" maxlength="30"/>
            </p>
            <input type="submit" value="S'inscrire" />
      </form>     
  </body>
</html> 
