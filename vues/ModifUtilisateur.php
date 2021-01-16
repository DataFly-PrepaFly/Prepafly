
<!DOCTYPE html>
<html>

<head>
<title>PrepaFly</title> 
<meta charset="UTF-8">
<link rel="stylesheet" href="style/AjoutUtilisateur.css" />
<link rel="stylesheet" href="style/bandeau_prepafly.css"/>
<link rel="stylesheet" href="style/nav_simple.css" />
<link rel="stylesheet" href="style/footer.css" />
<title>PrepaFly</title>
</head>
<body>

<header>
    <?php 
    include("vues/bandeau_profil.php");
    include("vues/nav_simple.php"); 
    ?>
</header>

	<br><h3>MISE À JOUR DU PROFIL</h3>

	<p>Merci de compléter uniquement les champs à mettre à jour.</p><br>

		<form action="NewUser.php" method="post" id="form"> 
			<div id="formulaire">
				<div id="form_part1">

					<div class="champs1">
						<label for="nom">Nom :</label>
						<input type="text" id="nom" name="nom">
						<br>
					</div>

					<div class="champs1">
						<label for="prenom">Prénom :</label>
						<input type="text" id="prenom" name="prenom">
						<br>
					</div>

					<div class="champs1">
						<label for="sexe">Sexe :</label>
						<select>
							<option value="homme">Homme</option>
				            <option value="femme">Femme</option>
				            <option value="non_precise">Non précisé</option>
						</select>
						<br>
					</div>

					<div class="champs1">
						<label for="date_naissance">Date de naissance :</label>
						<input type="Date" id="date_naissance" name="date_naissance">
						<br>
					</div>

					<div class="champs1">
						<label for="mailpro">Mail Professionnel :</label>
						<input type="text" id="mailpro" name="mailpro" size="40">
						<br>
					</div>

					<div class="champs1">
						<label for="mailproconf">Confirmer le mail :</label>
						<input type="text" id="mailproconf" name="mailproconf" size="40">
						<br>
					</div>

				</div>

				<div id="form_part2">
					<div class="champs2">
						<label for="adresse">Adresse :</label>
						<input type="text" id="adresse" name="adresse" size="40">
						<br>
					</div>

					<div class="champs2">
						<label for="ville">Ville :</label>
						<input type="text" id="ville" name="ville" size="30">
						<br>
					</div>

					<div class="champs2">
						<label for="code_postal">Code Postal :</label>
						<input type="text" id="code_postal" name="code_postal" size="15">
						<br>
					</div>

					<div class="champs2">
						<label for="societe">Société :</label>
						<input type="text" id="societe" name="societe" size="30">
						<br>
					</div>

					<div class="champs2">
						<label for="statut">Statut :</label>
						<select>
							<option value="pilote">Pilote</option>
				            <option value="manager">Manager</option>
				            <option value="admin">Administrateur</option>
						</select>
						<br><br>
					</div>

				</div>
			</div>

			<div class="end">
                <a href="#" onclick="resetForm();" id="reinit" type="reset">Réinitialiser</a>
                <a href="#" id="valider" type="submit">Mettre à jour</a><br>
            </div>
		</form>
	</div>

<?php include("vues/footer.php"); ?>


</body>

<script type="text/javascript">
    function resetForm() {
        document.getElementById("form").reset();
    }
</script>

</html>