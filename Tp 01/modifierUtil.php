<?php
    include "inc/header.php";
    include "inc/connecteBdd.php";
    include "inc/fonctions.php";

    $req = $bdd->prepare('SELECT * from utilisateurs WHERE id_util = :id_util');
    $req->execute(array('id_util' => $_GET['id']));
    $data = $req->fetch();
?>

<div class="container">
    <h1> Ajouter un utilisateur</h1>
</div>


<div class="container">
    <form method="post" action="">
        <label class="form-label" for="nom">nom :</label> 
        <input class="form-control" type="text" name="nom" value=<?php echo$data['nom_util'];?>>

        <label class="form-label" for="prenom">prenom :</label>
        <input class="form-control" type="text" name="prenom" value=<?php echo$data['prenom_util'];?>>

        <label class="form-label" for="mail">mail :</label>
        <input class="form-control" type="mail" name="mail" value=<?php echo$data['mail_util'];?>>

        <label class="form-label" for="mdp">mot de passe :</label>
        <input class="form-control" type="text" name="password" value=<?php echo$data['mdp_util'];?>>

        <label class="form-label" for="img">PP:</label>
        <input class="form-control" type="text" name="img" value=<?php echo$data['img_util'];?>>

        <input class="btn btn-primary m-3" type="submit" name="valider" value="Valider">
    </form>
</div>


<?php
    if(isset($_POST["valider"])){
        if(!empty($_POST["nom"]) AND !empty($_POST['prenom']) AND !empty($_POST["mail"]) AND !empty($_POST['password']) AND !empty($_POST['img'])){
            modifUtil($bdd, $_GET['id'], $_POST['nom'], $_POST['prenom'], $_POST['mail'], $_POST['password'], $_POST['img']);
        }else{
            echo 
                '<div class="alert alert-warning container"> Tout les champs doivent être remplis </div>';
    }
}
?>
