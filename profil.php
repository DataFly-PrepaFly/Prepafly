<?php
session_start();

require 'modele/connexion_bdd.php';
require 'modele/req_infos_user.php';

//on récupère les données de la personne connectée
$mail=$_SESSION['mail'];

$infos= InfosUser($bdd, $mail);

$nom=$infos['nom'];
$prenom=$infos['prenom'];
$date_naissance=$infos['date_naissance'];
$societe=NomCompagnie($bdd, $mail)['nom'];
$adresse=$infos['adresse'];
$ville=$infos['ville'];
$mdp=$infos['mdp'];
$code_postal=$infos['code_postal'];
$sexe = $infos['sexe'];
$type = $infos['type_utilisateur_id_type'];

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

$tableau_infos = array($nom, $prenom, $date_naissance, $societe, $adresse, $ville, $code_postal, $sexe, $type);
for ($i=0; $i < 9; $i++) { 
    if (empty($tableau_infos[$i])) {
    $tableau_infos[$i] == "Non indiqué";
    }
    elseif ($tableau_infos[$i] == 0) {
        $tableau_infos[$i] == "Non indiqué";
    }
}

require 'profil_infos.php';

?>