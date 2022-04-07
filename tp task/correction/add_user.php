<?php
    include './utils/connectBdd.php';
    include './model/model_user.php';
    include './view/view_create_user.php';
    //test champs
    if(isset($_POST['name_user']) AND isset($_POST['first_name_user'])
    AND isset($_POST['login_user']) AND isset($_POST['mdp_user'])AND 
    !empty($_POST['name_user']) AND !empty($_POST['first_name_user']) AND
    !empty($_POST['login_user']) AND !empty($_POST['mdp_user'])){
        //post -> variable
        $nom = $_POST['name_user'];
        $prenom = $_POST['first_name_user'];
        $login = $_POST['login_user'];
        $mdp = $_POST['mdp_user'];
        //option pour hash
        $options = [
            'cost' => 8,
        ];
        //hash
        $mdp = password_hash($mdp, PASSWORD_BCRYPT, $options);
        //ajout en bdd
        adduser($bdd, $nom, $prenom, $login,$mdp);
        //message
        echo "<p>$login a été ajouté en BDD</p>";
    }
    //sinon vide
    else{
        echo '<p>Veuillez remplir le  formulaire</p>';
    }
?>