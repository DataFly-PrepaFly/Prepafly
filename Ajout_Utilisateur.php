
<?php
require 'modele/connexion_bdd.php';
require 'modele/req_infos_user.php';

if (isset($_POST['nss'], 
	$_POST['nom'], 
	$_POST['prenom'], 
	$_POST['sexe'], 
	$_POST['date_naissance'],
	$_POST['mail'],
	$_POST['mailconf'],
	$_POST['adresse'],
	$_POST['ville'],
	$_POST['pays'],
	$_POST['societe'],
	$_POST['statut'])) {

	if (!(empty($_POST['nss'], 
	$_POST['nom'], 
	$_POST['prenom'], 
	$_POST['sexe'], 
	$_POST['date_naissance'],
	$_POST['mail'],
	$_POST['mailconf'],
	$_POST['adresse'],
	$_POST['ville'],
	$_POST['pays'],
	$_POST['societe'],
	$_POST['statut']))) {

		$nss = $_POST['nss'];
		$nom = $_POST['nom'];
		$prenom = $_POST['prenom'];
		$sexe = $_POST['sexe'];
		$date_naissance = $_POST['date_naissance'];
		$mail = $_POST['mail'];
		$adresse 
	}
}

require 'vues/Ajout_Utilisateur.php';

