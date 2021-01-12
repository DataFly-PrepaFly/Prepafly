<?php

session_start();

require 'modele/connexion_bdd.php';

//si l'utilisateur envoie le formulaire
if(isset($_POST['mail']) && isset($_POST['password']))
{
    $mail = $_POST['mail']; 
    $password = $_POST['password'];
    
    if($mail !== "" && $password !== "")
    {
        require 'modele/req_connexion.php';

        if (BonId($bdd, $mail, $password)) {

            require 'modele/req_infos_user.php';
            //on récupère le prenom de l'utilisateur qui se connecte
            $prenom_user=InfosUser($bdd, $mail)['prenom'];

            //on crée une session pour l'utilisateur qui se connecte
            $_SESSION['prenom_user']=$prenom_user;

            $type_compte=$prenom_user=InfosUser($bdd, $mail)['type_utilisateur_id_type'];

            switch ($type_compte) {
                case 'p':
                    require 'vues/Accueil_Pilote.php';
                    break;
                case 'a':
                    require 'vues/Accueil_Admin.php';
                    break;
                case 'm':
                    require 'vues/Accueil_Mng.php';
                    break;
            }
        }

        else 
        {
            $erreur=1;
            require 'vues/Connexion.php'; // utilisateur ou mot de passe incorrect
        }
    }

    else
    {
        $erreur=2;
        require 'vues/Connexion.php'; // utilisateur ou mot de passe vide
    }
}

//si l'utilisateur arrive sur la page de connexion 
else
{
    $erreur=0;
    require 'vues/Connexion.php';
}


?>