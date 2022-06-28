    <?php
    include_once 'sql.php';
    require_once './src/PHPMailer.php';
    require_once './src/SMTP.php';
    require_once './src/Exception.php';

    
    $name = mysqli_real_escape_string($mysqli, $_POST['name']);
    $email = mysqli_real_escape_string($mysqli, $_POST['email']);
    
    $insert = "INSERT INTO `inscritos` (`id`, `Nome`, `email`, `data_inscricao`) 
    VALUES (NULL, '{$name}', '{$email}', current_timestamp());";

    mysqli_query($mysqli, $insert); // executa a query

    
    date_default_timezone_set("America/Argentina/Buenos_Aires"); //mesmo fuso horário que Brasília
    $data_envio = date('d/m/Y');
    $hora_envio = date('H:i:s');
    $status = false;

    // enviar notificação email
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    $mail = new PHPMailer(true);

    try {
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls';
        $mail->Username = 'barberfrg@gmail.com';
        $mail->Password = 'wczvbmopdwogrbwq';
        $mail->Port = 587;

        $mail->setFrom($email);
        $mail->addAddress('barberfrg@gmail.com');
        $mail->addCC('filipe.costa2@alunos.unis.edu.br');
        $mail->addCC('gustavo.faria1@alunos.unis.edu.br');
        $mail->addCC('rodolfo.silva3@alunos.unis.edu.br');

        $mail->isHTML(true);
        $mail->Subject = 'Novo(a) cliente inscrito na newsletter FRG Barber!';
        $mail->Body = "
        <html>
        <p>Um(a) novo(a) cliente se inscreveu na sua newsletter!<p>
        <p><b>Nome do(a) cliente: </b>$name</p>
        <p><b>E-mail: </b>$email</p>
        <p>O(A) cliente se inscreveu no dia: <b>$data_envio</b> às <b>$hora_envio</b></p>
        </html>";
        $mail->AltBody = "O(A) cliente " . $name . " se inscreveu na newsletter FRG Barber!";

        if ($mail->send()) {
            echo 'Email enviado com sucesso';
        } else {
            echo 'Email não enviado';
        }
    } catch (Exception $e) {
        echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
    }

    if ($insert && $mail) {
        $status = true;
    }

    if ($status = true) {
        echo "<script language='javascript'>
        window.location.href = \"../obgInscrito.html\";
        </script>
        ";
    }

    ?>