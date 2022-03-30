<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>import de fichier</title>
</head>
<body>
    <form action="index.php" method="POST" enctype="multipart/form-data">
    <h2>importer une image</h2>
    <input type="file" name="file">
    <p><button type="submit" name="importer">importer</button></p>
    </form>


<?php

    //fonction qui récupère le format du fichier (extension)
    function get_file_extension($file) {
        return substr(strrchr($file,'.'),1);
    }

    include('utils/connectBdd.php');
    include('utils/fonctions.php');

    $cpt = nbrImage($bdd);

    
if(isset($_POST['importer'])){
    if(isset($_FILES['file'])){
        $tmpName = $_FILES['file']['tmp_name'];
        $name = $_FILES['file']['name'];
        $size = $_FILES['file']['size'];
        $error = $_FILES['file']['error'];
        //récupération de l'extension
        $ext = get_file_extension($name);

        $nameFile ="image$cpt.$ext";

        move_uploaded_file($tmpName,"./image/$nameFile");

        $url = "./image/$nameFile";

        addImg($bdd, $nameFile, $url);

        $cpt++; 

        updateCpt($bdd, $cpt);
    }else{
        echo "y'as un soucis";
    }
}
    // afficherNbrImg($bdd);

?>


</html>