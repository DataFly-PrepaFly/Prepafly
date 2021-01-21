<?php 
session_start();

if (!(isset($_SESSION['mail']))) {
	require 'vues/Accueil_Simple.php';
}

else {
	$mail=$_SESSION['mail'];

	require 'modele/connexion_bdd.php';
	require 'modele/req_infos_user.php';

	$type_compte=InfosUser($bdd, $mail)['type_utilisateur_id_type'];
	$prenom=InfosUser($bdd, $mail)['prenom'];

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
