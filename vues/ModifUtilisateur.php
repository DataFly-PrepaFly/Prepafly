
<!DOCTYPE html>
<html>

<head>
<title>PrepaFly</title> 
<meta charset="UTF-8">
<link rel="stylesheet" href="style/Modif_Utilisateur.css" />
<link rel="stylesheet" href="style/bandeau_prepafly.css"/>
<link rel="stylesheet" href="style/nav_simple.css" />
<link rel="stylesheet" href="style/footer.css" />
<title>PrepaFly - Profil</title>
</head>
<body>

<header>
    <?php 
    include("vues/bandeau_profil.php");
    include("vues/nav_simple.php"); 
    ?>
</header>

<br><h3>MISE À JOUR DU PROFIL</h3>

<div id="phrase">
	<p>Vous pouvez ici mettre à jour vos informations personnelles en remplissant les champs à modifier.</p><br>
</div>

<form name="form" onsubmit="return confirmation();" action="Modification_Profil.php" method="post" id="form"> 
	<div id="formulaire">

		<div class="champs">
			<label for="nom">Nom :</label>
			<input type="text" id="nom" name="nom" size="25">
			<br>
		</div>

		<div class="champs">
			<label for="prenom">Prénom :</label>
			<input type="text" id="prenom" name="prenom" size="25">
			<br>
		</div>

		<div class="champs">
			<label for="date_naissance">Date de naissance :</label>
			<input type="date" id="date_naissance" name="date_naissance" size="25">
			<br>
		</div>

		<div class="champs">
			<label for="mail">Mail Professionnel :</label>
			<input type="email" id="mail" name="mail" size="40">
			<br>
		</div>
		<div class="champs">
			<label for="mail">Confirmer Mail Professionnel :</label>
			<input type="email" id="mailconf" name="mail" size="40"><span id="verifmail" style="color:red;"></span>
			<br>
		</div>

		<div class="champs">
			<label for="adresse">Adresse :</label>
			<input type="text" id="adresse" name="adresse" size="40">
			<br>
		</div>

		<div class="champs">
			<label for="ville">Ville :</label>
			<input type="text" id="ville" name="ville" size="30">
			<br>
		</div>

		<div class="champs">
			<label for="pays">Pays :</label>
			<input type="text" id="pays" name="pays" size="30">
			<br>
		</div>
<!--
		<div class="champs">
			<label for="societe">Société :</label>
			<input type="text" id="societe" name="société_id_societe" size="30">
			<br>
		</div> -->
	</div>

	<div class="end">
        <a href="#" onclick="resetForm();" id="reinit" type="reset">Réinitialiser</a>
        <input id="valider" type="submit" value="Enregistrer"><br>
    </div>
</form>

<?php include("vues/footer.php"); ?>

</body>

<!-- Appel aux fichier de fonctions JS -->
<script type="text/javascript" src="fonctions.js" ></script>

</html>