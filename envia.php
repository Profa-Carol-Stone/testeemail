<?php
$nome = $_POST["nome"];
$email = $_POST["email"];
$mensagem = $_POST["mensagem"];

$to      = 'carol.nrg@gmail.com';
$subject = 'Contato do Site';
$message = $mensagem;
$headers = array(
    'From' => $email,
    'Reply-To' => 'carol.nrg@gmail.com',
    'X-Mailer' => 'PHP/' . phpversion()
);

$mail = mail($to, $subject, $message, $headers);

var_dump($mail);
?>
