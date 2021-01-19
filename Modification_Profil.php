<?php 
session_start();

$mail = $_SESSION['mail'];

if((isset($_POST['mail']))
	OR (isset($_POST['adresse']))
 	OR (isset($_POST['ville']))
 	OR (isset($_POST['code_postal'])))
 	{
 	require 'modele/connexion_bdd.php';
 	$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	require 'modele/req_infos_user.php';

	$NomChamps = array('mail','adresse','ville','code_postal',);
	foreach ($NomChamps as $champ) {
        if (!(empty($_POST[$champ]))) {
            ModifUser($bdd,$mail,$champ,$_POST[$champ]);
        }
	}
	header('Location : Profil.php');
}
else {
	require 'vues/ModifUtilisateur.php';
}