<?php
    include './view/view_header.php';
    include './view/view_addAccount.php';
    include './utils/connecteBdd.php';
    include './model/model_account.php';
    include './utils/function.php';

    if(isset($_POST['validate'])){
        if(!empty($_POST['name_user']) && !empty($_POST['first_name_user'])&& !empty($_POST['login_user'])&& !empty($_POST['mdp_user'])&& !empty($_POST['mdp_user_confirm'])){
            if($_POST['mdp_user'] === $_POST['mdp_user_confirm']){

                addAccount($bdd, $_POST['name_user'], $_POST['first_name_user'], $_POST['login_user'], hashing($_POST['mdp_user'], 8));

            }else{
                echo "Les mot de passe ne sont pas identique";
            }
        }else{
            echo "Des informations sont manquantes";
        } 
    }
?>