
<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="style/AjoutUtilisateur.css" />
<link rel="stylesheet" href="style/bandeau_prepafly.css"/>
<link rel="stylesheet" href="style/nav_simple.css" />
<link rel="stylesheet" href="style/footer.css" />
<title>PrepaFly - Ajout Utilisateur</title>
</head>

<body>

<header>
    <?php 
    include("vues/bandeau_profil.php");
    include("vues/nav_simple.php"); 
    ?>
</header>

	<br><h3>AJOUT D'UN UTILISATEUR</h3><br>

		<form action="NewUser.php" onsubmit="return confirmation();" method="post" id="form"> 
			<div id="formulaire">
				<div id="form_part1">

					<div class="champs1">
						<label for="nom">Nom :</label>
						<input type="text" id="nom" name="nom" onchange="this.value=this.value.toUpperCase()">
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
						<label for="mail">Mail professionnel :</label>
						<input type="email" id="mail" name="mail" size="40">
						<br>
					</div>

					<div class="champs1">
						<label for="mailconf">Confirmer le mail :</label>
						<input onchange="VerifMail()"type="email" id="mailconf" name="mailconf" size="40"><span id="verifmail" style="color:red;"></span>
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
						<label for="pays">Pays :</label>
						<input type="text" id="pays" name="pays" size="20">
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
                <a href="#" id="valider" type="submit">Enregistrer</a><br>
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

<script type="text/javascript" src="fonctions.js" ></script>


</html>