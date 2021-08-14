<?php

require_once('src/PHPMailer.php');
require_once('src/SMTP.php');
require_once('src/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$name = $_POST['name'];
$telefone = $_POST['telefone'];
$rg = $_POST['rg'];
$cpf = $_POST['cpf'];
$cep = $_POST['cep'];
$plano = $_POST['plano'];
$message = $_POST['message'];

$mail = new PHPMailer(true);

try {
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host = 'smtp.umbler.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'contato@xxxxxxxxxx.com.br';
    $mail->Password = '*';
    $mail->Port = '587';

    $mail->setFrom('contato@xxxxxxxx.com.br');
    $mail->addAddress('contato@xxxxxxxx.com.br');

    $mail->isSMTP();
    $mail->Subject = 'Ficha de Cadastro - Site';

    
    $mail->CharSet = 'UTF-8';
    $mail->Body .= "Nome: " . $name . " <br>"; 
    $mail->Body .= "Telefone: " . $telefone . " <br>";
    $mail->Body .= "RG: " . $rg . " <br>";
    $mail->Body .= "CPF: " . $cpf . " <br>";
    $mail->Body .= "CEP: " . $cep . " <br>";
    $mail->Body .= "Plano: " . $plano . "Megas <br>";
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