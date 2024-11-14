<?php

namespace App\Service;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class PHPMailerService
{
    private $mailer;

    public function __construct(string $host, string $username, string $password, int $port)
    {
        $this->mailer = new PHPMailer(true);
        $this->mailer->isSMTP();
        $this->mailer->Host = $host;
        $this->mailer->SMTPAuth = true;
        $this->mailer->Username = $username;
        $this->mailer->Password = $password;
        $this->mailer->Port = $port;

        // Enable TLS encryption
        $this->mailer->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $this->mailer->SMTPKeepAlive = true;
        $this->mailer->isHTML(true);
    }

    public function sendMail(string $toEmail, string $toName, string $subject, string $body, string $altBody = '')
    {
        try {
            $this->mailer->setFrom('generalmanager@nextgame.games', 'Carolina Corredor');
            $this->mailer->addAddress($toEmail, $toName);
            $this->mailer->Subject = $subject;
            $this->mailer->msgHTML($body);
            $this->mailer->AltBody = $altBody;

            $this->mailer->send();
            return true;
        } catch (Exception $e) {
            error_log("PHPMailer error: " . $e->getMessage());
            return false;
        } finally {
            $this->mailer->clearAddresses();
            $this->mailer->clearAttachments();
        }
    }
}
