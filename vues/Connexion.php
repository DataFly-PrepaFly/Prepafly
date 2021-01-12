<!DOCTYPE html>
<html lang="fr">
    <link rel="stylesheet" href="style/Connexion.css" />
    <link rel="stylesheet" href="style/bandeau_prepafly.css"/>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width" />

<head>
<title>PrepaFly</title>
</head>

<body>

<?php include("bandeau_prepafly.php"); ?>

<section>
	<div class="login">
		<br /><h3>CONNEXION</h3><br>
        
        <form action="Connexion.php" method="POST">
            
            <label for="Identifiant">Identifiant :</label> <br>
            <input type="text" id="Identifiant" name="mail" size="50" required><br><br>

            <label for="MdP">Mot de Passe :</label> <br>
            <input type="password" id="MdP" name="password" size="50" required><br><br><br />
            
            <div class="connexion">
                <input id="mdp_oublie" type="text" value='Mot de passe oublié'>
                <input type="submit" id="submit" value='Se Connecter'>
            </div>

            <?php

                if($erreur==1 || $erreur==2) {
                    echo "<p style='color:red'>Identifiant ou mot de passe incorrect</p>";
                }
            ?>

        </form>
		<br>
	</div>
</section>


</body>

</html>

