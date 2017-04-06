<?php
    require_once('phpmailer/class.phpmailer.php'); //Chamando as classes phpmailer
    require_once('phpmailer/class.smtp.php');

    // Tratativa de erros
    error_reporting(E_ALL);
    error_reporting(E_STRICT);
    date_default_timezone_set('America/Sao_Paulo');

    //Recebendo os dados do formulário

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $assunto = $_POST["assunto"];
    $mensagem = $_POST["mensagem"];


    //Instanciando o PHPMAILER

    try{

    $mail = new PHPMailer(true);

    $mail->CharSet="UTF-8";

    //CORPO EMAIL
        

    }catch(phpmailerException $e){
        echo $e->errorMessage(); //Retorno da mensagem de erro
    }



?>