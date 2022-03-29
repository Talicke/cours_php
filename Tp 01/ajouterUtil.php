<?php
    include "inc/header.php";
    include "inc/connecteBdd.php";
    include "inc/fonctions.php"
?>

<div class="container">
    <h1> Ajouter un utilisateur</h1>
</div>


<div class="container">
    <form method="post" action="">
        <label class="form-label" for="nom">Votre nom :</label> 
        <input class="form-control" type="text" name="nom">

        <label class="form-label" for="prenom">Votre prenom :</label>
        <input class="form-control" type="text" name="prenom">

        <label class="form-label" for="mail">Votre mail :</label>
        <input class="form-control" type="mail" name="mail">

        <label class="form-label" for="mdp">Votre mot de passe :</label>
        <input class="form-control" type="password" name="password">

        <label class="form-label" for="img">Choissiez une PP:</label>
        <input class="form-control" type="text" name="img">

        <input class="btn btn-primary m-3" type="submit" name="valider" value="Valider">
    </form>
</div>

<?php
    if(isset($_POST["valider"])){
        if(!empty($_POST["nom"]) AND !empty($_POST['prenom']) AND !empty($_POST["mail"]) AND !empty($_POST['password']) AND !empty($_POST['img'])){
            ajouterUtil($bdd, $_POST['nom'], $_POST['prenom'], $_POST['mail'], $_POST['password'], $_POST['img']);
        }else{
            echo 
                '<div class="alert alert-warning container"> Tout les champs doivent être remplis </div>';
        }
    }
?>





<?php
    include "inc/footer.php"
?>