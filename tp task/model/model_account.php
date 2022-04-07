<?php

    function addAccount($bdd, $name, $first_name, $login, $password){
        try{
            $req = $bdd->prepare('INSERT INTO user(name_user, first_name_user, login_user, mdp_user) 
                    VALUES(:name_user, :first_name_user, :login_user, :mdp_user)');
                    $req->execute(array(
                    'name_user' => $name,
                    'first_name_user' => $first_name,
                    'login_user' => $login,
                    'mdp_user' => $password,
                    ));
                    header ('location: index.php?create');
            }
            catch(Exception $e)
            {
                //affichage d'une exception en cas d’erreur
                die('Erreur : '.$e->getMessage());
            }
        }

        function connectAccount($bdd, $login){
            try{
                $req = $bdd->prepare('SELECT * FROM user WHERE login_user = :login_user');
                $req->execute(array(
                    'login_user' => $login
                ));
                $data = $req->fetchAll(PDO::FETCH_ASSOC);
                return $data;
            }catch(Exception $e)
            {
                //affichage d'une exception en cas d’erreur
                die('Erreur : '.$e->getMessage());
            }
        }

?>