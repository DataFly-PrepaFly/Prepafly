<?php
function InfosFAQ ($bdd)
{
	$req = $bdd->prepare("SELECT * FROM faq");
	$req->execute();
	$InfosFAQ = $req->fetchAll();
	return ($InfosFAQ);
}
?>