<?php

foreach ($FAQ as $element_faq) {
    $idq = $element_faq['id_question'];
    $question = $element_faq['question'];
    $reponse = $element_faq['reponse'];
?>
    <div class="question">
        <div class="visible" onclick="Reponse(<?=$idq;?>)">
            <a><?=$question;?><img class="deroulant" src="images/icons8_plus.png"></a>
        </div>
        <div id="deroulant<?=$idq;?>" class="reponse" style="display: none;">
            <p><?=$reponse?></p>

            <?php if($Modif == true) {?>

            <a href="Modification_FAQ.php?idquestion=<?=$idq;?>">Modifier</a>

            <a href="controleurs/Suppression_FAQ.php?idquestion=<?=$idq;?>" onclick="return confirm('Voulez-vous vraiment supprimer cette question ?');">Supprimer</a>

            <?php  }?>
        </div>
    </div>

<?php
}
