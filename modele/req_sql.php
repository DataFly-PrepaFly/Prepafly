
<?php 

//fonction vérifiant si l'id et le mdp sont corrects
function BonId($bdd, $mail, $mdp)
{
	$req = $bdd->prepare("SELECT * FROM utilisateur WHERE mail = ? AND mdp = ? ");
	$req->execute(array($mail, $mdp));
	$count = $req->rowCount();

	if($count!=0) {
		return true;
	}
	else {
		return false;
	}
}


//fonction renvoyant le type d'utilisateur qui se connecte
function TypeUser($bdd, $mail)
{
	$req = $bdd->prepare("SELECT type_utilisateur_id_type FROM utilisateur WHERE mail = ? ");
	$req->execute(array($mail));
	$compte=$req->fetch();
	return $compte;
}


//fonction qui récupère les infos de l'utilisateur connecté
function InfosUser ($bdd, $mail)
{
	$req = $bdd->prepare("SELECT * FROM utilisateur WHERE mail = ? ");
	$req->execute(array($mail));
	$InfosUser = $req->fetch();
	return $InfosUser;
}