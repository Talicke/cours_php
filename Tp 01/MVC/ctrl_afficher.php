<?php
    
    include './view/view_header.php';
    include './utils/connectBdd.php';
    include './model/model_user.php';
    include './view/view_alluser.php';
    showUser($bdd);
    echo "</form>";

    if (isset($_POST['box'])){
        foreach($_POST['box'] as $id){
            deleteUser($bdd,$id);
        }
        echo '<script>
            setTimeout(()=>{
            document.location.href="ctrl_afficher.php"; 
            }, 1500);</script>'; 
    }



    include './view/view_footer.php';
?>