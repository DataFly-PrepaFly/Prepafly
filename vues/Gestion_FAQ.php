<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style/F.A.Q.css" />
    <link rel="stylesheet" href="style/bandeau_prepafly.css"/>
    <link rel="stylesheet" href="style/bandeau_profil.css"/>
    <link rel="stylesheet" href="style/nav_simple.css" />
    <link rel="stylesheet" href="style/footer.css" />
    <title>PrepaFly - F.A.Q.</title>
</head>

    
<body>

    <?php 
    require 'vues/bandeau_profil.php';
    require 'vues/nav_simple.php';
    ?>

    <h3><br>GESTION F.A.Q.</h3><br>

    <?php 
    if (isset($_SESSION['message_faq'])) {
        echo("<h4>".$_SESSION['message_faq']."</h4>"); 
    }
    ?>

    <div id="choix">
        <div id="ajout">
            <a href="Ajout_FAQ.php">Ajouter une nouvelle question</a>
        </div>
    </div>

    <div class="container">
        <?php include("vues/Affichage_faq.php"); ?>
    </div>

    <?php include("vues/footer.php"); ?>
    <script src="faq.js"></script>
    
</body>
</html>
