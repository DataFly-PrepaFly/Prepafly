<?php
{
$bdd = new PDO('mysql:host=localhost;dbname=prepafly;charset=utf8', 'root', 'root');
}
session_start();
	$nom_pilote_calen=$_POST["nom"];
	$prenom_pilote_calen=$_POST["prenom"]; //Toute les variables récupérés par le formulaire//
    $prenom=$_POST["prenom"];
    $jour=$_POST["jour"];
    $mois=$_POST["mois"];
    $annee=$_POST["annee"];
    $type_test_calen=$_POST['type_test_calen'];
    
    $_SESSION['message_calen']='';
	
	$from = "InfiniteMeasure@gmail.com";
	$to = "$mailpilote";                   //Varariable pour l'envoi du mail, il faudra changer le mail 
	$sujet = "Test programmé";			   //plus tard et en fonction de l'entreprise
	$message = "Vous avez un test programmé à la date du ".$jour."/".$mois."/".$annee.". Veuillez contacter votre manager pour plus d'informations";
	$headers_mail ="From:". $from;
	
	$req=$bdd->prepare("SELECT * FROM utilisateur WHERE nom = ? AND prenom = ?");
	$req->execute(array($nom_pilote_calen,$prenom_pilote_calen));
	$count = $req->rowCount();
	if ($count!=0){
		$req=$bdd->prepare("SELECT mail FROM utilsateur WHERE nom = ? AND prenom = ?");
		$req->execute(array($nom_pilote_calen, $prenom_pilote_calen));
		$mailpilote= $req->fetch();
		mail($to,$sujet,$message,$headers_mail);
		$_SESSION['message_calen']='Le mail a bien été envoyé';
		header('Location : calendrier.php', true, 301);
	}
	else
	{
		$_SESSION['message_calen']='Veuillez vérifier le nom et prénom du pilote';
		header('Location : calendrier.php', true, 301);
	}
?>







