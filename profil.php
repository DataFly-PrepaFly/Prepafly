<?php
session_start();

require 'modele/connexion_bdd.php';
require 'modele/req_infos_user.php';

//on récupère les données de la personne connectée
$mail=$_SESSION['mail'];
$nom=InfosUser($bdd, $mail)['nom'];
$prenom=InfosUser($bdd, $mail)['prenom'];
$date_naissance=InfosUser($bdd, $mail)['date_naissance'];
$compagnie=NomCompagnie($bdd, $mail)['nom'];
$adresse=InfosUser($bdd, $mail)['adresse'];
$ville=InfosUser($bdd,$mail)['ville'];
$mdp=InfosUser($bdd,$mail)['mdp'];
$code_postal=InfosUser($bdd,$mail)['code_postal'];
$sexe = InfosUser($bdd,$mail)['sexe'];
$type = InfosUser($bdd,$mail)['type_utilisateur_id_type'];

//on récupère son statut
switch ($type) {
    case 'p':
        $statut = "Pilote";
        break;
    case 'a':
        $statut = "Administrateur";
        break;
    case 'm':
        $statut = "Manager";
        break;
}

if (empty($sexe)) {
    $sexe="Non indiqué";
}

require 'profil_infos.php';

?>