<?php 
session_start();

if (isset($_GET['idsuppr'])) {

	require '../modele/connexion_bdd.php';
	require '../modele/req_admin.php';

	SuppUser ($bdd, $_GET['idsuppr']);

	$_SESSION['message_supp'] = "La suppression de l'utilisateur a bien été effectuée.";
	header('Location: ../Liste_Utilisateurs.php');
}
