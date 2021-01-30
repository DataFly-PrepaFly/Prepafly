<?php

require 'modele/connexion_bdd.php';
require 'modele/req_infos_user.php';

//Liste déroulante
$List = PilotsList($bdd);

//Requête modifiée par les filtres
$Query = "SELECT nom, date_test, test_id_type, resultat FROM test JOIN utilisateur ON test.Utilisateur_nSS = utilisateur.nSS";

//Choix de l'affichage dans le tableau
if (isset($_POST['recherche']) and $_POST['recherche'] !=='Liste complète' and $_POST['recherche'] !=='') { //si on fait une recherche de nom précis

    $user = $_POST['recherche'];
    $results = SearchResultsOnePilot($bdd, $user);
}

elseif (isset($_POST['recherche']) and $_POST['recherche'] !=='Liste complète' and $_POST['recherche'] =='') { //si on fait une recherche par filtres


	if (isset($_POST['type']) and $_POST['type']!==''){
		$type = $_POST['type'];
		$Query .= " WHERE test_id_type ='$type'";
		}
	
	}
	if (isset($_POST['note']) and $_POST['note']!==''){
		$note = $_POST['note'];

		if($_POST['type']!=='') {
			$Query .= " AND resultat ='$note'";
		}
		else {
			$Query .= " WHERE resultat ='$note'";
		}
	
	}
	$Query = $bdd->prepare($Query);
	$Query->execute();
	$results = $Query->fetchall();
}

else { //si on ne fait pas de recherche, ou qu'on demande la liste complète
    $results = AllResultsPilots($bdd);
}

require 'vues/Resultats_Mng.php';