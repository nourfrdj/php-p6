<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>partie6 exo8</title>
</head>

<body>
<!-- enctype='multipart/form-data :lorsque vous utilisez des formulaires dotés d'un contrôle de téléchargement de fichiers'-->
    <?php
    $varform = "  <form method='POST' action='index.php' enctype='multipart/form-data'> 
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
</div>";
    if (isset($_POST['envoyer'])) {
        //La fonction pathinfo () renvoie des informations sur le chemin de fichier
        //PATHINFO_EXTENSION retourne seulement l'extention du fichier 
       // $ext = pathinfo($_FILES['file_send'], PATHINFO_EXTENSION);
       //$imageinfos=explode("/",$_FILES['file_send']['type']);
       //un tableau qui contient les infos type du file_send et ils les separe avec les / donc index0 c'est le nom et l'index2 c'est l'extention du fichier
       //explode  pour convertir en tableau
       //inplode pour convertir en string

       $ext=$_FILES['file_send']['type'];
    
        if (strchr($ext,"pdf")){ //if (pathinfo($_FILES[file_send]['name])[extension]=='pdf']) 
            //mime_content_type($_FILES[file_send]['tmp_name]) cette fonction permet de verifier l'adn du fichier meme si on change son extention il recuperera l'originale
            echo 'bonjour  ' . $_POST['civility']. '  ';
            echo $_POST['firstname'] . '  ';
            echo $_POST['lastname'] . '<br>';
            echo 'le fichier a le nom de   '.$_FILES['file_send']['name'];
            $varform = "";
            echo $varform;
          
        }
        else
        {
         echo " hooooooooooo c'est pas un fichier pdf ";
        }
       
    } else {
        echo $varform;
    }
    ?>
</body>

</html>