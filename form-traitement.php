<?php
  var_dump($_GET);
  $html = '';
  if (isset($_GET['nom']) && !empty($_GET['nom'])) {
    //protection contre les attaques XSS
    $nom = htmlspecialchars($_GET['nom'], ENT_QUOTES); //< => &lt; > => &gt; "'/
    $html = $html . '<p>Bonjour ' . $nom .'</p>';
  }
  if (isset($_GET['sel']) && !empty($_GET['sel'])) {
    foreach ($_GET['sel'] as $fruit) {
      //protection contre les attaques XSS
      $fruit = htmlspecialchars($fruit, ENT_QUOTES);
      $html = $html . '<p>vous avez choisi ' . $fruit .'</p>';
    }
  }
  echo $html;
  //http://greta60cda3/form-traitement.php?nom=test&sel=Fraise
?>
