<?php

$hostname = "localhost:3307";
$bancodedados = "frg";
$usuario = "root";
$senha = "";
$name = $_POST['name'];
$email = $_POST['email'];

// Conectar ao banco de dados
$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
if ($mysqli->connect_errno) {
    echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

var_dump($mysqli);

$insert = "INSERT INTO inscritos (id, Nome, email, data_inscricao) VALUES (NULL, $name, $email, current_timestamp())";
if ($mysqli->query($insert) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $insert . "<br>" . $mysqli->error;
}

$mysqli->close();

// enviar notificação email
// $mailHeader = "De:" . $name . "<" . $email . ">\r\n";
// $assunto = "Um novo cliente se inscreveu na sua newsletter!";
// $mensagem = "O cliente " . $nome . "se inscreveu na newsletter do seu site!";
// $emailDestino = "montilho12@gmail.com";

// mail($emailDestino, $assunto, $mensagem, $mailHeader)
//     or die("Error!");

// echo "mensagem enviada!";
