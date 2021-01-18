<?php 

if (isset($_POST['nom'], 
	$_POST['prenom'], 
	$_POST['date'], 
	$_POST['mailpro'], 
	$_POST['num'], 
	$_POST['cpgn'], 
	$_POST['fonction'], 
	$_POST['demande'])) {

	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$date = $_POST['date'];
	$mailpro = $_POST['mailpro'];
	$num = $_POST['num'];
	$cpgn = $_POST['cpgn'];
	$fonction = $_POST['fonction'];
	$demande = $_POST['demande'];

	$message = 'M./Mme '.$nom.' '.$prenom.', '.$fonction.' au sein de la société '.$cpgn.' est intéressé et souhaiterait être recontacté(e). Ses coordonnées sont les suivantes : Numéro : '.$num.'. Sa demande est la suivante : '.$demande.'';
	$sujet = 'Demande d\'information';
	$header = "From: ".$mailpro."" ;

	mail($mailpro, $sujet, $message, $header);

	$confirmation = 'Le mail a bien été envoyé';

	$confirmation = 'Le mail a bien été envoyé';
	require 'vues/Inscription.php';
}

else {
	$confirmation = '';
	require 'vues/Inscription.php';
}


