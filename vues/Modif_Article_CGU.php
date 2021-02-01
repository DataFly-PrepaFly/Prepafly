<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style/Ajout_FAQ.css" />
        <link rel="stylesheet" href="style/bandeau_prepafly.css"/>
        <link rel="stylesheet" href="style/nav_simple.css" />
        <link rel="stylesheet" href="style/footer.css" />
        <title>PrepaFly - Modification CGU</title>

    </head>
<body>
    <?php 
    require 'vues/bandeau_profil.php';
    require 'vues/nav_simple.php';
    ?>

	<h3><br>MODIFICATION D'UN ARTICLE</h3><br>

	<form action="Modification_CGU.php" method="post" id="form">
		<div id="bloc">
			<div id="titre">
				<label for="modif_titre">Titre : </label><br>
                <input type="hidden" id="idarticle" name="idarticle" value="<?=$ida;?>">
                <input type="text" id="modif_titre" name="modif_titre" required size="100" value="<?=$titre;?>"><br><br>
            </div>

            <div id="rep">
            	<label for="modif_article">Article : </label><br>
            	<textarea name="modif_article" id="modif_article"><?=$article;?></textarea><br>
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