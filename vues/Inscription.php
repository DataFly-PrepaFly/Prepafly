<!DOCTYPE html>
<html lang="fr">
<meta charset="UTF-8">
    <link rel="stylesheet" href="style/Inscription.css" />
    <link rel="stylesheet" href="style/bandeau_prepafly.css"/>
    <link rel="stylesheet" href="style/nav_simple.css" />
    <link rel="stylesheet" href="style/footer.css" />
<head>
<title>PrepaFly - Inscription</title>

</head>

<header>
    <?php 
    require 'vues/bandeau_prepafly.php'; 
    include 'vues/nav_simple.php'; 
    ?>
</header>

<body>

<section>
    <br><h3>INSCRIPTION</h3>
    <div class="texte">
        <p>Si vous êtes intéressé et souhaitez être recontacté par nos équipes, il vous suffit de remplir ce formulaire.</p><br>
    </div>
    
    <form action="Inscription.php" onsubmit="return confirmation();" method="post" enctype="multipart/form-data" id="form">
        <div id="formulaire">
            <div id="form_part1">

                <div class="champs1">
                    <label for="nom">Nom : </label>
                    <input type="text" onchange="this.value=this.value.toUpperCase()" id="nom" name="nom" required size="30"><br><br>
                </div>

                <div class="champs1">
                    <label for="prenom">Prénom : </label>
                    <input type="text" id="prenom" name="prenom" required size="30"><br><br>
                </div>

                <div class="champs1">
                    <label for="date">Date de naissance : </label>
                    <input type="date" id="date" name="date" required><br><br>
                </div>

                <div class="champs1">
                    <label for="mailpro">Mail professionnel : </label><br>
                    <input type="email" name="mailpro" id='mailpro' size="50"><br><br>
                </div>

                <div class="champs1">
                    <label for="mailproconf">Confirmer le mail : </label><br>
                    <input onchange="VerifMail()" type="email" name="mailproconf" size="50"><span id="verifmail" style="color:red;">X</span>
                    <br><br>
                </div>

                <div class="champs1">
                    <label for="num">Numéro de téléphone : </label>
                    <input type="tel" name="num" size="20"><br><br>
                </div>

            </div>

            <div id="form_part2">
                <div class="champs2">
                    <label for="cpgn">Compagnie aérienne : </label>
                    <input type="text" name="cpgn" size="25" id="cpgn" required><br><br>
                </div>

                <div class="champs2">
                    <label for="fonction">Fonction ou poste occupé : </label><br>
                    <input type="text" name="fonction" size="40"><br><br>
                </div>
                
                <div class="champs2">
                    <label for="demande">Formulez votre demande ici : </label><br /><br>
                    <textarea name="demande" id="demande" rows="5" cols="60"></textarea><br><br>
                </div>
            </div>
        </div>
        <div class="end">
            <?=$confirmation?>

            <a href="#" id="reinit" onclick="resetForm();" type="reset">Réinitialiser</a>
            <input type="submit" id="valider" value="Envoyer la demande">
        </div>
    </form>
</section>


<script type="text/javascript">
    function resetForm() {
        document.getElementById("form").reset();
    }

    function confirmation() {
        var confirmation = confirm("Voulez-vous vraiment envoyer cette demande ?");
        return confirmation;
    }


    var mailpro = document.getElementById("mailpro");
    var mailproconf = document.getElementById("mailproconf");

    function VerifMail() {
        if (mailpro.value==mailproconf.value && mailpro.value!=""){
            verifmail.innerHTML="OK";
            verifmail.style.color="green";
        }
        else {
            verifmail.innerHTML="X";
            verifmail.style.color="red";
        }
    }

</script>

<?php include("vues/footer.php"); ?>

</body>