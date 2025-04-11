<?php

namespace App\Helpers;

use PHPMailer\PHPMailer\PHPMailer;

class EmailConfig
{
    static  function config($name, $mensaje): PHPMailer
    {
        
        $mail = new PHPMailer(true);
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP();
        $mail->Host = 'mail.smoconsultores.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'info@smoconsultores.com';
        $mail->Password = '5m0C0n5ul70r35';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;
        $mail->Subject = '' . $name . ', ' .$mensaje;
        $mail->CharSet = 'UTF-8';
        $mail->setFrom('info@smoconsultores.com', 'SMO Consultores');
        return $mail;
    }
}