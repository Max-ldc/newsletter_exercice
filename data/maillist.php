<?php

class Email
{
    private string $email;

    //...

    public function getDomain(): string
    {
        $emailParts = explode('@', $this->email);
        return $emailParts[1];
    }
}

class SpamChecker
{
    private const SPAM_DOMAINS = ['youhou.com', 'mailinator.com', 'free.fr', 'hello.net'];

    public function isSpam(Email $email): bool
    {
        return array_search($email->getDomain(), self::SPAM_DOMAINS) !== false;
    }
}

var_dump($_POST);