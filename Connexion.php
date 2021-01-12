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

            //on crée une session pour l'utilisateur qui se connecte
            $_SESSION['mail']=$mail;

            header('Location: Accueil.php');
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