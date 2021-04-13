<?php
include_once('commun.inc.php');

$numero = filter_input(INPUT_GET,'numero',FILTER_VALIDATE_INT); 
if (is_int($numero) and array_key_exists($numero,$auteurs)) {
  $auteur = $auteurs[$numero];
  //demarrer la session
  session_start();
  //memoriser le temps unix de la derniere visite de l'utilisateur
  $_SESSION['visites'][$numero]=time();//50, 48, 78, 54
  // var_dump($_SESSION['visites']);
  //trier  les trois premiers éléments du tableau des auteurs visités, attention a preserver les clés.
    arsort($_SESSION['visites'], SORT_NUMERIC);//78, 54, 50, 48
    // var_dump($_SESSION['visites']);
    $_SESSION['visites']=array_slice($_SESSION['visites'], 0,3,true);
    // var_dump($_SESSION['visites']);
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Auteur</title>
  </head>
  <body>
    <h1><?= isset($auteur)?$auteur:'Auteur introuvable' ?></h1>
    <p><a href="accueil.php">Retour à la liste</a></p>
  </body>
</html>