
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
    <link rel="stylesheet" href="style/Resultat.css" />
    <link rel="stylesheet" href="style/bandeau_profil.css"/>
    <link rel="stylesheet" href="style/bandeau_prepafly.css"/>
    <link rel="stylesheet" href="style/nav_simple.css" />
    <link rel="stylesheet" href="style/footer.css" />
<title>PrepaFly - Résultats</title>

<meta charset="UTF-8">

<body>

    <?php 
    if (isset($_SESSION['mail'])) {
          require 'vues/bandeau_profil.php';
    }
    else {
          require 'vues/bandeau_prepafly.php';
    }

    include("vues/nav_simple.php"); 
    ?>

    <br /><h3>RÉSULTATS</h3><br />

    <table id="tableau">
        <tr>
            <th>Test</th>
            <th>Date du test</th>
            <th>Durée du test</th>
            <th>Résultat</th>
        </tr>
        <tr>
            <td>Test visuel n°1</td>
            <td>01/09/2020</td>
            <td>30'55''</td>
            <td>A</td>
        </tr>
        <tr>
            <td>Test visuel n°2</td>
            <td>03/09/2020</td>
            <td>26'41''</td>
            <td>C</td>
        </tr>
        <tr>
            <td>Test auditif n°1</td>
            <td>05/09/2020</td>
            <td>25'22''</td>
            <td>B</td>
        </tr>
        <tr>
            <td>Test auditif n°2</td>
            <td>09/09/2020</td>
            <td>15'39''</td>
            <td>A</td>
        </tr>
    </table><br><br><br>

    <?php include("vues/footer.php"); ?>


</body>
</html>
