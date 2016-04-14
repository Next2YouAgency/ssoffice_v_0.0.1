<?php
/*******************************************
DEFINIÇÃO DA BASE DE INFORMAÇÕES DO SISTEMA
*******************************************/
define("SITENAME","SS Office");
define("SITEDESC","Sistema para Gerenciamento de processos judiciais");
define("SITETAGS","Sistemas de Gerenciamento, Sistemas de Gerenciamento para advogados, Gerenciamento para advogados, Gerenciamento para advogado");

/*******************************************
DEFINIÇÃO DO SERVIDOR DE EMAILS
*******************************************/
define("MAILUSER","hugo.allnet@gmail.com");
define("MAILPASS","casolada13231010");
define("MAILPORT","587");
define("MAILHOST","smtp.gmail.com");

/*****************************
ENVIA O EMAIL
*****************************/	

function sendMail($assunto,$mensagem,$mensagemSemHTML,$remetente,$nomeRemetente,$destino,$nomeDestino, $reply = NULL, $replyNome = NULL){
	
	require 'mail/PHPMailerAutoload.php';

	$mail = new PHPMailer;

	//$mail->SMTPDebug = 3;                               // Enable verbose debug output

	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = MAILHOST;  							  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = MAILUSER;                 // SMTP username
	$mail->Password = MAILPASS;                           // SMTP password
	$mail->SMTPSecure = 'tsl';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = MAILPORT;                                    // TCP port to connect to

	$mail->setFrom(MAILUSER, SITENAME);
	$mail->addAddress($destino, $nomeDestino);     // Add a recipient
	$mail->addReplyTo($reply, $replyNome);

	$mail->isHTML(true);                                  // Set email format to HTML

	$mail->Subject = $assunto;
	$mail->Body    = $mensagem;
	$mail->AltBody = $mensagemSemHTML;

	if(!$mail->send()) {
		echo 'Message could not be sent.';
		echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
		return true;
	}
}