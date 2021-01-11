

<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style/Accueil_Pilote.css" />
    <link rel="stylesheet" href="style/bandeau_prepafly.css"/>
    <link rel="stylesheet" href="style/nav_simple.css" />
    <link rel="stylesheet" href="style/footer.css" />
    <title>PrepaFly</title>
</head>
<body>
    <?php include("bandeau_profil.php"); ?>
    <?php include("nav_simple.php"); ?>

    <div class="choix">
        
        <?php
            $username = $_SESSION['mail'];
            // afficher un message
            echo "<div><br><br>Bonjour $username ! Que souhaitez-vous faire aujourd'hui ? </div>";
        ?>

        <div class="num"><a href="#">Consulter les tests programmés à venir</a></div>

        <div class="num"><a href="Resultat.php">Consulter les derniers résultats obtenus</a></div>

        <div class="num"><a href="#">Faire des tests d'entraînement</a></div><br><br>

    </div>

    <?php include("footer.php"); ?>
</body>
</html>