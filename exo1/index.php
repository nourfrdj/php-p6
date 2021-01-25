
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>partie6 ex1</title>
</head>
<body>
<form action="user.php" method="get">
<!-- novalidate permet d'envoyer le formulaire meme s'il y a des champs required qui ne sont pas remplis on l'utilise sur tout faire le test sur nos champs -->
 <!-- c'est la methode par défaut sauf si on ne veut pas que les paramètres soient ajoutés à l'URL !-->
 <p>Votre nom : <input type="text" name="name" /></p>//
 <p>Votre âge : <input type="text" name="age" /></p>
 <p><input type="submit" value="OK"></p>
</form>
</body>
</html>
