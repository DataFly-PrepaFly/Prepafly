<?php
session_start();
?>

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

      <?php
      require 'modele/connexion_bdd.php';
      require 'modele/req_infos_cgu.php';

      $info_cgu=InfosCGU($bdd);
      ?>

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
	    <span class="lien"><a href="#Article1"><?php echo $info_cgu[0][1];?></a></span> 
	    <span class="lien"><br /><a href="#Article2"><?php echo $info_cgu[1][1];?></a> </span> 
	    <span class="lien"><br /><a href="#Article3"><?php echo $info_cgu[2][1];?></a> </span> 
	    <span class="lien"><br /><a href="#Article4"><?php echo $info_cgu[3][1];?></a> </span> 
	    <span class="lien"><br /><a href="#Article5"><?php echo $info_cgu[4][1];?></a> </span> 
	    <span class="lien"><br /><a href="#Article6"><?php echo $info_cgu[5][1];?></a> </span> 
	    <span class="lien"><br /><a href="#Article7"><?php echo $info_cgu[6][1];?></a> </span>
	    <span class="lien"><br /><a href="#Article8"><?php echo $info_cgu[7][1];?></a> </span> 
	    <span class="lien"><br /><a href="#Article9"><?php echo $info_cgu[8][1];?></a> </span> <br /><br /><br>

            <h2 id="Article1"><a href="#cgu"><em><?php echo $info_cgu[0][1];?></em></a></h2>
            <p><?php echo $info_cgu[0][2];?></p>

            <br />

            <h2 id="Article2"><a href="#cgu"><em><?php echo $info_cgu[1][1];?></em></a></h2>
           
            <p><?php echo $info_cgu[1][2];?></p>

            <br />

            <h2 id="Article3"><a href="#cgu"><em><?php echo $info_cgu[2][1];?></em></a></h2>
        
            <p><?php echo $info_cgu[2][2];?></p>

            <br />

            <h2 id="Article4"><a href="#cgu"><em><?php echo $info_cgu[3][1];?></em></a></h2>

            <p><?php echo $info_cgu[3][2];?></p>

            <br />

            <h2 id="Article5"><a href="#cgu"><em>A<?php echo $info_cgu[4][1];?></em></a></h2>

 
            <p><?php echo $info_cgu[4][2];?></p>

            <br />

            <h2 id="Article6"><a href="#cgu"><em><?php echo $info_cgu[5][1];?></em></a></h2>
            <p><?php echo $info_cgu[5][2];?></p>
            
            <br />

            <h2 id="Article7"><a href="#cgu"><em><?php echo $info_cgu[6][1];?></em></a></h2>
            <p><?php echo $info_cgu[6][2];?></p>
            <br />

            <h2 id="Article8"><a href="#cgu"><em><?php echo $info_cgu[7][1];?></em></a></h2>
            <p><?php echo $info_cgu[7][2];?></p>

            <br />

            <h2 id="Article9"><a href="#cgu"><em><?php echo $info_cgu[8][1];?></em></a></h2>
            <p><?php echo $info_cgu[8][2];?></p>
        </div>

      <?php include("vues/footer.php"); ?>

	</body>
</html>