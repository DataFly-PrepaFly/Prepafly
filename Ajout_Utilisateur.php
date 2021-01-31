
<?php
require 'modele/connexion_bdd.php';
require 'modele/req_infos_user.php';
require 'modele/req_new_user.php';

if (isset($_POST['nss'], 
	$_POST['nom'], 
	$_POST['prenom'], 
	$_POST['sexe'], 
	$_POST['date_naissance'],
	$_POST['mail'],
	$_POST['mailconf'],
	$_POST['mdp'],
	$_POST['adresse'],
	$_POST['ville'],
	$_POST['pays'],
	$_POST['societe'],
	$_POST['statut'])) 
{

	if ((!(empty($_POST['nss'])))
	AND (!(empty($_POST['nom'])))
	AND (!(empty($_POST['prenom'])))
	AND (!(empty($_POST['sexe'])))
	AND (!(empty($_POST['date_naissance'])))
	AND (!(empty($_POST['mail'])))
	AND (!(empty($_POST['mailconf'])))
	AND (!(empty($_POST['mdp'])))
	AND (!(empty($_POST['ville'])))
	AND (!(empty($_POST['pays'])))
	AND (!(empty($_POST['societe'])))
	AND (!(empty($_POST['statut'])))) 
	{

		$nss = $_POST['nss'];
		$nom = $_POST['nom'];
		$prenom = $_POST['prenom'];
		$sexe = $_POST['sexe'];
		$date_naissance = $_POST['date_naissance'];
		$mail = $_POST['mail'];
		$mdp = $_POST['mdp'];
		$adresse = $_POST['adresse'];
		$ville = $_POST['ville'];
		$pays = $_POST['pays'];
		$societe = $_POST['societe'];
		$statut = $_POST['statut'];

		switch ($statut) {
        case 'pilote':
            $statut = 'p';
            break;
        case 'admin':
            $statut = 'a';
            break;
        case 'manager':
            $statut = 'm';
            break;
    	}

    	$existing_compagny = ExistingCompagny($bdd, $societe);
    	if ($existing_compagny == true) {
    		$societe = IdExistingCompagny($bdd, $societe);
    	}

    	else {
    		NewCompagny ($bdd, $societe);
    	}

    	NewUser($bdd, $mdp, $nss, $nom, $prenom, $date_naissance, $sexe, $mail, $adresse, $ville, $pays, $type, $societe);
	}
}

require 'vues/Ajout_Utilisateur.php';

