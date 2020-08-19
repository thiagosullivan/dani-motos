    <?php

    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    
    $email_from = 'desenvolvimentoweb@londrinaguiase.com.br';

    $email_subject = "Novo Formulário Recebido";

    $email_body = "Nome do Usuário: $name.\n".
                    "E-mail do Usuário: $visitor_email.\n".
                        "Telefone do Usuário: $phone.\n".
                            "Mensagem do Usuário: $message.\n";

    $to = "thiago.sullivan.dev@gmail.com";

    $headers = "From: $email_from \r\n";

    $headers = "Replay-To: $visitor_email \r\n";

    mail($to, $email_subject, $email_body, $headers);

    header("Location: contato.html");

    ?>