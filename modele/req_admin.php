<?php 

function SuppUser ($bdd, $nss)
{
	$req = $bdd->prepare("DELETE FROM utilisateur WHERE nSS = ?");
	$req->execute(array($nss));
}