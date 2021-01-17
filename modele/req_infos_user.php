
<?php 

//fonction qui récupère les infos de l'utilisateur connecté
function InfosUser ($bdd, $mail)
{
	$req = $bdd->prepare("SELECT * FROM utilisateur WHERE mail = ? ");
	$req->execute(array($mail));
	$InfosUser = $req->fetch();
	return $InfosUser;
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
		FROM test JOIN utilisateur 
		ON test.Utilisateur_nSS = utilisateur.nSS 
		WHERE nom LIKE '?%'");
	$req_result->execute(array($recherche));
	return $req_result->fetchAll();
}