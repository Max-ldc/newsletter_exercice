<?php
require_once __DIR__ . '/classes/NewsletterError.php';

function redirect (string $location) : void
{
    header('Location: ' . $location);
    exit;
}

function getErrorMessage(int $code): string
{
    switch ($code) {
        case NewslettorError::EMAIL_REQUIRED:
        return "Merci de renseigner un email";
        break;

        case NewslettorError::EMAIL_ALREADY_IN:
        return "Cet email est déjà inscrit à la newsletter";
        break;

        case NewslettorError::EMAIL_INVALID:
        return "Le format de l'email est invalide";
        break;

        case NewslettorError::EMAIL_IS_SPAM:
        return "Cet email semble être un spam";
        break;
        
        default:
        return "Contactez l'administrateur de l'application";
    }
}

