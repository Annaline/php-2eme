<!DOCTYPE html>
<?php
/* ---------------------------------------------------------------------
 *                         Hello World!
 *
 * Auteur: AMN
 * Date: Mars 2015
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
    <title>Exercice 8</title>
  </head>
  <body>
    <pre>
	REMOTE_ADDR:          <?= $_SERVER['REMOTE_ADDR'] ?><br>
    HTTP_HOST:            <?= $_SERVER['HTTP_HOST'] ?><br>
    HTTP_ACCEPT_LANGUAGE: <?= $_SERVER['HTTP_ACCEPT_LANGUAGE'] ?><br>
    DOCUMENT_ROOT:        <?= $_SERVER['DOCUMENT_ROOT'] ?><br>
    SERVER_NAME:          <?= $_SERVER['SERVER_NAME'] ?><br>
    PHP_SELF:             <?= $_SERVER['PHP_SELF'] ?><br>
    SERVER_SOFTWARE:      <?= $_SERVER['SERVER_SOFTWARE'] ?><br>
    SERVER_PROTOCOL:      <?= $_SERVER['SERVER_PROTOCOL'] ?><br>
    </pre>
  </body>
</html>
