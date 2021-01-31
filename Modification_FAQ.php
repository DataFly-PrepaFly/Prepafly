<?php 
session_start();


//Si on arrive sur la page pour faire une modification, on n'a que l'id de la question
if (isset($_GET['idquestion'])) {

	//On récupère la question et la réponse
	require 'modele/connexion_bdd.php';
	require 'modele/req_infos_faq.php';
	$idq=$_GET['idquestion'];
	$question_a_modifier = QuestionFAQ ($bdd,$idq);
	$question = $question_a_modifier['question'] ;
	$reponse = $question_a_modifier['reponse'] ;

	require 'vues/Modif_Question_FAQ.php';
}

//Si l'on vient de poster la modification
else if (isset($_POST['modif_question'])) {

	require 'modele/connexion_bdd.php';
	$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Pour voir les erreurs SQL
	require 'modele/req_infos_faq.php';
	ModifQuestion ($bdd, $_POST['modif_question'], $_POST['modif_reponse'], $_POST['idquestion']);

	$_SESSION['message_faq'] = "La modification a bien été effectuée.";
	header('Location: Gestion_F.A.Q.php');
}

else {
	header('Location: Gestion_F.A.Q.php');
}
