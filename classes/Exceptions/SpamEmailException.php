<?php
require_once 'classes/Exceptions/NewsletterException.php';
require_once 'classes/NewsletterError.php';

class SpamEmailException extends NewsletterException
{
    public function __construct()
    {
        $this->code = NewslettorError::EMAIL_IS_SPAM;
    }
}