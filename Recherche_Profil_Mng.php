<?php
require 'modele/connexion_bdd.php';
require 'modele/req_infos_user.php';

$nom = $_POST['recherche'];

$req = $bdd->prepare("SELECT * FROM utilisateur WHERE  nom = ? ");
$req->execute(array($nom));
$infos = $req->fetch();


//on récupère les valeurs issues de la bdd
$prenom=$infos['prenom'];
$date_naissance=$infos['date_naissance'];
$mdp=$infos['mdp'];
$sexe = $infos['sexe'];
$mail = $infos['mail'];
$pays = $infos['pays'];
$statut = "Pilote";
$societe=NomCompagnie($bdd, $mail)['nom_societe'];

//on attribue "non indiqué" à prénom ou sexe s'ils sont vides 
$variables = array('prenom', 'sexe');
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


//on attribue "non indiquée" à l'adresse si elle est vide
if ( (empty($infos['adresse']) AND (empty($infos['ville']))) ) {
    $adresse = "Non indiquée";
}
else {
    $adresse = $infos['adresse'] .', '. $infos['ville'];
}


include 'Recherche_profil_infos.php';