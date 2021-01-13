<?php
session_start();

include 'modele/connexion_bdd.php';
include 'modele/req_infos_user.php';

$mail=$_SESSION['mail'];
$nom=InfosUser($bdd, $mail)['nom'];
$prenom=InfosUser($bdd, $mail)['prenom'];
$daten=InfosUser($bdd, $mail)['date_naissance'];
$compagnie=NomCompagnie($bdd, $mail)['nom'];
$adresse=InfosUser($bdd, $mail)['adresse'];
$ville=InfosUser($bdd,$mail)['ville'];
$mdp=InfosUser($bdd,$mail)['mdp'];

//Je met une fonction pour récupérer le nom de la compagnie aérienne, vu que infosuser récupère que des infos dans la table utilisateur. Jsp si tu veux la mettre sur un autre fichier ou la rajouter sur req_infos_user.php, donc dans le doute je la rédige ici et je te laisse bouger les trucs comme tu veux ^^

function NomCompagnie ($bdd, $mail)
{
    $req = $bdd->prepare("SELECT société. nom FROM société, utilisateur WHERE utilisateur. société_id_societe
= société. id_societe AND utilisateur. mail = ? ");
    $req->execute(array($mail));
    $NomCompagnie = $req->fetch();
    return $NomCompagnie;
}


include 'profil_infos.php';

?>