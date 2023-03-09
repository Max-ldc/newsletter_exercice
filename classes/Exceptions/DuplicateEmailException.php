<?php
require_once 'classes/Exceptions/NewsletterException.php';
require_once 'classes/NewsletterError.php';

class DuplicateEmailException extends NewsletterException
{
    public function __construct()
    {
        $this->code = NewslettorError::EMAIL_ALREADY_IN;
    }
}