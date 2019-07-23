<?php

if(isset($_POST['email']) && !empty($_POST['email']){


$nome = addcslashes($_POST['nome']);
$email = addcslashes($_POST['email']);
$mensagem = addcslashes($_POST['mensagem']);

$to = "Fanimation.contato.site309.pedido@gmail.com"
$subject = "contato - Fanimation "
$body = "Nome: ".$nome. "\r\n".
        "E-mail: ".$email. "\r\n".
        "Mensagem: ".$mensagem. "\r\n".
$header = "From:Fanimation.contato.site309.pedido@gmail.com"."\r\n"."Replay-to!:".$email."\r\n"."X-Mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)){

    echo("Email enviado com sucesso!");
}else{
    echo("O email  não pode ser enviado!");
}

}

?>
