<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=
  , initial-scale=1.0" />
    <link rel="stylesheet" href="../styles/stylePhp.css" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins&display=swap" rel="stylesheet" />
    <title>Contato</title>
</head>

<body>
    <header>
        <a href="../home.html">
            <h1 id="title">
                FRG <br />
                BARBER
            </h1>
        </a>

        <hr />
    </header>
    <div class="menu">
        <nav>
            <ul>
                <a href="../home.html" id="Inicio">
                    <li>Início</li>
                </a>
                <a href="../sobre.html" id="Sobre">
                    <li>Sobre</li>
                </a>
                <a href="../contato.html" id="Contato">
                    <li>Contato</li>
                </a>
            </ul>
        </nav>
    </div>
    <hr />

    <!-- Cabeçalho do formulário de contato -->
    <div class="contactForm">
        <h1>Obrigado por se inscrever em nossa newsletter!</h1>
        <p>
            Sempre que houverem novidades e promoções você será o primeiro(a) a saber!
        </p>
    </div>

    <a id="voltar-ao-topo" href="#">&#9651;</a>
    <br />
    <br />

    <div id="copyright">
        <hr />
        <p>Filipe Eduardo, Rodolfo Arnaut e Gustavo Resende - copyright © 2022</p>
    </div>


    <?php

    $hostname = "127.0.0.1:3307";
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

    $insert = "INSERT INTO `inscritos` (`id`, `Nome`, `email`, `data_inscricao`) VALUES (NULL, '{$name}', '{$email}', current_timestamp());";
    mysqli_query($mysqli, $insert); // executa a query

    // enviar notificação email
    // $mailHeader = "De:" . $name . "<" . $email . ">\r\n";
    // $assunto = "Um novo cliente se inscreveu na sua newsletter!";
    // $mensagem = "O cliente " . $nome . "se inscreveu na newsletter do seu site!";
    // $emailDestino = "montilho12@gmail.com";

    // mail($emailDestino, $assunto, $mensagem, $mailHeader)
    //     or die("Error!");

    // echo "mensagem enviada!";
    ?>

</body>

</html>