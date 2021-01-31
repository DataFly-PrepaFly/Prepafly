<?php 
session_start();

require 'modele/connexion_bdd.php';
//$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Pour voir les erreurs SQL
require 'modele/req_infos_faq.php';

if((isset($_POST['question']))) {

	if ( (!(empty($_POST['question']))) && (!(empty($_POST['reponse']))) ) {
			NewQuestion($bdd,$_POST['question'],$_POST['reponse']);
	}

	$_SESSION['message_faq'] = "La question a bien été ajoutée.";

	header('Location: Gestion_F.A.Q.php');
}

else {
	require 'vues/Ajout_FAQ.php';
}