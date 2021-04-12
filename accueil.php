

<?php
include_once('commun.inc.php'); 
session_start();
var_dump($_SESSION);
if(array_key_exists('visites',$_SESSION)){
  $auteurs_vus='';
  foreach($_SESSION['visites'] as $numero=>$time){
    $auteurs_vus=$auteurs_vus . "-".$auteurs[$numero];//auteur1-auteur2-
  }
  $auteurs_vus=trim($auteurs_vus,'-');
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Accueil</title>
    <style>
    table { border-collapse: collapse; }
    table, td, th { border: 1px solid black; }
    td, th { padding: 4px; }
    </style>
  </head>
  <body>
    <div>
    <!-- Afficher le tableau des auteurs. -->
    <table>
    <tr><th>Auteurs</th></tr>
    <?php
    foreach ($auteurs as $numero => $auteur) {
      echo "<tr><td><a href=\"auteur.php?numero=$numero\">$auteur</a></td></tr>";
    }
    ?>
    </table>
    </div>
    <?php
  if(!empty($auteurs_vus)):
    var_dump($auteurs_vus)
 ?>
     <p>les trois auteurs consultés: <?php echo $auteurs_vus  ?></p>
     <?php
     endif;
     ?>
  </body>
</html>