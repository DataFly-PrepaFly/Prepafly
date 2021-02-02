
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
	<?php 
    if (isset($_SESSION['message_calendrier'])) {
        echo("<h4>".$_SESSION['message_calendrier']."</h4><br>"); 
    }
    ?>
	<section class="formulaire">
		
		<form action ="Calendrier.php" method="POST">
			<label for="nom">Nom du pilote :</label>		
			<input list="utilisateurs" id="recherche" name="recherche" required>
    		<datalist id="utilisateurs">
    		<?php
    		foreach ($List as $row) {
    			echo "<option value=\"" .$row['nom']." ".$row['prenom']. "\">";
    		}
    		?>
    		</datalist>

			<div class="ligne">
				<label for="date"> Date du test :</label>
				<input type="date" id="date" name="date" required>
			</div>

			<div id="type_tests">
				<label>
		        <input type="radio" name="type_test" value="Test Complet" checked="checked"/>
		       		Test Complet
		    	</label>
				<label>
		        	<input type="radio" name="type_test" value="Test Visuel"  />
		        	Test Visuel
		    	</label>
		    	<label>
		        <input type="radio" name="type_test" value="Test Auditif" />
		        	Test Auditif
		    	</label>

		    	<label>
		        <input type="radio" name="type_test" value="Test Régulier"/>
		        	Test Régulier
		    	</label><br>
		    </div>

			<input type="submit" id="send" value="Envoyer"><br>
		</form>
	</section>

	<?php
	require 'vues/footer.php';
	?>
</body>
</html>