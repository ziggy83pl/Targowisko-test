<?php

if(!isset($settings['base_url'])){
	die('Access denied!');
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer();

$mail->IsSMTP();
$mail->CharSet = "utf-8";
$mail->From = $settings['smtp_mail'];
$mail->FromName = $settings['title'];
$mail->Host = $settings['smtp_host'];
$mail->Mailer = "smtp";
$mail->Username = $settings['smtp_user'];
$mail->Password = $settings['smtp_password'];
$mail->SMTPAuth = true;
$mail->Port = $settings['smtp_port'];
$mail->SMTPSecure = $settings['smtp_secure'];
$mail->IsHTML(true);

$mail->smtpConnect(
    [
        "ssl" => [
            "verify_peer" => false,
            "verify_peer_name" => false,
            "allow_self_signed" => true
        ]
    ]
);
