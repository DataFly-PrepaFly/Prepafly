
<?php 

try
{
	// Tentative de connexion à la bdd 
	$bdd = new PDO('mysql:host=localhost;dbname=prepafly;charset=utf8', 'root', '');
}

catch(Exception $e) //Si la tentative échoue
{
	die('Erreur : '.$e->getMessage());
}

?>