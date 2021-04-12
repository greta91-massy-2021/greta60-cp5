<?php
  var_dump($_POST);
  $html = '';
  if (isset($_POST['nom']) && !empty($_POST['nom'])) {
    //protection contre les attaques XSS
    $nom = htmlspecialchars($_POST['nom'], ENT_QUOTES); //< => &lt; > => &gt; "'/
    $html = $html . '<p>Bonjour ' . $nom .'</p>';
  }
  if (isset($_POST['sel']) && !empty($_POST['sel'])) {
    foreach ($_POST['sel'] as $fruit) {
      //protection contre les attaques XSS
      $fruit = htmlspecialchars($fruit, ENT_QUOTES);
      $html = $html . '<p>vous avez choisi ' . $fruit .'</p>';
    }
  }
  echo $html;
  //http://greta60cda3/form-traitement.php?nom=test&sel=Fraise
?>
