
<?php
    session_start();
?>

<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8" />
    <title>PrepaFly</title>
     <link rel="stylesheet" media="screen and (max-width: 1450px)" href="formulaire_style.php" />

</head>
<body>

<?php

	function BonneCombinaison($bdd,$nSS,$mdp)
	{
		$requete = $bdd->prepare("SELECT * FROM utilisateur WHERE nSS = ? AND mdp = ? ");
		$requete->execute(array($nSS,$mdp));
		$count = $requete->rowCount();
		if($count!=0) {
			return true;
		}
		else {
			return false;
		}
	}

	function ListeComptes($bdd,$nSS)
	{
		$requete = $bdd->prepare("SELECT type_utilisateur_id_type FROM utilisateur WHERE nSS = '".$username."' AND mdp = '".$password."' ");
		$requete->execute(array($nSS));
		$comptes = $requete->fetch();
		return $comptes;
	}

	function InfosPersonne($bdd,$nSS)
	{
		$requete = $bdd->prepare("SELECT * FROM utilisateur WHERE nSS = '".$username."' AND mdp = '".$password."' ");
		$requete->execute(array($nSS));
		$InfosPersonne = $requete->fetch();
		return $InfosPersonne;
	}

	function InfosAdresse($bdd,$id)
	{
		$requete = $bdd->prepare("SELECT * FROM adresse WHERE nSS = '".$username."' AND mdp = '".$password."' ");
		$requete->execute(array($id));
		$InfosAdresse = $requete->fetch();
		return $InfosAdresse;
	}

	?>

	<?php include("bandeau_prepafly.php"); ?>
    <?php include("nav_simple.php"); ?>

    <br><h3>VOTRE PROFIL</h3><br><br>

    <div class="infos">

    	<p>Nom : 
    		<?php
    			$Adresse = InfosAdresse($bdd, $Infos['adresse']);
    		?>

    </div>

</body>
</html>