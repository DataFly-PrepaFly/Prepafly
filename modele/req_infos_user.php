
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

function ModifUser($bdd, $mail, $colonne, $champ) 
{
	var_dump(array($colonne, $champ, $mail));
	$update = $bdd->prepare('UPDATE utilisateur SET ? = ? WHERE mail = ?');
	$update->execute(array($colonne, $champ, $mail));
}

function UserList ($bdd)
{
	$req = $bdd->prepare("SELECT nom FROM utilisateur WHERE type_utilisateur_id_type LIKE 'p' ");
	$req->execute();
	return $req->fetchAll();
}

function SearchResults ($bdd, $recherche)
{
	$req_result = $bdd->prepare("SELECT nom, date, Test_id_type, resultat FROM test JOIN utilisateur 
		ON test.Utilisateur_nSS = utilisateur.nSS WHERE nom = ?");
	$req_result->execute(array($recherche));
	return $req_result->fetchAll();
}

function AllResults ($bdd)
{
	$req_result = $bdd->prepare("SELECT nom, date, Test_id_type, resultat
		FROM test JOIN utilisateur 
		ON test.Utilisateur_nSS = utilisateur.nSS");
	$req_result->execute();
	return $req_result->fetchAll();
}