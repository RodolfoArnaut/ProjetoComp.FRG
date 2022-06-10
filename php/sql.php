<?php
$hostname = "127.0.0.1:3307";
$bancodedados = "frg";
$usuario = "root";
$senha = "";

// Conectar ao banco de dados
$mysqli = mysqli_connect($hostname, $usuario, $senha, $bancodedados);
if ($mysqli->connect_errno) {
    echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
