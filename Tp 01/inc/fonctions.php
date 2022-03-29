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
                echo 
                    '<div class="alert alert-success container">Utilisateur bien modifier</div>';
        }
        catch(Exception $e)
        {
            //affichage d'une exception en cas d’erreur
            die('Erreur : '.$e->getMessage());
        }
    }
?>