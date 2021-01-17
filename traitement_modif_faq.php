<?php 

$reponse = $bdd->query('UPDATE faq SET question=$_POST["question1"], reponse=$_POST["réponse1"] WHERE id_question=1');

?>
