<?php

require 'modele/connexion_bdd.php';
require 'modele/req_infos_user.php';


//Liste déroulante
$List = UserList($bdd);


//Choix de l'affichage dans le tableau

if (isset($_POST['recherche']) and $_POST['recherche'] !=='Liste complète' and $_POST['recherche'] !=='') { 

    $user = $_POST['recherche'];

    $results = SearchResults($bdd, $user);

}

else { //sinon
    $results = AllResults($bdd);
}

require 'vues/Resultats_Mng.php';

?>

</body>
</html>
