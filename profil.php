
<?php
session_start();

require 'modele/connexion_bdd.php';
require 'modele/req_infos_user.php';

//on récupère les données de la personne connectée
$mail=$_SESSION['mail'];

$infos= InfosUser($bdd, $mail);
$societe=NomCompagnie($bdd, $mail)['nom'];

$type = $infos['type_utilisateur_id_type'];

//on récupère le statut de la personne connectée
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

//on attribue "non indiqué" à nom, prénom ou sexe s'ils sont vides 
$variables = array('nom', 'prenom', 'sexe');
foreach ($variables as $nom_donnee) {
    if (empty($infos[$nom_donnee])) {
        $infos[$nom_donnee] = "Non indiqué";
    }
}

//on attribue "non indiquée" à date de naissance si elle est vide
$variables_bis = array('date_naissance');
foreach ($variables_bis as $nom_donnee_bis) {
    if (empty($infos[$nom_donnee_bis])) {
        $infos[$nom_donnee_bis] = "Non indiquée";
    }
}

//on récupère les valeurs des attributs issues de la bdd
$nom=$infos['nom'];
$prenom=$infos['prenom'];
$date_naissance=$infos['date_naissance'];
$mdp=$infos['mdp'];
$sexe = $infos['sexe'];

//on attribue "non indiquée" à l'adresse si elle est vide
if ( (empty($infos['adresse']) AND (empty($infos['code_postal'])) AND (empty($infos['ville']))) ) {
    $adresse = "Non indiquée";
}
else {
    $adresse = $infos['adresse'] .', '. $infos['code_postal'] .', '. $infos['ville'];
}


require 'profil_infos.php';

?>