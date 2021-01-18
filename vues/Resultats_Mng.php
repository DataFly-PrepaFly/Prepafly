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
    <p>Choisissez ou entrez le nom du pilote dont vous souhaitez connaître le résultat.</p>
</div>

<form action="Resultats.php" method="POST" id="barre_recherche">
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
		<th>Nom du pilote</th>
		<th>Date du test</th>
		<th>Type de test</th>
		<!-- <th>Durée du test</th> -->
		<th>Résultat obtenu</th>
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
</table><br>


<?php include("vues/footer.php"); ?>


</body>
</html>

