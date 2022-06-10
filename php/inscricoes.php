    <?php
    include_once 'sql.php';

    $name = mysqli_real_escape_string($mysqli, $_POST['name']);
    $email = mysqli_real_escape_string($mysqli, $_POST['email']);

    $insert = "INSERT INTO `inscritos` (`id`, `Nome`, `email`, `data_inscricao`) 
    VALUES (NULL, '{$name}', '{$email}', current_timestamp());";

    mysqli_query($mysqli, $insert); // executa a query

    header("Location: ../obgInscrito.html");

    // enviar notificação email
    // $mailHeader = "De:" . $name . "<" . $email . ">\r\n";
    // $assunto = "Um novo cliente se inscreveu na sua newsletter!";
    // $mensagem = "O cliente " . $nome . "se inscreveu na newsletter do seu site!";
    // $emailDestino = "montilho12@gmail.com";

    // mail($emailDestino, $assunto, $mensagem, $mailHeader)
    //     or die("Error!");

    // echo "mensagem enviada!";
    ?>