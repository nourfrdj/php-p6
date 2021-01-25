<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>partie6 exo5</title>
</head>

<body>
<!-- enctype='multipart/form-data :lorsque vous utilisez des formulaires dotés d'un contrôle de téléchargement de fichiers'-->
 
   <?php if (isset($_POST['envoyer'])) { ?>
   <p> bonjour  <?= $_POST['civility'] ?></p>
    <p> votre nom est :<?= $_POST['firstname'] ?> </p>
      <p>  votre prenom est :<?= $_POST['lastname'] ?></p>
    <p> et votre nom est : <?= $_FILES['file_send']['name']?></p>

    <?php } else { ?>
        <form method='POST' action='index.php' enctype='multipart/form-data'> 
<p> Civilité : <select name='civility' id='civility'>
    <option value=''>Veuillez selectionner svp</option>
    <option value='Madame'>Madame</option>
    <option value='Monsieur'>Monsieur</option>
  </select></p>
<p>Votre nom : <input type='text' name='firstname' /></p>
<p>Votre prenom : <input type='text' name='lastname' /></p>
<p><input type='file' id='file_send' name='file_send'/></p>
<p><input type='submit' value='envoyer' name='envoyer'></p>
</form>
    <?php } ?> 
</body>
</html>