<?php 
session_start(); 

require 'modele/connexion_bdd.php';
require 'modele/req_infos_user.php';
require 'modele/req_admin.php';


//Liste d'utilisateurs
$List = GlobalList($bdd);
$Liste_type_compte = array('pilote'=>'Pilote', 'manager'=>'Manager', 'admin'=>'Administrateur');

//Variables liées aux filtres
$SocList = ListeSociete($bdd);
$PaysList = ListePays($bdd);
$Query = "SELECT nom, prenom, ville, pays, type, nom_societe, nSS FROM utilisateur 
		JOIN type_utilisateur ON type_utilisateur.id_type = utilisateur.type_utilisateur_id_type
		JOIN societe ON societe.id_societe = utilisateur.société_id_societe";

//Choix de l'affichage dans le tableau
if (isset($_POST['recherche']) and $_POST['recherche'] !=='Liste complète' and $_POST['recherche'] !=='') { //si on fait une recherche de nom précis

   		$user = $_POST['recherche'];
    	$results = SearchUser($bdd, $user);
}

elseif (isset($_POST['recherche']) and $_POST['recherche'] !=='Liste complète' and $_POST['recherche'] =='') { //si on fait une recherche par filtres

	if (isset($_POST['role']) and $_POST['role']!==''){
		$role = $_POST['role'];
		$Query .= " WHERE type ='$role'";
	}

	if (isset($_POST['societe']) and $_POST['societe']!==''){
		$societe = $_POST['societe'];

		if($_POST['role'] !=='') {
			$Query .= " AND nom_societe ='$societe'";
		}
		else {
			$Query .= " WHERE nom_societe ='$societe'";
		}
	
	}
	if (isset($_POST['pays']) and $_POST['pays']!==''){
		$pays = $_POST['pays'];

		if($_POST['role'] !=='' or $_POST['societe']!=='') {
			$Query .= " AND pays ='$pays'";
		}
		else {
			$Query .= " WHERE pays ='$pays'";
		}
	
	}
	$Query = $bdd->prepare($Query);
	$Query->execute();
	$results = $Query->fetchall();
}

else { //pas de recherche ou liste complète
    $results = AllUsers($bdd);
}

require 'vues/Liste_Admin.php';

if (isset($_SESSION['message_supp'])) {
    unset($_SESSION['message_supp']); 
}