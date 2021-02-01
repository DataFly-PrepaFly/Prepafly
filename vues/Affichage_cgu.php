<?php
foreach ($CGU as $element_cgu) {
  $ida = $element_cgu['id_article'];
  $titre = $element_cgu['titre'];
  echo('<span class="lien"><a href="#Article'.$ida.'">'.$titre.'</a></span><br>');
}
?>

<br><br><br>

<?php
foreach ($CGU as $element_cgu) {
  $ida = $element_cgu['id_article'];
  $titre = $element_cgu['titre'];
  $article = nl2br($element_cgu['article']);
  
  if($Modif == true) {

    $titreHTML = '<h2 class="Article" id="Article'.$ida.'"><a href="#cgu"><em>'.$titre.'</em>'; 

    $titreHTML .= '<a href="Modification_CGU.php?idarticle='.$ida.'">(Modifier)</a>';

    $titreHTML .= '<a href="controleurs/Suppression_CGU.php?idarticle='.$ida.'" onclick="return confirm(\'Voulez-vous vraiment supprimer cet article ?\');">(Supprimer)</a>';
    $titreHTML.='</a></h2>';
  }       
  else {
    $titreHTML = '<h2 class="Article" id="Article'.$ida.'"><a href="#cgu"><em>'.$titre.'</em></a></h2>';
  }

  echo ($titreHTML);
  echo('<p>'.$article.'</p>'); 
  echo('<br>');
}
?>