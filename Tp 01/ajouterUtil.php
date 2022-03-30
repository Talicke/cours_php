<?php
    include "inc/header.php";
    include "inc/connecteBdd.php";
    include "inc/fonctions.php"
?>

<div class="container">
    <h1> Ajouter un utilisateur</h1>
</div>


<div class="container">
    <form method="post" action="" enctype="multipart/form-data">
        <label class="form-label" for="nom">Votre nom :</label> 
        <input class="form-control" type="text" name="nom">

        <label class="form-label" for="prenom">Votre prenom :</label>
        <input class="form-control" type="text" name="prenom">

        <label class="form-label" for="mail">Votre mail :</label>
        <input class="form-control" type="mail" name="mail">

        <label class="form-label" for="mdp">Votre mot de passe :</label>
        <input class="form-control" type="password" name="password">

        <label class="form-label" for="img">Choissiez une PP:</label>
        <input class="form-control" type="file" name="img">

        <input class="btn btn-primary m-3" type="submit" name="valider" value="Valider">
    </form>
</div>

<?php

    if(isset($_POST["valider"])){

        if(!empty($_FILES['img']['name'])){
            $tmpName = $_FILES['img']['tmp_name'];
            $name = $_FILES['img']['name'];
            $size = $_FILES['img']['size'];
            $error = $_FILES['img']['error'];
            $url ="./img/$name";
            $move = move_uploaded_file($tmpName, $url);
        }else{
            $url= "./img/default.jpg";
        }

        if(!empty($_POST["nom"]) AND !empty($_POST['prenom']) AND !empty($_POST["mail"]) AND !empty($_POST['password'])){
            ajouterUtil($bdd, $_POST['nom'], $_POST['prenom'], $_POST['mail'], $_POST['password'], $url);
        }else{
            echo 
                '<div class="alert alert-warning container"> Tous les champs doivent être remplis </div>';
        }
    }
?>





<?php
    include "inc/footer.php"
?>