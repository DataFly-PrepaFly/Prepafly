

<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8" />
    <title>PrepaFly - Tests</title>
    <link rel="stylesheet" media="screen and (max-width: 1450px)" href="style/Tests.css" />
    <link rel="stylesheet" href="style/bandeau_prepafly.css"/>
    <link rel="stylesheet" href="style/nav_simple.css" />
    <link rel="stylesheet" href="style/footer.css" />
</head>

<header>
    <?php 
    //on vérifie s'il existe une session ou non
    if (!(isset($_SESSION['mail']))) {
        require 'vues/bandeau_profil.php';
    }
    else {
        require 'vues/bandeau_prepafly.php';
    }

    include("vues/nav_simple.php");
    ?>
</header>

<body>

    <br><h3>TESTS</h3>

    <div id="texte">
        <p>Découvrez ici les quatre catégories de tests que nous proposons, avec leurs objectifs respectifs !</p>
    </div>

    <div class="blocs_haut">
        <div class="un"><h4>TESTS VISUELS</h4>
            <p>Ces tests ont pour objectif de mesurer la vitesse de réaction du pilote et sa capacité à réagir face à différents stimuli visuels, qui prendront la forme de signaux et clignotements lumineux. </p>
        </div>
        <div class="deux">
            <h4>TESTS AUDITIFS</h4>
            <p>Les tests auditifs sont conçus pour détecter des défaillances dans la capacité de réaction à des sons inattendus ou persistants auxquels les pilotes peuvent être confrontés.</p>
        </div>
    </div>

    <div class="blocs_bas">
        <div class="trois">
            <h4>TESTS RÉGULIERS</h4>
            <p>Ces tests ont été créés pour permettre au pilote de s'auto-évaluer de manière régulière et rapide, et de tester ses aptitudes générales au cours d'une mise en situation classique.</p>
        </div>
        <div class="quatre">
            <h4>TESTS COMPLETS</h4>
            <p>Les tests complets sont des tests englobant des stimuli de natures variées, permettant de tester sur la durée les capacités d'adaptation et de réaction du pilote. </p>
        </div>
    </div>

    <?php include("vues/footer.php"); ?>

</body>
</html>