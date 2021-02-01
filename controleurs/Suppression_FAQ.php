<?php 
session_start();

if (isset($_GET['idquestion'])) {

	require '../modele/connexion_bdd.php';
	require '../modele/req_infos_faq.php';
	SuppQuestion ($bdd, $_GET['idquestion']);

	$_SESSION['message_faq'] = "La suppression a bien été effectuée.";
	header('Location: ../Gestion_F.A.Q.php');
}
