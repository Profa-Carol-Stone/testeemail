<?php
$nome = $_POST["nome"];
$email = $_POST["email"];
$mensagem = $_POST["mensagem"];

$destinatario = "carol.nrg@gmail.com";
$assunto = "Contato do Site";
$header = "From: $email";

$mail = mail($destinatario, $assunto, $header)

?>