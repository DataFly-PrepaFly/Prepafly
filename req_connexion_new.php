
<?php 

//fonction vérifiant si l'id et le mdp sont corrects
function BonId($bdd, $mail, $mdp)
{
	$req = $bdd->prepare("SELECT * FROM utilisateur WHERE mail = ?");
	$req->execute(array($mail));
	$Infos = $req->fetch();

	if (password_verify($mdp,$Infos['mdp'])) {
		return true;
	}
	else {
		return false;
	}

}
