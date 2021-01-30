
<?php


function NewUser ($bdd, $mdp, $nss, $nom, $prenom, $date_naissance, $sexe, $mail, $adresse, $ville, $pays, $type, $societe)
{
	$mdp = password_hash($mdp, PASSWORD_BCRYPT);
	$req = $bdd->prepare("INSERT INTO utilisateur (nSS, 'nom', 'prenom', date_naissance, 'sexe', 'mail', 'adresse', 'ville', 'pays', type_utilisateur_id_type, société_id_societe) 
		VALUES (:nss, :nom, :prenom, :date_naissance, :sexe, :mail, :adresse, :ville, :pays, :type, :societe) ");
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
		'type' => $type,
		'societe' => $societe
	));
}


function ExistingCompagny ($bdd, $societe) 
{
	$req = $bdd->prepare ("SELECT nom_societe FROM societe WHERE nom_societe = ? ");
	$req->execute(array($societe));
	$count = $req->rowCount();

	if($count!=0) {
		return true;
	}
	else {
		return false;
	}
}


function IdExistingCompagny ($bdd, $societe) 
{
	$req = $bdd->prepare("SELECT id_societe FROM societe WHERE nom_societe = ?");
	$req->execute(array($societe));
	return $req->fetchAll();
}


function NewCompagny ($bdd, $societe) 
{
	
}