<?php
//on set toutes les variables liées à la bdd
session_start();
include("modele/connexion_bdd.php");
include("modele/req_infos_faq.php");
$infos=InfosFAQ($bdd);

//Pour afficher la question n, écrire echo $infos[n-1][1]
//Pour afficher la réponse n, écrire echo $infos[n-1][2]

//on vérifie s'il existe une session ou non
if (isset($_SESSION['mail'])) {
	require 'vues/bandeau_profil.php';
}
else {
	require 'vues/bandeau_prepafly.php';
}

include("vues/nav_simple.php");

include("FAQ_Admin.php");


include("vues/footer.php");
?>
