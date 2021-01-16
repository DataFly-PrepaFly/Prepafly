
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="style/contact.css" />
    <link rel="stylesheet" href="style/bandeau_prepafly.css"/>
    <link rel="stylesheet" href="style/bandeau_profil.css"/>
    <link rel="stylesheet" href="style/nav_simple.css" />
    <link rel="stylesheet" href="style/footer.css" />
    <title>PrepaFly - Contact</title>
</head>


<body>
    
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


    <div class="texte"> 
        <br /><h3> CONTACT </h3><br />
        <div>
            <p>Pour contacter <span>Infinite Measures</span>, vous pouvez utiliser les liens suivantes :
                <ul class="lien">
                    <li>Notre adresse mail : <a href="mailto:infinitemeasuresfr@gmail.com">infinitemeasuresfr@gmail.com </a></li>
                    <li>Notre compte <a href="https://www.facebook.com/InfiniteMeasuresFr">Facebook</a></li>
                    <li>Notre <a href="https://infinitemeasures.fr/vues/fr/index.php">Site Internet</a></li><br />
                </ul>
            </p>

            <p>Pour contacter <span>DataFly</span>, vous pouvez utiliser les liens suivantes :
                <ul class="lien">
                    <li>Adresse mail : <a href="mailto:dataflydatafly@gmail.com">dataflydatafly@gmail.com</a></li>
                    <li>Page <a href="#facebook">Facebook</a></li>
                    <li>Compte <a href="#InfiniteMeasure">Instagram</a></li><br>
                </ul>
            </p>
        </div>
    </div>

</body>

<?php include("vues/footer.php"); ?>


</html>