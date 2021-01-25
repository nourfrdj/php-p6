<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>partie6 exo5</title>
</head>

<body>
  <form method="POST"> <!-- si on ne fait rien pour le action il reste dur la meme page par defeut -->
    <p> Civilité : <select name="civility" id="civility">
        <option value="">Veuillez selectionner svp</option>
        <option value="Madame">Madame</option>
        <option value="Monsieur">Monsieur</option>
      </select></p>
    <p>Votre nom : <input type="text" name="firstname" /></p>
    <p>Votre prenom : <input type="text" name="lastname" /></p>
    <p><input type="submit" value="envoyer" onclick="index.php"></p>
  </form>
  <?php
  $firstname = $_POST['firstname'];
  $lastname  = $_POST['lastname'];
  $civility = $_POST['civility'];
  if ($_POST['firstname'] == "" && $_POST['lastname'] == "" && $_POST['civility'] == "") {
  echo("jhgfhj");
  } else {
    echo "<h1> Bienvenue! $civility $firstname $lastname </h1>";
  }

  ?>
</body>


</html>