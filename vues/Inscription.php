<!DOCTYPE html>
<html lang="fr">
<meta charset="UTF-8">
    <link rel="stylesheet" href="../style/Inscription.css" />
    <link rel="stylesheet" href="../style/bandeau_prepafly.css"/>
    <link rel="stylesheet" href="../style/nav_simple.css" />
    <link rel="stylesheet" href="../style/footer.css" />
<head>
<title>S'inscrire</title>

<script type="text/javascript">
    function validerInscri() {
        if (document.forms["inscri"]["mdp"].value !== document.forms["inscri"]["mdp2"].value) {
            alert("Le mot de passe n'est pas correctement confirmé");
            return false;
        }
    }

</script>
</head>

<header>
    <?php include("bandeau_prepafly.php"); ?>
    <?php include("nav_simple.php"); ?>

</header>

<body>

<section>
    <br><h3>INSCRIPTION</h3>
    <div class="texte">
        <p>Remplissez vos coordonnées dans ce formulaire si vous êtes intéressé et souhaitez être recontacté par nos équipes.</p>
    </div>
    
    <div class="zoneinscri">
        <form action="cible_form.php" method="post" enctype="multipart/form-data" id="form" onsubmit="return validerInscri()">
            <label for="nfam">Nom : </label> <br>
            <input type="text" id="nom" name="nom" required size="40"><br><br>

            <label for="pren">Prénom : </label><br>
            <input type="text" id="prenom" name="prenom" required size="40"><br><br>

            <label for="pren">Date de naissance : </label><br>
            <input type="date" id="date" name="date" required><br><br>

            <label for="mail">Adresse e-mail personnelle : </label><br>
            <input type="text" name="mail" size="60"><br><br>

            <label for="mailpro">Adresse e-mail professionnelle : </label><br>
            <input type="text" name="mailpro" size="60"><br><br>

            <label for="cpgn">Compagnie aérienne : </label><br>
            <select>
                <option value="airchina">Air China</option>
                <option value="aircorse">Air Corsica</option>
                <option value="airfrance">Air France</option>
                <option value="american">American Airlines</option>
                <option value="easy">Easy Jet</option>
                <option value="emirates">Emirates</option>
                <option value="iberia">Iberia</option>
                <option value="klm">KLM</option>
                <option value="lufthansa">Lufthansa</option>
                <option value="ryanair">Ryanair</option>
                <option value="united">United</option>
            </select><br><br>

            <label for="fonction">Fonction ou poste occupé</label><br>
            <input type="text" name="fonction" size="60"><br><br>

            <label for="demande">Formulez votre demande ici : </label><br />
            <textarea name="demande" id="demande" rows="5" cols="60"></textarea><br><br><br>

            <div class="end">
                <a href="#" onclick="resetForm();" id="reinit" type="reset">Réinitialiser</a>
                <a href="#" id="valider" type="submit">Envoyer</a><br><br><br><br>
            </div>
            
        </form>
    </div>
</section>

<script type="text/javascript">
    function resetForm() {
        document.getElementById("form").reset();
    }
</script>

<?php include("footer.php"); ?>

</body>