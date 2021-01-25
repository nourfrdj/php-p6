<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>partie6 exo5</title>
</head>

<body>
<?php
  if(isset($_POST['envoyer']) && ( !empty($_POST['firstname'])) && (!empty($_POST['lastname']))) {
    echo $_POST['firstname'];
    echo $_POST['lastname'];
    echo $_POST['civility'];
  }
else { ?>
   <form method='POST' action='index.php'>
  <p> Civilité : <select name='civility' id='civility'>
      <option value=''>Veuillez selectionner svp</option>
      <option value='Madame'>Madame</option>
      <option value='Monsieur'>Monsieur</option>
    </select></p>
  <p>Votre nom : <input type='text' name='firstname' /></p>
  <p>Votre prenom : <input type='text' name='lastname' /></p>
  <p><input type='submit' value='envoyer' name='envoyer'></p>
  </form>
  </div>
 <?php  } ?>
 
</body>

</html>