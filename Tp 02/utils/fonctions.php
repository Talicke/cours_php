<?php 

    function nbrImage($bdd){
        try{
            $req = $bdd->query("SELECT cpt_nbr FROM nbr WHERE id_nbr = 1");
            while($data = $req->fetch()){
                return $data['cpt_nbr'];
            }
        }
        catch(Exception $e)
        {
            //affichage d'une exception en cas d’erreur
            die('Erreur : '.$e->getMessage());
        }
    }

    function updateCpt($bdd, $cpt){
        try{
            $req = $bdd->prepare("UPDATE nbr SET cpt_nbr = :cpt WHERE id_nbr = 1");
            $req->execute(array("cpt" => $cpt));
        }
        catch(Exception $e)
            {
                //affichage d'une exception en cas d’erreur
                die('Erreur : '.$e->getMessage());
            }
    }  

    function addImg($bdd, $nameFile, $url){
        try{
            $req = $bdd->prepare("INSERT INTO images(nom_img, url_img) VALUES (:nom_img, :url_img)");
            $req->execute(array(
                                "nom_img" => $nameFile, 
                                "url_img" => $url));
                    echo "L'image $nameFile à bien été ajouter";        
        }
        catch(Exception $e)
        {
            //affichage d'une exception en cas d’erreur
            die('Erreur : '.$e->getMessage());
        }
    }

    // function afficherNbrImg($bdd){
    //     try{
    //         $req = $bdd->query("SELECT COUNT(id_img) FROM images");
    //         while($data = $req->fetch()){
    //         echo $data;
    //         }
    //     }
    //     catch(Exception $e)
    //     {
    //         //affichage d'une exception en cas d’erreur
    //         die('Erreur : '.$e->getMessage());
    //     }
    // }