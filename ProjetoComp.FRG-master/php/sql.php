<?php
$hostname = "localhost";
$bancodedados = "id19148350_frg";
$usuario = "id19148350_frgbarber";
$senha = "FilipeRodolfoGustavo@123";

// Conectar ao banco de dados
$mysqli = mysqli_connect($hostname, $usuario, $senha, $bancodedados);
if ($mysqli->connect_errno) {
    echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
