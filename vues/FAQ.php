<?php
session_start();
?>
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
    if (isset($_SESSION['mail'])) {
    require 'vues/bandeau_profil.php';
    }
    else {
        require 'vues/bandeau_prepafly.php';
    }

    require 'vues/nav_simple.php';
    ?>
    
    <h3><br>F.A.Q.</h3>

    <div class="container">
        <?php include("vues/Affichage_faq.php"); ?>
    </div>

    <?php 
    require 'vues/footer.php';
    ?>

    <script src="faq.js"></script>

</body>
</html>