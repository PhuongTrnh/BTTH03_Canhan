<?php
class EmailSender
{
    private $emailServer;

    public function __construct(EmailServerInterface $emailServer)
    {
        $this->emailServer = $emailServer;
    }

    public function send($to, $subject, $message): bool
    {
        return $this->emailServer->sendEmail($to, $subject, $message);
    }
}
