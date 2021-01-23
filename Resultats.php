<?php

require 'modele/connexion_bdd.php';
require 'modele/req_infos_user.php';

//Liste déroulante
$List = PilotsList($bdd);

//Choix de l'affichage dans le tableau
if (isset($_POST['recherche']) and $_POST['recherche'] !=='Liste complète' and $_POST['recherche'] !=='') { 

    $user = $_POST['recherche'];
    $results = SearchResultsOnePilot($bdd, $user);
}

else { //sinon
    $results = AllResultsPilots($bdd);
}

require 'vues/Resultats_Mng.php';