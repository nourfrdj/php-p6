<?php
$firstname = $_POST["firstname"];
$lastname  = $_POST["lastname"];
$Civility = $_POST["Civility"];
$birth = $_POST["birth"];


if (isset($_POST['envoyer'])  && (!empty($_POST['firstname'])) && (!empty($_POST['lastname'])) && (!empty($_POST['Civility']))) {
    $ext = $_FILES["picture"]['type'];
    if ((strchr($ext, "jpg")) || (strchr($ext, "png")) || (strchr($ext, "jpeg"))) {
        // echo "c'est bien une image";
        move_uploaded_file($_FILES['picture']['tmp_name'], 'images/' . basename($_FILES['picture']['name']));
                             // nom du fichier temporaire  nom du dossier repertoire   , nom du nouveau fichier
        $pic_name = $_FILES["picture"]["name"];
        echo "bonjour $Civility $firstname $lastname voici la photo que vous avez utilisé pour votre inscription <br>";
        //echo" <img src='images/'".$_FILES["picture"]["name"]."' >";
        echo '<img src="images/' . $_FILES["picture"]["name"] . '" />';
    } else {
        echo "votre photo doit etre de type image";
    }
} else {
    //header('Location': index.php)redirection vers index.php 
    //exit;
    echo "oups ! suite au grand nombre de visitueur actuellement il est impossible de creer votre compte  veuillez réessayer ulterieurement";
}
