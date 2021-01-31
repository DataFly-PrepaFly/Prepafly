<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" media="screen and (max-width: 1450px)" href="style/Accueil_Profil.css" />
    <link rel="stylesheet" href="style/Accueil_Admin.css"/>
    <link rel="stylesheet" href="style/bandeau_prepafly.css"/>
    <link rel="stylesheet" href="style/nav_simple.css" />
    <link rel="stylesheet" href="style/footer.css" />
    <title>PrepaFly</title>
</head>

<body>
	<?php 
    include("bandeau_profil.php");
    include("nav_simple.php"); 

    echo "<div class=\"bonjour\">Bienvenue $prenom ! Que souhaitez-vous faire aujourd'hui ?</div>";
    ?>

    <div class="choix">
        <div class="num"><a href="Gestion_F.A.Q.php">Modifier la F.A.Q.</a></div>
        <div class="num"><a href="#">Modifier les C.G.U.</a></div>

        <div class="num" id="clic_liste_users" onclick="OptionsUsers()"><a href="#">Accéder à la liste des utilisateurs</a></div>

        <div id="liste_users" style="display: none;">
            <div id="choix_users">
                <div id="modif"><a href="Liste_Utilisateurs.php">Modifier la liste des utilisateurs</a></div>
                <div id="ajout"><a href="Ajout_Utilisateur.php">Ajouter un nouvel utilisateur</a></div>
            </div>
        </div>
    </div>

    <?php include("footer.php"); ?>

    <script type="text/javascript">
    /*Fonction de déroulement sur clic*/
        function OptionsUsers() {
            var x = document.getElementById("liste_users");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else { 
                x.style.display = "none";
            }
        }  
    </script>

</body>
</html>