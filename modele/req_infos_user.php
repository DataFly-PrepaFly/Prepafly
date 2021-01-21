
<?php 

//fonction qui récupère les infos de l'utilisateur connecté
function InfosUser ($bdd, $mail)
{
	$req = $bdd->prepare("SELECT * FROM utilisateur WHERE mail = ? ");
	$req->execute(array($mail));
	$InfosUser = $req->fetch();
	return $InfosUser;
}

//fonction qui récupère la société à partir du mail de l'utilisateur
function NomCompagnie ($bdd, $mail)
{
    $req = $bdd->prepare("SELECT societe.nom FROM societe, utilisateur WHERE utilisateur.société_id_societe
= societe.id_societe AND utilisateur.mail = ? ");
    $req->execute(array($mail));
    $NomCompagnie = $req->fetch();
    return $NomCompagnie;
}

//fonction qui modifie les informations de l'utilisateur dans la bdd
function ModifUser($bdd, $mail, $colonne, $champ) 
{
	var_dump(array($colonne, $champ, $mail));
	$update = $bdd->prepare('UPDATE utilisateur SET ? = ? WHERE mail = ?');
	$update->execute(array($colonne, $champ, $mail));
}

//fonction qui récupère le nom des utilisateurs de type pilotes
function UserList ($bdd)
{
	$req = $bdd->prepare("SELECT nom FROM utilisateur WHERE type_utilisateur_id_type LIKE 'p' ");
	$req->execute();
	return $req->fetchAll();
}

//fonction qui récupère les données de la table test pour un utilisateur donné
function SearchResults ($bdd, $recherche)
{
	$req_result = $bdd->prepare("SELECT nom, date_test, test_id_type, resultat FROM test JOIN utilisateur 
		ON test.Utilisateur_nSS = utilisateur.nSS WHERE nom = ?");
	$req_result->execute(array($recherche));
	return $req_result->fetchAll();
}

//fonction qui récupère les données de la table test pour tous les pilotes
function AllResults ($bdd)
{
	$req_result = $bdd->prepare("SELECT nom, date_test, test_id_type, resultat
		FROM test JOIN utilisateur 
		ON test.Utilisateur_nSS = utilisateur.nSS");
	$req_result->execute();
	return $req_result->fetchAll();
}