<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>partie6 exo 3</title>
</head>
<body>
<?php
//les données du formulaire sont stockées dans le tableau de variable superglobal $_GET[] du coup on recupere l'element du tableau dont l'index est $_GET['name']
    $name = $_GET['name'];
    $age  = $_GET['age'];
    echo "$name $age"
    ?>
</body>
</html>