<?php 
session_start();

$mail = $_SESSION['mail'];

if((isset($_POST['mailpro']))
	OR (isset($_POST['adresse']))
 	OR (isset($_POST['ville']))
 	OR (isset($_POST['code_postal']))
 	OR (isset($_POST['societe'])))
 	{
 	require 'modele/connexion_bdd.php';
	require 'modele/req_infos_user.php';

	$NomChamps = array('mailpro','adresse','ville','code_postal','societe');
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
