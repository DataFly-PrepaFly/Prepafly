
<?php 

//fonction qui récupère les infos de l'utilisateur connecté
function InfosUser ($bdd, $mail)
{
	$req = $bdd->prepare("SELECT * FROM utilisateur WHERE mail = ? ");
	$req->execute(array($mail));
	$InfosUser = $req->fetch();
	return $InfosUser;
}

//récupère les informations à partir du nom et prenom
function InfosUserCal ($bdd, $nom, $prenom)
{
	$req=$bdd->prepare("SELECT * FROM utilisateur WHERE nom = ? AND prenom = ? AND type_utilisateur_id_type = p");
	$req->execute(array($nom,$prenom));
	$count = $req->rowCount();
	return $count;
}

//modifie les informations de l'utilisateur selon son mail
function ModifUser($bdd, $mail, $colonne, $champ){
    $update = $bdd->prepare("UPDATE utilisateur SET ?=? WHERE mail=?");
    $update->execute(array($colonne,$champ,$mail));
}

//recupère le mail à partir du nom et prenom
function SendEmail ($bdd, $nom, $prenom)
{
	$req=$bdd->prepare("SELECT mail FROM utilsateur WHERE nom = ? AND prenom = ?");
	$req->execute(array($nom, $prenom));
	$email_to= $req->fetch();
	return $email_to;
}


function NomCompagnie ($bdd, $mail)
{
    $req = $bdd->prepare("SELECT societe. nom FROM societe, utilisateur WHERE utilisateur. société_id_societe
= societe. id_societe AND utilisateur. mail = ? ");
    $req->execute(array($mail));
    $NomCompagnie = $req->fetch();
    return $NomCompagnie;
}


function SearchResults ($bdd, $recherche)
{
	$req_result = $bdd->prepare("SELECT date_test, resultat, Type Test_id_type, nom 
		FROM test /*JOIN utilisateur 
		ON test. Utilisateur_nSS = utilisateur. nSS 
		WHERE nom LIKE '%?%'");
	$req_result->execute(array($recherche));
	return $req_result->fetchAll();
}


function Test ($bdd)
{
	$req = $bdd->prepare("SELECT * FROM test");
	$req->execute(array());
	$InfosUser = $req->fetch();
	return $InfosUser;
}

/*
function AllResults ($bdd)
{
	$req_result = $bdd->prepare("SELECT id_test, date_test, resultat, Type Test_id_type
		FROM test /*JOIN utilisateur 
		ON test. Utilisateur_nSS = utilisateur. nSS");
	$req_result->execute(array());
	return $req_result->fetchAll();
}
*/