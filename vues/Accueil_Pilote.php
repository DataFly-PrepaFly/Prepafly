<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style/Accueil_Profil.css" />
    <link rel="stylesheet" href="style/bandeau_prepafly.css"/>
    <link rel="stylesheet" href="style/nav_simple.css" />
    <link rel="stylesheet" href="style/footer.css" />
    <title>PrepaFly - Accueil</title>
</head>
<body>
    <?php 
    include("bandeau_profil.php");
    include("nav_simple.php"); 

    echo "<div class=\"bonjour\">Bienvenue $prenom ! Que souhaitez-vous faire aujourd'hui ?</div>";
    ?>

    <div class="choix">
        <div class="num"><a href="#">Consulter les tests programmés à venir</a></div>

        <div class="num"><a href="Resultat.php">Consulter les derniers résultats obtenus</a></div>

        <div class="num" id="clic_tests" onclick="ListeTests()"><a href="#">Faire des tests d'entraînement</a></div><br><br>
        <div id="liste_tests" style="display: none;">
            <div id="ligne1">
                <div id="visuel"><a href="Test_Visuel.php">Test Visuel</a></div>
                <div id="auditif"><a href="Test_Auditif.php">Test Auditif</a></div>
            </div>
            <div id="ligne2">
                <div id="regulier"><a href="Test_Régulier.php">Test Régulier</a></div>
                <div id="complet"><a href="Test_Complet.php">Test Complet</a></div>
            </div>
        </div>

    </div>

    <?php include("footer.php"); ?>

    <script type="text/javascript">
/*Fonction de déroulement sur clic*/
    function ListeTests() {
        var x = document.getElementById("liste_tests");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else { 
            x.style.display = "none";
        }
    }  
    </script>

</body>
</html>