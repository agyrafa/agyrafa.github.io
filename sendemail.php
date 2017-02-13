<?php

$mail_From = @trim(stripslashes($_POST['email']));
$name = @trim(stripslashes($_POST['name']));
$message = @trim(stripslashes($_POST['message']));
$mail_To = 'contato@agyrafa.com';
$mail_Subject = 'Contato - Site';
$mail_Body = '<br/>Nome: ' . $name . '<br/>E-mail: ' . $mail_From . '<br/>Mensagem: ' . $message;
//start $headers
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n"; //adds content type to headers
$headers .= $mail_From . "\r\n"; //adds the sender details
mail($mail_To,$mail_Subject,nl2br($mail_Body),$headers); //sends the email

die;

?>