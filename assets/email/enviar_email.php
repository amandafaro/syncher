<?php
    $nome=$_POST['nome'];
    $telefone=$_POST['telefone'];
    $site=$_POST['site'];
    $empresa=$_POST['empresa'];
    $email=$_POST['email'];
    $servico=$_POST['servico'];
    $msg=$_POST['mensagem'];
    $date=date("d/m/Y");
    $mensagem= 'Esta mensagem foi enviada através do formulário<br><br>';
    $mensagem.='<b>Nome: </b>'.$nome.'<br>';
    $mensagem.='<b>Telefone:</b> '.$telefone.'<br>';
    $mensagem.='<b>E-Mail:</b> '.$email.'<br>';
    $mensagem.='<b>Site:</b> '.$site.'<br>';
    $mensagem.='<b>Serviço:</b> '.$servico.'<br>';
    $mensagem.='<b>Data de envio:</b> '.$date.'<br>';
    $mensagem.='<b>Informações adicionais:</b><br> '.$msg;
    require("phpmailer/src/PHPMailer.php");
    require("phpmailer/src/SMTP.php");
    require ("phpmailer/src/Exception.php");

$mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->isSMTP(); // Não modifique
    $mail->Host       = 'servidor.hostgator.com.br';  // SEU HOST (HOSPEDAGEM)
    $mail->SMTPAuth   = true;                        // Manter em true
    $mail->Username   = 'contato@syncher.com.br';   //SEU USUÁRIO DE EMAIL
    $mail->Password   = '@Turner505';                   //SUA SENHA DO EMAIL SMTP password
    $mail->SMTPSecure = 'ssl';    //TLS OU SSL-VERIFICAR COM A HOSPEDAGEM
    $mail->Port       = 465;     //TCP PORT, VERIFICAR COM A HOSPEDAGEM
    $mail->CharSet = 'UTF-8';    //DEFINE O CHARSET UTILIZADO
    
    //Recipients
    $mail->setFrom('contato@syncher.com.br', 'Site');  //DEVE SER O MESMO EMAIL DO USERNAME
    $mail->addAddress('amandafaro@hotmail.com');     // QUAL EMAIL RECEBERÁ A MENSAGEM!
    // $mail->addAddress('ellen@example.com');    // VOCÊ pode incluir quantos receptores quiser
    $mail->addReplyTo('amandafaro@hotmail.com', $nome);  //AQUI SERA O EMAIL PARA O QUAL SERA RESPONDIDO                  
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Mensagem do Formulário'; //ASSUNTO
    $mail->Body    = $mensagem;  //CORPO DA MENSAGEM
    $mail->AltBody = $mensagem;  //CORPO DA MENSAGEM EM FORMA ALT

    // $mail->send();
    if(!$mail->Send()) {
        echo "<script>alert('Erro ao enviar o E-Mail');window.location.assign('index.php');</script>";
     }else{
        echo "<script>alert('E-Mail enviado com sucesso!');window.location.assign('index.php');</script>";
     }
     die
?>
