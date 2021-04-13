<?php 
  session_start();
  //générer le jéton CSRF - à faire
  
  //vérifier si $_SESSION["membre-add-form-donnees"] n'est pas vide
  $prenom = "";
  $age = "";
  $taille = "";
  $genre = "";
  $isHomme = false;
  $isFemme = false;
  if(isset($_SESSION["membre-add-form-donnees"]) && count($_SESSION["membre-add-form-donnees"]) > 0){
    //var_dump($_SESSION["membre-add-form-donnees"]);
    $prenom = $_SESSION["membre-add-form-donnees"]["prenom"];
    $age = $_SESSION["membre-add-form-donnees"]["age"];
    $taille = $_SESSION["membre-add-form-donnees"]["taille"];
    $genre = $_SESSION["membre-add-form-donnees"]["genre"];
    //$_SESSION["membre-add-form-donnees"] = null;
    unset($_SESSION["membre-add-form-donnees"]);
    $isHomme = $genre == "Homme" ? true : false;
    $isFemme = $genre == "Femme" ? true : false;
  }
  if (isset($_SESSION["membre-add-form-erreurs"]) && count($_SESSION["membre-add-form-erreurs"]) > 0) {
    // var_dump($_SESSION["membre-add-form-erreurs"]);
    $prenomMsgErreur = isset($_SESSION["membre-add-form-erreurs"]["prenom"]) ? $_SESSION["membre-add-form-erreurs"]["prenom"] : '';
    $ageMsgErreur = isset($_SESSION["membre-add-form-erreurs"]["age"]) ? $_SESSION["membre-add-form-erreurs"]["age"] : '';
    $tailleMsgErreur = isset($_SESSION["membre-add-form-erreurs"]["taille"]) ? $_SESSION["membre-add-form-erreurs"]["taille"] : '';
    $genreMsgErreur = isset($_SESSION["membre-add-form-erreurs"]["genre"]) ? $_SESSION["membre-add-form-erreurs"]["genre"] : '';
    unset($_SESSION["membre-add-form-erreurs"]); //flash message
  }
  if(isset($_SESSION["membre-add-form-erreur-sql"])){
    $erreurSQL = "Serveur HS";
    unset($_SESSION["membre-add-form-erreur-sql"]);
  }
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
    <?php if(isset($erreurSQL)): ?>
      <div class="alert alert-danger" role="alert">
        <?php echo $erreurSQL; ?>
      </div>
    <?php endif; ?>
    <!-- <div class="alert alert-danger <?php //if(!isset($erreurSQL)) echo 'd-none'; ?>" role="alert">
      <?php //if(isset($erreurSQL)) echo $erreurSQL; ?>
    </div> -->
    <form action="membre-add-form-traitement.php" method="post">
      <div class="form-group">
        <label for="prenom">Prénom</label>
        <input type="text" class="form-control <?php if(isset($prenomMsgErreur) && !empty($prenomMsgErreur)) echo "is-invalid"; ?>" id="prenom" name="prenom" 
                              value="<?php echo $prenom ?>" aria-describedby="prenomFeedback" >
        <div id="prenomFeedback" class="invalid-feedback">
          <?php echo $prenomMsgErreur; ?>
        </div>
      </div>
      <div class="form-group">
        <label for="age">Age</label>
        <input type="number" class="form-control <?php if(isset($ageMsgErreur) && !empty($ageMsgErreur)) echo "is-invalid"; ?>" id="age" name="age"
                              value="<?php echo $age ?>" aria-describedby="ageFeedback">
        <div id="ageFeedback" class="invalid-feedback">
          <?php echo $ageMsgErreur; ?>
        </div>
      </div>
      <div class="form-group">
        <label for="taille">Taille</label>
        <input type="number" class="form-control <?php if(isset($tailleMsgErreur) && !empty($tailleMsgErreur)) echo "is-invalid"; ?>" id="taille" name="taille" step="0.01"
                              value="<?php echo $taille ?>" aria-describedby="tailleFeedback">
        <div id="tailleFeedback" class="invalid-feedback">
          <?php echo $tailleMsgErreur; ?>
        </div>
      </div>
      <div class="form-check form-check-inline  <?php if(isset($genreMsgErreur) && !empty($genreMsgErreur)) echo "is-invalid"; ?>" aria-describedby="genreFeedback">
        <input class="form-check-input" type="radio" name="genre" id="genre_homme" value="Homme" <?php if ($isHomme) {
          echo "checked";
        }?>>
        <label class="form-check-label" for="genre">Homme</label>
      </div>
      <div class="form-check form-check-inline <?php if(isset($genreMsgErreur) && !empty($genreMsgErreur)) echo "is-invalid"; ?>" aria-describedby="genreFeedback">
        <input class="form-check-input" type="radio" name="genre" id="genre_femme" value="Femme" <?php if ($isFemme) {
          echo "checked";
        }?>>
        <label class="form-check-label" for="genre">Femme</label>
      </div>
      <div id="genreFeedback" class="invalid-feedback">
          <?php echo $genreMsgErreur; ?>
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