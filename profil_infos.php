<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="style/profil.css" />
    <link rel="stylesheet" href="style/bandeau_prepafly.css"/>
    <link rel="stylesheet" href="style/nav_simple.css" />
    <link rel="stylesheet" href="style/footer.css" />
    <title>PrepaFly</title>
</head>


<body>
    
    <?php include("vues/bandeau_profil.php");
    include("vues/nav_simple.php"); 
    ?>
    <div class="profil">
        <h1>Profil</h1>
        <?php echo "<p>Nom : $nom </p>";
        echo "<p>Prénom : $prenom </p>";
        echo "<p>Mot de passe : $mdp </p>";
        echo "<p>E-mail : $mail </p>";
        echo "<p>Adresse : $adresse , $ville  </p>";
        echo "<p>Compagnie aérienne : $compagnie </p>";
        ?>
    </div>
    <?php include("vues/footer.php"); ?>

</body>
</html>