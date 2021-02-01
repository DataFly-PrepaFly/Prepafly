<?php
session_start(); 

require 'modele/connexion_bdd.php';
require 'modele/req_cgu.php';

$CGU=RecupererCGU($bdd);
$Modif = true;

require ("vues/Gestion_CGU.php");

if (isset($_SESSION['message_cgu'])) {
    unset($_SESSION['message_cgu']); 
}