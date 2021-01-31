<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style/Ajout_FAQ.css" />
        <link rel="stylesheet" href="style/bandeau_prepafly.css"/>
        <link rel="stylesheet" href="style/nav_simple.css" />
        <link rel="stylesheet" href="style/footer.css" />
        <title>PrepaFly - F.A.Q.</title>

    </head>
<body>
    <?php 
    require 'vues/bandeau_profil.php';
    require 'vues/nav_simple.php';
    ?>

	<h3><br>AJOUT D'UNE QUESTION</h3><br>

	<form action="Ajout_FAQ.php" method="post" id="form">
		<div id="bloc">
			<div id="question">
				<label for="question">Question : </label><br>
                <input type="text" id="question" name="question" required size="100"><br><br>
            </div>

            <div id="rep">
            	<label for="reponse">Réponse : </label><br>
            	<textarea name="reponse" id="reponse"></textarea><br>
            </div>
        </div>

        <div class="end">

            <a href="#" id="reinit" onclick="resetForm();" type="reset">Réinitialiser</a>
            <input type="submit" id="valider" value="Enregistrer">
        </div>

    </form>
</body>

	<script type="text/javascript">
	    function resetForm() {
	        document.getElementById("form").reset();
	    }

	    function confirmation() {
	        var confirmation = confirm("Voulez-vous vraiment enregistrer cette nouvelle question ?");
	        return confirmation;
	    }
	</script>
</html>