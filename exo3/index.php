<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>partie6 ex1</title>
</head>

<body>
    <form action="user.php" method="get">
        <!-- c'est la methode par défaut sauf si on ne veut pas que les paramètres soient ajoutés à l'URL !-->
        <p>Votre nom : <input type="text" name="name" /> <?= $_GET['lastname'] ?? 'renseigner votre nom svp' ?></p>
        <p>Votre âge : <input type="text" name="age" /> </p>
        <p><input type="submit" value="OK"></p>
    </form>
</body>

</html>