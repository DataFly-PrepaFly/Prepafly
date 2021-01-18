<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="style/Profil.css" />
    <link rel="stylesheet" href="style/bandeau_prepafly.css"/>
    <link rel="stylesheet" href="style/nav_simple.css" />
    <link rel="stylesheet" href="style/footer.css" />
    <title>PrepaFly - Profil</title>
</head>

<body>
    
    <?php 
    include("vues/bandeau_profil.php");
    include("vues/nav_simple.php"); 
    ?>

    <br><h3>PROFIL</h3><br>

    <div id="infos_profil">
        <?php 
        echo "<p><span>Nom</span> : $nom</p>";
        echo "<p><span>Prénom</span> : $prenom</p>";
        echo "<p><span>Sexe</span> : $sexe</p>";
        echo "<p><span>Date de naissance</span> : $date_naissance</p>";
        echo "<p><span>Adresse mail</span> : $mail</p>";
        echo "<p><span>Adresse</span> : $adresse</p>";
        echo "<p><span>Société</span> : $societe</p>";
        echo "<p><span>Statut</span> : $statut</p>";
        ?>
    </div>

    <div id="end">
        <a href="Modification_Profil.php" id="valider" type="submit">Modifer mes informations</a><br>
    </div>

    <?php include("vues/footer.php"); ?>

</body>
</html>