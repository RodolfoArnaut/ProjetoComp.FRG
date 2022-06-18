<?php
    include_once 'sql.php';

    $name = mysqli_real_escape_string($mysqli, $_POST['name']);
    $email = mysqli_real_escape_string($mysqli, $_POST['email']);
    $assunto = mysqli_real_escape_string($mysqli, $_POST['assunto']);
    $mensagem = mysqli_real_escape_string($mysqli, $_POST['mensagem']);

    $insert = "INSERT INTO `contato` (`id`, `Nome`, `email`, `assunto`, `mensagem`, `data_mensagem`) 
    VALUES (NULL, '{$name}', '{$email}', '{$assunto}', '{$mensagem}', current_timestamp());";

    mysqli_query($mysqli, $insert); // executa a query

    header("Location: ../obgContato.html");

    // enviar notificação email
    // $mailHeader = "De:" . $name . "<" . $email . ">\r\n";
    // $emailDestino = "montilho12@gmail.com";

    // mail($emailDestino, $assunto, $mensagem, $mailHeader)
    //     or die("Error!");

    // echo "mensagem enviada!";
