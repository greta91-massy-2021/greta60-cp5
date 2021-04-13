<?php 
  session_start();
  //var_dump($_POST);
  //récupérer les données
  // if (isset($_POST['prenom'])) {
  //   $prenom = $_POST['prenom'];
  // }
  $prenom = isset($_POST['prenom']) ? trim($_POST['prenom']) : ''; 
  $age = isset($_POST['age']) ? $_POST['age'] : '';
  $taille = isset($_POST['taille']) ? $_POST['taille'] : '';
  $genre = isset($_POST['genre']) ? $_POST['genre'] : '';
  //Initialiser le tableau $erreurs
  $erreurs = [];
  //valider les données
    //valider $prenom
    if(empty($prenom)){
      //ajouter un message d'erreur dans le tableau $erreurs
      $erreurs["prenom"] = "le prénom est obligatoire";
    }
  //si echec de validation,
    //rediriger vers la page de formulaire avec des messages d'erreur et les données saisies
    if (count($erreurs) > 0) {//si le tableau $erreurs n'est pas vide
      $_SESSION["membre-add-form-donnees"]["prenom"] = $prenom;
      $_SESSION["membre-add-form-donnees"]["age"] = $age;
      $_SESSION["membre-add-form-donnees"]["taille"] = $taille;
      $_SESSION["membre-add-form-donnees"]["genre"] = $genre;
      $_SESSION["membre-add-form-erreurs"] = $erreurs;
      header("location: membre-add-form.php");//redirection avec le code HTTP 302
    }
    
  //sinon,
    //on stocke les données dans la BDD
    //redirection vers la page d'accueil
?>