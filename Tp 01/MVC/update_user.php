<?php 
    include './view/view_header.php';
    include './utils/connectBdd.php';
    include './model/model_user.php';
    include './view/view_updateuser.php';

    $list = showOneUser($bdd, $_GET['id']);

    var_dump($list);
    $format = '<script> setValueImput("%s", "%s", "%s", "%s") </script>';

    echo sprintf($format, $list[0]['nom_util'], $list[0]['prenom_util'], $list[0]['mail_util'], $list[0]['mdp_util'][0]);


    if(isset($_POST["valider"])){
        if(!empty($_POST["nom"]) AND !empty($_POST['prenom']) AND !empty($_POST["mail"]) AND !empty($_POST['password']) AND !empty($_POST['img'])){
            modifUtil($bdd, $_GET['id'], $_POST['nom'], $_POST['prenom'], $_POST['mail'], $_POST['password'], $_POST['img']);
        }else{
            echo 
                '<div class="alert alert-warning container"> Tout les champs doivent être remplis </div>';
    }
}


    include './view/view_footer.php'

?>