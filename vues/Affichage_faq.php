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
            <p><?=$reponse?></p><br>

            <?php if($Modif == true) {?>
            <span class="boutons_faq"><a id="supp_faq"href="controleurs/Suppression_FAQ.php?idquestion=<?=$idq;?>" onclick="return confirm('Voulez-vous vraiment supprimer cette question ?');">Supprimer</a>

            <a class="boutons_faq" id="modif_faq" href="Modification_FAQ.php?idquestion=<?=$idq;?>">Modifier</a>

            
            </span><br>

            <?php  }?>
        </div>
    </div>

<?php
}
