<?php

require 'modele/connexion_bdd.php';
require 'modele/req_infos_user.php';
$List = PilotsList($bdd);


if (isset($_POST["recherche"], $_POST["date"], $_POST['type_test'])) {

  $nom_prenom = explode(" ", $_POST['recherche']);
  $nom = $nom_prenom[0];
  $prenom = $nom_prenom[1];
	
  var_dump($nom_prenom);

	$date = $_POST['date'];
	$type_test=$_POST['type_test'];

	$sujet = "Test programmé";	//plus tard et en fonction de l'entreprise
	$message = "Bonjour ".$prenom.", <br><br> Vous avez un test de type «".$type_test."» programmé à la date du ".$date.". <br> Vous pouvez bien entendu faire des tests d'entraînement au préalable pour vous préparer. <br><br> Vous pouvez contacter votre manager pour plus d'informations. <br><br> Cordialement.";
}

else {
	require 'vues/Calendrier.php';
}


//utilisation de phpmailer :
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

try {
  $mail->CharSet ="UTF-8";
  $mail->SMTPDebug = 0;
  $mail->IsSMTP();
  $mail->Host = 'smtp.gmail.com';
  $mail->SMTPAuth = true;
  $mail->SMTPSecure = 'tls';
  $mail->Username = 'prepafly@gmail.com'; // Gmail address which you want to use as SMTP server
  $mail->Password = 'prepafly123'; // Gmail address Password
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
  $mail->Port = 587;

  $mail->setFrom('prepafly@gmail.com'); // Gmail address which you used as SMTP server
  $mail->addAddress('tatiana.fallouh@gmail.com'); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)

  $mail->isHTML(true);
  $mail->Subject = $sujet;
  $mail->Body = $message;

  $mail->send();
  header('Location: Calendrier.php');
  } 

  catch (Exception $e){
    $alert = '<div class="alert-error">
                <span>'.$e->getMessage().'</span>
              </div>';
               echo($alert);
  }
