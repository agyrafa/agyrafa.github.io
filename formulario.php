<?php

function Redirect($url, $permanent = false)
{
    if (headers_sent() === false)
    {
    	header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
    }

    exit();
}

$mail_From = $_POST['email'];
$mail_To = 'contact@agyrafa.com';
$mail_Subject = 'Contato - Site';
$mail_Body = '<br/>' . $_POST['comentarios'];
//start $headers
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n"; //adds content type to headers
$headers .= $mail_From . "\r\n"; //adds the sender details
mail($mail_To,$mail_Subject,nl2br($mail_Body),$headers); //sends the email
Redirect('http://www.agyrafa.com/', false);
