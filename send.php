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
  //$emailenvoi = $_POST['email'];
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
    $mail->addAddress('tatiana.fallouh@gmail.com'); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)

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
?>
