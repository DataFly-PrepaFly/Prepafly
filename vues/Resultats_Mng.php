<!DOCTYPE html>
<html lang="fr">
<link rel="stylesheet" href="style/Resultat.css" />
<link rel="stylesheet" href="style/Inscription.css" />
<link rel="stylesheet" href="style/bandeau_prepafly.css"/>
<link rel="stylesheet" href="style/nav_simple.css" />
<link rel="stylesheet" href="style/footer.css" />
<meta charset="UTF-8"../>
<head>
    <title>PrepaFly</title>

    <?php 
    include("vues/bandeau_profil.php");
    include("vues/nav_simple.php"); 
    ?>

</head>

<body>

<br><h3>RÉSULTATS</h3>
<div class="texte">
    <p>Entrez le nom du pilote dont vous souhaitez connaître le résultat. Validez sans entrer de nom si vous souhaitez afficher tous les résultats.</p>
</div>

<form action="Resultats.php" method="POST" id="barre_recherche">
    <input type="text" id="recherche" name="recherche">
    <input type="submit" id="valider" value="Valider"><br><br>
</form>

<table id="tableau">
	<tr id="titres">
		<td>Nom du pilote</td>
		<td>Date du test</td>
		<td>Type de test</td>
		<td>Durée du test</td>
		<td>Résultat obtenu</td>
	</tr>
	<tr>
		
	</tr>

</table><br>


<?php include("vues/footer.php"); ?>


</body>
</html>

