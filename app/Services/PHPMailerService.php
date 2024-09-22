<?php

namespace App\Services;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class PHPMailerService
{
    protected $mailer;

    public function __construct()
    {
        $this->mailer = new PHPMailer(true);

        // Server settings
        $this->mailer->isSMTP();
        $this->mailer->Host = env('smtp.gmail.com');
        $this->mailer->SMTPAuth = true;
        $this->mailer->Username = env('adolinendemba7@gmail.com');
        $this->mailer->Password = env( 'ddssefxqqcwfsrlr');
        $this->mailer->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $this->mailer->Port = 587;
    }

    public function send($to, $subject, $body)
    {
        try {
            // Recipients
            $this->mailer->setFrom(env( 'adolinendemba7@gmail.com '), env( 'Events'));
            $this->mailer->addAddress($to);

            // Content
            $this->mailer->isHTML(true);
            $this->mailer->Subject = $subject;
            $this->mailer->Body    = $body;

            $this->mailer->send();
            return true;
        } catch (Exception $e) {
            return false;
        }
    }
}