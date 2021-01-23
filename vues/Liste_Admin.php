<!DOCTYPE html>
<html lang="fr">
<link rel="stylesheet" href="style/Resultat.css" />
<link rel="stylesheet" href="style/Inscription.css" />
<link rel="stylesheet" href="style/bandeau_prepafly.css"/>
<link rel="stylesheet" href="style/nav_simple.css" />
<link rel="stylesheet" href="style/footer.css" />
<meta charset="UTF-8"../>
<head>
    <title>PrepaFly - Utilisateurs</title>

    <?php 
    include("vues/bandeau_profil.php");
    include("vues/nav_simple.php"); 
    ?>

</head>

<body>

<br><h3>UTILISATEURS</h3><br>

<div class="texte">
    <p>Choisissez ou entrez le nom de l'utilisateur dont vous souhaitez voir les informations.</p>
</div>

<form action="Liste_Utilisateurs.php" method="POST" id="barre_recherche">
    <input list="utilisateurs" id="recherche" name="recherche">
    <datalist id="utilisateurs">
    	<option value="Liste complète">
    	<?php
    	foreach ($List as $row) {
    		echo "<option value=\"" .$row['nom']. "\">";
    	}
    	?>
    </datalist>
    <input type="submit" id="valider" value="Valider"><br><br>
</form>

<table id="tableau">
	<tr id="titres">
		<th>Nom</th>
		<th>Prénom</th>
		<th>Ville</th>
		<!-- <th>Durée du test</th> -->
		<th>Pays</th>
		<th>Statut</th>
		<th>Société</th>
	</tr>

	<?php
	foreach ($results as $row) {
		echo "<tr>";
		for ($i=0; $i<=3; $i++ ) {
			echo "<td>".$row[$i]."</td>";
		}
		echo "</tr>";
	}
	?>
</table><br><br>


<?php include("vues/footer.php"); ?>


</body>
</html>
