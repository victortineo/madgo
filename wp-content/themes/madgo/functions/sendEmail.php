<?php
ini_set('default_charset', 'UTF-8');
$nomeUsuario = '';
$emailUsuario = '';
$assunto = '';
foreach($_POST as $campo => $valor){
   if($campo == 'Nome') {
   	$nomeUsuario = $valor;
   } else if($campo == 'E-mail') {
   	$emailUsuario = $valor;
   } else if($campo == 'Assunto') {
   	$assunto = $valor;
   }
}

// PHP MAILER
require 'templates/template.php';
require 'PHPMailer/PHPMailerAutoload.php';
require_once 'secrets.php';
$mail = new PHPMailer;
$mail->CharSet = 'UTF-8';
$from = "contato@madgo.com.br";
$fromName = 'Site MadGO';

$host = $hostEmail;
$username = $usernameEmail;
$password = $passwordName;
$port = 465;
$secure = 'ssl';                             // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = $host;  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = $username;                 // SMTP username
$mail->Password = $password;                           // SMTP password
$mail->SMTPSecure = $secure;                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = $port;                                    // TCP port to connect to

$mail->setFrom($from, $fromName);
$mail->addAddress($from, $fromName);     // Add a recipient
$mail->addReplyTo($emailUsuario, $nomeUsuario);

$mail->isHTML(true);                                  // Set email format to HTML
$mail->Subject = $assunto;
$mail->Body    = $template;

if($mail->send()) {
    echo 'Mensagem enviada com sucesso!';
}