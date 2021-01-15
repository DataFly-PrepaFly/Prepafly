
<!DOCTYPE html>
<html>

<head>
<title>Annonces - Inscription</title> 
<meta charset="UTF-8">
<link rel="stylesheet" href="style/GestionUtilisateurs.css" />
</head>

<body>

<header>
    <?php 
    include("vues/bandeau_prepafly.php");
    include("vues/nav_simple.php"); 
    ?>
</header>

	<br><h3>AJOUT D'UN UTILISATEUR</h3><br>

	<div id="formulaire">
		<form action="NewUser.php" method="post"> 
			<label for="nom">Nom</label>
			<input type="text" id="nom" name="nom">
			<br>

			<label for="prenom">Prénom</label>
			<input type="text" id="prenom" name="prenom">
			<br>

			<label for="date_naissance">Date de naissance</label>
			<input type="Date" id="date_naissance" name="date_naissance">
			<br>

			<label for="sexe">Sexe</label>
			<select>
				<option value="homme">Homme</option>
	            <option value="femme">Femme</option>
	            <option value="non_precise">Non précisé</option>
			</select>
			<br>

			<label for="mailpro">Mail Professionnel</label>
			<input type="text" id="mailpro" name="mailpro">
			<br>

			<label for="mailproconf">Confirmer le mail</label>
			<input type="text" id="mailproconf" name="mailproconf">
			<br>

			<label for="adresse">Mail Professionnel</label>
			<input type="text" id="adresse" name="adresse">
			<br>

			<label for="adresse">Adresse</label>
			<input type="text" id="adresse" name="adresse">
			<br>

			<label for="ville">Ville</label>
			<input type="text" id="ville" name="ville">
			<br>


			<input type="submit" id="submitbutton" value="send">
		</form>
	</div>
</body>
</html>