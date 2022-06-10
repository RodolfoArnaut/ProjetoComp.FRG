    <?php

    $hostname = "127.0.0.1:3307";
    $bancodedados = "frg";
    $usuario = "root";
    $senha = "";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];

    // Conectar ao banco de dados
    $mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
    if ($mysqli->connect_errno) {
        echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }

    $insert = "INSERT INTO `contato` (`id`, `Nome`, `email`, `assunto`, `mensagem`, `data_mensagem`) VALUES (NULL, '{$name}', '{$email}', '{$assunto}', '{$mensagem}', current_timestamp());";
    mysqli_query($mysqli, $insert); // executa a query

    header("Location: ../obgContato.html");

    // enviar notificação email
    // $mailHeader = "De:" . $name . "<" . $email . ">\r\n";
    // $emailDestino = "montilho12@gmail.com";

    // mail($emailDestino, $assunto, $mensagem, $mailHeader)
    //     or die("Error!");

    // echo "mensagem enviada!";
    ?>