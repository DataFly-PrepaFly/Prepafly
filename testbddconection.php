<?php 
echo("bnjr");
	
$bdd=new PDO('mysql:hostlocalhost;dbname=app_exemple, charset=utf8', 'root', ''); 

$reponse = $bdd->query("SELECT * FROM users"); 
$_donnees = $reponse->fetch())
echo $_donnees['nom'];

?>