<?php 

if (isset($_POST['nom'], 
	$_POST['prenom'], 
	$_POST['date'], 
	$_POST['mailpro'], 
	$_POST['num'], 
	$_POST['cpgn'], 
	$_POST['fonction'], 
	$_POST['demande']))
{
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$date = $_POST['date'];
	$mailpro = $_POST['mailpro'];
	$num = $_POST['num'];
	$cpgn = $_POST['cpgn'];
	$fonction = $_POST['fonction'];
	$demande = $_POST['demande'];

	$message = 'M./Mme '.$nom.' '.$prenom.', '.$fonction.' au sein de la société '.$cpgn.', est intéressé par le produit PrepaFly et souhaiterait être recontacté(e). Ses coordonnées sont les suivantes : <br> Numéro : '.$num.'. <br> Sa demande est la suivante : '.$demande.'<br><br> Cordialement.';
	$sujet = 'Demande d\'information - PrepaFly';

	require 'vues/Inscription.php';
}

else {
	require 'vues/Inscription.php';
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
  $mail->addAddress($mailpro); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)

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
