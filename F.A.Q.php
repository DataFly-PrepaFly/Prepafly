<?php

//on set toutes les variables liées à la bdd
require ("modele/connexion_bdd.php");
require ("modele/req_infos_faq.php");

$FAQ=RecupererFAQ($bdd);
$Modif = false;

require ("vues/FAQ.php");
?>
