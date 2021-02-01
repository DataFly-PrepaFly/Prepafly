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

	<h3><br>MODIFICATION D'UNE QUESTION</h3><br>

	<form action="Modification_FAQ.php" method="post" id="form">
		<div id="bloc">
			<div id="question">
				<label for="modif_question">Question : </label><br>
                <input type="hidden" id="idquestion" name="idquestion" value="<?=$idq;?>">
                <input type="text" id="modif_question" name="modif_question" required size="100" value="<?=$question;?>"><br><br>
            </div>

            <div id="rep">
            	<label for="modif_reponse">Réponse : </label><br>
            	<textarea name="modif_reponse" id="modif_reponse"><?=$reponse;?></textarea><br>
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