<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="style/Profil.css" />
    <link rel="stylesheet" href="style/bandeau_prepafly.css"/>
    <link rel="stylesheet" href="style/nav_deroulant.css" />
    <link rel="stylesheet" href="style/footer.css" />
    <title>PrepaFly</title>
</head>

<body>
    
    <?php 
    include("vues/bandeau_profil.php");
    include("vues/nav_deroulant.php"); 
    ?>

    <br><h3>PROFIL</h3>

    <div id="infos_profil">

        <?php echo "<p><span>Nom</span> : $nom</p>";
        echo "<p><span>Prénom</span> : $prenom</p>";
        echo "<p><span>Sexe</span> : $sexe</p>";
        echo "<p><span>Date de naissance</span> : $date_naissance</p>";
        echo "<p><span>Adresse mail</span> : $mail</p>";
        echo "<p><span>Adresse</span> : $adresse $code_postal $ville</p>";
        echo "<p><span>Société</span> : $societe</p>";
        echo "<p><span>Statut</span> : $statut</p>";
        ?>
    </div>
    <?php include("vues/footer.php"); ?>

</body>
</html>