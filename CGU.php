<?php
session_start(); 

require 'modele/connexion_bdd.php';
require 'modele/req_cgu.php';

$CGU=RecupererCGU($bdd);
$Modif = false;

require ("vues/CGU.php");
