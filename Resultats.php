<?php

require 'modele/connexion_bdd.php';
require 'modele/req_infos_user.php';

if (isset($_POST['recherche'])) {

    $key_letter = $_POST['recherche'];

    $array_results = SearchResults($bdd, $key_letter);

    $test = Test($bdd);
    //var_dump($test);

    //Contenu de sortie
/*
    echo "<table class='table' border=1 cellspacing=0 cellpadding=3><tr>";
    while($column = array_column($array_results, '')){
        echo "<th>{$column->name}</th>";
    }
    echo "</tr>";
    
    while($row = array)){
        echo "<tr>";
        for($i=0;$i<$colums;$i++){
            echo "<td>$row[$i]</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    */
}

else {
    $array_all_results = AllResults($bdd);
    //var_dump($array_all_results);
    $test = Test($bdd);
    var_dump($array_all_results);
}


require 'vues/Resultats_Mng.php';

?>

</body>
</html>
