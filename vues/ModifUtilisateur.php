
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

<form onsubmit="return confirmation();" action="Modification_Profil.php" method="post" id="form"> 
	<div id="formulaire">
		<div class="champs">
			<label for="mail">Mail Professionnel :</label>
			<input type="email" id="mail" name="mail" size="40">
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
			<label for="code_postal">Code Postal :</label>
			<input type="numer_format" maxlength="5" id="code_postal" name="code_postal" size="10">
			<br><p id="msg_code"></p>
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

<script type="text/javascript">

    function resetForm() {
        document.getElementById("form").reset();
    }

    function confirmation() {
        var confirmation = confirm("Voulez-vous vraiment soumettre ces modifications ?");
        return confirmation;
    }


    function VerifCode() {
        var champ = document.getElementById("code_postal");
        var msg = document.getElementById("msg_code");
        if (/[^0-9]/.test(champ.value)) {   //La regex renvoie true si un caractère autre qu'un chiffre est présent
          msg.innerHTML = "Attention, il faut écrire 5 chiffres";
          champ.focus();
        }
        else {
          msg.innerHTML = "";
        }
    }


</script>

</html>