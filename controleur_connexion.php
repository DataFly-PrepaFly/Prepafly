
<?php 

session_start();

require 'modele/index.php';

require 'modele/fct_aff_accueil.php';


if (isset($_SESSION['mail'])) {

	$TypeCompte = $_SESSION['TypeCompte'];
	AffAccueil($TypeCompte);
}


elseif (isset($_POST['username']) && isset($_POST['password'])) {

    if($username !== "" && $password !== "") {

    	$mail = $_POST['username'];
		$mdp = $_POST['password'];

		require 'modele/req_sql.php';

		if (BonId($bdd, $mail, $mdp)) {

			$_SESSION['mail'] = $mail;
			$InfosUser = InfosUser($bdd, $mail);
			$_SESSION['infos'] = $InfosUser;
			$IdTypeCompte = $InfosUser['type_utilisateur_id_type'];
			$_SESSION['TypeCompte'] = $IdTypeCompte;

			AffAccueil($IdTypeCompte);
		}

		else {
			$mdp_incorrect = true;
			require 'vues/Connexion.php';
		}

    }

    else {
    	$mdp_incorrect = true;
		require 'vues/Connexion.php';
    }
	
}

else {
	$mdp_incorrect = false;
	require 'vues/Connexion.php';
}