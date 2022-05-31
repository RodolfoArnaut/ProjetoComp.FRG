<?php

$hostname = "localhost";
$bancodedados = "frg";
$usuario = "FRG";
$senha = "frg123";
$name = $_POST['name'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];

// Conectar ao banco de dados
$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
if ($mysqli->connect_errno) {
    echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

// enviar notificação email
// $mailHeader = "De:" . $name . "<" . $email . ">\r\n";
// $emailDestino = "montilho12@gmail.com";

// mail($emailDestino, $assunto, $mensagem, $mailHeader)
//     or die("Error!");

// echo "mensagem enviada!";
