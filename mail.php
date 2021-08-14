<?php

$dest = "suporte@luianalves.com.br";
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$mensagem = $_POST['mensagem'];


$headers = "MIME-Version 1.1\n";
$headers .= "From: Contato - Site <" . $dest . ">\r\n" . "X-Mailer: PHP/" . phpversion() . "\r\n";
$headers .= "content-type: text/html; charset=utf-8\n";
$headers .= "Return-Path: " . $nome . " <" . $email . ">\n";
$headers .= "Reply-to: " . $email . "\n";
$to = "Contato - Site <" . $dest . ">";
$subject = "Contato-Site - Meu Site";

$conteudo .= "

Nome: " . $nome . " <br>
email: " . $email . " <br>
telefone: " . $telefone . " <br>
mensagem: " . $mensagem . " <br>

";

$envio = mail($to, $subject, $conteudo, $header);



?