<?php
    include './utils/connectBdd.php';
    include './model/model_user.php';
    include './view/view_connexion.php';
    //test si les champs sont complétés
    if(isset($_POST['login_user']) AND isset($_POST['mdp_user']) AND
    !empty($_POST['login_user']) AND !empty($_POST['mdp_user'])){
        //récup super globale post
        $login = $_POST['login_user'];
        $mdp = $_POST['mdp_user'];
        //récup du hash en bdd
        $hash = getUserByMail($bdd, $login);
        var_dump($hash);
        //test du mot de passe
        if(password_verify($mdp,$hash)){
            echo '<p>connecté</p>';
        }
        //si mauvais mdp
        else{
            echo '<p>Mauvais mdp</p>';
        }
    }
    else{
        echo '<p>Veuillez remplir le  formulaire</p>';
    }


?>