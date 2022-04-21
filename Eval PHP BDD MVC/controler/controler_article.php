<?php
    include '../vue/vue_article.html';
    include '../utils/connect_bdd.php';
    include '../model/model_article.php';

    if(isset($_POST['valider'])){
        if(!empty($_POST['nom_article'])){
            if(!empty($_POST['prix_article'])){
                addArticle($bdd,$_POST['nom_article'],$_POST['prix_article']);
                echo "l'article à était ajouter"
            }else{
                echo "le prix de l'article doit être renseigné";
            }
        }else{
            echo "Le nom de l'article doit être renseigné";
        }
    }

?>