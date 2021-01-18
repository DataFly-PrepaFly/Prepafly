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

<?php 
if (isset($_SESSION['mail'])) {
require 'vues/bandeau_profil.php';
}
else {
    require 'vues/bandeau_prepafly.php';
}

require 'vues/nav_simple.php';
?>

<body>
    <script src="fonctions.js"></script>

    <h3><br>F.A.Q.</h3>

    <div class="container">
        <div class="question">
            <div class="visible" onclick="Reponse(1)">

<!-- Pour afficher la question n, écrire echo $infos[n-1][1]
Pour afficher la réponse n, écrire echo $infos[n-1][2] -->

                <a href="#"><?php echo $infos[0][1];?><img class="deroulant" src="images/icons8_plus.png"></a>
                
            </div>
            <div id="deroulant1" class="reponse" style="display: none;">
                <p><?php echo $infos[0][2];?></p>
            </div>
        </div>
        <div class="question">
            <div class="visible" onclick="Reponse(2)">
                <a href="#"><?php echo $infos[1][1];?><img class="deroulant" src="images/icons8_plus.png"></a>
            </div>
            <div id="deroulant2" class="reponse" style="display: none;">
                <p><?php echo $infos[1][2] ?></p>
            </div>
        </div>
        <div class="question">
            <div class="visible" onclick="Reponse(3)">
                <a href="#">Question 3 <img class="deroulant" src="images/icons8_plus.png"></a>
            </div>
            <div id="deroulant3" class="reponse" style="display: none;">
                <p>Réponse 3</p>
            </div>
        </div>
        <div class="question">
            <div class="visible" onclick="Reponse(4)">
                <a href="#">Question 4 <img class="deroulant" src="images/icons8_plus.png"></a>
            </div>
            <div id="deroulant4" class="reponse" style="display: none;">
                <p>Réponse 4</p>
            </div>
        </div>
        <div class="question">
            <div class="visible" onclick="Reponse(5)">
                <a href="#">Question 5 <img class="deroulant" src="images/icons8_plus.png"></a>
            </div>
            <div id="deroulant5" class="reponse" style="display: none;">
                <p>Réponse 5</p>
            </div>    
        </div>
    </div>
</body>

<?php 
require 'vues/footer.php';
?>

</html>