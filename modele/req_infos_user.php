
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
	$req = $bdd->prepare('UPDATE utilisateur SET ? = ? WHERE mail = ?');
	$req->execute(array($colonne, $champ, $mail));
}


//--------------------------------------------------------//



//fonction qui récupère les nom et prenom de tous les utilisateurs
function GlobalList ($bdd) 
{
	$req = $bdd->prepare("SELECT nom, prenom FROM utilisateur");
	$req->execute();
	return $req->fetchAll();
}


function AllUsers($bdd)
{
	$req = $bdd->prepare("SELECT nom, prenom, ville, pays, type, nom_societe FROM utilisateur 
		JOIN type_utilisateur ON type_utilisateur.id_type = utilisateur.type_utilisateur_id_type
		JOIN societe ON societe.id_societe = utilisateur.société_id_societe");
	$req->execute();
	return $req->fetchAll();
}


//fonction qui récupère les données de tous les utilisateurs
function SearchUser($bdd, $recherche)
{
	$req = $bdd->prepare("SELECT nom, prenom, ville, pays, type, nom_societe FROM utilisateur 
		JOIN type_utilisateur ON type_utilisateur.id_type = utilisateur.type_utilisateur_id_type
		JOIN societe ON societe.id_societe = utilisateur.société_id_societe	
		WHERE nom LIKE ?");
	$req->execute(array($recherche));
	return $req->fetchAll();
}

//fonction qui récupère la liste de toutes les sociétés
function ListeSociete ($bdd)
{
	$req = $bdd->prepare("SELECT DISTINCT nom_societe FROM societe");
	$req->execute();
	return $req->fetchAll();
}

//fonction qui récupère la liste de tous les pays
function ListePays ($bdd)
{
	$req = $bdd->prepare("SELECT DISTINCT pays FROM utilisateur");
	$req->execute();
	return $req->fetchAll();
}

//--------------------------------------------------------//



//fonction qui récupère le nom des utilisateurs de type pilotes
function PilotsList ($bdd)
{
	$req = $bdd->prepare("SELECT nom FROM utilisateur WHERE type_utilisateur_id_type LIKE 'p' ");
	$req->execute();
	return $req->fetchAll();
}


//fonction qui récupère les données de la table test pour tous les pilotes
function AllResultsPilots ($bdd)
{
	$req_result = $bdd->prepare("SELECT nom, date_test, test_id_type, resultat FROM test 
		JOIN utilisateur 
		ON test.Utilisateur_nSS = utilisateur.nSS");
	$req_result->execute();
	return $req_result->fetchAll();
}


//fonction qui récupère les données de la table test pour un utilisateur donné
function SearchResultsOnePilot ($bdd, $recherche)
{
	$req_result = $bdd->prepare("SELECT nom, date_test, test_id_type, resultat FROM test 
		JOIN utilisateur 
		ON test.Utilisateur_nSS = utilisateur.nSS WHERE nom = ?");
	$req_result->execute(array($recherche));
	return $req_result->fetchAll();
}


function SuppUser ($bdd, $mail)
{
	$req = $bdd->prepare("DELETE FROM utilisateur WHERE mail = ?");
	$req->execute(array());
}