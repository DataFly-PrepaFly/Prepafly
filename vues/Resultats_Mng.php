<!DOCTYPE html>
<html lang="fr">
<link rel="stylesheet" href="style/Resultat.css" />
<link rel="stylesheet" href="style/Resultats_Mng.css" />
<link rel="stylesheet" href="style/Inscription.css" />
<link rel="stylesheet" href="style/bandeau_prepafly.css"/>
<link rel="stylesheet" href="style/nav_simple.css" />
<link rel="stylesheet" href="style/footer.css" />
<meta charset="UTF-8"../>
<head>
    <title>PrepaFly - Résultats</title>

    <?php 
    include("vues/bandeau_profil.php");
    include("vues/nav_simple.php"); 
    ?>

</head>

<body>

<br><h3>RÉSULTATS</h3>

<form action="Resultats.php" method="POST" id="barre_recherche">
    <div id="allrecherche">
        <div id="recherche">
            <p>Choisissez ou entrez le nom du pilote dont vous souhaitez voir les résultats :</p>

            <input list="utilisateurs" id="recherche" name="recherche" size="15">
            <datalist id="utilisateurs">
            	<option value="Liste complète">
            	<?php
            	foreach ($List as $row) {
            		echo "<option value=\"" .$row['nom']. "\">";
            	}
            	?>
            </datalist><br>
            <input type="submit" id="valider" value="Valider"><br>
        </div>

        <!--<label for="date">Date (aaaa-mm-jj) :</label>
        <input type="text" id="date" name="date" maxlength="10" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}"><br>-->

        <div id="filtres">
            <p>Ou filtrez votre recherche par :</p>
            <div id="cases_filtres">

                <label for="type">Type de test :</label>
                <input list="test" id="type" name="type" size="12">
                <datalist id="test">
                	<option value="complet">
                	<option value="regulier">
                	<option value="auditif">
                	<option value="visuel">
                </datalist><br>

                <label for="note">Résultat :</label>
                <input list="n" id="note" name="note" size="12">
                <datalist id="n">
                	<option value="A">
                	<option value="B">
                	<option value="C">
                </datalist><br>
            </div>

            <input type="submit" id="valider" value="Valider"><br><br>
        </div>
    </div>
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
</table><br><br>

<?php include("vues/footer.php"); ?>

</body>
</html>