
<?php 
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../style/F.A.Q.css" />
        <link rel="stylesheet" href="../style/bandeau_prepafly.css"/>
        <link rel="stylesheet" href="../style/nav_simple.css" />
        <link rel="stylesheet" href="../style/footer.css" />
        <title>PrepaFly</title>

    </head>

        <!-- Début du Java Script -->
    <script>
        function Reponse() {
            var x = document.getElementById("deroulant");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }  

        function Inverse() {
            var y = document.getElementById("fermer");
            if (y.style.display === "block") {
                y.style.display = "none";
            } else {
                y.style.display = "block";
            }
        }   

    </script> 
        <!-- Fin du Java Script -->

    <body>

        <?php include("bandeau_prepafly.php"); ?>
        <?php include("nav_simple.php"); ?>

        <h3><br />F.A.Q.</h3>

            <div class="container">
                <div class="question">
                    <div class="visible" onclick="Reponse()">

                        <a href="#">Comment récupérer un mot de passe oublié ? <img class="icone_plus" src="../images/icons8_plus"></a>
                        
                    </div>
                    <div id="deroulant" style="display: none;">
                        <p>Pour obtenir un nouveau mot de passe, il vous suffit d'aller sur l'onglet "S'identifier" et de cliquer sur "Mot de passe oublié". Nous serons alors en mesure de vous envoyer par mail un nouveau mot de passe associé à votre identifiant.</p>
                        <img class="icone_moins" src="../images/icons8_moins" style="display: none;"></a>
                    </div>
                </div>
                <div class="question">
                    <div class="visible" onclick="Reponse()">
                        <a href="#">Comment récupérer un identifiant perdu ? <img class="deroulant" src="../images/icons8_plus"></a>
                    </div>
                    <div id="deroulant" style="display: none;">
                        <p>Pour récupérer votre identifiant, allez sur la page "Contactez-nous" et envoyez un mail à DataFly indiquant vos coordonnées. Nous pourrons alors vous renvoyer votre identifiant d'origine.</p>
                    </div>
                </div>
                <div class="question">
                    <div class="visible" onclick="Reponse()">
                        <a href="#">Question 3 <img class="deroulant" src="../images/icons8_plus"></a>
                    </div>
                    <div id="deroulant" style="display: none;">
                        <p>Réponse 3</p>
                    </div>
                </div>
                <div class="question">
                    <div class="visible" onclick="Reponse()">
                        <a href="#">Question 4 <img class="deroulant" src="../images/icons8_plus"></a>
                    </div>
                    <div id="deroulant" style="display: none;">
                        <p>Réponse 4</p>
                    </div>
                </div>

            </div>
    </body>

    <?php include("footer.php"); ?>

</html>