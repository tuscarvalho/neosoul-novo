<?php
    require_once('phpmailer/class.phpmailer.php'); //Chamando as classes phpmailer
    require 'phpmailer/class.smtp.php';

    // Tratativa de erros
    error_reporting(E_ALL);
    error_reporting(E_STRICT);
    date_default_timezone_set('America/Sao_Paulo');

    //Recebendo os dados do formulário

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];

    //Instanciando o PHPMAILER

    try{

    $mail = new PHPMailer(true);

    $mail->CharSet="UTF-8";

    //CORPO EMAIL
    $body = "";
    $body .="<h2>Email enviado através do Site NEOSOUL</h2>";
    $body .="<strong>Nome: </strong> $nome<br>";
    $body .="<strong>Email: </strong> $email<br>";
    $body .="<strong>Assunto: </strong> $assunto<br>";
    $body .="<strong>Mensagem</strong><br>";
    $body .= $mensagem;
    $body .= "<br>";
    $body .= "-------------------------------;";
    $body .= "<br>";
    $body .= "Enviado em <strong>".date("h:m:i d/m/Y")." por ".$_SERVER['REMOTE_ADDR']."</strong>";
    $body .= "<br>";
    $body .= "-------------------------------;";


    //INFORMAÇÕES PARA O SERVIDOR
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->Port = 587; //SMTP porta (as mais utilizadas são '25' e '587'

    $mail->Host = "smtp.neosoulsolucoes.com.br"; //SMTP Servidor
    $mail->Username = "projetos@neosoulsolucoes.com.br"; //SMTP Usuario
    $mail->Password = "agencianeosoul123#"; //SMTP Senha

    $mail->AddReplyTo($email,$nome); //Responder para...
    $mail->From = $email; //Email fornecido pelo cliente;
    $mail->FromName = $nome; //Nome fornecido pelo cliente;

    $to =  "projetos@neosoulsolucoes.com.br"; //Enviar para...
    $mail->AddAddress($to);
    $mail->Subject = "Contato via Site NEOSOUL"; //Assunto
    $mail->WordWrap = 80;

    $mail->MsgHTML($body);

    $mail->IsHTML(true);

    $mail->Send();

    echo "<script type='text/javascript'>
            alert('Mensagem enviada com sucesso!');
          </script>"; //retorno devolvido para o ajax caso sucesso
    echo "<script type='text/javascript'>window.location.href='index.php'; </script>";

    }catch(phpmailerException $e){
        echo $e->errorMessage(); //Retorno da mensagem de erro
    }

?>