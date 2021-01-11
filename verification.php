
<?php

session_start();

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=prepafly;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}


if(isset($_POST['username']) && isset($_POST['password']))
{
    // connexion à la base de données
    /*
    $db_username = 'root';
    $db_password = '';
    $db_name     = 'prepafly';
    $db_host     = 'localhost';
    $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
           or die('could not connect to database');
    */

    $utilisateur = $bdd->query('SELECT * FROM utilisateur');

    $username = $_POST['username']; 
    $password = $_POST['password'];
    
    if($username !== "" && $password !== "")
    {
        /*
        $requete = "SELECT count(*) FROM utilisateur where 
              mail = '".$username."' and mdp = '".$password."' ";
        $exec_requete = mysqli_query($db,$requete);
        $reponse      = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];

        if($count!=0) // nom d'utilisateur et mot de passe correctes
        {
           $_SESSION['username'] = $username;
           header('Location: Accueil_Profil.php');
        }
        else
        {
           header('Location: login.php?erreur=1'); // utilisateur ou mot de passe incorrect
        }
        */
        $requete = $bdd->query("SELECT count(*) FROM utilisateur where mail = '".$username."' and mdp = '".$password."' ");
        //$exec_requete = mysqli_query($db,$requete);
        //$reponse      = mysqli_fetch_array($exec_requete);
        $count = $requete['count(*)'];
        
        if($count!=0) // nom d'utilisateur et mot de passe correctes
        {
            $_SESSION['username'] = $username;
            header('Location: Accueil_Pilote.php');
        }

        else 
        {
            header('Location: login.php?erreur=1'); // utilisateur ou mot de passe incorrect
        }

        $utilisateur->closeCursor();

    }


    else
    {
       header('Location: login.php?erreur=2'); // utilisateur ou mot de passe vide
    }
}

else
{
   header('Location: login.php');
}

mysqli_close($db); // fermer la connexion


    ?>