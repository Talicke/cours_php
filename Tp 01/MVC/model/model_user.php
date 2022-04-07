<?php
function ajouterUtil($bdd,$nom,$prenom,$mail,$mdp,$img){
        try{
            $req = $bdd->prepare('SELECT * FROM utilisateurs WHERE mail_util = :mail_util LIMIT 1');
            $req->execute(array(
                'mail_util' => $mail
            ));
            $data = $req->fetch();

            if(!isset($data['mail_util'])){
                $req = $bdd->prepare('INSERT INTO utilisateurs(nom_util, prenom_util, mail_util, mdp_util, img_util) 
                VALUES(:nom_util, :prenom_util, :mail_util, :mdp_util, :img_util)');
                $req->execute(array(
                'nom_util' => $nom,
                'prenom_util' => $prenom,
                'mail_util' => $mail,
                'mdp_util' => $mdp,
                'img_util' => $img
                ));
                echo 
                    '<div class="alert alert-success container">Utilisateur bien ajouter</div>';
            }
            else{
                echo '<div class="alert alert-danger container">Un utilisateurs est déja enregister avec cet e-mail</div>';
            }
        }
        catch(Exception $e)
        {
            //affichage d'une exception en cas d’erreur
            die('Erreur : '.$e->getMessage());
        }
    }


    function showUser($bdd){
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
                                    <input type="checkbox" name="box[]" value="%s">
                                    <a href="update_user.php?id=%s" class="btn btn-primary">modifier</a>
                                </div>
                            </div>';
                echo sprintf($format, $data['img_util'], $data["nom_util"], $data["prenom_util"], $data["id_util"], $data["id_util"]);
                }
            }
            catch(Exception $e)
            {
                //affichage d'une exception en cas d’erreur
                die('Erreur : '.$e->getMessage());
            }
        }
    

        function modifUtil($bdd,$id,$nom,$prenom,$mail,$mdp,$img){
            try{
                $req = $bdd->prepare('UPDATE utilisateurs SET nom_util = :nom_util,
                prenom_util = :prenom_util, mail_util = :mail_util, mdp_util = :mdp_util, img_util = :img_util WHERE id_util = :id_util');
                $req->execute(array(
                    'id_util' => $id,
                    'nom_util' => $nom,
                    'prenom_util' => $prenom,
                    'mail_util' => $mail,
                    'mdp_util' => $mdp,
                    'img_util' => $img
                    ));
                    header('Location: ctrl_index.php');
                    echo '<div class="alert alert-success container">Utilisateur bien modifier</div>';
            }
            catch(Exception $e)
            {
                //affichage d'une exception en cas d’erreur
                die('Erreur : '.$e->getMessage());
            }
        }


        function showOneUser ($bdd, $id){
            try{
                $req = $bdd->prepare('SELECT * FROM utilisateurs WHERE id_util = :id_util');
                $req->execute(array(
                    'id_util' => $id
                ));
                $data = $req->fetchAll(PDO::FETCH_ASSOC);
                return $data;
            }
            catch(Exception $e)
            {
                //affichage d'une exception en cas d’erreur
                die('Erreur : '.$e->getMessage());
            }
        }


        function deleteUser ($bdd, $id){
            try{
                $req = $bdd->prepare('DELETE FROM utilisateurs WHERE id_util = :id_util');
                $req->execute(array("id_util" => $id));
            }
            catch(Exception $e)
            {
                //affichage d'une exception en cas d’erreur
                die('Erreur : '.$e->getMessage());
            }
        }
?>
