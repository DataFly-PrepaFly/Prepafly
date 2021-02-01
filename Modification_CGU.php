<?php 
session_start();


//Si on arrive sur la page pour faire une modification, on n'a que l'id de l'article
if (isset($_GET['idarticle'])) {

	//On récupère le titre et l'article
	require 'modele/connexion_bdd.php';
	require 'modele/req_cgu.php';
	$ida=$_GET['idarticle'];
	$article_a_modifier = ArticleCGU($bdd,$ida);
	$titre = $article_a_modifier['titre'] ;
	$article = $article_a_modifier['article'] ;

	require 'vues/Modif_Article_CGU.php';
}

//Si l'on vient de poster la modification
else if (isset($_POST['modif_article'])) {

	require 'modele/connexion_bdd.php';
	require 'modele/req_cgu.php';
	ModifArticle ($bdd, $_POST['modif_titre'], $_POST['modif_article'], $_POST['idarticle']);

	$_SESSION['message_cgu'] = "La modification a bien été effectuée.";
	header('Location: Gestion_CGU.php');
}

else {
	header('Location: Gestion_CGU.php');
}
