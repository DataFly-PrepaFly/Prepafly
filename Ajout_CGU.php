<?php 
session_start();

require 'modele/connexion_bdd.php';
//$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Pour voir les erreurs SQL
require 'modele/req_cgu.php';

if((isset($_POST['titre']))) {

	if ( (!(empty($_POST['titre']))) && (!(empty($_POST['article']))) ) {
		NewArticle($bdd,$_POST['titre'],$_POST['article']);
	}

	$_SESSION['message_cgu'] = "Le nouvel article bien été ajouté.";

	header('Location: Gestion_CGU.php');
}

else {
	require 'vues/Ajout_CGU.php';
}