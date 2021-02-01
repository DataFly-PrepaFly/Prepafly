<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style/CGU.css" />
    <link rel="stylesheet" href="style/bandeau_prepafly.css"/>
    <link rel="stylesheet" href="style/bandeau_profil.css"/>
    <link rel="stylesheet" href="style/nav_simple.css" />
    <link rel="stylesheet" href="style/footer.css" />
    <title>PrepaFly - Gestion des GCU</title>
</head>

    
<body>

    <?php 
    require 'vues/bandeau_profil.php';
    require 'vues/nav_simple.php';
    ?>

    <h3><br>GESTION CGU</h3><br>

    <?php 
    if (isset($_SESSION['message_cgu'])) {
        echo("<h4>".$_SESSION['message_cgu']."</h4>"); 
    }
    ?>

    <div id="choix">
        <div id="ajout">
            <a href="Ajout_CGU.php">Ajouter un nouvel article</a>
        </div>
    </div>

    <div class="all">
        <?php include("vues/Affichage_cgu.php"); ?>
    </div>

    <?php include("vues/footer.php"); ?>
    
</body>
</html>
