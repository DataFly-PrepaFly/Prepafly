<?php
session_start();

{
$bdd = new PDO('mysql:host=localhost;dbname=prepafly;charset=utf8', 'root', 'root');
}
?>
<!DOCTYPE html>
<head>
	<title>Calendrier</title> 
</head>
<body>
	<section class="formulaire">
		<?php 
		echo $_SESSION['message_calen'];
		?>
		<form action ="traitement_calen.php" method="POST">
		<label for="prenom">Prénom du Pilote : </label><br>
		<input type="text" id="prenom" name="prenom"><br>
		<label for="nom">Nom du Pilote : </label><br>
		<input type="text" id="nom" name="nom" ><br>
		<br>
		<label for = "jour"> Jour : </label><br>
		<input type="text" id="jour" name="jour"><br>
		<label for = "mois"> Mois : </label><br>
		<input type="text" id="mois" name="mois"><br>
		<label for = "annee"> Année : </label><br>
		<input type="text" id="annee" name="annee"><br>
		<label>
        <input type="radio" name="type_test_calen" value="Test Complet" checked="checked"/>
       		Test Complet
    	</label>
		<label>
        	<input type="radio" name="type_test_calen" value="Test visuel"  />
        	Test visuel
    	</label>
    	<label>
        <input type="radio" name="type_test_calen" value="Test auditif" />
        	Test auditif
    	</label>
   		<br />
		<br />
		<input type="submit" value="Envoyer">
		</form>
	</section>
</body>
</html>