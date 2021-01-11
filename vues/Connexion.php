<!DOCTYPE html>
<html lang="fr">
    <link rel="stylesheet" href="../style/Connexion.css" />
    <link rel="stylesheet" href="../style/bandeau_prepafly.css"/>
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
        

        <form action="..\controleur_connexion.php" method="POST">
            
            <label for="Identifiant">Identifiant :</label> <br>
            <input type="text" id="Identifiant" name="username" size="50" required><br><br>

            <label for="MdP">Mot de Passe :</label> <br>
            <input type="password" id="MdP" name="password" size="50" required><br><br><br />
            
            <div class="connexion">
                <input type="text" value='Mot de passe oublié'>
                <input type="submit" id="submit" value='Se Connecter'>

                <!--
                <div><a href="#">Mot de passe oublié</a></div>
                <div><a href="#"><span>Se Connecter</span></a></div> -->
            </div>


            <?php 
            if ($mdp_incorrect==true) {

            ?>
            <p style='color:red'>Identifiant ou mot de passe incorrect </p>
            <?php 
                }
            ?>


        </form>
		<br>
	</div>
</section>


</body>

</html>

