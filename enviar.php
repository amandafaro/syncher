<?php
$to = "amandafaro@hotmail.com, amandafaroaf@gmail.com";
$subject = "Formulário de Lead";

$nome=$_POST['nome'];
$telefone=$_POST['telefone'];
$site=$_POST['site'];
$empresa=$_POST['empresa'];
$email=$_POST['email'];
$servico=$_POST['servico'];
$msg=$_POST['mensagem'];
$date=date("d/m/Y");
$message= 'Esta mensagem foi enviada através do formulário<br><br>';
$message.='<b>Nome: </b>'.$nome.'<br>';
$message.='<b>Telefone:</b> '.$telefone.'<br>';
$message.='<b>E-Mail:</b> '.$email.'<br>';
$message.='<b>Site:</b> '.$site.'<br>';
$message.='<b>Serviço:</b> '.$servico.'<br>';
$message.='<b>Data de envio:</b> '.$date.'<br>';
$message.='<b>Informações adicionais:</b><br> '.$msg;

$message = "
<html>
<head>
<title>Formulário de Lead</title>
</head>
<body>

".$message."

</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <amandafaro@hotmail.com>' . "\r\n";
$headers .= 'Cc: amandafaro@hotmail.com' . "\r\n";

mail($to,$subject,$message,$headers);

header('Location: https://syncher.com.br/obrigado.html');

?>
