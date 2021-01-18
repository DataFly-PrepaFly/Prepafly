<?php

if (isset($_POST["nom"], $_POST["prenom"], $_POST["date"], $_POST['type_test_calen'])) {

	require 'modele/connexion_bdd.php';
	require 'modele/req_infos_user.php';

	$message_erreur = '';

	$nom_calen=$_POST["nom"];
	$prenom_calen=$_POST["prenom"]; //Toute les variables récupérées par le formulaire//
	$date = $_POST['date'];
	$type_test_calen=$_POST['type_test_calen'];

	$email_from = "InfiniteMeasure@gmail.com";
	               //Variable pour l'envoi du mail, il faudra changer le mail 
	$sujet = "Test programmé";	//plus tard et en fonction de l'entreprise
	$message = "Vous avez un test programmé à la date du ".$date.". Vous pouvez contacter votre manager pour plus d'informations.";
	$headers_mail ="From: ". $email_from."" ;

	//appel à la fonction de vérif du nom et prénom
	$valid_ids = InfosUserCal($bdd, $nom_calen, $prenom_calen);

	if ($valid_ids!=0){

		$email_to = SendEmail($bdd, $nom_calen, $prenom_calen);

		mail($email_to, $sujet, $message, $headers_mail);

		$message_erreur = 'Le mail a bien été envoyé.';
		require 'vues/Calendrier.php';
	}
	else
	{
		$message_erreur = 'Veuillez vérifier le nom et prénom du pilote';
		require 'vues/Calendrier.php';
	}
}
else {

	$message_erreur = '';

	require 'vues/Calendrier.php';
}