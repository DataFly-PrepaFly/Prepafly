<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="style/CGU.css">
      <link rel="stylesheet" href="style/bandeau_prepafly.css"/>
      <link rel="stylesheet" href="style/bandeau_profil.css"/>
      <link rel="stylesheet" href="style/nav_simple.css" />
      <link rel="stylesheet" href="style/footer.css" />
	<title>PrepaFly - C.G.U.</title>
</head>

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
      	
      <br><h3 id="cgu"> CONDITIONS GÉNÉRALES D'UTILISATION</h3>

      <div class="all">
          <?php include("vues/Affichage_cgu.php"); ?>
      </div>

      <?php include("vues/footer.php"); ?>

</body>
</html>