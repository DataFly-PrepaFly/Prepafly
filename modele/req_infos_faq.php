<?php

function RecupererFAQ ($bdd)
{
	$req = $bdd->prepare("SELECT * FROM faq");
	$req->execute();
	return ($req->fetchAll());
}


function QuestionFAQ ($bdd,$idquestion)
{
	$req = $bdd->prepare("SELECT * FROM faq WHERE id_question = ?");
	$req->execute(array($idquestion));
	return ($req->fetch());
}


function NewQuestion ($bdd, $question, $reponse) 
{
	$req = $bdd->prepare("INSERT INTO faq (question, reponse) VALUES (:question, :reponse)");
	$req->execute(array(
		'question' => $question,
		'reponse' => $reponse));
}


function ModifQuestion ($bdd, $question, $reponse, $id)
{
	$req = $bdd->prepare("UPDATE faq SET question = ?, reponse = ? WHERE id_question = ? ");
	$req->execute(array($question, $reponse, $id));
}


function SuppQuestion ($bdd, $id)
{
	$req = $bdd->prepare("DELETE FROM faq WHERE id_question = ? ");
	$req->execute(array($id));
}