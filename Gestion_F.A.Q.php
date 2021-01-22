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
    require 'vues/bandeau_profil.php';
    require 'vues/nav_simple.php';

    require 'modele/connexion_bdd.php';
    require 'modele/req_infos_faq.php';

    $infos=InfosFAQ($bdd);
    ?>

    <body>

    <script src="faq.js"></script>

    <h3><br>GESTION F.A.Q.</h3>

    <div id="choix">
        <div id="ajout">
            <a href="#">Ajouter une nouvelle question</a>
        </div>
        <div id="modif">
            <a href="#">Modifier une question existante</a>
        </div>
    </div>

    <div id="">
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
    </div>

<form method="POST" action="Modifier.php">
<pre>   
1) question <input type="text" name="question1">
    réponse <input type="text" name="réponse1">

<input type="submit" value="Modifer">
</pre>
</form>

<?php 
include("vues/footer.php"); 
?>

</body>
</html>
