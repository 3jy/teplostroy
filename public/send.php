<?php
//===================== Settings ====================
$file = file_get_contents( ".config/config" );
$ms_settings = json_decode( $file, TRUE );
unset( $file );

$subject          = $_POST["subj"];
$body             = $_POST["body"];

//===================================================

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'Mailer/src/Exception.php';
require 'Mailer/src/PHPMailer.php';
require 'Mailer/src/SMTP.php';
 
$mail             = new PHPMailer( true );
 
$mail->SMTPDebug  = 2;
$mail->isSMTP();

$mail->Host       = $ms_settings["host"];
$mail->SMTPAuth   = $ms_settings["smtpAuth"];
$mail->Username   = $ms_settings["from"];
$mail->Password   = $ms_settings["pswd"];
$mail->SMTPSecure = $ms_settings["smtpSecure"];
$mail->Port       = $ms_settings["port"];
$mail->setLanguage( $ms_settings["lang"] );
$mail->CharSet    = $ms_settings["charset"];

$mail->setFrom($ms_settings["from"]);
$mail->addAddress($ms_settings["to"]);

$mail->Subject    = $subject;
$mail->Body       = $body;

if( !$mail->send() ) {
  echo(
    json_encode(
      array(
        "result" => "error",
        "state"  => $mail
      )
    )
  );
  return;
} else {
  echo(
    json_encode(
      array(
        "result" => "success",
        "state"  => $mail
      )
    )
  );
  return;
}
