<?php 
    include './view/view_header.php';
    include './view/view_login.php';
    include './utils/connecteBdd.php';
    include './model/model_account.php';


    if(isset($_POST["validate"])){
        $data = connectAccount($bdd, $_POST['login_user']);

        if(password_verify($_POST['mdp_user'], $data[0]['mdp_user'])){

            session_start();

            $_SESSION['id_user'] = $data[0]['id_user'];
            $_SESSION['name_user'] = $data[0]['name_user'];
            $_SESSION['first_name_user'] = $data[0]['first_name_user'];
            $_SESSION['login_user'] = $data[0]['login_user'];
            $_SESSION['connected'] = true;

            header('Location: ctrl_task.php');
        }else{
            echo 'mot de passe ou login invalide';
        }

    }
?>