<?php 
    include './view/view_header.php';
    include './utils/connectBdd.php';
    include './model/model_user.php';
    include './view/view_adduser.php';


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

    include './view/view_footer.php';
?>
