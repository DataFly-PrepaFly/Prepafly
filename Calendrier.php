<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['nom'])){
  $nom = $_POST['nom'];
  $emailenvoi = $_POST['email'];
  $subject = $_POST['prenom'];
  //$message = $_POST['message'];

  try{
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
    $mail->addAddress($emailenvoi); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)

    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = "<h3>Nom : ". $nom ."</h3>";

    $mail->send();
    header('Location: Accueil.php');
  } 
  catch (Exception $e){
    $alert = '<div class="alert-error">
                <span>'.$e->getMessage().'</span>
              </div>';
               echo($alert);
  }
}


if (isset($_POST["nom"], $_POST["prenom"], $_POST["date_test"], $_POST['type_test_calen'])) {

	require 'modele/connexion_bdd.php';
	require 'modele/req_infos_user.php';

	$message_erreur = '';

	$nom_calen=$_POST["nom"];
	$prenom_calen=$_POST["prenom"]; //Toute les variables récupérées par le formulaire//
	$date = $_POST['date'];
	$type_test_calen=$_POST['type_test_calen'];

	$email_from = "InfiniteMeasure@gmail.com";
	               //Variable pour l'envoi du mail, il faudra changer le mail 
	$sujet = "Test programmé";	//plus tard et en fonction de l'entreprise
	$message = "Vous avez un test programmé à la date du ".$date.". Vous pouvez contacter votre manager pour plus d'informations.";
	$headers_mail ="From: ". $email_from."" ;

else {

	$message_erreur = '';

	require 'vues/Calendrier.php';
}
