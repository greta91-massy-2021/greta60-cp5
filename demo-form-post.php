<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Demo - formulaire</title>
</head>
<body>
  <form action="form-traitement-post.php" method="post">
    <label for="nom">Nom</label>
    <input type="text" name="nom" id="nom">

    <label for="age">Age</label>
    <input type="number" name="age" id="age">

    <label for="fruits">Choissisez les fruits</label>
    <select name="sel[]" id="fruits" multiple>
      <option>Fraise</option>
      <option>Pomme</option>
      <option>Poire</option>
      <option>Banane</option>
      <option>Cerise</option>
    </select>
    <input type="submit" value="Envoyer">
  </form>
</body>
</html>
XSS -> Cross Site Scripting 