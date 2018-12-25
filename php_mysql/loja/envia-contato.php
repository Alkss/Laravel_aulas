<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);

/**
 * Created by PhpStorm.
 * User: alex
 * Date: 25/12/18
 * Time: 18:20
 */
session_start();
$nome = "teste";
$email = "teste";
$mensagem = "teste";

require_once("PHPMailerAutoload.php");

$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = "alexrjrjr@gmail.com";
$mail->Password = "d61b2^>^";

$mail->setFrom("alexrjrjr@gmail.com", "Alura Curso PHP e MySQL");
$mail->addAddress("alkss_fjv@yahoo.com.br");
$mail->Subject = "Email de contato da loja";
$mail->msgHTML("<html>de: {$nome}<br/>email: {$email}<br/>mensagem: {$mensagem}</html>");
$mail->AltBody = "de: {$nome}\nemail:{$email}\nmensagem: {$mensagem}";

$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    ));
if($mail->send()) {
    $_SESSION["success"] = "Mensagem enviada com sucesso";
    header("Location: index.php");
} else {
    $_SESSION["danger"] = "Erro ao enviar mensagem " . $mail->ErrorInfo;
    header("Location: contato.php");
}
die();
