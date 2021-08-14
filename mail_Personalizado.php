<?php

require_once('src/PHPMailer.php');
require_once('src/SMTP.php');
require_once('src/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$name = $_POST['name'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$cep = $_POST['cep'];
$download = $_POST['download'];
$upload = $_POST['upload'];
$message = $_POST['message'];

$mail = new PHPMailer(true);

try {
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host = 'smtp.umbler.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'contato@xxxxxxxxxxxxxx.com.br';
    $mail->Password = '*';
    $mail->Port = '587';

    $mail->setFrom('contato@xxxxxxxxxxxxxx.com.br');
    $mail->addAddress('contato@xxxxxxxxxxxxxx.com.br');

    $mail->isSMTP();
    $mail->Subject = 'Planos Personalizados - Site';

    
    $mail->CharSet = 'UTF-8';
    $mail->Body .= "Nome: " . $name . " <br>";
    $mail->Body .= "Telefone: " . $telefone . " <br>";
    $mail->Body .= "Email: " . $email . " <br>"; 
    $mail->Body .= "CEP: " . $cep . " <br>"; 
    $mail->Body .= "Download: " . $download . " <br>";
    $mail->Body .= "Upload: " . $upload . " <br>";
    $mail->Body .= "Mensagem: " . $message . " <br>";
    

    $mail->AltBody = "Para conseguir essa e-mail corretamente, use um visualizador de e-mail com suporte a HTML";

    if ($mail->send()) {
        header('location:index.php?status=sucesso');
    } else {
        header('location:index.php?status=erro');
    }
} catch (Exception $e) {
    echo 'Erro ao enviar mensagem: {$mail->ErrorInfo}';
}