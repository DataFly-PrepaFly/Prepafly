<?php


function IdExistingCompagny ($bdd, $societe) 
{
	$req = $bdd->prepare ("SELECT id_societe FROM societe WHERE nom_societe = ? ");
	$req->execute(array($societe));
	$result = $req->fetch();

	if(empty($result)) {
		return false;
	}
	else {
		return $result['id_societe'];
	}
}


function NewCompagny ($bdd, $societe) 
{
	$add = $bdd->prepare("INSERT INTO societe (nom_societe) VALUES (?) ");
	$add->execute(array($societe));
	//On renvoie l'id de la compagnie aérienne ajoutée à la bdd
	return ($bdd->lastInsertId());
}


function NewUser ($bdd, $mdp, $nss, $nom, $prenom, $date_naissance, $sexe, $mail, $adresse, $ville, $pays, $type, $societe)
{
	$mdphashe = password_hash($mdp, PASSWORD_BCRYPT);

	$req = $bdd->prepare("INSERT INTO utilisateur (nSS, nom, prenom, date_naissance, sexe, mail, adresse, ville, pays, mdp, type_utilisateur_id_type, société_id_societe) 
		VALUES (:nss, :nom, :prenom, :date_naissance, :sexe, :mail, :adresse, :ville, :pays, :mdp, :type, :id_societe) ");
	$req->execute(array(
		'nss' => $nss,
		'nom' => $nom,
		'prenom' => $prenom, 
		'date_naissance' => $date_naissance,
		'sexe' => $sexe,
		'mail' => $mail, 
		'adresse' => $adresse,
		'ville' => $ville,
		'pays' => $pays,
		'mdp' => $mdphashe,
		'type' => $type,
		'id_societe' => $societe
	));
}