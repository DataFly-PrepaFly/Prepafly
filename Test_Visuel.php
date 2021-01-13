<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style/Type_Test.css" />
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

    <br /><h3> TEST VISUEL </h3><br>

    <div id="durée">
    	<p>Ce test dure environ 20 minutes. Une fois le test terminé vous pourrez directement voir votre score.</p>
        <img id="img_cockpit" src='images/test_visuel.jpeg'>
    </div>

    <div id="bouton">
    	<a href="#" id="lancer_test">Lancer le test</a>
    </div>



    <?php include("vues/footer.php"); ?>
</body>


</html>

    