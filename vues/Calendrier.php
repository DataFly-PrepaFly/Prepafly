<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<meta charset="UTF-8">
<link rel="stylesheet" href="style/Calendrier.css" />
<link rel="stylesheet" href="style/bandeau_prepafly.css"/>
<link rel="stylesheet" href="style/nav_simple.css" />
<link rel="stylesheet" href="style/footer.css" />
<head>
	<title>PrepaFly - Calendrier</title> 
</head>
<body>
	<?php
	require 'vues/bandeau_profil.php';
	require 'vues/nav_simple.php';
	?>

	<br><h3>PROGRAMMER UN TEST</h3><br>
	<section class="formulaire">
		
		<form action ="send.php" method="POST">
			<div>
				<label for="nom">Nom</label>
				<input type="text" name="nom"></input>

				<label for="prenom">Prenom</label>
				<input type="text" name="prenom"></input>

			<div class="ligne">
				<label for="date"> Date du test :</label>
				<input type="date" id="date" name="date_test" required>
			</div>

			<div id="type_tests">
				<label>
		        <input type="radio" name="type_test_calen" value="Test Complet" checked="checked"/>
		       		Test Complet
		    	</label>
				<label>
		        	<input type="radio" name="type_test_calen" value="Test visuel"  />
		        	Test Visuel
		    	</label>
		    	<label>
		        <input type="radio" name="type_test_calen" value="Test auditif" />
		        	Test Auditif
		    	</label>

		    	<label>
		        <input type="radio" name="type_test_calen" />
		        	Test Régulier
		    	</label><br>
		    </div>

	    	<?php 
			echo $message_erreur;
			?>

			<input type="submit" id="send" value="Envoyer"><br>
		</form>
	</section>

	<?php
	require 'vues/footer.php';
	?>
</body>
</html>