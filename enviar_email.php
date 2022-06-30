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

//     require("vendor/phpmailer/src/PHPMailer.php");
//     require("vendor/phpmailer/src/SMTP.php");
//     require ("vendor/phpmailer/src/Exception.php");

//     use PHPMailer\PHPMailer\PHPMailer;
//     use PHPMailer\PHPMailer\SMTP;
//     use PHPMailer\PHPMailer\Exception;

//     $mail = new PHPMailer(true);

//     echo $mensagem;

//     try{
        
//         // $mail->isSMTP(); 
//         // $mail->SMTPDebug = 2;
//         // $mail->Debugoutput = 'html';
//         // $mail->SMTPAuth   = true;                        // Manter em true
//         // $mail->Host       = 'mail.syncher.com.br';  // SEU HOST (HOSPEDAGEM)
//         // $mail->SMTPSecure = 'ssl';    //TLS OU SSL-VERIFICAR COM A HOSPEDAGEM
//         // $mail->Username   = 'contato@syncher.com.br';   //SEU USUÁRIO DE EMAIL
//         // $mail->Password   = '@Turner505';                   //SUA SENHA DO EMAIL SMTP password
//         // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;    //TLS OU SSL-VERIFICAR COM A HOSPEDAGEM
//         // $mail->Port       = 465;     //TCP PORT, VERIFICAR COM A HOSPEDAGEM
      
//         // $mail->SMTPOptions = array(
//         //     'ssl' => array(
//         //     'verify_peer' => false,
//         //     'verify_peer_name' => false,
//         //     'allow_self_signed' => true
//         //     )
//         // );                               
   
//         $mail->setFrom('contato@syncher.com.br', 'Amanda');  //DEVE SER O MESMO EMAIL DO USERNAME
//         $mail->addReplyTo('contato@syncher.com.br', 'Amanda');
//         $mail->addAddress('amandafaro@hotmail.com');     // QUAL EMAIL RECEBERÁ A MENSAGEM!            

//         $mail->isHTML(true);                                  // Set email format to HTML
//         $mail->Subject = ('Mensagem do Formulário'); //ASSUNTO
//         $mail->Body    = ($mensagem);  //CORPO DA MENSAGEM
//         $mail->AltBody = ($mensagem);  //CORPO DA MENSAGEM EM FORMA ALT

//         $mail->send();

//         echo 'teste';

//     }catch(Exception $e){
//         echo 'erro ' . $e->getMessage();
//     }
// 


//      Formulário
// =================================================== //

// campos


//      Email que chega até você
// =================================================== //


$para           = "amandafaroaf@gmail.com";
$assunto        = "Formulário Lead";
// $header         = $mensagem;

// // Função HTML :)
// $headers .= "MIME-Version: 1.0\r\n";
// $headers .= "Content-type: text/html;charset=utf-8\r\n";
// $headers .= "From: $nome <$email>\r\n";

//      Resposta que vai ao Cliente/Visitante
// =================================================== //

// $resp_assunto   = "Formulário Lead";
// $header2                = "
// Olá <b>$txt-nome</b>,
// <br><br>
// Obrigado pelo seu contato.<br>
// Recebemos sua solicitação e brevemente entraremos em contato.
// <br><br><br>

// ==============================================<br>
//         Atenciosamente,<br>
//         Ultragaz p20<br>
// ==============================================<br>
// ";

// // Função HTML
// $headers2 .= "MIME-Version: 1.0\r\n";
// $headers2 .= "Content-type: text/html; charset=utf-8\r\n";
// $headers2 .= "From: Ultragaz P20 <gabriel.msantos@ultragaz.com.br>\r\n";

// Envia para você
// mail($para, $assunto, $header, $headers);

$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

// Additional headers
$headers[] = 'To: Amanda <amandafaro@hotmail.com>, Amanda <amandafaroaf@gmail.com>';
$headers[] = 'From: Teste ' .$email;

// Mail it
mail($para, $assunto, $mensagem, implode("\r\n", $headers));

// Envia para quem preencheu o form
// mail($email, $resp_assunto, $header2,$headers2);

echo "enviou";

?>