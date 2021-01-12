
<?php 

//fonction vérifiant si l'id et le mdp sont corrects
function BonId($bdd, $mail, $mdp)
{
	$req = $bdd->prepare("SELECT * FROM utilisateur WHERE mail = ? AND mdp = ? ");
	$req->execute(array($mail, $mdp));
	$count = $req->rowCount();

	if($count!=0) {
		return true;
	}
	else {
		return false;
	}
}
