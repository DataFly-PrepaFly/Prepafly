<?php
function InfosCGU ($bdd)
{
	$req = $bdd->prepare("SELECT * FROM cgu");
	$req->execute();
	$InfosCGU = $req->fetchAll();
	return ($InfosCGU);
}
?>