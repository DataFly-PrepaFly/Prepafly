<?php 
session_start(); 

require 'modele/connexion_bdd.php';
require 'modele/req_infos_faq.php';

$FAQ=RecupererFAQ($bdd);
$Modif = true;

require 'vues/Gestion_FAQ.php';

if (isset($_SESSION['message_faq'])) {
    unset($_SESSION['message_faq']); 
}
