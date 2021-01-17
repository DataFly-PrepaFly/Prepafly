<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" media="screen and (max-width: 1450px)" href="style/Accueil_Profil.css" />
    <link rel="stylesheet" href="style/bandeau_prepafly.css"/>
    <link rel="stylesheet" href="style/nav_simple.css" />
    <link rel="stylesheet" href="style/footer.css" />
    <title>PrepaFly</title>
</head>

<body>
	<?php 
    include("bandeau_profil.php");
    include("nav_simple.php"); 

    echo "<div class=\"bonjour\">Bienvenue $prenom ! Que souhaitez-vous faire aujourd'hui ?</div>";
    ?>

    <div class="choix">

        <div class="num"><a href="Gestion_F.A.Q.php">Modifier la F.A.Q.</a></div>
        <div class="num"><a href="#">Modifier les C.G.U.</a></div>
        <div class="num"><a href="#">Accéder à la liste des utilisateurs</a></div><br><br>
    </div>

    <?php include("footer.php"); ?>

</body>
</html>