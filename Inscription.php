<?php 

if (isset($_POST['nom'], 
	$_POST['prenom'], 
	$_POST['date'], 
	$_POST['mail'], 
	$_POST['mailpro'], 
	$_POST['num'], 
	$_POST['cpgn'], 
	$_POST['fonction'], 
	$_POST['demande'])) {

	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$date = $_POST['date'];
	$mail = $_POST['mail'];
	$mailpro = $_POST['mailpro'];
	$num = $_POST['num'];
	$cpgn = $_POST['cpgn'];
	$fonction = $_POST['fonction'];
	$demande = $_POST['demande'];


}

require 'vues/Inscription.php';