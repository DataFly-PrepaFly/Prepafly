
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style/bandeau_profil.css"/>
    <link rel="stylesheet" href="style/nav_simple.css" />
    <link rel="stylesheet" href="style/footer.css" />
    <title>PrepaFly - Gestion</title>

    </head>

<body>

    <?php 
    include("vues/bandeau_profil.php");
    include("vues/nav_simple.php"); 
    ?>

    <br><h3>GESTION DE LA F.A.Q.</h3><br>

    <form method="POST" action="Modifier.php">
    <pre>	
	1) question	<input type="text" name="question1">
		réponse	<input type="text" name="réponse1">

	2) question	<input type="text" name="question2">
		réponse	<input type="text" name="réponse2">

	3) question	<input type="text" name="question3">
		réponse	<input type="text" name="réponse3">

	4) question	<input type="text" name="question4">
		réponse	<input type="text" name="réponse4">

	5) question	<input type="text" name="question5">
		réponse	<input type="text" name="réponse5">

	<input type="submit" value="Modifer">
    </pre>
    </form>



<?php 
$bdd = new PDO('mysql:host=localhost;dbname=prepafly;charset=utf8', 'root', 'root');
$reponse = $bdd->query('UPDATE faq SET question=$_POST["question1"], reponse=$_POST["réponse1"] WHERE id_question=1');

?>






    </body>

    <?php include("vues/footer.php"); ?>

</html>