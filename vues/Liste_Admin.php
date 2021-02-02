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
    <title>PrepaFly - Utilisateurs</title>

    <?php 
    include("vues/bandeau_profil.php");
    include("vues/nav_simple.php"); 
    ?>

</head>

<body>

<br><h3>UTILISATEURS</h3><br>

<?php 
    if (isset($_SESSION['message_supp'])) {
        echo("<h4>".$_SESSION['message_supp']."</h4>"); 
    }
    ?>

<div class="texte">
    <p>Choisissez ou entrez le nom de l'utilisateur dont vous souhaitez voir les informations.</p>
</div>

<form action="Liste_Utilisateurs.php" method="POST" id="barre_recherche">
    <input list="utilisateurs" id="recherche" name="recherche" style="width: 12rem;">
    <datalist id="utilisateurs">
    	<option value="Liste complète">
    	<?php
    	foreach ($List as $row) {
    		echo "<option value=\"" .$row['nom']. "\">";
    	}
    	?>
    </datalist> 
	<input type="submit" id="valider" value="Valider"><br>

    <div id="filtres_ssp">
        <p>Ou faites une recherche par filtres :</p>

        <label for="role">Statut :</label>
        <input list="statut" id="role" name="role">
        <datalist id="statut">
        	<option value="pilote">
        	<option value="manager">
        	<option value="admin">
        </datalist><br>

        <label for="societe">Société :</label>
        <input list="soc" id="societe" name="societe">
        <datalist id="soc">
        	<?php
        	foreach ($SocList as $row) {
        		echo "<option value=\"" .$row[0]. "\">";
        	}
        	?>
        </datalist><br>

        <label for="pays">Pays :</label>
        <input list="p" id="pays" name="pays">
        <datalist id="p">
        	<?php
        	foreach ($PaysList as $row) {
        		echo "<option value=\"" .$row[0]. "\">";
        	}
        	?>
        </datalist><br>
    </div>
    
    <input type="submit" id="valider" value="Valider"><br>

<br>
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
		<th>Actions</th>
	</tr>

	<?php
    $j=0;
    foreach ($results as $row) {
        echo "<tr>";
        for ($i=0; $i<=5; $i++ ) {
            if($i==4) {
                echo "<td>".$Liste_type_compte[$row[$i]]."</td>";   
            }
            else {
                echo "<td>".$row[$i]."</td>";
            }
        }
    echo "<td><a href='controleurs/Suppression_User.php?idsuppr=".$row[6]."' class=\"bouton_supp\" onclick='return confirm('Voulez-vous vraiment supprimer cet utilisateur ?');'>Supprimer</a></td>";
        echo "</tr>";
    }
    ?>
</table><br><br>


<?php include("vues/footer.php"); ?>


</body>
</html>