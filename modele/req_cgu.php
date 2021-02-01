<?php
function RecupererCGU ($bdd)
{
	$req = $bdd->prepare("SELECT * FROM cgu");
	$req->execute();
	return ($req->fetchAll());
}

function ArticleCGU ($bdd,$idarticle)
{
	$req = $bdd->prepare("SELECT * FROM cgu WHERE id_article = ?");
	$req->execute(array($idarticle));
	return ($req->fetch());
}


function NewArticle ($bdd, $titre, $article) 
{
	$req = $bdd->prepare("INSERT INTO cgu (titre, article) VALUES (:titre, :article)");
	$req->execute(array(
		'titre' => $titre,
		'article' => $article));
}


function ModifArticle ($bdd, $titre, $article, $id)
{
	$req = $bdd->prepare("UPDATE cgu SET titre = ?, article = ? WHERE id_article = ? ");
	$req->execute(array($titre, $article, $id));
}


function SuppArticle ($bdd, $id)
{
	$req = $bdd->prepare("DELETE FROM cgu WHERE id_article = ? ");
	$req->execute(array($id));
}