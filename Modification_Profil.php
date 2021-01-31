<?php 
session_start();

$mail = $_SESSION['mail'];

require 'modele/req_infos_user.php';
require 'modele/connexion_bdd.php';

$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Pour voir les erreurs SQL


if((isset($_POST['mail']))) {

	$NomChamps = array('nom', 'prenom', 'date_naissance', 'mail', 'adresse', 'ville', 'pays');

	foreach ($NomChamps as $champ) {
		if (!(empty($_POST[$champ]))) {
			ModifUser($bdd,$mail,$champ,$_POST[$champ]);
 	    }
	}

	$_SESSION['message_modif'] = "Votre profil a bien été mis à jour.";

	header('Location: Profil.php');
}

else {
	require 'vues/ModifUtilisateur.php';
}