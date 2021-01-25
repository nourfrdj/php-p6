<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <title>partie6 exo5</title>
</head>

<body>
  <form method="POST" action="profile.php" enctype="multipart/form-data">
    <!-- multipart/form-data permet d'expedier un ficher attaché au message -->
    <p>
    <INPUT type= "radio" name="Civility" value="Mr"> Mr
    </p>

    <p>
    <INPUT type= "radio" name="Civility" value="Mme"> Mme
    </p>
    <p>Votre nom : <input type="text" name="firstname" /></p>
    <p>Votre prenom : <input type="text" name="lastname" /></p>
    <p>date de naissaice : <input type="date" name="birth"></p>
    <p><input type="file" id="picture" name="picture"/></p>
        <p><input type="submit" value="submit" name="envoyer"></p>
  </form>
  </div>
</body>