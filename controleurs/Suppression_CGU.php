<?php 
session_start();

if (isset($_GET['idarticle'])) {

	require '../modele/connexion_bdd.php';
	require '../modele/req_cgu.php';
	SuppArticle ($bdd, $_GET['idarticle']);

	$_SESSION['message_cgu'] = "La suppression a bien été effectuée.";
	header('Location: ../Gestion_CGU.php');
}