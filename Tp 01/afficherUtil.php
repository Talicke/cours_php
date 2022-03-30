<?php 
    include 'inc/header.php';
    include 'inc/connecteBdd.php';
    include 'inc/fonctions.php';
?>

<div class="d-flex w-75 flex-wrap container-fluid">
<?php
    try{
        $req = $bdd->prepare('SELECT nom_util, prenom_util, id_util, img_util FROM utilisateurs');
        $req->execute();
        while ($data = $req->fetch()){
                $format = 
                    '<div class="card m-3" style="width: 18rem;">
                            <img src="%s" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">%s</h5>
                                <p class="card-text">%s</p>
                                <a href="modifierUtil.php?id=%s" class="btn btn-primary">modifier</a>
                            </div>
                        </div>';
            echo sprintf($format, $data['img_util'], $data["nom_util"], $data["prenom_util"], $data["id_util"]);
            }
        }
        catch(Exception $e)
        {
            //affichage d'une exception en cas d’erreur
            die('Erreur : '.$e->getMessage());
        }
?>
</div>


<?php
    include 'inc/footer.php';
?>