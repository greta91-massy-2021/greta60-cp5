<?php 
  session_start();
  var_dump($_SESSION["membre-add-form-donnees"]);
  var_dump($_SESSION["membre-add-form-erreurs"]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ajouter un membre</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <h1>Ajouter un membre</h1>
    <form action="membre-add-form-traitement.php" method="post">
      <div class="form-group">
        <label for="prenom">Prénom</label>
        <input type="text" class="form-control" id="prenom" name="prenom">
      </div>
      <div class="form-group">
        <label for="age">Age</label>
        <input type="number" class="form-control" id="age" name="age">
      </div>
      <div class="form-group">
        <label for="taille">Taille</label>
        <input type="number" class="form-control" id="taille" name="taille" step="0.01">
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="genre" id="genre_homme" value="Homme">
        <label class="form-check-label" for="genre">Homme</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="genre" id="genre_femme" value="Femme">
        <label class="form-check-label" for="genre">Femme</label>
      </div>
      <div class="form-group my-3">
        <button type="submit" class="btn btn-primary">Envoyer</button>
      </div>
      
    </form>
  </div>
  
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>